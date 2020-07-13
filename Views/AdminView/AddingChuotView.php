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
                                    <label for="">Tương Thích</label>
                                    <input type="text" name="tuongthich" />
                                </div>
                                <div class="input">
                                    <label for="">Độ Phân Giải</label>
                                    <input type="text" name="dophangiai" />
                                </div>
                                <div class="input">
                                    <label for="">Cách Kết Nối</label>
                                    <input type="text" name="cachketnoi" />
                                </div>
                            </div>
                            <div class=" col js-firstPage">
                                <div class="input">
                                    <label for="">Độ Dài Dây</label>
                                    <input type="text" name="dodaiday" />
                                </div>
                                <div class="input">
                                    <label for="">Loại Pin</label>
                                    <input type="text" name="loaipin" />
                                </div>
                                <div class=" input">
                                    <label for="">Kích Thước</label>
                                    <input type="text" name="kichthuoc" />
                                </div>
                                <div class="input">
                                    <label for="">Trọng Lượng</label>
                                    <input type="text" name="trongluong" />
                                </div>
                                <div class=" input">
                                    <label for="">Thương Hiệu</label>
                                    <input type="text" name="thuonghieu" />
                                </div>
                                <div class="input">
                                    <label for="">Sản Xuất</label>
                                    <input type="text" name="sanxuat" />
                                </div>
                            </div>

                            <div class="col image">
                                <div class="imgProduct">
                                    <img src="./images/chuot.png" alt="" />
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