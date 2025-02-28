<?php

// define('APP_ROOT', dirname(__FILE__,3));
// define('DOMAIN', 'http://localhost/phpMVC/');
// define('DB_HOST', 'localhost');
// define('DB_USER', 'root');
// define('DB_PASS', '');
// define('DB_NAME', 'qlbn');

class DB
{
    public $conn;
    
    public function __construct()
    {
        $db_host= 'localhost';
        $db_user= 'root';
        $db_pass= '';
        $db_name= 'qlbn';
        $this->conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
        if($this->conn->connect_errno){
            die("connect error");
        }
    }
    public function get($table)
    {
        $sql = "SELECT * FROM $table";
        $query = mysqli_query($this->conn, $sql);

        return mysqli_fetch_all($query, MYSQLI_ASSOC);
    }
    public function insert($table, $data)
    {
        $sql = "INSERT INTO $table";
        $sql.= "(".implode(",",array_keys($data)).') ';
        $sql.= "VALUES ('".implode("','",array_values($data))."')";
        
        return mysqli_query($this->conn, $sql);
    }
    public function update($table, $data=[], $id, $value)
    {
        $sql = "";
        foreach ($data as $key=>$values){
            $sql.="$key = '$values',";
        }
        $sql = "UPDATE $table SET ". trim($sql,',')." WHERE $id = $value ";

        mysqli_query($this->conn, $sql);
    }
    public function delete($table, $id, $value)
    {
        $sql= "DELETE FROM $table WHERE $id = $value";
        mysqli_query($this->conn, $sql);
    }
}