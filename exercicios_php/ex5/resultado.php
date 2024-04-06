<?php 

$valor = $_POST['fatorial'];
$fatorial = 1;

for($i = $valor; $i > 0; $i--){
    $fatorial *= $i;
}

echo 'o fatorial de '. $valor .' é: '. $fatorial;