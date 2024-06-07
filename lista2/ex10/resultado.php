<?php

$peso = $_POST['peso'];
$altura = $_POST['altura'];

$imc = $peso / ($altura ** 2);

if ($imc < 18.5) {
    echo "Resultado: Baixo peso<br><br>";
} else if ($imc >= 18.5 && $imc <= 24.9) {
    echo "Resultado: Peso normal<br><br>";
} else if ($imc >= 25 && $imc <= 29.9) {
    echo "Resultado: Sobrepeso<br><br>";
} else if ($imc >= 30 && $imc <= 34.9) {
    echo "Resultado: Obesidade grau I<br><br>";
} else if ($imc >= 35 && $imc <= 39.9) {
    echo "Resultado: Obesidade grau II<br><br>";
} else if ($imc >= 40) {
    echo "Resultado: Obesidade grau III<br>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        Como chegamos nesse resultado? <br> Segue o link abaixo: <br>
        <a href="https://www.tuasaude.com/imc/" target="_blank">Tabela IMC</a>
    </body>
</html>