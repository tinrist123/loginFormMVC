<?php
require_once '../bootstraps/bootstraps.php';

if (isset($_POST['idkhachhang'])) {
    $idkhachhang = $_POST['idkhachhang'];
    $db = new Models_DBConnection();
    $CTDH = new Models_CTDH();
    $data = $CTDH->getProductWithIdUser($idkhachhang);
    $listUrl = array();
    foreach ($data as $product) {
        $url_image = $CTDH->GetImgProductForOrder($product['idloaisanpham'], $product['idsanphammua']);
        foreach ($url_image as $value) {
            $listUrl[] = $value['url_image'];
        }
    }
    echo json_encode($data) . "||" . json_encode($listUrl);
}
