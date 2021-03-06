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

    private $pdo;

    public function connect()
    {
        try {
            $this->pdo = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbname, $this->uname, $this->pwd);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "db err: " . $e->getMessage();
        }
        return $this->pdo;
    }
}
