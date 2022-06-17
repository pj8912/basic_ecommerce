<?php

class User
{
    private $conn;
    public function __construct($db)
    {
        $this->conn = $db;
    }


    private $table = "users";

    public $user_id, $fullname, $email, $pwd;



    //common query for checking 
    public function checkUser_Uname()
    {
        $sql = "SELECT * FROM users WHERE user_email = :user_email";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':user_email', $this->email);
        $stmt->execute();
        return $stmt;
    }


    public function getUserById()
    {
        $sql = "SELECT * FROM users WHERE user_id = :user_id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':user_id', $this->user_id);
        $stmt->execute();
        return $stmt;
    }


    public function createUser()
    {
        $sql = "INSERT INTO {$this->table}(user_fullname, user_email, user_pwd) VALUES(:user_fullname, :user_email,  :user_pwd)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':user_fullname', $this->fullname);
        $stmt->bindParam(':user_email', $this->email);
        $stmt->bindParam(':user_pwd', $this->pwd);
        $stmt->execute();
    }
}
