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

        $newNameFile = moveFileUpload($nomeArquivo);
        $newNameImage = moveImageUpload($nomeImagem);

        createPost($param, $newNameFile, $newNameImage);
    }

    function moveFileUpload($nomeArquivo){
        // Definindo o diretorio para o upload
        global $root;
        $uploadDir = $root . "/assets/uploads/files";

        // Definindo um nome único para o arquivo, mantendo sua extensão
        $temp = explode(".", $nomeArquivo);
        $newfilename = round(microtime(true)) . '.' . end($temp);
    
        // definindo as variaveis para executar a função de mover arquivos
        $tmp_name = $_FILES["arquivo"]["tmp_name"]; 
        $caminhoFinal = "$uploadDir/$newfilename";
        
        if(moverArquivos($tmp_name, $caminhoFinal)){
            return $newfilename;
        }
    }
    
    function moveImageUpload($nomeImagem){
        // Definindo o diretorio para o upload
        global $root;
        $uploadDir = $root . "/assets/uploads/images";

        // Definindo um nome único para o arquivo, mantendo sua extensão
        $temp = explode(".", $nomeImagem);
        $newfilename = round(microtime(true)) . '.' . end($temp);

        // definindo as variaveis para executar a função de mover arquivos
        $tmp_name = $_FILES["arquivo"]["tmp_name"]; 
        $caminhoFinal = "$uploadDir/$newfilename";

        if(moverArquivos($tmp_name, $caminhoFinal)){
            return $newfilename;
        }
    }

    function moverArquivos($tmp_name, $uploadDir){
        if(move_uploaded_file($tmp_name, $uploadDir)){
            return true;
        }else{
            return false;
        }
    }
?>