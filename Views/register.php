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
                echo "<h1 style ='text-align:center; color:red;' >Điền Đầy Đủ Bạn ê!! =))</h1>";
            }
        }
        ?>
        <div class="container">
            <form action="<?php echo $router->createUrl('Controllers/User/controllerUser', ['action' => 'dangki']); ?>" method="post">
                <h1 class="title">Đăng Kí</h1>
                <input type="text" name="firstName" placeholder="Họ">
                <input type="text" name="lastName" placeholder="Tên">
                <input type="text" name="email" placeholder="Email">
                <input type="password" name="matkhau" placeholder="Mật Khẩu">
                <input type="submit" value="Đăng Kí" name="submit">
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