<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="Cache-control" content="no-cache">
    <link rel="stylesheet" href="./styleCSS/styleHeader.css" />
    <link rel="stylesheet" href="./styleCSS/commonstyle.css" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" /> -->
    <link rel="stylesheet" href="./styleCSS/style.css" />
    <title>Document</title>
</head>

<body>
    <?php
    $router = new bootstraps_router();
    if (isset($_SESSION['successOrder'])) {
        if ($_SESSION['successOrder'] == true) {
            $_SESSION['successOrder'] = false;
            unset($_SESSION['cart']);
        }
    }
    // var_dump($_SESSION['cart']);
    if (isset($_SESSION['cart'])) {
        $ListProductByCate = $_SESSION['cart'];
        $totalQuantityProduct = 0;
        // echo "<pre>";
        // print_r($_SESSION['cart']);
        foreach ($ListProductByCate as $product) {
            foreach ($product as $minProduct) {
                $totalQuantityProduct += $minProduct['product_quantity'];
            }
        }
    }
    if (isset($_SESSION['loginstatus'])) {
        if ($_SESSION['loginstatus']) {
            $logedin = 1;
        } else {
            $logedin = 0;
        }
    } else {
        $logedin = 0;
    }



    ?>
    <header>
        <nav class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <a href="./"><img src="./commonImages/logo.png" alt="" /></a>
                    </div>
                    <div class="col">
                        <div class="top-bar__links">
                            <?php
                            if (isset($logedin)) {
                                if ($logedin == 0) {
                                    echo "<div class='icon-signup'>
                                <a href=' {$router->createUrl('Controllers/User/routeUser', ["route" => "registerPage"])}'><i class=' fas fa-door-open'></i> Đăng Kí</a>
                            </div>
                            <span> / </span>
                            <div class='icon-Login'>
                                <a href='{$router->createUrl('Controllers/User/routeUser', ["route" => "loginPage"])}'><i class='far fa-user-circle'></i> Đăng Nhập</a>
                            </div>";
                                } else {
                                    echo "<div class='icon-signup'>
                                <a href=' {$router->createUrl('Controllers/User/controllerUser', ["action" => "logout"])}'><i class=' fas fa-door-open'></i>Hello LazyMan,     Logout</a>
                                </div>";
                                }
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="header-bottom">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="menuList">
                            <i id="js-clickDrop" style="cursor: pointer;" class="fas fa-bars"></i>
                            <p>Danh Mục Sản Phẩm</p>
                            <i style="cursor: pointer;" class="fas fa-chevron-circle-right"></i>
                        </div>
                    </div>
                    <div class="col">
                        <ul class="header-bottom__socialIcon">
                            <li>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href=""><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href=""><i class="fab fa-google-plus-g"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col">
                        <div class="searchItem">
                            <form action="#" method="">
                                <div class="wrap">
                                    <select name="" id="">
                                        <option value="" selected>tất cả</option>
                                        <option value="">test2</option>
                                        <option value="">test3</option>
                                    </select>
                                    <input id="searchBar" type="text" name="searchBar" placeholder="Gõ Từ Tìm Kiếm" />
                                    <input type="submit" value="Tìm Kiếm" name="submit" />
                                    <div class="hintProduct" style="display :none;">
                                        <div class="product">
                                            <a href="">
                                                <img src="./testShopCart/header/images/Dell-Alienware-M15-R2-i7-9750H-RAM-16GB-SSD-512GB-FHD-IPS-144Hz-GTX1660Ti.jpg" alt="" class="thumbnail">
                                                <div class="detailHintProduct">
                                                    <p class="product__name">Laptop Thinkpad lenovo pro acer auss</p>
                                                    <p class="product__giaban">125,000,000USD</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col">
                        <div class="shopping-cart">
                            <i class="fas fa-shopping-cart"></i>
                            <span class="cart-num" id="itemValue"><?php
                                                                    echo (isset($totalQuantityProduct)) ? $totalQuantityProduct : 0;
                                                                    ?></span>
                            <div class="shopping-cart__detailProduct">
                                <a href="<?php echo $router->createUrl('Views/ViewCart'); ?>">
                                    <span style="font-size:12px;" id="subItemValue"><?php
                                                                                    echo (isset($totalQuantityProduct)) ? $totalQuantityProduct : 0;
                                                                                    ?> </span>
                                    <span style="font-size: 12px;">sản phẩm</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="side-menu">
            <div class="container">
                <div class="row hideMenu">
                    <div class="left-side">
                        <ul class="side-menu__list">
                            <li class="li-parent">
                                <a href="<?php echo $router->createUrl('Controllers/index', ['controller' => 'CateProduct', 'method' => 'CateProduct', 'category_id' => '2']); ?>" class="beforeImple">
                                    <span class="imgLogo">
                                        <img src="./commonImages/linhkienMT.png" alt="" />
                                    </span>
                                    <span class="text">SSD</span>
                                </a>
                                <!-- Drop right gaming PC -->
                                <ul class="side-menu__sub-menu" style="display: none;">
                                    <li>
                                        <a href="">
                                            <span class="img">
                                                <img src="./commonImages/cpu.jpg" alt="" />
                                            </span>
                                            <span class="text">
                                                CPU
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="img">
                                                <img src="./commonImages/cpu.jpg" alt="" />
                                            </span>
                                            <span class="text">
                                                CPU
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="img">
                                                <img src="./commonImages/cpu.jpg" alt="" />
                                            </span>
                                            <span class="text">
                                                CPU
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="img">
                                                <img src="./commonImages/cpu.jpg" alt="" />
                                            </span>
                                            <span class="text">
                                                CPU
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="img">
                                                <img src="./commonImages/cpu.jpg" alt="" />
                                            </span>
                                            <span class="text">
                                                CPU
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="img">
                                                <img src="./commonImages/cpu.jpg" alt="" />
                                            </span>
                                            <span class="text">
                                                CPU
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="img">
                                                <img src="./commonImages/cpu.jpg" alt="" />
                                            </span>
                                            <span class="text">
                                                CPU
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="img">
                                                <img src="./commonImages/cpu.jpg" alt="" />
                                            </span>
                                            <span class="text">
                                                CPU
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- Drop right gaming PC -->
                            </li>
                            <li class="li-parent">
                                <a href="<?php echo $router->createUrl('Controllers/index', ['controller' => 'cateProduct', 'method' => 'cateProduct', 'category_id' => '1']); ?>" class="beforeImple">
                                    <span class="imgLogo">
                                        <img src="./commonImages/laptop.png" alt="" />
                                    </span>
                                    <span class="text">Máy Tính Xách Tay</span>
                                </a>
                                <!-- Drop right laptop -->
                                <ul class="side-menu__sub-menu" style="display: none;">
                                    <li>
                                        <a href="">
                                            <span class="img">
                                                <img src="./commonImages/laptopTest.jpg" alt="" />
                                            </span>
                                            <span class="text">
                                                Gaming
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- End drop right laptop -->
                            </li>
                            <li class="li-parent">
                                <a href="<?php echo $router->createUrl('Controllers/index', ['controller' => 'cateProduct', 'method' => 'cateProduct', 'category_id' => '3']); ?>" class="beforeImple">
                                    <span class="imgLogo">
                                        <img src="./commonImages/pcgaming.png" alt="" />
                                    </span>
                                    <span class="text">HDD</span>
                                </a>
                                <div class="defaultBanner">
                                    <div class="slideWrap">
                                        <div class="Slides">
                                            <ul>
                                                <li class="active">
                                                    <a href=""><img src="./commonImages/slide1.jpg" alt="" /></a>
                                                </li>
                                                <li>
                                                    <a href=""><img src="./commonImages/slide2.jpg" alt="" /></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="hoverPicture">
                                            <div class="row">
                                                <div class="col">
                                                    <img src="./commonImages/hoverPic3.png" alt="" />
                                                </div>
                                                <div class="col">
                                                    <img src="./commonImages/hoverPic2.jpg" alt="" />
                                                </div>
                                                <div class="col">
                                                    <img src="./commonImages/hoverPic1.jpg" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="li-parent">
                                <a href="<?php echo $router->createUrl('Controllers/index', ['controller' => 'cateProduct', 'method' => 'cateProduct', 'category_id' => '4']); ?>" class="beforeImple">
                                    <span class="imgLogo">
                                        <img src="./commonImages/gaminggear.png" alt="" />
                                    </span>
                                    <span class="text">Màn Hình</span>
                                </a>
                                <!-- Drop right Gaming gear -->
                                <ul class="side-menu__sub-menu" style="display: none;">
                                    <li>
                                        <a href="">
                                            <span class="img">
                                                <img src="./commonImages/chuotTest.jpg" alt="" />
                                            </span>
                                            <span class="text">
                                                Gaming Gear
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- End drop right gaming gear -->
                            </li>
                            <li class="li-parent">
                                <a href="<?php echo $router->createUrl('Controllers/index', ['controller' => 'cateProduct', 'method' => 'cateProduct', 'category_id' => '5']); ?>" class="beforeImple">
                                    <span class="imgLogo">
                                        <img src="./commonImages/gamenets.png" alt="" />
                                    </span>
                                    <span class="text">Chuột</span>
                                </a>
                                <!--  Drop right Games net -->
                                <ul class="side-menu__sub-menu" style="display: none;">
                                    <li>
                                        <a href="">
                                            <span class="img">
                                                <img src="./commonImages/chuotTest.jpg" alt="" />
                                            </span>
                                            <span class="text">
                                                Gaming Gear
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="img">
                                                <img src="./commonImages/banphimtest.jpg" alt="" />
                                            </span>
                                            <span class="text">
                                                Gaming Gear
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- End drop right games net -->
                            </li>
                            <li class="li-parent">
                                <a href="" class="beforeImple">
                                    <span class="imgLogo">
                                        <img src="./commonImages/thietbinghenhin.png" alt="" />
                                    </span>
                                    <span class="text">Thiết Bị Nghe Nhìn</span>
                                </a>
                                <!-- Drop right Hover Thiet bi nghe nhin -->
                                <ul class="side-menu__sub-menu" style="display: none;">
                                    <li>
                                        <a href="">
                                            <span class="img">
                                                <img src="./commonImages/loaTest.jpg" alt="" />
                                            </span>
                                            <span class="text">
                                                Gaming Gear
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- End Drop right hover -->
                            </li>
                            <li class="li-parent">
                                <a href="" class="beforeImple">
                                    <span class="imgLogo">
                                        <img src="./commonImages/thietbiluutru.png" alt="" />
                                    </span>
                                    <span class="text">Thiết Bị Lưu Trữ</span>
                                </a>
                            </li>
                            <li class="li-parent">
                                <a href="" class="beforeImple">
                                    <span class="imgLogo">
                                        <img src="./commonImages/thietbimang.png" alt="" />
                                    </span>
                                    <span class="text">Thiết Bị Mạng</span>
                                </a>
                            </li>
                            <li class="li-parent">
                                <a href="" class="beforeImple">
                                    <span class="imgLogo">
                                        <img src="./commonImages/thietbivanphong.png" alt="" />
                                    </span>
                                    <span class="text">Thiết Bị văn phòng</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <script src="./ExecuteJS/toggleDropMenu.js"></script>
    <script src="./ExecuteJS/scrollToTopPage.js"></script>
    <!-- <script src="./ExecuteJS/clearUrl.js"></script> -->