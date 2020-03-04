<?php
require_once '../recursos/db/db.php';

/*/////////////////////////////
/////////Clase Empresa/////////
/////////////////////////////*/

class EmpresaDAO    
{
    //22 campos 
    private $id_emp;
    private $razon_social_emp;
    private $rut_emp;
    private $cons_soc_emp;
    private $monto_mensual_emp;
    private $monto_renta_emp;
    private $ciudad_emp;
    private $comuna_emp;
    private $dir_emp;
    private $reg_trib_emp;
    private $fec_ini_act_emp;
    private $mail_emp;
    private $nom_contacto_emp;
    private $patente_comer_emp;
    private $evaluacion_emp;
    private $vig_emp;
    private $fec_cre_emp;
    private $usu_cre_emp;
    private $clave_previred_emp;
    private $clave_sii_emp;
    private $fac_rea_emp;
    private $rta_at_emp;






    public function __construct($id_emp=null,
                                $razon_social_emp=null,
                                $rut_emp=null,
                                $cons_soc_emp=null,
                                $monto_mensual_emp=null,
                                $monto_renta_emp=null,
                                $ciudad_emp=null,
                                $comuna_emp=null,
                                $dir_emp=null,
                                $reg_trib_emp=null,
                                $fec_ini_act_emp=null,
                                $mail_emp=null,
                                $nom_contacto_emp=null,
                                $patente_comer_emp=null,
                                $evaluacion_emp=null,
                                $vig_emp=null,
                                $fec_cre_emp=null,
                                $usu_cre_emp=null,
                                $clave_previred_emp=null,
                                $clave_sii_emp=null,
                                $fac_rea_emp=null,
                                $rta_at_emp=null) 
                                {


    $this->id_emp              = $id_emp;
    $this->razon_social_emp    = $razon_social_emp;
    $this->rut_emp             = $rut_emp;
    $this->cons_soc_emp        = $cons_soc_emp;
    $this->monto_mensual_emp   = $monto_mensual_emp;
    $this->monto_renta_emp     = $monto_renta_emp;
    $this->ciudad_emp          = $ciudad_emp;
    $this->comuna_emp          = $comuna_emp;
    $this->dir_emp             = $dir_emp;
    $this->reg_trib_emp        = $reg_trib_emp;
    $this->fec_ini_act_emp     = $fec_ini_act_emp;
    $this->mail_emp            = $mail_emp;
    $this->nom_contacto_emp    = $nom_contacto_emp;
    $this->patente_comer_emp   = $patente_comer_emp;
    $this->evaluacion_emp      = $evaluacion_emp;
    $this->vig_emp             = $vig_emp;
    $this->fec_cre_emp         = $fec_cre_emp;
    $this->usu_cre_emp         = $usu_cre_emp;
    $this->clave_previred_emp  = $clave_previred_emp;
    $this->clave_sii_emp       = $clave_sii_emp;
    $this->fac_rea_emp         = $fac_rea_emp;
    $this->rta_at_emp          = $rta_at_emp;

    }

    public function getEmp() {
        return $this->id_emp;
    }

    /*///////////////////////////////////////
    //////////////Crear Empresa//////////////
    ///////////////////////////////////////*/
    public function crear_empresa($giros) {


        try{
             
                $pdo = AccesoDB::getCon();

                $sql_crear_emp = "INSERT INTO `empresa` ( 
                                                        `razon_social_emp`,
                                                        `rut_emp`,
                                                        `cons_soc_emp`,
                                                        `monto_mensual_emp`,
                                                        `monto_renta_emp`,
                                                        `ciudad_emp`,
                                                        `comuna_emp`,
                                                        `dir_emp`,
                                                        `reg_trib_emp`,
                                                        `fec_ini_act_emp`,
                                                        `mail_emp`,
                                                        `nom_contacto_emp`,
                                                        `patente_comer_emp`,
                                                        `evaluacion_emp`,
                                                        `vig_emp`,
                                                        `fec_cre_emp`,
                                                        `usu_cre_emp`,
                                                        `clave_previred_emp`,
                                                        `clave_sii_emp`,
                                                        `fac_rea_emp`,
                                                        `rta_at_emp`)

                                                VALUES ( :razon_social_emp, :rut_emp, :cons_soc_emp, :monto_mensual_emp,:monto_renta_emp,
                    :ciudad_emp, :comuna_emp, :dir_emp, :reg_trib_emp, :fec_ini_act_emp, :mail_emp,
                    :nom_contacto_emp,:patente_comer_emp, :evaluacion_emp, :vig_emp,CURDATE(),:usu_cre_emp, :clave_previred_emp, :clave_sii_emp,
                    :fac_rea_emp, :rta_at_emp)";

                $stmt = $pdo->prepare($sql_crear_emp);
             /*   
        /*N°1*/ $stmt->bindParam(":razon_social_emp",$this->razon_social_emp, PDO::PARAM_STR);
        /*N°2*/ $stmt->bindParam(":rut_emp",$this->rut_emp, PDO::PARAM_STR);
        /*N°3*/ $stmt->bindParam(":cons_soc_emp",$this->cons_soc_emp, PDO::PARAM_INT);
        /*N°4*/ $stmt->bindParam(":monto_mensual_emp",$this->monto_mensual_emp, PDO::PARAM_INT);
        /*N°5*/ $stmt->bindParam(":monto_renta_emp",$this->monto_renta_emp, PDO::PARAM_INT);
        /*N°6*/ $stmt->bindParam(":ciudad_emp",$this->ciudad_emp, PDO::PARAM_INT);
        /*N°7*/ $stmt->bindParam(":comuna_emp",$this->comuna_emp, PDO::PARAM_INT);
        /*N°8*/ $stmt->bindParam(":dir_emp",$this->dir_emp, PDO::PARAM_STR);
        /*N°9*/ $stmt->bindParam(":reg_trib_emp",$this->reg_trib_emp, PDO::PARAM_STR);
        /*N°10*/$stmt->bindParam(":fec_ini_act_emp",$this->fec_ini_act_emp, PDO::PARAM_STR);
        /*N°11*/$stmt->bindParam(":mail_emp",$this->mail_emp , PDO::PARAM_STR);
        /*N°12*/$stmt->bindParam(":nom_contacto_emp",$this->nom_contacto_emp , PDO::PARAM_STR);
        /*N°13*/$stmt->bindParam(":patente_comer_emp",$this->patente_comer_emp , PDO::PARAM_INT);
        /*N°14*/$stmt->bindParam(":evaluacion_emp",$this->evaluacion_emp , PDO::PARAM_INT);
        /*N°15*/$stmt->bindParam(":vig_emp",$this->vig_emp , PDO::PARAM_INT);
        /*N°16$stmt->bindParam(":fec_cre_emp",$this->fec_cre_emp , PDO::PARAM_STR);*/
        /*N°17*/$stmt->bindParam(":usu_cre_emp",$this->usu_cre_emp , PDO::PARAM_INT);
        /*N°18*/$stmt->bindParam(":clave_previred_emp",$this->clave_previred_emp , PDO::PARAM_STR);
        /*N°19*/$stmt->bindParam(":clave_sii_emp",$this->clave_sii_emp , PDO::PARAM_STR);
        /*N°20*/$stmt->bindParam(":fac_rea_emp",$this->fac_rea_emp , PDO::PARAM_INT);
        /*N°21*/$stmt->bindParam(":rta_at_emp",$this->rta_at_emp, PDO::PARAM_INT);
                $stmt->execute();




            if ($giros <> '') {
                                  foreach ($giros as $row) {
                              $giro = $row['giro'];
                              
                                  $sql_rut = "INSERT INTO `giro`
                                                (`desc_giro`,`id_emp_giro`,`vig_giro`,`fec_cre_giro`,`usu_cre_giro`)
                                                VALUES
                                                (:giro,(select id_emp from empresa order by id_emp desc limit 1),'1',CURDATE(),:usu_cre_giro)";



                $stmt1 = $pdo->prepare($sql_rut);
                        $stmt1->bindParam("giro", $giro, PDO::PARAM_STR);
                        $stmt1->bindParam(":usu_cre_giro",$this->usu_cre_emp , PDO::PARAM_INT);
                        
                $stmt1->execute();

                
                }
            }
            return $stmt->rowCount();



        

            } catch (Exception $e) {
                //echo $e->getMessage();
                echo"0";
            }
    }

    /*///////////////////////////////////////
    //////////Modificar Empresa//////////////
    ///////////////////////////////////////*/
    public function modificar_empresa() {


        try{
             
                $pdo = AccesoDB::getCon();

                $sql_mod_emp = "UPDATE `empresa`
                                    SET
                                    `razon_social_emp` = :razon_emp,
                                    `vig_emp` = :vig_emp,
                                    `nom_contacto_emp` = :nom_contacto_emp,
                                    `mail_emp` = :mail_emp,
                                    `dir_emp` = :dir_emp,
                                    `ciudad_emp` = :ciudad_emp,
                                    `comuna_emp` = :comuna_emp,
                                    `monto_mensual_emp` = :monto_mensual_emp,
                                    `monto_renta_emp` = :monto_renta_emp,
                                    `cons_soc_emp` = :cons_soc_emp,
                                    `reg_trib_emp` = :reg_trib_emp,
                                    `patente_comer_emp` = :patente_comer_emp,
                                    `evaluacion_emp` = :evaluacion_emp,
                                    `rta_at_emp` = :rta_at_emp,
                                    `clave_sii_emp` = :clave_sii_emp,
                                    `clave_previred_emp` = :clave_previred_emp,
                                    `fac_rea_emp` = :fac_rea_emp,
                                    `fec_ini_act_emp` = :fec_ini_emp
                                    WHERE `id_emp` = :id ";


                $stmt = $pdo->prepare($sql_mod_emp);
                $stmt->bindParam(":razon_emp",$this->razon_social_emp , PDO::PARAM_STR);
                $stmt->bindParam(":vig_emp",$this->vig_emp , PDO::PARAM_INT);  
                $stmt->bindParam(":nom_contacto_emp",$this->nom_contacto_emp , PDO::PARAM_STR);
                $stmt->bindParam(":mail_emp",$this->mail_emp , PDO::PARAM_STR);
                $stmt->bindParam(":patente_comer_emp",$this->patente_comer_emp , PDO::PARAM_INT);
                $stmt->bindParam(":evaluacion_emp",$this->evaluacion_emp , PDO::PARAM_INT);
                $stmt->bindParam(":cons_soc_emp",$this->cons_soc_emp, PDO::PARAM_INT);
                $stmt->bindParam(":monto_mensual_emp",$this->monto_mensual_emp, PDO::PARAM_INT);
                $stmt->bindParam(":monto_renta_emp",$this->monto_renta_emp, PDO::PARAM_INT);
                $stmt->bindParam(":ciudad_emp",$this->ciudad_emp, PDO::PARAM_INT);
                $stmt->bindParam(":comuna_emp",$this->comuna_emp, PDO::PARAM_INT);
                $stmt->bindParam(":dir_emp",$this->dir_emp, PDO::PARAM_STR);
                $stmt->bindParam(":reg_trib_emp",$this->reg_trib_emp, PDO::PARAM_STR);
                $stmt->bindParam(":clave_previred_emp",$this->clave_previred_emp , PDO::PARAM_STR);
                $stmt->bindParam(":clave_sii_emp",$this->clave_sii_emp , PDO::PARAM_STR);
                $stmt->bindParam(":fac_rea_emp",$this->fac_rea_emp , PDO::PARAM_INT);
                $stmt->bindParam(":rta_at_emp",$this->rta_at_emp, PDO::PARAM_INT);
                $stmt->bindParam(":fec_ini_emp",$this->fec_ini_act_emp, PDO::PARAM_STR);
                $stmt->bindParam(":id", $this->id_emp, PDO::PARAM_INT);

                $stmt->execute();
        

            } catch (Exception $e) {
                echo"Error, comuniquese con el administrador".  $e->getMessage()."";
            }
    }



    /*///////////////////////////////////////
    //////////Registrar Modulo Laboral//////////////
    ///////////////////////////////////////*/
    public function reg_mod_lab($emp,$cot_lab,$nro_trab,$cargas_lab,$fec_reg,$fec_act,$tasa_acc_lab,$id_usu,$periodo) {


        try{
             
                $pdo = AccesoDB::getCon();

                $sql_reg_mod = "INSERT INTO `mod_lab`
                        (
                                    `cot_mod_lab`,
                                    `ntrab_mod_lab`,
                                    `cargas_mod_lab`,
                                    `fec_reg_mod_lab`,
                                    `tasa_acc_mod_lab`,
                                    `periodo_mod_lab`,
                                    `usu_mod_lab`,
                                    `emp_mod_lab`,
                                    `fec_act_mod_lab`)
                                    VALUES
                                    (
                                    :cot,
                                    :ntrab,
                                    :cargas,
                                    :fec_reg,
                                    :tasa_acc,
                                    :periodo,
                                    :usu,
                                    :emp,
                                    :fec_act)";


                $stmt = $pdo->prepare($sql_reg_mod);
                $stmt->bindParam(":cot",$cot_lab , PDO::PARAM_INT);
                $stmt->bindParam(":ntrab",$nro_trab , PDO::PARAM_INT);  
                $stmt->bindParam(":cargas",$cargas_lab , PDO::PARAM_INT);
                $stmt->bindParam(":fec_reg",$fec_reg , PDO::PARAM_STR);
                $stmt->bindParam(":tasa_acc",$tasa_acc_lab , PDO::PARAM_STR);
                $stmt->bindParam(":periodo",$periodo , PDO::PARAM_STR);
                $stmt->bindParam(":usu",$id_usu , PDO::PARAM_INT);
                $stmt->bindParam(":emp",$emp, PDO::PARAM_INT);
                $stmt->bindParam(":fec_act",$fec_act, PDO::PARAM_INT);
                $stmt->execute();

                return $stmt->rowCount();
        

            } catch (Exception $e) {
                echo"Error, comuniquese con el administrador".  $e->getMessage()."";
            }
    }



    /*///////////////////////////////////////
    //////////Actualizar Contraseña /////////
    ///////////////////////////////////////*/
    public static function actualizar_contraseña($id,$pwd){

        try{

                
                $pdo = AccesoDB::getCon();

                $sql_pwd = "update empresa
                set pass_emp = :pwd
                where id_emp = :id";


                
                $stmt = $pdo->prepare($sql_pwd);
                $stmt->bindParam(":pwd", $pwd, PDO::PARAM_STR);
                $stmt->bindParam(":id", $id, PDO::PARAM_INT);
           
                $stmt->execute();
        

        } catch (Exception $e) {
                echo"<script type=\"text/javascript\">alert('Error, comuniquese con el administrador".  $e->getMessage()." '); window.location='../../index.html';</script>"; 
        }
    }



  


}

    ?>