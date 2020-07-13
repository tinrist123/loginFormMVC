<?php
require_once '../bootstraps/bootstraps.php';

$db = new Models_DBConnection();
$ajaxComeBack;
if (isset($_POST['numPage'])) {
    $pageNumber = $_POST['numPage'];
    $cate_id = $_POST['cate_id'];

    $CategoryProduct = new Models_CateProductModel();
    $productName = $db->getProductRes($cate_id);
    $data = $CategoryProduct->getProductByCateIdHasOffset($cate_id, $pageNumber);
}
echo $productName . "||" . json_encode($data);
