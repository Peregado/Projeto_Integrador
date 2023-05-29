<?php
require_once('config.php');

class User {


    public function verificarLogin() {

        if(!isset($_SESSION['user'])) {
            header("Location: login.php");
            exit;
        }
    }


    public function getUserRank($id) {

        global $pdo;

        $sql = $pdo->prepare("SELECT rank FROM usuarios WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();

        if($sql->rowCount() > 0) {
            return $sql->fetch();
        } else {
            return array();
        }
    }

    public function getAllUsers() {

        global $pdo;

        $sql = $pdo->prepare("SELECT * FROM usuarios");
        $sql->execute();

        if($sql->rowCount() > 0) {
            return $sql->fetchAll();
        } else {
            return array();
        }
    }
    
    public function getUsuarioById($id) {

        global $pdo;

        $sql = $pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();

        if($sql->rowCount() > 0) {
            return $sql->fetch();
        } else {
            return array();
        }
    }

    public function updateUsuario($id, $nome, $email, $rank, $data_nasc, $cpf, $tel, $endereco) {

        global $pdo;

        $sql = $pdo->prepare("UPDATE usuarios SET nome = :nome, email = :email, rank = :rank, data_nasc = :data_nasc, cpf = :cpf, tel = :tel, endereco = :endereco WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->bindValue(":nome", $nome);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":rank", $rank);
        $sql->bindValue(":data_nasc", $data_nasc);
        $sql->bindValue(":cpf", $cpf);
        $sql->bindValue(":tel", $tel);
        $sql->bindValue(":endereco", $endereco);
        $sql->execute();

        if($sql->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }


}
