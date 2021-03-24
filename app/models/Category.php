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

}