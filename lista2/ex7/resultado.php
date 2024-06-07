<?php 

$metros = $_POST['metros'];

if(empty($metros)){
    header('Location: ./ex7.php?get=1');
    exit;
}

$centimetros = $metros * 100;

echo $metros . ' metros convertidos em centímetros são: '. $centimetros;

?>

<br><br><button><a href="./ex7.php">Fazer outro cálculo</a></button>