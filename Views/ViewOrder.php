<?php
require_once './Views/HeaderAndFooter/header.php';
$router = new bootstraps_router();
// echo "<pre>";
// print_r($_SESSION['cart']);
?>

<head>
    <link rel="stylesheet" href="./styleCSS/style.css">
    <link rel="stylesheet" href="./styleCSS/detailProduct.css">
    <link rel="stylesheet" href="./styleCSS/cart.css">
</head>

<!-- Insert Code Here !!!!!!!!!!!!!!!!!!! -->
<main>

    <h1 style="text-align: center; color: red;"></h1>
    <section class="name">
        <h2 class="name__title">
            Giỏ hàng
        </h2>
    </section>
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <div class="contentOrder">
                        <p>Tên sản phẩm</p>
                    </div>
                    <div class="contentOrder">
                        <p>Giá tiền</p>
                    </div>
                    <div class="contentOrder">
                        <p>Địa Chỉ Giao</p>
                    </div>
                    <div class="contentOrder">
                        <p>Ngày Đặt</p>
                    </div>
                    <div class="contentOrder">
                        <p>Trạng Thái</p>
                    </div>
                </div>
                <?php foreach ($data as $order) : ?>
                    <div class="col-auto">
                        <div class="about__img">
                            <p><?php echo $order['tensanpham']; ?></p>
                        </div>
                        <div class="about__name">
                            <p><?php echo $order['giasanpham']; ?></p>
                        </div>
                        <div class=" about__sl swidthmore">
                            <p><?php echo "{$order['diachi']}, {$order['xa']},{$order['huyen']},{$order['thanhpho']}"; ?></p>
                        </div>
                        <div class="about__gia">
                            <p><?php echo $order['ngaydat']; ?></p>
                        </div>
                        <div class="about__xoa">
                            <p>Chưa Giao </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section>
    <section class="pay">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="button">
                        <a style="font-size:20px; color:blue;" href="<?php echo $router->createUrl('Views/HomePage'); ?>">Về Trang Chủ
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>





<script src="./ExecuteJS/slide.js"></script>
<script src="./ExecuteJS/dropRight.js"></script>
<script src="./ExecuteJS/ajaxBtnXoa.js"></script>
<script src="./ExecuteJS/ajaxQuantityChange.js"></script>


<?php
require_once './Views/HeaderAndFooter/footer.php';
?>