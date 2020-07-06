<?php

class Models_User_taikhoan extends Models_DBConnection
{
    public $tableName = "taikhoan";

    public $idtaikhoan;
    public $email;
    public $password;
    public $Ho;
    public $Ten;

    public function __construct($email, $password, $Ho = "", $Ten = "")
    {

        $this->email = $email;
        $this->password = $password;
        $this->Ho = $Ho;
        $this->Ten = $Ten;
    }
    public function InsertKH()
    {
        $result = $this->buildQueryParams([
            "fields" => "(email,password,Ho,Ten) VALUES (?,?,?,?)",
            "value" => [$this->email, $this->password, $this->Ho, $this->Ten]
        ])->Insert();

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
            "where" => "email = :email",
            "params" => [':email' => $email],
        ])->selectOne();
        return $data['idtaikhoan'];
    }
}
