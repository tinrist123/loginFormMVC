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
    <div class="product">
        <div class="container">
            <?php
            $detailLaptop = new Models_Laptop();
            $laptop = $detailLaptop->getDataToViewLaptop($idClicked);
            ?>
            <div class="fieldContent">
                <div class="imgLeft">
                    <img src="<?php echo $laptop['url_image']; ?>" alt="" />
                </div>
                <div class="descriptionRight">
                    <h3><?php echo $laptop['tenlaptop']; ?></h3>
                    <p class="giaban">Giá: <?php echo $laptop['giaban']; ?></p>

                    <div class="facebook">
                        <button>Thích</button>
                        <button>Chia sẻ</button>
                    </div>
                    <div class="description">
                        <div class="boxInfor">
                            <p class="product-title">Thông tin sản phẩm</p>
                            <span>Mã Hàng: </span> <?php echo $laptop['tenlaptop']; ?>
                            <br />
                            <span>Bảo hành: </span> <?php echo $laptop['baohanh'] ?>
                            <br />
                            <span>Hãng sản xuất: </span> <?php echo $laptop['hangsanxuat'] ?>
                            <br />
                            <span>Xuất xứ: </span> Còn Hàng
                        </div>
                        <div class="boxdesProduct">
                            <p class="product-title">Mô tả sản phẩm</p>
                            <span>CPU: </span> <?php echo $laptop['tenbovixuly'] ?>
                            <br />
                            <span>RAM : </span> <?php echo $laptop['dungluongram'];  ?>
                            <br />
                            <span>Ổ cứng : </span><?php echo $laptop['dungluonghdd']; ?>
                            <br />
                            <span>Màn Hình: </span><?php echo $laptop['manhinh'] . ', ' . $laptop['dophangiai'] ?>
                            <span>Card màn hình : </span> <?php echo $laptop['congnghevga']; ?>
                            <br />
                            <span>Cổng kết nối : LAN : </span> <?php echo $laptop['lan'] . ', ' .  $laptop['wireless']; ?>
                            <br />
                            <span>Hệ điều hành : </span><?php echo $laptop['hedieuhanh']; ?>
                            <br />
                            <span>Trọng lượng : </span><?php echo $laptop['trongluong']; ?>
                            <br />
                            <span>Kích thước : </span><?php echo $laptop['thietke']; ?>
                            <br />
                            <span>Xuất xứ : </span>Trung Quốc
                        </div>
                        <div class="btnProduct">
                            <a style="cursor: pointer;" class="btn-add-cart">
                                <i class="fas fa-shopping-cart"></i>
                                <span>Thêm vào giỏ hàng</span>
                            </a>
                            <a class="btn-buy">
                                <i class="fas fa-shopping-cart"></i>
                                <span>Mua Hàng</span>
                            </a>
                            <input class="js-getCate" type="hidden" name="category" value=<?php echo $laptop['idloaisanpham']; ?>>
                            <input class="js-getId" type="hidden" name="product_id" value=<?php echo $laptop['idlaptop']; ?>>
                        </div>
                    </div>
                </div>
            </div>
            <div class="detailProduct">
                <table style="
                border-collapse: collapse;
                color: #222222;
                font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI',
                  Roboto, 'Helvetica Neue', Arial, sans-serif;
                width: 633px;
              " border="1" width="100%">
                    <tbody>
                        <tr>
                            <td style="padding: 0.75pt; width: 471pt;" colspan="2" width="628">
                                <p>
                                    <strong><span style="
                            font-size: 8.5pt;
                            line-height: 13.0333px;
                            font-family: Verdana, sans-serif;
                            color: black;
                          ">Hãng sản xuất&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp;<?php echo $laptop['hangsanxuat']; ?></span></strong>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0.75pt; width: 471pt;" colspan="2" width="628">
                                <p>
                                    <strong><span style="
                            font-size: 8.5pt;
                            line-height: 13.0333px;
                            font-family: Verdana, sans-serif;
                            color: black;
                          ">Tên sản phẩm&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<?php echo $laptop['tenlaptop']; ?></span></strong>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0.75pt; width: 471pt;" colspan="2" width="628">
                                <p>
                                    <strong><span style="
                            font-size: 8.5pt;
                            line-height: 13.0333px;
                            font-family: Verdana, sans-serif;
                            color: black;
                          ">Bộ vi xử lý</span></strong><span style="
                          font-size: 8.5pt;
                          line-height: 13.0333px;
                          font-family: Verdana, sans-serif;
                          color: black;
                        ">&nbsp;</span>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0.75pt; width: 163.75pt;" width="218">
                                <p>
                                    <span style="
                          font-size: 8.5pt;
                          line-height: 13.0333px;
                          font-family: Verdana, sans-serif;
                          color: black;
                        ">Bộ vi xử lý</span>
                                </p>
                            </td>
                            <td style="padding: 0.75pt; width: 305.75pt;" width="408">
                                <p><?php echo $laptop['tenbovixuly']; ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0.75pt; width: 163.75pt;" width="218">
                                <p>
                                    <span style="
                          font-size: 8.5pt;
                          line-height: 13.0333px;
                          font-family: Verdana, sans-serif;
                          color: black;
                        ">Tốc độ</span>
                                </p>
                            </td>
                            <td style="padding: 0.75pt; width: 305.75pt;" width="408">
                                <p><?php echo $laptop['tocdo']; ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0.75pt; width: 163.75pt;" width="218">
                                <p>
                                    <span style="
                          font-size: 8.5pt;
                          line-height: 13.0333px;
                          font-family: Verdana, sans-serif;
                          color: black;
                        ">Bộ nhớ đệm</span>
                                </p>
                            </td>
                            <td style="padding: 0.75pt; width: 305.75pt;" width="408">
                                <p>
                                    <span style="
                          font-size: 8.5pt;
                          line-height: 13.0333px;
                          font-family: Verdana, sans-serif;
                          color: black;
                        "><?php echo $laptop['bonhodem']; ?></span>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0.75pt; width: 471pt;" colspan="2" width="628">
                                <p>
                                    <strong><span style="
                            font-size: 8.5pt;
                            line-height: 13.0333px;
                            font-family: Verdana, sans-serif;
                            color: black;
                          ">Bộ nhớ trong&nbsp;</span></strong>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0.75pt; width: 163.75pt;" width="218">
                                <p>
                                    <span style="
                          font-size: 8.5pt;
                          line-height: 13.0333px;
                          font-family: Verdana, sans-serif;
                          color: black;
                        ">Dung lượng</span>
                                </p>
                            </td>
                            <td style="padding: 0.75pt; width: 305.75pt;" width="408">
                                <p>
                                    <a style="color: #333333; text-decoration-line: none;" href=""><span style="
                            font-size: 8.5pt;
                            line-height: 13.0333px;
                            font-family: Verdana, sans-serif;
                          "><?php echo $laptop['dungluongram']; ?></span></a>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0.75pt; width: 163.75pt;" width="218">
                                <p>
                                    <span style="
                          font-size: 8.5pt;
                          line-height: 13.0333px;
                          font-family: Verdana, sans-serif;
                          color: black;
                        ">Số khe cắm</span>
                                </p>
                            </td>
                            <td style="padding: 0.75pt; width: 305.75pt;" width="408">
                                <p>&nbsp;còn <?php echo $laptop['sokheram']; ?> khe cắm Ram</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0.75pt; width: 471pt;" colspan="2" width="628">
                                <p>
                                    <strong><span style="
                            font-size: 8.5pt;
                            line-height: 13.0333px;
                            font-family: Verdana, sans-serif;
                            color: black;
                          ">Ổ cứng&nbsp;</span></strong>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0.75pt; width: 163.75pt;" width="218">
                                <p>
                                    <span style="
                          font-size: 8.5pt;
                          line-height: 13.0333px;
                          font-family: Verdana, sans-serif;
                          color: black;
                        ">Dung lượng</span>
                                </p>
                            </td>
                            <td style="padding: 0.75pt; width: 305.75pt;" width="408">
                                <p><?php echo $laptop['dungluonghdd']; ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0.75pt; width: 163.75pt;" width="218">
                                <p>
                                    <span style="
                          font-size: 8.5pt;
                          line-height: 13.0333px;
                          font-family: Verdana, sans-serif;
                          color: black;
                        ">Tốc độ vòng quay</span>
                                </p>
                            </td>
                            <td style="padding: 0.75pt; width: 305.75pt;" width="408">
                                <p>
                                    <span style="
                          font-size: 8.5pt;
                          line-height: 13.0333px;
                          font-family: Verdana, sans-serif;
                          color: black;
                        ">&nbsp;</span>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0.75pt; width: 163.75pt;" width="218">
                                <p>
                                    <strong><span style="
                            font-size: 8.5pt;
                            line-height: 13.0333px;
                            font-family: Verdana, sans-serif;
                            color: black;
                          ">Ổ đĩa quang (ODD)&nbsp;</span></strong>
                                </p>
                            </td>
                            <td style="padding: 0.75pt; width: 305.75pt;" width="408">
                                <p>
                                    <span style="
                          font-size: 8.5pt;
                          line-height: 13.0333px;
                          font-family: Verdana, sans-serif;
                          color: black;
                        ">&nbsp;</span>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0.75pt; width: 471pt;" colspan="2" width="628">
                                <p>
                                    <strong><span style="
                            font-size: 8.5pt;
                            line-height: 13.0333px;
                            font-family: Verdana, sans-serif;
                            color: black;
                          ">Hiển thị&nbsp;</span></strong>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0.75pt; width: 163.75pt;" width="218">
                                <p>
                                    <span style="
                          font-size: 8.5pt;
                          line-height: 13.0333px;
                          font-family: Verdana, sans-serif;
                          color: black;
                        ">Màn hình</span>
                                </p>
                            </td>
                            <td style="padding: 0.75pt; width: 305.75pt;" width="408">
                                <p><?php echo $laptop['manhinh']; ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0.75pt; width: 163.75pt;" width="218">
                                <p>
                                    <span style="
                          font-size: 8.5pt;
                          line-height: 13.0333px;
                          font-family: Verdana, sans-serif;
                          color: black;
                        ">Độ phân giải</span>
                                </p>
                            </td>
                            <td style="padding: 0.75pt; width: 305.75pt;" width="408">
                                <p>
                                    <span style="
                          font-size: 8.5pt;
                          line-height: 13.0333px;
                          font-family: Verdana, sans-serif;
                          color: black;
                        "><?php echo $laptop['dophangiai']; ?></span>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0.75pt; width: 471pt;" colspan="2" width="628">
                                <p>
                                    <strong><span style="
                            font-size: 8.5pt;
                            line-height: 13.0333px;
                            font-family: Verdana, sans-serif;
                            color: black;
                          ">Đồ Họa (VGA)&nbsp;</span></strong>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0.75pt; width: 163.75pt;" width="218">
                                <p>
                                    <span style="
                          font-size: 8.5pt;
                          line-height: 13.0333px;
                          font-family: Verdana, sans-serif;
                          color: black;
                        ">Card màn hình</span>
                                </p>
                            </td>
                            <td style="padding: 0.75pt; width: 305.75pt;" width="408">
                                <p><?php echo $laptop['congnghevga']; ?>&nbsp;</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0.75pt; width: 471pt;" colspan="2" width="628">
                                <p>
                                    <strong><span style="
                            font-size: 8.5pt;
                            line-height: 13.0333px;
                            font-family: Verdana, sans-serif;
                            color: black;
                          ">Kết nối (Network)&nbsp;</span></strong>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0.75pt; width: 163.75pt;" width="218">
                                <p>
                                    <span style="
                          font-size: 8.5pt;
                          line-height: 13.0333px;
                          font-family: Verdana, sans-serif;
                          color: black;
                        ">Wireless</span>
                                </p>
                            </td>
                            <td style="padding: 0.75pt; width: 305.75pt;" width="408">
                                <p><?php echo $laptop['wireless']; ?>&nbsp;</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0.75pt; width: 163.75pt;" width="218">
                                <p>
                                    <span style="
                          font-size: 8.5pt;
                          line-height: 13.0333px;
                          font-family: Verdana, sans-serif;
                          color: black;
                        ">Lan</span>
                                </p>
                            </td>
                            <td style="padding: 0.75pt; width: 305.75pt;" width="408">
                                <p><?php echo $laptop['lan']; ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0.75pt; width: 163.75pt;" width="218">
                                <p>
                                    <span style="
                          font-size: 8.5pt;
                          line-height: 13.0333px;
                          font-family: Verdana, sans-serif;
                          color: black;
                        ">Bluetooth</span>
                                </p>
                            </td>
                            <td style="padding: 0.75pt; width: 305.75pt;" width="408">
                                <p>
                                    <span style="
                          font-size: 8.5pt;
                          line-height: 13.0333px;
                          font-family: Verdana, sans-serif;
                          color: black;
                        "><?php echo $laptop['bluetooth']; ?></span>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0.75pt; width: 471pt;" colspan="2" width="628">
                                <p>
                                    <strong><span style="
                            font-size: 8.5pt;
                            line-height: 13.0333px;
                            font-family: Verdana, sans-serif;
                            color: black;
                          ">Bàn phím , Chuột&nbsp;</span></strong>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0.75pt; width: 163.75pt;" width="218">
                                <p>
                                    <span style="
                          font-size: 8.5pt;
                          line-height: 13.0333px;
                          font-family: Verdana, sans-serif;
                          color: black;
                        ">Kiểu bàn phím</span>
                                </p>
                            </td>
                            <td style="padding: 0.75pt; width: 305.75pt;" width="408">
                                <p>
                                    <span style="
                          font-size: 8.5pt;
                          line-height: 13.0333px;
                          font-family: Verdana, sans-serif;
                          color: black;
                        "><?php echo $laptop['kieubanphim']; ?></span>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0.75pt; width: 163.75pt;" width="218">
                                <p>
                                    <span style="
                          font-size: 8.5pt;
                          line-height: 13.0333px;
                          font-family: Verdana, sans-serif;
                          color: black;
                        ">Chuột</span>
                                </p>
                            </td>
                            <td style="padding: 0.75pt; width: 305.75pt;" width="408">
                                <p>
                                    <span style="
                          font-size: 8.5pt;
                          line-height: 13.0333px;
                          font-family: Verdana, sans-serif;
                          color: black;
                        ">Cảm ứng đa điểm</span>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0.75pt; width: 471pt;" colspan="2" width="628">
                                <p>
                                    <strong><span style="
                            font-size: 8.5pt;
                            line-height: 13.0333px;
                            font-family: Verdana, sans-serif;
                            color: black;
                          ">Giao tiếp mở rộng&nbsp;</span></strong>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0.75pt; width: 163.75pt;" width="218">
                                <p>
                                    <span style="
                          font-size: 8.5pt;
                          line-height: 13.0333px;
                          font-family: Verdana, sans-serif;
                          color: black;
                        ">Kết nối USB</span>
                                </p>
                            </td>
                            <td style="padding: 0.75pt; width: 305.75pt;" width="408">
                                <p><?php echo $laptop['congusb']; ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0.75pt; width: 163.75pt;" width="218">
                                <p>
                                    <span style="
                          font-size: 8.5pt;
                          line-height: 13.0333px;
                          font-family: Verdana, sans-serif;
                          color: black;
                        ">Kết nối HDMI/VGA</span>
                                </p>
                            </td>
                            <td style="padding: 0.75pt; width: 305.75pt;" width="408">
                                <p><?php echo $laptop['hdmi']; ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0.75pt; width: 163.75pt;" width="218">
                                <p>
                                    <span style="
                          font-size: 8.5pt;
                          line-height: 13.0333px;
                          font-family: Verdana, sans-serif;
                          color: black;
                        ">Khe cắm thẻ nhớ</span>
                                </p>
                            </td>
                            <td style="padding: 0.75pt; width: 305.75pt;" width="408">
                                <p>
                                    <span style="
                          font-size: 8.5pt;
                          line-height: 13.0333px;
                          font-family: Verdana, sans-serif;
                          color: black;
                        "><?php echo $laptop['khecamthenho']; ?></span>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0.75pt; width: 163.75pt;" width="218">
                                <p>
                                    <span style="
                          font-size: 8.5pt;
                          line-height: 13.0333px;
                          font-family: Verdana, sans-serif;
                          color: black;
                        ">Tai nghe</span>
                                </p>
                            </td>
                            <td style="padding: 0.75pt; width: 305.75pt;" width="408">
                                <p>1x Mic-in<br />1x Headphone-out</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0.75pt; width: 163.75pt;" width="218">
                                <p>
                                    <span style="
                          font-size: 8.5pt;
                          line-height: 13.0333px;
                          font-family: Verdana, sans-serif;
                          color: black;
                        ">Camera</span>
                                </p>
                            </td>
                            <td style="padding: 0.75pt; width: 305.75pt;" width="408">
                                <p>
                                    <span style="
                          font-size: 8.5pt;
                          line-height: 13.0333px;
                          font-family: Verdana, sans-serif;
                          color: black;
                        "><?php echo $laptop['camera']; ?></span>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0.75pt; width: 163.75pt;" width="218">
                                <p>
                                    <strong><span style="
                            font-size: 8.5pt;
                            line-height: 13.0333px;
                            font-family: Verdana, sans-serif;
                            color: black;
                          ">Dung lượng pin</span></strong>
                                </p>
                            </td>
                            <td style="padding: 0.75pt; width: 305.75pt;" width="408">
                                <p><?php echo $laptop['dungluongpin']; ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0.75pt; width: 163.75pt;" width="218">
                                <p>
                                    <strong><span style="
                            font-size: 8.5pt;
                            line-height: 13.0333px;
                            font-family: Verdana, sans-serif;
                            color: black;
                          ">Sạc pin</span></strong>
                                </p>
                            </td>
                            <td style="padding: 0.75pt; width: 305.75pt;" width="408">
                                <p>
                                    <span style="
                          font-size: 8.5pt;
                          line-height: 13.0333px;
                          font-family: Verdana, sans-serif;
                          color: black;
                        ">Đi kèm</span>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0.75pt; width: 163.75pt;" width="218">
                                <p>
                                    <strong><span style="
                            font-size: 8.5pt;
                            line-height: 13.0333px;
                            font-family: Verdana, sans-serif;
                            color: black;
                          ">Hệ Điều Hành</span></strong>
                                </p>
                            </td>
                            <td style="padding: 0.75pt; width: 305.75pt;" width="408">
                                <p>
                                    <span style="
                          font-size: 8.5pt;
                          line-height: 13.0333px;
                          font-family: Verdana, sans-serif;
                          color: black;
                        "><?php echo $laptop['hedieuhanh']; ?>&nbsp;</span>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0.75pt; width: 163.75pt;" width="218">
                                <p>
                                    <strong><span style="
                            font-size: 8.5pt;
                            line-height: 13.0333px;
                            font-family: Verdana, sans-serif;
                            color: black;
                          ">Trọng Lượng</span></strong>
                                </p>
                            </td>
                            <td style="padding: 0.75pt; width: 305.75pt;" width="408">
                                <p><?php echo $laptop['trongluong']; ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0.75pt; width: 163.75pt;" width="218">
                                <p>
                                    <strong><span style="
                            font-size: 8.5pt;
                            line-height: 13.0333px;
                            font-family: Verdana, sans-serif;
                            color: black;
                          ">Màu sắc</span></strong>
                                </p>
                            </td>
                            <td style="padding: 0.75pt; width: 305.75pt;" width="408">
                                <p><?php echo $laptop['mausac']; ?></p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="relatedProduct">
                San pham 1
                <br />
                San Pham 2 =)))
            </div>
        </div>
    </div>
    </div>

</main>





<script src="./ExecuteJS/slide.js"></script>
<script src="./ExecuteJS/dropRight.js"></script>
<script src="./ExecuteJS/ajaxshoppingInView.js"></script>

<?php
require_once './Views/HeaderAndFooter/footer.php';
?>