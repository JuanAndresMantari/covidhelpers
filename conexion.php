<?php

    $conexion = mysqli_connect("localhost", "root", "", "coviddb");
    if (mysqli_connect_errno()){
        echo "No se pudo conectar a la base de datos";
        exit();
    }

    mysqli_select_db($conexion, "coviddb") or die("No se encuentra la base de datos");

    mysqli_set_charset($conexion,"utf8");


?>
