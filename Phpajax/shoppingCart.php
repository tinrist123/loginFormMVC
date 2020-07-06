<?php
// echo "<pre>";
// var_dump($_POST);
// die();
session_start();
// unset($_SESSION['cart']);
// die();

function formatStringtoPrice($strPrice)
{
    $strPrice = str_replace(',', '', $strPrice);
    $strPrice = str_replace('.', '', $strPrice);
    $strPrice = str_replace('VNĐ', "", $strPrice);
    $strPrice = str_replace('₫', "", $strPrice);
    return trim($strPrice);
}
if (isset($_POST['dataCome'])) {

    $category = $_POST['product_category'];
    $id = $_POST['product_id'];
    $name = $_POST['product_name'];
    $price = formatStringtoPrice($_POST['product_price']);
    $image = $_POST['product_image'];

    $productAdded = [
        // "product_category" => $category,
        "product_id" => $id,
        "product_name" => $name,
        "product_price" => $price,
        "product_quantity" => 1,
        "product_image" => $image
    ];

    $_SESSION['errorCart'] = "";

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
    // unset($_SESSION['cart']);
    $ListProductByCate = $_SESSION['cart'];
    $totalQuantityProduct = 0;
    // echo "<pre>";
    // print_r($_SESSION['cart']);
    foreach ($ListProductByCate as $product) {
        foreach ($product as $minProduct) {
            $totalQuantityProduct += $minProduct['product_quantity'];
        }
    }
    echo $totalQuantityProduct;
}
