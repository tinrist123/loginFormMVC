<?php

class Controllers_ProfileController extends Controllers_baseController
{
    protected $idLogedin;
    public function __construct($idInput = "")
    {
        $this->idLogedin = $idInput;
    }
    public function ViewProfileAdmin()
    {
        if (isset($_SESSION['idAdmin'])) {
            $db = new Models_DBConnection();
            $this->idLogedin = $_SESSION['idAdmin'];

            $account = new Models_User_taikhoan();

            $profile = $account->getProfileAdmin($this->idLogedin);
            $_SESSION['admin'] = $profile;
            if ($profile) {
                if (isset($_GET['View'])) {
                    $ViewProfile = $_GET['View'] . "View";
                    $this->redirectView("AdminView/$ViewProfile", $profile);
                }
            } else {
                $_SESSION['error'] = "adminError";
                $this->redirectView('AdminView/loginAdmin');
            }
        } else {
            $this->redirectView('AdminView/loginAdmin');
        }
    }
}
