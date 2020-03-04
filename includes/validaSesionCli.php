<?php 
session_start(); 
if( isset($_SESSION['id']) and ($_SESSION['perfil'] == 3 or $_SESSION['perfil'] == 4) ){
    //Si la sesión esta seteada no hace nada
    $id = $_SESSION['id'];
    $perfil = $_SESSION['perfil'];
  }
  else{
    //Si no lo redirige a la pagina index para que inicie la sesion 
    header("location: ../index.html");
  }   

   require_once '../clases/Funciones.php';
  
  

  $fun = new Funciones();    
?>
