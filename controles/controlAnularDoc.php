<?php
  session_start();
 
  	if( isset($_SESSION['id']) and ($_SESSION['perfil'] == 1)and isset($_POST['id_doc']) and isset($_POST['mot']) ){
  		//Si la sesión esta seteada no hace nada
  		$id_usu = $_SESSION['id'];
  	}
  	else{
 		//Si no lo redirige a la pagina index para que inicie la sesion	
 		echo("-3");
 		goto salir;
 	}      

 	require_once '../clases/claseDocumento.php';
 	require_once '../clases/claseUsuario.php';
 	require_once '../clases/Funciones.php';
 
 	try{


 		$fun = new Funciones(); 

 		$id_doc = $_POST['id_doc'];
 		$monto_mov = 0;
 		$fec_reg = date("Y-m-d h:m:s", time());
 		$est_mov = 4;
 		if (isset($_POST['mot'])) {
 			$obs_mov = $_POST['mot'];
 		}else{
 			$obs_mov = '';
 		}
 		$cod_formapago_mov = 4;
 		
 			$usu = new UsuarioDAO($id_usu);

 			$dao = new DocumentoDAO($id_doc);
 		
			$anular_doc = $dao->anular_doc($usu->getUsu(),$monto_mov,$obs_mov,$fec_reg,$cod_formapago_mov,$est_mov);
			
			if ($anular_doc>0){
			
			echo"Documento Anulado";    
			} else {
				//$enviar_pass = $fun->enviar_correo_pass($nom,$correo,$nueva_pass);
			
			echo"-2";  
				
					}
		
	
	salir:
 	} catch (Exception $e) {
		
		echo"-2"; 
  	}
 ?>