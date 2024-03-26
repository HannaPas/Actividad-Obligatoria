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


if (mail("hannapastor22@gmail.com", "AsignacionDeTurnos", $cuerpo_mail)) {
    echo "Turno asignado con éxito.";
} else {
    echo "Error al asignar el turno.";
}
