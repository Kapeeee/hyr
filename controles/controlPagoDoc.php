<?php
  session_start();
 
  	if( isset($_SESSION['id']) and ($_SESSION['perfil'] <> 0)and isset($_POST['id_doc']) ){
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
 		$id_doc = $_POST['id_doc'];

 		$monto_mov = str_replace(".","",$_POST['monto_pago']);
 		$fec_reg = date("Y-m-d h:m:s", time());
 		$cod_formapago_mov = $_POST['forma_pago'];
 		$suma_pago = str_replace(".","",$_POST['monto_pagado']);
 		$suma_pago = str_replace(",","",$suma_pago);
 		$monto_mov = str_replace(",","",$monto_mov);
 		
 		$fun = new Funciones(); 

 		$fec_pago = $_POST['fec_pago'];

 		$re = $fun->cargar_datos_doc($id_doc);  
 	
 		if ($re[0]['total'] > ($monto_mov+$suma_pago)) {
 			$est_mov = 2;
 			$est_msg = 'parcialmente';
 		}else{
 			$est_mov = 3;
 			$est_msg = 'completamente';
 		}

 		if (isset($_POST['obs_pago'])) {
 			$obs_mov = $_POST['obs_pago'];
 		}else{
 			$obs_mov = '';
 		}

 			$usu = new UsuarioDAO($id_usu);

 			$dao = new DocumentoDAO($id_doc);
 		
			$pago_doc = $dao->pago_doc($usu->getUsu(),$monto_mov,$obs_mov,$fec_reg,$cod_formapago_mov,$est_mov,$fec_pago);
			
			if ($pago_doc>0){

				$datos_mail = $fun->datos_mail($id_doc,2);
				$mail = $fun->mail_pago_doc($datos_mail[0]['nom_emp'],$datos_mail[0]['mail_emp'],$datos_mail[0]['tipo'],$datos_mail[0]['nro_doc'],$monto_mov, $est_msg,$fec_pago);	
			
			echo"Documento pagado ".$est_msg;    
			} else {
				//$enviar_pass = $fun->enviar_correo_pass($nom,$correo,$nueva_pass);
			
			echo"-2";  
				
					}
		
	
	salir:
 	} catch (Exception $e) {
		
		echo"-2"; 
  	}
 ?>