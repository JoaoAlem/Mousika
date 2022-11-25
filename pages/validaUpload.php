<?php
    require_once('../assets/php/functions.php');
    $caminhoAbsoluto = "http://" . $_SERVER['SERVER_NAME'];
    
    if(!empty($_POST) && !empty($_FILES)){
        upload();
        header('Location: ' . $caminhoAbsoluto . '/index.php');
        die();
    }
?>