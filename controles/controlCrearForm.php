<?php
  session_start();
 
  	if( isset($_SESSION['id']) and ($_SESSION['perfil'] <> 0)and isset($_POST['emp']) ){
          //Si la sesión esta seteada no hace nada
          
        if(isset($_POST['ivas'])){

            switch ($_POST['ivas']) {
                case "1":
                    //CUANDO ES UN IVA NORMAL//
                    $ivapost = 0;
                    $ivanop = 0;
                    $id_usu = $_SESSION['id'];
                    break;
                case "2":
                    //CUANDO ES IVA POSTERGADO//
                    $ivapost = 1;
                    $ivanop = 0;
                    $id_usu = $_SESSION['id'];
                    break;
                case "3":
                    //CUANDO ES IVA NO PAGADO//
                    $ivapost = 0;
                    $ivanop = 1;
                    $id_usu = $_SESSION['id'];
                    break;
            }
        }
        else{
            echo("4");
 		    goto salir;
        }	
  	}
  	else{
 		//Si no lo redirige a la pagina index para que inicie la sesion	
 		echo("3");
 		goto salir;
 	}      

     require_once '../clases/claseF29.php';
     require_once '../clases/Funciones.php';
     require_once '../clases/claseEmpresa.php';
 	 require_once '../clases/claseUsuario.php';

 	try{


        $id_emp     = $_POST['emp'];    
        $c585       = $_POST['C585'];
        $c20        = $_POST['C20'];
        $c586       = $_POST['C586'];
        $c142       = $_POST['C142'];
        $c731       = $_POST['C731'];
        $c732       = $_POST['C732'];
        $c714       = $_POST['C714'];
        $c715       = $_POST['C715'];
        $c515       = $_POST['C515'];
        $c587       = $_POST['C587'];
        $c720       = $_POST['C720'];
        $c503       = $_POST['C503'];
        $c502       = $_POST['C502'];
        $c763       = $_POST['C763'];
        $c764       = $_POST['C764'];
        $c716       = $_POST['C716'];
        $c717       = $_POST['C717'];
        $c110       = $_POST['C110'];
        $c111       = $_POST['C111'];
        $c758       = $_POST['C758'];
        $c759       = $_POST['C759'];
        $c512       = $_POST['C512'];
        $c513       = $_POST['C513'];
        $c509       = $_POST['C509'];
        $c510       = $_POST['C510'];
        $c708       = $_POST['C708'];
        $c709       = $_POST['C709'];
        $c733       = $_POST['C733'];
        $c734       = $_POST['C734'];
        $c516       = $_POST['C516'];
        $c517       = $_POST['C517'];
        $c500       = $_POST['C500'];
        $c501       = $_POST['C501'];
        $c154       = $_POST['C154'];
        $c518       = $_POST['C518'];
        $c713       = $_POST['C713'];
        $c738       = $_POST['C738'];
        $c739       = $_POST['C739'];
        $c740       = $_POST['C740'];
        $c741       = $_POST['C741'];
        $c538       = $_POST['C538'];
        $c511       = $_POST['C511'];
        $c514       = $_POST['C514'];
        $c564       = $_POST['C564'];
        $c521       = $_POST['C521'];
        $c566       = $_POST['C566'];
        $c560       = $_POST['C560'];
        $c584       = $_POST['C584'];
        $c562       = $_POST['C562'];
        $c519       = $_POST['C519'];
        $c520       = $_POST['C520'];
        $c761       = $_POST['C761'];
        $c762       = $_POST['C762'];
        $c765       = $_POST['C765'];
        $c766       = $_POST['C766'];
        $c524       = $_POST['C524'];
        $c525       = $_POST['C525'];
        $c527       = $_POST['C527'];
        $c528       = $_POST['C528'];
        $c531       = $_POST['C531'];
        $c532       = $_POST['C532'];
        $c534       = $_POST['C534'];
        $c535       = $_POST['C535'];
        $c536       = $_POST['C536'];
        $c553       = $_POST['C553'];
        $c504       = $_POST['C504'];
        $c593       = $_POST['C593'];
        $c594       = $_POST['C594'];
        $c592       = $_POST['C592'];
        $c539       = $_POST['C539'];
        $c718       = $_POST['C718'];
        $c164       = $_POST['C164'];
        $c730       = $_POST['C730'];
        $c742       = $_POST['C742'];
        $c743       = $_POST['C743'];
        $c127       = $_POST['C127'];
        $c729       = $_POST['C729'];
        $c744       = $_POST['C744'];
        $c745       = $_POST['C745'];
        $c544       = $_POST['C544'];
        $c523       = $_POST['C523'];
        $c712       = $_POST['C712'];
        $c757       = $_POST['C757'];
        $c537       = $_POST['C537'];
        $c77        = $_POST['C77'];
        $c89        = $_POST['C89'];
        $c760       = $_POST['C760'];
        $c50        = $_POST['C50'];
        $c751       = $_POST['C751'];
        $c735       = $_POST['C735'];
        $c48        = $_POST['C48'];
        $c151       = $_POST['C151'];
        $c153       = $_POST['C153'];
        $c54        = $_POST['C54'];
        $c56        = $_POST['C56'];
        $c588       = $_POST['C588'];
        $c589       = $_POST['C589'];
        $c30        = $_POST['C30'];
        $c563       = $_POST['C563'];
        $c115       = $_POST['C115'];
        $c68        = $_POST['C68'];
        $c62        = $_POST['C62'];
        //echo "ESTE ES C62".$c62;
        $c565       = $_POST['C565'];
        $c120       = $_POST['C120'];
        $c542       = $_POST['C542'];
        $c122       = $_POST['C122'];
        $c123       = $_POST['C123'];
        $c700       = $_POST['C700'];
        $c701       = $_POST['C701'];
        $c702       = $_POST['C702'];
        $c711       = $_POST['C711'];
        $c703       = $_POST['C703'];
        $c66        = $_POST['C66'];
        $c152       = $_POST['C152'];
        $c70        = $_POST['C70'];
        $c595       = $_POST['C595'];
        $c1         = $_POST['C1'];
        $c2         = $_POST['C2'];
        $c5         = $_POST['C5'];
        $c583       = $_POST['C583'];
        $c91        = $_POST['C91'];
        $c92        = $_POST['C92'];
        $c93        = $_POST['C93'];
        $c94        = $_POST['C94'];
        $c529       = $_POST['C529'];
        $c530       = $_POST['C530'];
        $c409       = $_POST['C409'];
        $c522       = $_POST['C522'];
        $c526       = $_POST['C526'];
        $c113       = $_POST['C113'];
        $c28        = $_POST['C28'];
        $c548       = $_POST['C548'];
        $c540       = $_POST['C540'];
        $c541       = $_POST['C541'];
        $c549       = $_POST['C549'];
        $c550       = $_POST['C550'];
        $c577       = $_POST['C577'];
        $c32        = $_POST['C32'];
        $c150       = $_POST['C150'];
        $c146       = $_POST['C146'];
        $c752       = $_POST['C752'];
        $c545       = $_POST['C545'];
        $c546       = $_POST['C546'];
        $c710       = $_POST['C710'];
        $c602       = $_POST['C602'];
        $c575       = $_POST['C575'];
        $c576       = $_POST['C576'];
        $c574       = $_POST['C574'];
        $c33        = $_POST['C33'];
        $c580       = $_POST['C580'];
        $c149       = $_POST['C149'];
        $c582       = $_POST['C582'];
        $c85        = $_POST['C85'];
        $c753       = $_POST['C753'];
        $c754       = $_POST['C754'];
        $c551       = $_POST['C551'];
        $c559       = $_POST['C559'];
        $c508       = $_POST['C508'];
        $c533       = $_POST['C533'];
        $c552       = $_POST['C552'];
        $c603       = $_POST['C603'];
        $c507       = $_POST['C507'];
        $c506       = $_POST['C506'];
        $c556       = $_POST['C556'];
        $c557       = $_POST['C557'];
        $c558       = $_POST['C558'];
        $c543       = $_POST['C543'];
        $c573       = $_POST['C573'];
        $c598       = $_POST['C598'];
        $c39        = $_POST['C39'];
        $c554       = $_POST['C554'];
        $c736       = $_POST['C736'];
        $c597       = $_POST['C597'];
        $c555       = $_POST['C555'];
        $c596       = $_POST['C596'];
        $c725       = $_POST['C725'];
        $c737       = $_POST['C737'];
        $c727       = $_POST['C727'];
        $c704       = $_POST['C704'];
        $c705       = $_POST['C705'];
        $c706       = $_POST['C706'];
        $c160       = $_POST['C160'];
        $c161       = $_POST['C161'];
        $c570       = $_POST['C570'];
        $c126       = $_POST['C126'];
        $c128       = $_POST['C128'];
        $c571       = $_POST['C571'];
        $c572       = $_POST['C572'];
        $c568       = $_POST['C568'];
        $c590       = $_POST['C590'];
        $c547       = $_POST['C547'];
        $c728       = $_POST['C728'];
        $c707       = $_POST['C707'];
        $c73        = $_POST['C73'];
        $c130       = $_POST['C130'];
        $c591       = $_POST['C591'];
        $c6         = $_POST['C6'];
        $c610       = $_POST['C610'];
        $c611       = $_POST['C611'];
        $c612       = $_POST['C612'];
        $c8         = $_POST['C8'];
        $c53        = $_POST['C53'];
        $c613       = $_POST['C613'];
        $c9         = $_POST['C9'];
        $c601       = $_POST['C601'];
        $c604       = $_POST['C604'];
        $c55        = $_POST['C55'];
        $c44        = $_POST['C44'];
        $c726       = $_POST['C726'];
        $c313       = $_POST['C313'];
        $c314       = $_POST['C314'];
        $fecha      = $_POST['fecha'];


        $func = new Funciones();

        $fecha_per = date_create($fecha);
        $fecha_per = date_format($fecha_per,"m-Y");

        $val_f29 = $func->val_periodo_f29($id_emp,$fecha_per,0);  

        if ($val_f29['val'] == 0) {





        $c585 = str_replace(".","",$c585);
        $c20  = str_replace(".","",$c20);
        $c586 = str_replace(".","",$c586);
        $c142 = str_replace(".","",$c142);
        $c731 = str_replace(".","",$c731);
        $c732 = str_replace(".","",$c732);
        $c714 = str_replace(".","",$c714);
        $c715 = str_replace(".","",$c715);
        $c515 = str_replace(".","",$c515);
        $c587 = str_replace(".","",$c587);
        $c720 = str_replace(".","",$c720);
        $c503 = str_replace(".","",$c503);
        $c502 = str_replace(".","",$c502);
        $c763 = str_replace(".","",$c763);
        $c764 = str_replace(".","",$c764);
        $c716 = str_replace(".","",$c716);
        $c717 = str_replace(".","",$c717);
        $c110 = str_replace(".","",$c110);
        $c111 = str_replace(".","",$c111);
        $c758 = str_replace(".","",$c758);
        $c759 = str_replace(".","",$c759);
        $c512 = str_replace(".","",$c512);
        $c513 = str_replace(".","",$c513);
        $c509 = str_replace(".","",$c509);
        $c510 = str_replace(".","",$c510);
        $c708 = str_replace(".","",$c708);
        $c709 = str_replace(".","",$c709);
        $c733 = str_replace(".","",$c733);
        $c734 = str_replace(".","",$c734);
        $c516 = str_replace(".","",$c516);
        $c517 = str_replace(".","",$c517);
        $c500 = str_replace(".","",$c500);
        $c501 = str_replace(".","",$c501);
        $c154 = str_replace(".","",$c154);
        $c518 = str_replace(".","",$c518);
        $c713 = str_replace(".","",$c713);
        $c738 = str_replace(".","",$c738);
        $c739 = str_replace(".","",$c739);
        $c740 = str_replace(".","",$c740);
        $c741 = str_replace(".","",$c741);
        $c538 = str_replace(".","",$c538);
        $c511 = str_replace(".","",$c511);
        $c514 = str_replace(".","",$c514);
        $c564 = str_replace(".","",$c564);
        $c521 = str_replace(".","",$c521);
        $c566 = str_replace(".","",$c566);
        $c560 = str_replace(".","",$c560);
        $c584 = str_replace(".","",$c584);
        $c562 = str_replace(".","",$c562);
        $c519 = str_replace(".","",$c519);
        $c520 = str_replace(".","",$c520);
        $c761 = str_replace(".","",$c761);
        $c762 = str_replace(".","",$c762);
        $c765 = str_replace(".","",$c765);
        $c766 = str_replace(".","",$c766);
        $c524 = str_replace(".","",$c524);
        $c525 = str_replace(".","",$c525);
        $c527 = str_replace(".","",$c527);
        $c528 = str_replace(".","",$c528);
        $c531 = str_replace(".","",$c531);
        $c532 = str_replace(".","",$c532);
        $c534 = str_replace(".","",$c534);
        $c535 = str_replace(".","",$c535);
        $c536 = str_replace(".","",$c536);
        $c553 = str_replace(".","",$c553);
        $c504 = str_replace(".","",$c504);
        $c593 = str_replace(".","",$c593);
        $c594 = str_replace(".","",$c594);
        $c592 = str_replace(".","",$c592);
        $c539 = str_replace(".","",$c539);
        $c718 = str_replace(".","",$c718);
        $c164 = str_replace(".","",$c164);
        $c730 = str_replace(".","",$c730);
        $c742 = str_replace(".","",$c742);
        $c743 = str_replace(".","",$c743);
        $c127 = str_replace(".","",$c127);
        $c729 = str_replace(".","",$c729);
        $c744 = str_replace(".","",$c744);
        $c745 = str_replace(".","",$c745);
        $c544 = str_replace(".","",$c544);
        $c523 = str_replace(".","",$c523);
        $c712 = str_replace(".","",$c712);
        $c757 = str_replace(".","",$c757);
        $c537 = str_replace(".","",$c537);
        $c77  = str_replace(".","",$c77);
        $c89  = str_replace(".","",$c89);
        $c760 = str_replace(".","",$c760);
        $c50  = str_replace(".","",$c50);
        $c751 = str_replace(".","",$c751);
        $c735 = str_replace(".","",$c735);
        $c48  = str_replace(".","",$c48);
        $c151 = str_replace(".","",$c151);
        $c153 = str_replace(".","",$c153);
        $c54  = str_replace(".","",$c54);
        $c56  = str_replace(".","",$c56);
        $c588 = str_replace(".","",$c588);
        $c589 = str_replace(".","",$c589);
        $c30  = str_replace(".","",$c30);
        $c563 = str_replace(".","",$c563);
        $c68  = str_replace(".","",$c68);
        //$c62  = str_replace(".","",$c62);
        $c565 = str_replace(".","",$c565);
        $c120 = str_replace(".","",$c120);
        $c122 = str_replace(".","",$c122);
        $c123 = str_replace(".","",$c123);
        $c700 = str_replace(".","",$c700);
        $c701 = str_replace(".","",$c701);
        $c711 = str_replace(".","",$c711);
        $c703 = str_replace(".","",$c703);
        $c66  = str_replace(".","",$c66);
        $c152 = str_replace(".","",$c152);
        $c70  = str_replace(".","",$c70);
        $c595 = str_replace(".","",$c595);
        $c1   = str_replace(".","",$c1);
        $c2   = str_replace(".","",$c2);
        $c5   = str_replace(".","",$c5);
        $c583 = str_replace(".","",$c583);
        $c91  = str_replace(".","",$c91);
        $c92  = str_replace(".","",$c92);
        $c93  = str_replace(".","",$c93);
        $c94  = str_replace(".","",$c94);
        $c529 = str_replace(".","",$c529);
        $c530 = str_replace(".","",$c530);
        $c409 = str_replace(".","",$c409);
        $c522 = str_replace(".","",$c522);
        $c526 = str_replace(".","",$c526);
        $c113 = str_replace(".","",$c113);
        $c28  = str_replace(".","",$c28);
        $c548 = str_replace(".","",$c548);
        $c540 = str_replace(".","",$c540);
        $c541 = str_replace(".","",$c541);
        $c549 = str_replace(".","",$c549);
        $c550 = str_replace(".","",$c550);
        $c577 = str_replace(".","",$c577);
        $c32  = str_replace(".","",$c32);
        $c150 = str_replace(".","",$c150);
        $c146 = str_replace(".","",$c146);
        $c752 = str_replace(".","",$c752);
        $c545 = str_replace(".","",$c545);
        $c546 = str_replace(".","",$c546);
        $c710 = str_replace(".","",$c710);
        $c602 = str_replace(".","",$c602);
        $c575 = str_replace(".","",$c575);
        $c576 = str_replace(".","",$c576);
        $c574 = str_replace(".","",$c574);
        $c33  = str_replace(".","",$c33);
        $c580 = str_replace(".","",$c580);
        $c149 = str_replace(".","",$c149);
        $c582 = str_replace(".","",$c582);
        $c85  = str_replace(".","",$c85 );
        $c753 = str_replace(".","",$c753);
        $c754 = str_replace(".","",$c754);
        $c551 = str_replace(".","",$c551);
        $c559 = str_replace(".","",$c559);
        $c508 = str_replace(".","",$c508);
        $c533 = str_replace(".","",$c533);
        $c552 = str_replace(".","",$c552);
        $c603 = str_replace(".","",$c603);
        $c507 = str_replace(".","",$c507);
        $c506 = str_replace(".","",$c506);
        $c556 = str_replace(".","",$c556);
        $c557 = str_replace(".","",$c557);
        $c558 = str_replace(".","",$c558);
        $c543 = str_replace(".","",$c543);
        $c573 = str_replace(".","",$c573);
        $c598 = str_replace(".","",$c598);
        $c39  = str_replace(".","",$c39);
        $c554 = str_replace(".","",$c554);
        $c736 = str_replace(".","",$c736);
        $c597 = str_replace(".","",$c597);
        $c555 = str_replace(".","",$c555);
        $c596 = str_replace(".","",$c596);
        $c725 = str_replace(".","",$c725);
        $c737 = str_replace(".","",$c737);
        $c727 = str_replace(".","",$c727);
        $c704 = str_replace(".","",$c704);
        $c705 = str_replace(".","",$c705);
        $c706 = str_replace(".","",$c706);
        $c160 = str_replace(".","",$c160);
        $c161 = str_replace(".","",$c161);
        $c570 = str_replace(".","",$c570);
        $c126 = str_replace(".","",$c126);
        $c128 = str_replace(".","",$c128);
        $c571 = str_replace(".","",$c571);
        $c572 = str_replace(".","",$c572);
        $c568 = str_replace(".","",$c568);
        $c590 = str_replace(".","",$c590);
        $c547 = str_replace(".","",$c547);
        $c728 = str_replace(".","",$c728);
        $c707 = str_replace(".","",$c707);
        $c73  = str_replace(".","",$c73);
        $c130 = str_replace(".","",$c130);
        $c591 = str_replace(".","",$c591);
        $c6   = str_replace(".","",$c6);
        $c610 = str_replace(".","",$c610);
        $c611 = str_replace(".","",$c611);
        $c612 = str_replace(".","",$c612);
        $c8   = str_replace(".","",$c8);
        $c53  = str_replace(".","",$c53);
        $c613 = str_replace(".","",$c613);
        $c9   = str_replace(".","",$c9);
        $c601 = str_replace(".","",$c601);
        $c604 = str_replace(".","",$c604);
        $c55  = str_replace(".","",$c55);
        $c44  = str_replace(".","",$c44);
        $c726 = str_replace(".","",$c726);
        $c313 = str_replace(".","",$c313);
        $c314 = str_replace(".","",$c314);

      
        
  
        //$dao = new formularioDAO('',$c585);

        $dao = new formularioDAO('',$c585,$c20,$c586,$c142,$c731,$c732,$c714,$c715,$c515,$c587,$c720,$c503,$c502,
        $c763,
        $c764,
        $c716,
        $c717,
        $c110,
        $c111,
        $c758,
        $c759,
        $c512,
        $c513,
        $c509,
        $c510,
        $c708,
        $c709,
        $c733,
        $c734,
        $c516,
        $c517,
        $c500,
        $c501,
        $c154,
        $c518,
        $c713,
        $c738,
        $c739,
        $c740,
        $c741,
        $c538,
        $c511,
        $c514,
        $c564,
        $c521,
        $c566,
        $c560,
        $c584,
        $c562,
        $c519,
        $c520,
        $c761,
        $c762,
        $c765,
        $c766,
        $c524,
        $c525,
        $c527,
        $c528,
        $c531,
        $c532,
        $c534,
        $c535,
        $c536,
        $c553,
        $c504,
        $c593,
        $c594,
        $c592,
        $c539,
        $c718,
        $c164,
        $c730,
        $c742,
        $c743,
        $c127,
        $c729,
        $c744,
        $c745,
        $c544,
        $c523,
        $c712,
        $c757,
        $c537,
        $c77,
        $c89,
        $c760,
        $c50,
        $c751,
        $c735,
        $c48,
        $c151,
        $c153,
        $c54,
        $c56,
        $c588,
        $c589,
        $c30,
        $c563,
        $c115,
        $c68,
        $c62,
        $c565,
        $c120,
        $c542,
        $c122,
        $c123,
        $c700,
        $c701,
        $c702,
        $c711,
        $c703,
        $c66,
        $c152,
        $c70,
        $c595,
        $c1,
        $c2,
        $c5,
        $c583,
        $c91,
        $c92,
        $c93,
        $c94,
        $c529,
        $c530,
        $c409,
        $c522,
        $c526,
        $c113,
        $c28,
        $c548,
        $c540,
        $c541,
        $c549,
        $c550,
        $c577,
        $c32,
        $c150,
        $c146,
        $c752,
        $c545,
        $c546,
        $c710,
        $c602,
        $c575,
        $c576,
        $c574,
        $c33,
        $c580,
        $c149,
        $c582,
        $c85,
        $c753,
        $c754,
        $c551,
        $c559,
        $c508,
        $c533,
        $c552,
        $c603,
        $c507,
        $c506,
        $c556,
        $c557,
        $c558,
        $c543,
        $c573,
        $c598,
        $c39,
        $c554,
        $c736,
        $c597,
        $c555,
        $c596,
        $c725,
        $c737,
        $c727,
        $c704,
        $c705,
        $c706,
        $c160,
        $c161,
        $c570,
        $c126,
        $c128,
        $c571,
        $c572,
        $c568,
        $c590,
        $c547,
        $c728,
        $c707,
        $c73,
        $c130,
        $c591,
        $c6,
        $c610,
        $c611,
        $c612,
        $c8,
        $c53,
        $c613,
        $c9,
        $c601,
        $c604,
        $c55,
        $c44,
        $c726,
        $c313,
        $c314,
        $fecha,$ivapost,$ivanop);


            //echo "USU: ".$id_usu." EMP:".$id_emp ." Celda 585 :". $c585;
            //$ing_form = $dao->ing_form($usu->getUsu(),$emp->getEmp());
            $ing_form = $dao->ing_form($id_usu,$id_emp);                 
                    

                if(count($ing_form)==0){
                    echo "2";    
                }else{
                   echo "Formulario Ingresado Correctamente!";
                }
        }else{
            echo "-1"; 
        }
        
        
        
        
        
   	
        salir:
    } catch (Exception $e) {
       //ERROR DE BASE DE DATOS
       echo "1"; 
     }
?>