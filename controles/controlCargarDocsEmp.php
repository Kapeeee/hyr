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

		$fun = new Funciones();

		$rut_emp = stripcslashes ($_POST['rut_emp']);

		$emp = $fun->cargar_id_emp($rut_emp);

		if ($emp > 0) {
			$re = $fun->cargar_docs_emp($emp,1);
		 


          $datos = array();


          foreach($re as $row){

                $datos[] = $row;
    
               }
		 ob_end_clean();
		
		 echo json_encode($datos);
		}else{
			echo 0;
		}

		 
		 
	
	} catch (Exception $e) {
		//echo($e);
		echo"'Error, verifique los datos'",  $e->getMessage(); 

	}
?>