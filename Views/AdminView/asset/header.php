<!DOCTYPE html>
<html lang="en">
<?php
$router = new bootstraps_router();
if (isset($_SESSION['idAdmin'])) {
    $db = new Models_DBConnection();

    $taikhoanAdmin = new Models_User_taikhoan();
    $adminInfor = $taikhoanAdmin->showInforAdmin($_SESSION['idAdmin']);
}

?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./styleCSS/loginAdminStyle.css" />
    <link rel="stylesheet" href="./styleCSS/adminstyle.css" />

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <title>Document</title>
</head>

<body>