<?php

namespace App\Core;

use App\Components\Db;

class Model
{
    public $db;
    public function __construct()
    {
        $this->db = new Db();
    }
}