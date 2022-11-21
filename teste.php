<?php
    require_once 'config.php';
    require_once DBAPI;

    $db = open_database();


    if($db){
        $resultado = null;
        foreach($db->query('SELECT sum(1+1) as soma;') as $row){
        $resultado = $row['soma'];
        }
        echo  "<h1>banco de dados conectado</h1>";
        echo  "<h3>O resultado de 1 + 1 é: " . $resultado . "</h3>";
        echo '<a href="index.php">Voltar ao index</a><br>';
    } else{
        echo '<h1>Erro ao conectar banco de dados</h1>';
        echo '<a href="index.php">Voltar ao index</a>';
    };
?>