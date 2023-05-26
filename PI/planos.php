<?php
require_once('global.php');
$user->verificarLogin();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title><?php echo SITE_NAME ?> - Planos</title>
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
      <div class="col">
        <div class="card bg-warning">
          <div class="card-header text-center">
            <h2 class="card-title">PREMIUM</h2>
            <p class="card-subtitle"><i class="fas fa-dollar-sign"></i> <span>R$ 25,00</span></p>
          </div>
          <div class="card-body">
            <ul class="list-group">
              <li class="list-group-item"><i class="fas fa-times-circle"></i> Não precisar entregar com o tanque cheio</li>
              <li class="list-group-item"><i class="fas fa-times-circle"></i> Higienização inclusa</li>
              <li class="list-group-item"><i class="fas fa-check-circle"></i> Seguro completo</li>
              <li class="list-group-item"><i class="fas fa-times-circle"></i> Assistência 24 horas</li>
              <li class="list-group-item"><i class="fas fa-times-circle"></i> Entrega e coleta VIP</li>
              <li class="list-group-item"><i class="fas fa-check-circle"></i> Acesso a recursos exclusivos</li>
              <li class="list-group-item"><i class="fas fa-times-circle"></i> Suporte prioritário</li>
            </ul>
            <div class="text-center mt-4">
              <button class="btn btn-primary"><a href="#" class="text-white">Adquirir!</a></button>
            </div>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card bg-warning">
          <div class="card-header text-center">
            <h2 class="card-title">VIP</h2>
            <p class="card-subtitle"><i class="fas fa-dollar-sign"></i> <span>R$ 50,00</span></p>
          </div>
          <div class="card-body">
            <ul class="list-group">
              <li class="list-group-item"><i class="fas fa-check-circle"></i> Não precisar entregar com o tanque cheio</li>
              <li class="list-group-item"><i class="fas fa-check-circle"></i> Higienização inclusa</li>
              <li class="list-group-item"><i class="fas fa-check-circle"></i> Seguro completo</li>
              <li class="list-group-item"><i class="fas fa-check-circle"></i> Assistência 24 horas</li>
              <li class="list-group-item"><i class="fas fa-check-circle"></i> Entrega e coleta VIP</li>
              <li class="list-group-item"><i class="fas fa-check-circle"></i> Acesso a recursos exclusivos</li>
              <li class="list-group-item"><i class="fas fa-check-circle"></i> Suporte prioritário</li>
            </ul>
            <div class="text-center mt-4">
              <button class="btn btn-primary"><a href="#" class="text-white">Adquirir!</a></button>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>
