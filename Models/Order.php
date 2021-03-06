<?php

class Models_Order extends Models_DBConnection
{
    protected $iddathang;
    protected $idkhachhang;
    protected $diachi;
    protected $thanhpho;
    protected $huyen;
    protected $phuongthucthanhtoan;
    protected $thanhtien;
    protected $tienship;
    protected $trigia;
    protected $ngaydat;

    public $tableName = "dathang";

    public function __construct($idkhachhang = "", $diachi = "", $thanhpho = "", $huyen = "", $xa = "", $phuongthucthanhtoan = "", $thanhtien = "", $tienship = "", $trigia = "", $ngaydat = "")
    {
        $this->idkhachhang = $idkhachhang;
        $this->diachi = $diachi;
        $this->thanhpho  = $thanhpho;
        $this->huyen = $huyen;
        $this->xa = $xa;
        $this->phuongthucthanhtoan = $phuongthucthanhtoan;
        $this->thanhtien = $thanhtien;
        $this->tienship = $tienship;
        $this->trigia = $trigia;
        $this->ngaydat = $ngaydat;
    }

    public function InsertOrder()
    {
        $result = $this->buildQueryParams([
            'fields' => "(idkhachhang,diachi,thanhpho,huyen,xa,phuongthucthanhtoan,thanhtien,tienship,trigia,ngaydat,tinhtrang) VALUES (?,?,?,?,?,?,?,?,?,?,?)",
            'value' => [$this->idkhachhang, $this->diachi, $this->thanhpho, $this->huyen, $this->xa, $this->phuongthucthanhtoan, $this->thanhtien, $this->tienship, $this->trigia, $this->ngaydat, 0]
        ])->insert();


        return $result;
    }

    public function DeleteOrder($iddathang)
    {

        $result = $this->buildQueryParams([
            'where' => "iddathang = :id",
            'params' => [':id' => (int)$iddathang]
        ])->delete();
        return $result;
    }
}
