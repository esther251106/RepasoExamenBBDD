<?php
    require_once "conexion.inc.php";

    try {
        $sql = "UPDATE videojuegos SET titulo = :titulo WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'titulo' => 'Fifa 2026',
            'id' => 1
        ]);
        echo "Videojuego actualizado con éxito.";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $stmt = NULL;
    $pdo = NULL;
?>