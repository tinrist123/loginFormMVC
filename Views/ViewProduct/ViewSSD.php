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
                <h3><?php echo $Product['tenssd']; ?></h3>
                <p class="giaban">Giá: <?php echo $Product['giaban']; ?></p>

                <div class="facebook">
                    <button>Thích</button>
                    <button>Chia sẻ</button>
                </div>
                <div class="description">
                    <div class="boxInfor">
                        <p class="product-title">Thông tin sản phẩm</p>
                        <span>Mã Hàng: </span> <?php echo $Product['mapart']; ?>
                        <br />
                        <span>Bảo hành: </span> <?php echo '24 Tháng' ?>
                        <br />
                        <span>Hãng sản xuất: </span> <?php echo $Product['thuonghieu'] ?>
                        <br />
                        <span>Xuất xứ: </span> Còn Hàng
                    </div>
                    <div class="boxdesProduct">
                        <p class="product-title">Mô tả sản phẩm</p>
                        <span>"- Dung lượng: <?php echo $Product['dungluong']; ?>| Kích thước: <?php echo $Product['chuankichco']; ?>"" | Kết nối: <?php echo $Product['giaotiep']; ?></span>
                        <br />
                        <span>- Tốc độ Đọc/Ghi: <?php echo $Product['tocdodoctoida']; ?>/<?php echo $Product['tocdoghitoida']; ?></span>
                        <br />
                        <span>- TBW: 300TB | MTBF: <?php echo $Product['mtbf']; ?></span>
                        <br />
                        <span>- Tính năng đặc biệt: TRIM | S.M.A.R.T | Halogen Free | ROHS Compliance"</span>
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
                        <input class="js-getId" type="hidden" name="product_id" value=<?php echo $Product['idssd']; ?>>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-product-box">
            <div class="zing-tab">
                <div class="clr"></div>
                <div class="tab-content zing-content">
                    <div id="tab1" class="tab">
                        <p><span class="title_box_scroll_2019" style="box-sizing: border-box; display: block; font-size: 22px; margin-bottom: 10px; padding-bottom: 10px; text-transform: uppercase; font-weight: 600; border-bottom: 1px solid #eaedf1; color: #222222; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';">THÔNG SỐ KỸ THUẬT</span></p>
                        <table style="box-sizing: border-box; max-width: 100%; width: 1610px; color: #222222; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; height: auto !important; margin-left: 0px !important;" width="619">
                            <tbody style="box-sizing: border-box; border: 1px solid #eeeeee; margin: 15px 5px; padding: 0px; font-size: 1em !important;">
                                <tr style="box-sizing: border-box; clear: both; margin: 0px; padding: 5px; border-top: 1px solid #eeeeee; height: unset !important;">
                                    <td style="box-sizing: border-box; word-break: break-word; background: #fbfbfb !important; padding: 0.75em !important; height: unset !important; border-top: none !important; border-right: 1px solid #eeeeee !important; border-bottom: none !important; border-left: 1px solid #eeeeee; border-image: initial !important; font-size: 1em !important; width: 1606px;" colspan="2">
                                        <p style="box-sizing: border-box; margin: 0px !important; text-indent: unset !important;"><strong style="box-sizing: border-box;">THÔNG TIN CƠ BẢN</strong></p>
                                    </td>
                                </tr>
                                <tr style="box-sizing: border-box; clear: both; margin: 0px; padding: 5px; border-top: 1px solid #eeeeee; height: unset !important;">
                                    <td style="box-sizing: border-box; word-break: break-word; width: 481px; background-image: initial !important; background-position: initial !important; background-size: initial !important; background-repeat: initial !important; background-attachment: initial !important; background-origin: initial !important; background-clip: initial !important; padding: 0.75em !important; height: unset !important; border-top: none !important; border-right: 1px solid #eeeeee !important; border-bottom: none !important; border-left: none !important; border-image: initial !important; font-size: 1em !important;">
                                        <p style="box-sizing: border-box; margin: 0px !important; text-indent: unset !important;">Thương hiệu</p>
                                    </td>
                                    <td style="box-sizing: border-box; word-break: break-word; border-left: 1px solid #eeeeee; background-image: initial !important; background-position: initial !important; background-size: initial !important; background-repeat: initial !important; background-attachment: initial !important; background-origin: initial !important; background-clip: initial !important; padding: 0.75em !important; height: unset !important; border-top: none !important; border-right: none !important; border-bottom: none !important; border-image: initial !important; font-size: 1em !important;">
                                        <p style="box-sizing: border-box; margin: 0px !important; text-indent: unset !important;"> <?php echo  $Product['thuonghieu']; ?> </p>
                                    </td>
                                </tr>
                                <tr style="box-sizing: border-box; clear: both; margin: 0px; padding: 5px; border-top: 1px solid #eeeeee; height: unset !important;">
                                    <td style="box-sizing: border-box; word-break: break-word; background: #fbfbfb !important; padding: 0.75em !important; height: unset !important; border-top: none !important; border-right: 1px solid #eeeeee !important; border-bottom: none !important; border-left: none !important; border-image: initial !important; font-size: 1em !important; width: 481px;">
                                        <p style="box-sizing: border-box; margin: 0px !important; text-indent: unset !important;">Dòng</p>
                                    </td>
                                    <td style="box-sizing: border-box; word-break: break-word; background: #fbfbfb !important; padding: 0.75em !important; height: unset !important; border-top: none !important; border-right: none !important; border-bottom: none !important; border-left: 1px solid #eeeeee; border-image: initial !important; font-size: 1em !important;">
                                        <p style="box-sizing: border-box; margin: 0px !important; text-indent: unset !important;"><?php echo  $Product['dong']; ?></p>
                                    </td>
                                </tr>
                                <tr style="box-sizing: border-box; clear: both; margin: 0px; padding: 5px; border-top: 1px solid #eeeeee; height: unset !important;">
                                    <td style="box-sizing: border-box; word-break: break-word; width: 481px; background-image: initial !important; background-position: initial !important; background-size: initial !important; background-repeat: initial !important; background-attachment: initial !important; background-origin: initial !important; background-clip: initial !important; padding: 0.75em !important; height: unset !important; border-top: none !important; border-right: 1px solid #eeeeee !important; border-bottom: none !important; border-left: none !important; border-image: initial !important; font-size: 1em !important;">
                                        <p style="box-sizing: border-box; margin: 0px !important; text-indent: unset !important;">Mã part</p>
                                    </td>
                                    <td style="box-sizing: border-box; word-break: break-word; border-left: 1px solid #eeeeee; background-image: initial !important; background-position: initial !important; background-size: initial !important; background-repeat: initial !important; background-attachment: initial !important; background-origin: initial !important; background-clip: initial !important; padding: 0.75em !important; height: unset !important; border-top: none !important; border-right: none !important; border-bottom: none !important; border-image: initial !important; font-size: 1em !important;">
                                        <p style="box-sizing: border-box; margin: 0px !important; text-indent: unset !important;"> <?php echo $Product['mapart']; ?> </p>
                                    </td>
                                </tr>
                                <tr style="box-sizing: border-box; clear: both; margin: 0px; padding: 5px; border-top: 1px solid #eeeeee; height: unset !important;">
                                    <td style="box-sizing: border-box; word-break: break-word; background: #fbfbfb !important; padding: 0.75em !important; height: unset !important; border-top: none !important; border-right: 1px solid #eeeeee !important; border-bottom: none !important; border-left: none !important; border-image: initial !important; font-size: 1em !important; width: 481px;">
                                        <p style="box-sizing: border-box; margin: 0px !important; text-indent: unset !important;">Loại</p>
                                    </td>
                                    <td style="box-sizing: border-box; word-break: break-word; background: #fbfbfb !important; padding: 0.75em !important; height: unset !important; border-top: none !important; border-right: none !important; border-bottom: none !important; border-left: 1px solid #eeeeee; border-image: initial !important; font-size: 1em !important;">
                                        <p style="box-sizing: border-box; margin: 0px !important; text-indent: unset !important;"> <?php echo  $Product['loai']; ?> </p>
                                    </td>
                                </tr>
                                <tr style="box-sizing: border-box; clear: both; margin: 0px; padding: 5px; border-top: 1px solid #eeeeee; height: unset !important;">
                                    <td style="box-sizing: border-box; word-break: break-word; width: 481px; background-image: initial !important; background-position: initial !important; background-size: initial !important; background-repeat: initial !important; background-attachment: initial !important; background-origin: initial !important; background-clip: initial !important; padding: 0.75em !important; height: unset !important; border-top: none !important; border-right: 1px solid #eeeeee !important; border-bottom: none !important; border-left: none !important; border-image: initial !important; font-size: 1em !important;">
                                        <p style="box-sizing: border-box; margin: 0px !important; text-indent: unset !important;">Phân khúc</p>
                                    </td>
                                    <td style="box-sizing: border-box; word-break: break-word; border-left: 1px solid #eeeeee; background-image: initial !important; background-position: initial !important; background-size: initial !important; background-repeat: initial !important; background-attachment: initial !important; background-origin: initial !important; background-clip: initial !important; padding: 0.75em !important; height: unset !important; border-top: none !important; border-right: none !important; border-bottom: none !important; border-image: initial !important; font-size: 1em !important;">
                                        <p style="box-sizing: border-box; margin: 0px !important; text-indent: unset !important;"> <?php echo  $Product['phankhuc']; ?> </p>
                                    </td>
                                </tr>
                                <tr style="box-sizing: border-box; clear: both; margin: 0px; padding: 5px; border-top: 1px solid #eeeeee; height: unset !important;">
                                    <td style="box-sizing: border-box; word-break: break-word; background: #fbfbfb !important; padding: 0.75em !important; height: unset !important; border-top: none !important; border-right: 1px solid #eeeeee !important; border-bottom: none !important; border-left: 1px solid #eeeeee; border-image: initial !important; font-size: 1em !important; width: 1606px;" colspan="2">
                                        <p style="box-sizing: border-box; margin: 0px !important; text-indent: unset !important;"><strong style="box-sizing: border-box;">CHI TIẾT</strong></p>
                                    </td>
                                </tr>
                                <tr style="box-sizing: border-box; clear: both; margin: 0px; padding: 5px; border-top: 1px solid #eeeeee; height: unset !important;">
                                    <td style="box-sizing: border-box; word-break: break-word; width: 481px; background-image: initial !important; background-position: initial !important; background-size: initial !important; background-repeat: initial !important; background-attachment: initial !important; background-origin: initial !important; background-clip: initial !important; padding: 0.75em !important; height: unset !important; border-top: none !important; border-right: 1px solid #eeeeee !important; border-bottom: none !important; border-left: none !important; border-image: initial !important; font-size: 1em !important;">
                                        <p style="box-sizing: border-box; margin: 0px !important; text-indent: unset !important;">Chuẩn kích cỡ</p>
                                    </td>
                                    <td style="box-sizing: border-box; word-break: break-word; border-left: 1px solid #eeeeee; background-image: initial !important; background-position: initial !important; background-size: initial !important; background-repeat: initial !important; background-attachment: initial !important; background-origin: initial !important; background-clip: initial !important; padding: 0.75em !important; height: unset !important; border-top: none !important; border-right: none !important; border-bottom: none !important; border-image: initial !important; font-size: 1em !important;">
                                        <p style="box-sizing: border-box; margin: 0px !important; text-indent: unset !important;"> <?php echo  $Product['chuankichco']; ?> </p>
                                    </td>
                                </tr>
                                <tr style="box-sizing: border-box; clear: both; margin: 0px; padding: 5px; border-top: 1px solid #eeeeee; height: unset !important;">
                                    <td style="box-sizing: border-box; word-break: break-word; background: #fbfbfb !important; padding: 0.75em !important; height: unset !important; border-top: none !important; border-right: 1px solid #eeeeee !important; border-bottom: none !important; border-left: none !important; border-image: initial !important; font-size: 1em !important; width: 481px;">
                                        <p style="box-sizing: border-box; margin: 0px !important; text-indent: unset !important;">Dung lượng</p>
                                    </td>
                                    <td style="box-sizing: border-box; word-break: break-word; background: #fbfbfb !important; padding: 0.75em !important; height: unset !important; border-top: none !important; border-right: none !important; border-bottom: none !important; border-left: 1px solid #eeeeee; border-image: initial !important; font-size: 1em !important;">
                                        <p style="box-sizing: border-box; margin: 0px !important; text-indent: unset !important;"> <?php echo $Product['dungluong']; ?> </p>
                                    </td>
                                </tr>
                                <tr style="box-sizing: border-box; clear: both; margin: 0px; padding: 5px; border-top: 1px solid #eeeeee; height: unset !important;">
                                    <td style="box-sizing: border-box; word-break: break-word; width: 481px; background-image: initial !important; background-position: initial !important; background-size: initial !important; background-repeat: initial !important; background-attachment: initial !important; background-origin: initial !important; background-clip: initial !important; padding: 0.75em !important; height: unset !important; border-top: none !important; border-right: 1px solid #eeeeee !important; border-bottom: none !important; border-left: none !important; border-image: initial !important; font-size: 1em !important;">
                                        <p style="box-sizing: border-box; margin: 0px !important; text-indent: unset !important;">Loại chip nhớ</p>
                                    </td>
                                    <td style="box-sizing: border-box; word-break: break-word; border-left: 1px solid #eeeeee; background-image: initial !important; background-position: initial !important; background-size: initial !important; background-repeat: initial !important; background-attachment: initial !important; background-origin: initial !important; background-clip: initial !important; padding: 0.75em !important; height: unset !important; border-top: none !important; border-right: none !important; border-bottom: none !important; border-image: initial !important; font-size: 1em !important;">
                                        <p style="box-sizing: border-box; margin: 0px !important; text-indent: unset !important;"> <?php echo  $Product['loaichipnho']; ?> </p>
                                    </td>
                                </tr>
                                <tr style="box-sizing: border-box; clear: both; margin: 0px; padding: 5px; border-top: 1px solid #eeeeee; height: unset !important;">
                                    <td style="box-sizing: border-box; word-break: break-word; background: #fbfbfb !important; padding: 0.75em !important; height: unset !important; border-top: none !important; border-right: 1px solid #eeeeee !important; border-bottom: none !important; border-left: none !important; border-image: initial !important; font-size: 1em !important; width: 481px;">
                                        <p style="box-sizing: border-box; margin: 0px !important; text-indent: unset !important;">Giao tiếp</p>
                                    </td>
                                    <td style="box-sizing: border-box; word-break: break-word; background: #fbfbfb !important; padding: 0.75em !important; height: unset !important; border-top: none !important; border-right: none !important; border-bottom: none !important; border-left: 1px solid #eeeeee; border-image: initial !important; font-size: 1em !important;">
                                        <p style="box-sizing: border-box; margin: 0px !important; text-indent: unset !important;"> <?php echo $Product['giaotiep']; ?> </p>
                                    </td>
                                </tr>
                                <tr style="box-sizing: border-box; clear: both; margin: 0px; padding: 5px; border-top: 1px solid #eeeeee; height: unset !important;">
                                    <td style="box-sizing: border-box; word-break: break-word; border-left: 1px solid #eeeeee; width: 1606px; background-image: initial !important; background-position: initial !important; background-size: initial !important; background-repeat: initial !important; background-attachment: initial !important; background-origin: initial !important; background-clip: initial !important; padding: 0.75em !important; height: unset !important; border-top: none !important; border-right: 1px solid #eeeeee !important; border-bottom: none !important; border-image: initial !important; font-size: 1em !important;" colspan="2">
                                        <p style="box-sizing: border-box; margin: 0px !important; text-indent: unset !important;"><strong style="box-sizing: border-box;">HIỆU NĂNG</strong></p>
                                    </td>
                                </tr>
                                <tr style="box-sizing: border-box; clear: both; margin: 0px; padding: 5px; border-top: 1px solid #eeeeee; height: unset !important;">
                                    <td style="box-sizing: border-box; word-break: break-word; background: #fbfbfb !important; padding: 0.75em !important; height: unset !important; border-top: none !important; border-right: 1px solid #eeeeee !important; border-bottom: none !important; border-left: none !important; border-image: initial !important; font-size: 1em !important; width: 481px;">
                                        <p style="box-sizing: border-box; margin: 0px !important; text-indent: unset !important;">Tốc độ đọc tối đa</p>
                                    </td>
                                    <td style="box-sizing: border-box; word-break: break-word; background: #fbfbfb !important; padding: 0.75em !important; height: unset !important; border-top: none !important; border-right: none !important; border-bottom: none !important; border-left: 1px solid #eeeeee; border-image: initial !important; font-size: 1em !important;">
                                        <p style="box-sizing: border-box; margin: 0px !important; text-indent: unset !important;"> <?php echo  $Product['tocdodoctoida']; ?> </p>
                                    </td>
                                </tr>
                                <tr style="box-sizing: border-box; clear: both; margin: 0px; padding: 5px; border-top: 1px solid #eeeeee; height: unset !important;">
                                    <td style="box-sizing: border-box; word-break: break-word; width: 481px; background-image: initial !important; background-position: initial !important; background-size: initial !important; background-repeat: initial !important; background-attachment: initial !important; background-origin: initial !important; background-clip: initial !important; padding: 0.75em !important; height: unset !important; border-top: none !important; border-right: 1px solid #eeeeee !important; border-bottom: none !important; border-left: none !important; border-image: initial !important; font-size: 1em !important;">
                                        <p style="box-sizing: border-box; margin: 0px !important; text-indent: unset !important;">Tốc độ ghi tối đa</p>
                                    </td>
                                    <td style="box-sizing: border-box; word-break: break-word; border-left: 1px solid #eeeeee; background-image: initial !important; background-position: initial !important; background-size: initial !important; background-repeat: initial !important; background-attachment: initial !important; background-origin: initial !important; background-clip: initial !important; padding: 0.75em !important; height: unset !important; border-top: none !important; border-right: none !important; border-bottom: none !important; border-image: initial !important; font-size: 1em !important;">
                                        <p style="box-sizing: border-box; margin: 0px !important; text-indent: unset !important;"> <?php echo $Product['tocdoghitoida']; ?> </p>
                                    </td>
                                </tr>
                                <tr style="box-sizing: border-box; clear: both; margin: 0px; padding: 5px; border-top: 1px solid #eeeeee; height: unset !important;">
                                    <td style="box-sizing: border-box; word-break: break-word; background: #fbfbfb !important; padding: 0.75em !important; height: unset !important; border-top: none !important; border-right: 1px solid #eeeeee !important; border-bottom: none !important; border-left: none !important; border-image: initial !important; font-size: 1em !important; width: 481px;">
                                        <p style="box-sizing: border-box; margin: 0px !important; text-indent: unset !important;">MTBF</p>
                                    </td>
                                    <td style="box-sizing: border-box; word-break: break-word; background: #fbfbfb !important; padding: 0.75em !important; height: unset !important; border-top: none !important; border-right: none !important; border-bottom: none !important; border-left: 1px solid #eeeeee; border-image: initial !important; font-size: 1em !important;">
                                        <p style="box-sizing: border-box; margin: 0px !important; text-indent: unset !important;"> <?php echo  $Product['mtbf']; ?> </p>
                                    </td>
                                </tr>
                                <tr style="box-sizing: border-box; clear: both; margin: 0px; padding: 5px; border-top: 1px solid #eeeeee; height: unset !important;">
                                    <td style="box-sizing: border-box; word-break: break-word; border-left: 1px solid #eeeeee; width: 1606px; background-image: initial !important; background-position: initial !important; background-size: initial !important; background-repeat: initial !important; background-attachment: initial !important; background-origin: initial !important; background-clip: initial !important; padding: 0.75em !important; height: unset !important; border-top: none !important; border-right: 1px solid #eeeeee !important; border-bottom: none !important; border-image: initial !important; font-size: 1em !important;" colspan="2">
                                        <p style="box-sizing: border-box; margin: 0px !important; text-indent: unset !important;"><strong style="box-sizing: border-box;">KÍCH CỠ&amp;CÂN NẶNG</strong></p>
                                    </td>
                                </tr>
                                <tr style="box-sizing: border-box; clear: both; margin: 0px; padding: 5px; border-top: 1px solid #eeeeee; height: unset !important;">
                                    <td style="box-sizing: border-box; word-break: break-word; background: #fbfbfb !important; padding: 0.75em !important; height: unset !important; border-top: none !important; border-right: 1px solid #eeeeee !important; border-bottom: none !important; border-left: none !important; border-image: initial !important; font-size: 1em !important; width: 481px;">
                                        <p style="box-sizing: border-box; margin: 0px !important; text-indent: unset !important;">Dầy</p>
                                    </td>
                                    <td style="box-sizing: border-box; word-break: break-word; background: #fbfbfb !important; padding: 0.75em !important; height: unset !important; border-top: none !important; border-right: none !important; border-bottom: none !important; border-left: 1px solid #eeeeee; border-image: initial !important; font-size: 1em !important;">
                                        <p style="box-sizing: border-box; margin: 0px !important; text-indent: unset !important;"> <?php echo  $Product['doday']; ?> </p>
                                    </td>
                                </tr>
                                <tr style="box-sizing: border-box; clear: both; margin: 0px; padding: 5px; border-top: 1px solid #eeeeee; height: unset !important;">
                                    <td style="box-sizing: border-box; word-break: break-word; width: 481px; background-image: initial !important; background-position: initial !important; background-size: initial !important; background-repeat: initial !important; background-attachment: initial !important; background-origin: initial !important; background-clip: initial !important; padding: 0.75em !important; height: unset !important; border-top: none !important; border-right: 1px solid #eeeeee !important; border-bottom: none !important; border-left: none !important; border-image: initial !important; font-size: 1em !important;">
                                        <p style="box-sizing: border-box; margin: 0px !important; text-indent: unset !important;">Chiều ngang</p>
                                    </td>
                                    <td style="box-sizing: border-box; word-break: break-word; border-left: 1px solid #eeeeee; background-image: initial !important; background-position: initial !important; background-size: initial !important; background-repeat: initial !important; background-attachment: initial !important; background-origin: initial !important; background-clip: initial !important; padding: 0.75em !important; height: unset !important; border-top: none !important; border-right: none !important; border-bottom: none !important; border-image: initial !important; font-size: 1em !important;">
                                        <p style="box-sizing: border-box; margin: 0px !important; text-indent: unset !important;"> <?php echo $Product['chieungang']; ?> </p>
                                    </td>
                                </tr>
                                <tr style="box-sizing: border-box; clear: both; margin: 0px; padding: 5px; border-top: 1px solid #eeeeee; height: unset !important;">
                                    <td style="box-sizing: border-box; word-break: break-word; background: #fbfbfb !important; padding: 0.75em !important; height: unset !important; border-top: none !important; border-right: 1px solid #eeeeee !important; border-bottom: none !important; border-left: none !important; border-image: initial !important; font-size: 1em !important; width: 481px;">
                                        <p style="box-sizing: border-box; margin: 0px !important; text-indent: unset !important;">Chiều dọc</p>
                                    </td>
                                    <td style="box-sizing: border-box; word-break: break-word; background: #fbfbfb !important; padding: 0.75em !important; height: unset !important; border-top: none !important; border-right: none !important; border-bottom: none !important; border-left: 1px solid #eeeeee; border-image: initial !important; font-size: 1em !important;">
                                        <p style="box-sizing: border-box; margin: 0px !important; text-indent: unset !important;"> <?php echo  $Product['chieudoc']; ?> </p>
                                    </td>
                                </tr>
                                <tr style="box-sizing: border-box; clear: both; margin: 0px; padding: 5px; border-top: 1px solid #eeeeee; height: unset !important;">
                                    <td style="box-sizing: border-box; word-break: break-word; width: 481px; background-image: initial !important; background-position: initial !important; background-size: initial !important; background-repeat: initial !important; background-attachment: initial !important; background-origin: initial !important; background-clip: initial !important; padding: 0.75em !important; height: unset !important; border-top: none !important; border-right: 1px solid #eeeeee !important; border-bottom: none !important; border-left: none !important; border-image: initial !important; font-size: 1em !important;">
                                        <p style="box-sizing: border-box; margin: 0px !important; text-indent: unset !important;">Trọng lượng</p>
                                    </td>
                                    <td style="box-sizing: border-box; word-break: break-word; border-left: 1px solid #eeeeee; background-image: initial !important; background-position: initial !important; background-size: initial !important; background-repeat: initial !important; background-attachment: initial !important; background-origin: initial !important; background-clip: initial !important; padding: 0.75em !important; height: unset !important; border-top: none !important; border-right: none !important; border-bottom: none !important; border-image: initial !important; font-size: 1em !important;">
                                        <p style="box-sizing: border-box; margin: 0px !important; text-indent: unset !important;"> <?php echo  $Product['trongluong']; ?> </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div id="tab2" class="tab">
                    </div>
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