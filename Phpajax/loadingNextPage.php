<?php

$db = new Models_DBConnection();
$ajaxComeBack;

if (isset($_POST['id'])) {
    $pageNumber = $_POST['id'];


    $sql = "SELECT idlaptop,tenlaptop,giaban,url_image FROM detaillaptop limit 10 offset " . ((int) $pageNumber * 10 + 1);

    $stmt = mysqli_stmt_init($conn);

    if (mysqli_stmt_prepare($stmt, $sql)) {
        if (mysqli_stmt_execute($stmt)) {
            $data = mysqli_stmt_get_result($stmt);
            $index = 0;
            while ($row = $data->fetch_assoc()) {
                $url_image = $row['url_image'];
                $tenlaptop = $row['tenlaptop'];
                $giaban = $row['giaban'];
                $idlaptop = $row['idlaptop'];
                $temp = 'images/icon-cart.png';
                $ajaxComeBack[$index] = [
                    "product_id" => $idlaptop,
                    "product_name" => $tenlaptop,
                    "product_price" => $giaban,
                    "url_image" => $url_image
                ];
                $index++;
            }
        }
    }
}
echo json_encode($ajaxComeBack);
