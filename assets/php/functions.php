<?php
    $root = realpath($_SERVER["DOCUMENT_ROOT"]);
    require_once($root . '/config.php');
    require_once(DBAPI);

    // Variaveis para a passagem de uma pagina para a outra
    $arquivos = null;

    // Função para pesquisar 
    function searchMusicas(){
        global $arquivos;
        $param = $_GET['nome_musica'];
        $arquivos = database_query($param);
        return $arquivos;
    }

    function cadastraUsuario(){
        $param = $_POST;
        create_account($param);
    }

    function login(){
        $param = $_POST;
        user_login($param);
    }

    function usuarioLogado(){
        if(!empty($_SESSION['email']) && !empty($_SESSION['password'])){
            return true;
        }else{
            header('Location: ' . $GLOBALS['path'] . '/pages/login.php');
            return false;
        }
    }

    function upload(){
        $param = $_POST;
        var_dump($param);

        $nomeArquivo = $_FILES['arquivo']['name'];
        $nomeImagem = $_FILES['imagem']['name'];

        $upload = $_FILES;
        var_dump($upload);
    }
?>