<?php
class Category
{
    private $table = "basic_ecom.categories";
    
    private $conn;

    public function __construct($db)
    {
        $this->conn = $db;
    }
    public $c_name; //category name
    public $c_img; //ccategory image
    public $cid; //category id


    public function createCategory()
    {
        $sql = "INSERT INTO {$this->table}(category_name, category_Img) VALUES(:category_name, :category_Img)";
        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(':cateory_name', $this->c_name);
        $stmt->bindParam(':category_Img', $this->c_img);
        $stmt->execute();
    }

    public function updateCategory()
    {
        $sql = "UPDATE {$this->table} SET category_name =:category_name , category_Img = :category_Img  
        updated_at = NOW() WHERE cid = :cid";

        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(':cateory_name', $this->c_name);
        $stmt->bindParam(':category_Img', $this->c_img);
        $stmt->bindParam(':cid', $this->cid);

        $stmt->execute();
    }

    public function deleteCategory()
    {
        $sql = "DELETE FROM  {$this->table}  WHERE cid = :cid";

        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(':cid', $this->cid);

        $stmt->execute();
    }

    public function getAllCategories()
    {
        $sql = "SELECT * FROM {$this->table}";
        $stmt = $this->conn->query($sql);
        $stmt->execute();
        return $stmt;
    }

    public function getCategoryById()
    {
        $sql = "SELECT * FROM  {$this->table}  WHERE cid = :cid";
        $stmt = $this->conn->query($sql);
        $stmt->execute();
        return $stmt;
    }
}
