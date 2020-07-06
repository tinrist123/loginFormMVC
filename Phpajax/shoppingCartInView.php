<?php
require_once '../bootstraps/bootstraps.php';

function formatStringtoPrice($strPrice)
{
    $strPrice = str_replace(',', '', $strPrice);
    $strPrice = str_replace('.', '', $strPrice);
    $strPrice = str_replace('VNĐ', "", $strPrice);
    $strPrice = str_replace('₫', "", $strPrice);
    return trim($strPrice);
}

if (isset($_POST)) {
    $idProduct = $_POST['product_id'];
    $cate = $_POST['product_cate'];

    $db = new Models_DBConnection();

    $db->tableName = "loaisanpham";

    $tableQuery = $db->buildQueryParams([
        "select" => "tenmaloaisanpham",
        "where" => "idmaloaisanpham = :id",
        "params" => [':id' => $cate]
    ])->selectOne()['tenmaloaisanpham'];
    $db->tableName = "detail" . $tableQuery;

    $data = $db->buildQueryParams([
        "select" => "id" . $tableQuery . ",ten" . $tableQuery . ",giaban,url_image",
        "where" => "id" . $tableQuery . " = :id",
        "params" => [':id' => $idProduct]
    ])->selectOne();


    if ($data) {
        session_start();
        $category = $cate;
        $id = $idProduct;
        $name = $data['ten' . $tableQuery];
        $price = formatStringtoPrice($data['giaban']);
        $image = $data['url_image'];

        $productAdded = [
            // "product_category" => $category,
            "product_id" => $id,
            "product_name" => $name,
            "product_price" => $price,
            "product_quantity" => 1,
            "product_image" => $image
        ];

        if (isset($_SESSION['cart'])) {
            if (isset($_SESSION['cart'][$category])) {
                $ListCartByCate = $_SESSION['cart'][$category];
                $list_product_id = array_column($ListCartByCate, "product_id");

                if (in_array($id, $list_product_id)) {
                    $_SESSION['cart'][$category][$id]['product_quantity']++;
                } else {
                    $_SESSION['cart'][$category][$id] = $productAdded;
                }
            } else {
                $_SESSION['cart'][$category][$id] = $productAdded;
            }
        } else {
            $_SESSION['cart'][$category][$id] = $productAdded;
        }
        $ListProductByCate = $_SESSION['cart'];
        $totalQuantityProduct = 0;
        // echo "<pre>";
        // print_r($_SESSION['cart']);
        foreach ($ListProductByCate as $product) {
            foreach ($product as $minProduct) {
                $totalQuantityProduct += $minProduct['product_quantity'];
            }
        }
        $router = new bootstraps_router();

        $link = $router->createUrl('Views/ViewCart');

        echo $totalQuantityProduct . "||" . $link;
    }
}
