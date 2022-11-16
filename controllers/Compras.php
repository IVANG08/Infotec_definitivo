<?php
    class Compras{
        public function __construct(){}
        public function index(){
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/4_sale/factura.php";
            require_once "views/roles/admin/footer.php";
        }
    }
?>