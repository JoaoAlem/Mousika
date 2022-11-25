<?php
    require_once('../assets/php/functions.php');
    $caminhoAbsoluto = "http://" . $_SERVER['SERVER_NAME'];

    alteraUsuario();
    header("Location: areaUsuario.php");
    die();
?>