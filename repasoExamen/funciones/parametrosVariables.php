<!-- Crea las siguientes funciones:
Una función que devuelva el mayor de todos los números recibidos como
 parámetro variables:
function mayor(): int. Utiliza las funciones func_get_args(), etc…
No puedes usar la función max()-->
<?php
function mayor(): int {
    $arrayNumeros = func_get_args();
    $nMayor = $arrayNumeros[0];

    foreach ($arrayNumeros as $numeros) {
        if ($numeros > $nMayor) {
            $nMayor = $numeros;
        }
    }

    return $nMayor;
}

//probamos ejercicio
$resultado = mayor(1, 2, 3, 4, 5, 6, 7, 8, 9);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>parámetros variables</title>
    <link rel="stylesheet" href="../estilos/estilos.css">
</head>
<body>
    <div class="contenedor">
        <h1>Parametros variables</h1>
        <p> Numeros evaluados: 1, 2, 3, 4, 5, 6, 7, 8, 9 </p>
        <div class="resultado">
            <p>Número mayor: <?php echo $resultado; ?></p>
        </div>
    </div>
</body>
</html>
