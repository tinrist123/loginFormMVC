<?php

class Models_Monitor extends Models_DBConnection
{
    public $tableName = "detailmonitor";

    public function getDataToViewLaptop($id)
    {
        $dataLaptop = $this->buildQueryParams([
            "select" => "*",
            "where" => "idmonitor = :idmonitor",
            "params" => [":idmonitor" => $id]
        ])->selectOne();

        return $dataLaptop;
    }
}
