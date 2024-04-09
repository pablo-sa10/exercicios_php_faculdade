<?php 

$A = $_POST['a']; 
$B = $_POST['b'];

if($A < $B){
    echo 'oredem dos valores: '. $A . ', '. $B; 
}else if($B < $A){
    echo 'oredem dos valores: '. $B . ', '. $A;
}else{
    echo 'os dois valores digitados são iguais<br> valor: '. $A;
}
?>