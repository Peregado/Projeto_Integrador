<?php 
require_once('../global.php');

$user->verificarLogin();

if($user->getUserRank($_SESSION['user']['id'])['rank'] < 2) {
    header("Location: ".SITE_URL);
    exit;
}
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['editcarro'])) {
  $id = htmlspecialchars($_POST['carId']);
  $modelo = htmlspecialchars($_POST['modelo']);
  $placa = htmlspecialchars($_POST['placa']);
  $km = htmlspecialchars($_POST['km']);
  $cor = htmlspecialchars($_POST['cor']);
  $valor = htmlspecialchars($_POST['valor']);
  $tipo = htmlspecialchars($_POST['tipo']);
  $imagem = htmlspecialchars($_POST['imagem']);
  $emDestaque = isset($_POST['em_destaque']) ? 1 : 0;
  $disponivel = isset($_POST['disponivel']) ? 1 : 0;

  $carros->updateCarro($id, $modelo, $placa, $km, $cor, $valor, $tipo, $imagem, $emDestaque, $disponivel);

  header('Location: ' . $_SERVER['PHP_SELF']);
  exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
  // Retrieve form data
  $modelo = htmlspecialchars($_POST['modelo']);
  $placa = htmlspecialchars($_POST['placa']);
  $km = htmlspecialchars($_POST['km']);
  $cor = htmlspecialchars($_POST['cor']);
  $valor = htmlspecialchars($_POST['valor']);
  $tipo = htmlspecialchars($_POST['tipo']);
  $imagem = htmlspecialchars($_POST['imagem']);
  $emDestaque = isset($_POST['em_destaque']) ? 1 : 0;
  $disponivel = isset($_POST['disponivel']) ? 1 : 0;

  $carros->addCarro($modelo, $placa, $km, $cor, $valor, $tipo, $imagem, $emDestaque, $disponivel);

  header('Location: ' . $_SERVER['PHP_SELF']);
  exit;
}



?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico">

    <title><?php echo SITE_NAME ?> - Gerenciar Frota</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.1/examples/dashboard/dashboard.css" rel="stylesheet">

  
  </head>

  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#"><?php echo SITE_NAME ?> - Administração</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Pesquisar" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="<?php echo SITE_URL ?>kernel/logout.php">Sair</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <?php include_once('includes/sidebar.php'); ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Painel de Controle - <?php echo SITE_NAME ?></h1>
            <div class="btn-toolbar mb-2 mb-md-0">
            
            </div>
          </div>

          <button class="btn btn-primary" data-toggle="modal" data-target="#addCarModal">Adicionar Carro</button> <br><br>
          <table class="table table-bordered" id="table-agenda">
            <!-- tabela contendo id, modelo, placa, imagem, disponivel dos carros --> 
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Modelo</th>
                <th scope="col">Placa</th>
                <th scope="col">Imagem</th>
                <th scope="col">Disponível</th>
                <th scope="col">Ações</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($carros->getAllCarros() as $carro): ?>
              <tr>
                <th scope="row"><?php echo $carro['id'] ?></th>
                <td><?php echo $carro['modelo'] ?></td>
                <td><?php echo $carro['placa'] ?></td>
                <td><img src="<?php echo $carro['imagem'] ?>" width="100px"></td>
                <td><?php echo $carro['disponivel'] ? "<span class='text-success'>Sim</span>" : "<span class='text-danger'>Não</span>" ?></td>
                <td>
                <a data-toggle="modal" data-target="#editCarModal" data-id="<?php echo $carro['id']; ?>" data-modelo="<?php echo $carro['modelo']; ?>" data-placa="<?php echo $carro['placa']; ?>" data-km="<?php echo $carro['km']; ?>" data-cor="<?php echo $carro['cor']; ?>" data-valor="<?php echo $carro['valor']; ?>" data-imagem="<?php echo $carro['imagem']; ?>" data-tipo="<?php echo $carro['tipo']; ?>" data-emdestaque="<?php echo $carro['em_destaque']; ?>" data-disponivel="<?php echo $carro['disponivel']; ?>" class="btn btn-warning">Editar</a>
                  <a href="action.php?type=delete_carro&id=<?php echo $carro['id'] ?>" class="btn btn-danger">Excluir</a>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src=".https://getbootstrap.com/docs/4.1/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.1/dist/Chart.min.js"></script>

    <!-- Modal -->
    <div class="modal fade" id="addCarModal" tabindex="-1" role="dialog" aria-labelledby="addCarModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addCarModalLabel">Adicionar Carro</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <form action="" method="POST">
          <div class="form-group">
            <label for="modelo">Modelo</label>
            <input type="text" class="form-control" id="modelo" name="modelo" required>
          </div>
          <div class="form-group">
            <label for="placa">Placa</label>
            <input type="text" class="form-control" id="placa" name="placa" required>
          </div>
          <div class="form-group">
            <label for="km">Quilometragem</label>
            <input type="number" class="form-control" id="km" name="km" required>
          </div>
          <div class="form-group">
            <label for="cor">Cor</label>
            <input type="text" class="form-control" id="cor" name="cor" required>
          </div>
          <div class="form-group">
            <label for="valor">Valor</label>
            <input type="number" class="form-control" id="valor" name="valor" required>
          </div>
          <div class="form-group">
            <label for="tipo">Tipo</label>
            <select class="form-control" id="tipo" name="tipo" required>
              <?php foreach ($carros->getAllTipos() as $tipo): ?>
              <option value="<?php echo $tipo['id']; ?>"><?php echo $tipo['nome']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <label for="imagem">Imagem</label>
            <input type="text" class="form-control" id="imagem" name="imagem" required>
          </div>
          <div class="form-group">
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="em_destaque" name="em_destaque">
              <label class="form-check-label" for="em_destaque">Em Destaque</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="disponivel" name="disponivel">
              <label class="form-check-label" for="disponivel">Disponível</label>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            <button type="submit" name="submit" class="btn btn-primary">Salvar</button>
          </div>
        </form>
          </div>
       
        </div>
      </div>
    </div>


 <!-- Modal content for editing an existing car -->
 <div class="modal fade" id="editCarModal" tabindex="-1" role="dialog" aria-labelledby="editCarModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editCarModalLabel">Editar Carro - ID: </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Edit car form fields -->
                    <form method="post" action="">
                        <input type="hidden" id="carId" name="carId">
                        <div class="form-group">
                            <label for="modelo-edit">Modelo</label>
                            <input type="text" class="form-control" id="modelo-edit" name="modelo" required>
                        </div>
                        <div class="form-group">
                            <label for="placa-edit">Placa</label>
                            <input type="text" class="form-control" id="placa-edit" name="placa" required>
                        </div>
                        <div class="form-group">
                            <label for="km-edit">Quilometragem</label>
                            <input type="number" class="form-control" id="km-edit" name="km" required>
                        </div>
                        <div class="form-group">
                            <label for="cor-edit">Cor</label>
                            <input type="text" class="form-control" id="cor-edit" name="cor" required>
                        </div>
                        <div class="form-group">
                            <label for="valor-edit">Valor</label>
                            <input type="number" class="form-control" id="valor-edit" name="valor" required>
                        </div>
                        <div class="form-group">
                            <label for="tipo-edit">Tipo</label>
                            <select class="form-control" id="tipo-edit" name="tipo" required>
                                <?php foreach ($carros->getAllTipos() as $tipo): ?>
                                    <option value="<?php echo $tipo['id']; ?>"><?php echo $tipo['nome']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="imagem-edit">Imagem URL</label>
                            <input type="text" class="form-control" id="imagem-edit" name="imagem" required>
                        </div>
                        <div class="form-group">
                            <label for="disponivel-edit">Disponível</label>
                            <input type="checkbox" class="form-control" id="disponivel-edit" name="disponivel">
                        </div>
                        <div class="form-group">
                            <label for="em_destaque-edit">Em Destaque</label>
                            <input type="checkbox" class="form-control" id="em_destaque-edit" name="em_destaque">
                        </div>
                        <button type="submit" name="editcarro" class="btn btn-primary">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>




    <script>
    // Populate edit car modal with selected car data
    $('#editCarModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var carId = button.data('id');
        var modelo = button.data('modelo');
        var placa = button.data('placa');
        var km = button.data('km');
        var cor = button.data('cor');
        var valor = button.data('valor');
        var imagem = button.data('imagem');
        var tipo = button.data('tipo');
        var emDestaque = button.data('emdestaque');
        var disponivel = button.data('disponivel');

        var modal = $(this);
        modal.find('.modal-title').text('Editar Carro - ID: ' + carId);
        modal.find('#carId').val(carId);
        modal.find('#modelo-edit').val(modelo);
        modal.find('#placa-edit').val(placa);
        modal.find('#km-edit').val(km);
        modal.find('#cor-edit').val(cor);
        modal.find('#valor-edit').val(valor);
        modal.find('#imagem-edit').val(imagem);
        modal.find('#tipo-edit').val(tipo);
        modal.find('#em_destaque-edit').prop('checked', emDestaque);
        modal.find('#disponivel-edit').prop('checked', disponivel);
    });
</script>


  </body>
</html>
