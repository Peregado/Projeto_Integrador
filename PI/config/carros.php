<?php

require_once('config.php');


class Carros {

    public function getCarrosDestaque() {
        global $pdo;

        $sql = $pdo->prepare("SELECT * FROM carros WHERE em_destaque = 1");
        $sql->execute();

        if($sql->rowCount() > 0) {
            return $sql->fetchAll();
        } else {
            return array();
        }


    }


    public function getCarroTipo($id) {

        global $pdo;

        $sql = $pdo->prepare("SELECT * FROM carros_tipos WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();

        if($sql->rowCount() > 0) {
            return $sql->fetch();
        } else {
            return array();
        }


    }



}