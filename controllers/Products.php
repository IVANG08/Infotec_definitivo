<?php
    class Products{
        public function __construct(){}
        public function index(){
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/2_products/2_2producto/producto_principal.view.php";
            require_once "views/roles/admin/footer.php";
        }
        public function crear(){
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/2_products/2_2producto/crear_producto.php";
            require_once "views/roles/admin/footer.php";
        }
        public function consultar(){
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/2_products/2_2producto/consultar_producto.view.php";
            require_once "views/roles/admin/footer.php";
        }
        public function actualizar(){
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/2_products/2_2producto/actualizar_producto.view.php";
            require_once "views/roles/admin/footer.php";
        }
    }
?>