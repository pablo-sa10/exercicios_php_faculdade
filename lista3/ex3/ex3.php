<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="padding: 20px;">
    <form action="./resultado.php" method="post">
        <?php for($i = 1; $i < 11; $i++){ ?>
            <p for="">Infome o noúmero <?= $i ?></p>
            <label for="">Número</label>
            <input name="number[]" type="number" step="any" required><br><br>
        <?php } ?>
        <label>Digte um numero a ser multiplicado</label><br>
        <input name="mult" type="number" step="any" required><br><br>
        <button>Enviar</button>
    </form>
</body>
</html>