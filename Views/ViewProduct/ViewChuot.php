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
                <h3><?php echo $Product['tenchuot']; ?></h3>
                <p class="giaban">Giá: <?php echo $Product['giaban']; ?></p>

                <div class="facebook">
                    <button>Thích</button>
                    <button>Chia sẻ</button>
                </div>
                <div class="description">
                    <div class="boxInfor">
                        <p class="product-title">Thông tin sản phẩm</p>
                        <span>Tương Thích: </span> <?php echo $Product['tuongthich']; ?>
                        <br />
                        <span>Độ Phân Giải: </span> <?php echo $Product['dophangiai'] ?>
                        <br />
                        <span>Hãng sản xuất: </span> <?php echo $Product['thuonghieu'] ?>
                        <br />
                        <span>Xuất xứ: </span> Còn Hàng
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
                        <input class="js-getId" type="hidden" name="product_id" value=<?php echo $Product['idchuot']; ?>>
                    </div>
                </div>
            </div>
        </div>
        <div class="tableparameter">
            <h2>Thông số kỹ thuật</h2>
            <ul class="parameter tableparameter_acc">
                <li class="g21454 "><span>Tương thích:</span>
                    <div><i><?php echo $Product['tuongthich']; ?></i></div>
                </li>
                <li class="g534 "><span><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-dpi-chuot-may-tinh-la-gi-980986" target="_blank">Độ phân giải:</a></span>
                    <div><i> <?php echo $Product['dophangiai']; ?> </i></div>
                </li>
                <li class="g21450 "><span>Đèn LED:</span>
                    <div><i>Có</i></div>
                </li>
                <li class="g21455 "><span>Cách kết nối:</span>
                    <div><i> <?php echo $Product['cachketnoi']; ?></i></div>
                </li>
                <li class="g8853 "><span>Độ dài dây / Khoảng cách kết nối:</span>
                    <div><i> <?php echo $Product['dodaidai']; ?></i></div>
                </li>
                <li class="g8854 "><span>Kích thước:</span>
                    <div><i> <?php echo $Product['kichthuoc']; ?> </i></div>
                </li>
                <li class="g8855 "><span>Trọng lượng:</span>
                    <div><i> <?php echo $Product['trongluong']; ?></i></div>
                </li>
                <li class="g21456 "><span>Thương hiệu của:</span>
                    <div><i> <?php echo $Product['thuonghieu']; ?></i></div>
                </li>
                <li class="g21002 "><span>Sản xuất tại:</span>
                    <div><i> <?php echo $Product['sanxuat']; ?></i></div>
                </li>
            </ul>
            <div class="closebtn none"><i class="icondetail-closepara"></i></div>
            <div class="fullparameter" style="display: none;">
                <div class="scroll">
                    <h3>Thông số kỹ thuật chi tiết Chuột Gaming Logitech G502 Hero Đen</h3>
                    <img id="imgKit" width="500" height="430" alt="Thông số kỹ thuật 209756">
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