<?php
require_once './Views/HeaderAndFooter/header.php';
$router = new bootstraps_router();

?>

<head>
    <link rel="stylesheet" href="./styleCSS/style.css">
</head>


<main>
    <!-- Khuyến Mãi Category -->
    <div class="listProduct mgt20">
        <div class="container">
            <div class="listProduct__menu" style="background-color: #f0f0f0;">
                <div class="row">
                    <div class="col">
                        <h2 style="color: red;">Laptop</h2>
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
                    <?php
                    $laptop = new Models_Laptop();
                    $dataLaptop = $laptop->buildQueryParams([
                        "select" => "idlaptop,tenlaptop,giaban,url_image,idloaisanpham",
                        "other" => "limit 10"
                    ])->select();
                    ?>

                    <?php foreach ($dataLaptop as $product) : ?>
                        <div class="col">
                            <a href="<?php echo $router->createUrl('./Controllers/index', ['action' => 'viewLaptop', 'idloaisanpham' => $product['idloaisanpham'], 'id' => $product['idlaptop'], 'controller' => 'View', 'method' => 'ViewProduct']); ?>" class="relative"> <img src="./images/discount-mini.png" alt="" class="khuyenmai-icon">
                                <img class="js-imgAjaxChange" src="<?php echo $product['url_image']; ?>" alt="" class="imgProduct">
                                <p class="nameProduct">
                                    <span class="js-nameAjaxChange"><?php echo $product['tenlaptop']; ?></span>
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
                            </div>
                            <input class="js-product_id" type="hidden" name="product_id" value="<?php echo $product['idlaptop']; ?>">
                            <input class="js-product_name" type="hidden" name="product_name" value="<?php echo $product['tenlaptop']; ?>">
                            <input class="js-product_price" type="hidden" name="product_price" value="<?php echo $product['giaban']; ?>">
                            <input class="js-product_category" type="hidden" name="product_category" value="<?php echo $product['idloaisanpham']; ?>">
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
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
                    <?php
                    $ssd = new Models_SSD();
                    $data = $ssd->buildQueryParams([
                        "select" => "idssd,tenssd,giaban,url_image,idloaisanpham",
                        "other" => "limit 10"
                    ])->select();

                    ?>
                    <?php foreach ($data as $product) : ?>
                        <div class="col">
                            <a href="<?php echo $router->createUrl('Controllers/index', ['action' => 'ViewSSD', 'id' => $product['idssd'], 'controller' => 'View', 'method' => 'ViewProduct']); ?>" class="relative">
                                <img src="./images/discount-mini.png" alt="" class="khuyenmai-icon">
                                <img class="js-imgAjaxChange" src="<?php echo $product['url_image']; ?>" alt="" class="imgProduct">
                                <p class="nameProduct"><span class="js-nameAjaxChange" href=""><?php echo $product['tenssd']; ?></span>
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
                                <input class="js-product_id" type="hidden" name="product_id" value="<?php echo $product['idssd']; ?>">
                                <input class="js-product_name" type="hidden" name="product_name" value="<?php echo $product['tenssd']; ?>">
                                <input class="js-product_price" type="hidden" name="product_price" value="<?php echo $product['giaban']; ?>">
                                <input class="js-product_category" type="hidden" name="product_category" value="<?php echo $product['idloaisanpham']; ?>">
                            </div>

                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>
    <div class="listProduct mgt20">
        <div class="container">
            <div class="listProduct__menu" style="background-color: #f0f0f0;">
                <div class="row">
                    <div class="col">
                        <h2 style="color: red;">HDD</h2>
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
                    <?php
                    $laptop = new Models_HDD();
                    $dataLaptop = $laptop->buildQueryParams([
                        "select" => "idhdd,tenhdd,giaban,url_image,idloaisanpham",
                        "other" => "limit 10"
                    ])->select();
                    ?>

                    <?php foreach ($dataLaptop as $product) : ?>
                        <div class="col">

                            <a href=" <?php echo $router->createUrl('Controllers/index', ['action' => 'ViewHDD', 'id' => $product['idhdd'], 'method' => 'ViewProduct', 'controller' => 'View']); ?>" class="relative">
                                <img src="./images/discount-mini.png" alt="" class="khuyenmai-icon">
                                <img class="js-imgAjaxChange" src="<?php echo $product['url_image']; ?>" alt="" class="imgProduct">
                                <p class="nameProduct">
                                    <span class="js-nameAjaxChange" href=""><?php echo $product['tenhdd']; ?></span>
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
                                <input class="js-product_id" type="hidden" name="product_id" value="<?php echo $product['idhdd']; ?>">
                                <input class="js-product_name" type="hidden" name="product_name" value="<?php echo $product['tenhdd']; ?>">
                                <input class="js-product_price" type="hidden" name="product_price" value="<?php echo $product['giaban']; ?>">
                                <input class="js-product_category" type="hidden" name="product_category" value="<?php echo $product['idloaisanpham']; ?>">
                            </div>

                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>
    <div class="listProduct mgt20">
        <div class="container">
            <div class="listProduct__menu" style="background-color: #f0f0f0;">
                <div class="row">
                    <div class="col">
                        <h2 style="color: red;">Monitor</h2>
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
                    <?php
                    $laptop = new Models_Monitor();
                    $dataLaptop = $laptop->buildQueryParams([
                        "select" => "idmonitor,tenmonitor,giaban,url_image,idloaisanpham",
                        "other" => "limit 10"
                    ])->select();
                    ?>

                    <?php foreach ($dataLaptop as $product) : ?>
                        <div class="col">

                            <a href="<?php echo $router->createUrl('./Controllers/index', ['action' => 'ViewMonitor', 'id' => $product['idmonitor'], 'controller' => 'View', 'method' => 'ViewProduct']); ?>" class="relative">
                                <img src="./images/discount-mini.png" alt="" class="khuyenmai-icon">
                                <img class="js-imgAjaxChange" src="<?php echo $product['url_image']; ?>" alt="" class="imgProduct">
                                <p class="nameProduct"><span class="js-nameAjaxChange" href=""><?php echo $product['tenmonitor']; ?></span>
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
                                <input class="js-product_id" type="hidden" name="product_id" value="<?php echo $product['idmonitor']; ?>">
                                <input class="js-product_name" type="hidden" name="product_name" value="<?php echo $product['tenmonitor']; ?>">
                                <input class="js-product_price" type="hidden" name="product_price" value="<?php echo $product['giaban']; ?>">
                                <input class="js-product_category" type="hidden" name="product_category" value="<?php echo $product['idloaisanpham']; ?>">
                            </div>

                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>
    <div class="listProduct mgt20">
        <div class="container">
            <div class="listProduct__menu" style="background-color: #f0f0f0;">
                <div class="row">
                    <div class="col">
                        <h2 style="color: red;">Chuột</h2>
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
                    <?php
                    $laptop = new Models_Chuot();
                    $data = $laptop->buildQueryParams([
                        "select" => "idchuot,tenchuot,giaban,url_image,idloaisanpham",
                        "other" => "limit 10"
                    ])->select();
                    ?>

                    <?php foreach ($data as $product) : ?>
                        <div class="col">

                            <a href="<?php echo $router->createUrl('./Controllers/index', ['action' => 'viewChuot', 'id' => $product['idchuot'], 'controller' => 'View', 'method' => 'ViewProduct']); ?>" class="relative">
                                <img src="./images/discount-mini.png" alt="" class="khuyenmai-icon">
                                <img class="js-imgAjaxChange" src="<?php echo $product['url_image']; ?>" alt="" class="imgProduct">
                                <p class="nameProduct"><span class="js-nameAjaxChange" href=""><?php echo $product['tenchuot']; ?></span>
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
                                <input class="js-product_id" type="hidden" name="product_id" value="<?php echo $product['idchuot']; ?>">
                                <input class="js-product_name" type="hidden" name="product_name" value="<?php echo $product['tenchuot']; ?>">
                                <input class="js-product_price" type="hidden" name="product_price" value="<?php echo $product['giaban']; ?>">
                                <input class="js-product_category" type="hidden" name="product_category" value="<?php echo $product['idloaisanpham']; ?>">
                            </div>

                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>
</main>
<script src="./ExecuteJS/slide.js"></script>
<script src="./ExecuteJS/dropRight.js"></script>


<?php
require_once './Views/HeaderAndFooter/footer.php';
?>