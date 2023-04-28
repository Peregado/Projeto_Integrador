<?php

    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASSWORD', 'p@$$w0rd');
    define('DB', 'locadora');

    $pdo = new PDO('mysql:host='.HOST.';dbname='.DB, USER, PASSWORD) or die('Não foi possível conectar-se ao banco de dados');

    define('SITE_NAME', 'SENACARS');
    define('SITE_FAVICON', '');
    define('SITE_VERSION', '');

    
?>