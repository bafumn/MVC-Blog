<?php

namespace App\Models;

use App\Core\Model;

class User extends Model
{
    public function login()
    {
        $login = !empty(trim($_POST['login'])) ? trim($_POST['login']) : null;
        $password = !empty(trim($_POST['password'])) ? trim($_POST['password']) : null;
        if ($login && $password) {
            $params = [
                'login' => $login,
                'password' => $password
            ];
            $user = $this->db->getRow('SELECT id, username, password FROM users WHERE username = :login OR email = :login AND password = :password', $params);
            if ($user) {
                if(password_verify($password, $user['password'])) {
                    foreach ($user as $k => $v) {
                        if ($k != 'password') $_SESSION['admin'][$k] = $v;
                    }
                    return true;
                }
            }
        }
        return false;
    }
}