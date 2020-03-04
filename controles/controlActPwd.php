<?php
 session_start();

 	if( isset($_SESSION['id']) and ($_SESSION['perfil'] <> 0)and isset($_POST['actpwd']) ){
 		//Si la sesión esta seteada no hace nada
 		$id = $_SESSION['id'];
 		$perfil = $_SESSION['perfil'];
 	}
 	else{
		echo("0");
 		goto salir;
	}      
	     
	require_once '../clases/Funciones.php';
	require_once '../clases/claseUsuario.php';
	require_once '../clases/claseEmpresa.php';
	require_once '../clases/clasePersona.php';
	

	try{

		$pwd = $_POST['actpwd'];
        $newpwd1 = $_POST['newpwd1'];
        $newpwd2 = $_POST['newpwd2'];
        
        $usu = $_SESSION['id'];
        $mail = $_SESSION['mail'];
		

		
		
		$fun = new Funciones(); 

		
			$val = $fun->validar_pwd($usu,$perfil); 

			if ($val[0]['pass'] <> md5($pwd)){
			echo"1";  
			}else{

				if ($newpwd1 <> $newpwd2) {
					echo"2";  
				}else{
						switch ($perfil) {
							case '1':
								$upd_pass = UsuarioDAO::actualizar_contraseña($usu,md5($newpwd1));
								break;
							case '2':
								$upd_pass = UsuarioDAO::actualizar_contraseña($usu,md5($newpwd1));
								break;
							case '3':
								$upd_pass = EmpresaDAO::actualizar_contraseña($usu,md5($newpwd1));
								break;
							case '4':
								$upd_pass = EmpresaDAO::actualizar_contraseña($usu,md5($newpwd1));
								break;
						}
							
							$enviar_pass = $fun->correo_upd_pass($mail,$newpwd1);
							session_destroy();
							echo"Su Contraseña fue actualizada correctamente y enviada a su correo ".$newpwd1.". En 10 segundos se cerrara su sesión para que ingrese nuevamente"; 
							
								
			}
		}
		
	salir:
	} catch (Exception $e) {
		echo"3"; 

	}
?>