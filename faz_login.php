<?php

session_start();

if ($_POST['email'] == 'eu@eu.eu' && $_POST['senha'] == '0') {
    $_SESSION['usuario_logado'] = true;
    $_SESSION['nome_do_usuario'] = '';
    header('location:logado.php');
} else {
    $_SESSION['usuario_logado'] = false;
    unset($_SESSION['nome_do_usuario']);
    header('location:nao_logado.php');
}

