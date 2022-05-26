<?php
echo "função sem retorno e sem parâmetro";
echo "<br>";

function sayAlgo(){
    echo "algo";
}
function linha(){
    echo "<hr>";
}

sayAlgo();
linha();

echo "função sem retorno e com parâmetro";
echo "<br>"
function say_var($a){
    echo $a;
}
echo say_var('Olá mundo');
echo "<br>";
echo say_var(29);

linha();

//função com retorno e sem parâmetro
function say_b(){
    $b = 'Andrey';
    return $b;
}
say_b();
linha();

//função com retorno e com parâmetro
function soma($x,$y){
    $soma = $x + $y;
    return $soma;
}

$n1 = 10;
$n2 = 20;
$res = soma($n1,$n2);

echo "A soma é $res";