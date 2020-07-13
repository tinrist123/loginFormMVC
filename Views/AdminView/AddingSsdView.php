<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./styleCSS/adminstyle.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Popup</title>
</head>

<body>
    <div class="popupLaptop">
        <div class="bgOpacity"></div>
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
                                    <label for="">Mã Part</label>
                                    <input type="text" name="mapart" />
                                </div>
                                <div class="input">
                                    <label for="">Thương Hiệu</label>
                                    <input type="text" name="thuonghieu" />
                                </div>
                            </div>
                            <div class="col js-firstPage">
                                <div class="input">
                                    <label for="">Dòng</label>
                                    <input type="text" name="dong" />
                                </div>
                                <div class="input">
                                    <label for="">Loại</label>
                                    <input type="text" name="loai" />
                                </div>
                                <div class="input">
                                    <label for="">Phân Khúc</label>
                                    <input type="text" name="phankhuc" />
                                </div>
                                <div class="input">
                                    <label for="">Chuẩn Kích Cỡ</label>
                                    <input type="text" name="chuankichco" />
                                </div>
                            </div>
                            <div class="col js-secondPage" style="display: none;">
                                <div class="input">
                                    <label for="">Dung Lượng</label>
                                    <input type="text" name="dungluong" />
                                </div>
                                <div class="input">
                                    <label for="">
                                        Loại Chip Nhớ
                                    </label>
                                    <input type="text" name="loaichipnho" />
                                </div>
                                <div class="input">
                                    <label for="">Giao Tiếp</label>
                                    <input type="text" name="giaotiep" />
                                </div>
                                <div class="input">
                                    <label for="">Tốc Độ Đọc Tối Đa</label>
                                    <input type="text" name="tocdodoctoida" />
                                </div>
                                <div class="input">
                                    <label for="">Tốc Độ Ghi Tối Đa</label>
                                    <input type="text" name="tocdoghitoida" />
                                </div>

                            </div>
                            <div class="col js-secondPage" style="display: none;">
                                <div class="input">
                                    <label for="">MTBF</label>
                                    <input type="text" name="mtbf" />
                                </div>
                                <div class="input">
                                    <label for="">Độ Dày</label>
                                    <input type="text" name="doday" />
                                </div>
                                <div class="input">
                                    <label for="">Chiều Ngang</label>
                                    <input type="text" name="chieungang" />
                                </div>
                                <div class="input">
                                    <label for="">Chiều Dọc</label>
                                    <input type="text" name="chieudoc" />
                                </div>
                                <div class="input">
                                    <label for="">Trọng Lượng</label>
                                    <input type="text" name="trongluong" />
                                </div>
                            </div>
                            <div class="col image">
                                <div class="imgProduct">
                                    <img src="./images/ssd.png" alt="" />
                                </div>
                                <div class="dataView__CRUD">
                                    <div class="input">
                                        <input type="file" name="uploadedFile" />
                                        <input type="submit" name="uploadBtn" value="Upload" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="SubmitBtn">
                            <button class=" Update">Cật Nhật</button>
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
</body>
<script src="chuyentrang.js"></script>

</html>