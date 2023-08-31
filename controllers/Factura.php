<?php
    require_once "models/dto_model/Factura_dto.php";
    require_once "models/dao_model/Factura_dao.php";
    require_once "models/dto_model/Cliente_dto.php";
    require_once "models/dao_model/Cliente_dao.php";
    require_once "models/dto_model/Vehiculo_dto.php";
    require_once "models/dao_model/Vehiculo_dao.php";
    class Factura{
        private $facturaDao;
        public function __construct(){
            $this->facturaDao = new Factura_dao;
        }
        public function index(){
            $verfactura = $this->facturaDao->verFacturaDao();
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/3_buy/facturas.php";
            require_once "views/roles/admin/footer.php";
        }
        public function ver_factura(){
            if ($_SERVER ['REQUEST_METHOD'] == 'GET' && isset ($_GET['id_factura'])){
                $factura =$this->facturaDao->verFacturaId($_GET['id_factura']);
            }
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/3_buy/factura.view.php";
            require_once "views/roles/admin/footer.php";
        }
    }
?>