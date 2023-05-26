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
  <link href=".\css\registrase.css" rel="stylesheet" type="text/css"/>
</head>

<body>
    
    <?php 
    include_once('config/header.php');
    ?>
    <div class="painel2">
      <form action="controllers/registro.php" method="POST">
        <fieldset>
            <legend class="cadastro"><h1>Cadastro</h1></legend>
            <br>
            <div>
                <input type="text" name= "nome" class="search-nome" placeholder="Digite seu nome" required>
                <label for="nome" class="nome2"><h4>Nome</h4></label>
            </div>
            <div>
                <input type = "email" name ="email" class="search-email2" placeholder="Digite seu E-mail" required>
                <label for="email" class ="email2"><h4>E-mail</h4></label>
            </div>
            <div>
                <input type = "password" name="senha" class="search-senha2" placeholder="Digite sua senha" required>
                <label for="senha" class="senha2"> <h4>Senha</h4></label>
            </div>
            <!-- TODO: cpf -->
            <div>
                <input type = "text" name="cpf" class="search-cpf" placeholder="Digite seu CPF" required>
                <label for="cpf" class="cpf"> <h4>CPF</h4></label>
            </div>
            <div>
              <input type = "date" name="data_nascimento" class="search-date" required>
              <label for="data_nascimento" class="data"> <h5>Data de nascimento:</h5></label>
            </div>
                <button type="submit" name ="submit" class="botaocontinuar" >Continuar</button>
                <a href="<?php echo SITE_URL ?>index.php" class="botaovoltar">Voltar</a>
        </fieldset>
    </form>
    </div>

    </div>
           
    
    <script src=".\js\main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>