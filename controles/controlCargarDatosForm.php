<?php
 session_start();

 if( isset($_SESSION['id']) and ($_SESSION['perfil'] <> 0) ){
    //Si la sesión esta seteada no hace nada
    $id = $_SESSION['id'];
  }
  else{
    //Si no lo redirige a la pagina index para que inicie la sesion 
    header("location: ../index.html");
  }  

	require_once '../clases/Funciones.php';

	try{

		$id_form = stripcslashes ($_POST['id_f29']);

		 $fun = new Funciones();
		 $re = $fun->cargar_formularios(1,$id_form);
		 


          $datos = array();


          foreach($re as $row){

                $datos[] = $row;
    
              }
		ob_end_clean();
		
		echo json_encode($datos);
	
	} catch (Exception $e) {
		//echo($e);
		echo"'Error, verifique los datos'",  $e->getMessage(); 

	}
?>