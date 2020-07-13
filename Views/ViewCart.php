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
    <?php
    if (isset($_SESSION['errorCart'])) {
        if ($_SESSION['errorCart'] == "EmptyItem") {
            $data = "Hãy chọn sản phẩm vào giỏ hàng trước";
        } else if ($_SESSION['errorCart'] == "") {
            $data = "";
        }
    }
    ?>
    <h1 style="text-align: center; color: red;"><?php if (isset($data)) {
                                                    echo $data;
                                                } ?></h1>
    <section class="name">
        <h2 class="name__title">
            Giỏ hàng
        </h2>
    </section>
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <div class="content__img">
                        <p>Sản phẩm</p>
                    </div>
                    <div class="content__name">
                        <p>Tên sản phẩm</p>
                    </div>
                    <div class="content__sl">
                        <p>Số lượng</p>
                    </div>
                    <div class="content__gia">
                        <p>Giá tiền</p>
                    </div>
                    <div class="content__xoa">
                        <p>Xóa</p>
                    </div>
                </div>
                <?php
                if (isset($_SESSION['cart'])) {
                    $itemsCart = $_SESSION['cart'];
                }
                if (isset($itemsCart)) {

                ?>
                    <?php foreach ($itemsCart as $cate => $Bigproduct) : ?>
                        <?php foreach ($Bigproduct as $product) : ?>

                            <div class="col-auto">
                                <div class="about__img">
                                    <img src="<?php echo $product['product_image']; ?>" alt="">
                                    <input class="js-product_category" type="hidden" name="product_category" value=<?php echo $cate; ?>>
                                    <input class="js-product_id" type="hidden" name="product_id" value=<?php echo $product['product_id']; ?>>
                                </div>
                                <div class="about__name">
                                    <a href="<?php echo $router->createUrl('temp/detailProduct', ['id' => $product['product_id']]); ?>"><?php echo $product['product_name']; ?></a>
                                </div>
                                <div class="about__sl">
                                    <input class="js-inputChange" type="number" name="quantity" value="<?php echo $product['product_quantity']; ?>" min="1">
                                </div>
                                <div class="about__gia">
                                    <span class="js-product_price"><?php echo number_format((int) $product['product_price'] * $product['product_quantity']); ?></span>
                                </div>
                                <div class="about__xoa">
                                    <i style="cursor:pointer;" class="js-btnXoa fa fa-trash"></i>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                <?php } ?>
            </div>
            <div class="row">
                <div class="col-auto">
                    <div class="total__name">
                        <p>Tổng tiền</p>
                    </div>
                    <div class="total__cost">
                        <span class="js-totalPrice">
                            <?php
                            if (isset($_SESSION['cart'])) {
                                $listCart = $_SESSION['cart'];
                                $totalPrice = 0;
                                foreach ($listCart as $Bigproduct) {
                                    foreach ($Bigproduct as $product) {
                                        $totalPrice += (int) $product['product_price'] * $product['product_quantity'];
                                    }
                                }
                                echo number_format($totalPrice);
                            }

                            ?>
                        </span>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="pay">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="button">
                        <a href="<?php echo $router->createUrl('Controllers/index', ['action' => 'info_pay', 'controller' => 'PayCart', 'method' => 'ViewPayCart']); ?>">
                            <button type="submit" id="checkout" class="button-default" name="checkout" value="">Thanh
                                toán</button></a>
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