<?php 

require_once('../global.php');

$email = htmlspecialchars($_POST['email']);
$senha = htmlspecialchars($_POST['senha']);
$senha = md5($senha);

$sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email AND senha = :senha");
$sql->bindValue(":email", $email);
$sql->bindValue(":senha", $senha);
$sql->execute();

if($sql->rowCount() > 0){
    $userInfo = $sql->fetch(PDO::FETCH_ASSOC);
    
    $userInfo = array(
        'id' => $userInfo['id'],
        'nome' => $userInfo['nome'],
        'email' => $userInfo['email'],
        'data_nasc' => $userInfo['data_nasc'],
        'cpf' => $userInfo['cpf']
    );

    $_SESSION['user'] = $userInfo;
    header("Location: ../index.php");

}

else{
    header("Location: ../login.php");
    $_SESSION['error'] = "E-mail e/ou senha incorretos";
    exit;
}

    


