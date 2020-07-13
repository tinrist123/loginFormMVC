<?php

class Models_CateProductModel extends Models_DBConnection
{
    public $tableName = "detail";

    function getProductByCateId($cate_id)
    {
        $db = new Models_DBConnection();
        $db->tableName = "loaisanpham";
        $productName = $db->getProductRes($cate_id);
        $db->tableName = 'detail' . $productName;
        $data['listItem'] = $db->buildQueryParams([
            "select" => "id$productName,ten$productName,giaban,url_image,idloaisanpham",
            "other" => 'limit 10 offset 0'
        ])->select();

        if ($data['listItem']) {
            $data['productName'] = $productName;
            return $data;
        }
        return false;
    }

    function getProductByCateIdHasOffset($cate_id, $offset)
    {
        $db = new Models_DBConnection();
        $db->tableName = "loaisanpham";
        $productName = $db->getProductRes($cate_id);
        $db->tableName = 'detail' . $productName;

        $data = $db->buildQueryParams([
            "select" => "id$productName,ten$productName,giaban,url_image",
            "other" => 'limit 10 offset ' . (((int)$offset * 10) + 1)
        ])->select();

        if ($data)
            return $data;
        return false;
    }
}
