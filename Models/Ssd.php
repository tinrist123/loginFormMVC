<?php

class Models_Ssd extends Models_DBConnection
{
    public $tableName = "detailssd";

    public function getDataToViewLaptop($id)
    {
        $data = $this->buildQueryParams([
            "select" => "*",
            "where" => "idssd = :idssd",
            "params" => [":idssd" => $id]
        ])->selectOne();

        return $data;
    }
}
