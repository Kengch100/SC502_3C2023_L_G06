<?php
require_once('../controllers/LoginController.php');
require_once('../controllers/RegisterController.php');

// Configuración de conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pruebas";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Enrutamiento básico
if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'login':
            $loginController = new LoginController($conn);
            $loginController->processLogin();
            break;
        case 'register':
            $registerController = new RegisterController($conn);
            $registerController->processRegistration();
            break;
        default:
            echo 'Acción no válida';
            break;
    }
} else {
    $loginController = new LoginController($conn);
    $loginController->showLoginForm();
}

// Cerrar la conexión a la base de datos al finalizar
$conn->close();
?>
