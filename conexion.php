<?php

    //Crear la conexion
    $conectar = new mysqli('localhost','root','123','dbsigesudq','3307');

    //Validacion de conexion
    if ($conectar->connect_error){
        die("Error de conexion: ".$conectar->connect_error);
    }
?>