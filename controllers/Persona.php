<?php
class Persona{
        public function __construct(){}
        public function index(){
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/1_users/user_principal_view.php";
            require_once "views/roles/admin/footer.php";
        }
        public function crear(){
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/1_users/user_new.php";
            require_once "views/roles/admin/footer.php";
        }
        public function consultar(){
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/1_users/user_view.php";
            require_once "views/roles/admin/footer.php";
        }
        public function actualizar(){
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/1_users/user_actualizar.php";
            require_once "views/roles/admin/footer.php";
        }
    }
?>
