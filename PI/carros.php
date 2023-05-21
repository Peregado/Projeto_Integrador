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
    <h1 style = "text-align:center;"> SUV </h1>

    <div class="container text-center">
  <div class="row row-cols-2">
    <div class="col"><img src = "https://www.webmotors.com.br/imagens/prod/346906/JEEP_RENEGADE_1.8_16V_FLEX_4P_AUTOMATICO_34690617132385531.png?s=fill&w=130&h=97&q=70&t=true) "></div>
    <div class="col"><h1>Jeep Renegade</h1>
  <ul>
    <li>Seguro de terceiros</li>
    <li>Assitência 24H</li>
  </ul>
    </div>
    <div class="col">Column</div>
    <div class="col">Column</div>
  </div>
  </div>
           
    
    <script src=".\js\main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!-- jquery script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </body>

</html>