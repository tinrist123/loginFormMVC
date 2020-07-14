<?php
require_once './Views/HeaderAndFooter/header.php';
$router = new bootstraps_router();

?>

<head>
    <link rel="stylesheet" href="./styleCSS/style.css">
    <link rel="stylesheet" href="./styleCSS/detailProduct.css">
</head>

<!-- Insert Code Here !!!!!!!!!!!!!!!!!!! -->

<main>
    <div class="login-form">
        <?php
        if (isset($_SESSION['error'])) {
            if ($_SESSION['error'] == "EmptyField") {
                echo "<h1 style ='text-align:center; color:red;' >Xin hãy điền đẩy đủ!!</h1>";
            } else if ($_SESSION['error'] == "invalidEmail") {
                echo "<h1 style ='text-align:center; color:red;' >Email không hợp lệ !</h1>";
            } else if ($_SESSION['error'] == "existUsernameOrEmail") {
                echo "<h1 style ='text-align:center; color:red;' >Email Đã tồn tại!!</h1>";
            }
        }
        ?>
        <div class="container">
            <form action="<?php echo $router->createUrl('Controllers/User/controllerUser', ['action' => 'dangki']); ?>" method="post">
                <h1 class="title">Đăng Kí</h1>
                <input type="text" name="firstName" placeholder="Họ" required>
                <input type="text" name="lastName" placeholder="Tên" required>
                <input type="text" name="email" placeholder="Email" required>
                <input type="password" name="matkhau" placeholder="Mật Khẩu" required>
                <input type="submit" value="Đăng Kí" name="submit" required>
            </form>
            <div class="more">
                <span>
                    <a href="<?php echo $router->createUrl('./index') ?>">Quay Về</a>
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