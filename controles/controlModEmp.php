<?php
session_start();

 if( isset($_SESSION['id']) and ($_SESSION['perfil'] <> 0) and isset($_POST['rsoc']) ){
  		//Si la sesión esta seteada no hace nada
  		$id = $_SESSION['id'];
  	}
  	else{
 		//Si no lo redirige a la pagina index para que inicie la sesion	
 		echo("0");
 		goto salir;
 	}         
	     
     require_once '../clases/claseEmpresa.php';
     require_once '../clases/Funciones.php';
 
	try{


        $idemp = $_POST['emp'];
        if (isset($_POST['vigcheck'])){$vig = 1;}else{$vig = 0;}
        $rsoc = $_POST['rsoc'];
        $mcem = $_POST['mcem'];         //Contacto Empresa 
        $mmail = $_POST['mmail'];       //Mail
        //$mrut = $_POST['mrut'];         rut
        $mdirec = $_POST['mdirec'];     //Direccion
        $mciudad = $_POST['mciudad'];   //Ciudad
        $mcomuna = $_POST['mcomuna'];   //Comuna
        $mmme = $_POST['mmme'];         //Monto Mensual Empresa
        $mmre = $_POST['mmre'];         //Monto Renta Empresa
        $mcse = $_POST['mcse'];         //Cons. Soc. Emp.
        $mrte = $_POST['mrte'];         //Reg. Trib. Emp.
        $mpce = $_POST['mpce'];         //Patente Comercial Empresa
        $mevem = $_POST['mevem'];       //Evaluacion Empresa
        $mfia = $_POST['mfia'];         //Fecha Inicio de Actividades 
        $mrae = $_POST['mrae'];         //Rta. At. Emp.
        $mcsii = $_POST['mcsii'];       //Clave SII
        $mcprev = $_POST['mcprev'];     //Clave Previred
        $mfre = $_POST['mfre'];         //Fac. Rea. Emp.


		
        $dao = new EmpresaDAO($idemp,
                               $rsoc,
                               '',
                               $mcse,
                               $mmme,
                               $mmre,
                               $mciudad,
                               $mcomuna,
                               $mdirec,
                               $mrte,
                               $mfia,
                               $mmail,
                               $mcem,
                               $mpce,
                               $mevem,
                               $vig,
                               '',
                               '',
                               $mcprev,
                               $mcsii,
                               $mfre,
                               $mrae);
		

		$mod_emp = $dao->modificar_empresa();		
		//$mod_usu = $dao->modificar_usuario();
		 
			if (count($mod_emp)>0){
				echo "1";    
			} else {
				echo"Empresa Modificada Correctamente!. El sistema se actualizara";  
			}
	salir:
	} catch (Exception $e) {
		echo"1"; 
	}
?>