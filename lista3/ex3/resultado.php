<?php

$numeros = $_POST['number'];
$numerosInt = array_map('intval', $numeros);
sort($numerosInt);


$multiplicador = $_POST['mult'];
foreach ($numerosInt as $n) {
    echo $multiplicador . " x " . $n . " = " . $n * $multiplicador ."<br>";
}
