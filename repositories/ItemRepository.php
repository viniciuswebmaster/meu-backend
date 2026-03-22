<?php

require_once 'Database.php';

class ItemRepository {

    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function getAll() {
        $stmt = $this->conn->query("SELECT * FROM items");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($name) {
        $stmt = $this->conn->prepare("INSERT INTO items (name) VALUES (:name)");
        $stmt->bindParam(':name', $name);
        return $stmt->execute();
    }
}
