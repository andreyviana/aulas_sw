<?php
$x = [];
$y = 0;

for($i=0;$i<10;$i++){  
    $x[$i] = rand(1,100);
    $y += $x[$i];
    echo "$x[$i]<br>";
}
$media = $y/10;
echo "<hr>";
echo "<br>Média: $media";