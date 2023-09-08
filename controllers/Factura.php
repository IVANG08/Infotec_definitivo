<?php
    require_once "models/dto_model/Factura_dto.php";
    require_once "models/dao_model/Factura_dao.php";
    require_once "models/dto_model/Cliente_dto.php";
    require_once "models/dao_model/Cliente_dao.php";
    require_once "models/dto_model/Vehiculo_dto.php";
    require_once "models/dao_model/Vehiculo_dao.php";
    class Factura{
        private $facturaDao;
        private $vehiculoDao;
        private $clienteDao;
        public function __construct(){
            $this->facturaDao = new Factura_dao;
            $this->vehiculoDao = new Vehiculo_dao;
            $this->clienteDao = new Cliente_dao;
        }
        public function index(){
            $verfactura = $this->facturaDao->verFacturaDao();
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/3_buy/facturas.php";
            require_once "views/roles/admin/footer.php";
        }
        public function ver_factura(){
            if ($_SERVER ['REQUEST_METHOD'] == 'GET' && isset ($_GET['id_factura'])){
                $factura =$this->facturaDao->consultarFacturaId($_GET['id_factura']);
            }
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/3_buy/factura.view.php";
            require_once "views/roles/admin/footer.php";
        }
        public function crear_factura(){
            $verCliente = $this->clienteDao->verClienteDao();
            $verVehiculo = $this->vehiculoDao->verVehiculoDao();
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/3_buy/factura.create.php";
            require_once "views/roles/admin/footer.php";
        }
        public function vehiculoCliente(){
            echo json_encode($this->vehiculoDao->buscarVehiculoDao($_GET['id']));
            
        }
        public function busquedaVehiculo(){
            echo json_encode($this->vehiculoDao->verVehiculoDao());
        }
    }
?>