<?php 

$numeros = $_POST['number'];

$numeros = array_map('intval' ,$numeros);

$positivo = 0;
$negativo = 0;
$pares = 0;
$impares = 0;

foreach($numeros as $n){
    if($n < 0){
        $negativo += 1;
    }if($n > 0){
        $positivo += 1;
    }if($n % 2 == 0){
        $pares += 1;
    }if($n % 2 == 1){
        $impares += 1;
    }
}

echo "Números pares: $pares <br> 
Números ímpares: $impares <br>
Números positivos: $positivo<br>
Números negativos: $negativo"


?>