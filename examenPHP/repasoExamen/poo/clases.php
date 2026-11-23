<?php
class Persona{
    private $DNI;
    private $nombre;
    private $email;

    //constructor
    public function __construct($DNI, $nombre, $email) {
        $this->DNI = $DNI;
        $this->nombre = $nombre;
        $this->email = $email;
    }
    //getters
    public function getDNI() {
        return $this->DNI;
    }
    public function getNombre() {
        return $this->nombre;
    }
    public function getEmail() {
        return $this->email;
    }
    //setters
    public function setDNI($DNI) {
        return $this->DNI = $DNI;
    }
    public function setNombre($nombre) {
        return $this->nombre = $nombre;
    }
    public function setEmail($email) {
        return $this->email = $email;
    }
    //toString
    public function toString() {
        echo "DNI: " . $this->DNI . " - " 
        . "Nombre: " . $this->nombre . " - "
        . "Email: " . $this->email;
    }
}


class Estudiante extends Persona {
    private $numExp;

    //Constructor
    public function __construct($DNI, $nombre, $email, $numExp) {
        parent::__construct($DNI, $nombre, $email);
        $this->numExp = $numExp;
    }
    //getter
    public function getNumExpediente() {
        return $this->numExpediente;
    }
    //setter
    public function setNumExpediente($numExpediente) {
        $this->numExpediente = $numExpediente;
    }
    //mostrar datos
    public function toString() {
        parent::toString();
        echo " - Numero expediente: " . $this->numExp;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>clases</title>
</head>
<body>
    <h1>Clases</h1>
    <?php
        $persona = new Persona("123456789", "Esther", "e@gmail.com");
        echo "<p> Persona 1: </p>";
        $persona->toString();
        $estudiante = new Estudiante("1234567", "pepe", "pepe@gmail.com", "1");
        echo "<p> Estudiante : </p>";
        $estudiante->toString();
        $persona->setNombre("Esther2");
        echo "<p> Persona 1 modifiada</p>";
        $persona->toString();
    ?>
</body>
</html>