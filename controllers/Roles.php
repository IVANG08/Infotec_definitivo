<?php
    class Roles{
        public function __construct(){}
        public function index(){
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/0_rol/roles_principal_view.php";
            require_once "views/roles/admin/footer.php";
        }
    }
?>