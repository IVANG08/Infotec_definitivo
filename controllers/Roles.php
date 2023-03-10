<?php
    require_once "models/dto_model/Rol_dto.php";
    require_once "models/dao_model/Rol_dao.php";

    class Roles{
        private $rolDao;
        public function __construct(){
            $this->rolDao = new Rol_dao;
        }
        public function index(){
            $roles = $this->rolDao->readRolDao();
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/0_rol/rol.view.php";
            require_once "views/roles/admin/footer.php";
            if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id_rol'])) {
                $result =$this->rolDao->consultarRolDao($_GET['id_rol']); 
                $rol_dto=new Rol_dto($result[0],$result[1]);   
                $rol_dto->setCodigoRol($result[0])   ;        
            }
            elseif($_SERVER['REQUEST_METHOD'] == 'POST'){
                // Capturar Datos
                $rol_dto=new Rol_dto($_POST['id_rol'],$_POST['nombre_rol']);
                $this->rolDao->createRol($rol_dto);               
                header("Location: ?c=Roles");
            }
        }
        public function consultar_rol(){
            $roles = $this->rolDao->readRolDao();
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/0_rol/rol.view.php";
            require_once "views/roles/admin/footer.php";
        }
        public function actualizar_rol(){
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/0_rol/actualizar_rol.view.php";
            require_once "views/roles/admin/footer.php";
        }
    }
?>