<?php
include '..//controllers/conexion.php';

// Obtener estilistas desde la base de datos
$sql = "SELECT id_estilista, nombre_estilista FROM estilistas";
$result = $conexion->query($sql);

if ($result) {
    $estilistas = $result->fetch_all(MYSQLI_ASSOC);
    // Devolver la lista de estilistas como JSON
    echo json_encode($estilistas);
} else {
    // Manejar errores de la consulta
    echo json_encode(['error' => 'Error al obtener los estilistas: ' . $conexion->error]);
}

// Cerrar la conexión a la base de datos
$conexion->close();
?>