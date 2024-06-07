<?php

if(isset($_GET['get'])){
    if($_GET['get'] == 1){
        echo 'Por favor insira um valor<br><br>';
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
    <h1>Loja de Tintas</h1>
    <h3>Seja bem vindo</h3><br>

    <form action="./resultado.php" method="post">
        <label for="">Informe o tamanho da área a ser pintada em M²</label><br>
        <input name="number" type="number" placeholder="Ex: 3.2">
        <button>Enviar</button>
    </form>
</body>
</html>