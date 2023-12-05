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
                // Accede a la conexión usando el método getConnection
                $conn = $this->userModel->getConnection();

                // Luego utiliza la conexión para registrar al usuario
                $this->userModel->registerUser($email, $password, $nombre);

                echo 'Registro exitoso. Ahora puedes iniciar sesión.';
            }
        }
    }

    private function isEmailRegistered($email) {
        $conn = $this->userModel->getConnection();
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();

        $result = $stmt->get_result();
        $stmt->close();

        return $result->num_rows > 0;
    }
}
?>
