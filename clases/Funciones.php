<?php
require_once '../recursos/db/db.php';
/* INDICE
1°  cargar_id_emp
2°  cargar_pagos_doc
3°  cargar_datos_doc
4°  cargar_docs_emp
5°  cargar_forma_pago
6°  cargar_datos_emp
7°  cargar_datos_emp2
8°  cargar_tipo_doc
9°  cargar_empresas
10°  cargar_usuarios
11°  cargar_perfiles
12° cargar_cargos
13° validar_rut
14° generaPass
*/
class Funciones 
{



    /*///////////////////////////////////////
    Calcular GC Pro Renta
    //////////////////////////////////////*/
    public function cargar_gc_pro($atrib){
        try{
           
           
           $pdo = AccesoDB::getCon();

           
                $sql = 'select (:atrib * factor_gc)-cant_reb_gc gc  from global_comp where :atrib between desde_gc and hasta;';
              
           
           $stmt = $pdo->prepare($sql);
           $stmt->bindParam(":atrib", $atrib, PDO::PARAM_INT);
           $stmt->execute();
           $response = $stmt->fetchAll();
           return $response;
       } catch (Exception $e) {
           echo"-1";
            //echo"<script type=\"text/javascript\">alert('Error, comuniquese con el administrador".  $e->getMessage()." '); window.location='../../index.html';</script>";
       }
   }



    /*///////////////////////////////////////
    Cargar datos Sociedades Pro Renta
    //////////////////////////////////////*/
    public function cargar_soc_pro_renta($emp){
        try{
           
           
           $pdo = AccesoDB::getCon();

           
                $sql = 'select a.id_soc, b.id_per, b.nom_per, a.porc_part_soc
                        from sociedad a inner join persona b on a.id_per_soc = b.id_per 
                        where a.id_emp_soc = :emp and a.vig_soc = 1;';
              
           
           $stmt = $pdo->prepare($sql);
           $stmt->bindParam(":emp", $emp, PDO::PARAM_INT);
           $stmt->execute();
           $response = $stmt->fetchAll();
           return $response;
       } catch (Exception $e) {
           echo"-1";
            //echo"<script type=\"text/javascript\">alert('Error, comuniquese con el administrador".  $e->getMessage()." '); window.location='../../index.html';</script>";
       }
   }


    /*///////////////////////////////////////
    Cargar datos Pro Renta
    //////////////////////////////////////*/
    public function cargar_dato_pro_renta($emp,$per){
        try{
           
           
           $pdo = AccesoDB::getCon();

           
                $sql = 'SELECT IFNULL(SUM(c62), 0) ppmo,IFNULL(SUM(c152), 0) ppmv 
                        FROM f29 
                        WHERE id_emp = :emp AND YEAR(fecha_form) = YEAR(:per);';
              
           
           $stmt = $pdo->prepare($sql);
           $stmt->bindParam(":emp", $emp, PDO::PARAM_INT);
           $stmt->bindParam(":per", $per, PDO::PARAM_STR);
           $stmt->execute();
           $response = $stmt->fetchAll();
           return $response;
       } catch (Exception $e) {
           echo"-1";
            //echo"<script type=\"text/javascript\">alert('Error, comuniquese con el administrador".  $e->getMessage()." '); window.location='../../index.html';</script>";
       }
   }






    /*///////////////////////////////////////
    Cargar datos cliente (MIS DATOS)
    //////////////////////////////////////*/
    public function cargar_datos_cli($id,$perfil){
        try{
           
           
           $pdo = AccesoDB::getCon();

           switch ($perfil) {
             case '3':
                $sql = 'select  a.rut_emp rut, a.razon_social_emp nom, a.mail_emp mail
                        from empresa a
                        where a.id_emp =  :id';
               break;
             
             case '4':
                $sql = 'select a.rut_per rut, a.nom_per nom, a.mail_per mail
                        from persona a
                        where a.id_per = :id';
               break;
           }
                   

              
 
                  
           
           $stmt = $pdo->prepare($sql);
           $stmt->bindParam(":id", $id, PDO::PARAM_INT);
           $stmt->execute();
           $response = $stmt->fetchAll();
           return $response;
       } catch (Exception $e) {
           echo"-1";
            //echo"<script type=\"text/javascript\">alert('Error, comuniquese con el administrador".  $e->getMessage()." '); window.location='../../index.html';</script>";
       }
   }





    /*///////////////////////////////////////
    Validar usuarios clientes
    //////////////////////////////////////*/
    public function validar_cliente($emp,$id_usu,$perfil){
        try{
           
           
           $pdo = AccesoDB::getCon();

           switch ($perfil) {
             case '3':
                $sql = 'select count(1) val from empresa where id_emp =  :id and id_emp = :emp';
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(":id", $id_usu, PDO::PARAM_INT);
                $stmt->bindParam(":emp", $emp, PDO::PARAM_INT);
                $stmt->execute();
                $response = $stmt->fetch(PDO::FETCH_ASSOC);
               break;
             
             case '4':
                $sql = 'select count(1) val from empresa a inner join sociedad c on a.id_emp = c.id_emp_soc where c.vig_soc and c.id_per_soc = :id and a.id_emp = :emp';
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(":id", $id_usu, PDO::PARAM_INT);
                $stmt->bindParam(":emp", $emp, PDO::PARAM_INT);
                $stmt->execute();
                $response = $stmt->fetch(PDO::FETCH_ASSOC);
               break;
           }
                   

              
 
                  
           
           
           
           return $response;
       } catch (Exception $e) {
           echo"-1";
            //echo"<script type=\"text/javascript\">alert('Error, comuniquese con el administrador".  $e->getMessage()." '); window.location='../../index.html';</script>";
       }
   }







    /*///////////////////////////////////////
    Cargar datos resumen cliente (tabla principal)
    //////////////////////////////////////*/
    public function cargar_main_cli($id, $perfil){
        try{
           
           
           $pdo = AccesoDB::getCon();

           switch ($perfil) {
             case '3':
                $sql = 'select a.id_emp, a.rut_emp, a.razon_social_emp,
                        (select count(b.id_doc) from documento b where a.id_emp = b.emp_doc and  b.est_doc = 1) +
                        (select count(b.id_doc) from documento b where a.id_emp = b.emp_doc and  b.est_doc = 2) cant_docs_pagop,
                        (select count(b.id_f29) from f29 b where a.id_emp = b.id_emp) cant_f29
                        from empresa a
                        where a.id_emp =  :id';
               break;
             
             case '4':
                $sql = 'select a.id_emp,a.rut_emp, a.razon_social_emp,
                        (select count(b.id_doc) from documento b where a.id_emp = b.emp_doc and  b.est_doc = 1) +
                        (select count(b.id_doc) from documento b where a.id_emp = b.emp_doc and  b.est_doc = 2) cant_docs_pagop,
                        (select count(b.id_f29) from f29 b where a.id_emp = b.id_emp) cant_f29
                        from empresa a inner join sociedad c on a.id_emp = c.id_emp_soc
                        where c.vig_soc and c.id_per_soc =  :id';
               break;
           }
                   

              
 
                  
           
           $stmt = $pdo->prepare($sql);
           $stmt->bindParam(":id", $id, PDO::PARAM_INT);
           $stmt->execute();
           $response = $stmt->fetchAll();
           return $response;
       } catch (Exception $e) {
           echo"-1";
            //echo"<script type=\"text/javascript\">alert('Error, comuniquese con el administrador".  $e->getMessage()." '); window.location='../../index.html';</script>";
       }
   }




    
     /*///////////////////////////////////////
    Cargar reg_tributarios
    //////////////////////////////////////*/
    public function cargar_reg_trib(){
        try{
           
           
           $pdo = AccesoDB::getCon();
                   

               $sql = '
                         select id_reg_trib, desc_reg_trib from reg_trib';
 
                  
           
           $stmt = $pdo->prepare($sql);
           $stmt->execute();
           $response = $stmt->fetchAll();
           return $response;
       } catch (Exception $e) {
           echo"-1";
            //echo"<script type=\"text/javascript\">alert('Error, comuniquese con el administrador".  $e->getMessage()." '); window.location='../../index.html';</script>";
       }
   }




    
    /*///////////////////////////////////////
    Cargar datos de totales f29
    //////////////////////////////////////*/
    public function cargar_datos_inf29tot($emp){
        try{
           
           
           $pdo = AccesoDB::getCon();
                   

               $sql = 'select IFNULL(sum(a.c538),0) deb, IFNULL(sum(a.c537),0) cred,            
                         case
              when b.reg_trib_emp = 3 then (IFNULL(sum(a.c502),0)*100)/19
                            when b.reg_trib_emp = 4 then (IFNULL(sum(a.c142),0)*100)/19
              else IFNULL(sum(a.c563),0)
            end ven,
            case
            when reg_trib_emp = 3 then IFNULL(sum(a.c66),0)
                              when reg_trib_emp = 4 then IFNULL(sum(a.c66),0)
                                else IFNULL(sum(a.c62),0) end ppm, 
                        IFNULL(sum(a.c48),0) impu, IFNULL(sum(a.c151),0) ret, IFNULL(sum(a.c91),0) impp,IFNULL(sum(a.c504),0) credfis,
                        b.reg_trib_emp, c.max_mon_reg_trib,
                                                (select case
              when b.reg_trib_emp = 3 then (IFNULL(sum(d.c502),0)*100)/19
                            when b.reg_trib_emp = 4 then (IFNULL(sum(d.c142),0)*100)/19
              else IFNULL(sum(a.c563),0)
            end from f29 d where d.id_emp = :emp and DATE_FORMAT(a.fecha_form, "%Y")=DATE_FORMAT(now(), "%Y")) ven_anual, c.desc_reg_trib
                        from f29 a inner join empresa b on a.id_emp = b.id_emp inner join reg_trib c on b.reg_trib_emp = c.id_reg_trib
                        where a.id_emp = :emp';
 
                  
           
           $stmt = $pdo->prepare($sql);
           $stmt->bindParam(":emp", $emp, PDO::PARAM_INT);
           $stmt->execute();
           $response = $stmt->fetchAll();
           return $response;
       } catch (Exception $e) {
           echo"-1";
            //echo"<script type=\"text/javascript\">alert('Error, comuniquese con el administrador".  $e->getMessage()." '); window.location='../../index.html';</script>";
       }
   }





    /*///////////////////////////////////////
    Cargar datos de tipos de iva por empresa f29
    //////////////////////////////////////*/
    public function cargar_resiva($emp){
        try{
           
           
           $pdo = AccesoDB::getCon();
                   

               $sql = 'select DATE_FORMAT(fecha_form, "%Y-%m") periodo, 
                        CASE
                            WHEN ivapost = 1 THEN "IVA Postergado"
                            WHEN ivanop = 1 THEN "IVA No Pagado"
                            ELSE "IVA Pagado"
                        END iva from f29 where id_emp = :emp
                         order by 1 desc
                         limit 12';
 
                  
           
           $stmt = $pdo->prepare($sql);
           $stmt->bindParam(":emp", $emp, PDO::PARAM_INT);
           $stmt->execute();
           $response = $stmt->fetchAll();
           return $response;
       } catch (Exception $e) {
           echo"-1";
            //echo"<script type=\"text/javascript\">alert('Error, comuniquese con el administrador".  $e->getMessage()." '); window.location='../../index.html';</script>";
       }
   }




     /*///////////////////////////////////////
    Cargar datos de  para grafico
    //////////////////////////////////////*/
    public function cargar_datos_f29graf($emp,$graf){
        try{
           
           
           $pdo = AccesoDB::getCon();



            switch ($graf) {
                case 'rel':
                    $sql = 'select DATE_FORMAT(fecha_form, "%Y-%m") periodo, IFNULL(c538,0)/IFNULL(if(c537=0,1,c537),1) val from f29 where id_emp = :emp order by 1 limit 12';
                    break;

                case 'debcred':
                    $sql = 'select DATE_FORMAT(fecha_form, "%Y-%m") periodo, IFNULL(c538,0) val1,  IFNULL(c537,0) val2 from f29 where id_emp = :emp order by 1 limit 12';
                    break;
                case 'ven':
                    $sql = 'select DATE_FORMAT(a.fecha_form, "%Y-%m") periodo, 
                            case
                              when reg_trib_emp = 3 then (IFNULL(a.c502,0)*100)/19
                              when reg_trib_emp = 4 then (IFNULL(a.c142,0)*100)/19
                                else IFNULL(a.c563,0)
                            end

                             val 
                            from f29 a inner join empresa b on a.id_emp = b.id_emp 
                            where a.id_emp = :emp order by 1 limit 12';
                    break;
                case 'ppm':
                    $sql = 'select DATE_FORMAT(a.fecha_form, "%Y-%m") periodo, 
                            case
                                                          when reg_trib_emp = 3 then IFNULL(a.c66,0)
                                                          when reg_trib_emp = 4 then IFNULL(a.c66,0)
                                                            else IFNULL(a.c62,0)
                                                        end val 
                            from f29 a inner join empresa b on a.id_emp = b.id_emp 
                             where a.id_emp = :emp order by 1 limit 12';
                    break;
                case 'impu':
                    $sql = 'select DATE_FORMAT(fecha_form, "%Y-%m") periodo, IFNULL(c48,0) val from f29 where id_emp = :emp order by 1 limit 12';
                    break;
                case 'ret':
                    $sql = 'select DATE_FORMAT(fecha_form, "%Y-%m") periodo, IFNULL(c151,0) val from f29 where id_emp = :emp order by 1 limit 12';
                    break;
                case 'impp':
                    $sql = 'select DATE_FORMAT(fecha_form, "%Y-%m") periodo, IFNULL(c91,0) val from f29 where id_emp = :emp order by 1 limit 12';
                    break;
                case 'recref':
                    $sql = 'select DATE_FORMAT(fecha_form, "%Y-%m") periodo, IFNULL(c504,0) val from f29 where id_emp = :emp order by 1 limit 12';
                    break;
                case 'conactfijo':
                    $sql = 'select DATE_FORMAT(fecha_form, "%Y-%m") periodo, IFNULL(c525,0) val1,  IFNULL(c524,0) val2 from f29 where id_emp = :emp order by 1 limit 12';
                    break;
                case 'condinactfijo':
                    $sql = 'select DATE_FORMAT(fecha_form, "%Y-%m") periodo, IFNULL(c553,0) val1,  IFNULL(c536,0) val2 from f29 where id_emp = :emp order by 1 limit 12';
                    break;
                
                default:
                    # code...
                    break;
            }
                   
 
               
                  
           
           $stmt = $pdo->prepare($sql);
           $stmt->bindParam(":emp", $emp, PDO::PARAM_INT);
           $stmt->execute();
           $response = $stmt->fetchAll();
           return $response;
       } catch (Exception $e) {
           echo"-1";
            //echo"<script type=\"text/javascript\">alert('Error, comuniquese con el administrador".  $e->getMessage()." '); window.location='../../index.html';</script>";
       }
   }



    /*///////////////////////////////////////
    Informe f29
    //////////////////////////////////////*/
        public function inf_f29($desde,$hasta){
            try{
                
                
                $pdo = AccesoDB::getCon();
                            if ($desde == 0 && $hasta == 0 ) {
                                $sql = "SELECT a.rut_emp,a.razon_social_emp,
                                        (select count(b.id_f29) from f29 b where a.id_emp = b.id_emp) cant_f29,
                                        IFNULL((select IFNULL(sum(b.c538),0)/IFNULL(sum(b.c537),0) from f29 b where a.id_emp = b.id_emp),0) rel,
                                        (select IFNULL(sum(b.c538),0) from f29 b where a.id_emp = b.id_emp) deb,
                                        (select IFNULL(sum(b.c537),0) from f29 b where a.id_emp = b.id_emp) cred,
                                        (select IFNULL(sum(1),0) from f29 b where a.id_emp = b.id_emp and  b.ivapost <> 1 and b.ivanop <> 1) ivapag,
                                        (select IFNULL(sum(1),0) from f29 b where a.id_emp = b.id_emp and  b.ivapost = 1 ) ivapost,
                                        (select IFNULL(sum(1),0) from f29 b where a.id_emp = b.id_emp and  b.ivanop = 1 ) ivanop,a.id_emp
                                        FROM empresa a order by 3 desc";
                                $stmt = $pdo->prepare($sql);
                            
                            }else {
                                $sql = "SELECT a.rut_emp,a.razon_social_emp,
                                        (select count(b.id_f29) from f29 b where a.id_emp = b.id_emp and b.fecha_form between :desde and :hasta) cant_f29,
                                        IFNULL((select IFNULL(sum(b.c538),0)/IFNULL(sum(b.c537),0) from f29 b where a.id_emp = b.id_emp and b.fecha_form between :desde and :hasta),0) rel,
                                        (select IFNULL(sum(b.c538),0) from f29 b where a.id_emp = b.id_emp and b.fecha_form between :desde and :hasta) deb,
                                        (select IFNULL(sum(b.c537),0) from f29 b where a.id_emp = b.id_emp and b.fecha_form between :desde and :hasta) cred,
                                        (select IFNULL(sum(1),0) from f29 b where a.id_emp = b.id_emp and  b.ivapost <> 1 and b.ivanop <> 1 and b.fecha_form between :desde and :hasta) ivapag,
                                        (select IFNULL(sum(1),0) from f29 b where a.id_emp = b.id_emp and  b.ivapost = 1 and b.fecha_form between :desde and :hasta) ivapost,
                                        (select IFNULL(sum(1),0) from f29 b where a.id_emp = b.id_emp and  b.ivanop = 1 and b.fecha_form between :desde and :hasta) ivanop,a.id_emp
                                        FROM empresa a order by 3 desc";

                                $stmt = $pdo->prepare($sql);
                                $stmt->bindParam(":desde", $desde, PDO::PARAM_STR);
                                $stmt->bindParam(":hasta", $hasta, PDO::PARAM_STR);
                            }
        
                       
                                
                            
                
                $stmt->execute();
                $response = $stmt->fetchAll();
                return $response;
            } catch (Exception $e) {
                                echo"-1 ".$e->getMessage();
            //echo"<script type=\"text/javascript\">alert('Error, comuniquese con el administrador".  $e->getMessage()." '); window.location='../../index.html';</script>";
            }
        }




    /*///////////////////////////////////////
    Validar periodo f29
    //////////////////////////////////////*/
    public function val_periodo_f29($emp, $per, $form){
        try{
           
           
           $pdo = AccesoDB::getCon();
                   
           
               $sql = 'SELECT count(1) val FROM `f29` 
                        where id_emp = :emp and DATE_FORMAT(fecha_form, "%m-%Y") = :fec and id_f29 <> :form';
           
                  
           
           $stmt = $pdo->prepare($sql);
           $stmt->bindParam(":emp", $emp, PDO::PARAM_INT);
           $stmt->bindParam(":fec", $per, PDO::PARAM_STR);
           $stmt->bindParam(":form", $form, PDO::PARAM_INT);
           $stmt->execute();
           $response = $stmt->fetch(PDO::FETCH_ASSOC);
           return $response;
       } catch (Exception $e) {
           echo"-1";
            //echo"<script type=\"text/javascript\">alert('Error, comuniquese con el administrador".  $e->getMessage()." '); window.location='../../index.html';</script>";
       }
   }




    /*///////////////////////////////////////
    Cargar datos de Persona por Id
    //////////////////////////////////////*/
    public function cargar_datos_per2($id,$sel){
        try{
           
           
           $pdo = AccesoDB::getCon();
                   
           if ($sel == 1) {
                $sql = "";
           }else if ($sel == 2) {
               $sql = "select *                
               from persona where id_per = :id";
           }  
                  
           
           $stmt = $pdo->prepare($sql);
           $stmt->bindParam(":id", $id, PDO::PARAM_INT);
           $stmt->execute();
           $response = $stmt->fetchAll();
           return $response;
       } catch (Exception $e) {
           echo"-1";
            //echo"<script type=\"text/javascript\">alert('Error, comuniquese con el administrador".  $e->getMessage()." '); window.location='../../index.html';</script>";
       }
   }





    /*///////////////////////////////////////
    Cargar lista despegable de personas
    //////////////////////////////////////*/
    public function cargar_personas($opcion){
        try{
            
            
            $pdo = AccesoDB::getCon();
    
                    if ($opcion == 0) {
                        $sql = "select id_emp, razon_social_emp from empresa order by 2";
                    }else if ($opcion == 1){
                        $sql = "select id_emp, razon_social_emp from empresa where vig_emp = 1 order by 2";
                    }else if($opcion == 2 ){
                        $sql = "select a.id_per,a.nom_per, a.rut_per, a.mail_per, a.fec_cre_per, c.nick_usu,
                                (select count(id_soc) from sociedad b where a.id_per = b.id_per_soc and b.vig_soc = 1 and b.id_emp_soc is not null) sociedades
                                from persona a inner join usuarios c
                                on a.usu_cre_per = c.id_usu
                                where a.vig_per = 1";
                    }else if ($opcion == 3){
                        $sql = "select id_per, nom_per from persona";
                    }
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $response = $stmt->fetchAll();
            return $response;
        } catch (Exception $e) {
            echo"-1";
            //echo"<script type=\"text/javascript\">alert('Error, comuniquese con el administrador".  $e->getMessage()." '); window.location='../../index.html';</script>";
        }
    }



    /*///////////////////////////////////////
    Cargar sociedades persona
    //////////////////////////////////////*/
        public function cargar_datos_aso($per){
            try{
                
                
                $pdo = AccesoDB::getCon();

                                $sql = "select a.id_soc, c.nom_per, b.razon_social_emp, a.porc_part_soc, a.monto_part_soc
                                        from sociedad a, empresa b, persona c
                                        where a.vig_soc = 1
                                        and a.id_emp_soc = b.id_emp
                                        and a.id_per_soc = c.id_per
                                        and b.vig_emp = 1
                                        and c.vig_per = 1
                                        and c.id_per = :per";
                                  
                            
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(":per", $per, PDO::PARAM_INT);
                $stmt->execute();
                $response = $stmt->fetchAll();
                return $response;
            } catch (Exception $e) {
                                echo"-1";
            //echo"<script type=\"text/javascript\">alert('Error, comuniquese con el administrador".  $e->getMessage()." '); window.location='../../index.html';</script>";
            }
        }




    /*///////////////////////////////////////
    Validar Sociedad persona
    //////////////////////////////////////*/
        public function validar_soc($per,$emp){
            try{
                
                
                $pdo = AccesoDB::getCon();

                                $sql = "select count(1) soc from sociedad where id_per_soc = :per and id_emp_soc = :emp and vig_soc = 1";
                                  
                            
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(":per", $per, PDO::PARAM_INT);
                $stmt->bindParam(":emp", $emp, PDO::PARAM_INT);
                $stmt->execute();
                $response = $stmt->fetch(PDO::FETCH_ASSOC);
                return $response;
            } catch (Exception $e) {
                                echo"-1";
            //echo"<script type=\"text/javascript\">alert('Error, comuniquese con el administrador".  $e->getMessage()." '); window.location='../../index.html';</script>";
            }
        }







    /*///////////////////////////////////////
    Historial modulo laboral
    //////////////////////////////////////*/
        public function inf_hist_mod_lab($emp){
            try{
                
                
                $pdo = AccesoDB::getCon();

                                $sql = "select a.cot_mod_lab, a.ntrab_mod_lab, if(a.cargas_mod_lab=1,'Si','No') cargas_mod_lab, a.fec_act_mod_lab, a.tasa_acc_mod_lab, a.periodo_mod_lab, c.nick_usu
                                        from mod_lab a, usuarios c
                                        where 
                                        a.usu_mod_lab = c.id_usu
                                        and a.emp_mod_lab = :emp
                                        order by fec_act_mod_lab desc";
                                  
                            
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(":emp", $emp, PDO::PARAM_INT);
                $stmt->execute();
                $response = $stmt->fetchAll();
                return $response;
            } catch (Exception $e) {
                                echo"-1";
            //echo"<script type=\"text/javascript\">alert('Error, comuniquese con el administrador".  $e->getMessage()." '); window.location='../../index.html';</script>";
            }
        }


    /*///////////////////////////////////////
    Informe modulo laboral
    //////////////////////////////////////*/
        public function inf_mod_lab(){
            try{
                
                
                $pdo = AccesoDB::getCon();

                                $sql = "select a.id_emp, a.rut_emp, a.razon_social_emp,
                                        ifnull((select cot_mod_lab from mod_lab c where c.emp_mod_lab = a.id_emp order by c.fec_act_mod_lab desc limit 1 ),0) cot,
                                        ifnull((select ntrab_mod_lab from mod_lab c where c.emp_mod_lab = a.id_emp order by c.fec_act_mod_lab desc limit 1 ),0) trab,
                                        ifnull((select if(c.cargas_mod_lab=1,'Si','No') from mod_lab c where c.emp_mod_lab = a.id_emp order by c.fec_act_mod_lab desc limit 1 ),0) cargas,
                                        ifnull((select fec_act_mod_lab from mod_lab c where c.emp_mod_lab = a.id_emp order by c.fec_act_mod_lab desc limit 1 ),0) fec,
                                        ifnull((select round(tasa_acc_mod_lab,3) from mod_lab c where c.emp_mod_lab = a.id_emp order by c.fec_act_mod_lab desc limit 1 ),0) tasa_acc,
                                        ifnull((select periodo_mod_lab from mod_lab c where c.emp_mod_lab = a.id_emp order by c.fec_act_mod_lab desc limit 1 ),0) periodo
                                        from empresa a ";
                                  
                            
                $stmt = $pdo->prepare($sql);
                $stmt->execute();
                $response = $stmt->fetchAll();
                return $response;
            } catch (Exception $e) {
                                echo"-1";
            //echo"<script type=\"text/javascript\">alert('Error, comuniquese con el administrador".  $e->getMessage()." '); window.location='../../index.html';</script>";
            }
        }



    /*///////////////////////////////////////
    Validacion ingreso doc
    //////////////////////////////////////*/
        public function val_ing_doc($key){
            try{
                
                
                $pdo = AccesoDB::getCon();

                                $sql = "select count(1) val from documento 
                                        where concat('E',emp_doc,'T',tipo_doc,'N',nro_doc) = :key
                                        and est_doc <> 4";
                                  
                            
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(":key", $key, PDO::PARAM_STR);
                $stmt->execute();
                $response = $stmt->fetchAll();
                return $response;
            } catch (Exception $e) {
                                echo"-1";
            //echo"<script type=\"text/javascript\">alert('Error, comuniquese con el administrador".  $e->getMessage()." '); window.location='../../index.html';</script>";
            }
        }




    /*///////////////////////////////////////
    Informe ultimo pago por empresa
    //////////////////////////////////////*/
        public function inf_det_ult_pago(){
            try{
                
                
                $pdo = AccesoDB::getCon();

                                $sql = "select a.rut_emp,a.razon_social_emp, ifnull(a.clave_sii_emp,'') clave_sii_emp,
ifnull((select b.monto_afecto_doc from documento b where b.emp_doc = a.id_emp and b.est_doc <> 4 order by fec_emi_doc desc limit 1),0) afecto,
ifnull((select b.monto_exento_doc from documento b where b.emp_doc = a.id_emp and b.est_doc <> 4 order by fec_emi_doc desc limit 1),0) exento,
ifnull((select b.monto_iva_doc from documento b where b.emp_doc = a.id_emp and b.est_doc <> 4 order by fec_emi_doc desc limit 1),0) iva,
ifnull((select b.monto_total_doc from documento b where b.emp_doc = a.id_emp and b.est_doc <> 4 order by fec_emi_doc desc limit 1),0) total,
ifnull((select c.desc_item from documento b, tab_param c where b.emp_doc = a.id_emp and b.est_doc <> 4 and b.tipo_doc = c.cod_item and c.cod_grupo = 1  order by fec_emi_doc desc limit 1),'') tipo_doc,
ifnull((select b.nro_doc from documento b where b.emp_doc = a.id_emp and b.est_doc <> 4 order by fec_emi_doc desc limit 1),0) nro_doc,
ifnull((select b.fec_emi_doc from documento b where b.emp_doc = a.id_emp and b.est_doc <> 4 order by fec_emi_doc desc limit 1),'') fec_emi,
ifnull((select c.nick_usu from documento b, usuarios c where b.emp_doc = a.id_emp and b.est_doc <> 4 and c.id_usu = b.usu_reg_doc order by fec_emi_doc desc limit 1),'') usu
from
empresa a";
                                  
                            
                $stmt = $pdo->prepare($sql);
                $stmt->execute();
                $response = $stmt->fetchAll();
                return $response;
            } catch (Exception $e) {
                                echo"-1";
            //echo"<script type=\"text/javascript\">alert('Error, comuniquese con el administrador".  $e->getMessage()." '); window.location='../../index.html';</script>";
            }
        }

    /*///////////////////////////////////////
    Informe detalle cobranza--docs pendientes
    //////////////////////////////////////*/
        public function inf_doc_pen($emp,$desde,$hasta){
            try{
                
                
                $pdo = AccesoDB::getCon();
                            if ($desde == 0 && $hasta == 0 ) {
                                $sql = "SELECT  a.nro_doc, b.desc_item tipo_doc,'INGRESO' tipo_mov,IF(a.tipo_doc = 1, a.monto_total_doc,a.monto_afecto_doc) cargo,
                                    0 pago, a.fec_emi_doc fecha, obs_doc obs, a.fec_emi_doc fec, c.nick_usu
                                    FROM documento a, tab_param b, usuarios c
                                    WHERE a.tipo_doc = b.cod_item and b.cod_grupo = 1 and b.vig_item = 1
                                    and a.est_doc in (1,2) and a.emp_doc = :emp and a.usu_reg_doc = c.id_usu
                                    UNION ALL
                                    SELECT  a.nro_doc, b.desc_item tipo_doc,d.desc_item tipo_mov,0 cargo,
                                    c.monto_mov pago, IF(c.fec_mov='0000-00-00',c.fec_reg_mov,c.fec_mov) fecha, obs_mov obs, c.fec_reg_mov fec, e.nick_usu
                                    FROM documento a, tab_param b,  mov_documento c, tab_param d, usuarios e
                                    WHERE a.tipo_doc = b.cod_item and b.cod_grupo = 1 and b.vig_item = 1
                                    and a.id_doc = c.id_doc_mov
                                    and c.est_doc_mov = d.cod_item and d.cod_grupo = 2 and b.vig_item = 1
                                    and a.est_doc in (1,2) and a.emp_doc = :emp and c.usu_reg_mov = e.id_usu
                                    order by 1,8";

                                    $stmt = $pdo->prepare($sql);
                                    $stmt->bindParam(":emp", $emp, PDO::PARAM_INT);
                            }else{
                                $sql = "SELECT  a.nro_doc, b.desc_item tipo_doc,'INGRESO' tipo_mov,IF(a.tipo_doc = 1, a.monto_total_doc,a.monto_afecto_doc) cargo,
                                    0 pago, a.fec_emi_doc fecha, obs_doc obs, a.fec_emi_doc fec, c.nick_usu
                                    FROM documento a, tab_param b, usuarios c
                                    WHERE a.tipo_doc = b.cod_item and b.cod_grupo = 1 and b.vig_item = 1
                                    and a.est_doc in (1,2) and a.emp_doc = :emp and a.usu_reg_doc = c.id_usu
                                    and IF(c.fec_mov='0000-00-00',c.fec_reg_mov,c.fec_mov) between :desde and :hasta
                                    UNION ALL
                                    SELECT  a.nro_doc, b.desc_item tipo_doc,d.desc_item tipo_mov,0 cargo,
                                    c.monto_mov pago, IF(c.fec_mov='0000-00-00',c.fec_reg_mov,c.fec_mov) fecha, obs_mov obs, c.fec_reg_mov fec, e.nick_usu
                                    FROM documento a, tab_param b,  mov_documento c, tab_param d, usuarios e
                                    WHERE a.tipo_doc = b.cod_item and b.cod_grupo = 1 and b.vig_item = 1
                                    and a.id_doc = c.id_doc_mov
                                    and c.est_doc_mov = d.cod_item and d.cod_grupo = 2 and b.vig_item = 1
                                    and a.est_doc in (1,2) and a.emp_doc = :emp
                                    and IF(c.fec_mov='0000-00-00',c.fec_reg_mov,c.fec_mov) between :desde and :hasta and c.usu_reg_mov = e.id_usu
                                    order by 1,8";

                                    $stmt = $pdo->prepare($sql);
                                    $stmt->bindParam(":emp", $emp, PDO::PARAM_INT);
                                    $stmt->bindParam(":desde", $desde, PDO::PARAM_STR);
                                    $stmt->bindParam(":hasta", $hasta, PDO::PARAM_STR);

                            }
                $stmt->execute();
                $response = $stmt->fetchAll();
                return $response;
            } catch (Exception $e) {
                                echo"-1";
            //echo"<script type=\"text/javascript\">alert('Error, comuniquese con el administrador".  $e->getMessage()." '); window.location='../../index.html';</script>";
            }
        }



    /*///////////////////////////////////////
    Informe detalle cobranza
    //////////////////////////////////////*/
        public function inf_det_cob($emp,$desde,$hasta){
            try{
                
                
                $pdo = AccesoDB::getCon();
                            if ($desde == 0 && $hasta == 0 ) {
                                $sql = "SELECT  a.nro_doc, b.desc_item tipo_doc,'INGRESO' tipo_mov,IF(a.tipo_doc = 1, a.monto_total_doc,a.monto_afecto_doc) cargo,
                                    0 pago, a.fec_emi_doc fecha, obs_doc obs, a.fec_emi_doc fec, c.nick_usu
                                    FROM documento a, tab_param b, usuarios c
                                    WHERE a.tipo_doc = b.cod_item and b.cod_grupo = 1 and b.vig_item = 1
                                    and a.est_doc <> 4 and a.emp_doc = :emp and a.usu_reg_doc = c.id_usu
                                    UNION ALL
                                    SELECT  a.nro_doc, b.desc_item tipo_doc,d.desc_item tipo_mov,0 cargo,
                                    c.monto_mov pago, IF(c.fec_mov='0000-00-00',c.fec_reg_mov,c.fec_mov) fecha, obs_mov obs, c.fec_reg_mov fec, e.nick_usu
                                    FROM documento a, tab_param b,  mov_documento c, tab_param d, usuarios e
                                    WHERE a.tipo_doc = b.cod_item and b.cod_grupo = 1 and b.vig_item = 1
                                    and a.id_doc = c.id_doc_mov
                                    and c.est_doc_mov = d.cod_item and d.cod_grupo = 2 and b.vig_item = 1
                                    and a.est_doc <> 4 and a.emp_doc = :emp and c.usu_reg_mov = e.id_usu
                                    order by 1,8";

                                    $stmt = $pdo->prepare($sql);
                                    $stmt->bindParam(":emp", $emp, PDO::PARAM_INT);
                            }else{
                                $sql = "SELECT  a.nro_doc, b.desc_item tipo_doc,'INGRESO' tipo_mov,IF(a.tipo_doc = 1, a.monto_total_doc,a.monto_afecto_doc) cargo,
                                    0 pago, a.fec_emi_doc fecha, obs_doc obs, a.fec_emi_doc fec, c.nick_usu
                                    FROM documento a, tab_param b, usuarios c
                                    WHERE a.tipo_doc = b.cod_item and b.cod_grupo = 1 and b.vig_item = 1
                                    and a.est_doc <> 4 and a.emp_doc = :emp and a.usu_reg_doc = c.id_usu
                                    and IF(c.fec_mov='0000-00-00',c.fec_reg_mov,c.fec_mov) between :desde and :hasta
                                    UNION ALL
                                    SELECT  a.nro_doc, b.desc_item tipo_doc,d.desc_item tipo_mov,0 cargo,
                                    c.monto_mov pago, IF(c.fec_mov='0000-00-00',c.fec_reg_mov,c.fec_mov) fecha, obs_mov obs, c.fec_reg_mov fec, e.nick_usu
                                    FROM documento a, tab_param b,  mov_documento c, tab_param d, usuarios e
                                    WHERE a.tipo_doc = b.cod_item and b.cod_grupo = 1 and b.vig_item = 1
                                    and a.id_doc = c.id_doc_mov
                                    and c.est_doc_mov = d.cod_item and d.cod_grupo = 2 and b.vig_item = 1
                                    and a.est_doc <> 4 and a.emp_doc = :emp
                                    and IF(c.fec_mov='0000-00-00',c.fec_reg_mov,c.fec_mov) between :desde and :hasta and c.usu_reg_mov = e.id_usu
                                    order by 1,8";

                                    $stmt = $pdo->prepare($sql);
                                    $stmt->bindParam(":emp", $emp, PDO::PARAM_INT);
                                    $stmt->bindParam(":desde", $desde, PDO::PARAM_STR);
                                    $stmt->bindParam(":hasta", $hasta, PDO::PARAM_STR);

                            }
                $stmt->execute();
                $response = $stmt->fetchAll();
                return $response;
            } catch (Exception $e) {
                                echo"-1";
            //echo"<script type=\"text/javascript\">alert('Error, comuniquese con el administrador".  $e->getMessage()." '); window.location='../../index.html';</script>";
            }
        }

    /*///////////////////////////////////////
    Informe cobranza
    //////////////////////////////////////*/
        public function inf_cob($desde,$hasta){
            try{
                
                
                $pdo = AccesoDB::getCon();
                            if ($desde == 0 && $hasta == 0 ) {
                                $sql = "SELECT a.rut_emp,a.razon_social_emp,
                                        (select count(b.id_doc) from documento b where a.id_emp = b.emp_doc and  b.est_doc <> 4) cant_docs,
                                        (select count(b.id_doc) from documento b where a.id_emp = b.emp_doc and  b.est_doc = 1) cant_docs_ing,
                                        (select count(b.id_doc) from documento b where a.id_emp = b.emp_doc and  b.est_doc = 2) cant_docs_pagop,
                                        (select count(b.id_doc) from documento b where a.id_emp = b.emp_doc and  b.est_doc = 3) cant_docs_pagoc,
                                        ((select IFNULL(sum(b.monto_total_doc),0) from documento b where a.id_emp = b.emp_doc and  b.est_doc <> 4 and b.tipo_doc = 1)+
                                        (select IFNULL(sum(b.monto_afecto_doc),0) from documento b where a.id_emp = b.emp_doc and  b.est_doc <> 4 and b.tipo_doc = 2)) cargos,
                                        (select IFNULL(sum(c.monto_mov),0) from documento b, mov_documento c where a.id_emp = b.emp_doc and  b.est_doc <> 4 and b.id_doc = c.id_doc_mov) pagos, a.id_emp,
                                        ROUND((IFNULL((select sum(DATEDIFF(IF(c.fec_mov='0000-00-00',c.fec_reg_mov,c.fec_mov), b.fec_emi_doc)) from documento b , mov_documento c
                                            where a.id_emp = b.emp_doc and  b.est_doc in(2,3) and b.id_doc = c.id_doc_mov and c.est_doc_mov = 3),0)
                                            /
                                            (select count(b.id_doc) from documento b where a.id_emp = b.emp_doc and  b.est_doc = 3)),0) prom_dias_pago,
                                        (((select IFNULL(sum(b.monto_total_doc),0) from documento b where a.id_emp = b.emp_doc and  b.est_doc <> 4 and b.tipo_doc = 1)+
                                        (select IFNULL(sum(b.monto_afecto_doc),0) from documento b where a.id_emp = b.emp_doc and  b.est_doc <> 4 and b.tipo_doc = 2))-
                                        (select IFNULL(sum(c.monto_mov),0) from documento b, mov_documento c where a.id_emp = b.emp_doc and  b.est_doc <> 4 and b.id_doc = c.id_doc_mov)) saldo
                                        FROM empresa a order by 3 desc";
                                $stmt = $pdo->prepare($sql);
                            
                            }else {
                                $sql = "SELECT a.rut_emp,a.razon_social_emp,
                                        (select count(b.id_doc) from documento b where a.id_emp = b.emp_doc and  b.est_doc <> 4 and  b.fec_emi_doc between :desde and :hasta) cant_docs,
                                        (select count(b.id_doc) from documento b where a.id_emp = b.emp_doc and  b.est_doc = 1 and  b.fec_emi_doc between :desde and :hasta) cant_docs_ing,
                                        (select count(b.id_doc) from documento b where a.id_emp = b.emp_doc and  b.est_doc = 2 and  b.fec_emi_doc between :desde and :hasta) cant_docs_pagop,
                                        (select count(b.id_doc) from documento b where a.id_emp = b.emp_doc and  b.est_doc = 3 and  b.fec_emi_doc between :desde and :hasta) cant_docs_pagoc,
                                        ((select IFNULL(sum(b.monto_total_doc),0) from documento b where a.id_emp = b.emp_doc and  b.est_doc <> 4 and b.tipo_doc = 1 and  b.fec_emi_doc between :desde and :hasta)+
                                        (select IFNULL(sum(b.monto_afecto_doc),0) from documento b where a.id_emp = b.emp_doc and  b.est_doc <> 4 and b.tipo_doc = 2 and  b.fec_emi_doc between :desde and :hasta)) cargos,
                                        (select IFNULL(sum(c.monto_mov),0) from documento b, mov_documento c where a.id_emp = b.emp_doc and  b.est_doc <> 4 and b.id_doc = c.id_doc_mov and  b.fec_emi_doc between :desde and :hasta) pagos, a.id_emp,
                                        ROUND((IFNULL((select sum(DATEDIFF(IF(c.fec_mov='0000-00-00',c.fec_reg_mov,c.fec_mov), b.fec_emi_doc)) from documento b , mov_documento c
                                            where a.id_emp = b.emp_doc and  b.est_doc in(2,3) and b.id_doc = c.id_doc_mov and c.est_doc_mov = 3),0)
                                            /
                                            (select count(b.id_doc) from documento b where a.id_emp = b.emp_doc and  b.est_doc = 3)),0) prom_dias_pago,
                                        (((select IFNULL(sum(b.monto_total_doc),0) from documento b where a.id_emp = b.emp_doc and  b.est_doc <> 4 and b.tipo_doc = 1 and  b.fec_emi_doc between :desde and :hasta)+
                                        (select IFNULL(sum(b.monto_afecto_doc),0) from documento b where a.id_emp = b.emp_doc and  b.est_doc <> 4 and b.tipo_doc = 2 and  b.fec_emi_doc between :desde and :hasta))-
                                        (select IFNULL(sum(c.monto_mov),0) from documento b, mov_documento c where a.id_emp = b.emp_doc and  b.est_doc <> 4 and b.id_doc = c.id_doc_mov and  b.fec_emi_doc between :desde and :hasta)) saldo
                                        FROM empresa a order by 3 desc";

                                $stmt = $pdo->prepare($sql);
                                $stmt->bindParam(":desde", $desde, PDO::PARAM_STR);
                                $stmt->bindParam(":hasta", $hasta, PDO::PARAM_STR);
                            }
        
                       
                                
                            
                
                $stmt->execute();
                $response = $stmt->fetchAll();
                return $response;
            } catch (Exception $e) {
                                echo"-1 ".$e->getMessage();
            //echo"<script type=\"text/javascript\">alert('Error, comuniquese con el administrador".  $e->getMessage()." '); window.location='../../index.html';</script>";
            }
        }


    /*///////////////////////////////////////
    Validar contraseña 
    //////////////////////////////////////*/
        public function validar_pwd($id,$ident){
            try{
                
                
                $pdo = AccesoDB::getCon();
                            if ($ident == 1 or $ident == 2) {
                                $sql = $sql = "select pass_usu pass
                                        from usuarios where id_usu = :id";
                            
                            }else if ($ident == 3) {
                                $sql = "select pass_emp pass
                                        from empresa where id_emp = :id";
                            }else if ($ident == 4) {
                                $sql = "select pass_per pass
                                        from persona where id_per = :id";
                            }
        
                       
                                
                            
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(":id", $id, PDO::PARAM_INT);
                $stmt->execute();
                $response = $stmt->fetchAll();
                return $response;
            } catch (Exception $e) {
                                echo"-1";
            //echo"<script type=\"text/javascript\">alert('Error, comuniquese con el administrador".  $e->getMessage()." '); window.location='../../index.html';</script>";
            }
        }
    /*///////////////////////////////////////
    Cargar datos de usuario
    //////////////////////////////////////*/
        public function cargar_datos_usu($id_usu,$sel){
            try{
                
                
                $pdo = AccesoDB::getCon();
                        
                if ($sel == 1) {
                     $sql = "select concat(a.NOM_USU) nom, concat(a.APEPAT_USU,' ',a.APEMAT_USU) ape, a.RUT_USU rut,
                                a.MAIL_USU mail,c.desc_item perfil, a.FEC_CRE_USU fec, b.DESC_ITEM cargo, if(a.VIG_USU=1,'Vigente','No Vigente') vig, a.NICK_USU nick
                                from usuarios a, tab_param b, tab_param c
                                where a.CARGO_USU = b.COD_ITEM and b.COD_GRUPO = 4 and b.VIG_ITEM = 1 
                                and a.ID_PERFIL = c.COD_ITEM and c.COD_GRUPO = 3 and c.VIG_ITEM = 1
                                and a.ID_USU = :id_usu";
                }else if ($sel == 2) {
                    $sql = "select a.NOM1_USU,a.NOM2_USU , a.APEPAT_USU,a.APEMAT_USU, a.RUT_USU ,
                                a.MAIL_USU ,a.id_perfil, DATE_FORMAT(a.fec_cre_usu, '%d-%m-%Y') fec_cre_usu, a.cargo_usu, a.VIG_USU, a.NICK_USU
                                from usuarios a
                                where 
                                a.ID_USU = :id_usu";
                }
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(":id_usu", $id_usu, PDO::PARAM_INT);
                $stmt->execute();
                $response = $stmt->fetchAll();
                return $response;
            } catch (Exception $e) {
                echo"-1";
            //echo"<script type=\"text/javascript\">alert('Error, comuniquese con el administrador".  $e->getMessage()." '); window.location='../../index.html';</script>";
            }
        }
    /*///////////////////////////////////////
    Validar usuario reset contraseña
    //////////////////////////////////////*/
        public function validar_usu($rut,$mail,$ident){
            try{
                
                
                $pdo = AccesoDB::getCon();
                            if ($ident == 0) {
                                $sql = "select id_cli id from clientes where rut_cli = :rut and mail_cli = :mail";
                            
                            }else if ($ident == 1) {
                                $sql = "select id_usu id from usuarios where rut_usu = :rut and mail_usu = :mail";
                            }
        
                       
                                
                            
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(":rut", $rut, PDO::PARAM_STR);
                $stmt->bindParam(":mail", $mail, PDO::PARAM_STR);
                $stmt->execute();
                $response = $stmt->fetchColumn();
                return $response;
            } catch (Exception $e) {
                echo"-1";
            //echo"<script type=\"text/javascript\">alert('Error, comuniquese con el administrador".  $e->getMessage()." '); window.location='../../index.html';</script>";
            }
        }
    /*///////////////////////////////////////
    //////////Cargar datos mail ing doc/////////////
    //////////////////////////////////////*/
    public function datos_mail($num_doc,$id){
         try{
            
            
            $pdo = AccesoDB::getCon();
            if ($id == 1) {
                $sql = "select b.razon_social_emp nom_emp, b.mail_emp, c.desc_item tipo
from documento a, empresa b, tab_param c
where a.nro_doc = :num_doc
and a.emp_doc = b.id_emp
and a.tipo_doc = c.cod_item
and c.cod_grupo = 1";
            }elseif ($id == 2) {
                $sql = "select b.razon_social_emp nom_emp, b.mail_emp, c.desc_item tipo, a.nro_doc
from documento a, empresa b, tab_param c
where a.id_doc = :num_doc
and a.emp_doc = b.id_emp
and a.tipo_doc = c.cod_item
and c.cod_grupo = 1";
            }elseif ($id == 3) {
                $sql = "select b.razon_social_emp nom_emp, b.mail_emp, c.desc_item tipo, a.nro_doc, est_doc, 
ifnull(((CASE
                            WHEN tipo_doc = 1 THEN monto_total_doc
                            WHEN tipo_doc = 2 THEN monto_afecto_doc
                        END)-
                        (select sum(d.monto_mov) from mov_documento d where a.id_doc = d.id_doc_mov))
                        ,CASE
                            WHEN tipo_doc = 1 THEN monto_total_doc
                            WHEN tipo_doc = 2 THEN monto_afecto_doc
                        END)
 monto_deuda, a.fec_ven_doc
from documento a, empresa b, tab_param c
where a.id_doc = :num_doc
and a.emp_doc = b.id_emp
and a.tipo_doc = c.cod_item
and c.cod_grupo = 1";
            }    
                   
            
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":num_doc", $num_doc, PDO::PARAM_INT);
            $stmt->execute();
            $response = $stmt->fetchAll();
            return $response;
        } catch (Exception $e) {
            echo"-1";
            //echo"<script type=\"text/javascript\">alert('Error, comuniquese con el administrador".  $e->getMessage()." '); window.location='../../index.html';</script>";
        }
    }
    /*////////////////////////////////////////////
    Cargar lista despegable de comunas
    /////////////////////////////////////////////*/
    public function cargar_comunas($ciudad){
        try{
            
            
            $pdo = AccesoDB::getCon();
    
                    $sql = "select comuna_id, comuna_nombre from comuna where comuna_provincia_id = :ciudad order by comuna_nombre";
                        
                        
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":ciudad", $ciudad, PDO::PARAM_INT);
            $stmt->execute();
            $response = $stmt->fetchAll();
            return $response;
        } catch (Exception $e) {
            echo"-1";
            //echo"<script type=\"text/javascript\">alert('Error, comuniquese con el administrador".  $e->getMessage()." '); window.location='../../index.html';</script>";
        }
    }
    /*////////////////////////////////////////////
    Cargar lista despegable de ciudades
    /////////////////////////////////////////////*/
    public function cargar_ciudades(){
        try{
            
            
            $pdo = AccesoDB::getCon();
    
                    $sql = "select provincia_id, provincia_nombre from provincia order by provincia_nombre";
                        
                        
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $response = $stmt->fetchAll();
            return $response;
        } catch (Exception $e) {
            echo"-1";
            //echo"<script type=\"text/javascript\">alert('Error, comuniquese con el administrador".  $e->getMessage()." '); window.location='../../index.html';</script>";
        }
    }
    /*///////////////////////////////////////
    Cargar datos Movimiento Documento
    //////////////////////////////////////*/
    public function cargar_datos_mov_doc($id_doc){
         try{
            
            
            $pdo = AccesoDB::getCon();
                    
            
                 $sql = 'select a.fec_reg_mov,a.monto_mov,concat(c.nom_usu," ",c.apepat_usu," ",c.apemat_usu) usu,a.obs_mov, b.desc_item est
                            from mov_documento a, tab_param b, usuarios c
                            where 
                            a.est_doc_mov = b.cod_item
                            and b.cod_grupo = 2
                            and a.usu_reg_mov = c.id_usu
                            and a.id_doc_mov = :id_doc
                            order by fec_reg_mov ';
            
                   
            
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":id_doc", $id_doc, PDO::PARAM_INT);
            $stmt->execute();
            $response = $stmt->fetchAll();
            return $response;
        } catch (Exception $e) {
            echo"-1";
            //echo"<script type=\"text/javascript\">alert('Error, comuniquese con el administrador".  $e->getMessage()." '); window.location='../../index.html';</script>";
        }
    }
    /*///////////////////////////////////////
    //////////Cargar id empresa/////////////
    //////////////////////////////////////*/
    public function cargar_id_emp($rut_emp){
         try{
            
            
            $pdo = AccesoDB::getCon();
                    
            
                 $sql = "select id_emp from empresa where rut_emp = :rut_emp";
            
                   
            
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":rut_emp", $rut_emp, PDO::PARAM_STR);
            $stmt->execute();
            $response = $stmt->fetchColumn();
            return $response;
        } catch (Exception $e) {
            echo"-1";
            //echo"<script type=\"text/javascript\">alert('Error, comuniquese con el administrador".  $e->getMessage()." '); window.location='../../index.html';</script>";
        }
    }
   /*///////////////////////////////////////
    Cargar datos Documento pendiente
    //////////////////////////////////////*/
    public function cargar_pagos_doc($id_doc){
         try{
            
            
            $pdo = AccesoDB::getCon();
                    
            
                 $sql = "select desc_item est, ifnull(sum(c.monto_mov),0) suma, b.tipo_doc
                            from tab_param a, documento b left join mov_documento c on c.id_doc_mov = b.id_doc
                            where a.cod_grupo = 2
                            and a.cod_item = b.est_doc
                            and b.id_doc = :id_doc";
            
                   
            
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":id_doc", $id_doc, PDO::PARAM_INT);
            $stmt->execute();
            $response = $stmt->fetchAll();
            return $response;
        } catch (Exception $e) {
            echo"-1";
            //echo"<script type=\"text/javascript\">alert('Error, comuniquese con el administrador".  $e->getMessage()." '); window.location='../../index.html';</script>";
        }
    }
    /*///////////////////////////////////////
    Cargar datos Documento
    //////////////////////////////////////*/
    public function cargar_datos_doc($id_doc){
         try{
            
            
            $pdo = AccesoDB::getCon();
                    
            
                 $sql = "select *, CASE
                            WHEN tipo_doc = 1 THEN monto_total_doc
                            WHEN tipo_doc = 2 THEN monto_afecto_doc
                        END AS total
                        from documento where id_doc = :id_doc";
            
                   
            
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":id_doc", $id_doc, PDO::PARAM_INT);
            $stmt->execute();
            $response = $stmt->fetchAll();
            return $response;
        } catch (Exception $e) {
            echo"-1";
            //echo"<script type=\"text/javascript\">alert('Error, comuniquese con el administrador".  $e->getMessage()." '); window.location='../../index.html';</script>";
        }
    }
    /*///////////////////////////////////////
    Cargar documentos de Empresa
    //////////////////////////////////////*/
    public function cargar_docs_emp($id_emp,$sel){
         try{
            
            
            $pdo = AccesoDB::getCon();
                    
            if ($sel == 1 and $id_emp <> 0) {//documentos pendientes
                 $sql = "select *                
                from documento where emp_doc = :id_emp and est_doc in (1,2)";
            }else if ($sel == 2 and $id_emp <> 0) {
                $sql = "select a.id_doc,b.razon_social_emp, a.nro_doc, b.razon_social_emp, c.desc_item est, a.monto_afecto_doc, a.monto_exento_doc, a.monto_iva_doc,
                    a.monto_total_doc, a.fec_emi_doc, a.fec_ven_doc,d.desc_item tipo_doc, a.obs_doc,
                    (select sum(d.monto_mov) from mov_documento d where a.id_doc = d.id_doc_mov) suma,a.est_doc
                    from documento a, empresa b,tab_param c, tab_param d
                    where
                    a.emp_doc = b.id_emp
                    and c.cod_grupo = 2
                    and c.cod_item = a.est_doc
                    and d.cod_grupo = 1
                    and d.cod_item = a.tipo_doc
                    and emp_doc = :id_emp";
            }else if ($sel == 1 and $id_emp == 0) {
                $sql = "select a.id_doc, a.nro_doc, b.razon_social_emp, c.desc_item est, a.monto_afecto_doc, a.monto_exento_doc, a.monto_iva_doc,
                    a.monto_total_doc, a.fec_emi_doc, a.fec_ven_doc,d.desc_item tipo_doc, a.obs_doc,
                    (select sum(d.monto_mov) from mov_documento d where a.id_doc = d.id_doc_mov) suma
                    from documento a, empresa b,tab_param c , tab_param d
                    where
                    a.emp_doc = b.id_emp
                    and a.est_doc in (1,2)
                    and c.cod_grupo = 2
                    and c.cod_item = a.est_doc
                    and d.cod_grupo = 1
                    and d.cod_item = a.tipo_doc
                    and a.fec_ven_doc <= sysdate()
                    ";
            }   
                   
            
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":id_emp", $id_emp, PDO::PARAM_INT);
            $stmt->execute();
            $response = $stmt->fetchAll();
            return $response;
        } catch (Exception $e) {
            echo"-1";
            //echo"<script type=\"text/javascript\">alert('Error, comuniquese con el administrador".  $e->getMessage()." '); window.location='../../index.html';</script>";
        }
    }
    /*///////////////////////////////////////
    Cargar lista despegable de formas de pago
    //////////////////////////////////////*/
    public function cargar_forma_pago($vig){
        try{
            
            
            $pdo = AccesoDB::getCon();
    
                    if ($vig == 0) {
                            $sql = "";
                        }else if ($vig == 1){
                            $sql = "select id_formapago, desc_formapago from forma_pago where vig_formapago = 1 and desc_formapago <> ''";
                        }
                        
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $response = $stmt->fetchAll();
            return $response;
        } catch (Exception $e) {
            echo"-1";
            //echo"<script type=\"text/javascript\">alert('Error, comuniquese con el administrador".  $e->getMessage()." '); window.location='../../index.html';</script>";
        }
    }
    /*///////////////////////////////////////
    Cargar datos de Empresa por Rut
    //////////////////////////////////////*/
    public function cargar_datos_emp($rut_emp,$sel){
         try{
            
            
            $pdo = AccesoDB::getCon();
                    
            if ($sel == 1) {
                 $sql = "select *                
                from empresa where rut_emp = :rut_emp and vig_emp = 1";
            }else if ($sel == 2) {
                $sql = "select *                
                from empresa where rut_emp = :rut_emp";
            }  
                   
            
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":rut_emp", $rut_emp, PDO::PARAM_INT);
            $stmt->execute();
            $response = $stmt->fetchAll();
            return $response;
        } catch (Exception $e) {
            echo"-1";
            //echo"<script type=\"text/javascript\">alert('Error, comuniquese con el administrador".  $e->getMessage()." '); window.location='../../index.html';</script>";
        }
    }
    /*///////////////////////////////////////
    Cargar datos de Empresa por Id
    //////////////////////////////////////*/
    public function cargar_datos_emp2($id,$sel){
        try{
           
           
           $pdo = AccesoDB::getCon();
                   
           if ($sel == 1) {
                $sql = "";
           }else if ($sel == 2) {
               $sql = "select *                
               from empresa where id_emp = :id";
           }  
                  
           
           $stmt = $pdo->prepare($sql);
           $stmt->bindParam(":id", $id, PDO::PARAM_INT);
           $stmt->execute();
           $response = $stmt->fetchAll();
           return $response;
       } catch (Exception $e) {
           echo"-1";
            //echo"<script type=\"text/javascript\">alert('Error, comuniquese con el administrador".  $e->getMessage()." '); window.location='../../index.html';</script>";
       }
   }
    /*////////////////////////////////////////////
    Cargar lista despegable de tipos de documentos
    /////////////////////////////////////////////*/
    public function cargar_tipo_doc($vig){
        try{
            
            
            $pdo = AccesoDB::getCon();
    
                    if ($vig == 0) {
                            $sql = "";
                        }else if ($vig == 1){
                            $sql = "select cod_item tipo, desc_item tipo_doc from tab_param where cod_grupo = 1 and cod_item <> 0 and vig_item = 1";
                        }
                        
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $response = $stmt->fetchAll();
            return $response;
        } catch (Exception $e) {
           echo"-1";
            //echo"<script type=\"text/javascript\">alert('Error, comuniquese con el administrador".  $e->getMessage()." '); window.location='../../index.html';</script>";
        }
    }
    /*///////////////////////////////////////
    Cargar lista despegable de empresas
    //////////////////////////////////////*/
    public function cargar_empresas($opcion){
        try{
            
            
            $pdo = AccesoDB::getCon();
    
                    if ($opcion == 0) {
                        $sql = "select id_emp, razon_social_emp from empresa order by 2";
                    }else if ($opcion == 1){
                        $sql = "select id_emp, razon_social_emp, rut_emp, reg_trib_emp from empresa where vig_emp = 1 order by 2";
                    }else if($opcion == 2 ){
                        $sql = "select id_emp,razon_social_emp,rut_emp,ciudad_emp,comuna_emp,dir_emp,mail_emp,fec_cre_emp,u.nick_usu
                        from empresa,usuarios as u
                        where vig_emp = 1 and empresa.usu_cre_emp = u.id_usu";
                    }else if ($opcion == 3){
                        $sql = "select id_emp, razon_social_emp from empresa";
                    }
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $response = $stmt->fetchAll();
            return $response;
        } catch (Exception $e) {
            echo"-1";
            //echo"<script type=\"text/javascript\">alert('Error, comuniquese con el administrador".  $e->getMessage()." '); window.location='../../index.html';</script>";
        }
    }
    /*///////////////////////////////////////
    Cargar lista despegable de Formularios 29
    //////////////////////////////////////*/
    public function cargar_formularios($opcion,$id){
        try{
            
            
            $pdo = AccesoDB::getCon();
    
                    if ($opcion == 0) {
                        $sql = "select f.id_f29 id,u.nick_usu nick,f.fecha_form fecha,e.razon_social_emp empresa,e.rut_emp rut,f.c91 total
                        from empresa e,f29 f,usuarios u
                        where f.id_emp = e.id_emp and f.usu_reg_doc = u.id_usu";
                        $stmt = $pdo->prepare($sql);
                        $stmt->execute();
                        $response = $stmt->fetchAll();
                    }else if ($opcion == 1){
                        $sql = "SELECT * FROM f29
                        where id_f29 = :id";
                        $stmt = $pdo->prepare($sql);
                        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
                        $stmt->execute();
                        $response = $stmt->fetchAll();
                    }

            return $response;
        } catch (Exception $e) {
            echo"-1";
            //echo"<script type=\"text/javascript\">alert('Error, comuniquese con el administrador".  $e->getMessage()." '); window.location='../../index.html';</script>";
        }
    }
    /*////////////////////////////////////////////
    ///////////// CARGAR USUARIOS ////////////////
    ////////////////////////////////////////////*/ 
    public function cargar_usuarios($id_usu,$opc){
        try {
            
            $pdo = AccesoDB::getCon();
            if ($opc == 1)
            {
                $sql = "select u.id_usu,u.nom_usu,u.apepat_usu,u.apemat_usu,u.rut_usu,u.mail_usu,a.desc_item as id_perfil,u.fec_cre_usu,b.desc_item as cargo_usu,if(u.vig_usu = 1, 'VIGENTE','NO VIGENTE') as vig_usu,u.nick_usu
                from usuarios u, tab_param a, tab_param b
                where u.id_perfil = a.cod_item and a.cod_grupo = 3 and a.vig_item = 1
                and u.cargo_usu =  b.cod_item and b.cod_grupo = 4 and b.vig_item = 1 ";
            }
            else if($opc == 2)
            {
                $sql = "select u.id_usu,u.nom_usu,u.apepat_usu,u.apemat_usu,u.rut_usu,u.mail_usu,u.id_perfil,u.fec_cre_usu,u.cargo_usu,if(u.vig_usu = 1, 'VIGENTE','NO VIGENTE') as vig_usu,u.nick_usu
                from usuarios u, tab_param a, tab_param b
                where u.id_perfil = a.cod_item and a.cod_grupo = 3 and a.vig_item = 1
                and u.cargo_usu =  b.cod_item and b.cod_grupo = 4 and b.vig_item = 1 and u.id_usu = :id_usu";
            }
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":id_usu", $id_usu, PDO::PARAM_INT);
            $stmt->execute();
            $response = $stmt->fetchAll();
            return $response;
            
        } catch (\Throwable $th) {
            echo"-1";
            //echo"<script type=\"text/javascript\">alert('Error, comuniquese con el administrador".  $e->getMessage()." '); window.location='../../index.html';</script>";
        }
    }
    /*////////////////////////////////////////////
    ///////////// CARGAR PERFILES ////////////////
    ////////////////////////////////////////////*/ 
    public function cargar_perfiles($vig_usu){
        try {
            
            $pdo = AccesoDB::getCon();
            if ($vig_usu == 0) {
                $sql = "select cod_item id_perfil, desc_item perfil from tab_param where cod_grupo = 3 and cod_item <> 0";
            }else if ($vig_usu == 1) {
                $sql = "select cod_item id_perfil, desc_item perfil from tab_param where cod_grupo = 3 and cod_item <> 0 and vig_item = 1";
            }  
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $response = $stmt->fetchAll();
            return $response;
            
        } catch (\Throwable $th) {
            echo"-1";
            //echo"<script type=\"text/javascript\">alert('Error, comuniquese con el administrador".  $e->getMessage()." '); window.location='../../index.html';</script>";
        }
    }
    /*////////////////////////////////////////////
    ///////////// CARGAR CARGOS //////////////////
    ////////////////////////////////////////////*/ 
    public function cargar_cargos($vig_cargo){
        try {
            
            $pdo = AccesoDB::getCon();
            if ($vig_cargo == 0) {
                $sql = "select cod_item id_cargo, desc_item cargo from tab_param where cod_grupo = 4 and cod_item <> 0";
            }else if ($vig_cargo == 1) {
                $sql = "select cod_item id_cargo, desc_item cargo from tab_param where cod_grupo = 4 and cod_item <> 0 and vig_item = 1";
            }  
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $response = $stmt->fetchAll();
            return $response;
            
        } catch (\Throwable $th) {
            echo"-1";
            //echo"<script type=\"text/javascript\">alert('Error, comuniquese con el administrador".  $e->getMessage()." '); window.location='../../index.html';</script>";
        }
    }
    /*////////////////////////////////////////////
    ////////////// VALIDAR RUT  //////////////////
    ////////////////////////////////////////////*/ 
    public function validar_rut($rut,$opc){
        try {
            
            $pdo = AccesoDB::getCon();
            if($opc == 1){
                $sql = "SELECT rut_usu FROM usuarios where rut_usu = :rut";
            } else if($opc == 2){
               $sql = "SELECT rut_emp FROM empresa where rut_emp = :rut";
            } else if($opc == 3){
               $sql = "SELECT rut_per FROM persona where rut_per = :rut";
            }
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":rut", $rut, PDO::PARAM_STR);
            $stmt->execute();
            $response = $stmt->fetchAll();
            return $response;
            
        } catch (\Throwable $th) {
            echo"-1";
            //echo"<script type=\"text/javascript\">alert('Error, comuniquese con el administrador".  $e->getMessage()." '); window.location='../../index.html';</script>";
        }
    }
    /*////////////////////////////////////////////
    ////////////// GENERAR PASS //////////////////
    ////////////////////////////////////////////*/ 
    public function generaPass(){
        //Se define una cadena de caractares. Te recomiendo que uses esta.
        $cadena = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
        //Obtenemos la longitud de la cadena de caracteres
        $longitudCadena=strlen($cadena);
         
        //Se define la variable que va a contener la contraseña
        $pass = "";
        //Se define la longitud de la contraseña, en mi caso 10, pero puedes poner la longitud que quieras
        $longitudPass=6;
         
        //Creamos la contraseña
        for($i=1 ; $i<=$longitudPass ; $i++){
            //Definimos numero aleatorio entre 0 y la longitud de la cadena de caracteres-1
            $pos=rand(0,$longitudCadena-1);
         
            //Vamos formando la contraseña en cada iteraccion del bucle, añadiendo a la cadena $pass la letra correspondiente a la posicion $pos en la cadena de caracteres definida.
            $pass .= substr($cadena,$pos,1);
        }
        return $pass;
    }
    //////////////////////////
    //////////////////////////
    //////////////////////////
    //////////////////////////
    //////////////////////////mails HYR
        /*///////////////////////////////////////
            enviar mail pago documento 
        //////////////////////////////////////*/
        public function mail_pago_doc($nom_emp,$correo,$tipo_doc,$nro_doc,$monto_doc, $est,$fec_pago) {
            try{
                $to = $correo;
                        $subject = "Pago de Documento - Consultora HYR";
                        $message = "
                        <html>
                        <head>
                        <title>Pago de Documento - Consultora HYR</title>
                        </head>
                        <body>
                        <h2>Agradecemos pago de ".$tipo_doc." Nro ".$nro_doc."</h2>
                        Estimados ".$nom_emp."
                        Agradecemos a usted el pago ".$est." de su <b>".$tipo_doc."</b> Nro <b>".$nro_doc."</b> por un monto de <b>$".$monto_doc."</b>.
                        <br>
                        La fecha de pago fue el <b>".date('d-m-Y', strtotime($fec_pago))."</b>
                        <br><br>
                        Se despide Atte.
                        <br><br>
                        <h3>Consultora HYR</h3>
                        <br><br>
                        Este mensaje es enviado automaticamente, favor no responder.
                        </body>
                        </html>
                        ";
                        // Always set content-type when sending HTML email
                        $headers = "MIME-Version: 1.0" . "\r\n";
                        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                        // More headers
                        $headers .= 'From: <hyr@hyr.com>' . "\r\n";
                        $headers .= 'Cc: pvicencio@andescode.cl' . "\r\n";
                        $headers .= 'Cc: rmunoz@hyrconsultora.com' . "\r\n";
                        mail($to,$subject,$message,$headers);
        } catch (Exception $e) {
                throw $e;
        }
        }
        /*///////////////////////////////////////
            enviar mail nuevo documento ing
        //////////////////////////////////////*/
        public function mail_ing_doc($nom_emp,$correo,$tipo_doc,$nro_doc,$monto_doc, $fec_ven) {
            try{
                $to = $correo;
                        $subject = "Ingreso de Documento de pago - Consultora HYR";
                        $message = "
                        <html>
                        <head>
                        <title>Ingreso de Documento de pago - Consultora HYR</title>
                        </head>
                        <body>
                        <h2>Disponible para pago ".$tipo_doc." Nro ".$nro_doc."</h2>
                        Estimados ".$nom_emp."
                        Informamos a usted que se encuentra disponible para pago su <b>".$tipo_doc."</b> Nro <b>".$nro_doc."</b> por un monto total de <b>$".$monto_doc."</b>.
                        <br>
                        Su fecha de vencimiento es el <b>".date('d-m-Y', strtotime($fec_ven))."</b>
                        <br><br>
                        Se despide Atte.
                        <br><br>
                        <h3>Consultora HYR</h3>
                        <br><br>
                        Este mensaje es enviado automaticamente, favor no responder.
                        </body>
                        </html>
                        ";
                        // Always set content-type when sending HTML email
                        $headers = "MIME-Version: 1.0" . "\r\n";
                        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                        // More headers
                        $headers .= 'From: <hyr@hyr.com>' . "\r\n";
                        $headers .= 'Cc: pvicencio@andescode.cl' . "\r\n";
                        $headers .= 'Cc: rmunoz@hyrconsultora.com' . "\r\n";
                        mail($to,$subject,$message,$headers);
        } catch (Exception $e) {
                throw $e;
        }
        }
        /*///////////////////////////////////////
            enviar mail nuevo usuario
        //////////////////////////////////////*/
        public function mail_crear_usu($password,$nombre,$rut,$mail) {
            try{
                $to = $mail;
                        $subject = "Bienvenido a Consultora HYR";
                        $message = "
                        <html>
                        <head>
                        <title>Creación de Usuario - Consultora HYR</title>
                        </head>
                        <body>
                        <h2>Creación de Usuario</h2>
                        Estimado ".$nombre." se ha creado tu usuario para el sistema de gestión Consultora HYR.
                        <br>
                        Tus credenciales de ingreso son:
                        <br>
                        Rut: <b>".$rut."</b>
                        <br>
                        Contraseña: <b>".$password."</b>
                        <br><br>
                        Se despide Atte.
                        <br><br>
                        <h3>Consultora HYR</h3>
                        <br><br>
                        Este mensaje es enviado automaticamente, favor no responder.
                        </body>
                        </html>
                        ";
                        // Always set content-type when sending HTML email
                        $headers = "MIME-Version: 1.0" . "\r\n";
                        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                        // More headers
                        $headers .= 'From: <hyr@hyr.com>' . "\r\n";
                        $headers .= 'Cc: pvicencio@andescode.cl' . "\r\n";
                        mail($to,$subject,$message,$headers);
        } catch (Exception $e) {
                //throw $e;
                 echo"<script type=\"text/javascript\">alert('Error, comuniquese con el administrador".  $e->getMessage()." '); window.location='../../index.html';</script>";
        }
        }
        /*///////////////////////////////////////
            enviar mail reset password
        //////////////////////////////////////*/
        public function correo_upd_pass($mail,$contraseña) {
            try{
                $to = $mail;
                        $subject = "Cambio de Contraseña HYR";
                        $message = "
                        <html>
                        <head>
                        <title>Cambio de Contraseña - Consultora HYR</title>
                        </head>
                        <body>
                        <h2>Actualización de contraseña</h2>
                        Estimad@ se ha actualizado su contraseña para el sistema de gestión Consultora HYR.
                        <br>
                        Tu Nueva Contraseña es:
                        <br><br>
                        Contraseña: <b>".$contraseña."</b>
                        <br><br>
                        Se despide Atte.
                        <br><br>
                        <h3>Consultora HYR</h3>
                        <br><br>
                        Este mensaje es enviado automaticamente, favor no responder.
                        </body>
                        </html>
                        ";
                        // Always set content-type when sending HTML email
                        $headers = "MIME-Version: 1.0" . "\r\n";
                        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                        // More headers
                        $headers .= 'From: <hyr@hyr.com>' . "\r\n";
                        $headers .= 'Cc: pvicencio@andescode.cl' . "\r\n";
                        mail($to,$subject,$message,$headers);
        } catch (Exception $e) {
                throw $e;
        }
        }
        /*///////////////////////////////////////
            enviar mail notificar deuda doc
        //////////////////////////////////////*/
        public function mail_not_doc($nom_emp,$correo,$tipo_doc,$nro_doc,$monto_deuda, $est,$fec_ven) {
            try{
                $to = $correo;
                        $subject = "Aviso de Documento - Consultora HYR";
                        $message = "
                        <html>
                        <head>
                        <title>Aviso de Documento - Consultora HYR</title>
                        </head>
                        <body>
                        <h2>Recordamos pago de ".$tipo_doc." Nro ".$nro_doc."</h2>
                        Estimados ".$nom_emp."
                        Recordamos a usted el ".$est." de su <b>".$tipo_doc."</b> Nro <b>".$nro_doc."</b> por un monto de <b>$".$monto_deuda."</b>.
                        <br>
                        La fecha de vencimiento del documento fue el <b>".date('d-m-Y', strtotime($fec_ven))."</b>
                        <br><br>
                        Se despide Atte.
                        <br><br>
                        <h3>Consultora HYR</h3>
                        <br><br>
                        Este mensaje es enviado automaticamente, favor no responder.
                        </body>
                        </html>
                        ";
                        // Always set content-type when sending HTML email
                        $headers = "MIME-Version: 1.0" . "\r\n";
                        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                        // More headers
                        $headers .= 'From: <hyr@hyr.com>' . "\r\n";
                        $headers .= 'Cc: pvicencio@andescode.cl' . "\r\n";
                        $headers .= 'Cc: rmunoz@hyrconsultora.com' . "\r\n";
                        mail($to,$subject,$message,$headers);
        } catch (Exception $e) {
                throw $e;
        }
        }
}
?>