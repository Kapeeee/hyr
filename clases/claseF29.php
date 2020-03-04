<?php
require_once '../recursos/db/db.php';
/*/////////////////////////////
Clase F29
////////////////////////////*/
class formularioDAO    
{
    private $id_f29;
    private $c585;
    private $c20;
    private $c586;
    private $c142;
    private $c731;
    private $c732;
    private $c714;
    private $c715;
    private $c515;
    private $c587;
    private $c720;
    private $c503;
    private $c502;
    private $c763;
    private $c764;
    private $c716;
    private $c717;
    private $c110;
    private $c111;
    private $c758;
    private $c759;
    private $c512;
    private $c513;
    private $c509;
    private $c510;
    private $c708;
    private $c709;
    private $c733;
    private $c734;
    private $c516;
    private $c517;
    private $c500;
    private $c501;
    private $c154;
    private $c518;
    private $c713;
    private $c738;
    private $c739;
    private $c740;
    private $c741;
    private $c538;
    private $c511;
    private $c514;
    private $c564;
    private $c521;
    private $c566;
    private $c560;
    private $c584;
    private $c562;
    private $c519;
    private $c520;
    private $c761;
    private $c762;
    private $c765;
    private $c766;
    private $c524;
    private $c525;
    private $c527;
    private $c528;
    private $c531;
    private $c532;
    private $c534;
    private $c535;
    private $c536;
    private $c553;
    private $c504;
    private $c593;
    private $c594;
    private $c592;
    private $c539;
    private $c718;
    private $c164;
    private $c730;
    private $c742;
    private $c743;
    private $c127;
    private $c729;
    private $c744;
    private $c745;
    private $c544;
    private $c523;
    private $c712;
    private $c757;
    private $c537;
    private $c77;
    private $c89;
    private $c760;
    private $c50;
    private $c751;
    private $c735;
    private $c48;
    private $c151;
    private $c153;
    private $c54;
    private $c56;
    private $c588;
    private $c589;
    private $c30;
    private $c563;
    private $c115;
    private $c68;
    private $c62;
    private $c565;
    private $c120;
    private $c542;
    private $c122;
    private $c123;
    private $c700;
    private $c701;
    private $c702;
    private $c711;
    private $c703;
    private $c66;
    private $c152;
    private $c70;
    private $c595;
    private $c1;
    private $c2;
    private $c5;
    private $c583;
    private $c91;
    private $c92;
    private $c93;
    private $c94;
    private $c529;
    private $c530;
    private $c409;
    private $c522;
    private $c526;
    private $c113;
    private $c28;
    private $c548;
    private $c540;
    private $c541;
    private $c549;
    private $c550;
    private $c577;
    private $c32;
    private $c150;
    private $c146;
    private $c752;
    private $c545;
    private $c546;
    private $c710;
    private $c602;
    private $c575;
    private $c576;
    private $c574;
    private $c33;
    private $c580;
    private $c149;
    private $c582;
    private $c85;
    private $c753;
    private $c754;
    private $c551;
    private $c559;
    private $c508;
    private $c533;
    private $c552;
    private $c603;
    private $c507;
    private $c506;
    private $c556;
    private $c557;
    private $c558;
    private $c543;
    private $c573;
    private $c598;
    private $c39;
    private $c554;
    private $c736;
    private $c597;
    private $c555;
    private $c596;
    private $c725;
    private $c737;
    private $c727;
    private $c704;
    private $c705;
    private $c706;
    private $c160;
    private $c161;
    private $c570;
    private $c126;
    private $c128;
    private $c571;
    private $c572;
    private $c568;
    private $c590;
    private $c547;
    private $c728;
    private $c707;
    private $c73;
    private $c130;
    private $c591;
    private $c6; 
    private $c610;
    private $c611; 
    private $c612; 
    private $c8 ;
    private $c53 ;
    private $c613; 
    private $c9 ;
    private $c601; 
    private $c604; 
    private $c55 ;
    private $c44 ;
    private $c726; 
    private $c313; 
    private $c314;
    private $fecha;
    private $ivapost;
    private $ivanop;
    public function __construct(
                                $id_f29 = null,
                                $c585 = null,
                                $c20  = null,
                                $c586 = null,
                                $c142 = null,
                                $c731 = null,
                                $c732 = null,
                                $c714 = null,
                                $c715 = null,
                                $c515 = null,
                                $c587 = null,
                                $c720 = null,
                                $c503 = null,
                                $c502 = null,
                                $c763 = null,
                                $c764 = null,
                                $c716 = null,
                                $c717 = null,
                                $c110 = null,
                                $c111 = null,
                                $c758 = null,
                                $c759 = null,
                                $c512 = null,
                                $c513 = null,
                                $c509 = null,
                                $c510 = null,
                                $c708 = null,
                                $c709 = null,
                                $c733 = null,
                                $c734 = null,
                                $c516 = null,
                                $c517 = null,
                                $c500 = null,
                                $c501 = null,
                                $c154 = null,
                                $c518 = null,
                                $c713 = null,
                                $c738 = null,
                                $c739 = null,
                                $c740 = null,
                                $c741 = null,
                                $c538 = null,
                                $c511 = null,
                                $c514 = null,
                                $c564 = null,
                                $c521 = null,
                                $c566 = null,
                                $c560 = null,
                                $c584 = null,
                                $c562 = null,
                                $c519 = null,
                                $c520 = null,
                                $c761 = null,
                                $c762 = null,
                                $c765 = null,
                                $c766 = null,
                                $c524 = null,
                                $c525 = null,
                                $c527 = null,
                                $c528 = null,
                                $c531 = null,
                                $c532 = null,
                                $c534 = null,
                                $c535 = null,
                                $c536 = null,
                                $c553 = null,
                                $c504 = null,
                                $c593 = null,
                                $c594 = null,
                                $c592 = null,
                                $c539 = null,
                                $c718 = null,
                                $c164 = null,
                                $c730 = null,
                                $c742 = null,
                                $c743 = null,
                                $c127 = null,
                                $c729 = null,
                                $c744 = null,
                                $c745 = null,
                                $c544 = null,
                                $c523 = null,
                                $c712 = null,
                                $c757 = null,
                                $c537 = null,
                                $c77  = null,
                                $c89  = null,
                                $c760 = null,
                                $c50  = null,
                                $c751 = null,
                                $c735 = null,
                                $c48  = null,
                                $c151 = null,
                                $c153 = null,
                                $c54  = null,
                                $c56  = null,
                                $c588 = null,
                                $c589 = null,
                                $c30  = null,
                                $c563 = null,
                                $c115 = null,
                                $c68  = null,
                                $c62  = null,
                                $c565 = null,
                                $c120 = null,
                                $c542 = null,
                                $c122 = null,
                                $c123 = null,
                                $c700 = null,
                                $c701 = null,
                                $c702 = null,
                                $c711 = null,
                                $c703 = null,
                                $c66  = null,
                                $c152 = null,
                                $c70  = null,
                                $c595 = null,
                                $c1   = null,
                                $c2   = null,
                                $c5   = null,
                                $c583 = null,
                                $c91  = null,
                                $c92  = null,
                                $c93  = null,
                                $c94  = null,
                                $c529 = null,
                                $c530 = null,
                                $c409 = null,
                                $c522 = null,
                                $c526 = null,
                                $c113 = null,
                                $c28  = null,
                                $c548 = null,
                                $c540 = null,
                                $c541 = null,
                                $c549 = null,
                                $c550 = null,
                                $c577 = null,
                                $c32  = null,
                                $c150 = null,
                                $c146 = null,
                                $c752 = null,
                                $c545 = null,
                                $c546 = null,
                                $c710 = null,
                                $c602 = null,
                                $c575 = null,
                                $c576 = null,
                                $c574 = null,
                                $c33  = null,
                                $c580 = null,
                                $c149 = null,
                                $c582 = null,
                                $c85  = null,
                                $c753 = null,
                                $c754 = null,
                                $c551 = null,
                                $c559 = null,
                                $c508 = null,
                                $c533 = null,
                                $c552 = null,
                                $c603 = null,
                                $c507 = null,
                                $c506 = null,
                                $c556 = null,
                                $c557 = null,
                                $c558 = null,
                                $c543 = null,
                                $c573 = null,
                                $c598 = null,
                                $c39  = null,
                                $c554 = null,
                                $c736 = null,
                                $c597 = null,
                                $c555 = null,
                                $c596 = null,
                                $c725 = null,
                                $c737 = null,
                                $c727 = null,
                                $c704 = null,
                                $c705 = null,
                                $c706 = null,
                                $c160 = null,
                                $c161 = null,
                                $c570 = null,
                                $c126 = null,
                                $c128 = null,
                                $c571 = null,
                                $c572 = null,
                                $c568 = null,
                                $c590 = null,
                                $c547 = null,
                                $c728 = null,
                                $c707 = null,
                                $c73  = null,
                                $c130 = null,
                                $c591 = null,
                                $c6   = null,
                                $c610 = null,
                                $c611 = null,
                                $c612 = null,
                                $c8   = null,
                                $c53  = null,
                                $c613 = null,
                                $c9   = null,
                                $c601 = null,
                                $c604 = null,
                                $c55  = null,
                                $c44  = null,
                                $c726 = null,
                                $c313 = null,
                                $c314 = null,
                                $fecha = null,
                                $ivapost = null,
                                $ivanop = null
                                
                                ) 
                                {
                                    $this->id_f29   = $id_f29;
                                    $this->c585     = $c585; 
                                    $this->c20      = $c20;
                                    $this->c586     = $c586;
                                    $this->c142     = $c142;
                                    $this->c731     = $c731;
                                    $this->c732     = $c732;
                                    $this->c714     = $c714;
                                    $this->c715     = $c715;
                                    $this->c515     = $c515;
                                    $this->c587     = $c587;
                                    $this->c720     = $c720;
                                    $this->c503     = $c503;
                                    $this->c502     = $c502;
                                    $this->c763     = $c763;
                                    $this->c764     = $c764;
                                    $this->c716     = $c716;
                                    $this->c717     = $c717;
                                    $this->c110     = $c110;
                                    $this->c111     = $c111;
                                    $this->c758     = $c758;
                                    $this->c759     = $c759;
                                    $this->c512     = $c512;
                                    $this->c513     = $c513;
                                    $this->c509     = $c509;
                                    $this->c510     = $c510;
                                    $this->c708     = $c708;
                                    $this->c709     = $c709;
                                    $this->c733     = $c733;
                                    $this->c734     = $c734;
                                    $this->c516     = $c516;
                                    $this->c517     = $c517;
                                    $this->c500     = $c500;
                                    $this->c501     = $c501;
                                    $this->c154     = $c154;
                                    $this->c518     = $c518;
                                    $this->c713     = $c713;
                                    $this->c738     = $c738;
                                    $this->c739     = $c739;
                                    $this->c740     = $c740;
                                    $this->c741     = $c741;
                                    $this->c538     = $c538;
                                    $this->c511     = $c511;
                                    $this->c514     = $c514;
                                    $this->c564     = $c564;
                                    $this->c521     = $c521;
                                    $this->c566     = $c566;
                                    $this->c560     = $c560;
                                    $this->c584     = $c584;
                                    $this->c562     = $c562;
                                    $this->c519     = $c519;
                                    $this->c520     = $c520;
                                    $this->c761     = $c761;
                                    $this->c762     = $c762;
                                    $this->c765     = $c765;
                                    $this->c766     = $c766;
                                    $this->c524     = $c524;
                                    $this->c525     = $c525;
                                    $this->c527     = $c527;
                                    $this->c528     = $c528;
                                    $this->c531     = $c531;
                                    $this->c532     = $c532;
                                    $this->c534     = $c534;
                                    $this->c535     = $c535;
                                    $this->c536     = $c536;
                                    $this->c553     = $c553;
                                    $this->c504     = $c504;
                                    $this->c593     = $c593;
                                    $this->c594     = $c594;
                                    $this->c592     = $c592;
                                    $this->c539     = $c539;
                                    $this->c718     = $c718;
                                    $this->c164     = $c164;
                                    $this->c730     = $c730;
                                    $this->c742     = $c742;
                                    $this->c743     = $c743;
                                    $this->c127     = $c127;
                                    $this->c729     = $c729;
                                    $this->c744     = $c744;
                                    $this->c745     = $c745;
                                    $this->c544     = $c544;
                                    $this->c523     = $c523;
                                    $this->c712     = $c712;
                                    $this->c757     = $c757;
                                    $this->c537     = $c537;
                                    $this->c77      = $c77;
                                    $this->c89      = $c89;
                                    $this->c760     = $c760;
                                    $this->c50      = $c50;
                                    $this->c751     = $c751;
                                    $this->c735     = $c735;
                                    $this->c48      = $c48;
                                    $this->c151     = $c151;
                                    $this->c153     = $c153;
                                    $this->c54      = $c54;
                                    $this->c56      = $c56;
                                    $this->c588     = $c588;
                                    $this->c589     = $c589;
                                    $this->c30      = $c30;
                                    $this->c563     = $c563;
                                    $this->c115     = $c115;
                                    $this->c68      = $c68;
                                    $this->c62      = $c62;
                                    $this->c565     = $c565;
                                    $this->c120     = $c120;
                                    $this->c542     = $c542;
                                    $this->c122     = $c122;
                                    $this->c123     = $c123;
                                    $this->c700     = $c700;
                                    $this->c701     = $c701;
                                    $this->c702     = $c702;
                                    $this->c711     = $c711;
                                    $this->c703     = $c703;
                                    $this->c66      = $c66;
                                    $this->c152     = $c152;
                                    $this->c70      = $c70;
                                    $this->c595     = $c595;
                                    $this->c1       = $c1;
                                    $this->c2       = $c2;
                                    $this->c5       = $c5;
                                    $this->c583     = $c583;
                                    $this->c91      = $c91;
                                    $this->c92      = $c92;
                                    $this->c93      = $c93;
                                    $this->c94      = $c94;
                                    $this->c529     = $c529;
                                    $this->c530     = $c530;
                                    $this->c409     = $c409;
                                    $this->c522     = $c522;
                                    $this->c526     = $c526;
                                    $this->c113     = $c113;
                                    $this->c28      = $c28;
                                    $this->c548     = $c548;
                                    $this->c540     = $c540;
                                    $this->c541     = $c541;
                                    $this->c549     = $c549;
                                    $this->c550     = $c550;
                                    $this->c577     = $c577;
                                    $this->c32      = $c32;
                                    $this->c150     = $c150;
                                    $this->c146     = $c146;
                                    $this->c752     = $c752;
                                    $this->c545     = $c545;
                                    $this->c546     = $c546;
                                    $this->c710     = $c710;
                                    $this->c602     = $c602;
                                    $this->c575     = $c575;
                                    $this->c576     = $c576;
                                    $this->c574     = $c574;
                                    $this->c33      = $c33;
                                    $this->c580     = $c580;
                                    $this->c149     = $c149;
                                    $this->c582     = $c582;
                                    $this->c85      = $c85;
                                    $this->c753     = $c753;
                                    $this->c754     = $c754;
                                    $this->c551     = $c551;
                                    $this->c559     = $c559;
                                    $this->c508     = $c508;
                                    $this->c533     = $c533;
                                    $this->c552     = $c552;
                                    $this->c603     = $c603;
                                    $this->c507     = $c507;
                                    $this->c506     = $c506;
                                    $this->c556     = $c556;
                                    $this->c557     = $c557;
                                    $this->c558     = $c558;
                                    $this->c543     = $c543;
                                    $this->c573     = $c573;
                                    $this->c598     = $c598;
                                    $this->c39      = $c39;
                                    $this->c554     = $c554;
                                    $this->c736     = $c736;
                                    $this->c597     = $c597;
                                    $this->c555     = $c555;
                                    $this->c596     = $c596;
                                    $this->c725     = $c725;
                                    $this->c737     = $c737;
                                    $this->c727     = $c727;
                                    $this->c704     = $c704;
                                    $this->c705     = $c705;
                                    $this->c706     = $c706;
                                    $this->c160     = $c160;
                                    $this->c161     = $c161;
                                    $this->c570     = $c570;
                                    $this->c126     = $c126;
                                    $this->c128     = $c128;
                                    $this->c571     = $c571;
                                    $this->c572     = $c572;
                                    $this->c568     = $c568;
                                    $this->c590     = $c590;
                                    $this->c547     = $c547;
                                    $this->c728     = $c728;
                                    $this->c707     = $c707;
                                    $this->c73      = $c73;
                                    $this->c130     = $c130;
                                    $this->c591     = $c591;
                                    $this->c6       = $c6;
                                    $this->c610     = $c610;
                                    $this->c611     = $c611;
                                    $this->c612     = $c612;
                                    $this->c8       = $c8;
                                    $this->c53      = $c53;
                                    $this->c613     = $c613;
                                    $this->c9       = $c9;
                                    $this->c601     = $c601;
                                    $this->c604     = $c604;
                                    $this->c55      = $c55;
                                    $this->c44      = $c44;
                                    $this->c726     = $c726;
                                    $this->c313     = $c313;
                                    $this->c314     = $c314;
                                    $this->fecha    = $fecha;
                                    $this->ivapost  = $ivapost;
                                    $this->ivanop   = $ivanop;
                                }
    public function getf29() 
    {
        return $this->id_f29;
    }
    /*///////////////////////////////////////
    Ingresar Formulario
    //////////////////////////////////////*/
    public function ing_form($usu_f29,$emp_f29) {
        try{
             
                $pdo = AccesoDB::getCon();
                $sql_ing_form = "INSERT INTO `f29` (`usu_reg_doc`,
                                                    `id_emp`,
                                                    `c585`,
                                                    `c20`,
                                                    `c586`,
                                                    `c142`,
                                                    `c731`,
                                                    `c732`,
                                                    `c714`,
                                                    `c715`,
                                                    `c515`,
                                                    `c587`,
                                                    `c720`,
                                                    `c503`,
                                                    `c502`,
                                                    `c763`,
                                                    `c764`,
                                                    `c716`,
                                                    `c717`,
                                                    `c110`,
                                                    `c111`,
                                                    `c758`,
                                                    `c759`,
                                                    `c512`,
                                                    `c513`,
                                                    `c509`,
                                                    `c510`,
                                                    `c708`,
                                                    `c709`,
                                                    `c733`,
                                                    `c734`,
                                                    `c516`,
                                                    `c517`,
                                                    `c500`,
                                                    `c501`,
                                                    `c154`,
                                                    `c518`,
                                                    `c713`,
                                                    `c738`,
                                                    `c739`,
                                                    `c740`,
                                                    `c741`,
                                                    `c538`,
                                                    `c511`,
                                                    `c514`,
                                                    `c564`,
                                                    `c521`,
                                                    `c566`,
                                                    `c560`,
                                                    `c584`,
                                                    `c562`,
                                                    `c519`,
                                                    `c520`,
                                                    `c761`,
                                                    `c762`,
                                                    `c765`,
                                                    `c766`,
                                                    `c524`,
                                                    `c525`,
                                                    `c527`,
                                                    `c528`,
                                                    `c531`,
                                                    `c532`,
                                                    `c534`,
                                                    `c535`,
                                                    `c536`,
                                                    `c553`,
                                                    `c504`,
                                                    `c593`,
                                                    `c594`,
                                                    `c592`,
                                                    `c539`,
                                                    `c718`,
                                                    `c164`,
                                                    `c730`,
                                                    `c742`,
                                                    `c743`,
                                                    `c127`,
                                                    `c729`,
                                                    `c744`,
                                                    `c745`,
                                                    `c544`,
                                                    `c523`,
                                                    `c712`,
                                                    `c757`,
                                                    `c537`,
                                                    `c77`,
                                                    `c89`,
                                                    `c760`,
                                                    `c50`,
                                                    `c751`,
                                                    `c735`,
                                                    `c48`,
                                                    `c151`,
                                                    `c153`,
                                                    `c54`,
                                                    `c56`,
                                                    `c588`,
                                                    `c589`,
                                                    `c30`,
                                                    `c563`,
                                                    `c115`,
                                                    `c68`,
                                                    `c62`,
                                                    `c565`,
                                                    `c120`,
                                                    `c542`,
                                                    `c122`,
                                                    `c123`,
                                                    `c700`,
                                                    `c701`,
                                                    `c702`,
                                                    `c711`,
                                                    `c703`,
                                                    `c66`,
                                                    `c152`,
                                                    `c70`,
                                                    `c595`,
                                                    `c1`,
                                                    `c2`,
                                                    `c5`,
                                                    `c583`,
                                                    `c91`,
                                                    `c92`,
                                                    `c93`,
                                                    `c94`,
                                                    `c529`,
                                                    `c530`,
                                                    `c409`,
                                                    `c522`,
                                                    `c526`,
                                                    `c113`,
                                                    `c28`,
                                                    `c548`,
                                                    `c540`,
                                                    `c541`,
                                                    `c549`,
                                                    `c550`,
                                                    `c577`,
                                                    `c32`,
                                                    `c150`,
                                                    `c146`,
                                                    `c752`,
                                                    `c545`,
                                                    `c546`,
                                                    `c710`,
                                                    `c602`,
                                                    `c575`,
                                                    `c576`,
                                                    `c574`,
                                                    `c33`,
                                                    `c580`,
                                                    `c149`,
                                                    `c582`,
                                                    `c85`,
                                                    `c753`,
                                                    `c754`,
                                                    `c551`,
                                                    `c559`,
                                                    `c508`,
                                                    `c533`,
                                                    `c552`,
                                                    `c603`,
                                                    `c507`,
                                                    `c506`,
                                                    `c556`,
                                                    `c557`,
                                                    `c558`,
                                                    `c543`,
                                                    `c573`,
                                                    `c598`,
                                                    `c39`,
                                                    `c554`,
                                                    `c736`,
                                                    `c597`,
                                                    `c555`,
                                                    `c596`,
                                                    `c725`,
                                                    `c737`,
                                                    `c727`,
                                                    `c704`,
                                                    `c705`,
                                                    `c706`,
                                                    `c160`,
                                                    `c161`,
                                                    `c570`,
                                                    `c126`,
                                                    `c128`,
                                                    `c571`,
                                                    `c572`,
                                                    `c568`,
                                                    `c590`,
                                                    `c547`,
                                                    `c728`,
                                                    `c707`,
                                                    `c73`,
                                                    `c130`,
                                                    `c591`,
                                                    `c6`,
                                                    `c610`,
                                                    `c611`,
                                                    `c612`,
                                                    `c8`,
                                                    `c53`,
                                                    `c613`,
                                                    `c9`,
                                                    `c601`,
                                                    `c604`,
                                                    `c55`,
                                                    `c44`,
                                                    `c726`,
                                                    `c313`,
                                                    `c314`,
                                                    `fecha_form`,
                                                    `ivapost`,
                                                    `ivanop`
                                                    )
                
                            VALUES         (:usu_reg_doc,
                                            :id_emp,
                                            :c585, 
                                            :c20,
                                            :c586,
                                            :c142,
                                            :c731,
                                            :c732,
                                            :c714,
                                            :c715,
                                            :c515,
                                            :c587,
                                            :c720,
                                            :c503,
                                            :c502,
                                            :c763,
                                            :c764,
                                            :c716,
                                            :c717,
                                            :c110,
                                            :c111,
                                            :c758,
                                            :c759,
                                            :c512,
                                            :c513,
                                            :c509,
                                            :c510,
                                            :c708,
                                            :c709,
                                            :c733,
                                            :c734,
                                            :c516,
                                            :c517,
                                            :c500,
                                            :c501,
                                            :c154,
                                            :c518,
                                            :c713,
                                            :c738,
                                            :c739,
                                            :c740,
                                            :c741,
                                            :c538,
                                            :c511,
                                            :c514,
                                            :c564,
                                            :c521,
                                            :c566,
                                            :c560,
                                            :c584,
                                            :c562,
                                            :c519,
                                            :c520,
                                            :c761,
                                            :c762,
                                            :c765,
                                            :c766,
                                            :c524,
                                            :c525,
                                            :c527,
                                            :c528,
                                            :c531,
                                            :c532,
                                            :c534,
                                            :c535,
                                            :c536,
                                            :c553,
                                            :c504,
                                            :c593,
                                            :c594,
                                            :c592,
                                            :c539,
                                            :c718,
                                            :c164,
                                            :c730,
                                            :c742,
                                            :c743,
                                            :c127,
                                            :c729,
                                            :c744,
                                            :c745,
                                            :c544,
                                            :c523,
                                            :c712,
                                            :c757,
                                            :c537,
                                            :c77,
                                            :c89,
                                            :c760,
                                            :c50,
                                            :c751,
                                            :c735,
                                            :c48,
                                            :c151,
                                            :c153,
                                            :c54,
                                            :c56,
                                            :c588,
                                            :c589,
                                            :c30,
                                            :c563,
                                            :c115,
                                            :c68,
                                            :c62,
                                            :c565,
                                            :c120,
                                            :c542,
                                            :c122,
                                            :c123,
                                            :c700,
                                            :c701,
                                            :c702,
                                            :c711,
                                            :c703,
                                            :c66,
                                            :c152,
                                            :c70,
                                            :c595,
                                            :c1,
                                            :c2,
                                            :c5,
                                            :c583,
                                            :c91,
                                            :c92,
                                            :c93,
                                            :c94,
                                            :c529,
                                            :c530,
                                            :c409,
                                            :c522,
                                            :c526,
                                            :c113,
                                            :c28,
                                            :c548,
                                            :c540,
                                            :c541,
                                            :c549,
                                            :c550,
                                            :c577,
                                            :c32,
                                            :c150,
                                            :c146,
                                            :c752,
                                            :c545,
                                            :c546,
                                            :c710,
                                            :c602,
                                            :c575,
                                            :c576,
                                            :c574,
                                            :c33,
                                            :c580,
                                            :c149,
                                            :c582,
                                            :c85,
                                            :c753,
                                            :c754,
                                            :c551,
                                            :c559,
                                            :c508,
                                            :c533,
                                            :c552,
                                            :c603,
                                            :c507,
                                            :c506,
                                            :c556,
                                            :c557,
                                            :c558,
                                            :c543,
                                            :c573,
                                            :c598,
                                            :c39,
                                            :c554,
                                            :c736,
                                            :c597,
                                            :c555,
                                            :c596,
                                            :c725,
                                            :c737,
                                            :c727,
                                            :c704,
                                            :c705,
                                            :c706,
                                            :c160,
                                            :c161,
                                            :c570,
                                            :c126,
                                            :c128,
                                            :c571,
                                            :c572,
                                            :c568,
                                            :c590,
                                            :c547,
                                            :c728,
                                            :c707,
                                            :c73,
                                            :c130,
                                            :c591,
                                            :c6,
                                            :c610,
                                            :c611,
                                            :c612,
                                            :c8,
                                            :c53,
                                            :c613,
                                            :c9,
                                            :c601,
                                            :c604,
                                            :c55,
                                            :c44,
                                            :c726,
                                            :c313,
                                            :c314,
                                            :fecha,
                                            :ivapost,
                                            :ivanop);";
                $stmt = $pdo->prepare($sql_ing_form);
             
                
                $stmt->bindParam(":usu_reg_doc",$usu_f29, PDO::PARAM_INT);
                $stmt->bindParam(":id_emp", $emp_f29, PDO::PARAM_INT);
                $stmt->bindParam(":c585", $this->c585, PDO::PARAM_INT);
                $stmt->bindParam(":c20", $this->c20 , PDO::PARAM_INT);
                $stmt->bindParam(":c586", $this->c586, PDO::PARAM_INT);
                $stmt->bindParam(":c142", $this->c142, PDO::PARAM_INT);
                $stmt->bindParam(":c731", $this->c731, PDO::PARAM_INT);
                $stmt->bindParam(":c732", $this->c732, PDO::PARAM_INT);
                $stmt->bindParam(":c714", $this->c714, PDO::PARAM_INT);
                $stmt->bindParam(":c715", $this->c715, PDO::PARAM_INT);
                $stmt->bindParam(":c515", $this->c515, PDO::PARAM_INT);
                $stmt->bindParam(":c587", $this->c587, PDO::PARAM_INT);
                $stmt->bindParam(":c720", $this->c720, PDO::PARAM_INT);
                $stmt->bindParam(":c503", $this->c503, PDO::PARAM_INT);
                $stmt->bindParam(":c502", $this->c502, PDO::PARAM_INT);
                $stmt->bindParam(":c763", $this->c763, PDO::PARAM_INT);
                $stmt->bindParam(":c764", $this->c764, PDO::PARAM_INT);
                $stmt->bindParam(":c716", $this->c716, PDO::PARAM_INT);
                $stmt->bindParam(":c717", $this->c717, PDO::PARAM_INT);
                $stmt->bindParam(":c110", $this->c110, PDO::PARAM_INT);
                $stmt->bindParam(":c111", $this->c111, PDO::PARAM_INT);
                $stmt->bindParam(":c758", $this->c758, PDO::PARAM_INT);
                $stmt->bindParam(":c759", $this->c759, PDO::PARAM_INT);
                $stmt->bindParam(":c512", $this->c512, PDO::PARAM_INT);
                $stmt->bindParam(":c513", $this->c513, PDO::PARAM_INT);
                $stmt->bindParam(":c509", $this->c509, PDO::PARAM_INT);
                $stmt->bindParam(":c510", $this->c510, PDO::PARAM_INT);
                $stmt->bindParam(":c708", $this->c708, PDO::PARAM_INT);
                $stmt->bindParam(":c709", $this->c709, PDO::PARAM_INT);
                $stmt->bindParam(":c733", $this->c733, PDO::PARAM_INT);
                $stmt->bindParam(":c734", $this->c734, PDO::PARAM_INT);
                $stmt->bindParam(":c516", $this->c516, PDO::PARAM_INT);
                $stmt->bindParam(":c517", $this->c517, PDO::PARAM_INT);
                $stmt->bindParam(":c500", $this->c500, PDO::PARAM_INT);
                $stmt->bindParam(":c501", $this->c501, PDO::PARAM_INT);
                $stmt->bindParam(":c154", $this->c154, PDO::PARAM_INT);
                $stmt->bindParam(":c518", $this->c518, PDO::PARAM_INT);
                $stmt->bindParam(":c713", $this->c713, PDO::PARAM_INT);
                $stmt->bindParam(":c738", $this->c738, PDO::PARAM_INT);
                $stmt->bindParam(":c739", $this->c739, PDO::PARAM_INT);
                $stmt->bindParam(":c740", $this->c740, PDO::PARAM_INT);
                $stmt->bindParam(":c741", $this->c741, PDO::PARAM_INT);
                $stmt->bindParam(":c538", $this->c538, PDO::PARAM_INT);
                $stmt->bindParam(":c511", $this->c511, PDO::PARAM_INT);
                $stmt->bindParam(":c514", $this->c514, PDO::PARAM_INT);
                $stmt->bindParam(":c564", $this->c564, PDO::PARAM_INT);
                $stmt->bindParam(":c521", $this->c521, PDO::PARAM_INT);
                $stmt->bindParam(":c566", $this->c566, PDO::PARAM_INT);
                $stmt->bindParam(":c560", $this->c560, PDO::PARAM_INT);
                $stmt->bindParam(":c584", $this->c584, PDO::PARAM_INT);
                $stmt->bindParam(":c562", $this->c562, PDO::PARAM_INT);
                $stmt->bindParam(":c519", $this->c519, PDO::PARAM_INT);
                $stmt->bindParam(":c520", $this->c520, PDO::PARAM_INT);
                $stmt->bindParam(":c761", $this->c761, PDO::PARAM_INT);
                $stmt->bindParam(":c762", $this->c762, PDO::PARAM_INT);
                $stmt->bindParam(":c765", $this->c765, PDO::PARAM_INT);
                $stmt->bindParam(":c766", $this->c766, PDO::PARAM_INT);
                $stmt->bindParam(":c524", $this->c524, PDO::PARAM_INT);
                $stmt->bindParam(":c525", $this->c525, PDO::PARAM_INT);
                $stmt->bindParam(":c527", $this->c527, PDO::PARAM_INT);
                $stmt->bindParam(":c528", $this->c528, PDO::PARAM_INT);
                $stmt->bindParam(":c531", $this->c531, PDO::PARAM_INT);
                $stmt->bindParam(":c532", $this->c532, PDO::PARAM_INT);
                $stmt->bindParam(":c534", $this->c534, PDO::PARAM_INT);
                $stmt->bindParam(":c535", $this->c535, PDO::PARAM_INT);
                $stmt->bindParam(":c536", $this->c536, PDO::PARAM_INT);
                $stmt->bindParam(":c553", $this->c553, PDO::PARAM_INT);
                $stmt->bindParam(":c504", $this->c504, PDO::PARAM_INT);
                $stmt->bindParam(":c593", $this->c593, PDO::PARAM_INT);
                $stmt->bindParam(":c594", $this->c594, PDO::PARAM_INT);
                $stmt->bindParam(":c592", $this->c592, PDO::PARAM_INT);
                $stmt->bindParam(":c539", $this->c539, PDO::PARAM_INT);
                $stmt->bindParam(":c718", $this->c718, PDO::PARAM_INT);
                $stmt->bindParam(":c164", $this->c164, PDO::PARAM_INT);
                $stmt->bindParam(":c730", $this->c730, PDO::PARAM_INT);
                $stmt->bindParam(":c742", $this->c742, PDO::PARAM_INT);
                $stmt->bindParam(":c743", $this->c743, PDO::PARAM_INT);
                $stmt->bindParam(":c127", $this->c127, PDO::PARAM_INT);
                $stmt->bindParam(":c729", $this->c729, PDO::PARAM_INT);
                $stmt->bindParam(":c744", $this->c744, PDO::PARAM_INT);
                $stmt->bindParam(":c745", $this->c745, PDO::PARAM_INT);
                $stmt->bindParam(":c544", $this->c544, PDO::PARAM_INT);
                $stmt->bindParam(":c523", $this->c523, PDO::PARAM_INT);
                $stmt->bindParam(":c712", $this->c712, PDO::PARAM_INT);
                $stmt->bindParam(":c757", $this->c757, PDO::PARAM_INT);
                $stmt->bindParam(":c537", $this->c537, PDO::PARAM_INT);
                $stmt->bindParam(":c77", $this->c77, PDO::PARAM_INT);
                $stmt->bindParam(":c89", $this->c89, PDO::PARAM_INT);
                $stmt->bindParam(":c760", $this->c760, PDO::PARAM_INT);
                $stmt->bindParam(":c50", $this->c50, PDO::PARAM_INT);
                $stmt->bindParam(":c751", $this->c751, PDO::PARAM_INT);
                $stmt->bindParam(":c735", $this->c735, PDO::PARAM_INT);
                $stmt->bindParam(":c48", $this->c48, PDO::PARAM_INT);
                $stmt->bindParam(":c151", $this->c151, PDO::PARAM_INT);
                $stmt->bindParam(":c153", $this->c153, PDO::PARAM_INT);
                $stmt->bindParam(":c54", $this->c54, PDO::PARAM_INT);
                $stmt->bindParam(":c56", $this->c56, PDO::PARAM_INT);
                $stmt->bindParam(":c588", $this->c588, PDO::PARAM_INT);
                $stmt->bindParam(":c589", $this->c589, PDO::PARAM_INT);
                $stmt->bindParam(":c30", $this->c30, PDO::PARAM_INT);
                $stmt->bindParam(":c563", $this->c563, PDO::PARAM_INT);
                $stmt->bindParam(":c115", $this->c115, PDO::PARAM_INT);
                $stmt->bindParam(":c68", $this->c68, PDO::PARAM_INT);
                $stmt->bindParam(":c62", $this->c62, PDO::PARAM_INT);
                $stmt->bindParam(":c565", $this->c565, PDO::PARAM_INT);
                $stmt->bindParam(":c120", $this->c120, PDO::PARAM_INT);
                $stmt->bindParam(":c542", $this->c542, PDO::PARAM_INT);
                $stmt->bindParam(":c122", $this->c122, PDO::PARAM_INT);
                $stmt->bindParam(":c123", $this->c123, PDO::PARAM_INT);
                $stmt->bindParam(":c700", $this->c700, PDO::PARAM_INT);
                $stmt->bindParam(":c701", $this->c701, PDO::PARAM_INT);
                $stmt->bindParam(":c702", $this->c702, PDO::PARAM_INT);
                $stmt->bindParam(":c711", $this->c711, PDO::PARAM_INT);
                $stmt->bindParam(":c703", $this->c703, PDO::PARAM_INT);
                $stmt->bindParam(":c66", $this->c66 , PDO::PARAM_INT);
                $stmt->bindParam(":c152", $this->c152, PDO::PARAM_INT);
                $stmt->bindParam(":c70", $this->c70, PDO::PARAM_INT);
                $stmt->bindParam(":c595", $this->c595, PDO::PARAM_INT);
                $stmt->bindParam(":c1", $this->c1, PDO::PARAM_STR);
                $stmt->bindParam(":c2", $this->c2, PDO::PARAM_STR);
                $stmt->bindParam(":c5", $this->c5, PDO::PARAM_STR);
                $stmt->bindParam(":c583", $this->c583, PDO::PARAM_STR);
                $stmt->bindParam(":c91", $this->c91, PDO::PARAM_INT);
                $stmt->bindParam(":c92", $this->c92, PDO::PARAM_INT);
                $stmt->bindParam(":c93", $this->c93, PDO::PARAM_INT);
                $stmt->bindParam(":c94", $this->c94, PDO::PARAM_INT);
                $stmt->bindParam(":c529", $this->c529, PDO::PARAM_INT);
                $stmt->bindParam(":c530", $this->c530, PDO::PARAM_INT);
                $stmt->bindParam(":c409", $this->c409, PDO::PARAM_INT);
                $stmt->bindParam(":c522", $this->c522, PDO::PARAM_INT);
                $stmt->bindParam(":c526", $this->c526, PDO::PARAM_INT);
                $stmt->bindParam(":c113", $this->c113, PDO::PARAM_INT);
                $stmt->bindParam(":c28", $this->c28, PDO::PARAM_INT);
                $stmt->bindParam(":c548", $this->c548, PDO::PARAM_INT);
                $stmt->bindParam(":c540", $this->c540, PDO::PARAM_INT);
                $stmt->bindParam(":c541", $this->c541, PDO::PARAM_INT);
                $stmt->bindParam(":c549", $this->c549, PDO::PARAM_INT);
                $stmt->bindParam(":c550", $this->c550, PDO::PARAM_INT);
                $stmt->bindParam(":c577", $this->c577, PDO::PARAM_INT);
                $stmt->bindParam(":c32", $this->c32, PDO::PARAM_INT);
                $stmt->bindParam(":c150", $this->c150, PDO::PARAM_INT);
                $stmt->bindParam(":c146", $this->c146, PDO::PARAM_INT);
                $stmt->bindParam(":c752", $this->c752, PDO::PARAM_INT);
                $stmt->bindParam(":c545", $this->c545, PDO::PARAM_INT);
                $stmt->bindParam(":c546", $this->c546, PDO::PARAM_INT);
                $stmt->bindParam(":c710", $this->c710, PDO::PARAM_INT);
                $stmt->bindParam(":c602", $this->c602, PDO::PARAM_INT);
                $stmt->bindParam(":c575", $this->c575, PDO::PARAM_INT);
                $stmt->bindParam(":c576", $this->c576, PDO::PARAM_INT);
                $stmt->bindParam(":c574", $this->c574, PDO::PARAM_INT);
                $stmt->bindParam(":c33", $this->c33, PDO::PARAM_INT);
                $stmt->bindParam(":c580", $this->c580, PDO::PARAM_INT);
                $stmt->bindParam(":c149", $this->c149, PDO::PARAM_INT);
                $stmt->bindParam(":c582", $this->c582, PDO::PARAM_INT);
                $stmt->bindParam(":c85", $this->c85, PDO::PARAM_INT);
                $stmt->bindParam(":c753", $this->c753, PDO::PARAM_INT);
                $stmt->bindParam(":c754", $this->c754, PDO::PARAM_INT);
                $stmt->bindParam(":c551", $this->c551, PDO::PARAM_INT);
                $stmt->bindParam(":c559", $this->c559, PDO::PARAM_INT);
                $stmt->bindParam(":c508", $this->c508, PDO::PARAM_INT);
                $stmt->bindParam(":c533", $this->c533, PDO::PARAM_INT);
                $stmt->bindParam(":c552", $this->c552, PDO::PARAM_INT);
                $stmt->bindParam(":c603", $this->c603, PDO::PARAM_INT);
                $stmt->bindParam(":c507", $this->c507, PDO::PARAM_INT);
                $stmt->bindParam(":c506", $this->c506, PDO::PARAM_INT);
                $stmt->bindParam(":c556", $this->c556, PDO::PARAM_INT);
                $stmt->bindParam(":c557", $this->c557, PDO::PARAM_INT);
                $stmt->bindParam(":c558", $this->c558, PDO::PARAM_INT);
                $stmt->bindParam(":c543", $this->c543, PDO::PARAM_INT);
                $stmt->bindParam(":c573", $this->c573, PDO::PARAM_INT);
                $stmt->bindParam(":c598", $this->c598, PDO::PARAM_INT);
                $stmt->bindParam(":c39", $this->c39, PDO::PARAM_INT);
                $stmt->bindParam(":c554", $this->c554, PDO::PARAM_INT);
                $stmt->bindParam(":c736", $this->c736, PDO::PARAM_INT);
                $stmt->bindParam(":c597", $this->c597, PDO::PARAM_INT);
                $stmt->bindParam(":c555", $this->c555, PDO::PARAM_INT);
                $stmt->bindParam(":c596", $this->c596, PDO::PARAM_INT);
                $stmt->bindParam(":c725", $this->c725, PDO::PARAM_INT);
                $stmt->bindParam(":c737", $this->c737, PDO::PARAM_INT);
                $stmt->bindParam(":c727", $this->c727, PDO::PARAM_INT);
                $stmt->bindParam(":c704", $this->c704, PDO::PARAM_INT);
                $stmt->bindParam(":c705", $this->c705, PDO::PARAM_INT);
                $stmt->bindParam(":c706", $this->c706, PDO::PARAM_INT);
                $stmt->bindParam(":c160", $this->c160, PDO::PARAM_INT);
                $stmt->bindParam(":c161", $this->c161, PDO::PARAM_INT);
                $stmt->bindParam(":c570", $this->c570, PDO::PARAM_INT);
                $stmt->bindParam(":c126", $this->c126, PDO::PARAM_INT);
                $stmt->bindParam(":c128", $this->c128, PDO::PARAM_INT);
                $stmt->bindParam(":c571", $this->c571, PDO::PARAM_INT);
                $stmt->bindParam(":c572", $this->c572, PDO::PARAM_INT);
                $stmt->bindParam(":c568", $this->c568, PDO::PARAM_INT);
                $stmt->bindParam(":c590", $this->c590, PDO::PARAM_INT);
                $stmt->bindParam(":c547", $this->c547, PDO::PARAM_INT);
                $stmt->bindParam(":c728", $this->c728, PDO::PARAM_INT);
                $stmt->bindParam(":c707", $this->c707, PDO::PARAM_INT);
                $stmt->bindParam(":c73", $this->c73, PDO::PARAM_INT);
                $stmt->bindParam(":c130", $this->c130, PDO::PARAM_INT);
                $stmt->bindParam(":c591", $this->c591, PDO::PARAM_INT);
                $stmt->bindParam(":c6", $this->c6, PDO::PARAM_STR);
                $stmt->bindParam(":c610", $this->c610, PDO::PARAM_STR);
                $stmt->bindParam(":c611", $this->c611, PDO::PARAM_STR);
                $stmt->bindParam(":c612", $this->c612, PDO::PARAM_STR);
                $stmt->bindParam(":c8", $this->c8, PDO::PARAM_STR);
                $stmt->bindParam(":c53", $this->c53, PDO::PARAM_STR);
                $stmt->bindParam(":c613", $this->c613, PDO::PARAM_STR);
                $stmt->bindParam(":c9", $this->c9, PDO::PARAM_STR);
                $stmt->bindParam(":c601", $this->c601, PDO::PARAM_STR);
                $stmt->bindParam(":c604", $this->c604, PDO::PARAM_STR);
                $stmt->bindParam(":c55", $this->c55, PDO::PARAM_STR);
                $stmt->bindParam(":c44", $this->c44, PDO::PARAM_STR);
                $stmt->bindParam(":c726", $this->c726, PDO::PARAM_STR);
                $stmt->bindParam(":c313", $this->c313, PDO::PARAM_STR);
                $stmt->bindParam(":c314", $this->c314, PDO::PARAM_STR);
                $stmt->bindParam(":fecha", $this->fecha, PDO::PARAM_STR);
                $stmt->bindParam(":c707", $this->c707, PDO::PARAM_INT);
                $stmt->bindParam(":ivapost", $this->ivapost, PDO::PARAM_INT);
                $stmt->bindParam(":ivanop", $this->ivanop, PDO::PARAM_INT);
                $stmt->execute();
                
                return $stmt->rowCount();
                 
        
            } catch (Exception $e) {
                echo"-1";
                echo $e->getMessage();
            }
    }
    /*///////////////////////////////////////
    //////////Modificar Fomrulario//////////////
    ///////////////////////////////////////*/
    public function mod_form() {
        try{
             
                $pdo = AccesoDB::getCon();
                $sql_mod_emp = "UPDATE `f29`
                                    SET
                                        `c585` = :c585,
                                        `c20` = :c20,
                                        `c586` = :c586,
                                        `c142` = :c142,
                                        `c731` = :c731,
                                        `c732` = :c732,
                                        `c714` = :c714,
                                        `c715` = :c715,
                                        `c515` = :c515,
                                        `c587` = :c587,
                                        `c720` = :c720,
                                        `c503` = :c503,
                                        `c502` = :c502,
                                        `c763` = :c763,
                                        `c764` = :c764,
                                        `c716` = :c716,
                                        `c717` = :c717,
                                        `c110` = :c110,
                                        `c111` = :c111,
                                        `c758` = :c758,
                                        `c759` = :c759,
                                        `c512` = :c512,
                                        `c513` = :c513,
                                        `c509` = :c509,
                                        `c510` = :c510,
                                        `c708` = :c708,
                                        `c709` = :c709,
                                        `c733` = :c733,
                                        `c734` = :c734,
                                        `c516` = :c516,
                                        `c517` = :c517,
                                        `c500` = :c500,
                                        `c501` = :c501,
                                        `c154` = :c154,
                                        `c518` = :c518,
                                        `c713` = :c713,
                                        `c738` = :c738,
                                        `c739` = :c739,
                                        `c740` = :c740,
                                        `c741` = :c741,
                                        `c538` = :c538,
                                        `c511` = :c511,
                                        `c514` = :c514,
                                        `c564` = :c564,
                                        `c521` = :c521,
                                        `c566` = :c566,
                                        `c560` = :c560,
                                        `c584` = :c584,
                                        `c562` = :c562,
                                        `c519` = :c519,
                                        `c520` = :c520,
                                        `c761` = :c761,
                                        `c762` = :c762,
                                        `c765` = :c765,
                                        `c766` = :c766,
                                        `c524` = :c524,
                                        `c525` = :c525,
                                        `c527` = :c527,
                                        `c528` = :c528,
                                        `c531` = :c531,
                                        `c532` = :c532,
                                        `c534` = :c534,
                                        `c535` = :c535,
                                        `c536` = :c536,
                                        `c553` = :c553,
                                        `c504` = :c504,
                                        `c593` = :c593,
                                        `c594` = :c594,
                                        `c592` = :c592,
                                        `c539` = :c539,
                                        `c718` = :c718,
                                        `c164` = :c164,
                                        `c730` = :c730,
                                        `c742` = :c742,
                                        `c743` = :c743,
                                        `c127` = :c127,
                                        `c729` = :c729,
                                        `c744` = :c744,
                                        `c745` = :c745,
                                        `c544` = :c544,
                                        `c523` = :c523,
                                        `c712` = :c712,
                                        `c757` = :c757,
                                        `c537` = :c537,
                                        `c77` = :c77,
                                        `c89` = :c89,
                                        `c760` = :c760,
                                        `c50` = :c50,
                                        `c751` = :c751,
                                        `c735` = :c735,
                                        `c48` = :c48,
                                        `c151` = :c151,
                                        `c153` = :c153,
                                        `c54` = :c54,
                                        `c56` = :c56,
                                        `c588` = :c588,
                                        `c589` = :c589,
                                        `c30` = :c30,
                                        `c563` = :c563,
                                        `c115` = :c115,
                                        `c68` = :c68,
                                        `c62` = :c62,
                                        `c565` = :c565,
                                        `c120` = :c120,
                                        `c542` = :c542,
                                        `c122` = :c122,
                                        `c123` = :c123,
                                        `c700` = :c700,
                                        `c701` = :c701,
                                        `c702` = :c702,
                                        `c711` = :c711,
                                        `c703` = :c703,
                                        `c66` = :c66,
                                        `c152` = :c152,
                                        `c70` = :c70,
                                        `c595` = :c595,
                                        `c1` = :c1,
                                        `c2` = :c2,
                                        `c5` = :c5,
                                        `c583` = :c583,
                                        `c91` = :c91,
                                        `c92` = :c92,
                                        `c93` = :c93,
                                        `c94` = :c94,
                                        `c529` = :c529,
                                        `c530` = :c530,
                                        `c409` = :c409,
                                        `c522` = :c522,
                                        `c526` = :c526,
                                        `c113` = :c113,
                                        `c28` = :c28,
                                        `c548` = :c548,
                                        `c540` = :c540,
                                        `c541` = :c541,
                                        `c549` = :c549,
                                        `c550` = :c550,
                                        `c577` = :c577,
                                        `c32` = :c32,
                                        `c150` = :c150,
                                        `c146` = :c146,
                                        `c752` = :c752,
                                        `c545` = :c545,
                                        `c546` = :c546,
                                        `c710` = :c710,
                                        `c602` = :c602,
                                        `c575` = :c575,
                                        `c576` = :c576,
                                        `c574` = :c574,
                                        `c33` = :c33,
                                        `c580` = :c580,
                                        `c149` = :c149,
                                        `c582` = :c582,
                                        `c85` = :c85,
                                        `c753` = :c753,
                                        `c754` = :c754,
                                        `c551` = :c551,
                                        `c559` = :c559,
                                        `c508` = :c508,
                                        `c533` = :c533,
                                        `c552` = :c552,
                                        `c603` = :c603,
                                        `c507` = :c507,
                                        `c506` = :c506,
                                        `c556` = :c556,
                                        `c557` = :c557,
                                        `c558` = :c558,
                                        `c543` = :c543,
                                        `c573` = :c573,
                                        `c598` = :c598,
                                        `c39` = :c39,
                                        `c554` = :c554,
                                        `c736` = :c736,
                                        `c597` = :c597,
                                        `c555` = :c555,
                                        `c596` = :c596,
                                        `c725` = :c725,
                                        `c737` = :c737,
                                        `c727` = :c727,
                                        `c704` = :c704,
                                        `c705` = :c705,
                                        `c706` = :c706,
                                        `c160` = :c160,
                                        `c161` = :c161,
                                        `c570` = :c570,
                                        `c126` = :c126,
                                        `c128` = :c128,
                                        `c571` = :c571,
                                        `c572` = :c572,
                                        `c568` = :c568,
                                        `c590` = :c590,
                                        `c547` = :c547,
                                        `c728` = :c728,
                                        `c707` = :c707,
                                        `c73` = :c73,
                                        `c130` = :c130,
                                        `c591` = :c591,
                                        `c6` = :c6,
                                        `c610` = :c610,
                                        `c611` = :c611,
                                        `c612` = :c612,
                                        `c8` = :c8,
                                        `c53` = :c53,
                                        `c613` = :c613,
                                        `c9` = :c9,
                                        `c601` = :c601,
                                        `c604` = :c604,
                                        `c55` = :c55,
                                        `c44` = :c44,
                                        `c726` = :c726,
                                        `c313` = :c313,
                                        `c314` = :c314,
                                        `fecha_form` = :fecha,
                                        `ivapost` = :ivapost,
                                        `ivanop` = :ivanop
                                        
                                 
                                    WHERE `id_f29` = :id_f29 ";
                $stmt = $pdo->prepare($sql_mod_emp);
                $stmt->bindParam(":id_f29",$this->id_f29, PDO::PARAM_INT);
                $stmt->bindParam(":c585", $this->c585, PDO::PARAM_INT);
                $stmt->bindParam(":c20", $this->c20 , PDO::PARAM_INT);
                $stmt->bindParam(":c586", $this->c586, PDO::PARAM_INT);
                $stmt->bindParam(":c142", $this->c142, PDO::PARAM_INT);
                $stmt->bindParam(":c731", $this->c731, PDO::PARAM_INT);
                $stmt->bindParam(":c732", $this->c732, PDO::PARAM_INT);
                $stmt->bindParam(":c714", $this->c714, PDO::PARAM_INT);
                $stmt->bindParam(":c715", $this->c715, PDO::PARAM_INT);
                $stmt->bindParam(":c515", $this->c515, PDO::PARAM_INT);
                $stmt->bindParam(":c587", $this->c587, PDO::PARAM_INT);
                $stmt->bindParam(":c720", $this->c720, PDO::PARAM_INT);
                $stmt->bindParam(":c503", $this->c503, PDO::PARAM_INT);
                $stmt->bindParam(":c502", $this->c502, PDO::PARAM_INT);
                $stmt->bindParam(":c763", $this->c763, PDO::PARAM_INT);
                $stmt->bindParam(":c764", $this->c764, PDO::PARAM_INT);
                $stmt->bindParam(":c716", $this->c716, PDO::PARAM_INT);
                $stmt->bindParam(":c717", $this->c717, PDO::PARAM_INT);
                $stmt->bindParam(":c110", $this->c110, PDO::PARAM_INT);
                $stmt->bindParam(":c111", $this->c111, PDO::PARAM_INT);
                $stmt->bindParam(":c758", $this->c758, PDO::PARAM_INT);
                $stmt->bindParam(":c759", $this->c759, PDO::PARAM_INT);
                $stmt->bindParam(":c512", $this->c512, PDO::PARAM_INT);
                $stmt->bindParam(":c513", $this->c513, PDO::PARAM_INT);
                $stmt->bindParam(":c509", $this->c509, PDO::PARAM_INT);
                $stmt->bindParam(":c510", $this->c510, PDO::PARAM_INT);
                $stmt->bindParam(":c708", $this->c708, PDO::PARAM_INT);
                $stmt->bindParam(":c709", $this->c709, PDO::PARAM_INT);
                $stmt->bindParam(":c733", $this->c733, PDO::PARAM_INT);
                $stmt->bindParam(":c734", $this->c734, PDO::PARAM_INT);
                $stmt->bindParam(":c516", $this->c516, PDO::PARAM_INT);
                $stmt->bindParam(":c517", $this->c517, PDO::PARAM_INT);
                $stmt->bindParam(":c500", $this->c500, PDO::PARAM_INT);
                $stmt->bindParam(":c501", $this->c501, PDO::PARAM_INT);
                $stmt->bindParam(":c154", $this->c154, PDO::PARAM_INT);
                $stmt->bindParam(":c518", $this->c518, PDO::PARAM_INT);
                $stmt->bindParam(":c713", $this->c713, PDO::PARAM_INT);
                $stmt->bindParam(":c738", $this->c738, PDO::PARAM_INT);
                $stmt->bindParam(":c739", $this->c739, PDO::PARAM_INT);
                $stmt->bindParam(":c740", $this->c740, PDO::PARAM_INT);
                $stmt->bindParam(":c741", $this->c741, PDO::PARAM_INT);
                $stmt->bindParam(":c538", $this->c538, PDO::PARAM_INT);
                $stmt->bindParam(":c511", $this->c511, PDO::PARAM_INT);
                $stmt->bindParam(":c514", $this->c514, PDO::PARAM_INT);
                $stmt->bindParam(":c564", $this->c564, PDO::PARAM_INT);
                $stmt->bindParam(":c521", $this->c521, PDO::PARAM_INT);
                $stmt->bindParam(":c566", $this->c566, PDO::PARAM_INT);
                $stmt->bindParam(":c560", $this->c560, PDO::PARAM_INT);
                $stmt->bindParam(":c584", $this->c584, PDO::PARAM_INT);
                $stmt->bindParam(":c562", $this->c562, PDO::PARAM_INT);
                $stmt->bindParam(":c519", $this->c519, PDO::PARAM_INT);
                $stmt->bindParam(":c520", $this->c520, PDO::PARAM_INT);
                $stmt->bindParam(":c761", $this->c761, PDO::PARAM_INT);
                $stmt->bindParam(":c762", $this->c762, PDO::PARAM_INT);
                $stmt->bindParam(":c765", $this->c765, PDO::PARAM_INT);
                $stmt->bindParam(":c766", $this->c766, PDO::PARAM_INT);
                $stmt->bindParam(":c524", $this->c524, PDO::PARAM_INT);
                $stmt->bindParam(":c525", $this->c525, PDO::PARAM_INT);
                $stmt->bindParam(":c527", $this->c527, PDO::PARAM_INT);
                $stmt->bindParam(":c528", $this->c528, PDO::PARAM_INT);
                $stmt->bindParam(":c531", $this->c531, PDO::PARAM_INT);
                $stmt->bindParam(":c532", $this->c532, PDO::PARAM_INT);
                $stmt->bindParam(":c534", $this->c534, PDO::PARAM_INT);
                $stmt->bindParam(":c535", $this->c535, PDO::PARAM_INT);
                $stmt->bindParam(":c536", $this->c536, PDO::PARAM_INT);
                $stmt->bindParam(":c553", $this->c553, PDO::PARAM_INT);
                $stmt->bindParam(":c504", $this->c504, PDO::PARAM_INT);
                $stmt->bindParam(":c593", $this->c593, PDO::PARAM_INT);
                $stmt->bindParam(":c594", $this->c594, PDO::PARAM_INT);
                $stmt->bindParam(":c592", $this->c592, PDO::PARAM_INT);
                $stmt->bindParam(":c539", $this->c539, PDO::PARAM_INT);
                $stmt->bindParam(":c718", $this->c718, PDO::PARAM_INT);
                $stmt->bindParam(":c164", $this->c164, PDO::PARAM_INT);
                $stmt->bindParam(":c730", $this->c730, PDO::PARAM_INT);
                $stmt->bindParam(":c742", $this->c742, PDO::PARAM_INT);
                $stmt->bindParam(":c743", $this->c743, PDO::PARAM_INT);
                $stmt->bindParam(":c127", $this->c127, PDO::PARAM_INT);
                $stmt->bindParam(":c729", $this->c729, PDO::PARAM_INT);
                $stmt->bindParam(":c744", $this->c744, PDO::PARAM_INT);
                $stmt->bindParam(":c745", $this->c745, PDO::PARAM_INT);
                $stmt->bindParam(":c544", $this->c544, PDO::PARAM_INT);
                $stmt->bindParam(":c523", $this->c523, PDO::PARAM_INT);
                $stmt->bindParam(":c712", $this->c712, PDO::PARAM_INT);
                $stmt->bindParam(":c757", $this->c757, PDO::PARAM_INT);
                $stmt->bindParam(":c537", $this->c537, PDO::PARAM_INT);
                $stmt->bindParam(":c77", $this->c77, PDO::PARAM_INT);
                $stmt->bindParam(":c89", $this->c89, PDO::PARAM_INT);
                $stmt->bindParam(":c760", $this->c760, PDO::PARAM_INT);
                $stmt->bindParam(":c50", $this->c50, PDO::PARAM_INT);
                $stmt->bindParam(":c751", $this->c751, PDO::PARAM_INT);
                $stmt->bindParam(":c735", $this->c735, PDO::PARAM_INT);
                $stmt->bindParam(":c48", $this->c48, PDO::PARAM_INT);
                $stmt->bindParam(":c151", $this->c151, PDO::PARAM_INT);
                $stmt->bindParam(":c153", $this->c153, PDO::PARAM_INT);
                $stmt->bindParam(":c54", $this->c54, PDO::PARAM_INT);
                $stmt->bindParam(":c56", $this->c56, PDO::PARAM_INT);
                $stmt->bindParam(":c588", $this->c588, PDO::PARAM_INT);
                $stmt->bindParam(":c589", $this->c589, PDO::PARAM_INT);
                $stmt->bindParam(":c30", $this->c30, PDO::PARAM_INT);
                $stmt->bindParam(":c563", $this->c563, PDO::PARAM_INT);
                $stmt->bindParam(":c115", $this->c115, PDO::PARAM_INT);
                $stmt->bindParam(":c68", $this->c68, PDO::PARAM_INT);
                $stmt->bindParam(":c62", $this->c62, PDO::PARAM_INT);
                $stmt->bindParam(":c565", $this->c565, PDO::PARAM_INT);
                $stmt->bindParam(":c120", $this->c120, PDO::PARAM_INT);
                $stmt->bindParam(":c542", $this->c542, PDO::PARAM_INT);
                $stmt->bindParam(":c122", $this->c122, PDO::PARAM_INT);
                $stmt->bindParam(":c123", $this->c123, PDO::PARAM_INT);
                $stmt->bindParam(":c700", $this->c700, PDO::PARAM_INT);
                $stmt->bindParam(":c701", $this->c701, PDO::PARAM_INT);
                $stmt->bindParam(":c702", $this->c702, PDO::PARAM_INT);
                $stmt->bindParam(":c711", $this->c711, PDO::PARAM_INT);
                $stmt->bindParam(":c703", $this->c703, PDO::PARAM_INT);
                $stmt->bindParam(":c66", $this->c66 , PDO::PARAM_INT);
                $stmt->bindParam(":c152", $this->c152, PDO::PARAM_INT);
                $stmt->bindParam(":c70", $this->c70, PDO::PARAM_INT);
                $stmt->bindParam(":c595", $this->c595, PDO::PARAM_INT);
                $stmt->bindParam(":c1", $this->c1, PDO::PARAM_STR);
                $stmt->bindParam(":c2", $this->c2, PDO::PARAM_STR);
                $stmt->bindParam(":c5", $this->c5, PDO::PARAM_STR);
                $stmt->bindParam(":c583", $this->c583, PDO::PARAM_STR);
                $stmt->bindParam(":c91", $this->c91, PDO::PARAM_INT);
                $stmt->bindParam(":c92", $this->c92, PDO::PARAM_INT);
                $stmt->bindParam(":c93", $this->c93, PDO::PARAM_INT);
                $stmt->bindParam(":c94", $this->c94, PDO::PARAM_INT);
                $stmt->bindParam(":c529", $this->c529, PDO::PARAM_INT);
                $stmt->bindParam(":c530", $this->c530, PDO::PARAM_INT);
                $stmt->bindParam(":c409", $this->c409, PDO::PARAM_INT);
                $stmt->bindParam(":c522", $this->c522, PDO::PARAM_INT);
                $stmt->bindParam(":c526", $this->c526, PDO::PARAM_INT);
                $stmt->bindParam(":c113", $this->c113, PDO::PARAM_INT);
                $stmt->bindParam(":c28", $this->c28, PDO::PARAM_INT);
                $stmt->bindParam(":c548", $this->c548, PDO::PARAM_INT);
                $stmt->bindParam(":c540", $this->c540, PDO::PARAM_INT);
                $stmt->bindParam(":c541", $this->c541, PDO::PARAM_INT);
                $stmt->bindParam(":c549", $this->c549, PDO::PARAM_INT);
                $stmt->bindParam(":c550", $this->c550, PDO::PARAM_INT);
                $stmt->bindParam(":c577", $this->c577, PDO::PARAM_INT);
                $stmt->bindParam(":c32", $this->c32, PDO::PARAM_INT);
                $stmt->bindParam(":c150", $this->c150, PDO::PARAM_INT);
                $stmt->bindParam(":c146", $this->c146, PDO::PARAM_INT);
                $stmt->bindParam(":c752", $this->c752, PDO::PARAM_INT);
                $stmt->bindParam(":c545", $this->c545, PDO::PARAM_INT);
                $stmt->bindParam(":c546", $this->c546, PDO::PARAM_INT);
                $stmt->bindParam(":c710", $this->c710, PDO::PARAM_INT);
                $stmt->bindParam(":c602", $this->c602, PDO::PARAM_INT);
                $stmt->bindParam(":c575", $this->c575, PDO::PARAM_INT);
                $stmt->bindParam(":c576", $this->c576, PDO::PARAM_INT);
                $stmt->bindParam(":c574", $this->c574, PDO::PARAM_INT);
                $stmt->bindParam(":c33", $this->c33, PDO::PARAM_INT);
                $stmt->bindParam(":c580", $this->c580, PDO::PARAM_INT);
                $stmt->bindParam(":c149", $this->c149, PDO::PARAM_INT);
                $stmt->bindParam(":c582", $this->c582, PDO::PARAM_INT);
                $stmt->bindParam(":c85", $this->c85, PDO::PARAM_INT);
                $stmt->bindParam(":c753", $this->c753, PDO::PARAM_INT);
                $stmt->bindParam(":c754", $this->c754, PDO::PARAM_INT);
                $stmt->bindParam(":c551", $this->c551, PDO::PARAM_INT);
                $stmt->bindParam(":c559", $this->c559, PDO::PARAM_INT);
                $stmt->bindParam(":c508", $this->c508, PDO::PARAM_INT);
                $stmt->bindParam(":c533", $this->c533, PDO::PARAM_INT);
                $stmt->bindParam(":c552", $this->c552, PDO::PARAM_INT);
                $stmt->bindParam(":c603", $this->c603, PDO::PARAM_INT);
                $stmt->bindParam(":c507", $this->c507, PDO::PARAM_INT);
                $stmt->bindParam(":c506", $this->c506, PDO::PARAM_INT);
                $stmt->bindParam(":c556", $this->c556, PDO::PARAM_INT);
                $stmt->bindParam(":c557", $this->c557, PDO::PARAM_INT);
                $stmt->bindParam(":c558", $this->c558, PDO::PARAM_INT);
                $stmt->bindParam(":c543", $this->c543, PDO::PARAM_INT);
                $stmt->bindParam(":c573", $this->c573, PDO::PARAM_INT);
                $stmt->bindParam(":c598", $this->c598, PDO::PARAM_INT);
                $stmt->bindParam(":c39", $this->c39, PDO::PARAM_INT);
                $stmt->bindParam(":c554", $this->c554, PDO::PARAM_INT);
                $stmt->bindParam(":c736", $this->c736, PDO::PARAM_INT);
                $stmt->bindParam(":c597", $this->c597, PDO::PARAM_INT);
                $stmt->bindParam(":c555", $this->c555, PDO::PARAM_INT);
                $stmt->bindParam(":c596", $this->c596, PDO::PARAM_INT);
                $stmt->bindParam(":c725", $this->c725, PDO::PARAM_INT);
                $stmt->bindParam(":c737", $this->c737, PDO::PARAM_INT);
                $stmt->bindParam(":c727", $this->c727, PDO::PARAM_INT);
                $stmt->bindParam(":c704", $this->c704, PDO::PARAM_INT);
                $stmt->bindParam(":c705", $this->c705, PDO::PARAM_INT);
                $stmt->bindParam(":c706", $this->c706, PDO::PARAM_INT);
                $stmt->bindParam(":c160", $this->c160, PDO::PARAM_INT);
                $stmt->bindParam(":c161", $this->c161, PDO::PARAM_INT);
                $stmt->bindParam(":c570", $this->c570, PDO::PARAM_INT);
                $stmt->bindParam(":c126", $this->c126, PDO::PARAM_INT);
                $stmt->bindParam(":c128", $this->c128, PDO::PARAM_INT);
                $stmt->bindParam(":c571", $this->c571, PDO::PARAM_INT);
                $stmt->bindParam(":c572", $this->c572, PDO::PARAM_INT);
                $stmt->bindParam(":c568", $this->c568, PDO::PARAM_INT);
                $stmt->bindParam(":c590", $this->c590, PDO::PARAM_INT);
                $stmt->bindParam(":c547", $this->c547, PDO::PARAM_INT);
                $stmt->bindParam(":c728", $this->c728, PDO::PARAM_INT);
                $stmt->bindParam(":c707", $this->c707, PDO::PARAM_INT);
                $stmt->bindParam(":c73", $this->c73, PDO::PARAM_INT);
                $stmt->bindParam(":c130", $this->c130, PDO::PARAM_INT);
                $stmt->bindParam(":c591", $this->c591, PDO::PARAM_INT);
                $stmt->bindParam(":c6", $this->c6, PDO::PARAM_STR);
                $stmt->bindParam(":c610", $this->c610, PDO::PARAM_STR);
                $stmt->bindParam(":c611", $this->c611, PDO::PARAM_STR);
                $stmt->bindParam(":c612", $this->c612, PDO::PARAM_STR);
                $stmt->bindParam(":c8", $this->c8, PDO::PARAM_STR);
                $stmt->bindParam(":c53", $this->c53, PDO::PARAM_STR);
                $stmt->bindParam(":c613", $this->c613, PDO::PARAM_STR);
                $stmt->bindParam(":c9", $this->c9, PDO::PARAM_STR);
                $stmt->bindParam(":c601", $this->c601, PDO::PARAM_STR);
                $stmt->bindParam(":c604", $this->c604, PDO::PARAM_STR);
                $stmt->bindParam(":c55", $this->c55, PDO::PARAM_STR);
                $stmt->bindParam(":c44", $this->c44, PDO::PARAM_STR);
                $stmt->bindParam(":c726", $this->c726, PDO::PARAM_STR);
                $stmt->bindParam(":c313", $this->c313, PDO::PARAM_STR);
                $stmt->bindParam(":c314", $this->c314, PDO::PARAM_STR);
                $stmt->bindParam(":fecha", $this->fecha, PDO::PARAM_STR);
                $stmt->bindParam(":ivapost", $this->ivapost, PDO::PARAM_INT);
                $stmt->bindParam(":ivanop", $this->ivanop, PDO::PARAM_INT);
                $stmt->execute();
        
            } catch (Exception $e) {
                echo"Error, comuniquese con el administrador".  $e->getMessage()."";
            }
    }
  
}
    ?>