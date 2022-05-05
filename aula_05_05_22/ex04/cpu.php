<?php
$n = $_POST['n1'];
$y = 1;

for($i=$n;$i>=1;$i--){
    $y *= $i;
    echo "$y * $i = $y <br>";
}




?>