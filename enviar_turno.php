<?php

$nombre_form = $_POST['nombre'];
$apellido_form = $_POST['apellido'];
$correo_form = $_POST['email'];
$fecha_form = $_POST['fecha'];


$cuerpo_mail =
    "Nombre:" . $nombre_form . "\r\n" .
    "Apellido" . $apellido_form . "\r\n" .
    "Correo" . $correo_form . "\r\n" .
    "Fecha" . $fecha_form . "\r\n";


/*if (mail("hannapastor22@gmail.com", "AsignacionDeTurnos", $cuerpo_mail)) {
    echo "Turno asignado con éxito.";
} else {
    echo "Error al asignar el turno.";
}*/


$conexion = mysqli_connect('localhost', 'id22005447_hanna', 'Cocilpove22#', 'id22005447_estetica_pacientes') or exit('No se pudo conectar a la base de datos');   //conexión con base de datos

$resultado = mysqli_query($conexion, "INSERT INTO estetica_pacientes VALUES (DEFAULT,'$nombre_form','$apellido_form', '$correo_form', '$fecha_form ') ");

if ($resultado) {
    echo "<script>alert('Turno asignado con éxito.'); window.location.href='index.php';</script>";
} else {
    echo "<script>alert('Error al asignar el turno.'); window.location.href='index.php';</script>";
}

mysqli_close($conexion);  //cierro conexión base de datos
