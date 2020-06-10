<?php

class Models_user_User extends Models_DBConnection
{
    protected $tableName = "user";

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
    public function insertUser()
    {
        $result = $this->buildQueryParams([
            "fields" => "(taikhoan,email,hoten,ngaysinh,quequan,matkhau) ? values (?,?,?,?,?,?)",
            "value" => [$this->taikhoan, $this->email, $this->hoten, $this->ngaysinh, $this->quequan, $this->encryptPassword($this->matkhau)],
        ])->insert();

        if ($result) {
            $_SESSION['insertUser'] = true;
        } else {
            $_SESSION['insertUser'] = false;
        }
        return $result;
    }

    public function deleteUser($id)
    {
        $result = $this->buildQueryParams([
            "where" => "id = :idUser",
            "params" => [":idUser" => $id]
        ]);

        if ($result) {
            $_SESSION['deleteUser'] = true;
        } else {
            $_SESSION['deleteUser'] = true;
        }

        return $result;
    }

    public function updateUser($id, $taikhoan, $email, $hoten, $ngaysinh, $quequan, $matkhau)
    {
        $result = $this->buildQueryParams([
            "where" => "id = :idUser",
            "params" => [":idUser" => $id],
            'value' => "taikhoan = $id , email = $email, hoten = $hoten , ngaysinh = $ngaysinh , quequan = $quequan, matkhau = $this->encryptPassword($matkhau) ",
        ])->Update();


        if ($result) {
            $_SESSION['updateUser'] = true;
        } else {
            $_SESSION['updateUser'] = false;
        }

        return $result;
    }
}
