<?php
    $dia = $_POST['dia'];


    switch($dia){
        case 1: echo "DOMINGO";
        break;
        case 2: echo "SEGUNDA";
        break;
        case 3: echo "TERÇA";
        break;
        case 4: echo "QUARTA";
        break;
        case 5: echo "QUINTA";
        break;
        case 6: echo "SEXTA";
        break;
        case 7: echo "SÁBADO";
        break;
        default: echo "ESSE NUMERO NAO CORRESPONDE A NENHUM DIA DA SEMANA";
        break;
    };
?>