<?php

class Models_KhachHang extends Models_DBConnection
{
    protected $idkhachang;
    protected $idtaikhoan;
    protected $SDT;
    protected $diachi;
    protected $thanhpho;
    protected $huyen;
    protected $xa;
    protected $sothenganhang;
    protected $ngaytaotk;

    public $tableName = "khachhang";

    public function __construct($idtaikhoan, $SDT, $diachi, $thanhpho, $huyen, $xa, $ngaytaotk)
    {
        $this->idtaikhoan = $idtaikhoan;
        $this->SDT  = $SDT;
        $this->diachi = $diachi;
        $this->thanhpho = $thanhpho;
        $this->huyen = $huyen;
        $this->xa = $xa;
        $this->ngaytaotk = $ngaytaotk;
    }

    public function insertKhachHang()
    {
        $result = $this->buildQueryParams([
            'fields' => "(idtaikhoan ,SDT , diachi,thanhpho,huyen,xa,ngaytaotk) VALUES (?,?,?,?,?,?,?)",
            'value' => [$this->idtaikhoan, $this->SDT, $this->diachi, $this->thanhpho, $this->huyen, $this->xa, $this->ngaytaotk]
        ])->insert();

        echo $result;
        return $result;
    }

    public function UpdateUser()
    {
        $q = $this->buildQueryParams([
            'value' => 'SDT = :SDT, diachi = :diachi , thanhpho = :thanhpho , huyen = :huyen, xa = :xa',
            'params' => [':SDT' => $this->SDT, ':diachi' => $this->diachi, ':thanhpho' => $this->thanhpho, ':huyen' => $this->huyen, ':xa' => $this->xa, ':idtaikhoan' => $this->idtaikhoan],
            'where' => 'idtaikhoan = :idtaikhoan',


        ])->Update();

        return $q;
    }

    public function checkUserExist($idtaikhoan)
    {


        $data = $this->buildQueryParams(
            [
                'select' => 'idkhachhang,idtaikhoan',
                'where' => 'idtaikhoan = :idtaikhoan',
                'params' => [':idtaikhoan' => $idtaikhoan]
            ]
        )->selectOne();



        if ($data) return true;
        return false;
    }

    public function getidkhachang($idtaikhoan)
    {
        $data = $this->buildQueryParams(
            [
                'select' => 'idkhachhang,idtaikhoan',
                'where' => 'idtaikhoan = :idtaikhoan',
                'params' => [':idtaikhoan' => $idtaikhoan]
            ]
        )->selectOne();


        if ($data) {
            return ($data['idkhachhang']);
        }
        return -1;
    }
}
