<?php 

$nascimento = $_POST['date'];

if(empty($nascimento)){
    header('Location: ./ex9.php?get=1');
    exit;
}

$data = new DateTime();
$nascimentoobj = new DateTime($nascimento);

if($nascimentoobj > $data){
    header('Location: ./ex9.php?get=2');
    exit;
}

$diferenca = $nascimentoobj->diff($data);
$idade = $diferenca->y;
$dias = $diferenca->days;
$idade2025 = $diferenca->y + 1;

echo "Sua idade: ".$idade."<br>";
echo "Quantos dias você viveu: ".$dias."<br>";
echo "Quantos anos vc terá em 2025: ".$idade2025."<br>";
?>