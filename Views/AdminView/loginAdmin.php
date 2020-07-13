<?php
require_once './Views/AdminView/asset/header.php';
?>

<?php
$router = new bootstraps_router();

if (isset($_SESSION['error'])) {
    if (($_SESSION['error'] == 'emptyfield')) {
        $error = 'Hãy Nhập Tài Khoản Và Mật Khẩu!';
    }
    if (($_SESSION['error'] == 'wrongInput')) {
        $error = 'Sai Tài Khoản Hoặc Mật Khẩu!';
    }
    if (($_SESSION['error'] == 'adminError')) {
        $error = 'Không tìm thấy Admin, Vui lòng đăng nhập lại!';
    }
}
?>

<div class="loginTemp">
    <div class="login-form">
        <div class="wrapper">

            <form action="<?php echo $router->createUrl('Controllers/Admin/AdminController', ['action' => 'login']);
                            ?>" method="POST">
                <div class="logoAdmin">
                    <img src="./commonImages/tinngo.jpg" alt="" />
                </div>
                <p class="NameAdmin p-b-45 p-t-20 ">Tín Ngô</p>
                <div class="errorLog">
                    <?php
                    if (isset($error)) {
                        echo "<p style='font-size:15px; margin-bottom:10px;' class='NameAdmin'>{$error}</p>";
                    }
                    ?>
                </div>
                <div class="input m-b-10">
                    <i id="usricon" class="far fa-user"></i><input class="inchange" type="text" name="username" placeholder="Username" />
                </div>
                <div class="input m-b-10">
                    <i id="pwdicon" class="fas fa-lock"></i><input class="inchange" type="password" name="password" placeholder="Password" />
                </div>
                <div class="input m-b-10">
                    <input type="submit" name="submit" value="Login">
                </div>
            </form>
        </div>
    </div>
</div>
<script src="./ExecuteJS/adminLogin.js"></script>

<?php
require_once './Views/AdminView/asset/footer.php';
?>