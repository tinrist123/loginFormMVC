<?php


class Models_user_userIdentify
{

    protected $loginUsername;
    protected $loginPassword;

    public function __construct($loginUsername = "", $loginPassword = "")
    {
        $this->loginUsername = $loginUsername;
        $this->loginPassword = $loginPassword;
    }

    public function login()
    {
        $db = new Models_DBConnection();

        // echo $this->loginUsername;
        // echo $this->loginPassword;
        // die();
        $query = $db->buildQueryParams([
            "where" => " (taikhoan = :taikhoan AND matkhau = :matkhau) OR (taikhoan = :email AND matkhau = :matkhau)",
            "params" =>
            [
                ":taikhoan" => trim($this->loginUsername),
                ":email" => trim($this->loginUsername),
                ":matkhau" => md5($this->loginPassword),
            ],
        ])->selectOne();

        if ($query) {
            $_SESSION['informationUser'] = $query;
        }

        return $query;
    }

    public function logout()
    {
        unset($_SESSION['informationUser']);
    }

    public function isLogin()
    {
        return isset($_SESSION['information']);
    }

    public function getDataFromSession($name)
    {
        if ($name !== null) {
            return isset($_SESSION['informationUser'][$name]) ? $_SESSION['informationUser'][$name] : NULL;
        }
        return $_SESSION;
    }

    public function getId()
    {
        return $this->getDataFromSession("id");
    }

    public function getNameUser()
    {
        return $this->getDataFromSession("hoten");
    }
}
