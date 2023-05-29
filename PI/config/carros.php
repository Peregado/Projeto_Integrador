<?php

require_once('config.php');


class Carros {

    public function getCarrosDestaque() {
        global $pdo;

        $sql = $pdo->prepare("SELECT * FROM carros WHERE em_destaque = 1 AND disponivel = 1");
        $sql->execute();

        if($sql->rowCount() > 0) {
            return $sql->fetchAll();
        } else {
            return array();
        }


    }

    public function getAllCarros() {

        global $pdo;

        $sql = $pdo->prepare("SELECT * FROM carros");
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

    public function getAllTipos() {

        global $pdo;

        $sql = $pdo->prepare("SELECT * FROM carros_tipos");
        $sql->execute();

        if($sql->rowCount() > 0) {
            return $sql->fetchAll();
        } else {
            return array();
        }

    }

    public function getCarroById($id) {

        global $pdo;

        $sql = $pdo->prepare("SELECT * FROM carros WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();

        if($sql->rowCount() > 0) {
            return $sql->fetch();
        } else {
            return array();
        }
    }
    
    public function addCarro($modelo, $placa, $km, $cor, $valor, $tipo, $imagem, $em_destaque, $disponivel) {

        global $pdo;

        $sql = $pdo->prepare("INSERT INTO carros (modelo, placa, km, cor, valor, tipo, imagem, em_destaque, disponivel) VALUES (:modelo, :placa, :km, :cor, :valor, :tipo, :imagem, :em_destaque, :disponivel)");
        $sql->bindValue(":modelo", $modelo);
        $sql->bindValue(":placa", $placa);
        $sql->bindValue(":km", $km);
        $sql->bindValue(":cor", $cor);
        $sql->bindValue(":valor", $valor);
        $sql->bindValue(":tipo", $tipo);
        $sql->bindValue(":imagem", $imagem);
        $sql->bindValue(":em_destaque", $em_destaque);
        $sql->bindValue(":disponivel", $disponivel);
        $sql->execute();

    }



}