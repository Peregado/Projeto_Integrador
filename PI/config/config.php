<?php
@session_start();

    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASSWORD', 'p@$$w0rd');
    define('DB', 'senacars');

    $pdo = new PDO('mysql:host='.HOST.';dbname='.DB, USER, PASSWORD) or die('Não foi possível conectar-se ao banco de dados');

    define('SITE_NAME', 'SENACARS');
    define('SITE_FAVICON', '');
    define('SITE_VERSION', '1.0');
    define('SITE_URL', 'http://localhost/Projeto_Integrador/PI/');

    // timezone São Paulo
    date_default_timezone_set('America/Sao_Paulo');

    // allow_url_include=0
    ini_set('allow_url_include', '0');
    
?>