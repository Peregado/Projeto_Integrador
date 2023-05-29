<?php 
require_once('../global.php');

$user->verificarLogin();

if($user->getUserRank($_SESSION['user']['id'])['rank'] < 2) {
    header("Location: ".SITE_URL);
    exit;
}


if($_SERVER['REQUEST_METHOD'] == 'POST') {
   $user->updateUsuario(htmlspecialchars($_POST['userId']), htmlspecialchars($_POST['nome']), htmlspecialchars($_POST['email']), htmlspecialchars($_POST['rank']), htmlspecialchars($_POST['data_nasc']), htmlspecialchars($_POST['cpf']), htmlspecialchars($_POST['tel']), htmlspecialchars($_POST['endereco']));
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
                  <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#editUserModal"
                     data-id="<?php echo $usuario['id']; ?>"
                     data-nome="<?php echo $usuario['nome']; ?>"
                     data-email="<?php echo $usuario['email']; ?>"
                     data-senha="<?php echo $usuario['senha']; ?>"
                     data-rank="<?php echo $usuario['rank']; ?>"
                     data-data-nasc="<?php echo $usuario['data_nasc']; ?>"
                     data-cpf="<?php echo $usuario['cpf']; ?>"
                     data-tel="<?php echo $usuario['tel']; ?>"
                     data-endereco="<?php echo $usuario['endereco']; ?>"
                  >Editar</a>
                  <a href="action.php?type=delete_user&id=<?php echo $usuario['id'] ?>" class="btn btn-danger">Excluir</a>
                
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>

        </main>
      </div>
    </div>

    <!-- Edit User Modal -->
    <div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="editUserModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editUserModalLabel">Editar Usuário</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="editUserForm" action="" method="POST">
              <input type="hidden" name="userId" id="userId">
              <div class="form-group">
                <label for="nome">Nome Completo:</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
              </div>
              <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>
              <div class="form-group">
                <label for="rank">Permissão:</label>
                <select class="form-control" id="rank" name="rank" required>
                  <option value="1">Usuário</option>
                  <option value="2">Administrador</option>
                </select>
              </div>
              <div class="form-group">
                <label for="dataNasc">Data de Nascimento:</label>
                <input type="date" class="form-control" id="dataNasc" name="data_nasc" required>
              </div>
              <div class="form-group">
                <label for="cpf">CPF:</label>
                <input type="text" class="form-control" id="cpf" name="cpf" required>
              </div>
              <div class="form-group">
                <label for="tel">Telefone:</label>
                <input type="text" class="form-control" id="tel" name="tel" required>
              </div>
              <div class="form-group">
                <label for="endereco">Endereço:</label>
                <textarea class="form-control" id="endereco" name="endereco" rows="3" required></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Salvar Alterações</button>
            </form>
          </div>
        </div>
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

    <!-- Edit User Script -->
    <script>
      $('#editUserModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var userId = button.data('id')
        var nome = button.data('nome')
        var email = button.data('email')
        var rank = button.data('rank')
        var dataNasc = button.data('data-nasc')
        var cpf = button.data('cpf')
        var tel = button.data('tel')
        var endereco = button.data('endereco')

        var modal = $(this)
        modal.find('.modal-title').text('Editar Usuário - ID: ' + userId)
        modal.find('#userId').val(userId)
        modal.find('#nome').val(nome)
        modal.find('#email').val(email)
        modal.find('#rank').val(rank)
        modal.find('#dataNasc').val(dataNasc)
        modal.find('#cpf').val(cpf)
        modal.find('#tel').val(tel)
        modal.find('#endereco').val(endereco)
      })
    </script>

    <!-- Graphs -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.1/dist/Chart.min.js"></script>
  </body>
</html>
