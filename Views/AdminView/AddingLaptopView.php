<?php
require_once './Views/AdminView/asset/header.php';
?>

<div class="popupLaptop">
    <div class="CoveringContent">
        <div class="wrap">
            <div class="popupLaptop__form-group">
                <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col js-firstPage">
                            <div class="input">
                                <label for="">Tên Sản Phẩm</label>
                                <input type="text" name="ten" />
                            </div>
                            <div class="input">
                                <label for="">Giá Bán</label>
                                <input type="text" name="giaban" />
                            </div>
                            <div class="input">
                                <label for="">Bảo Hành</label>
                                <input type="text" name="baohanh" />
                            </div>
                            <div class=" input">
                                <label for="">Hãng Sản Xuất</label>
                                <input type="text" name="hangsanxuat" />
                            </div>
                            <div class=" input">
                                <label for="">Vi Xử Lý</label>
                                <input type="text" name="tenbovixuly" />
                            </div>
                            <div class=" input">
                                <label for="">Tốc Độ</label>
                                <input type="text" name="tocdo" />
                            </div>
                            <div class=" input">
                                <label for="">Bộ Nhớ Đệm</label>
                                <input type="text" name="bonhodem" />
                            </div>
                            <div class=" input">
                                <label for="">Dung Lượng Ram</label>
                                <input type="text" name="dungluongram" />
                            </div>

                        </div>
                        <div class="col js-firstPage">
                            <div class="input">
                                <label for="">Dung Lượng HDD</label>
                                <input type="text" name="dungluonghdd" />
                            </div>
                            <div class="input">
                                <label for="">
                                    Khả năng Lưu Trữ HDD
                                </label>
                                <input type="text" name="khanangluutruhdd" />
                            </div>
                            <div class="input">
                                <label for="">Màn Hình</label>
                                <input type="text" name="manhinh" />
                            </div>
                            <div class=" input">
                                <label for="">Độ Phân Giải</label>
                                <input type="text" name="dophangiai" />
                            </div>
                            <div class=" input">
                                <label for="">Bộ Xử Lý VGA</label>
                                <input type="text" name="boxulyvga" />
                            </div>
                            <div class="input">
                                <label for="">Công Nghệ VGA</label>
                                <input type="text" name="congnghevga" />
                            </div>
                            <div class=" input">
                                <label for="">wireless</label>
                                <input type="text" name="wireless" />
                            </div>
                            <div class=" input">
                                <label for="">Số Khe Ram</label>
                                <input type="text" name="Số Khe Ram" />
                            </div>

                        </div>
                        <div class="col js-secondPage" style="display: none;">

                            <div class="input">
                                <label for="">Bluetooth</label>
                                <input type="text" name="bluetooth" />
                            </div>
                            <div class=" input">
                                <label for="">Cổng USB</label>
                                <input type="text" name="congusb" />
                            </div>
                            <div class=" input">
                                <label for="">HDMI</label>
                                <input type="text" name="hdmi" />
                            </div>
                            <div class=" input">
                                <label for="">Khe Cắm Thẻ Nhớ</label>
                                <input type="text" name="khecamthenho" />
                            </div>
                            <div class=" input">
                                <label for="">Audio</label>
                                <input type="text" name="audio" />
                            </div>
                            <div class=" input">
                                <label for="">Camera</label>
                                <input type="text" name="camera" />
                            </div>
                            <div class="input">
                                <label for="">Dung Lượng Pin</label>
                                <input type="text" name="dungluongpin" />
                            </div>
                            <div class="input">
                                <label for="">Thời Gian Sử Dụng</label>
                                <input type="text" name="thoigiansudung" />
                            </div>
                        </div>
                        <div class="col js-secondPage" style="display: none;">

                            <div class="input">
                                <label for="">Hệ Điều Hành</label>
                                <input type="text" name="hedieuhanh" />
                            </div>
                            <div class="input">
                                <label for="">Trọng Lượng</label>
                                <input type="text" name="trongluong" />
                            </div>
                            <div class="input">
                                <label for="">Màu Sắc</label>
                                <input type="text" name="mausac" />
                            </div>
                            <div class="input">
                                <label for="">Thiết Kế</label>
                                <input type="text" name="thietke" />
                            </div>
                            <div class="input">
                                <label for="">Phụ Kiện Đi Kèm</label>
                                <input type="text" name="phukiendikem" />
                            </div>
                            <div class="input">
                                <label for="">Loa</label>
                                <input type="text" name="loa" />
                            </div>
                            <div class="input">
                                <label for="">Quà Tặng</label>
                                <input type="text" name="quatang" />
                            </div>
                        </div>
                        <div class="col image">
                            <div class="imgProduct">
                                <img src="./images/laptop.jpg" alt="" />
                            </div>
                            <div class="dataView__CRUD">
                                <div class="input">
                                    <input type="file" name="uploadedFile" />
                                    <input type="submit" name="uploadBtn" value="Upload" />
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="nextPage">
                    <button class="js-previousPage">
                        <i class="fas fa-angle-double-left"></i>
                    </button>
                    <button class="js-nextPage">
                        <i class="fas fa-angle-double-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="./ExecuteJS/chuyentrang.js"></script>


<?php
require_once './Views/AdminView/asset/header.php';
?>