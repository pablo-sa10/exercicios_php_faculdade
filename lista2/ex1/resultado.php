<?php

if(isset($_POST['enviar'])){
    $valor1 = $_POST['number1'];

    if($valor1 > 0){
        echo "Numero: ". $valor1 . " é positivo";
    }
    else if($valor1 < 0){
        echo "Numero: ". $valor1 . " é negativo";
    }
    else{
        echo "Numero: ". $valor1 . " é zero";
    }
}