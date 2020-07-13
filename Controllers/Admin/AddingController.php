<?php

class Controllers_Admin_AddingController extends Controllers_baseController
{
    protected $cate_id;

    function __construct($cate)
    {
        $this->cate_id = $cate;
    }

    public function ViewAddingProduct()
    {
        $db = new Models_DBConnection();

        $db->tableName = "loaisanpham";
        $productName = $db->getProductRes($this->cate_id);
        $tempName = ucfirst($productName);
        $this->redirectView("AdminView/Adding{$tempName}View");
    }
}
