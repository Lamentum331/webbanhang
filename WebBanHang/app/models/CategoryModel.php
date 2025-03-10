<?php
class CategoryModel
{
    private $conn;
    private $table_name = "category";
    public function __construct($db)
    {
        $this->conn = $db;
    }
    public function add_Category($name, $description)
    {
        $query = "INSERT INTO " . $this->table_name . " (name, description) VALUES (:name, :description)";
        $stmt = $this->conn->prepare($query);

        // Bind parameters
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':description', $description);

        // Execute the query
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
    public function getCategories()
    {
        $query = "SELECT id, name, description FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }
}
?>