<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="padding: 20px;">
    <h1>Calculadora IMC</h1>
    <form action="./resultado.php" method="post">
        <label for="">Informe seu peso em kg</label><br>
        <input name="peso" type="number" placeholder="Ex: 84.2kg" required><br>
        <label for="">Informe sua altura em metros</label><br>
        <input name="altura" type="number" step="any" placeholder="Ex: 1.80" required><br>
        <button>Enviar</button>
    </form> 
</body>
</html>