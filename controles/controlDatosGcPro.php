<?php
 session_start();

 if( isset($_SESSION['id']) and ($_SESSION['perfil'] <> 0)  ){
    //Si la sesión esta seteada no hace nada
    $id = $_SESSION['id'];
  }
  else{
    //Si no lo redirige a la pagina index para que inicie la sesion 
    header("location: ../index.html");
  }  

	require_once '../clases/Funciones.php';

	try{

		$atrib = stripcslashes ($_POST['atrib']);

		 $fun = new Funciones();
		 $re = $fun->cargar_gc_pro($atrib);
		 
		
		echo ($re[0]['gc']);
	
	} catch (Exception $e) {
		//echo($e);
		echo"'Error, verifique los datos'",  $e->getMessage(); 

	}
?>