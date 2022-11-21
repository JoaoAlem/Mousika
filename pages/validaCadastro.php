<?php
    require_once('../assets/php/functions.php');
    $caminhoAbsoluto = "http://" . $_SERVER['SERVER_NAME'];

    // se o usuário já estiver logado, ele não pode acessar nem fazer requisições para essa pagina
    if(!empty($_SESSION['email']) && !empty($_SESSION['password'])){
        header('Location: ' . $caminhoAbsoluto . '/index.php');
        die();
    }

    // verificando se o usuario preencheu todos os dados corretamente
    if(!empty($_POST['nome']) && !empty($_POST['sobrenome']) && !empty($_POST['email']) && !empty($_POST['senha'])){
        cadastraUsuario();
        header('Location: ' . $caminhoAbsoluto . '/index.php');
        die();
    }
?>