<?php
    require_once "conexion.inc.php";

    try {
        $consulta = $pdo->prepare("SELECT * FROM videojuegos");
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();

        while ($registro = $consulta->fetch()) {
            echo "ID: " . $registro['id'] . " - ";
            echo "Título: " . $registro['titulo'] . " - ";
            echo "Género: " . $registro['genero'] . " - ";
            echo "Precio: " . $registro['precio'] . " €<br>";
        }
    } catch (PDOException $e) {
        echo "Error al consultar: " . $e->getMessage();
    }

    $consulta = NULL;
    $pdo = NULL;
?>