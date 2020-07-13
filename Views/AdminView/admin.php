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
          <li class="active">
            <a href="<?php echo $router->createUrl('Controllers/Admin/index', ['controller' => 'Homeadmin', 'View' => 'HomeAdmin']); ?>"><i class="fas fa-home"></i>Trang Chủ</a>
          </li>
          <li>
            <a href="<?php echo $router->createUrl('Controllers/index', ['View' => 'profileAdmin', 'controller' => 'Profile', 'method' => 'ViewProfileAdmin']); ?>"><i class="far fa-user"></i>Profile</a>
          </li>
          <li>
            <a href="<?php echo $router->createUrl('Controllers/Admin/index', ['View' => 'Product', 'category' => '1', 'controller' => 'AdminView']); ?>"><i class="fas fa-city"></i>Sản Phẩm</a>
          </li>
          <li>
            <a href="<?php echo $router->createUrl('Controllers/Admin/index', ['View' => 'DonHang', 'controller' => 'Donhang', 'method' => 'ShowDonHang']); ?>"><i class="fas fa-gem"></i>Đơn Hàng</a>
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
      <h2 class="title">Xin Chào <?php echo $adminInfor['Ten']; ?> <span style="color:red;">Đẹp Trai!</span></h2>
      <div class="nav-bar-admin__icon ">
        <a href=""><i class="fab fa-angellist"></i></a></li>
      </div>
      <div class="nav-bar-admin__icon mglr">
        <a href=""><i class="far fa-bell"></i></a>
      </div>
      <div class="nav-bar-admin__logo">
        <a>
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
  </div>
</main>
<script src="./ExecuteJS/dropDownCarret.js"></script>

<?php
require_once './Views/AdminView/asset/footer.php';
?>