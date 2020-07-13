<?php

class Controllers_Admin_AdminViewController extends Controllers_baseController
{
    protected $category;

    function __construct($cate)
    {
        $this->category = $cate;
    }
    function ViewProduct()
    {
        $ProductModel = new Models_CateProductModel();

        $listProduct = $ProductModel->getProductByCateId($this->category);
        $this->redirectView('AdminView/product', $listProduct);
    }
}
