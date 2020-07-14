<?php

class Models_CTDH extends Models_DBConnection
{

    protected $idCTDH;
    protected $iddathang;
    protected $idloaisanpham;
    protected $idsanphammua;
    protected $tensanpham;
    protected $giasanpham;
    protected $soluong;

    public $tableName = "chitietdathang";

    function __construct($iddathang = "", $idloaisanpham = "", $idsanphammua = "", $tensanpham = "", $giasanpham = "", $soluong = "")
    {
        $this->iddathang = (int)$iddathang;
        $this->idloaisanpham = (int)$idloaisanpham;
        $this->idsanphammua = (int)$idsanphammua;
        $this->tensanpham = $tensanpham;
        $this->giasanpham = $giasanpham;
        $this->soluong = (int)$soluong;
    }

    public function InsertCTDH()
    {
        $db = new Models_DBConnection();
        $sql = "INSERT INTO chitietdathang (iddathang,idloaisanpham,idsanphammua,tensanpham,giasanpham,soluong,tinhtrang) VALUES ($this->iddathang, $this->idloaisanpham, $this->idsanphammua, '$this->tensanpham', '$this->giasanpham', $this->soluong, 0)";
        $result = $db->query($sql);

        return $result;
    }

    public function getProductWithIdUser($idUser)
    {
        $sql = 'SELECT idsanphammua,soluong,idloaisanpham,tensanpham,giasanpham,diachi,thanhpho,huyen,xa,ngaydat FROM chitietdathang C,dathang D WHERE C.iddathang = D.iddathang AND D.idkhachhang = ' . $idUser;
        $data = $this->query($sql)->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }

    public function GetImgProductForOrder($idloaisanpham, $idsanpham)
    {
        $tenTable['1'] = 'laptop';
        $tenTable['2'] = 'ssd';
        $tenTable['3'] = 'hdd';
        $tenTable['4'] = 'monitor';
        $tenTable['5'] = 'chuot';

        $sql = "SELECT url_image from detail$tenTable[$idloaisanpham] WHERE id$tenTable[$idloaisanpham] = $idsanpham";
        $data = $this->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
}
