<?php

class Models_CTDH extends Models_DBConnection
{
    public $tableName = "chitietdathang";

    protected $idCTDH;
    protected $iddathang;
    protected $idloaisanpham;
    protected $idsanphammua;
    protected $tensanpham;
    protected $giasanpham;
    protected $soluong;

    function __construct($iddathang, $idloaisanpham, $idsanphammua, $tensanpham, $giasanpham, $soluong)
    {
        $this->iddathang = $iddathang;
        $this->idloaisanpham = $idloaisanpham;
        $this->idsanphammua = $idsanphammua;
        $this->tensanpham = $tensanpham;
        $this->giasanpham = $giasanpham;
        $this->soluong = $soluong;
    }

    public function InsertCTDH()
    {
        $this->tensanpham;
        $result = $this->buildQueryParams([
            'fields' => '(iddathang,idloaisanpham,idsanphammua,tensanpham,giasanpham,soluong) VALUES (?,?,?,?,?,?)',
            'value' => [$this->iddathang, $this->idloaisanpham, $this->idsanphammua, $this->tensanpham, $this->giasanpham, $this->soluong]
        ])->insert();

        return $result;
    }
}
