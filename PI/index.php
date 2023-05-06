<?php 

require_once('global.php');

$user->verificarLogin();

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
  <!-- font awesome --> 
  <script src="https://kit.fontawesome.com/6e9c638913.js" crossorigin="anonymous"></script>
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
                <a class="nav-link" href="#">Inicio</a>
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
              <li class = "nav-item">
                <!-- icon person --> 
               
                <a class="nav-link active"><i class="fas fa-user"></i> <?php echo $_SESSION['user']['nome']; ?> </a>
              </li>

            </ul>
          </div>
        </div>
      </nav>
    
        <div  class = "painel"> 
            <div class = "aluga"><h1><br><b>Alugue seu carro!</b></br></h1></div>
            <div class="localidade"><br><h4>Localidade:</h4></br></div>
            <div class="carro"><img src = ".\img\hero.png"></div>             
            <div class="search-box">
                <input type="texto" class="search-text" placeholder="Ex: São Paulo">
                <input type="datetime-local" class="search-text-data" placeholder="Data">
                <input type="datetime-local" class="search-text-data2" placeholder="Data">
                <div class = "data"><h4>Data de Retirada</h4></div>
                <div class = "data2"><h4>Data de Entrega</h4></div>
              
            </div>
        </div>

        <div class="sobre">
            <div class="sobre2"><p><h1><br>SOBRE NÓS</h1></p></div>
            <p>Bem-vindo à nossa locadora de veículos! Nós somos uma empresa especializada em oferecer serviços de locação de veículos para pessoas e empresas. 
                Com uma ampla  de veículos disponíveis, desde carros populares até modelos mais sofisticados, nossos clientes podem escolher o veículo que melhor atende às suas 
                necessidades e preferências.</p>
                <p>A nossa frota de carros é composta por veículos modernos e bem cuidados, que são regularmente revisados e mantidos para garantir a segurança e o conforto dos nossos clientes. Temos uma ampla 
                  variedade de modelos e categorias, desde carros compactos até veículos de luxo, para atender a todas as necessidades e orçamentos.</p>
                <img class="carrobn" src=".\img\carro.jpg" alt="carro">
                
        </div>
        
    
    <script src=".\js\main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>