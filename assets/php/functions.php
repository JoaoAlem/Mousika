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
        if(!empty($_SESSION['email']) && !empty($_SESSION['senha'])){
            return true;
        }else{
            header('Location: ' . $GLOBALS['path'] . '/pages/login.php');
            return false;
        }
    }

    function upload(){
        $param = $_POST;
        $nomeArquivo = basename($_FILES['arquivo']['name']);
        $nomeImagem = basename($_FILES['imagem']['name']);

        moveFileUpload($nomeArquivo);
        moveImageUpload($nomeImagem);

        createPost($param, $nomeArquivo, $nomeImagem);
    }

    function moveFileUpload($nomeArquivo){
        $uploadDir = '../uploads/files';
        $tmp_name = $_FILES["arquivo"]["tmp_name"];
        
        move_uploaded_file($tmp_name, "$uploadDir/$nomeArquivo");
    }
    function moveImageUpload($nomeImagem){
        $uploadDir = '../uploads/images';
        $tmp_name = $_FILES["imagem"]["tmp_name"];

        move_uploaded_file($tmp_name, "$uploadDir/$nomeImagem");
    }
?>