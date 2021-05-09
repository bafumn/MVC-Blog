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

    public function userValidate($user)
    {
        $usernameLen = iconv_strlen($user['username']);
        $passwordLen = iconv_strlen($user['password']);
        $email = filter_var($user['email'], FILTER_VALIDATE_EMAIL);
        if ($usernameLen < 3 || $usernameLen > 30) {
            $this->error = 'The username must be between 3 and 30 characters!';
            return false;
        } elseif (!$email) {
            $this->error = 'Incorrect email';
            return false;
        } elseif ($passwordLen < 5) {
            $this->error = 'The password must be more 5 characters!';
            return false;
        } elseif ($user['password'] != $user['confirmPsw']) {
            $this->error = 'Password mismatch';
            return false;
        }
        return true;
    }

    public function addUser($user)
    {
        $params = [
            'id' => NULL,
            'username' => $user['username'],
            'firstName' => $user['name'],
            'lastName' => $user['surname'],
            'email' => $user['email'],
            'password' => password_hash($user['password'], PASSWORD_DEFAULT),
        ];
        $this->db->query('INSERT INTO users VALUES (:id, :username, :firstName, :lastName, :email, :password)', $params);
    }
}