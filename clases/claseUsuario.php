<?php
require_once '../recursos/db/db.php';

/*/////////////////////////////
/////////Clase Usuario/////////
/////////////////////////////*/

class UsuarioDAO    
{
    private $id_usu;
    private $nombre;
    private $ape_pat;
    private $ape_mat;
    private $rut;
    private $mail;
    private $perfil;
    private $cargo;
    private $pass;
    private $vigencia;
    private $nick;






    public function __construct($id_usu=null,
                                $rut=null,
                                $nombre=null,
                                $ape_pat=null,
                                $ape_mat=null,
                                $mail=null,
                                $perfil=null,
                                $cargo=null,
                                $pass=null,
                                $vigencia=null,
                                $nick=null) 
                                {


    $this->id_usu       = $id_usu;
    $this->rut          = $rut;
    $this->nombre       = $nombre;
    $this->ape_pat      = $ape_pat;
    $this->ape_mat      = $ape_mat;
    $this->mail         = $mail;
    $this->perfil       = $perfil;
    $this->cargo        = $cargo;
    $this->pass         = $pass;
    $this->vigencia     = $vigencia;
    $this->nick         = $nick;
    }

    public function getUsu() {
    return $this->id_usu;
    }
    /*///////////////////////////////////////
    /////////////////Login //////////////////
    ///////////////////////////////////////*/
    public function login(){

        try{

                
                $pdo = AccesoDB::getCon();

                $sql_login = "select id_usu id, concat(nom_usu,' ',apepat_usu) nom,mail_usu,id_perfil,pass_usu,cargo_usu
                from usuarios where vig_usu = 1 and rut_usu = :rut and pass_usu = :pass
                union all
                select id_emp id, razon_social_emp nom, mail_emp mail, 3 id_perfil, pass_emp,0
                from empresa  where vig_emp = 1 and rut_emp = :rut and pass_emp = :pass
                union all
                select id_per id, nom_per nom, mail_per mail, 4 id_perfil,pass_per,0
                from persona where vig_per = 1 and rut_per = :rut and pass_per = :pass";

                $stmt = $pdo->prepare($sql_login);
                $stmt->bindParam(":rut", $this->rut, PDO::PARAM_STR);
                $stmt->bindParam(":pass", $this->pass, PDO::PARAM_STR);
           
                $stmt->execute();

               

                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                
                if ($this->pass == $row["pass_usu"]){
                    session_start();
                        $_SESSION['id'] = $row['id'];
                        $_SESSION['mail'] = $row['mail_usu'];
                        $_SESSION['nom'] = $row['nom'];
                        $_SESSION['perfil'] = $row['id_perfil'];
                        $_SESSION['cargo'] = $row['cargo_usu'];
                        $_SESSION['start'] = time();
                        $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);
                        
                        //echo"<script type=\"text/javascript\">       window.location='../pag_usu/inicio.php';</script>";
                        //diferenciacion entre usuarios y clientes
                        if ($row['id_perfil'] == 1 or $row['id_perfil'] == 2) {
                            echo"0";
                        }else if ($row['id_perfil'] == 3 or $row['id_perfil'] == 4) {
                            echo"1";
                        }
                        
                         
                        
                }else{
                    
                   echo "-2";
                   //echo"<script type=\"text/javascript\">alert('Error, favor verifique sus datos e intente nuevamente o comuniquese con su Administrador de Sistema.');window.location='../index.html';</script>"; 
                }

        } catch (Exception $e) {
                echo"-1";
                //echo"<script type=\"text/javascript\">alert('Error, comuniquese con el administrador".  $e->getMessage()." '); window.location='../../index.html';</script>"; 
        }
    }





    /*///////////////////////////////////////
    /////////////Crear Usuario///////////////
    ///////////////////////////////////////*/
    public function crear_usuario() {


        try{
             
                $pdo = AccesoDB::getCon();

                 $sql_crear_usu = " INSERT INTO `usuarios`(`nom_usu`,
                                                            `apepat_usu`,
                                                            `apemat_usu`,
                                                            `rut_usu`,
                                                            `mail_usu`,
                                                            `id_perfil`,
                                                            `fec_cre_usu`,
                                                            `cargo_usu`,
                                                            `pass_usu`,
                                                            `vig_usu`,
                                                            `nick_usu`)

                 VALUES(:nombre,:ape_pat,:ape_mat,:rut,:mail,:perfil,CURDATE(),:cargo,:pass,:vigencia,:nick)";


                $stmt = $pdo->prepare($sql_crear_usu);
                
                $stmt->bindParam(":nombre", $this->nombre, PDO::PARAM_STR);
                $stmt->bindParam(":ape_pat", $this->ape_pat, PDO::PARAM_STR);
                $stmt->bindParam(":ape_mat", $this->ape_mat, PDO::PARAM_STR);
                $stmt->bindParam(":rut", $this->rut, PDO::PARAM_STR);
                $stmt->bindParam(":mail", $this->mail, PDO::PARAM_STR);
                $stmt->bindParam(":perfil", $this->perfil, PDO::PARAM_INT);
                $stmt->bindParam(":cargo", $this->cargo, PDO::PARAM_INT);
                $stmt->bindParam(":pass", $this->pass, PDO::PARAM_STR);
                $stmt->bindParam(":vigencia", $this->vigencia, PDO::PARAM_BOOL);
                $stmt->bindParam(":nick", $this->nick, PDO::PARAM_STR);
                $stmt->execute();
        

            } catch (Exception $e) {
                echo"1";
            }
    }


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

    /*///////////////////////////////////////
    //////////Actualizar Contraseña /////////
    ///////////////////////////////////////*/
    public static function actualizar_contraseña($id,$pwd){

        try{

                
                $pdo = AccesoDB::getCon();

                $sql_pwd = "update usuarios
                set pass_usu = :pwd
                where id_usu = :id";


                
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