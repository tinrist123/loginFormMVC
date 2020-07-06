<?php


class Models_PhuongThucThanhToan extends Models_DBConnection
{
    protected $idthanhtoan;
    protected $tenloaithanhtoan;
    public $tableName = "phuongthucthanhtoan";
    public function getNameFromId($id)
    {
        $data = $this->buildQueryParams(
            [
                'select' => "tenloaithanhtoan",
                'where' => 'idthanhtoan = :id',
                'params' => ['id' => $id]
            ]
        )->selectOne();
        return $data;
    }

    public function getNameThanhToan()
    {
        $data = $this->buildQueryParams(
            [
                'select' => "idthanhtoan,tenloaithanhtoan"
            ]
        )->select();
        return $data;
    }
}
