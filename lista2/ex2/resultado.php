<?php

if(isset($_POST['enviar'])){
  $numeros = $_POST['number'];

  $valor = $numeros[0];

  for($i = 1; $i < count($numeros); $i++){
    
    if($numeros[$i] < $valor){
      $valor = $numeros[$i];
    }
  }

  echo 'o menor valor é: '. $valor . ' e o seu indice é: '.$valor[0];
}




/* $menorValor = min($numeros);
$indice = array_search($menorValor, $numeros);

echo "omenor valor é o: $menorValor, e seu índice é $indice"; */