<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento de notas</title>
    <style>
        h1{
            text-align: center;
            color: white;
        }
        body{
            background-color: black;
        }
    </style>
</head>
<body>
<?php
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];
    $nome = $_POST['nome'];
    $media = ($n1 + $n2 + $n3) / 3;

    echo "<h1>Olá $nome, sua nota média é: $media</h1>";
?>
</body>
</html>





