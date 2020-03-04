<?php
require_once '../recursos/db/db.php';

/*/////////////////////////////
/////////Clase Persona/////////
/////////////////////////////*/

class PersonaDAO    
{
    private $id_per;
    private $rut;
    private $nombre;
    private $mail;
    private $fec_cre;
    private $usu_cre;
    private $pass;
    private $vigencia;
    private $clave_previred;
    private $clave_sii;







    public function __construct($id_per=null,
                                $rut=null,
                                $nombre=null,
                                $mail=null,
                                $fec_cre=null,
                                $usu_cre=null,
                                $pass=null,
                                $vigencia=null,
                                $clave_previred=null,
                                $clave_sii=null) 
                                {


    $this->id_per       = $id_per;
    $this->rut          = $rut;
    $this->nombre       = $nombre;
    $this->mail         = $mail;
    $this->fec_cre      = $fec_cre;
    $this->usu_cre      = $usu_cre;
    $this->pass         = $pass;
    $this->vigencia     = $vigencia;
    $this->clave_previred  = $clave_previred;
    $this->clave_sii    = $clave_sii;
    }

    public function getPer() {
    return $this->id_per;
    }






    /*///////////////////////////////////////
    /////////////Crear Personas///////////////
    ///////////////////////////////////////*/
    public function crear_persona() {


        try{
             
                $pdo = AccesoDB::getCon();

                 $sql_crear_per = " INSERT INTO `persona`
                                    (
                                    `rut_per`,
                                    `nom_per`,
                                    `mail_per`,
                                    `fec_cre_per`,
                                    `usu_cre_per`,
                                    `pass_per`,
                                    `vig_per`,
                                    `clave_previred_per`,
                                    `clave_sii_per`)
                                    VALUES
                                    (
                                    :rut,:nom,:mail,:fec_cre,:usu_cre,'',:vig,:clave_previred,:clave_sii)";


                $stmt = $pdo->prepare($sql_crear_per);
                
                $stmt->bindParam(":rut", $this->rut, PDO::PARAM_STR);
                $stmt->bindParam(":nom", $this->nombre, PDO::PARAM_STR);
                $stmt->bindParam(":mail", $this->mail, PDO::PARAM_STR);
                $stmt->bindParam(":fec_cre", $this->fec_cre, PDO::PARAM_STR);
                $stmt->bindParam(":usu_cre", $this->usu_cre, PDO::PARAM_INT);
                $stmt->bindParam(":vig", $this->vigencia, PDO::PARAM_INT);
                $stmt->bindParam(":clave_previred", $this->clave_previred, PDO::PARAM_STR);
                $stmt->bindParam(":clave_sii", $this->clave_sii, PDO::PARAM_STR);
                $stmt->execute();



            if ($stmt->rowCount() > 0) {

                $sql_id_per = "select id_per from persona where rut_per = :rut";

                $stmt = $pdo->prepare($sql_id_per);
                $stmt->bindParam(":rut", $this->rut, PDO::PARAM_STR);
                $stmt->execute();


                $id_persona = $stmt->fetch(PDO::FETCH_ASSOC);
               
                            return $id_persona["id_per"];
                            
            }


        

            } catch (Exception $e) {
                //echo"'Error, comuniquese con el administrador".  $e->getMessage()." '"; 
                echo"-1";
            }
    }



    /*///////////////////////////////////////
    //////////Modificar persona//////////////
    ///////////////////////////////////////*/
    public function modificar_persona() {


        try{
             
                $pdo = AccesoDB::getCon();

                $sql_mod_per = "UPDATE `persona`
                                        SET
                                        `nom_per` = :nom_per,
                                        `mail_per` = :mail,
                                        `vig_per` = :vig_per,
                                        `clave_previred_per` = :clave_previred,
                                        `clave_sii_per` = :clave_sii
                                        WHERE `id_per` = :id";


                $stmt = $pdo->prepare($sql_mod_per);
                $stmt->bindParam(":nom_per", $this->nombre, PDO::PARAM_STR);
                $stmt->bindParam(":mail", $this->mail, PDO::PARAM_STR);
                $stmt->bindParam(":vig_per", $this->vigencia, PDO::PARAM_INT);
                $stmt->bindParam(":clave_previred", $this->clave_previred, PDO::PARAM_STR);
                $stmt->bindParam(":clave_sii", $this->clave_sii, PDO::PARAM_STR);
                $stmt->bindParam(":id", $this->id_per, PDO::PARAM_INT);

                $stmt->execute();

                return $stmt->rowCount();
        

            } catch (Exception $e) {
                echo"Error, comuniquese con el administrador".  $e->getMessage()."";
            }
    }


    /*///////////////////////////////////////
    /////////////Registrar Sociedad//////////
    ///////////////////////////////////////*/
    public function reg_sociedad($emp,$porc,$monto,$vig,$fec_cre) {


        try{
             
                $pdo = AccesoDB::getCon();

                 $sql_reg_soc = " INSERT INTO `sociedad`
                                    (
                                    `porc_part_soc`,
                                    `monto_part_soc`,
                                    `id_per_soc`,
                                    `id_emp_soc`,
                                    `vig_soc`,
                                    `fec_cre_soc`,
                                    `usu_cre_soc`)
                                    VALUES
                                    (
                                    :porc,
                                    :monto,
                                    :per,
                                    :emp,
                                    :vig,
                                    :fec_cre,
                                    :usu)";


                $stmt = $pdo->prepare($sql_reg_soc);
                
                $stmt->bindParam(":porc", $porc, PDO::PARAM_INT);
                $stmt->bindParam(":monto", $monto, PDO::PARAM_INT);
                $stmt->bindParam(":per", $this->id_per, PDO::PARAM_INT);
                $stmt->bindParam(":emp", $emp, PDO::PARAM_INT);
                $stmt->bindParam(":vig", $vig, PDO::PARAM_INT);
                $stmt->bindParam(":fec_cre", $fec_cre, PDO::PARAM_STR);
                $stmt->bindParam(":usu", $this->usu_cre, PDO::PARAM_INT);
                $stmt->execute();

                $response = $stmt->rowCount();

                return $response;


        

            } catch (Exception $e) {
                echo"'Error, comuniquese con el administrador".  $e->getMessage()." '"; 
                //echo"-1";
            }
    }




    /*///////////////////////////////////////
    /////////////Eliminar Sociedad//////////
    ///////////////////////////////////////*/
    public function del_sociedad($soc) {


        try{
             
                $pdo = AccesoDB::getCon();

                 $sql_del_soc = " update sociedad
                                    set vig_soc = 0
                                    where id_soc = :soc";


                $stmt = $pdo->prepare($sql_del_soc);
                
                $stmt->bindParam(":soc", $soc, PDO::PARAM_INT);
                $stmt->execute();

                $response = $stmt->rowCount();

                return $response;


        

            } catch (Exception $e) {
                echo"'Error, comuniquese con el administrador".  $e->getMessage()." '"; 
                //echo"-1";
            }
    }





    /*///////////////////////////////////////
    //////////Actualizar Contraseña /////////
    ///////////////////////////////////////*/
    public static function actualizar_contraseña($id,$pwd){

        try{

                
                $pdo = AccesoDB::getCon();

                $sql_pwd = "update persona
                set pass_per = :pwd
                where id_per = :id";


                
                $stmt = $pdo->prepare($sql_pwd);
                $stmt->bindParam(":pwd", $pwd, PDO::PARAM_STR);
                $stmt->bindParam(":id", $id, PDO::PARAM_INT);
           
                $stmt->execute();
        

        } catch (Exception $e) {
                echo"<script type=\"text/javascript\">alert('Error, comuniquese con el administrador".  $e->getMessage()." '); window.location='../../index.html';</script>"; 
        }
    }


































//sin uso, no actualizadas






    /*///////////////////////////////////////
    //////////Modificar Usuario//////////////
    ///////////////////////////////////////*/
    public function modificar_usuario() {


        try{
             
                $pdo = AccesoDB::getCon();

                $sql_mod_usu = "UPDATE `usuarios`
                                    SET
                                    `nom_usu` = :nombre,
                                    `apepat_usu` = :ape_pat,
                                    `apemat_usu` = :ape_mat,
                                    `mail_usu` = :mail,
                                    `id_perfil` = :perfil,
                                    `cargo_usu` = :cargo,
                                    `vig_usu` = :vigencia
                                    WHERE `id_usu` = :id ";


                $stmt = $pdo->prepare($sql_mod_usu);
                $stmt->bindParam(":nombre", $this->nombre, PDO::PARAM_STR);
                $stmt->bindParam(":ape_pat", $this->ape_pat, PDO::PARAM_STR);
                $stmt->bindParam(":ape_mat", $this->ape_mat, PDO::PARAM_STR);
                $stmt->bindParam(":mail", $this->mail, PDO::PARAM_STR);
                $stmt->bindParam(":perfil", $this->perfil, PDO::PARAM_INT);
                $stmt->bindParam(":cargo", $this->cargo, PDO::PARAM_INT);
                $stmt->bindParam(":vigencia", $this->vigencia, PDO::PARAM_BOOL);
                $stmt->bindParam(":id", $this->id_usu, PDO::PARAM_INT);

                $stmt->execute();
        

            } catch (Exception $e) {
                echo"Error, comuniquese con el administrador".  $e->getMessage()."";
            }
    }




}

    ?>