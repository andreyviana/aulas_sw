<?php

    $numeros = [1,12,50,1.2];
    //echo $numeros[2];
    $q = count($numeros);

    $y = 0;
    for($i=0;$i<$q;$i++){
        echo "indice = $i -- vetor = $numeros[$i] <br>";
        $y += $numeros[$i];
    }
    echo "<hr>";
    echo "soma dos indices do vetor: $y";
    $media = $y/$q;
    echo "<br>Média: $media";
\

?>