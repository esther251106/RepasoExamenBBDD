<!--Crea una variable de texto con una hora en ella (por ejemplo, 
“21:30:12”), y luego procésala para extraer por separado la hora,
 el minuto y el segundo, y comprobar si es una hora válida.
Por ejemplo, la hora anterior sí debería ser válida, pero si ponemos 
“12:63:11” no debería serlo, porque 63 no es un minuto válido-->
<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

function hora(string $horaTxt) :string{
    //separamos el txt
    $partes = explode(":", $horaTxt);

    //extraemos horas, min y seg
    $hora = $partes[0];
    $min = $partes[1];
    $seg = $partes[2];

    if ($hora > 0 && $hora <=23 || $min > 0 && $min <=59 || $seg > 0 && $seg <= 59) {
        return "Hora válida - Horas: $hora| Min: $min| Seg: $seg"; 
    } else {
        return "La hora ($horaTxt) no es valida";
    }
}
//variable texto
$horaPrueba = "21:30:12";
$resultado = hora($horaPrueba);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprueba hora</title>
    <link rel="stylesheet" href="../estilos/estilos.css">
</head>
<body>
    <div class="contenedor">
        <h1>Comprueba hora</h1>
        <p>Hora para validar: 21:30:12 </p>
        <div class="resultado">
            <?php echo $resultado; ?>
        </div>
    </div>
</body>
</html>