<?php
require_once './Views/AdminView/asset/header.php';
?>
<header>
    <div class="side_menu">
        <div class="container-fluid">
            <div class="logoWeb">
                <a href=""> <img src="commonImages/logoad.png" alt="" />Trang Chủ </a>
            </div>
            <div class="side_menu__main">
                <ul class="main__listItem">
                    <li>
                        <a href="<?php echo $router->createUrl('Controllers/Admin/index', ['controller' => 'Homeadmin', 'View' => 'HomeAdmin']); ?>"><i class="fas fa-home"></i>Trang Chủ</a>
                    </li>
                    <li class="active">
                        <a href="#"><i class="far fa-user"></i>Profile</a>
                    </li>
                    <li>
                        <a href="<?php echo $router->createUrl('Controllers/Admin/index', ['View' => 'Product', 'category' => '1', 'controller' => 'AdminView']); ?>"><i class="fas fa-city"></i>Sản Phẩm</a>
                    </li>
                    <li>
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


<body>
    <main>
        <div class="main-content">
            <nav class="nav-bar-admin">
                <h2 class="title">Xin Chào <?php echo $adminInfor['Ten']; ?> Đẹp Trai!</h2>
                <div class="nav-bar-admin__icon ">
                    <a href=""><i class="fab fa-angellist"></i></a></li>
                </div>
                <div class="nav-bar-admin__icon mglr">
                    <a href=""><i class="far fa-bell"></i></a>
                </div>
                <div class="nav-bar-admin__logo">
                    <a href="#">
                        <img src="<?php echo $adminInfor['url_image_logo']; ?>" alt=""><i class="fas fa-angle-down"></i>
                        <div class="dropdownList" style="opacity: 0;">
                            <ul class="dropDownList__option">
                                <li><a href="<?php echo $router->createUrl('Controllers/index', ['View' => 'profileAdmin', 'controller' => 'Profile', 'method' => 'ViewProfileAdmin']); ?>">Edit Profile</a></li>
                                <li><a href="<?php echo $router->createUrl('Views/AdminView/registerAdmin') ?>">Adding Admin Acount</a></li>
                                <li><a href="<?php echo $router->createUrl('Controllers/logout'); ?>">Logout</a></li>
                            </ul>
                        </div>
                    </a>
                </div>
            </nav>
            <div class="main-content__profile">
                <div class="container">
                    <h2 class="title">
                        Thông Tin Admin
                    </h2>
                    <?php
                    if (
                        isset($_SESSION['lastEditAdmin']) && $_SESSION['lastEditAdmin']
                    ) {
                        $admin = $_SESSION['lastEditAdmin'];
                    } else if (isset($data) && $data) {
                        $admin = $data;
                    } else if (isset($_SESSION['admin'])) {
                        $admin = $_SESSION['admin'];
                    }
                    ?>
                    <div class="profilebox__Information">
                        <h3 class="general-info" style="text-align: center; color: red;">
                            <?php
                            if (isset($_SESSION['error'])) {
                                if ($_SESSION['error'] == "emptyField") {
                                    echo "Hãy Nhập đầy đủ thông tin";
                                } else if ($_SESSION['error'] == "EmailInvalid") {
                                    echo "Email sai cú pháp.Hãy Nhập Lại!";
                                } else if ($_SESSION['error'] == 'unknownError') {
                                    echo "Lỗi từ Server";
                                } else if ($_SESSION['error'] == 'uploadFailed') {
                                    echo "Ảnh của bạn không đúng!";
                                }
                            } else if (isset($_SESSION['success'])) {
                                if ($_SESSION['success'] == "successUpdate") {
                                    unset($_SESSION['success']);
                                    echo "Cập Nhật Thành Công";
                                }
                            }
                            ?>
                        </h3>
                        <form action="<?php echo $router->createUrl('Controllers/index', ['controller' => 'EditProfile', 'method' => 'EditAdmin', 'View' => 'profileAdmin']) ?>" method="POST" enctype=multipart/form-data> <h5 class="general-info">
                            Thông tin cơ bản
                            </h5>
                            <div class="inputname input">
                                <label for="">Username</label>
                                <input type="text" name="username" value="<?php echo $admin['username'] ?>">
                            </div>
                            <div class="inputemail input">
                                <label for="">Email</label>
                                <input type="text" name="email" value="<?php echo $admin['email'] ?>">
                            </div>
                            <div class=" inputavatar input">
                                <label for="">Avatar</label>
                                <input type="file" name="fileImg" onchange="readURL(this);">
                                <img src="<?php $adminInfor['url_image_logo'] ?>" alt="" class="thumbnail" id="imgUpload">
                                <script>
                                    function readURL(input) {
                                        if (input.files && input.files[0]) {
                                            var reader = new FileReader();

                                            reader.onload = function(e) {
                                                document.getElementById('imgUpload')
                                                    .src = e.target.result
                                            };
                                            reader.readAsDataURL(input.files[0]);
                                        }
                                    }
                                </script>
                            </div>
                            <div class=" inputavatar input">
                                <label for="">Họ</label>
                                <input type="text" name="Ho" value="<?php echo $admin['Ho'] ?>"> </div>
                            <div class=" inputavatar input">
                                <label for="">Tên</label>
                                <input type="text" name="Ten" value="<?php echo $admin['Ten'] ?>"> </div>
                            <div class="inputaddress input">
                                <label for="">Quê Quán</label>
                                <input type="text" name="quequan" value=" <?php echo $admin['quequan'] ?>">
                            </div>
                            <div class=" inputbirth input">
                                <label for="">Ngày Sinh</label>
                                <input type="datetime-local" name="ngaysinh" value="<?php echo date('Y-m-d\TH:i:s', strtotime($admin['ngaysinh'])) ?>">
                            </div>
                            <div class=" inputsubmit input">
                                <input type="submit" name="submit" value="Cật Nhật">
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </main>
    <script src="./ExecuteJS/dropDownCarret.js"></script>
    <?php
    require_once './Views/AdminView/asset/footer.php';
    ?>