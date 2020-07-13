<?php
class Controllers_DathangController extends Controllers_baseController
{
    public function InsertDonHang()
    {

        // echo "<pre>";
        // print_r($_POST);
        // print_r($_SESSION['idUserLogedin']);
        // die();

        if (isset($_POST['submit'])) {
            if (isset($_POST['shipping']))
                $idthanhtoan = $_POST['shipping'];
            if (empty($idthanhtoan)) {
                $_SESSION['error'] = "empty";
                $this->redirectView('payment');
            } else {
                if (isset($_SESSION['tempInfoUser'])) {
                    $_SESSION['tempInfoUser']['idthanhtoan'] = $idthanhtoan;
                    // echo "<pre>";
                    // print_r($_SESSION);
                    // die();

                    $idtaikhoan = $_SESSION['idUserLogedin'];
                    $SDT = $_SESSION['tempInfoUser']['SDT'];
                    $diachi = $_SESSION['tempInfoUser']['diachi'];
                    $thanhpho = $_SESSION['tempInfoUser']['thanhpho'];
                    $huyen = $_SESSION['tempInfoUser']['huyen'];
                    $xa = $_SESSION['tempInfoUser']['xa'];
                    $idloaithanhtoan = $_SESSION['tempInfoUser']['idthanhtoan'];
                    date_default_timezone_set('Asia/Ho_Chi_Minh');
                    $ngaytaotk = date('m/d/Y h:i:s a', time());
                    $db = new Models_DBConnection();


                    $khachhang = new Models_KhachHang($idtaikhoan, $SDT, $diachi, $thanhpho, $huyen, $xa, $ngaytaotk);



                    if ($khachhang->checkUserExist($idtaikhoan)) {

                        $q = $khachhang->UpdateUser();
                        $idkhachhang = $khachhang->getidkhachang($idtaikhoan);
                    } else {

                        $idkhachhang = $khachhang->insertKhachHang();
                    }

                    $thanhtien = 0;
                    $listProduct = $_SESSION['cart'];

                    foreach ($listProduct as $cateProduct) {
                        foreach ($cateProduct as $product) {
                            $thanhtien += $product['product_price'];
                        }
                    }

                    $trigia = $thanhtien - 39000;
                    $dathang = new Models_Order($idkhachhang, $diachi, $thanhpho, $huyen, $xa, $idloaithanhtoan, $thanhtien, 39000, $trigia, $ngaytaotk);

                    $iddathang = $dathang->InsertOrder();

                    foreach ($listProduct as $cateProduct) {
                        foreach ($cateProduct as $cate => $product) {
                            $idloaisanpham = $cate;
                            $idsanphammua = $product['product_id'];
                            $tensanpham = $product['product_name'];
                            $giasanpham = $product['product_price'];
                            $soluong = $product['product_quantity'];
                            // die();
                            $CTDH = new Models_CTDH($iddathang, $idloaisanpham, $idsanphammua, $tensanpham, $giasanpham, $soluong);

                            if ($CTDH->InsertCTDH()) {
                                $_SESSION['successOrder'] = true;
                                unset($_SESSION['tempInfoUser']);
                                $_SESSION['error'] = "";
                            }
                        }
                    }
                }
            }
        }
        // $payment = new Models_Order();
        $this->redirectView('SuccesPage');
    }
}
