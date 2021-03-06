<?php
/***
 * A mini PHP framework designed with MVC pattern providing basic CRUD method and some useful components.
 * @author Phan Thế Minh
 * @copyright Copyright (c) 2016 by Phan Thế Minh - 4C13 Hanoi University, all rights reserved.
 * @version 1.0.0.2
 * Created by PhpStorm.
 * User: MyPC
 * Date: 13/09/2016
 * Time: 11:55 CH
 */
namespace Administration\Models;

use Library\Core\Model as MainModel;

class Company extends MainModel
{
    protected $table = 'company';
    protected $primary = 'id';

    public function __construct($co)
    {
        parent::__construct($co);
    }

    public function insertCompany($post)
    {
        return $this->insert(array(
            'com_name' => $post['com_name'],
            'params' => $this->slugify(date("Y-m-d H:i:s") . '-' . $post['com_name']),
            'position' => !empty($post['position']) ? $post['position'] : 0,
            'active' => 1,
            'created' => date("Y-m-d H:i:s")
        ));
    }

    public function updateCompany($post, $id)
    {
        return $this->update(array(
            'com_name' => $post['com_name'],
            'position' => !empty($post['position']) ? $post['position'] : 0,
            'active' => !empty($post['active']) ? 1 : 0,
            'params' => $this->slugify($post['params'])
        ), " id = '$id' ");
    }


}