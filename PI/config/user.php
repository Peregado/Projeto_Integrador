<?php
require_once('config.php');

class User {


    public function verificarLogin() {

        if(!isset($_SESSION['user'])) {
            header("Location: login.php");
            exit;
        }
    }






}
