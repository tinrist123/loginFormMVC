<?php
require_once '../bootstraps/bootstraps.php';

$db = new Models_DBConnection();

if (isset($_POST)) {
    if (isset($_POST['json'])) {
        $countItemDeleted = 0;
        $dataClient = json_decode($_POST['json']);
        if ($dataClient) {
            foreach ($dataClient as $product) {
                $idkhachhang = $product->idkhachhang;
                $idtaikhoan = $product->iddathang;

                $order = new Models_User_taikhoan();
                $order->DeleteTaiKhoan($idtaikhoan);
                if ($order)
                    $countItemDeleted++;
                $order = new Models_KhachHang();
                $order->DeleteKhachHang($idkhachhang);
                if ($order)
                    $countItemDeleted++;
            }
        }
        if ($countItemDeleted / 2 == count($dataClient)) echo 1;
    }
}
