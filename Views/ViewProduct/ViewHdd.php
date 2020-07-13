<?php
require_once './Views/HeaderAndFooter/header.php';
$router = new bootstraps_router();

?>

<head>
    <link rel="stylesheet" href="./styleCSS/style.css">
    <link rel="stylesheet" href="./styleCSS/detailProduct.css">
</head>

<!-- Insert Code Here !!!!!!!!!!!!!!!!!!! -->
<div class="product">
    <div class="container">
        <div class="fieldContent">
            <?php
            $classView = str_replace('View', '', $classView);
            $detailProduct = new $classView();
            $Product = $detailProduct->getDataToViewLaptop($idClicked);
            ?>
            <div class="imgLeft">
                <img src="<?php echo $Product['url_image']; ?>" alt="" />
            </div>
            <div class="descriptionRight">
                <h3><?php echo $Product['tenhdd']; ?></h3>
                <p class="giaban">Giá: <?php echo $Product['giaban']; ?></p>

                <div class="facebook">
                    <button>Thích</button>
                    <button>Chia sẻ</button>
                </div>
                <div class="description">
                    <div class="boxInfor">
                        <p class="product-title">Thông tin sản phẩm</p>
                        <span>Mã Hàng: </span> <?php echo $Product['tenhdd']; ?>
                        <br />
                        <span>Bảo hành: </span> <?php echo '24 Tháng' ?>
                        <br />
                        <span>Hãng sản xuất: </span> <?php echo $Product['thuonghieu'] ?>
                        <br />
                        <span>Xuất xứ: </span> Còn Hàng
                    </div>
                    <div class="boxdesProduct">
                        <p class="product-title">Mô tả sản phẩm</p>
                        <span>"- Dung lượng: <?php echo $Product['dungluong']; ?>| Kích thước: <?php echo $Product['kichthuoc']; ?>""</span>
                        <br />
                        <span>- Tốc độ Đọc/Ghi: <?php echo $Product['tocdodoc']; ?>/<?php echo $Product['todoghi']; ?></span>
                        <br />
                        <span>- Chuẩn Kết Nối: <?php echo $Product['chuanketnoi']; ?></span>
                        <br />
                    </div>
                    <div class="btnProduct">
                        <a class="btn-add-cart">
                            <i class="fas fa-shopping-cart"></i>
                            <span>Thêm vào giỏ hàng</span>
                        </a>
                        <a href="" class="btn-buy">
                            <i class="fas fa-shopping-cart"></i>
                            <span>Mua Hàng</span>
                        </a>
                        <input class="js-getCate" type="hidden" name="category" value=<?php echo $Product['idloaisanpham']; ?>>
                        <input class="js-getId" type="hidden" name="product_id" value=<?php echo $Product['idhdd']; ?>>
                    </div>
                </div>
            </div>
        </div>
        <div class="tableparameter">
            <h2>Thông số kỹ thuật</h2>
            <ul class="parameter tableparameter_acc">
                <li class="g6500 "><span>Chuẩn kết nối:</span>
                    <div><i> <?php echo $Product['chuanketnoi']; ?> </i></div>
                </li>
                <li class="g6499 "><span>Dung lượng</span>
                    <div><i><?php echo $Product['dungluong']; ?></i></div>
                </li>
                <li class="g21712 "><span>Loại ổ cứng:</span>
                    <div><i> <?php echo $Product['loaiocung']; ?></i></div>
                </li>
                <li class="g21713 "><span>Tốc độ đọc:</span>
                    <div><i> <?php echo $Product['tocdodoc']; ?></i></div>
                </li>
                <li class="g21714 "><span>Tốc độ ghi:</span>
                    <div><i> <?php echo $Product['todoghi']; ?></i></div>
                </li>
                <li class="g6504 "><span>Kích thước:</span>
                    <div><i> <?php echo $Product['kichthuoc']; ?></i></div>
                </li>
                <li class="g6505 "><span>Trọng lượng:</span>
                    <div><i> <?php echo $Product['trongluong']; ?></i></div>
                </li>
                <li class="g21716 "><span>Thương hiệu của:</span>
                    <div><i> <?php echo $Product['thuonghieu']; ?></i></div>
                </li>
                <li class="g21717 "><span>Sản xuất tại:</span>
                    <div><i> <?php echo $Product['sanxuat']; ?></i></div>
                </li>
            </ul>
            <div class="closebtn none"><i class="icondetail-closepara"></i></div>
            <div class="fullparameter" style="display: none;">
                <div class="scroll">
                    <h3>Thông số kỹ thuật chi tiết Ổ cứng HDD 1TB Seagate Backup Plus Slim Xanh Dương</h3>
                    <img id="imgKit" width="500" height="430" alt="Thông số kỹ thuật 209115">
                    <ul class="parameterfull"></ul>
                </div>
            </div>

        </div>
    </div>
</div>





<script src="./ExecuteJS/slide.js"></script>
<script src="./ExecuteJS/dropRight.js"></script>
<script src="./ExecuteJS/ajaxshoppingInView.js"></script>

<?php
require_once './Views/HeaderAndFooter/footer.php';
?>