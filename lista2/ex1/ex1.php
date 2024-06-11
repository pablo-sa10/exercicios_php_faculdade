<?php

require_once "../../menu.php";

$resultado = "";

if(isset($_POST['enviar'])){
    $valor1 = $_POST['number1'];

    if($valor1 > 0){
        $resultado = "Numero: ". $valor1 . " é positivo";
    }
    else if($valor1 < 0){
        $resultado = "Numero: ". $valor1 . " é negativo";
    }
    else{
        $resultado = "Numero: ". $valor1 . " é zero";
    }
}

?>
<form method="post" class="container p-5 mt-5">
    <div class="">
        <label class=" my-3 fs-2" for="">Digite um numero</label>
        <div class="input-group mb-3 w-25 justify-content-center">
            <input name="number1" type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
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