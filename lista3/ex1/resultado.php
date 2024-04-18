<?php

$nome = $_POST['nome'];
$nota = $_POST['number'];

$notaInt = array_map('intval', $nota);
$somaAlunos = count($nome);

$somaNotas = array_sum($notaInt);  
$mediaSala = $somaNotas / $somaAlunos;

$i = 0;
$notaDoAluno = 0;
foreach($nome as $n){
    if($notaDoAluno < $notaInt[$i]) {
        $msg = "A nota do $n é a maior da sala"; 
    } 
    $i += 1;
}

echo 'a média da classe é: '. $mediaSala. '<br>';
echo $msg;
?>