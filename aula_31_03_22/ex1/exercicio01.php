<?php

$nome = $_POST['nome'];
$data = $_POST['data'];

$idade = 2022 - $data;

echo "<p style='color:red;'>Olá $nome voce tem $idade anos de idade</p>";

?>