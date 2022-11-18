<?php
    class Proveedores{
        public function __construct(){}
        public function index(){
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/7_proveedores";
            require_once "views/roles/admin/footer.php";
        
        }
        public function crear(){
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/7_proveedores/crear_provee_view.php";
            require_once "views/roles/admin/footer.php";
        }
        public function consultar(){
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/7_proveedores/consultar_provee_view.php";
            require_once "views/roles/admin/footer.php";
        }
    }
    ?>