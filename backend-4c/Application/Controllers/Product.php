<?php
/**
 * This source code may regarded as a mini PHP framework designed with MVC pattern
 * providing basic CRUD method and some useful components.
 * @author Phan Thế Minh
 * Date: 8/9/2016
 * @copyright Copyright (c) 2016 by Phan Thế Minh - 4C13 Hanoi University, all rights reserved.
 * @version 1.0.0.2
 */

namespace Application\Controllers;

use Application\Controllers\AppController as MainController;


class Product extends MainController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function indexAction()
    {
        $params = $_GET['action'];
        global $connection;
        $co = $connection->getCo();
        $productModel = new \Administration\Models\Product($co);
        $result = $productModel->fetchByClause(" left join product_detail as pdetail on pdetail.product_id = product.id  join company on company.id = product.company_id  where product.params = '$params' ", " pdetail.*, product.*, company.com_name as cname, company.id as cid ");
//        var_dump($result);
        $result = $result[0];
        $id = $result->id;
        $collectionModel = new \Administration\Models\ProductCollection($co);
        $collection = $collectionModel->fetchByClause(" join category on category.id = product_collection.category_id where product_collection.product_id = $id ", " product_collection.category_id, category.cat_name  ");
//        var_dump($collection);
        $imageModel = new \Administration\Models\Image($co);
        $images = $imageModel->fetchAll(" product_id = $id ");
//        var_dump($images);
        $this->addDataView(array(
            'viewTitle' => 'Sản Phẩm',
            'viewSiteName' => 'Chi tiết',
            'product' => $result,
            'category' => $collection,
            'images' => $images
        ));
    }

    public function listAction()
    {
        echo 'updating...';
    }
}