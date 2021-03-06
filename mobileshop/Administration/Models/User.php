<?php
/***
 * A mini PHP framework designed with MVC pattern providing basic CRUD method and some useful components.
 * @author Phan Thế Minh
 * @copyright Copyright (c) 2016 by Phan Thế Minh - 4C13 Hanoi University, all rights reserved.
 * @version 1.0.0.2
 * Created by PhpStorm.
 * User: Phan Minh
 * Date: 13/09/2016
 * Time: 11:37 CH
 */

namespace Administration\Models;

use Library\Core\UserModel;
use Library\Core\Model as MainModel;

class User extends MainModel implements UserModel
{
    protected $table = 'user';
    protected $primary = 'id';

    public function __construct($co)
    {
        parent::__construct($co);
    }


    public function insertUser($post)
    {
        return $this->insert(array(
            'username' => $post['username'],
            'password' => $this->blowfishHasher($post['password']),
            'token' => md5(uniqid() . time()), //create random token
            'id_role' => isset($post['role']) ? $post['role'] : 4,
            'created' => date("Y:m:d H:i:s"),
            'active' => 1,
        ));
    }


    public function getUserLogin($login, $password)
    {
        $result = $this->fetchAll("user.username= '$login'");
        foreach ($result as $k => $v) {
            if ($this->validHasher($password, $result[$k]->password)) {
                return $result[$k];
                break;
            }
        }
        return null;
    }

    /**
     * @param int $id
     * @param string $old
     * @param string $new
     * @param string $renew
     * @return mixed
     */
    public function updatePassword($id, $old, $new, $renew)
    {
        $user = $this->findById($id);
        if ($new === $renew) {
            if ($this->validHasher($old, $user[0]->password)) {
                if ($this->update(['password' => $this->blowfishHasher($new)], "id = $id")) {
                    return true;
                } else {
                    return 'Xảy ra lỗi khi cập nhật mật khẩu';
                }
            } else {
                return 'Mật khẩu cũ không đúng';
            }
        } else {
            return 'Mật khẩu mới không trùng khớp';
        }
    }


    public function retrieveLoginByToken($token)
    {
        $result = $this->fetchAll("token= '$token'");
        return isset($result[0]) ? $result[0] : null;
    }


    public function updateToken($token, $id)
    {
        return $this->update(array(
            'token' => isset($token) ? $token : null
        ),
            ' id = ' . $id);
    }


    public function updateLastLogin($time, $id)
    {
        return $this->update(array(
            'last_login' => isset($time) ? $time : ''
        ), ' id = ' . $id);
    }

    public function modifyUser($post, $id)
    {
        return $this->update(array(
            "username" => $post['username'],
            'id_role' => isset($post['role']) ? $post['role'] : 4,
            'active' => isset($post['active']) ? 1 : 0,
        ), 'id = ' . $id);
    }

    public function getUserByUsername($username)
    {
        return $this->fetchAll("username= '$username' ");
    }
}