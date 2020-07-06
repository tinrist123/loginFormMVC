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
            $detailProduct = new $classView();
            $Product = $detailProduct->getDataToViewLaptop($idClicked);
            ?>
            <div class="imgLeft">
                <img src="<?php echo $Product['url_image']; ?>" alt="" />
            </div>
            <div class="descriptionRight">
                <h3><?php echo $Product['tenmonitor']; ?></h3>
                <p class="giaban">Giá: <?php echo $Product['giaban']; ?></p>

                <div class="facebook">
                    <button>Thích</button>
                    <button>Chia sẻ</button>
                </div>
                <div class="description">
                    <div class="boxInfor">
                        <p class="product-title">Thông tin sản phẩm</p>
                        <span>Mã Hàng: </span> <?php echo $Product['tenmonitor']; ?>
                        <br />
                        <span>Bảo hành: </span> <?php echo '24 Tháng' ?>
                        <br />
                        <span>Hãng sản xuất: </span> <?php echo $Product['tenhang'] ?>
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
                        <input class="js-getId" type="hidden" name="product_id" value=<?php echo $Product['idmonitor']; ?>>
                    </div>

                </div>

            </div>
        </div>
        <div id="tab1">

            <h2 class="h-title">Thông số kỹ thuật</h2>

            <div class="tbl-technical nd" style="width: 100%; height: auto; overflow: hidden;">
                <table width="691">
                    <tbody>
                        <tr>
                            <td width="177">Sản phẩm</td>
                            <td width="514">Màn hình</td>
                        </tr>
                        <tr>
                            <td>Tên Hãng</td>
                            <td width="514"> <?php echo $Product['tenhang'] ?> </td>
                        </tr>
                        <tr>
                            <td>Model</td>
                            <td width="514"> <?php echo $Product['model'] ?> </td>
                        </tr>
                        <tr>
                            <td>Kiểu màn hình</td>
                            <td width="514"> <?php echo $Product['kieumanhinh'] ?> </td>
                        </tr>
                        <tr>
                            <td>Kích thước màn hình</td>
                            <td width="514"> <?php echo $Product['kichthuocmanhinh'] ?> </td>
                        </tr>
                        <tr>
                            <td>Độ sáng</td>
                            <td width="514"> <?php echo $Product['dosang'] ?> </td>
                        </tr>
                        <tr>
                            <td>Tỷ lệ tương phản</td>
                            <td width="514"> <?php echo $Product['tyletuongphan'] ?> </td>
                        </tr>
                        <tr>
                            <td>Độ phân giải</td>
                            <td width="514"> <?php echo $Product['dophangiai'] ?> </td>
                        </tr>
                        <tr>
                            <td>Thời gian đáp ứng</td>
                            <td width="514"> <?php echo $Product['thoigiandapung'] ?> </td>
                        </tr>
                        <tr>
                            <td>Góc nhìn</td>
                            <td width="514"> <?php echo $Product['gocnhin'] ?> </td>
                        </tr>
                        <tr>
                            <td>Cổng giao tiếp</td>
                            <td width="514">
                                <p> <?php echo $Product['conggiaotiep'] ?> </p>
                                <p>Phụ kiện đi kèm:&nbsp;<span style="font-size: 12.0pt; font-family: 'Times New Roman','serif'; color: black;">1 x Dây nguồn 3 chấu vuông, 1 x VGA cable, 2 x Chân đế, Manual + CD Kit</span></p>
                            </td>
                        </tr>
                        <tr>
                            <td>Xuất xứ</td>
                            <td width="514"> <?php echo $Product['xuatxu'] ?> </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="show-more-tskt" style="display: none;" onclick="showTSKT();">
                <a id="xem-them-tskt" href="javascript:;" class="readmoretskt">Đọc thêm</a>
            </p>

        </div>
    </div>
</div>





<script src="./ExecuteJS/slide.js"></script>
<script src="./ExecuteJS/dropRight.js"></script>
<script src="./ExecuteJS/ajaxshoppingInView.js"></script>

<?php
require_once './Views/HeaderAndFooter/footer.php';
?>