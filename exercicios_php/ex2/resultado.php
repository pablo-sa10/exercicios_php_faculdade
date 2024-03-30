<?php

if(isset($_POST['enviar'])){
  $numeros = $_POST['number'];

  var_dump($numeros);
  exit;
  foreach($numeros as $num){
    echo $num;
  } ;  
}




/* $menorValor = min($numeros);
$indice = array_search($menorValor, $numeros);

echo "omenor valor é o: $menorValor, e seu índice é $indice"; */