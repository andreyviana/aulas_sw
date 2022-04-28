<?php
    $nomes = ["Anderson", "Vanim", "Pinho", "ribas"];
    $index = 0;

    for($index=0;$index < sizeof($nomes);$index++){
        echo ($index+1)." - $nomes[$index] <br>";
    }

?>