<?php
    require_once "models/dto_model/Persona_dto.php";
    require_once "models/dao_model/Persona_dao.php";
    require_once "models/dto_model/Rol_dto.php";
    require_once "models/dao_model/Rol_dao.php";
    class Personas{
            private $personaDao;
            private $rolDao;
            public function __construct(){
                $this->personaDao = new Persona_dao;
                $this->rolDao = new Rol_dao;

            }
            public function index(){
                $persona = $this->personaDao->readpersonaDao();
                $roles = $this->rolDao->readRolDao();

                
                if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id_rol'])){
                    $result =$this->personaDao->consultarRolDao($_GET['id_rol']);
                    $persona_dto=new Persona_dto($result[0],$result[1]);
                    $persona_dto->setIdRol($result[0]);
                }
                elseif($_SERVER['REQUEST_METHOD'] == 'POST'){
                    // Capturar datos
                    $persona_dto=new Persona_dto($_POST['id_rol'],$_POST['id_personas'],$_POST['nombres_persona'],$_POST['apellidos_persona'],$_POST['correo_persona'],$_POST['telefono_persona'],$_POST['pass_persona']);
                    $this->personaDao->createPersona($persona_dto);
                    header("Location: ?c=Personas"); 
                    
                }
                require_once "views/roles/admin/header_dash.php";
                require_once "views/modules/1_users/1_1_personas/persona.view.php";
                require_once "views/roles/admin/footer.php";
            }
            public function crear_personas(){
                if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                    require_once "views/roles/admin/header_dash.php";
                    require_once "views/modules/1_users/1_1_personas/persona.view.php";
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
            public function eliminar_persona(){ 
                if ($_SERVER['REQUEST_METHOD'] == 'GET'){
                    
                    // Capturar Datos
                    $this->personaDao->eliminarPersonaDao($_GET['id_personas']); 
                }
                $roles = $this->rolDao->readRolDao();
                $persona = $this->personaDao->readpersonaDao();

                require_once "views/roles/admin/header_dash.php";
                require_once "views/modules/1_users/1_1_personas/persona.view.php";
                require_once "views/roles/admin/footer.php";
           
        }
        public function editar_persona(){
           
            
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                $editper =$this->personaDao->actualizarPersonaDao($_GET['id_personas']); 
                $roles = $this->rolDao->readRolDao();
              
            }
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/1_users/1_1_personas/persona.editar.php";
            require_once "views/roles/admin/footer.php";
        }
        public function modificar_persona(){
           
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
               
                $this->personaDao->modificarPersonaDao($_POST['id_rol'],$_POST['id_personas'],$_POST['nombres_persona'],$_POST['apellidos_persona'], $_POST['correo_persona'], $_POST['telefono_persona'],$_POST['pass_persona']);               
                header("Location: ?c=Personas");
            }
            
        }
    }
?>
