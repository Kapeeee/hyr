<?php
  session_start();
 
  	if( isset($_SESSION['id']) and ($_SESSION['perfil'] <> 0)and isset($_POST['nom_per']) ){
  		//Si la sesión esta seteada no hace nada
  		$id_usu = $_SESSION['id'];
  	}
  	else{
 		//Si no lo redirige a la pagina index para que inicie la sesion	
 		echo("-4");
 		goto salir;
 	}      

     require_once '../clases/clasePersona.php';
     require_once '../clases/Funciones.php';
 

 	try{ 
        $rut = $_POST['rut_per'];
        $nom_per = $_POST['nom_per'];
        $mail_per = $_POST['mail_per'];
        $fec_cre_per = date("Y-m-d h:m:s", time());
        $vig = 1;
        $clave_previred = $_POST['cprev'];
        $clave_sii = $_POST['csii'];
        
      
        $func = new Funciones();

        if($mail_per != ''){
            $validar = $func->validar_rut($rut,3);

            if(count($validar)==0){

                //$password = $func->generaPass();

                $dao = new PersonaDAO('',$rut,$nom_per,$mail_per,$fec_cre_per,$id_usu,'',$vig,$clave_previred,$clave_sii);
                               
                $crearPer = $dao->crear_persona();

                if($crearPer==0){
                    echo "-1";    
                }else{
                   echo $crearPer;
                }
            }else{
                //rut duplicado
                echo "-3";
            }
        }else{
            //ERROR DE MAIL INGRESADO VACIO
            echo "-2";
        }  
	
	
        salir:
    } catch (Exception $e) {
       //ERROR DE BASE DE DATOS
      echo"'Error, comuniquese con el administrador".  $e->getMessage()." '";
       //echo "-1"; 
     }
?>