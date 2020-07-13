<?php

function upLoadImgAdmin($tmp_name, $destination)
{
    return move_uploaded_file($tmp_name, $destination);
}


class Controllers_EditProfileController extends Controllers_baseController
{
    protected $idlogedin;

    public function EditAdmin()
    {
        if (isset($_POST['submit'])) {
            if (isset($_SESSION['idAdmin'])) {
                $this->idlogedin = $_SESSION['idAdmin'];
            }
            $destination = "";
            $username = $_POST['username'];
            $email = $_POST['email'];
            if (isset($_FILES['fileImg'])) {
                if ($_FILES['fileImg']['name'] == "") {
                    $_SESSION['error'] = "uploadFailed";
                    $this->redirectView('AdminView/profileAdminView', $_SESSION['lastEditAdmin']);
                } else {


                    $supported_image = array(
                        'gif',
                        'jpg',
                        'jpeg',
                        'png'
                    );

                    $path_parts = pathinfo($_FILES["fileImg"]["name"]);
                    $extension = $path_parts['extension'];

                    if (!in_array($extension, $supported_image)) {
                        $_SESSION['error'] = "uploadFailed";
                        $this->redirectView('AdminView/profileAdminView', $_SESSION['lastEditAdmin']);
                    } else {
                        echo $tmp_name = $_FILES['fileImg']["tmp_name"];
                        $imgNameFile = str_replace(".", "", $username);
                        $destination = "imagesAdmin/$imgNameFile.$extension";
                        if (!upLoadImgAdmin($tmp_name, $destination)) {
                            $_SESSION['error'] = "uploadFailed";
                            $this->redirectView('AdminView/profileAdminView', $_SESSION['lastEditAdmin']);
                        }
                    }
                }
            }
            $Ho = $_POST['Ho'];
            $Ten = $_POST['Ten'];
            $quequan = $_POST['quequan'];
            $ngaysinh = $_POST['ngaysinh'];

            $_SESSION['lastEditAdmin'] = ([
                'username' => $username,
                'email' => $email,
                'Ho' => $Ho,
                'Ten' => $Ten,
                'quequan' => $quequan,
                'ngaysinh' => $ngaysinh
            ]);
            if (
                empty($username) || empty($email) || empty($Ho) || empty($Ten)
                || empty($quequan) || empty($ngaysinh)
            ) {

                $_SESSION['error'] = "emptyField";
                $this->redirectView('AdminView/profileAdminView', $_SESSION['lastEditAdmin']);
            } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                unset($_SESSION['error']);
                $_SESSION['error'] = "EmailInvalid";
                $this->redirectView('AdminView/profileAdminView', $_SESSION['lastEditAdmin']);
            } else {
                $db = new Models_DBConnection();
                $account = new Models_User_taikhoan();

                $account->getDataAdmin($username, $email, $quequan, $Ho, $Ten, $ngaysinh, $destination);

                $result = $account->updateTaiKhoan($this->idlogedin);

                if ($result) {
                    unset($_SESSION['error']);
                    $_SESSION['success'] = "successUpdate";
                    $this->redirectView('AdminView/profileAdminView');
                } else {
                    $_SESSION['error'] = "unknownError";
                    $this->redirectView('AdminView/profileAdminView');
                }
            }
        }
    }
}
