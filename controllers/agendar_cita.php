<?php
// Conexión a la base de datos
include '../controllers/conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $nombre = $_POST["nombreCliente"];
    $correo = $_POST["correoCliente"];
    $telefono = $_POST["telefono"];
    $fecha = $_POST["fechaCita"];
    $horaInicio = $_POST["horaInicio"];
    $horaFin = $_POST["horaFin"];
    $servicio = $_POST["servicio"];
    $id_estilista = $_POST["id_estilista"];

$fechaMySQLFormat = date("Y-m-d", strtotime($fecha));

    // Verificar si hay conflictos de horario para el estilista seleccionado
    $sql = "SELECT * FROM citas 
            WHERE id_estilista = $id_estilista 
            AND (
                (horaInicio <= '$horaInicio' AND horaFin >= '$horaInicio') OR
                (horaInicio <= '$horaFin' AND horaFin >= '$horaFin') OR
                (horaInicio >= '$horaInicio' AND horaFin <= '$horaFin')
            )";

    $result = $conexion->query($sql);

    if ($result === false) {
        // Manejar errores en la consulta
        echo "Error al ejecutar la consulta: " . $conexion->error;
    } else {
        // Verificar si hay filas en el resultado
        if ($result->num_rows > 0) {
            // Hay conflictos de horario
            echo "Error: El estilista ya tiene una cita entre ese horario de ".$horaInicio ." a ". $horaFin;
        } else {
            // No hay conflictos de horario, se puede agendar la cita
            // Insertar la nueva cita en la base de datos
            $sql_agendar = "INSERT INTO citas (nombreCliente, correoCliente,telefono, fechaCita, horaInicio,horaFin,servicio,id_estilista) 
                            VALUES ('$nombre', '$correo','$telefono', '$fechaMySQLFormat', '$horaInicio','$horaFin','$servicio',$id_estilista)";

            if ($conexion->query($sql_agendar) === TRUE) {
                echo "Cita agendada con éxito";
            } else {
                echo "Error al agendar la cita: " . $conexion->error;
            }
        }
    }
} else {
    // Si la solicitud no es de tipo POST, enviar un mensaje de error
    echo "Error: Método de solicitud no permitido";
}

// Cerrar la conexión a la base de datos
$conexion->close();
?>