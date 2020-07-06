<?php
class Models_Laptop extends Models_DBConnection
{
    public $tableName = "detaillaptop";

    public function getDataToViewLaptop($idlaptop)
    {
        $dataLaptop = $this->buildQueryParams([
            "select" => "*",
            "where" => "idlaptop = :idlaptop",
            "params" => [":idlaptop" => $idlaptop]
        ])->selectOne();

        return $dataLaptop;
    }
}
