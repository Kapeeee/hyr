<?php
session_start();

 if( isset($_SESSION['id']) and ($_SESSION['perfil'] <> 0) and isset($_POST['usu']) ){
  		//Si la sesión esta seteada no hace nada
  		$id = $_SESSION['id'];
  	}
  	else{
 		//Si no lo redirige a la pagina index para que inicie la sesion	
 		echo("0");
 		goto salir;
 	}         
	     
	require_once '../clases/Funciones.php';
 	require_once '../clases/claseUsuario.php';

	try{

		$usu = $_POST['usu'];
		$nom = $_POST['mod_nombre'];
		$apep = $_POST['mod_apellidop'];
		$apem = $_POST['mod_apellidom'];
 		$mail = $_POST['mod_mail'];
 		$perfil = $_POST['mod_perfil'];
 		$cargo = $_POST['mod_cargo'];
 		//$nick = $_POST['nick'];
		


		if (isset($_POST['mod_vig'])) {
			$vig = 1;
		}else{
			$vig = 0;
		}
		
		$dao = new UsuarioDAO($usu,'',$nom,$apep,$apem,$mail,$perfil,$cargo,'',$vig,'');

				
		$mod_usu = $dao->modificar_usuario();
		 
			if (count($mod_usu)>0){
				echo "1";    
			} else {
				echo"Usuario Modificado Correctamente!.";  
			}
	salir:
	} catch (Exception $e) {
		echo"1"; 
	}
?>