<?php
    session_start();
    
    if(isset($_POST['submit']))
    {
        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $data = $_POST['data_nascimento'];
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
        $query = "INSERT INTO usurarios(nome,email,senha,data_nasc) 
        VALUES ('$nome','$email','$senhaHash','$data')";
        
        $result = mysqli_query($conexao, $query);
        
        $_SESSION['nome'] = $nome;
        
        header("Location: index.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang = "pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Senacar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link href=".\css\style.css" rel="stylesheet" type="text/css" />
  <link href=".\css\normalize-min.css" rel=" stylesheet" type="text/css"/>
  <link href=".\css\registrase.css" rel="stylesheet" type="text/css"/>
</head>

<body>
    
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
        <div class="container-fluid">
          <a class="logo" href="index.html"> <img src =".\img\logo.png"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse" style="margin-left: 45%">
            <ul class="navbar-nav me-auto mb-2 mb-md-0" style="font-family: 'Montserrat';">
         
              <li class="nav-item">
                <a class="nav-link" href="index.html">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href ="#">Catalogo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Planos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Central</a>
              </li>
            
              <li class="nav-item" >
                <a class="nav-link active" aria-current="page" href="#">Login/ Cadastra-se</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <div class="painel2">
      <form action="registrase.php" method="POST">
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
            <div>
              <input type = "date" name="data_nascimento" class="search-date" required>
              <label for="data_nascimento" class="data"> <h5>Data de nascimento:</h5></label>
            </div>
                <button type="submit" name ="submit"class="botaocontinuar">Continuar</button>
                <button class="botaovoltar">Voltar</button>
        </fieldset>
    </form>
    </div>

    </div>
           
    
    <script src=".\js\main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>