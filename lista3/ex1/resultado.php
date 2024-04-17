<?php

$nome = $_POST['nome'];
$nota = $_POST['number'];

$notaInt = array_map('intval', $nota);
$somaAlunos = count($nome);

$somaNotas = array_sum($notaInt);  
$mediaSala = $somaNotas / $somaAlunos;

echo 'a média da classe é: '. $mediaSala;
?>