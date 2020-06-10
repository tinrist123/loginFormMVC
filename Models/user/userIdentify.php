<?php


class Models_user_userIdentify
{

    protected $loginUsername;
    protected $loginPassword;
    protected $loginEmail;

    public function __construct($loginUsername = "", $loginEmail = "", $loginPassword = "")
    {
        $this->loginUsername = $loginUsername;
        $this->loginEmail = $loginEmail;
        $this->loginPassword = $loginPassword;
    }

    public function login()
    {
        $db = new Models_DBConnection();



        $query = $db->buildQueryParams([
            "where" => "taikhoan = :taikhoan AND matkhau = :matkhau",
            "params" =>
            [
                ":taikhoan" => trim($this->loginUsername),
                // ":email" => $this->loginEmail,
                ":matkhau" => $this->loginPassword,
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
