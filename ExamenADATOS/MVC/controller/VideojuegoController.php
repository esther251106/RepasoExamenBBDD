<?php
// intermediario entre vista y modelo (pide datos al modelo y lo devuelve a la vista)
require_once "../MVC/modelos/VideojuegoModel.php";

class VideojuegoController {
    private $modelo;

    public function __construct() {
        $this->modelo = new VideojuegoModel();
    }

    public function index() {
        $mensaje = "";
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nombre'])) {
            $exito = $this->modelo->insertar($_POST['nombre'], $_POST['genero'], $_POST['precio']);
            $mensaje = $exito ? "¡Videojuego guardado con éxito!" : "Error al guardar el videojuego.";
        }

        $videojuegos = $this->modelo->obtenerTodos();
        require_once "../MVC/vista/videojuego_view.php";
    }
}
?>