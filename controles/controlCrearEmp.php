<?php
  session_start();
 
  	if( isset($_SESSION['id']) and ($_SESSION['perfil'] <> 0)and isset($_POST['rsocial']) ){
  		//Si la sesión esta seteada no hace nada
  		$id_usu = $_SESSION['id'];
  	}
  	else{
 		//Si no lo redirige a la pagina index para que inicie la sesion	
 		echo("-3");
 		goto salir;
 	}      

     require_once '../clases/claseEmpresa.php';
     require_once '../clases/Funciones.php';
 

 	try{

        $vig = 1;
        $rsocial = $_POST['rsocial'];
        $cem = $_POST['cem'];
        $mail = $_POST['mail'];
        $rut = $_POST['rut'];
        $direc = $_POST['direc'];
        $ciudad = $_POST['ciudad'];
        $comuna = $_POST['comuna'];
        $mme = str_replace(".","",$_POST['mme']);
        $mre = str_replace(".","",$_POST['mre']);
        $cse = $_POST['cse'];
        $rte = $_POST['rte'];
        $pce = $_POST['pce'];
        $evem = $_POST['evem'];
        $fia = $_POST['fia'];
        $csii = $_POST['csii'];
        $cprev = $_POST['cprev'];
        $fre = $_POST['fre'];
        $rae = $_POST['rae'];

        $mme = str_replace(",","",$mme);
        $mre = str_replace(",","",$mre);

        if (isset($_POST['datagiros'])) {
          $giros = stripcslashes ($_POST['datagiros']);
          $giros= json_decode($giros,TRUE);
        }else{
          $giros = '';
        }
        

      
        $func = new Funciones();

        if($rut != ''){
            $validar = $func->validar_rut($rut,2);

            if(count($validar)==0){

                $password = $func->generaPass();

                $dao = new EmpresaDAO('',$rsocial,$rut,$cse,$mme,$mre,$ciudad,$comuna,$direc,$rte,$fia,$mail,$cem,$pce,$evem,$vig,'',$id_usu,$cprev,$csii,$fre,$rae);
                               
                $crearEmp = $dao->crear_empresa($giros);

                if(count($crearEmp)==0){
                    echo "1";    
                }else{
                   echo "Empresa : ".$rsocial." Ingresada Correctamente!";
                }
            }else{
                //rut duplicado
                echo "3";
            }
        }else{
            //ERROR DE MAIL INGRESADO VACIO
            echo "2";
        }  
	
	
        salir:
    } catch (Exception $e) {
       //ERROR DE BASE DE DATOS
       echo "1"; 
     }
?>