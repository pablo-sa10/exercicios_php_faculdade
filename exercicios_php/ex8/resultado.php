<?php 

$metrosAPintar = $_POST['number'];

if(empty($metrosAPintar)){
    header('Location: ./ex8.php?get=1');
    exit;
}

$quantidadeLitros = $metrosAPintar / 3;
$quantidadeLatas = round($quantidadeLitros) / 18; 
$valor = ceil($quantidadeLatas) * 80;

echo "A quantidade de latas necessárias: " . ceil($quantidadeLatas). "<br>";
echo "Valor: $" . round($valor). "<br>";


?>