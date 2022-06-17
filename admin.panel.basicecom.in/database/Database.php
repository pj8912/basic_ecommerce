<?php
class Database
{

    // private $host = 'localhost';
    // private $uname = 'jp98 ';
    // private $pwd = '16uph306';
    // private $dbname = 'basic_ecom';

    private $host = 'localhost';
    private $uname = 'root ';
    private $pwd = '';
    private $dbname = 'basic_ecom';

    private $conn;

    public function connect()
    {
        try {

            $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbname, $this->uname, $this->pwd);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "db err: " . $e->getMessage();
        }
        return $this->conn;
    }
}
