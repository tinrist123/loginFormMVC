<?php

class Models_Chuot extends Models_DBConnection
{
    public $tableName = "detailchuot";

    public function getDataToViewLaptop($id)
    {
        $data = $this->buildQueryParams([
            "select" => "*",
            "where" => "idchuot = :idchuot",
            "params" => [":idchuot" => $id]
        ])->selectOne();

        return $data;
    }
}
