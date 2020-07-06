<?php
session_start();
if (isset($_POST['data_Come'])) {
    $product_cate = $_POST['product_Category'];
    $product_id = $_POST['product_Id'];
    $product_quantity = $_POST['product_Quantity'];
    $total = 0;

    $_SESSION['cart'][$product_cate][$product_id]['product_quantity'] = $product_quantity;
    $product_price = $_SESSION['cart'][$product_cate][$product_id]['product_price'];

    $listCart = $_SESSION['cart'];
    foreach ($listCart as $product) {
        foreach ($product as $item) {
            $total += (int) $item['product_price'] * (int) $item['product_quantity'];
        }
    }
    // echo "<pre>";
    // var_dump($_SESSION['cart']);
    echo number_format($total) . "||" . $product_price;
}
