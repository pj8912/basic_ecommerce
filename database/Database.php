<?php
class Database
{

    private $host = 'localhost';
    private $uname = 'jp98 ';
    private $pwd = '16uph306';
    private $dbname = 'basic_ecom';


    public function connect()
    {
        try {
            $pdo = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbname, $this->uname, $this->pwd);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo "db err: " . $e->getMessage();
        }
    }
}
