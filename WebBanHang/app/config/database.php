<?php
class Database {
    private $host = "localhost";
    private $db_name = "my_store";
    private $username = "root";
    private $password = "";
    private $conn;

    public function getConnection() {
        if ($this->conn === null) {
            try {
                $dsn = "mysql:host={$this->host};dbname={$this->db_name};charset=utf8";
                $this->conn = new PDO($dsn, $this->username, $this->password, [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Bật chế độ báo lỗi
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Trả về dữ liệu dạng mảng kết hợp
                    PDO::ATTR_EMULATE_PREPARES => false // Tắt giả lập prepare statements
                ]);
            } catch (PDOException $exception) {
                die("Lỗi kết nối CSDL: " . $exception->getMessage());
            }
        }
        return $this->conn;
    }
}
?>
