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
}