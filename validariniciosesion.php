<?php
session_start();
include "conexion.php";

$correo = $_POST['correo'];
$claveIngresada = $_POST['clave'];

// Buscar usuario por correo
$sql = $conectar->prepare("SELECT idusuario, nomusuario, apeusuario, passusuario FROM usuarios WHERE mailusuario = ?");
$sql->bind_param("s", $correo);
$sql->execute();
$sql->store_result();

if ($sql->num_rows > 0) {

    // OJO: deben coincidir con las columnas seleccionadas
    $sql->bind_result($id, $nombre, $apellido, $claveEncriptadaBD);
    $sql->fetch();

    // Comparar la clave ingresada con el hash
    if (password_verify($claveIngresada, $claveEncriptadaBD)) {

        // GUARDAMOS TODO LO NECESARIO EN SESIÓN
        $_SESSION['usuario'] = $id;
        $_SESSION['nombre'] = $nombre;
        $_SESSION['apellido'] = $apellido;

        header("Location: index.php");
        exit();
    } else {
        echo "Contraseña incorrecta";
    }

} else {
    echo "El correo no existe";
}
?>