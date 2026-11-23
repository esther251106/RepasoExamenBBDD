<!--Añade las siguientes funciones:
• digitos(int $num): int → devuelve la cantidad de dígitos de un número.
• digitoN(int $num, int $pos): int → devuelve el dígito que ocupa, empezando
por la izquierda, la posición $pos.
• quitaPorDetras(int $num, int $cant): int → le quita por detrás (derecha)
$cant dígitos.
• quitaPorDelante(int $num, int $cant): int → le quita por delante (izquierda)
$cant dígitos.
-->
<?php
function digitos(int $num): int {
    $cantidad = 0;
    if ($num == 0) {
        return 1;
    }
    while ($num > 0) {
        $num = (int)($num/10);
        $cantidad++;
    }
    return $cantidad;
}
function digitoN(int $num, int $pos): int {
    //pasamos a string
    $digito = (string) abs($num);
    return (int) $digito[$pos-1];
}
function quitaPorDetras(int $num, int $cant) {
    //pasamos a string
    $digito = (string) abs($num);
    $recortado = substr($digito,0,-$cant);
    return $recortado;

}
function quitaPorDelante(int $num, int $cant) {
    //pasamos a string
    $digito = (string) abs($num);
    $recortado = substr($digito,$cant);
    return $recortado;    
}
$numero = 4567;
$posicion = 2;
$cantidadD = 2;
$cantidadA = 3;
$digitos = digitos($numero);
$digitosN = digitoN($numero, $posicion);
$quitarPorDetras = quitaPorDetras($numero, $cantidadD);
$quitarPorDelante = quitaPorDelante($numero, $cantidadA);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matematicas</title>
    <link rel="stylesheet" href="../estilos/estilos.css">
</head>
<body>
    <div class="contenedor">
        <h1>Matematicas</h1>
        <p>Numero: 4567</p>
        <div class="resultado">
            <p>Cantidad digitos del n: <?php echo $digitos; ?></p>
            <p>El nº que ocupa la posicion <?php echo $posicion; ?> es: <?php echo $digitosN; ?></p>
            <p>Cantidad de nº quitado x detras <?php echo $cantidadD; ?> Nº: <?php echo $quitarPorDetras; ?></p>
            <p>Cantidad de nº quitado x delante <?php echo $cantidadA; ?> Nº: <?php echo $quitarPorDelante; ?></p>        
        </div>
    </div>
</body>
</html>