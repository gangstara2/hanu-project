<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 21/09/2016
 * Time: 2:15 CH
 */
namespace Administration\Models;

use Library\Core\Model as MainModel;
use Library\Core\ProductModel;

class Product extends MainModel implements ProductModel
{
    protected $table = 'product';
    protected $primary = 'id';

    public function __construct($co)
    {
        parent::__construct($co);
    }

    public function insertProduct($post)
    {
<<<<<<< H
        // TODO: Implement insertProduct() method.

=======
        return $this->insert(array(
            'category_id' => $post['category_id'],
            'company_id' => $post['company_id'],
            'title' => $post['title'],
            'params' => $post['params'],
            'price' => $post['price'],
            'detail' => $post['detail'],
            'type' => $post['type'],
            'sale' => $post['sale'],
            'tags' => $post['tags'],
            'view' => $post['view'],
            'created' => date("Y:m:d H:i:s"),
            'active' => isset($post['active']) ? $post['active'] : 1,
            'manufactured_date' => date("Y:m:d H:i:s"),
        ));
>>>>>>> b3f4034aad7d32271ad937fbfc168bf2eaf9c3c8
    }

    public function modifyProduct($post, $id)
    {
        // TODO: Implement modifyProduct() method.
    }
}