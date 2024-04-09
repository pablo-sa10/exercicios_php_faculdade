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
<body>
    <form action="./resultado.php" method="post">
        <label for="">DIGITE UM VALOR EM METROS</label><br>
        <input name="metros" type="number"><br>
        <button name="enviar">enviar</button>
    </form>
</body>
</html>