<?php
class Models_DBConnection
{
    protected $hostname = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $database = "loginmvc";

    protected $tableName = "user";

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
    public function Insert()
    {
        $sql = "INSERT INTO " . $this->tableName . " " . $this->queryParams['fields'];
        // echo $sql;
        // echo "<pre>";
        // var_dump($this->queryParams['value']);
        // die();
        $result = $this->query($sql, $this->queryParams['value']);

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

        return $this->query($sql, $this->queryParams['params']);
    }
    public function Delete()
    {
        $sql = "DELETE FROM " . $this->tableName . " " . $this->buildConditionalWhere($this->queryParams['where']);
        $result = $this->query($sql, $this->queryParams['params']);

        return $result;
    }
}
