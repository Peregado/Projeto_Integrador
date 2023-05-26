<?php
require_once('./global.php');

$carro_id = $_GET['carro_id'];

$carroInfo = $carros->getCarroById($carro_id);

$dtLocacao = new DateTime($_SESSION['locacao']['informacoes']['dt_locacao']);
$dtDevolucao = new DateTime($_SESSION['locacao']['informacoes']['dt_final']);
$interval = $dtLocacao->diff($dtDevolucao);
$dias = $interval->format('%a');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title><?php echo SITE_NAME ?> - Alugar <?php echo $carroInfo['modelo']; ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet" type="text/css">
  <link href="../css/normalize-min.css" rel="stylesheet" type="text/css">
  <!-- font awesome -->
  <script src="https://kit.fontawesome.com/6e9c638913.js" crossorigin="anonymous"></script>
  <style>
    .vertical-align-center {
      display: flex;
      align-items: center;
    }
  </style>
</head>

<body>

  <?php require_once('config/header.php'); ?>

  <div class="container">
    <div class="row">
      <h4 class="text-center">Confirmação de Locação</h4>
        <div class="col-md-12">
            <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4  vertical-align-center">
                <img src="<?php echo $carroInfo['imagem']; ?>" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title text-center"><?php echo $carroInfo['modelo']; ?> | <code style="color: #07aadb;"><?php echo $carroInfo['placa']; ?></code></h5>
                    <!-- form with disabled items showing user info -->
                    <form action="finalizar.php" method="post">
                        <div class="mb-3">
                            <label for="cidade" class="form-label">Cidade/Localização</label>
                            <input type="text" class="form-control" id="cidade" name="cidade" value="<?php echo $_SESSION['locacao']['informacoes']['cidade']; ?>" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="dt_locacao" class="form-label">Data de Locação</label>
                            <input type="datetime-local" class="form-control" id="dt_locacao" name="dt_locacao" value="<?php echo $_SESSION['locacao']['informacoes']['dt_locacao']; ?>" onchange="mudarPreco()">
                        </div>
                        <div class="mb-3">
                            <label for="dt_final" class="form-label">Data de Devolução</label>
                            <input type="datetime-local" class="form-control" id="dt_final" name="dt_final" value="<?php echo $_SESSION['locacao']['informacoes']['dt_final']; ?>" onchange="mudarPreco()">
                        </div>
                        <div class="mb-3">
                            <label for="valor" class="form-label">Valor/dia</label>
                            <input type="text" class="form-control" id="valor" name="valor" value="R$<?php echo $carroInfo['valor']; ?>" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="valor" class="form-label">Valor Total</label>
                            <input type="text" class="form-control" id="valorFinal" name="valor" value="R$<?php echo $carroInfo['valor'] * $dias ?>" disabled>
                        </div>
                    </form>
                    <small class="text-muted">Ao alugar você concorda com os Termos e Condições do <?php echo SITE_NAME ?></small>.</p>
                    <a href="action.php?type=finalizar<?php echo $carro_id; ?>" class="btn btn-primary col-md-12">Confirmar Locação</a>
                </div>
                </div>
            </div>
        </div>


    </div>
    <br>
  
        <hr>
      <!-- footer --> 
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script>

function mudarPreco()   {   
    var dtLocacao = new Date(document.getElementById("dt_locacao").value);
    var dtDevolucao = new Date(document.getElementById("dt_final").value);
    var diferenca = dtDevolucao.getTime() - dtLocacao.getTime();
    var dias = Math.ceil(diferenca / (1000 * 3600 * 24));
    var valor = <?php echo $carroInfo['valor']; ?>;
    var valorTotal = dias * valor;
    document.getElementById("valorFinal").value = "R$" + valorTotal;
}

    </script>

</body>



</html>
