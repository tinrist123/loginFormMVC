<?php
require_once './Views/AdminView/asset/header.php';
?>

<head>
    <link rel="stylesheet" href="./styleCSS/style.css">
</head>
<header>
    <div class="side_menu">
        <div class="container-fluid">
            <div class="logoWeb">
                <a href=""> <img src="commonImages/logoad.png" alt="" />Trang Chủ </a>
            </div>
            <div class="side_menu__main">
                <ul class="main__listItem">
                    <li>
                        <a href="<?php echo $router->createUrl('Views/AdminView/admin'); ?>"><i class="fas fa-home"></i>Trang Chủ</a>
                    </li>
                    <li>
                        <a href="<?php echo $router->createUrl('Controllers/index', ['View' => 'profileAdmin', 'controller' => 'Profile', 'method' => 'ViewProfileAdmin']); ?>"><i class="far fa-user"></i>Profile</a>
                    </li>
                    <li>
                        <a href="<?php echo $router->createUrl('Controllers/Admin/index', ['View' => 'Product', 'category' => '1', 'controller' => 'AdminView']); ?>"><i class="fas fa-city"></i>Sản Phẩm</a>
                    </li>
                    <li class="active">
                        <a href=""><i class="fas fa-gem"></i>Đơn Hàng</a>
                    </li>
                    <li>
                        <a href=""><i class="fas fa-users"></i>Tài Khoản Khách Hàng</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<main>
    <div class="main-content">
        <nav class="nav-bar-admin">
            <h2 class="title">Product</h2>
            <div class="nav-bar-admin__icon ">
                <a href="<?php echo $router->createUrl('Controllers/Admin/index', ['View' => 'Product', 'category' => '1', 'controller' => 'AdminView']); ?>"><i class="fas fa-laptop"></i>Laptop</a></li>
            </div>
            <div class="nav-bar-admin__icon mglr ml">
                <a href="<?php echo $router->createUrl('Controllers/Admin/index', ['View' => 'Product', 'category' => '2', 'controller' => 'AdminView']); ?>"><i class="fas fa-save"></i>SSD</a>
            </div>
            <div class="nav-bar-admin__icon mglr">
                <a href="<?php echo $router->createUrl('Controllers/Admin/index', ['View' => 'Product', 'category' => '3', 'controller' => 'AdminView']); ?>"><i class="fas fa-save"></i>HDD</a>
            </div>
            <div class="nav-bar-admin__icon mglr">
                <a href="<?php echo $router->createUrl('Controllers/Admin/index', ['View' => 'Product', 'category' => '4', 'controller' => 'AdminView']); ?>"><i class="fas fa-save"></i>Màn Hình</a>
            </div>
            <div class="nav-bar-admin__icon mglr">
                <a href="<?php echo $router->createUrl('Controllers/Admin/index', ['View' => 'Product', 'category' => '5', 'controller' => 'AdminView']); ?>"><i class="fas fa-mouse"></i>Chuột</a>
            </div>
            <div class="nav-bar-admin__logo">
                <a href=""><img src="./commonImages/logoAdmin.jpg" alt=""><i class="fas fa-angle-down"></i></a>
            </div>
        </nav>
        <div class="dataView">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="dataView__product-table">
                            <div class="tm-product-table-container">
                                <table class="table table-hover tm-table-small tm-product-table">
                                    <thead>
                                        <tr>
                                            <th scope="col">&nbsp;</th>
                                            <th scope="col">Tên Khách Hàng</th>
                                            <th scope="col">email</th>
                                            <th scope="col">Số Điện Thoại</th>
                                            <th scope="col">Địa Chỉ Giao Hàng</th>
                                            <th scope="col">Tiền ship</th>
                                            <th scope="col">Trị Giá</th>
                                            <th scope="col">Ngày Đặt</th>
                                            <th scope="col">Tình Trạng</th>
                                            <th scope="col">&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        ?>
                                        <?php
                                        if (isset($data))
                                            foreach ($data as $donhang) : ?>
                                            <tr>
                                                <th scope="row"><input class="js-getCheckBox" type="checkbox"></th>
                                                <!-- <td class="showImg"> <img class="js-imgAjaxChange" src="<?php echo $product['url_image']; ?>" alt=""> </td> -->
                                                <td class="tm-product-name js-nameAjaxChange" style="width:10%;"><?php echo $donhang['Ho'] . " " . $donhang['Ten']; ?></td>
                                                <td class="js-giabanAjaxChange"><?php echo $donhang['email']; ?></td>
                                                <td><?php echo $donhang['SDT']; ?></td>
                                                <td><?php echo $donhang['diachi'] . ", " . $donhang['huyen'] .  ", " . $donhang['thanhpho']; ?></td>
                                                <td><?php echo $donhang['tienship']; ?></td>
                                                <td><?php echo $donhang['trigia']; ?></td>
                                                <td><?php echo $donhang['ngaydat']; ?></td>
                                                <td>Chưa Giao</td>
                                                <td>
                                                    <a href="#" class="tm-product-delete-link">
                                                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                                                    </a>
                                                    <input class="js-donhang_idkhachhang" type="hidden" name="idkhachhang" value="<?php echo $donhang['idkhachhang']; ?>">
                                                    <input class="js-donhang_iddathang" type="hidden" name="iddathang" value="<?php echo $donhang['iddathang']; ?>">
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>

                                    </tbody>

                                </table>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-number">
                    <ul class="page-number">
                        <?php
                        $db = new Models_DBConnection();
                        if (isset($productName))
                            $db->tableName = "detail" . $productName;
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
                <div class="row">
                    <div class="dataView__CRUD">
                        <div class="form">
                            <input id="js-eventCLickDelete" type="submit" name="Delete" value=" Delete">
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</main>
<script src="./ExecuteJS/AdminDeleteDonHang.js"></script>
<script src="./ExecuteJS/getAllCheckedBoxDonHang.js"></script>
<?php
require_once './Views/AdminView/asset/footer.php';
?>