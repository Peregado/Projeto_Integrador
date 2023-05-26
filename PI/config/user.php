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


}
