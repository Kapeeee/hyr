<?php
  session_start();
 
  	if( isset($_SESSION['id']) and ($_SESSION['perfil'] <> 0)and isset($_POST['soc']) ){
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
        $soc = $_POST['soc'];
      
        $func = new Funciones();


                $dao = new PersonaDAO();
                               
                $delSoc = $dao->del_sociedad($soc);

                if($delSoc==0){
                    echo "-1";    
                }else{
                   echo 'Sociedad eliminada exitosamente';
                }
            
        
	
	
        salir:
    } catch (Exception $e) {
       //ERROR DE BASE DE DATOS
      //echo"'Error, comuniquese con el administrador".  $e->getMessage()." '";
       echo "-1"; 
     }
?>