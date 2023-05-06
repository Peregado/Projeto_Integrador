<?php
    require_once('../global.php');
    
 

        $nome = htmlspecialchars($_POST['nome']);
        $email = htmlspecialchars($_POST['email']);
        $senha = htmlspecialchars($_POST['senha']);
        $data = htmlspecialchars($_POST['data_nascimento']);
        $senha = md5($senha);

        $sql = $pdo->prepare("INSERT INTO usuarios (nome, email, senha, data_nasc) VALUES (:nome, :email, :senha, :data_nascimento)");
        $sql->bindValue(":nome", $nome);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":senha", $senha);
        $sql->bindValue(":data_nascimento", $data);
        $sql->execute();


        
        header("Location: ../index.php");


?>