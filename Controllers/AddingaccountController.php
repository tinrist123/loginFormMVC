<?php

class Controllers_AddingaccountController extends Controllers_baseController
{
    public function AddingAcount()
    {
        if (isset($_POST['submit'])) {
            $ho = $_POST['ho'];
            $ten = $_POST['ten'];
            $ngaysinh = $_POST['ngaysinh'];
            $quequan = $_POST['quequan'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $CMND = $_POST['CMND'];
            $password = $_POST['password'];
            $confirmPassword = $_POST['confirmpassword'];

            $db = new Models_DBConnection();
            $taikhoanAdmin = new Models_User_taikhoan($email, $password, $ho, $ten, $username, $ngaysinh, $quequan, $CMND);

            if ($taikhoanAdmin->CheckExistEmail($email)) // co email trung
            {
                $_SESSION['error'] = "emailExisting";
                $this->redirectView('AdminView/registerAdmin');
            } else {
                unset($_SESSION['error']);
                $result = $taikhoanAdmin->InsertAdmin();

                if ($result) {
                    unset($_SESSION['error']);
                    $this->redirectView('AdminView/admin');
                } else {
                    $_SESSION['error'] = "unknownErr";
                    $this->redirectView('AdminView/registerAdmin');
                }
            }
        } else {
            $this->redirectView('AdminView/registerAdmin');
        }
    }
}
