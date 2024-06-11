<?php


require_once "../../menu.php";

$resultado = "";

if (isset($_POST['enviar'])) {
    $valor1 = $_POST['number_1'];
    $valor2 = $_POST['number_2'];

    $resultado = soma($valor1, $valor2);
}

function soma($valor1, $valor2)
{
    if ($valor1 == $valor2) {
        $resultado = $valor1 + $valor2;
        $soma = $resultado * 3;
        return 'o triplo da soma dos dois números iguais é: ' . $soma;
    } else {
        $soma = $valor1 + $valor2;
        return 'a soma dos números é: ' . $soma;
    }
}

?>

<form method="post" class="container p-5 mt-5">
    <div class="">
        <label class=" my-3 fs-2" for="">Valor 1</label>
        <div class="input-group mb-3 w-25 justify-content-center">
            <input name="number_1" type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <label class=" my-3 fs-2" for="">Valor 2</label>
        <div class="input-group mb-3 w-25 justify-content-center">
            <input name="number_2" type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <!-- <input name="number2" type="number"> -->
        <div class="">
            <button name="enviar" class="btn btn-success w-25" type="submit">enviar</button>
        </div>
    </div>
</form>

<div class="container">
    <h3><?= $resultado ?></h3>
</div>
</body>

</html>