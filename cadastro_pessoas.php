<?php

$con = mysql_connect("localhost", "root", "") or
        die('Não foi possível conectar');
$nome = $_POST['nome'];
$escritorio = $_POST['escritorio'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
mysql_select_db("livraria", $con);
mysql_query("INSERT INTO livraria (nome, escritorio, email, telefone) VALUES ('$nome', '$escritorio', '$email', $telefone)");
mysql_close($con);
?>
