<?php

class Models_Hdd extends Models_DBConnection
{
    public $tableName = "detailhdd";

    public function getDataToViewLaptop($id)
    {
        $dataLaptop = $this->buildQueryParams([
            "select" => "*",
            "where" => "idhdd = :idhdd",
            "params" => [":idhdd" => $id]
        ])->selectOne();

        return $dataLaptop;
    }
}
