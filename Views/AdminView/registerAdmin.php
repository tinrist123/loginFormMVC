<?php
require_once './Views/AdminView/asset/header.php';
?>

<body>
    <div class="loginTemp">
        <div class="login-form">
            <div class="enclapse">
                <div class="card">
                    <div class="headPicture"></div>
                    <div class="register-form">
                        <h2 class="title" style="text-align: center;color: red;">
                            <?php
                            if (isset($_SESSION['error'])) {
                                if ($_SESSION['error'] == "emailExisting") {
                                    echo "Email của bạn đã tồn tại";
                                } else if ($_SESSION['error'] == "unknownErr") {
                                    echo "Unknown Error";
                                }
                            }
                            ?>
                        </h2>
                        <h2 class="title">Đăng Kí Thành Viên</h2>
                        <h2 class="title"><a href="<?php echo $router->createUrl('Views/AdminView/admin') ?>" style="color:#005EDA;">Về Trang Login</a></h2>
                        <form class="formChange" action="<?php echo $router->createURl('Controllers/index', ['controller' => 'Addingaccount', 'method' => 'AddingAcount']) ?>" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-2">
                                    <div class="input-group">
                                        <input class="input-group--style" type="text" name="ho" placeholder="Họ" required />
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group">
                                        <input class="input-group--style" type="text" name="ten" placeholder="Tên" required>
                                    </div>
                                </div>
                            </div>
                            <div class=" row">
                                <div class="col-2">
                                    <div class="input-group">
                                        <input class="input-group--style" type="datetime-local" name="ngaysinh" required />
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group">
                                        <input class="input-group--style" type="text" name="quequan" placeholder="quequan" required />

                                    </div>
                                </div>
                            </div>
                            <div class="input-group">
                                <input class="input-group--style" type="text" name="username" placeholder="Username" required />
                            </div>
                            <div class="input-group">
                                <input class="input-group--style" type="email" name="email" placeholder="Email" required />
                            </div>
                            <div class="input-group">
                                <input class="input-group--style" type="text" name="CMND" placeholder="CMND" required />
                            </div>
                            <div class=" row">
                                <div class="col-2">
                                    <div class="input-group">
                                        <input class="input-group--style" type="password" name="password" placeholder="****" required />
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group">
                                        <input class="input-group--style" type="password" name="confirmpassword" placeholder="Nhập Lại Mật Khẩu" required />
                                    </div>
                                </div>
                            </div>
                            <div class="input-group">
                                <input class="input-group--style" type="submit""
                  name=" submit"" value="Đăng Ký">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>