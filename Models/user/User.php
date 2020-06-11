<?php

class Models_user_User extends Models_DBConnection
{
    protected $tableName = "userlogin";

    protected $taikhoan;
    protected $email;
    protected $matkhau;
    protected $hoten;
    protected $ngaysinh;
    protected $quequan;



    public function getValue($taikhoan, $email, $matkhau, $hoten, $ngaysinh, $quequan)
    {
        $this->taikhoan = $taikhoan;
        $this->email = $email;
        $this->matkhau = $matkhau;
        $this->hoten = $hoten;
        $this->ngaysinh = $ngaysinh;
        $this->quequan = $quequan;

        return $this;
    }

    public function checkExistUser($regisUsername)
    {
        $result = $this->buildQueryParams([
            "where" => "taikhoan = :tk",
            "params" => [
                ":tk" => $regisUsername,
            ]
        ])->selectOne();

        var_dump($result);

        if ($result) {
            return false;
        } else {
            return true;
        }
    }

    public function insertUser()
    {
        $result = $this->buildQueryParams([
            "fields" => "(taikhoan,email,hoten,ngaysinh,quequan,matkhau) values (?,?,?,?,?,?)",
            "value" => [$this->taikhoan, $this->email, $this->hoten, $this->ngaysinh, $this->quequan, $this->encryptPassword($this->matkhau)],
        ])->insert();


        return $result;
    }

    public function deleteUser($id)
    {
        $result = $this->buildQueryParams([
            "where" => "id = :idUser",
            "params" => [":idUser" => $id]
        ]);



        return $result;
    }

    public function updateUser($id, $taikhoan, $email, $hoten, $ngaysinh, $quequan, $matkhau)
    {
        $result = $this->buildQueryParams([
            "where" => "id = :idUser",
            "params" => [":idUser" => $id],
            'value' => "taikhoan = $id , email = $email, hoten = $hoten , ngaysinh = $ngaysinh , quequan = $quequan, matkhau = $this->encryptPassword($matkhau) ",
        ])->Update();




        return $result;
    }
}
