<?php
require_once('global.php');
$user->verificarLogin();
$destaqueCarros = $carros->getCarrosDestaque();
$getCarros = $carros->getAllCarros();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Senacar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="./css/style.css" rel="stylesheet" type="text/css">
  <link href="./css/normalize-min.css" rel="stylesheet" type="text/css">
  <!-- font awesome -->
  <script src="https://kit.fontawesome.com/6e9c638913.js" crossorigin="anonymous"></script>
  <style>
    .card {
      height: 100%;
    }
    .card-img-top img {
      height: 200px;
    }

    img.card-img-top {
      transition: transform 0.3s ease-in-out;
    }

    img.card-img-top:hover {
      overflow: hidden;
      transform: scale(1.1);
    }
  </style>
</head>

<body>

  <?php require_once('config/header.php'); ?>

  <div class="container">
    <div class="row">
      <h4 class="text-center">Carros em Destaque</h4>

      <?php foreach ($destaqueCarros as $carro) : ?>
        <div class="col-md-4">
          <div class="card shadow-lg">
            <img src="<?php echo $carro['imagem']; ?>" class="card-img-top" alt="<?php echo $carro['modelo']; ?>">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title"><?php echo $carro['modelo']; ?></h5>
              <p class="card-text" style="font-size: 15px;">
                <strong>Tipo</strong>: <?php echo $carroTipo = $carros->getCarroTipo($carro['tipo'])['nome']; ?> |
                <strong>Cor</strong>: <?php echo $carro['cor']; ?> |
                <strong>Valor</strong>: R$<?php echo $carro['valor']; ?>/d
              </p>
              <p class="card-text">Este carro está atualmente em promoção no <?php echo SITE_NAME ?>.</p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>

    </div>
    <br>
    <hr>
      <div class="row">
      <h4 class="text-center">Nossa Frota</h4>

      <?php foreach ($getCarros as $carro) : ?>
        <div class="col-md-4 mt-3">
          <div class="card shadow">
            <img src="<?php echo $carro['imagem']; ?>" class="card-img-top" alt="<?php echo $carro['modelo']; ?>">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title"><?php echo $carro['modelo']; ?></h5>
              <p class="card-text" style="font-size: 15px;">
                <strong>Tipo</strong>: <?php echo $carroTipo = $carros->getCarroTipo($carro['tipo'])['nome']; ?> |
                <strong>Cor</strong>: <?php echo $carro['cor']; ?> |
                <strong>Valor</strong>: R$<?php echo $carro['valor']; ?>/d
              </p>
              <p class="card-text">Este carro está <?php echo $carro['disponivel'] ? "<span class='text-success'>DISPONÍVEL</span>" : "<span class='text-danger'>NÃO DISPONÍVEL</span>"; ?> no <?php echo SITE_NAME ?>.</p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>

      </div>

      <hr>

      <!-- footer --> 
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>
