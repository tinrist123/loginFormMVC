<?php
session_start();


if (isset($_POST['dataCome'])) {
    if ($_POST['dataCome'] == 1) {
        $product_category = $_POST['cate'];
        $idItemDelete = $_POST['id'];
        $list_product_id = array_column($_SESSION['cart'][$product_category], "product_id");

        $listItemCart = $_SESSION['cart'];
        if (in_array($idItemDelete, $list_product_id)) {
            unset($_SESSION['cart'][$product_category][$idItemDelete]);
            if ($_SESSION['cart'][$product_category] == null) {
                unset($_SESSION['cart'][$product_category]);
            }
        }

        $listItemCart = $_SESSION['cart'];
        $countItem = 0;
        $totalPrice = 0;
        foreach ($listItemCart as $Bigproduct) {
            foreach ($Bigproduct as $product) {
                $totalPrice += (int) $product['product_price'] * (int) $product['product_quantity'];
                $countItem += (int) $product['product_quantity'];
            }
        }
    }
}

echo $totalPrice . '||' . $countItem;
