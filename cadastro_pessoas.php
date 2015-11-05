<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'livraria';

// Conecta-se ao banco de dados MySQL
$mysqli = new mysqli($nome, $escritorio, $email, $telefone);

// Caso algo tenha dado errado, exibe uma mensagem de erro
if (mysqli_connect_errno())
    trigger_error(mysqli_connect_error());