<?php
  session_start();
 
  	if( isset($_SESSION['id']) and ($_SESSION['perfil'] <> 0)and isset($_POST['emp']) ){
  		//Si la sesión esta seteada no hace nada
  		$id_usu = $_SESSION['id'];
  	}
  	else{
 		//Si no lo redirige a la pagina index para que inicie la sesion	
 		echo("-3");
 		goto salir;
 	}      

 	require_once '../clases/claseDocumento.php';
 	require_once '../clases/claseEmpresa.php';
 	require_once '../clases/claseUsuario.php';
 	require_once '../clases/Funciones.php';
 
 	try{
 		$id_emp = $_POST['emp'];

 		$num_doc = $_POST['num_doc'];
 		$afecto = str_replace(".","",$_POST['afecto']);
 		$fec_emi = $_POST['fec_emi'];
 		$tipo_doc = $_POST['tipo_doc'];
 		$exento = str_replace(".","",$_POST['exento']);
 		$fec_ven = $_POST['fec_ven'];
 		$iva = str_replace(".","",$_POST['iva']);
 		$total = str_replace(".","",$_POST['total']);
 		$fec_reg = date("Y-m-d h:m:s", time());
 		$est = 1;

 		$afecto = str_replace(",","",$afecto);
 		$exento = str_replace(",","",$exento );
 		$iva = str_replace(",","",$iva);
 		$total = str_replace(",","",$total);
 		if (isset($_POST['obs_doc'])) {
 			$obs_doc = $_POST['obs_doc'];
 		}else{
 			$obs_doc = '';
 		}

 		$key = 'E'.$id_emp.'T'.$tipo_doc.'N'.$num_doc;



 			$fun = new Funciones();

 			$emp = new EmpresaDAO($id_emp);
		 	
 			$usu = new UsuarioDAO($id_usu);

 			$dao = new DocumentoDAO('',$num_doc, $afecto, $exento, $iva, $total, $fec_ven, $fec_emi, $tipo_doc, $est,  $fec_reg, '', $obs_doc);

 			$val_doc = $fun->val_ing_doc($key);

 			if ($val_doc[0]['val'] == 1) {
 				echo"-3";  
 			}else{
 							$ing_doc = $dao->ing_doc($usu->getUsu(),$emp->getEmp());
			
						if ($ing_doc>0){

						$datos_mail = $fun->datos_mail($num_doc,1);

				 		if ($tipo_doc == 2) {
 								$total = $afecto;
 						}

							$mail = $fun->mail_ing_doc($datos_mail[0]['nom_emp'],$datos_mail[0]['mail_emp'],$datos_mail[0]['tipo'],$num_doc,$total, $fec_ven);	
				
							echo"Documento Nro. ".$num_doc." ingresado correctamente";



						} else {
			
						echo"-2";  
				
						}
 			}

 		

		
	
	salir:
 	} catch (Exception $e) {
		
		echo"-2"; 
  	}
 ?>