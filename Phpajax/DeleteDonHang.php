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
                $iddathang = $product->iddathang;

                $order = new Models_Order();
                $order->DeleteOrder($iddathang);
                if ($order)
                    $countItemDeleted++;
            }
        }
        if ($countItemDeleted == count($dataClient)) echo 1;
    }
}
