<?php
require_once './Views/HeaderAndFooter/header.php';
$router = new bootstraps_router();

?>

<head>
    <link rel="stylesheet" href="./styleCSS/style.css">
    <link rel="stylesheet" href="./styleCSS/detailProduct.css">
</head>
<?php
?>
<!-- Insert Code Here !!!!!!!!!!!!!!!!!!! -->

<main>
    <div class="login-form">
        <?php

        if (isset($_SESSION['error'])) {
            if ($_SESSION['error'] == "EmptyField") {
                $data = "Hãy Điền Đầy Đủ Thông TIn";
            } else if ($_SESSION['error'] == "errorData") {
                $data = "Sai Mật Khẩu hoặc email";
            }
        }
        if (isset($_SESSION['regissucced'])) {
            if ($_SESSION['regissucced'] == true)
                $data = "Đăng Ký Thành Công!";
        }
        ?>
        <h1 style='text-align:center; color:red'> <?php
                                                    if (isset($data)) {
                                                        echo $data;
                                                    }

                                                    ?></h1>
        <div class="container">
            <form action="<?php echo $router->createUrl('Controllers/User/controllerUser', ['action' => 'dangnhap']); ?>" method="post">
                <h1 class="title">Đăng Nhập</h1>
                <input type="text" name="email" placeholder="Email" required>
                <input type="password" name="matkhau" placeholder="Mật Khẩu" required>
                <input type="submit" value="Đăng Nhập" name="submit">
            </form>
            <div class="more">
                <span>
                    <a href="">Quên Mật Khẩu</a> ? hoặc <a href="">Đăng Kí</a>
                </span>
            </div>
        </div>
    </div>
</main>




<script src="./ExecuteJS/slide.js"></script>
<script src="./ExecuteJS/dropRight.js"></script>


<?php
require_once './Views/HeaderAndFooter/footer.php';
?>