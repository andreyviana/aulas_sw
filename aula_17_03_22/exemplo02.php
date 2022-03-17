<?php
    $nota = 5.5;

    //APROVADO SE NOTA >6
    //SE NOTA <5 É REPROVADO
    //SE NOTA ENTRE 5 E 6. ENTRA EM RECUPERAÇÃO
    

    if($nota>6){
        //comandos se verdadeiro
        echo "APROVADO";
    }elseif($nota<5){
        //comandos se falso 
        echo "REPROVADO";
    }else{
        echo "RECUPERAÇÃO";
    }
?>