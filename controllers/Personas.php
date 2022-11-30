<?php
require_once "models/dto_model/Persona_dto.php";
require_once "models/dao_model/Persona_dao.php";
class Personas{

        public function __construct(){
            $this->personaDao = new Persona_dao;
        }
        public function index(){
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/1_users/1_1_personas/user_principal_view.php";
            require_once "views/roles/admin/footer.php";
        }
        public function crear_personas(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/1_users/1_1_personas/user_new.php";
            require_once "views/roles/admin/footer.php";
                
            }

            elseif($_SERVER['REQUEST_METHOD'] == 'POST'){
                if ($_POST['pass_persona'] == $_POST['pass2_persona']) {                    
                    $persona_dto=new Persona_dto($_POST['id_rol'],$_POST['id_persona'],$_POST['nombres_persona'],$_POST['apellidos_persona'],$_POST['correo_persona'],$_POST['telefono_persona'],$_POST['pass_persona']);
                    $this->personaDao->createPersona($persona_dto);
                    header("Location: ?c=Personas&a=crear_personas");
                } else {
                    header("Location: ?c=Personas&a=crear_personas");
                }
                
            }
            
        }
        public function consultar_persona(){
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/1_users/1_1_personas/user_view.php";
            require_once "views/roles/admin/footer.php";
        }
        public function actualizar_persona(){
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/1_users/1_1_personas/user_modi.php";
            require_once "views/roles/admin/footer.php";
        }
    }
?>
