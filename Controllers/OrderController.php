<?php


class Controllers_OrderController extends Controllers_baseController
{
    public function DonHangUser()
    {
        if (isset($_SESSION['loginstatus'])) {
            if ($_SESSION['loginstatus'] == false) {
                $_SESSION['errorLogedin'] = true;
                $this->redirectView('HomePage');
            } else {
                $db = new Models_DBConnection();
                if (isset($_SESSION['loginstatus'])) {
                    if ($_SESSION['loginstatus'] == true) {
                        $idTaiKhoan = $_SESSION['idUserLogedin'];
                        $khachhang = new Models_KhachHang();
                        $idUser = $khachhang->getidkhachang($idTaiKhoan);
                        $DonHang = new Models_CTDH();
                        $data = $DonHang->getProductWithIdUser($idUser);

                        $this->redirectView('ViewOrder', $data);
                    }
                } else {
                    echo "Page Error";
                    die();
                }
            }
        }
    }
}
