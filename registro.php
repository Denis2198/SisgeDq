<?php
include "conexion.php";

$nomusuario = $_POST['nombres'];
$apellidosusuario = $_POST['apellidos'];
$correousuario = $_POST['correo'];
$clavesuario = password_hash($_POST['clave'], PASSWORD_DEFAULT); //Funcion hash para cifrar credenciales

// Validar existencia de datos
$_validar = $conectar->prepare("SELECT idusuario FROM usuarios WHERE mailusuario = ?");
$_validar->bind_param("s", $correousuario);
$_validar->execute();
$_validar->store_result();

if ($_validar->num_rows > 0) {
    echo "<p>El correo ya está registrado</p>";
} else {

    // Insertar datos del usuario
    $pst = $conectar->prepare(
        "INSERT INTO usuarios (nomusuario, apeusuario, mailusuario, passusuario)
         VALUES (?, ?, ?, ?)"
    );

    $pst->bind_param("ssss", $nomusuario, $apellidosusuario, $correousuario, $clavesuario);

    if ($pst->execute()) {
        echo "<p>Usuario registrado correctamente</p>";
    } else {
        echo "<p>Error al registrar usuario: " . $pst->error . "</p>";
    }
}
?>