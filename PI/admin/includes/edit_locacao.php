<?php

require_once('../global.php');

$id_usuario = htmlspecialchars($_POST['id_usuario']);
$id_carro = htmlspecialchars($_POST['id_carro']);
$data_inicio = htmlspecialchars($_POST['dt_locacao']);
$data_fim = htmlspecialchars($_POST['dt_final']);


$sql = $pdo->prepare("UPDATE locacoes SET id_usuario = :id_usuario, id_carro = :id_carro, dt_locacao = :dt_locacao, dt_final = :dt_final WHERE id = :id");
$sql->bindValue(":id_usuario", $id_usuario);
$sql->bindValue(":id_carro", $id_carro);
$sql->bindValue(":dt_locacao", $dt_locacao);
$sql->bindValue(":dt_final", $dt_final);
$sql->bindValue(":id", $id);
$sql->execute();

header("Location: locacoes.php");
?>
