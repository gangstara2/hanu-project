<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 13/09/2016
 * Time: 11:55 CH
 */
namespace Administration\Models;

use Library\Core\Model as MainModel;

class Profile extends MainModel
{
    protected $table = 'profile';
    protected $primary = 'id';

    public function __construct($co)
    {
        parent::__construct($co);
    }

    public function insertProfile($post, $userId)
    {
        return $this->insert(array(
            'user_id' => $userId,
            'full_name' => $post['fullname'],
            'gender' => $post['gender'],
            'phone' => $post['phone'],
            'address' => $post['address'],
            'email' => $post['email'],
            'city' => $post['city'],
            'birthday' => date('Y-m-d', strtotime($post['birthday'])),
            'country' => $post['country'],
            'active' => isset($post['active']) ? $post['active'] : 1,
            'created' => date("Y:m:d H:i:s"),
        ));
    }
}