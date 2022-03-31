<?php

$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];

if($n1<$n3&&$n2>$n3){
    echo "Os numeros digitados em ordem crescente foi: $n1 < $n3 < $n2";
}elseif($n1>$n2&&$n2<$n3){
    echo "Os numeros digitados em ordem crescente foi: $n2 < $n3 < $n1";
}elseif($n1>$n2&&$n2>$n3){
    echo "Os numeros digitados em ordem crescente foi: $n2 < $n3 < $n1";
}else{
    echo "Os numeros digitados em ordem crescente foi: $n1 < $n2 < $n3";
}



?>