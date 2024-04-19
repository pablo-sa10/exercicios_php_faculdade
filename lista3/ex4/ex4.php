<?php

$meses = [
    1 => 'janeiro',
    2 => 'fevereiro',
    3 => 'março',
    4 => 'abril',
    5 => 'maio',
    6 => 'junho',
    7 => 'julho',
    8 => 'agosto',
    9 => 'setembro',
    10 => 'outubro',
    11 => 'novembro',
    12 => 'dezembro',
];
$resultado = "";

if(isset($_GET['mes'])){
    $mes = $_GET['mes'];

    $resultado = "o mês que vce digitou foi: $meses[$mes]";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        <label for="">Informe o mês que vc quer encontrar:</label><br>
        <input type="number" name="mes" id=""><br>
        <button>Enviar</button><br><br>
    </form>

    <?= $resultado ?>
</body>
</html>