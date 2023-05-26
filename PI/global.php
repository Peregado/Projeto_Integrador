<?php
require_once('config/config.php');

// require classes
require_once('config/user.php');
require_once('config/carros.php');



// inicializando classes

$user = new User();
$carros = new Carros();

// get php url
$url = $_SERVER['PHP_SELF'];
$url = explode('/', $url);
$url = end($url);
if($url != 'catalogo.php') {
    @$_SESSION['locacao']['emAndamento'] = false;
}


