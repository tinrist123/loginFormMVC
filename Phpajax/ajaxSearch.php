<?php

require_once '../bootstraps/bootstraps.php';

$laptop = new Models_Laptop();
$router = new bootstraps_router();


if (isset($_POST['input'])) {
    $input = "%" . $_POST['input'] . "%";
    $rand = rand(0, 31);

    $data = $laptop->UnionAllDetail($input);

    $index = 0;
    foreach ($data as $row) {
        $ViewList = [
            1 => "viewLaptop",
            2 => "viewSSD",
            3 => "viewHDD",
            4 => "viewMonitor",
            5 => "viewChuot"
        ];
        $cate = $row['idloaisanpham'];
        $url_image = $row['url_image'];
        $ten = $row['ten'];
        $giaban = $row['giaban'];
        $idlaptop = $row['id'];
        $temp = 'images/icon-cart.png';
        $link =
            $router->searchBtnLink('./Controllers/index', ['action' => $ViewList[$cate], 'id' => $idlaptop, 'controller' => 'View', 'method' => 'ViewProduct']);

        $ajaxComeBack[$index] = [
            "product_name" => $ten,
            "product_price" => $giaban,
            "url_image" => $url_image,
            "linkProduct" => $link
        ];
        $index++;
    }
    // mysqli_stmt_close($stmt);
    // mysqli_close($conn);
    echo json_encode($ajaxComeBack);
}
