<?php


class Model_Db {
    private $dbhost = '127.0.0.1';
    private $dbuser = 'root';
    private $dbpwd  = '';
    private $dbname = 'act';

    private $conn;
    protected $table;

    function __construct() {
        $this->conn = mysqli_connect($this->dbhost, 
                            $this->dbuser, 
                            $this->dbpwd, 
                            $this->dbname);

        $obj = new ReflectionClass($this);
        $this->table = basename($obj->getFileName(),'.php');
    }

    function prepared($sql, $options) {
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($options);
        return $stmt->get_result();
    }

    function get() {
        $sql = "SELECT * FROM $this->table";
        $result = $this->prepared($sql, []);
        // Fetch all data
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}