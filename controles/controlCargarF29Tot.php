<?php
 session_start();

 if( isset($_SESSION['id']) and ($_SESSION['perfil'] <> 0) ){
    //Si la sesión esta seteada no hace nada
    $id_usu = $_SESSION['id'];
  }
  else{
    //Si no lo redirige a la pagina index para que inicie la sesion 
    header("location: ../index.html");
  }  

	require_once '../clases/Funciones.php';

	try{

		$emp = stripcslashes ($_POST['emp']);

		 $fun = new Funciones();
		 $re = $fun->cargar_datos_inf29tot($emp);
		 
		 if (!empty($re)) {
		 	          $datos = array();


          foreach($re as $row){

               echo $datos[] = $row;
    
              }
		ob_end_clean();
		
		echo json_encode($datos);
		 }


	
	} catch (Exception $e) {
		//echo($e);
		echo"'Error, verifique los datos'",  $e->getMessage(); 

	}
?>