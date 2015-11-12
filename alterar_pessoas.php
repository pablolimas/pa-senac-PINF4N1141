<?php

$mysqli = new mysqli("127.0.0.1", "root", "", "livraria");
$result = $mysqli->query("SELECT id, nome, escritorio, email, telefone FROM cadastro");

while ($linha = $result->fetch_assoc()) {

    echo '<li>';
    echo '<a href="#=' . $linha['id'] . '" class="btn btn-danger btn-xs">Remover</a> ';
    echo $linha['nome'] . ' - ' . $linha['usuario'];

    echo '<br>';
    echo '</li>';
}
?>