<?php

class Models_User_taikhoan extends Models_DBConnection
{
    public $tableName = "taikhoan";

    public $idtaikhoan;
    public $email;
    public $username;
    public $password;
    public $quequan;
    public $ngaysinh;
    public $Ho;
    public $Ten;
    public $CMND;
    public $url_logo;

    public function __construct($email = "", $password = "", $Ho = "", $Ten = "", $username = "", $ngaysinh = "", $quequan = "", $CMND = "", $url = "")
    {

        $this->email = $email;
        $this->password = $password;
        $this->Ho = $Ho;
        $this->Ten = $Ten;
        $this->username = $username;
        $this->ngaysinh = $ngaysinh;
        $this->quequan = $quequan;
        $this->CMND = $CMND;
        $this->url_logo = $url;
    }

    public function getDataAdmin($username, $email, $quequan, $Ho, $Ten, $ngaysinh, $url)
    {
        $this->email = $email;
        $this->username = $username;
        $this->quequan = $quequan;
        $this->Ho = $Ho;
        $this->Ten = $Ten;
        $this->ngaysinh = $ngaysinh;
        $this->url_logo = $url;
    }

    public function InsertKH()
    {
        $result = $this->buildQueryParams([
            "fields" => "(email,password,Ho,Ten) VALUES (?,?,?,?)",
            "value" => [$this->email, $this->password, $this->Ho, $this->Ten]
        ])->insert();
        return $result;
    }
    public function InsertAdmin()
    {
        $result = $this->buildQueryParams([
            "fields" => "(email,password,Ho,Ten,ngaysinh,quequan,CMND,username,isadmin) VALUES (?,?,?,?,?,?,?,?)",
            "value" => [$this->email, $this->password, $this->Ho, $this->Ten, $this->ngaysinh, $this->quequan, $this->CMND, $this->username, 1]
        ])->insert();

        return $result;
    }

    public function loginStatus($email, $pass)
    {
        $data = $this->buildQueryParams([
            "select" => "*",
            "where" => "email = :email AND password = :password",
            "params" => [':email' => $email, ':password' => $pass]
        ])->selectOne();

        if ($data) {
            return true;
        }
        return false;
    }

    public function CheckExistEmail($email)
    {
        $data = $this->buildQueryParams([
            "select" => "*",
            "where" => "email = :email",
            "params" => [':email' => $email],
        ])->selectOne();
        if ($data) {
            return true;
        } else {
            return false;
        }
    }

    public function getIdUser($email)
    {
        $data = $this->buildQueryParams([
            "select" => "idtaikhoan",
            "where" => "email = :email OR username = :email",
            "params" => [':email' => $email],
        ])->selectOne();
        return $data['idtaikhoan'];
    }

    public function checkLoginAdmin($username, $password)
    {

        $data = $this->buildQueryParams([
            'select' => 'idtaikhoan',
            'where' => '(email = :email AND password = :password AND isadmin = :isadmin) OR (username = :username AND password = :password AND isadmin = :isadmin)',
            'params' => [':email' => $username, ':password' => $password, ':username' => $username, ':isadmin' => 1]
        ])->select();

        if ($data) {
            return true;
        }
        return false;
    }

    public function getProfileAdmin($idAdmin)
    {
        $profile = $this->buildQueryParams([
            'select' => "*",
            'where' => "idtaikhoan = :id AND isadmin = :num",
            'params' => [':id' => $idAdmin, ':num' => 1],
        ])->selectOne();

        if ($profile) return $profile;
        return false;
    }

    public function updateTaiKhoan($idtaikhoan)
    {
        $this->url_logo = '/php/loginFormMVC/' . $this->url_logo;
        $result = $this->buildQueryParams([
            'select' => "*",
            'value' => "username = :user , email = :email , Ho = :ho , Ten = :ten , quequan = :quequan , ngaysinh = :ngaysinh, url_image_logo = :url",
            'where' => 'idtaikhoan = :id',
            'params' => [':user' => $this->username, ':email' => $this->email, ':ho' => $this->Ho, ':ten' => $this->Ten, ':quequan' => $this->quequan, ':ngaysinh' => $this->ngaysinh, ':id' => $idtaikhoan, ':url' => $this->url_logo],
        ])->Update();

        return $result;
    }

    public function showInforAdmin($id)
    {
        $data = $this->buildQueryParams([
            'select' => 'Ten,url_image_logo',
            'where' => "idtaikhoan =:id",
            'params' => [':id' => $id]
        ])->selectOne();

        if ($data)
            return $data;
        return false;
    }

    public function DeleteTaiKhoan($idtaikhoan)
    {
        $result = $this->buildQueryParams([
            'where' => 'idkhachhang = :id',
            'params' => [':id' => $idtaikhoan]
        ])->delete();

        return $result;
    }
}
