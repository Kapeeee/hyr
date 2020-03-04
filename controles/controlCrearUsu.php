<?php
  session_start();
 
  	if( isset($_SESSION['id']) and ($_SESSION['perfil'] <> 0)and isset($_POST['nombre']) ){
  		//Si la sesión esta seteada no hace nada
  		$id_usu = $_SESSION['id'];
  	}
  	else{
 		//Si no lo redirige a la pagina index para que inicie la sesion	
 		echo("-3");
 		goto salir;
 	}      

     require_once '../clases/claseUsuario.php';
     require_once '../clases/Funciones.php';
 
 	try{


        $nombre = $_POST['nombre'];
        $apellidop = $_POST['apellidop'];
        $apellidom = $_POST['apellidom'];
        $rut = $_POST['rut'];
        $mail = $_POST['mail'];
        $perfil = $_POST['perfil'];
        $cargo = $_POST['cargo'];
        $vig = 1;
        $nick = $_POST['nick'];
        

      

        $func = new Funciones();

        if($mail != ''){
            $validar = $func->validar_rut($rut,1);

            if(count($validar)==0){

                $password = $func->generaPass();

                $dao = new UsuarioDAO('',$rut,$nombre,$apellidop,$apellidom,$mail,$perfil,$cargo,md5($password),$vig,$nick);

                $crearUsu = $dao->crear_usuario();

                if(count($crearUsu)>0){
                    echo "1";    
                }else{
                    
                   $mailUsu = $func->mail_crear_usu($password,$nombre,$rut,$mail); 
                   echo "Usuario de : ".$nombre." ".$apellidop." Creado Correctamente, La Contraseña es: ".$password." y será enviada por Email.";
                }
            }else{
                //rut duplicado
                echo "3";
            }
        }else{
            //ERRO DE MAIL INGRESADO VACIO
            echo "2";
        }  
	
	
        salir:
    } catch (Exception $e) {
       //ERROR DE BASE DE DATOS
       echo "1"; 
     }
?>