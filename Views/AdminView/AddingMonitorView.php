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
                                    <label for="">Sản Phẩm</label>
                                    <input type="text" name="sanpham" />
                                </div>
                                <div class="input">
                                    <label for="">Tên Hãng</label>
                                    <input type="text" name="tenhang" />
                                </div>
                                <div class="input">
                                    <label for="">Model</label>
                                    <input type="text" name="tenhang" />
                                </div>
                                <div class="input">
                                    <label for="">Kiểu Màn Hình</label>
                                    <input type="text" name="kieumanhinh" />
                                </div>

                            </div>
                            <div class=" col js-firstPage">
                                <div class="input">
                                    <label for="">Độ Sáng</label>
                                    <input type="text" name="dosang" />
                                </div>
                                <div class="input">
                                    <label for="">Tỷ Lệ Tương Phản</label>
                                    <input type="text" name="tyletuongphan" />
                                </div>
                                <div class="input">
                                    <label for="">Thời Gian Đáp Ứng</label>
                                    <input type="text" name="thoigiandapung" />
                                </div>
                                <div class="input">
                                    <label for="">Góc Nhìn</label>
                                    <input type="text" name="gocnhin" />
                                </div>
                                <div class="input">
                                    <label for="">Cổng Giao Tiếp</label>
                                    <input type="text" name="conggiaotiep" />
                                </div>
                                <div class="input">
                                    <label for="">Xuất Xứ</label>
                                    <input type="text" name="xuatxu" />
                                </div>
                                <div class="input">
                                    <label for="">Kích Thước Màn Hình</label>
                                    <input type="text" name="kichthuocmanhinh" />
                                </div>
                            </div>

                            <div class="col image">
                                <div class="imgProduct">
                                    <img src="./images/monitor.png" alt="" />
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
</body>

</html>