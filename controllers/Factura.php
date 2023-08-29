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
        }
    }
?>