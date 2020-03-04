<?php
  session_start();
 
  	if( isset($_SESSION['id']) and ($_SESSION['perfil'] <> 0)and (isset($_POST['soc_per']) or isset($_POST['mod_soc_per'])) ){
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

        if (isset($_POST['emp'])) {
          
        if (isset($_POST['soc_per'])) {
          $per = $_POST['soc_per'];
        }else if (isset($_POST['mod_soc_per'])) {
          $per = $_POST['mod_soc_per'];
        }

        $emp = $_POST['emp'];
        $porc = $_POST['porc_soc'];
        $monto = $_POST['mon_soc'];
        $monto = str_replace(".","",$monto);
        $monto = str_replace(",","",$monto);
        $vig = 1;
        $fec_cre = date("Y-m-d h:m:s", time());
        
        
      
        $func = new Funciones();


            $validar = $func->validar_soc($per,$emp);
            

            if($validar['soc']==0){


                $dao = new PersonaDAO($per,'','','','',$id_usu,'','','','');
                               
                $regSoc = $dao->reg_sociedad($emp,$porc,$monto,$vig,$fec_cre);

                if($regSoc==0){
                    echo "-1";    
                }else{
                   echo 'Sociedad registrada exitosamente';
                }
            }else{
                //rut duplicado
                echo "-2";
            }
        }else{
          echo "-5";
        }

        
	
	
        salir:
    } catch (Exception $e) {
       //ERROR DE BASE DE DATOS
      //echo"'Error, comuniquese con el administrador".  $e->getMessage()." '";
       echo "-1"; 
     }
?>