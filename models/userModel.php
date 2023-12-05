<?php
class UserModel {
    protected $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function validateUser($email, $password) {
        $stmt = $this->conn->prepare("SELECT * FROM usuarios WHERE email = ? AND password = ?");
        $stmt->bind_param("ss", $email, $password);
        $stmt->execute();

        $result = $stmt->get_result();
        $stmt->close();

        return $result->num_rows > 0;
    }

    public function registerUser($email, $password, $nombre) {
        $stmt = $this->conn->prepare("INSERT INTO usuarios (email, password, nombre) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $email, $password, $nombre);
        $stmt->execute();
        $stmt->close();
    }

    public function getConnection() {
        return $this->conn;
    }
}
?>

