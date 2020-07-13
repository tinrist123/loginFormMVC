<?php
class Models_DBConnection
{
    protected $hostname = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $database = "ecommerce";

    public $tableName = "";

    private $optionPDO = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    );

    protected $queryParams = [];

    protected static $connectionInstance = null;

    // Build Params
    public function buildQueryParams($params)
    {
        $defaultParams = array(
            "select" => "*",
            "where" => "",
            "other" => "",
            "params" => [],
            "fields" => "",
            "value" => "",
        );
        $this->queryParams = array_merge($defaultParams, $params);

        return $this;
    }

    // auto connection database
    public function __construct()
    {
        $this->connection();
    }
    public function connection()
    {
        if (self::$connectionInstance == null) {
            try {

                self::$connectionInstance = new PDO('mysql:host=' . $this->hostname . ';dbname=' . $this->database, $this->username, $this->password);
            } catch (Exception $ex) {
                echo "Error! " . $ex->getMessage();
                die();
            }
        }
        return self::$connectionInstance;
    }

    public function query($sql, $params = [])
    {
        $q = self::$connectionInstance->prepare($sql);
        if (is_array($params) && $params) {
            $q->execute($params);
        } else {
            $q->execute();
        }
        return $q;
    }

    public function buildConditionalWhere($condition)
    {

        if (trim($condition)) {
            return " WHERE " . $condition;
        } else {
            return "";
        }
    }

    public function encryptPassword($password)
    {
        return md5($password);
    }

    public function select()
    {
        // echo $this->buildConditionalWhere($this->queryParams['where']);
        // die();

        $sql = "SELECT " .  $this->queryParams['select'] . " FROM $this->tableName " . $this->buildConditionalWhere($this->queryParams['where']) .
            " " . $this->queryParams['other'];
        $query = $this->query($sql, $this->queryParams['params']);

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function selectOne()
    {
        $this->queryParams['other'] = "limit 1";
        $data = $this->select();

        if ($data) {
            return $data[0];
        } else
            return [];
    }
    public function insert()
    {
        $sql = "INSERT INTO " . $this->tableName . " " . $this->queryParams['fields'];
        $result = $this->query($sql, $this->queryParams['value']);
        var_dump($this->queryParams['value']);
        die();
        if ($result) {
            return self::$connectionInstance->lastInsertId();
        } else {
            return false;
        }
    }
    public function Update()
    {
        $sql = "UPDATE " . $this->tableName .
            " SET " .  $this->queryParams['value'] . " " . $this->buildConditionalWhere($this->queryParams['where'])
            . $this->queryParams['other'];

        return $this->query($sql, $this->queryParams['params'])->rowCount();
    }
    public function Delete()
    {
        $sql = "DELETE FROM " . $this->tableName . " " . $this->buildConditionalWhere($this->queryParams['where']);

        $result = $this->query($sql, $this->queryParams['params']);

        return $result->rowCount();
    }

    public function CountPageNumber()
    {
        $sql = "SELECT * FROM $this->tableName ";
        $exe = $this->buildQueryParams([
            "select" => "*",
            "other" => ""
        ])->query($sql);

        return ceil((int) $exe->rowCount() / 10);
    }

    public function UnionAllDetail($input)
    {
        $sql = "select idloaisanpham,idlaptop as id,tenlaptop as ten,giaban,url_image from 

                (select idloaisanpham,idlaptop,tenlaptop ,giaban, url_image from detaillaptop
                UNION
                select idloaisanpham,idssd,tenssd ,giaban, url_image from detailssd
                UNION
                select idloaisanpham,idchuot,tenchuot ,giaban, url_image from detailchuot
                UNION
                select idloaisanpham,idmonitor,tenmonitor ,giaban, url_image from detailmonitor
                UNION
                select idloaisanpham,idhdd,tenhdd ,giaban, url_image from detailhdd) as A where tenlaptop LIKE '" . $input . "' limit 5";
        $temp = $this->query($sql);
        return $temp->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProductRes($cate_id)
    {
        $this->tableName = "loaisanpham";
        $result = $this->buildQueryParams([
            "select" => "tenmaloaisanpham",
            "where" => "idmaloaisanpham = :id",
            "params" => [':id' => $cate_id]
        ])->selectOne();
        return $result['tenmaloaisanpham'];
    }
}
