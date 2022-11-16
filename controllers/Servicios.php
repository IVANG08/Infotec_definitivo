<?php
    class Servicios{
        public function __construct(){}
        public function index(){
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/2_products/2_3servicio/servicios_principal_view.php";
            require_once "views/roles/admin/footer.php";
        }
        public function crear(){
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/2_products/2_3servicio/crear_servicios.php";
            require_once "views/roles/admin/footer.php";
        }
        public function consultar(){
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/2_products/2_3servicio/consultar_servicio.php";
            require_once "views/roles/admin/footer.php";
        }
        public function actualizar(){
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/2_products/2_3servicio/actualizar_servicio.php";
            require_once "views/roles/admin/footer.php";
        }
    }
?>