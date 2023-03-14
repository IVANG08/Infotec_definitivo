<?php
    require_once "models/dto_model/Usuario_dto.php";
    require_once "models/dao_model/Usuario_dao.php";
    require_once "models/dto_model/Rol_dto.php";
    require_once "models/dao_model/Rol_dao.php";
    class Usuario{
            private $usuarioDao;
            private $rolDao;
            public function __construct(){
                $this->usuarioDao = new Usuario_dao;
                $this->rolDao = new Rol_dao;

            }
            public function index(){
                $usuario = $this->usuarioDao->readUsuarioDao();
                $roles = $this->rolDao->readRolDao();

                
                if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id_rol'])){
                    $result =$this->usuarioDao->consultarRolDao($_GET['id_rol']);
                    $Usuario_dto=new Usuario_dto($result[0],$result[1]);
                    $Usuario_dto->setIdRol($result[0]);
                }
                elseif($_SERVER['REQUEST_METHOD'] == 'POST'){
                    // Capturar datos
                    $Usuario_dto=new Usuario_dto($_POST['id_rol'],$_POST['id_usuario'],$_POST['nombres_usuario'],$_POST['apellidos_usuario'],$_POST['correo_usuario'],$_POST['telefono_usuario'],$_POST['pass_usuario']);
                    $this->usuarioDao->createUsuario($Usuario_dto);
                    header("Location: ?c=Usuario"); 
                    
                }
                require_once "views/roles/admin/header_dash.php";
                require_once "views/modules/1_users/1_1_usuario/usuario.view.php";
                require_once "views/roles/admin/footer.php";
            }
            public function crear_usuario(){
                if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                    require_once "views/roles/admin/header_dash.php";
                    require_once "views/modules/1_users/1_1_usuario/usuario.view.php";
                    require_once "views/roles/admin/footer.php";
                    
                }

                elseif($_SERVER['REQUEST_METHOD'] == 'POST'){
                    if ($_POST['pass_usuario'] == $_POST['pass2_usuario']) {                    
                        $Usuario_dto=new Usuario_dto($_POST['id_rol'],$_POST['id_usuario'],$_POST['nombres_usuario'],$_POST['apellidos_usuario'],$_POST['correo_usuario'],$_POST['telefono_usuario'],$_POST['pass_usuario']);
                        $this->usuarioDao->createUsuario($Usuario_dto);
                        header("Location: ?c=Usuario&a=crear_usuario");
                    } else {
                        header("Location: ?c=Usuario&a=crear_usuario");
                    }
                    
                }               
            }
            public function eliminar_usuario(){ 
                if ($_SERVER['REQUEST_METHOD'] == 'GET'){
                    
                    // Capturar Datos
                    $this->usuarioDao->eliminarUsuarioDao($_GET['id_usuario']); 
                }
                $roles = $this->rolDao->readRolDao();
                $usuario = $this->usuarioDao->readUsuarioDao();

                require_once "views/roles/admin/header_dash.php";
                require_once "views/modules/1_users/1_1_usuario/usuario.view.php";
                require_once "views/roles/admin/footer.php";
           
        }
        public function editar_usuario(){
           
            
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                $editper =$this->usuarioDao->actualizarUsuarioDao($_GET['id_usuario']); 
                $roles = $this->rolDao->readRolDao();
              
            }
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/1_users/1_1_usuario/usuario.editar.php";
            require_once "views/roles/admin/footer.php";
        }
        public function modificar_usuario(){
           
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
           
                $this->usuarioDao->modificarUsuarioDao($_POST['id_rol'],$_POST['id_usuario'],$_POST['nombres_usuario'],$_POST['apellidos_usuario'], $_POST['correo_usuario'], $_POST['telefono_usuario'],$_POST['pass_usuario']);               
                header("Location: ?c=Usuario");
            }
            
        }
    }
?>
