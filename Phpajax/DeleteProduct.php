<?php
require_once '../bootstraps/bootstraps.php';

$db = new Models_DBConnection();

if (isset($_POST)) {
    if (isset($_POST['json'])) {
        $countItemDeleted = 0;
        $dataClient = json_decode($_POST['json']);
        if ($dataClient) {
            foreach ($dataClient as $product) {
                $cate_id = $product->cate_id;
                $idProduct = $product->id;
                $productName = $db->getProductRes($cate_id);

                $db->tableName = 'detail' . $productName;

                $result = $db->buildQueryParams([
                    'where' => "id$productName = :id",
                    'params' => [':id' => $idProduct]
                ])->delete();
                if ($result) $countItemDeleted++;
            }
        }
        if ($countItemDeleted == count($dataClient)) echo 1;
    }
}
