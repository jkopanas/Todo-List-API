<?php
error_reporting(0);
class Database
{
    // DB Params
    private $host = 'j6mz.your-database.de';
    private $db_name = 'kabama_db1';
    private $username = 'kabama_1';
    private $password = 'FbvpPsmR3StjWi1X';
    private $conn;

    // DB Connect
    public function connect()
    {
        $this->conn = null;

        try {
            $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->exec("SET CHARACTER SET utf8");
        } catch (PDOException $e) {
            echo 'Connection Error: ' . $e->getMessage();
        }

        return $this->conn;
    }
}
