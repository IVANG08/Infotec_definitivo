<?php
    require_once "models/dto_model/Rol_dto.php";
    require_once "models/dao_model/Rol_dao.php";

    class Roles{
        private $rolDao;
        public function __construct(){
            $this->rolDao = new Rol_dao;
        }
        public function index(){
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/0_rol/roles_principal_view.php";
            require_once "views/roles/admin/footer.php";
        }
        public function crear_rol(){
            
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/roles/admin/header_dash.php";
                require_once "views/modules/0_rol/crear_rol.view.php";
                require_once "views/roles/admin/footer.php";
                
            }

            elseif($_SERVER['REQUEST_METHOD'] == 'POST'){
                // Capturar Datos
                $rol_dto=new Rol_dto($_POST['id_rol'],$_POST['nombre_rol']);
                $this->rolDao->createRol($rol_dto);               
                // Validar los Datos
                // Crear el Objeto
                // Comprobar en la base de datos
                // Redireccionar al Dashboard
                header("Location: ?c=Roles&a=consultar_rol");
            }
        }
        public function consultar_rol(){
            $roles = $this->rolDao->readRolDao();
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/0_rol/consultar_rol.view.php";
            require_once "views/roles/admin/footer.php";
        }
        public function actualizar_rol(){
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/0_rol/actualizar_rol.view.php";
            require_once "views/roles/admin/footer.php";
        }
    }
?>