<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$idade = $_POST['idade'];

echo json_encode('Usuario Cadastrado. Bem-Vindo '.$nome);
?>

