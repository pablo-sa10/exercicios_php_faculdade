<?php

if(isset($_POST['enviar'])){
  $numeros = $_POST['number'];

  foreach($numeros as $num){
    echo $num . '<br>';
  } ;  
}




/* $menorValor = min($numeros);
$indice = array_search($menorValor, $numeros);

echo "omenor valor é o: $menorValor, e seu índice é $indice"; */