<?php

require_once('../global.php');

$modelo = htmlspecialchars($_POST['modelo']);
$placa = htmlspecialchars($_POST['placa']);
$km = htmlspecialchars($_POST['km']);
$cor = htmlspecialchars($_POST['cor']);
$valor = htmlspecialchars($_POST['valor']);
$tipo = htmlspecialchars($_POST['tipo']);
$imagem = htmlspecialchars($_POST['imagem']);


$sql = $pdo->prepare("UPDATE carros SET modelo = :modelo, placa = :placa, km = :km, cor = :cor, valor = :valor, tipo = :tipo, imagem = :imagem, em_destaque = :em_destaque, disponivel = :disponivel WHERE id = :id");
$sql->bindValue(":modelo", $modelo);
$sql->bindValue(":placa", $placa);
$sql->bindValue(":km", $km);
$sql->bindValue(":cor", $cor);
$sql->bindValue(":valor", $valor);
$sql->bindValue(":tipo", $tipo);
$sql->bindValue(":imagem", $imagem);
$sql->bindValue(":em_destaque", $em_destaque);
$sql->bindValue(":disponivel", $disponivel);
$sql->bindValue(":id", $id);
$sql->execute();

header("Location: frota.php");
?>
