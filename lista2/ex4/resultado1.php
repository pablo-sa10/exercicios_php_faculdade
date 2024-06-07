<?php 

if(isset($_POST['enviar'])){

    $num = $_POST['num'];

    for($i = 0; $i < 11; $i++){
        echo $num . ' x '. $i . ' = '. $num * $i .'<br>';
    }
}