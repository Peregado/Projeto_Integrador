<?php 
require_once('global.php');
?>
<!DOCTYPE html>
<html lang = "pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title><?php echo SITE_NAME ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link href=".\css\style.css" rel="stylesheet" type="text/css" />
  <link href=".\css\normalize-min.css" rel=" stylesheet" type="text/css"/>
  <link href=".\css\login.css" rel="stylesheet" type="text/css"/>
</head>

<body>
    
<?php 
include_once('config/header.php');
?>
    <div class="painel2">
      <div class="login"><h1>Login</h1></div>
      <div class ="email"><h4>E-mail</h4></div>
      <div class="senha"> <h4>Senha</h4></div>
      <a  class="registrese" href="http://localhost/PI/registrase.php"> <h5>Registre-se</h5></a>
      <div class="search-boxlogin">
        <input type = "email" class="search-email" placeholder="Digite seu E-mail">
        <input type = "password" class="search-senha" placeholder="Digite sua senha">
        <button class="botaocontinuar"  href="C:\xampp\mysql\data\PI\registrase.htmll">Continuar</button>
      </div>

    </div>
       
    
        
        
    
    <script src=".\js\main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>