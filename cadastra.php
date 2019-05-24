<?php
include('conexao.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$idade = $_POST['idade'];

$sql = "INSERT INTO `cadastro`(`nome_cadastro`, `email_cadastro`, `idade_cadastro`) VALUES ('$nome', '$email', '$idade');";
$resultado = mysqli_query($conn, $sql);

echo json_encode('Usuario Cadastrado. Bem-Vindo '.$nome);

?>

