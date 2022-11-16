<?php
    class Categoria{
        public function __construct(){}
        public function index(){
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/2_products/2_1categoria/categoria.principal.view.php";
            require_once "views/roles/admin/footer.php";
        }
        public function crear(){
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/2_products/crear_categoria.php";
            require_once "views/roles/admin/footer.php";
        } 
        public function consultar(){
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/2_products/2_1categoria/consultar_categoria.php";
            require_once "views/roles/admin/footer.php";
        }
         public function actualizar(){
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/2_products/2_1categoria/actualizar_categoria.php";
            require_once "views/roles/admin/footer.php";
        }
    }
?>