<?php
session_start();

 if( isset($_SESSION['id']) and ($_SESSION['perfil'] <> 0) and isset($_POST['per']) ){
  		//Si la sesión esta seteada no hace nada
  		$id = $_SESSION['id'];
  	}
  	else{
 		//Si no lo redirige a la pagina index para que inicie la sesion	
 		echo("-4");
 		goto salir;
 	}         
	     
	require_once '../clases/Funciones.php';
 	require_once '../clases/clasePersona.php';

	try{

		$per = $_POST['per'];
		$nom = $_POST['mnom_per'];
		$mail = $_POST['mmail_per'];
		$clave_sii = $_POST['mcsii'];
 		$clave_previred = $_POST['mcprev'];


		if (isset($_POST['vigcheck'])) {
			$vig = 1;
		}else{
			$vig = 0;
		}
		
		$dao = new PersonaDAO($per,'',$nom,$mail,'','','',$vig,$clave_previred,$clave_sii);

				
		$mod_per = $dao->modificar_persona();
		 
			if ($mod_per==0){
				echo "1";    
			} else {
				echo"Persona Modificada Correctamente!.";  
			}
	salir:
	} catch (Exception $e) {
		echo"1"; 
	}
?>