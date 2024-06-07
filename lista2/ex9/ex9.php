<?php

if(isset($_GET['get'])){
    if($_GET['get'] == 1){
        echo 'Por favor insira uma Data<br><br>';
    }else if($_GET['get'] == 2){
        echo 'Ano inválido<br><br>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="padding: 20px;">
    <h1>Calculadora Idade</h1>
    <form action="./resultado.php" method="post">
        <label for="">Informe sua data de nascimento</label><br>
        <input name="date" type="date"><br>
        <button>Enviar</button>
    </form>
</body>
</html>