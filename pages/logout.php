<?php
    // Iniciando a sessão para poder limpa-la
    session_start();

    // definindo qualquer valor da sessão como nulo
    $_SESSION = array();

    // limpando os cookies da sessão
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }
    
    // Destruindo a sessão
    session_destroy();

    // Redirecionando para o index novamente
    header('Location: ' . $caminhoAbsoluto . '/index.php');
    die();
?>