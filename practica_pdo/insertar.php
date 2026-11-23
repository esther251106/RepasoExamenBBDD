<?php
    require_once "conexion.inc.php";

    // Simulamos datos (o puedes recogerlos de $_POST / $_REQUEST)
    $titulo = "WWII";
    $genero = "Bélico";
    $precio = 12.20;

    try {
        $sql = "INSERT INTO videojuegos (titulo, genero, precio) VALUES (:titulo, :genero, :precio)";
        $insercion = $pdo->prepare($sql);

        $insercion->bindParam(':titulo', $titulo);
        $insercion->bindParam(':genero', $genero);
        $insercion->bindParam(':precio', $precio);

        $insercion->execute();
        echo "Videojuego insertado correctamente.";
    } catch (PDOException $e) {
        echo "Error al insertar: " . $e->getMessage();
    }

    // Liberamos la conexión
    $insercion = NULL;
    $pdo = NULL;
?>