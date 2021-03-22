<?php

namespace App\Components;

use \PDO;

class Db
{
    public $db;

    public function __construct()
    {
        $this->connect();
    }

    public function connect()
    {
        $config = require_once 'app/config/db.php';
        $dsn = 'mysql:host=' . $config['host'] . ';dbname=' . $config['db_name'] . ';charset=' . $config['charset'];
        $this->db = new PDO($dsn, $config['username'], $config['password']);
        return $this->db;
    }

    public function query($sql, $params = [])
    {
        $stmt = $this->db->prepare($sql);
        if (!empty($params)) {
            foreach ($params as $key => $val) {
                if (is_int($val)) {
                    $type = PDO::PARAM_INT;
                } else {
                    $type = PDO::PARAM_STR;
                }
                $stmt->bindValue(':'.$key, $val, $type);
            }
        }
        $stmt->execute();
        return $stmt;
    }

    public function getAll($sql, $params = [])
    {
        $result = $this->query($sql, $params);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getRow($sql, $params = [])
    {
        $result = $this->query($sql, $params);
        return $result->fetch(PDO::FETCH_ASSOC);
    }

    public function getColumn($sql, $params = [])
    {
        $result = $this->query($sql, $params);
        return $result->fetchColumn();
    }

    public function getLastInsertId()
    {
        return $this->db->lastInsertId();
    }
}