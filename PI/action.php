<?php
require_once('global.php');

$carro_id = $_SESSION['locacao']['carro_id'];
$dtLocacao = htmlspecialchars($_POST['dt_locacao']);
$dtDevolucao = htmlspecialchars($_POST['dt_final']);

$dtLocacao = str_replace("T", " ", $dtLocacao);
$dtDevolucao = str_replace("T", " ", $dtDevolucao);


$sqlCarros = $pdo->prepare("SELECT * FROM carros WHERE id = :id");
$sqlCarros->bindValue(":id", $carro_id);
$sqlCarros->execute();

// verificar se o carro existe
if($sqlCarros->rowCount() <= 0) {
    header("Location: index.php");
    exit;
}

if($dtLocacao == "" || $dtDevolucao == "") {
    header("Location: index.php");
    exit;
}

$carro = $sqlCarros->fetch();

$dtLocacao = new DateTime($dtLocacao);
$dtDevolucao = new DateTime($dtDevolucao);

// update carros set disponivel = 0 where id = :id
$sqlUpdate = $pdo->prepare("UPDATE carros SET disponivel = 0 WHERE id = :id");
$sqlUpdate->bindValue(":id", $carro_id);
$sqlUpdate->execute();


// inserir locacao
$sqlLocacao = $pdo->prepare("INSERT INTO locacoes (id_usuario, id_carro, dt_locacao, dt_final) VALUES (:id_usuario, :carro_id, :dt_locacao, :dt_final)");
$sqlLocacao->bindValue(":id_usuario", $_SESSION['user']['id']);
$sqlLocacao->bindValue(":carro_id", $carro_id);
$sqlLocacao->bindValue(":dt_locacao", $dtLocacao->format("Y-m-d H:i:s"));
$sqlLocacao->bindValue(":dt_final", $dtDevolucao->format("Y-m-d H:i:s"));
$sqlLocacao->execute();

header("Location: index.php");
