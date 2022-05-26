<?php

    $arr = [2,13,56,9,4,10];

    function soma_vetor($x){
        $soma = 0;
        for($i=0;$i<count($x);$i++){
            $soma += $x[$i];    
        }
        return $soma;
    }
    echo soma_vetor($arr);



?>