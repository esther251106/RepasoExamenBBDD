<?php
    require_once "conexion.inc.php";

    try {
        $sql = "DELETE FROM videojuegos WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['id' => 1]);
        echo "Videojuego borrado con éxito.";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $stmt = NULL;
    $pdo = NULL;
?>