<?php
require_once './Views/HeaderAndFooter/header.php';
$router = new bootstraps_router();

?>

<head>
    <link rel="stylesheet" href="./styleCSS/style.css">
    <link rel="stylesheet" href="./styleCSS/payment.css">
</head>

<!-- Insert Code Here !!!!!!!!!!!!!!!!!!! -->
<?php
// var_dump($_SESSION['tempInfoUser']);
?>
<section class="payment">
    <div class="container">
        <div class="title" style="text-align: center; color: red;">
            <h2>
                <?php
                if (isset($_SESSION['error'])) {
                    if ($_SESSION['error'] == "empty") {
                        echo "Vui lòng tick vào ô thanh toán";
                    }
                }
                ?>
            </h2>
        </div>
        <div class="row">
            <div class="col-auto">
                <div class="payment_method">
                    <div class="payment__info">
                        <div class="main__header">
                            <a href="https://www.h2gaming.vn/" class="logo" target="_self">
                                <h1 class="logo__text">H2gaming.vn</h1>
                            </a>
                            <ul class="info__link">
                                <li class="link__cart">
                                    <a href="">Giỏ hàng</a>
                                </li>
                                <li class="info__cartlink__payment">
                                    <a href="">Thông tin giỏ hàng</a>
                                </li>
                                <li class="link__payment">
                                    Phương thức thanh toán
                                </li>
                            </ul>
                        </div>
                        <?php
                        $paymentName = new Models_PhuongThucThanhToan();
                        $listNamePayment = $paymentName->getNameThanhToan();

                        $data = $listNamePayment;
                        ?>
                        <div class="main">
                            <form action="<?php echo $router->createUrl('Controllers/index', ['controller' => 'DatHang', 'method' => 'InsertDonHang']); ?>" class="main_payment" method="POST">
                                <div class="main__shipping">
                                    <h3>Phương thức vận chuyển</h3>
                                    <label for="shipping" class="shipping">
                                        <input type="checkbox" checked name="autoship" id="shipping">Giao hàng tận nơi <br>
                                    </label>
                                </div>
                                <div class="main__payment__method">
                                    <h3>Phương thức thanh toán</h3>

                                    <div class="content__box">
                                        <?php foreach ($data as $value) : ?>

                                            <label for="payment" class="payment__COD">
                                                <input type="radio" name="shipping" id="payment__COD" value="<?php echo $value['idthanhtoan']; ?>" required><?php echo $value['tenloaithanhtoan']; ?><br>
                                            </label>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <div class="payment__click">
                                    <a href="<?php echo $router->createUrl('Views/info_pay') ?>">
                                        <svg class="previous-link-icon icon-chevron icon" xmlns="http://www.w3.org/2000/svg" width="6.7" height="11.3" viewBox="0 0 6.7 11.3">
                                            <path d="M6.7 1.1l-1-1.1-4.6 4.6-1.1 1.1 1.1 1 4.6 4.6 1-1-4.6-4.6z">
                                            </path>
                                        </svg>
                                        Quay lại thông tin giao hàng
                                    </a>
                                    <button type="submit" value="submit" name="submit">Hoàn tất đơn hàng</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            // echo "<pre>";
            // var_dump($_SESSION['cart']);
            // die();
            if (isset($_SESSION['cart'])) {
                $CartItems = $_SESSION['cart'];
                $total = 0;
            }
            ?>
            <div class="col-auto total">
                <div class="total__cost">
                    <?php foreach ($CartItems as $Bigproduct) : ?>
                        <?php foreach ($Bigproduct as $product) : ?>
                            <?php $total += (int) $product['product_price'] * (int) $product['product_quantity'];  ?>
                            <div class="product">
                                <div class="product__img">
                                    <a href="<?php echo $router->createUrl('temp/detailProduct', ['id' => $product['product_id']]); ?>">
                                        <img src="<?php echo $product['product_image']; ?>" alt="">
                                        <span class="product__sl"><?php echo $product['product_quantity']; ?></span>
                                    </a>
                                </div>
                                <span class="product__name"><?php echo $product['product_name']; ?></span>
                                <span class="product__price"><?php echo number_format((int) $product['product_price'] * (int) $product['product_quantity']);  ?></span>
                            </div>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                    <form action="info_pay" method="POST" class="product__discount">
                        <input type="text" placeholder="Mã giảm giá" size="30" id="input__discount" name="input__discount" />
                        <button type="submit" value="submit__discount" name="submit_discount">Sử dụng</button>
                    </form>
                    <div class="total__line">
                        <div class="total__line__subtotal">
                            <span class="total__line__name">Tạm tính</span>
                            <span class="total__line__price"><?php echo number_format($total); ?></span> <br>
                        </div>
                        <div class="total__line__shipping">
                            <span class="total__line__name">Phí vận chuyển</span>
                            <span class="total__line__price">39,000</span> <br>
                        </div>
                    </div>
                    <div class="total__line__footer">
                        <span class="total__line__name">Tổng tiền</span>
                        <span class="total__line__price"><?php echo number_format((int) $total - 39000); ?></span> <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<script src="./ExecuteJS/slide.js"></script>
<script src="./ExecuteJS/dropRight.js"></script>
<script src="./ExecuteJS/selectedTrue.js"></script>



<?php
require_once './Views/HeaderAndFooter/footer.php';
?>