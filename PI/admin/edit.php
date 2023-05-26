<?php
require_once('../global.php');

$user->verificarLogin();

if ($user->getUserRank($_SESSION['user']['id'])['rank'] < 2) {
    header("Location: " . SITE_URL);
    exit;
}

@$type = htmlspecialchars($_GET['type']);
@$id = htmlspecialchars($_GET['id']);

if (!$type || !$id) {
    header("Location: " . SITE_URL);
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
                <?php if ($type == 'edit_carro'):
                    $carroInfo = $carros->getCarroById($id);
                ?>

                    <div class="card shadow-lg">
                        <div class="card-header">
                            <h2>Editar Carro</h2>
                        </div>
                        <div class="card-body">
                            <form action="edit_carro.php" method="post">
                                <div class="form-group">
                                    <label for="modelo">Modelo</label>
                                    <input type="text" class="form-control" id="modelo" name="modelo" value="<?php echo $carroInfo['modelo']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="placa">Placa</label>
                                    <input type="text" class="form-control" id="placa" name="placa" value="<?php echo $carroInfo['placa']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="km">Kilometragem</label>
                                    <input type="text" class="form-control" id="km" name="km" value="<?php echo $carroInfo['km']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="cor">Cor</label>
                                    <input type="text" class="form-control" id="cor" name="cor" value="<?php echo $carroInfo['cor']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="valor">Valor</label>
                                    <input type="text" class="form-control" id="valor" name="valor" value="<?php echo $carroInfo['valor']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="tipo">Tipo</label>
                                    <?php
                                    $sql = $pdo->prepare("SELECT * FROM carros_tipos");
                                    $sql->execute();
                                    $carros_tipos = $sql->fetchAll();
                                    ?>
                                    <select class="form-control" id="tipo" name="tipo">
                                        <?php foreach ($carros_tipos as $tipo) : ?>
                                            <option value="<?php echo $tipo['id']; ?>" <?php echo ($carroInfo['tipo'] == $tipo['id']) ? 'selected' : ''; ?>><?php echo $tipo['nome']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="imagem">Imagem</label>
                                    <input type="text" class="form-control" id="imagem" name="imagem" value="<?php echo $carroInfo['imagem']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="em_destaque">Em Destaque</label>
                                    <input type="checkbox" class="form-control" id="em_destaque" name="em_destaque" <?php echo ($carroInfo['em_destaque'] == 1) ? 'checked' : ''; ?>>
                                </div>
                                <div class="form-group">
                                    <label for="disponivel">Disponível</label>
                                    <input type="checkbox" class="form-control" id="disponivel" name="disponivel" <?php echo ($carroInfo['disponivel'] == 1) ? 'checked' : ''; ?>>
                                </div>
                                <button type="submit" class="btn btn-primary">Salvar</button>
                            </form>
                        </div>
                    </div>

                <?php elseif ($type == 'edit_user'):
                    $userInfo = $user->getUsuarioById($id);
                ?>

                    <div class="card shadow-lg">
                        <div class="card-header">
                            <h2>Editar Usuário</h2>
                        </div>
                        <div class="card-body">
                            <form action="edit_user.php" method="post">
                                <div class="form-group">
                                    <label for="nome">Nome</label>
                                    <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $userInfo['nome']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $userInfo['email']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="rank">Rank</label>
                                    <select class="form-control" id="rank" name="rank">
                                        <option value="2" <?php echo ($userInfo['rank'] == 2) ? 'selected' : ''; ?>>Administrador</option>
                                        <option value="1" <?php echo ($userInfo['rank'] == 1) ? 'selected' : ''; ?>>Usuário</option>
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label for="data_nasc">Data de Nascimento</label>
                                    <input type="date" class="form-control" id="data_nasc" name="data_nasc" value="<?php echo $userInfo['data_nasc']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="cpf">CPF</label>
                                    <input type="text" class="form-control" id="cpf" name="cpf" value="<?php echo $userInfo['cpf']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="tel">Telefone</label>
                                    <input type="text" class="form-control" id="tel" name="tel" value="<?php echo $userInfo['tel']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="endereco">Endereço</label>
                                    <input type="text" class="form-control" id="endereco" name="endereco" value="<?php echo $userInfo['endereco']; ?>">
                                </div>
                                <button type="submit" class="btn btn-primary">Salvar</button>
                            </form>
                        </div>
                    </div>

                <?php elseif ($type == 'edit_locacao'):
                   
                   $sql = $pdo->prepare("SELECT * FROM locacoes WHERE id = :id");
                     $sql->bindValue(":id", $id);
                        $sql->execute();
                        $locacaoInfo = $sql->fetch();
                        

                ?>

                    <div class="card shadow-lg">
                        <div class="card-header">
                            <h2>Editar Locação</h2>
                        </div>
                        <div class="card-body">
                            <form action="edit_locacao.php" method="post">
                                <div class="form-group">
                                    <label for="id_usuario">ID do Usuário</label>
                                    <input type="text" class="form-control" id="id_usuario" name="id_usuario" value="<?php echo $locacaoInfo['id_usuario']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="id_carro">ID do Carro</label>
                                    <input type="text" class="form-control" id="id_carro" name="id_carro" value="<?php echo $locacaoInfo['id_carro']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="dt_locacao">Data de Locação</label>
                                    <input type="datetime-local" class="form-control" id="dt_locacao" name="dt_locacao" value="<?php echo date('Y-m-d H:i:s', strtotime($locacaoInfo['dt_locacao'])); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="dt_final">Data Final</label>
                                    <input type="datetime-local" class="form-control" id="dt_final" name="dt_final" value="<?php echo date('Y-m-d H:i:s', strtotime($locacaoInfo['dt_final'])); ?>">
                                </div>
                                <button type="submit" class="btn btn-primary">Salvar</button>
                            </form>
                        </div>
                    </div>

                <?php endif; ?>
            </main>
        </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4FF9aG2Lg1aS+rZw6J0n" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>

</body>

</html>
