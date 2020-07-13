<?php

class Controllers_infopayController extends Controllers_baseController
{
    public function storeDataIntoSession()
    {
        if (isset($_SESSION['loginstatus'])) {
            if ($_SESSION['loginstatus'] == true) {

                $SDT = $_POST['SDT'];
                $diachi = $_POST['diachi'];
                $thanhpho = $_POST['thanhpho'];
                $huyen = $_POST['huyen'];
                $xa = $_POST['xa'];
                if ($_SESSION['loginstatus'] == true) {
                    $infoUser = [
                        'SDT' => $SDT,
                        'diachi' => $diachi,
                        'thanhpho' => $thanhpho,
                        'huyen' => $huyen,
                        'xa' => $xa
                    ];
                    $_SESSION['tempInfoUser'] = $infoUser;
                }
            } else {
                $_SESSION['requiredLogedin'] = true;
                $this->redirectView('info_pay');
            }


            $this->redirectView('payment');
        }
    }
}
