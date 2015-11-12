<?php

$mysqli = new mysqli("127.0.0.1", "root", "", "livraria");

$con = $mysqli->prepare("INSERT INTO cadastro (nome, escritorio, email, telefone) VALUES (?, ?, ?, ?)");

$nome = $_POST['nome'];
$escritorio = $_POST['escritorio'];
$email = ($_POST['email']);
$telefone = ($_POST['telefone']);

$con->bind_param("ssss", $nome, $escritorio, $email, $telefone);
if ($con->execute()) {
    header('location: cadastrado.php');
} else {
    echo 'Erro!' . $con->error;
}


$con->execute();

$con->close();
?>