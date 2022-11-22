<?php
    require_once('../assets/php/functions.php');
    $caminhoAbsoluto = "http://" . $_SERVER['SERVER_NAME'];

    // Função para verificar se o usuario ja está logado
    function valida_login(){
        global $caminhoAbsoluto;
        //header('Location: ' . $caminhoAbsoluto . '/pages/areaUsuario.php');
        die();
    }

    // verificando em qual das situações o usuario se encaixa
    if(!empty($_SESSION['email']) && !empty($_SESSION['password'])){
        valida_login();
    }else{
        if(!empty($_POST['email']) && !empty($_POST['senha'])){
            login();
            valida_login();
        }
    }
?>