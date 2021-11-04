<?php
session_start();
include('conexao.php');
try {
        if(empty($_POST['usuario']) || empty($_POST['senha'])) {
        header('Location: createUser_page.php');
        exit();
    }

    $usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
    $senha = md5(mysqli_real_escape_string($conexao, $_POST['senha']));

    $result = mysqli_query($conexao, "INSERT INTO usuario (usuario, senha) values ('$usuario', '$senha')");

    if($result) {
        echo "Success!";
        $_SESSION['create_user'] = true;
        header('Location: createUser_page.php');
        exit();
    } else {
        $_SESSION['create_user'] = false;
        header('Location: createUser_page.php');
        exit();
    }
} catch (Exception $e) {
    $_SESSION['create_user'] = false;
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}