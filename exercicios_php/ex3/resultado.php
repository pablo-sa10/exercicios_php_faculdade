<?php

if(isset($_POST['enviar'])){
    $valor1 = $_POST['number_1'];
    $valor2 = $_POST['number_2'];

    $resultado = soma($valor1, $valor2);
    echo $resultado;

}

function soma($valor1, $valor2){
    if($valor1 == $valor2){
        $resultado = $valor1 + $valor2;
        $soma = $resultado * 3;
        return 'o triplo da soma dos dois números iguais é: '. $soma;
    }else{
        $soma = $valor1 + $valor2;
        return 'a soma dos números é: '. $soma;
    }
}

?>