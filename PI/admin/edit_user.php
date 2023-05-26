<?php 

require_once('../global.php');

$nome = htmlspecialchars($_POST['nome']);
$email = htmlspecialchars($_POST['email']);
$rank = htmlspecialchars($_POST['rank']);
$data_nasc = htmlspecialchars($_POST['data_nasc']);
$cpf = htmlspecialchars($_POST['cpf']);
$tel = htmlspecialchars($_POST['tel']);
$endereco = htmlspecialchars($_POST['endereco']);

$sql = $pdo->prepare("UPDATE usuarios SET nome = :nome, email = :email, rank = :rank, data_nasc = :data_nasc, cpf = :cpf, tel = :tel, endereco = :endereco WHERE id = :id");
$sql->bindValue(":nome", $nome);
$sql->bindValue(":email", $email);
$sql->bindValue(":rank", $rank);
$sql->bindValue(":data_nasc", $data_nasc);
$sql->bindValue(":cpf", $cpf);
$sql->bindValue(":tel", $tel);
$sql->bindValue(":endereco", $endereco);
$sql->bindValue(":id", $_SESSION['user']['id']);
$sql->execute();

$_SESSION['user']['nome'] = $nome;

header("Location: usuarios.php");