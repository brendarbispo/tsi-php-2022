<?php
require_once '../bancoDeDados/conecta.php';

$email = trim($_POST['usuario']);
$senha = $_POST['senha'];

$stmt = $bd->prepare(" SELECT
                            nome, senha
                        FROM
                            usuarios
                        WHERE 
                            email = :email");

$stmt->bindParam(':email', $email);

$stmt->execute();

$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

$autenticou = false;

if(isset($usuario['nome'])){// se existir o usuario

    //Comparar a senha p ver se esta correta
    if(password_verify($senha, $usuario['senha'])){
        session_start();
        $_SESSION['id'] = $email;
       // $autenticou = true;
        //echo 'Senha valida!';
        header('Location:/ tsi-php-2202/menu');
    } else {
        echo 'Senha invalida :(';
    }
}

include 'index.php';

