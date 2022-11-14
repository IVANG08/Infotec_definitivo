<?php
    class Roles{
        public function __construct(){}
        public function index(){
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/0_rol/roles_principal_view.php";
            require_once "views/roles/admin/footer.php";
        }
        public function crear(){
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/0_rol/crear_rol.view.php";
            require_once "views/roles/admin/footer.php";
        }
        public function consultar(){
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/0_rol/consultar_rol.view.php";
            require_once "views/roles/admin/footer.php";
        }
        public function actualizar(){
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/0_rol/actualizar_rol.view.php";
            require_once "views/roles/admin/footer.php";
        }
    }
?>