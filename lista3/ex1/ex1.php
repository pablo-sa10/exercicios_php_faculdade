<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="padding: 20px;">
    <h1>Notas da Classe</h1>

    <form action="./resultado.php" method="post">
        <?php for($i = 1; $i < 11; $i++){ ?>
            <p for="">Infome o nome do aluno e a nota do aluno <?= $i ?></p>
            <label for="">Nome</label>
            <input name="nome[]" type="text" required>
            <label for="">Nota</label>
            <input name="number[]" type="number" step="any" required><br><br>
        <?php } ?>
        <button>Enviar</button>
    </form>
</body>
</html>