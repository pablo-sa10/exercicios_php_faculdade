<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./resultado.php" method="post" style="margin-left: 40px;">
        <?php for($i = 1; $i < 8; $i++){ ?>
        <label for="">NUMERO <?= $i ?></label>
        <input name="number" type="number">
        <br><br>
        <?php } ?>

        <button name="enviar" type="submit">Enviar</button>
    </form>
</body>
</html>