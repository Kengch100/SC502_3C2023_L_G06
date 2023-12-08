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

            $user = $this->userModel->getUserByEmail($email);

            if ($user && password_verify($password, $user['password'])) {
                // Iniciar sesión
                session_start();
                $_SESSION['email'] = $email;
                header('Location: ../views/index.php'); // Redirigir a la página principal después del inicio de sesión
            } else {
                header('Location: ../views/register.php');
            }
        }
    }
}
?>
