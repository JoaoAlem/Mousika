<?php
// Nome do Banco de dados
define('DB_NAME', 'mousika');

// Usuario do banco de dados
define('DB_USER', 'root');

// Senha do banco de dados
define('DB_PASSWORD', 'root#2022');

// Nome do Host
define('DB_HOST', '172.17.0.3');

// Nome do Host
define('DB_PORT', '3306');

/* Definindo a constante ABSPATH para o caminho absoluto 
até o acesso das paginas web no servidor (__FILE__) */
if (!defined('ABSPATH')){
    define('ABSPATH', dirname(__FILE__) . '/');
};

// Caminho para o arquivo de configuração do banco de dados
if(!defined('DBAPI')){
    define('DBAPI', ABSPATH . 'inc/database.php');
}

// Caminho para o arquivo de configuração do banco de dados
if(!defined('DBFUNCTIONS')){
    define('DBFUNCTIONS', ABSPATH . 'assets/php/functions.php');
}
?>