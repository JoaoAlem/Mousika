<?php
    // Usando o session como uma variavel global
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    // Função para a abertura de uma conexão com o banco de dados
    function open_database(){
        try {
            // guardando uma nova conexão de banco de dados na variavel $db e retornando ela
            $db = new PDO('mysql:host=' . DB_HOST . ';port=' .DB_PORT . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);
            return $db;
        } catch (PDOException $e) {
            // se deu algum erro de conexão com o banco de dados, ele irá retornar qual foi o erro no html
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    // Função para encerrar a conexão com o banco de dados
    function close_database($db){
        try {
            $db = null;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    // Função para realizar uma consulta no banco de dados
    function database_query($param = null){
        $db = open_database();
        $sql = 'SELECT imagem, id_musica, nome_musica, nome_autor, dificuldade, instrumento FROM musicas';
        $resultado = null;

        if(!empty($param)){
            try{
                $sql .= ' WHERE nome_musica LIKE :nome_musica';
                $stmt = $db->prepare($sql);
                $stmt->bindValue(':nome_musica', $param.'%', PDO::PARAM_STR);
                $stmt->execute();
                $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
            }catch (PDOException $e){
                print $e->getMessage();
            }
        } else{
            try{
                $stmt = $db->prepare($sql);
                $stmt->execute();
                $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
            }catch (PDOException $e){
                print $e->getMessage();
            }
        } 

        close_database($db);
        return $resultado;
    }

    // Função para retornar uma musica no banco de dados
    function pesquisarMusica($param){
        $db = open_database();
        $sql = 'SELECT m.id_musica, m.imagem, m.arquivo, m.nome_musica, m.nome_autor, m.dificuldade, m.instrumento, u.nome, u.sobrenome FROM musicas m INNER JOIN usuario u on m.id_usuario = u.id_usuario WHERE m.id_musica = :id_musica';
        $resultado = null;

        if(!empty($param)){
            try{
                $stmt = $db->prepare($sql);
                $stmt->bindValue(':id_musica', $param, PDO::PARAM_STR);
                $stmt->execute();
                $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
            }catch (PDOException $e){
                print $e->getMessage();
            }finally{
                close_database($db);
                return $resultado;
            }
        }

        
    }

    // Função para cadastrar um usuário
    function create_account($param = null){
        // abrindo uma conexão com o banco de dados e definindo um sql para o statement
        $db = open_database();     
        $sql = 'INSERT INTO usuario (nome, sobrenome, email, senha) VALUES (:nome , :sobrenome , :email , :senha )';

        // aumentando o "custo" da hash para fazer ela mais segura
        $options = [
            'cost' => 12,
        ];

        // Guardando as senhas usando uma hash de criptografia
        $senha = password_hash($param['senha'], PASSWORD_BCRYPT, $options);
        
        if(!empty($param)){    
            try{
                // Preparando, fazendo o "link" dos valores com os campos corretos e executando o statement
                $stmt = $db->prepare($sql);
                $stmt->bindValue(':nome', $param['nome'], PDO::PARAM_STR);
                $stmt->bindValue(':sobrenome', $param['sobrenome'], PDO::PARAM_STR);
                $stmt->bindValue(':email', $param['email'], PDO::PARAM_STR);
                $stmt->bindValue(':senha', $senha, PDO::PARAM_STR);
                $stmt->execute();

            }catch(PDOException $e){
                print "Error!: " . $e->getMessage() . "<br/>";
            }finally{
                close_database($db);
            }
        }
    }

    // Função para fazer o login de um usuario
    function user_login($param){
        $db = open_database();
        $sql = 'SELECT id_usuario, email, senha FROM usuario WHERE email = :email';
        $resultado = null;
        
        try {
            $stmt = $db->prepare($sql);
            $stmt->bindValue(":email", $param['email'], PDO::PARAM_STR);
            $stmt->execute();
            $resultado = $stmt->fetch(PDO::FETCH_OBJ);

            if(!empty($resultado)){
                if(password_verify($param['senha'], $resultado->senha)){
                    $_SESSION['email'] = $resultado->email;
                    $_SESSION['senha'] = $resultado->senha;
                    $_SESSION['id'] = $resultado->id_usuario;
                }
            }
        } catch (PDOException $e) {
            print $e->getMessage();
        }finally{
            close_database($db);
        }
    }

    // Função para criar um post
    function createPost($param, $nomeArquivo, $nomeImagem){
        $db = open_database();
        $sql = 'INSERT INTO musicas (nome_musica, nome_autor, dificuldade, instrumento, id_usuario, imagem, arquivo) VALUES (:nome_musica, :nome_autor, :dificuldade, :instrumento, :id_usuario, :imagem, :arquivo)';

        try{
            $stmt = $db->prepare($sql);
            $stmt->bindValue(':nome_musica', $param['nome_musica'], PDO::PARAM_STR);
            $stmt->bindValue(':nome_autor', $param['nome_autor'], PDO::PARAM_STR);
            $stmt->bindValue(':dificuldade', $param['dificuldade'], PDO::PARAM_STR);
            $stmt->bindValue(':instrumento', $param['instrumento'], PDO::PARAM_STR);
            $stmt->bindValue(':id_usuario', $param['id_usuario'], PDO::PARAM_INT);
            $stmt->bindValue(':imagem', $nomeImagem, PDO::PARAM_STR);
            $stmt->bindValue(':arquivo', $nomeArquivo, PDO::PARAM_STR);
            $stmt->execute();
        }catch(PDOException $e){
            print $e->getMessage();
        }finally{
            close_database($db);
        }
    }

    // função para realizar o favorito do usuario
    function adicionarFavoritos($param){
        $db = open_database();
        $sql = 'INSERT INTO favoritar (id_usuario, id_musica) VALUES (:id_usuario, :id_musica);';

        try{
            $stmt = $db->prepare($sql);
            $stmt->bindValue(':id_usuario', $param['id_usuario'], PDO::PARAM_INT);
            $stmt->bindValue(':id_musica', $param['id_musica'], PDO::PARAM_INT);
            $stmt->execute();
        }catch(PDOException $e){
            print $e->getMessage();
        }finally{
            close_database($db);
        }
    }

    function getFavoritos(){
        $db = open_database();
        $sql = 'SELECT m.nome_musica, m.id_musica, m.nome_musica, m.nome_autor, m.imagem, m.instrumento, m.dificuldade  FROM favoritar f INNER JOIN musicas m on f.id_musica = m.id_musica WHERE f.id_usuario = :id_usuario';

        try{
            $stmt = $db->prepare($sql);
            $stmt->bindValue(':id_usuario', $_SESSION['id'], PDO::PARAM_INT);
            $stmt->execute();
            $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            print $e->getMessage();
        }finally{
            close_database($db);
            return $resultado;
        }
    }

    function verificarFavorito($id_musica, $id_usuario){
        $db = open_database();
        $sql = 'SELECT COUNT(*) as total FROM favoritar WHERE id_usuario = :id_usuario AND id_musica = :id_musica;';

        try{
            $stmt = $db->prepare($sql);
            $stmt->bindValue(':id_usuario', $id_usuario, PDO::PARAM_INT);
            $stmt->bindValue(':id_musica', $id_musica, PDO::PARAM_INT);
            $stmt->execute();
            $resultado = $stmt->fetch(PDO::FETCH_OBJ);

            if($resultado->total == "1"){
                return true;
            } else{
                return false;
            }
        }catch(PDOException $e){
            print $e->getMessage();
        }finally{
            close_database($db);
        }
    }

    function getMeusPosts(){
        $id = $_SESSION['id'];
        $resultado = null;
        $db = open_database();
        $sql = 'SELECT m.nome_musica, m.id_musica, m.nome_musica, m.nome_autor, m.imagem, m.instrumento, m.dificuldade FROM musicas m INNER JOIN usuario u on m.id_usuario = u.id_usuario WHERE m.id_usuario = :id_usuario';

        try {
            $stmt = $db->prepare($sql);
            $stmt->bindValue(':id_usuario', $id, PDO::PARAM_INT);
            $stmt->execute();
            $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            print $e->getMessage();
        }finally{
            close_database($db);
            return $resultado;
        }
    }

    function getUsuario(){
        $id = $_SESSION['id'];
        $resultado = null;
        $db = open_database();
        $sql = 'SELECT nome, sobrenome, email, senha FROM usuario WHERE id_usuario = :id_usuario';
        
        try {
            $stmt = $db->prepare($sql);
            $stmt->bindValue(':id_usuario', $id, PDO::PARAM_INT);
            $stmt->execute();
            $resultado = $stmt->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            print $e->getMessage();
        }finally{
            close_database($db);
            return $resultado;
        }
    }

    function changeUsuario($param){
        $id = $_SESSION['id'];
        $db = open_database();
        $usuario = getUsuario();
        

        // aumentando o "custo" da hash para fazer ela mais segura
        $options = [
            'cost' => 12,
        ];

        if(!empty($param['nome']) && strcmp($param['nome'], $usuario->nome) !== 0){
            try {
                $sql = 'UPDATE usuario SET nome = :nome WHERE id_usuario = :id_usuario;';
                $stmt = $db->prepare($sql);
                $stmt->bindValue(':nome', $param['nome'], PDO::PARAM_STR);
                $stmt->bindValue(':id_usuario', $id, PDO::PARAM_INT);
                $stmt->execute();
            } catch (PDOException $e) { 
                print $e->getMessage();
            }
        }
        if(!empty($param['sobrenome']) && strcmp($param['sobrenome'], $usuario->sobrenome) !== 0){
            try {
                $sql = 'UPDATE usuario SET sobrenome = :sobrenome WHERE id_usuario = :id_usuario;';
                $stmt = $db->prepare($sql);
                $stmt->bindValue(':sobrenome', $param['sobrenome'], PDO::PARAM_STR);
                $stmt->bindValue(':id_usuario', $id, PDO::PARAM_INT);
                $stmt->execute();
            } catch (PDOException $e) { 
                print $e->getMessage();
            }
            
        }
        if(password_verify($param['senhaAntiga'], $usuario->senha)){
            if(!empty($param['senhaNova'])){
                try {
                    $sql = 'UPDATE usuario SET senha = :senha WHERE id_usuario = :id_usuario;';
                    $stmt = $db->prepare($sql);

                    // Guardando as senhas usando uma hash de criptografia
                    $senha = password_hash($param['senhaNova'], PASSWORD_BCRYPT, $options);
                    
                    $stmt->bindValue(':senha', $senha, PDO::PARAM_STR);
                    $stmt->bindValue(':id_usuario', $id, PDO::PARAM_INT);
                    $stmt->execute();
                } catch (PDOException $e) { 
                    print $e->getMessage();
                }
            }
        }
            
        close_database($db);
    }
?>