<?php

namespace App\Models;

use App\Core\Model;

class Post extends Model
{
    public function getPosts($start = 0, $max = 10)
    {
        $params = [
            'start' => $start,
            'max' => $max
        ];
        return $this->db->getAll('SELECT * FROM posts ORDER BY id DESC LIMIT :start, :max', $params);
    }
    public function getPostById($id)
    {
        return $this->db->getRow('SELECT * FROM posts WHERE id = :id', ['id' => $id]);
    }

}