<?php
require_once './Views/HeaderAndFooter/header.php';
$router = new bootstraps_router();

?>

<head>
    <link rel="stylesheet" href="./styleCSS/style.css">
    <link rel="stylesheet" href="./styleCSS/detailProduct.css">
</head>

<!-- Insert Code Here !!!!!!!!!!!!!!!!!!! -->
<?php
if (isset($_SESSION['error'])) {
    if ($_SESSION['error'] == "empty") {
        $_SESSION['error'] == "";
    }
}
?>
<div class="success">
    <div class="container">
        <span>Đặt Hàng Thành Công<a href="<?php echo $router->createUrl('Views/HomePage') ?>">Back To HomePage</a></span>
    </div>

</div>




<script src="./ExecuteJS/slide.js"></script>
<script src="./ExecuteJS/dropRight.js"></script>


<?php
require_once './Views/HeaderAndFooter/footer.php';
?>