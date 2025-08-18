<?php
class User {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getUserByEmail($email) {
        $sql = "SELECT * FROM users WHERE email = :email LIMIT 1";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
