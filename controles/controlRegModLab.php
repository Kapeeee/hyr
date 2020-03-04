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

	require_once '../clases/claseEmpresa.php';

	try{


		$emp = stripcslashes ($_POST['emp']);
		$cot_lab = str_replace(".","",$_POST['cot_lab']);
		$nro_trab = str_replace(".","",$_POST['nro_trab']);
		$fec_reg = date("Y-m-d h:m:s", time());

		if (isset($_POST['cargas_lab'])) {
			$cargas_lab = 1;
		}else {
			$cargas_lab = 0;
		}
		

		$fec_act_lab = stripcslashes ($_POST['fec_act']);
		$periodo_lab = stripcslashes ($_POST['periodo']);
		$tasa_acc_lab = stripcslashes ($_POST['tasa_acc']);

		$cot_lab = str_replace(",","",$_POST['cot_lab']);
		$nro_trab = str_replace(",","",$_POST['nro_trab']);

		
		 $fun = new EmpresaDAO();
		 
		 $reg_mod = $fun->reg_mod_lab($emp,$cot_lab,$nro_trab,$cargas_lab,$fec_reg,$fec_act_lab,$tasa_acc_lab,$id_usu,$periodo_lab);
		 
		 
			if ($reg_mod>0){

			echo"Registro Ingresado";    
			} else {
				//$enviar_pass = $fun->enviar_correo_pass($nom,$correo,$nueva_pass);
			
			echo"-2";  
				
					}


	
	} catch (Exception $e) {
		//echo($e);
		echo"'Error, verifique los datos'",  $e->getMessage(); 

	}
?>