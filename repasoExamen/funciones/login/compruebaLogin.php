<?php
    $usuariosValidos = [
        "admin" => "1234",
        "pepe" => "1234"
    ];

    $usuRecibido = $_POSt['usuario'] ?? '';
    $contraRecibida = $_POST['contra'] ?? '';

    //hacemos comprobaciones
    $existeUsu = array_key_exists($usuRecibido, $contraRecibida);
    //si existe
    if ($existeUsu) {
        if($usuariosValidos[$usuRecibido] === $contraRecibida) {
            //usuario y contraseña correctas, cargamos la vista de exito
            include('ok.php');
        } else {
            $mensajeError = "Contraseña no valida"
            include('ko.php');
        }
    }else {
        //si el usu no existe
        $mensajeError = "El usuario no existe";
        include('ko.php');
    }

?>