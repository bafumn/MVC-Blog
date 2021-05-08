<?php

namespace App\Models;

use App\Core\Model;

class Category extends Model
{
    public function getCategories()
    {
        return $this->db->getAll('SELECT * FROM categories');
    }

    public function getCategory($id)
    {
        return $this->db->getRow('SELECT * FROM categories WHERE (id = :id) OR (name = :id)', ['id' => $id]);
    }

    public function categoryValidate($category)
    {
        if (iconv_strlen($category['name']) <= 2) {
            $this->error = 'The name must be more 2 characters!';
            return false;
        }
        return true;
    }

    public function addCategory($category)
    {
        $params = [
            'id' => NULL,
            'name' => $category['name'],
            'count' => 1
        ];
        $this->db->query('INSERT INTO categories VALUES (:id, :name, :count)', $params);
    }

    public function updateCategory($category)
    {
        $params = [
            'id' => $category['id'],
            'name' => $category['name'],
        ];
        $this->db->query('UPDATE categories SET name = :name WHERE id = :id', $params);
    }

    public function deleteCategory($category)
    {
        $this->db->query('DELETE FROM categories WHERE id = :id', ['id' => $category['id']]);
    }
}