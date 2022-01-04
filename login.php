<?php
session_start();
include('conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
    header('Location: index.php');
    exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);    
$senha = (mysqli_real_escape_string($conexao, $_POST['senha']));

$query = "select id, name from students where name = '{$usuario}' and password = '{$senha}'";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);


if($row >= 1) {
  $_SESSION['usuario'] = $usuario;         //above
  $_SESSION['username'] = $_POST['usuario'];   //below   
//header('Location: home.php');
switch ($usuario) {
  case 'Guilherme':
      header('Location: gui.php');
      
    break;
  case 'Allan':
      header('Location: home.php');
      
    break;
  case "Tamires":
      header('Location: home.php');
      
    break;
  case "Jessica":
      header('Location: jess.php');
      
    break;
  case "Tadeu":
      header('Location: tadeu.php');
      
    break;
  case "Kainan":
      header('Location: home.php');
      
    break;
  case "Romulo":
    header('Location: home.php');
    
    break;
  case "Cesar":
      header('Location: home.php');
      
    break;
  case "Edicarlos":
      header('Location: home.php');
      
    break;
  case "Adilson":
      header('Location: home.php');
      
    break;
  case "Eli":
      header('Location: home.php');
      
    break;
  case "Allife":
      header('Location: home.php');
      
    break;
  case "Gi":
      header('Location: home.php');
      
    break;
  case "Raoni":
      header('Location: home.php');
      
    break;
  case "Vini":
      header('Location: home.php');
      
    break;
  default:
      header('Location: index.php');
  exit();
}
 exit();
} else {
  $_SESSION['nao_autenticado'] = true;
  header('Location: index.php');
  exit();
}

//if($row==1){//check if found username and password
 //   if($row['usuario_id'] == 1){
//        header("Location: home.php");
 //   }elseif($row['usuario'] == "www"){
//        header("'Location: index.php'");
 //   }

//}


