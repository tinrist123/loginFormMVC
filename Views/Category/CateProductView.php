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
$db = new Models_DBConnection();
$db->tableName = "loaisanpham";
$ProductName = $db->getProductRes($cate_id);

$db->tableName = "detail" . $ProductName;

$data = $db->buildQueryParams([
    "select" => "id" . $ProductName . ",ten" . $ProductName . ",giaban,url_image,idloaisanpham",
    "other" => "limit 10"
])->select();


?>

<div class="listProduct mgt20">
    <div class="container">
        <div class="listProduct__menu" style="background-color: #f0f0f0;">
            <div class="row">
                <div class="col">
                    <h2 style="color: red;">SSD</h2>
                </div>
                <div class="col">
                    <ul class="disCount__listItem">
                        <li><a href="">Linh Kiện Máy Tính</a></li>
                        <li><a href="">Laptop - Phụ Kiện</a></li>
                        <li><a href="">PC Gaming</a></li>
                        <li><a href="">Gaming Gear</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="listProduct__productItems">
            <div id="js-ajaxNextPage" class="grid">

                <?php foreach ($data as $product) : ?>
                    <div class="col">
                        <a href="<?php echo $router->createUrl('Controllers/index', ['action' => 'View' . ucfirst($ProductName), 'id' => $product['id' . $ProductName], 'controller' => 'View', 'method' => 'ViewProduct']); ?>" class="relative">
                            <img src="./images/discount-mini.png" alt="" class="khuyenmai-icon">
                            <img class="js-imgAjaxChange" src="<?php echo $product['url_image']; ?>" alt="" class="imgProduct">
                            <p class="nameProduct"><span class="js-nameAjaxChange"><?php echo $product['ten' . $ProductName]; ?></span>
                            </p>
                            <span class="priceProduct">
                                <p class="discountPrice js-giabanAjaxChange" style="color: red;"><?php echo $product['giaban']; ?></p>
                            </span>
                        </a>
                        <div class="addToCart">
                            <button class="js-sendValAjax js-scrolltoTop" id="js-ajaxShoppingCart" name="addToCart" value="addToCart" style="
                            margin-top: 15px;
                            font-weight: 500;
                            background: url('./commonImages/icon-cart.png') no-repeat
                            right 10px center #838484;
                            cursor: pointer;
                        "><span>+ Thêm vào giỏ hàng</span>
                            </button>
                            <input class="js-product_id" type="hidden" name="product_id" value="<?php echo $product['id' . $ProductName]; ?>">
                            <input class="js-product_name" type="hidden" name="product_name" value="<?php echo $product['ten' . $ProductName]; ?>">
                            <input class="js-product_price" type="hidden" name="product_price" value="<?php echo $product['giaban']; ?>">
                            <input class="js-product_category" type="hidden" name="product_category" value="<?php echo $product['idloaisanpham']; ?>">
                        </div>

                    </div>
                <?php endforeach; ?>

            </div>
        </div>
        <div class="page-number">
            <ul class="page-number">
                <?php
                $indexPage = $db->CountPageNumber();
                for ($index = 0; $index < $indexPage; $index++) {
                ?>
                    <li>
                        <button class="js-indexPage" style="cursor:pointer;"><?php echo $index + 1; ?></button>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
</div>




<script src="./ExecuteJS/slide.js"></script>
<script src="./ExecuteJS/dropRight.js"></script>


<?php
require_once './Views/HeaderAndFooter/footer.php';
?>