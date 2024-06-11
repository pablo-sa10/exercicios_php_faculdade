<?php

require_once "../../menu.php";

$resultado = "";

if (isset($_POST['enviar'])) {
    $numeros = $_POST['number'];

    $valor = $numeros[0];

    for ($i = 1; $i < count($numeros); $i++) {

        if ($numeros[$i] < $valor) {
            $valor = $numeros[$i];
        }
    }

    $resultado = 'o menor valor é: ' . $valor . ' e o seu indice é: ' . $valor[0];
}

?>
<form method="post" class="container p-5 mt-5">
    <div class="row">
        <?php for ($i = 1; $i < 8; $i++) { ?>
            <div class="col-md-4">
                <label class=" my-3 fs-2" for="">NUMERO <?= $i ?></label>
                <div class="input-group mb-3 w-25 justify-content-center">
                    <input name="number[]" type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
            </div>
        <?php } ?>
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