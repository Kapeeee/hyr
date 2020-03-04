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


 	require_once '../clases/Funciones.php';
 
 	try{
 		$id_doc = $_POST['id_doc'];

 		$fec_reg = date("Y-m-d h:m:s", time());
 		$fun = new Funciones(); 
 		$re = $fun->cargar_datos_doc($id_doc);  
 	
 		$datos_mail = $fun->datos_mail($id_doc,3);

		if ($re[0]['est_doc'] == 1) {
 			$est_msg = 'abono pendiente';
 		}elseif($re[0]['est_doc'] == 2){
 			$est_msg = 'pago pendiente';
 		}

		$mail = $fun->mail_not_doc($datos_mail[0]['nom_emp'],$datos_mail[0]['mail_emp'],$datos_mail[0]['tipo'],$datos_mail[0]['nro_doc'],$datos_mail[0]['monto_deuda'], $est_msg,$datos_mail[0]['fec_ven_doc']);	
			
			echo $datos_mail[0]['tipo']." Nro ".$datos_mail[0]['nro_doc']." notificada";    
 		

				

		
	
	salir:
 	} catch (Exception $e) {
		
		echo"-2"; 
  	}
 ?>