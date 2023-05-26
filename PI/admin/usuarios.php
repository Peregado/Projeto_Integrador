<?php 
require_once('../global.php');

$user->verificarLogin();

if($user->getUserRank($_SESSION['user']['id'])['rank'] < 2) {
    header("Location: ".SITE_URL);
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

    <title><?php echo SITE_NAME ?> - Gerenciar Usuários</title>

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


          <table class="table table-bordered" id="table-agenda">
            <!-- tabela contendo ID, nome, email e cpf dos usuários -->
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome Completo</th>
                <th scope="col">Email</th>
                <th scope="col">Permissão</th>
                <th scope="col">CPF</th>
                <th scope="col">Ações</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              $usuarios = $user->getAllUsers();
              foreach($usuarios as $usuario) {
              ?>
              <tr>
                <th scope="row"><?php echo $usuario['id'] ?></th>
                <td><?php echo $usuario['nome'] ?></td>
                <td><?php echo $usuario['email'] ?></td>
                <td><?php echo $usuario['rank'] > 1 ? "Administrador" : "Usuário"; ?></td>
                <td><?php echo $usuario['cpf'] ?></td>
                <td>
                <a href="edit.php?type=edit_user&id=<?php echo $usuario['id'] ?>" class="btn btn-warning">Editar</a>
                <a href="action.php?type=delete_user&id=<?php echo $usuario['id'] ?>" class="btn btn-danger">Excluir</a>
                
            </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>

        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
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
    


  </body>
</html>
