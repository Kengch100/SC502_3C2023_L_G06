<?php
require_once('../models/UserModel.php');

class RegisterController {
    private $userModel;

    public function __construct($conn) {
        $this->userModel = new UserModel($conn);
    }

    public function showRegisterForm() {
        include('../views/register.php');
    }

    public function processRegistration() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $nombre = $_POST['nombre'];

            if ($this->isEmailRegistered($email)) {
                echo 'Este correo electrónico ya está registrado.';
            } else {
                // Hash de la contraseña antes de almacenarla
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                // Registra al usuario
                $this->userModel->registerUser($email, $hashedPassword, $nombre);

                header('Location: ../views/index.php');
            }
        }
    }

    private function isEmailRegistered($email) {
        return $this->userModel->isEmailRegistered($email);
    }
}
?>
