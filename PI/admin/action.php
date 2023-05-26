<?php 

require_once('../global.php');

@$type = htmlspecialchars($_GET['type']);

$types = array('delete_user', 'delete_carro', 'delete_locacao');

if(in_array($type, $types)) {

    $id = htmlspecialchars($_GET['id']);

    switch($type) {

        case 'delete_user':
            $id = htmlspecialchars($_GET['id']);
            $sql = $pdo->prepare("DELETE FROM usuarios WHERE id = :id");
            $sql->bindValue(":id", $id);
            $sql->execute();
            header("Location: usuarios.php");
            break;

        case 'delete_carro':
            $id = htmlspecialchars($_GET['id']);
            $sql = $pdo->prepare("DELETE FROM carros WHERE id = :id");
            $sql->bindValue(":id", $id);
            $sql->execute();
            header("Location: frota.php");
            break;

        case 'delete_locacao':
            $id = htmlspecialchars($_GET['id']);
            $sql = $pdo->prepare("DELETE FROM locacoes WHERE id = :id");
            $sql->bindValue(":id", $id);
            $sql->execute();
            header("Location: locacoes.php");
            break;

    }

} else {
    header("Location: index.php");
}

?>