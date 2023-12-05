<?php
require_once('../models/UserModel.php');

class LoginController {
    private $userModel;

    public function __construct($conn) {
        $this->userModel = new UserModel($conn);
    }

    public function showLoginForm() {
        include('../views/login.php');
    }

    public function processLogin() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            if ($this->userModel->validateUser($email, $password)) {
                // Usuario válido, redirigir a la página de inicio
                header('Location: ../views/index.php');
            } else {
                // Usuario no válido, mostrar mensaje de error
                echo 'Correo electrónico o contraseña incorrectos';
            }
        }
    }
}
