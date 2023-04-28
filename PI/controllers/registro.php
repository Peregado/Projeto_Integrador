<?php
    session_start();
    
    if(isset($_POST['submit']))
    {
        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $data = $_POST['data_nascimento'];
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
        $query = "INSERT INTO usurarios(nome,email,senha,data_nasc) 
        VALUES ('$nome','$email','$senhaHash','$data')";
        
        $result = mysqli_query($conexao, $query);
        
        $_SESSION['nome'] = $nome;
        
        header("Location: index.php");
        exit();
    }
?>