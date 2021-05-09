<?php

namespace App\Models;

use App\Core\Model;

class Post extends Model
{
    const SHOW_BY_DEFAULT = 10;

    public function getLatestPosts($route)
    {
        $params = [
            'offset' => (($route['page'] ?? 1) - 1) * self::SHOW_BY_DEFAULT,
            'max' => self::SHOW_BY_DEFAULT
        ];
        return $this->db->getAll('SELECT posts.*, categories.name AS category_name FROM posts JOIN categories ON posts.category_id = categories.id ORDER BY created_at DESC LIMIT :max OFFSET :offset', $params);
    }

    public function getPostById($id)
    {
        return $this->db->getRow('SELECT posts.*, categories.name AS category_name FROM posts JOIN categories ON posts.category_id = categories.id WHERE posts.id = :id', ['id' => $id]);
    }

    public function countAllPosts()
    {
        return $this->db->getColumn('SELECT count(*) AS count FROM posts');
    }

    public function countPostsInCategory($category_id)
    {
        return $this->db->getColumn('SELECT count(id) AS count FROM posts WHERE category_id = :id', ['id' => $category_id]);
    }

    public function getPostsByCategory($category_id, $route)
    {
        $params = [
            'id' => (int)$category_id,
            'offset' => (($route['page'] ?? 1) - 1) * self::SHOW_BY_DEFAULT,
            'max' => self::SHOW_BY_DEFAULT
        ];
        return $this->db->getAll('SELECT * FROM posts WHERE category_id = :id ORDER BY id DESC LIMIT :max OFFSET :offset', $params);
    }

    public function postValidate($post)
    {
        $titleLen = iconv_strlen($post['title']);
        $descLen = iconv_strlen($post['description']);
        $textLen = iconv_strlen($post['editor']);
        if ($titleLen < 3 || $titleLen > 100) {
            $this->error = 'The title must be between 3 and 100 characters!';
            return false;
        } elseif ($post['category'] < 1) {
            $this->error = 'No category selected!';
            return false;
        } elseif ($descLen < 10 || $descLen > 100) {
            $this->error = 'The description must be between 10 and 100 characters!';
            return false;
        } elseif ($textLen < 10 || $textLen > 5000) {
            $this->error = 'The text must be between 10 and 5000 characters!';
            return false;
        }
        return true;
    }

    public function addPost($post)
    {
        $params = [
            'id' => NULL,
            'title' => $post['title'],
            'author_id' => $_SESSION['admin']['id'],
            'category_id' => $post['category'],
            'created_at' => strtotime('now'),
            'description' => $post['description'],
            'content' => $post['editor'],
        ];
        $this->db->query('UPDATE categories SET count = count + 1 WHERE id = :id', ['id' => $post['category']]);
        $this->db->query('INSERT INTO posts VALUES (:id, :title, :author_id, :category_id, :created_at, :description, :content)', $params);
        return $this->db->getLastInsertId();
    }

    public function updatePost($post)
    {
        $params = [
            'id' => $post['id'],
            'title' => $post['title'],
            'category_id' => $post['category'],
            'description' => $post['description'],
            'content' => $post['editor'],
        ];
        $this->db->query('UPDATE posts SET title = :title, category_id = :category_id, description = :description, content = :content WHERE id = :id', $params);
    }

    public function deletePost($post)
    {
        $this->db->query('DELETE FROM posts WHERE id = :id', ['id' => $post['id']]);
        $this->db->query('UPDATE categories SET count = count - 1 WHERE id = :id', ['id' => $post['category_id']]);
    }

    public function postUploadImage($path, $id)
    {
        $img = new \Imagick($path);
        $img->cropThumbnailImage(1110, 350);
        $img->setCompressionQuality(80);
        $img->writeImage(ROOT . '/public/uploads/img/' . $id . '.jpg');
    }

    public function postDeleteImage($path)
    {
        if (file_exists($path)) {
            unlink($path);
        }
    }
}