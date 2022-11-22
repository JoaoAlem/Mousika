<?php
    // Usando o session como uma variavel global
    session_start(); 

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
        $sql = 'SELECT id_musica, nome_musica, nome_autor, dificuldade, instrumento FROM musicas';
        $resultado = null;

        if(!empty($param)){
            try{
                $sql .= ' WHERE nome_musica LIKE :nome_musica';
                $stmt = $db->prepare($sql);
                $stmt->bindValue(':nome_musica', $param.'%', PDO::PARAM_STR);
                $stmt->execute();
                $resultado = $stmt->fetchAll();
            }catch (PDOException $e){
                print $e->getMessage();
            }
        } else{
            try{
                $stmt = $db->prepare($sql);
                $stmt->execute();
                $resultado = $stmt->fetchAll();
            }catch (PDOException $e){
                print $e->getMessage();
            }
        } 

        close_database($db);
        return $resultado;
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
                $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
    
                // Definindo a sessão do usuário para assim ele continuar logado após um tempo
                $_SESSION['email'] = $param['email'];
                $_SESSION['password'] = $senha;
                //$_SESSION['id_usuario'] = ;
            }catch(PDOException $e){
                print "Error!: " . $e->getMessage() . "<br/>";
            }finally{
                close_database($db);
                return $resultado;
            }
        }
    }

    // Função para fazer o login de um usuario
    function user_login($param){
        $db = open_database();
        $sql = 'SELECT email, senha FROM usuario WHERE email = :email';
        $resultado = null;
        
        try {
            $stmt = $db->prepare($sql);
            $stmt->bindParam(":email", $param['email'], PDO::PARAM_STR, 100);
            $stmt->execute();
            $resultado = $stmt->fetch(PDO::FETCH_ASSOC);


            // Definindo as variaveis de sessão para gerenciar a sessão do usuario
            $_SESSION['email'] = $param['email'];
        } catch (PDOException $e) {
            print $e->getMessage();
        }finally{
            close_database($db);
            return $resultado;
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
        }
        close_database($db);
    }
?>