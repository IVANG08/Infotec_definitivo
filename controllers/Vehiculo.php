<?php
    require_once "models/dto_model/Cliente_dto.php";
    require_once "models/dao_model/Cliente_dao.php";
    require_once "models/dto_model/Vehiculo_dto.php";
    require_once "models/dao_model/Vehiculo_dao.php";

    class Vehiculo{
        private $vehiculoDao;
        private $clienteDao;
        public function __construct(){
            $this->vehiculoDao = new Vehiculo_dao;
            $this->clienteDao = new Cliente_dao;
        }
        public function index(){
            $vehiculo =$this->vehiculoDao->readVehiculoDao();
            $cliente = $this->clienteDao->readClienteDao();
            if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id_cliente'])){
                
                $result= $this->vehiculoDao->consultarVehiculoDao($_GET['id_cliente']);
                $Vehiculo_dto=new Vehiculo_dto($result[0],$result[1]);
                $Vehiculo_dto->setCliente($result[0]);}
                elseif($_SERVER['REQUEST_METHOD'] == 'POST'){
                    $Vehiculo_dto=new Vehiculo_dto($_POST['placa_vehiculo'],$_POST['id_cliente']);
                    $this->vehiculoDao->createVehiculo($Vehiculo_dto);
                    header("Location: ?c=Vehiculo"); 
                }
                require_once "views/roles/admin/header_dash.php";
                require_once "views/modules/1_users/1_3_vehiculos/vehiculo.view.php";
                require_once "views/roles/admin/footer.php";
        }
        public function crear_vehiculo(){
            if($_SERVER['REQUEST_METHOD'] == 'GET'){
                require_once "views/roles/admin/header_dash.php";
                require_once "views/modules/1_users/1_3_vehiculos/vehiculo.view.php";
                require_once "views/roles/admin/footer.php";
            }
            elseif($_SERVER['REQUEST_METHOD'] == 'POST'){
                $vehiculo_dto=new Usuario_dto($_POST['placa_vehiculo'],$_POST['id_cliente']);
                $this->vehiculoDao->createVehiculo($vehiculo_dto);
                header("Location: ?c=Vehiculo&a=crear_vehiculo");
                    } else {
                        header("Location: ?c=Vehiculo&a=crear_vehiculo");
                    }
        }
        public function eliminar_vehiculo(){
            if($_SERVER['REQUEST_METHOD'] == 'GET'){
                $this->vehiculoDao->eliminarVehiculoDao($_GET['placa_vehiculo']);
            }
            $vehiculo =$this->vehiculoDao->readVehiculoDao();
            $cliente = $this->clienteDao->readClienteDao();
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/1_users/1_3_vehiculos/vehiculo.view.php";
            require_once "views/roles/admin/footer.php";
        }
        public function editar_vehiculo(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                
                $edivehi = $this->vehiculoDao->actualizarVehiculoDao($_GET['placa_vehiculo']);
                $cliente = $this->clienteDao->readClienteDao();
            }  
                require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/1_users/1_3_vehiculos/vehiculo.editar.php";
            require_once "views/roles/admin/footer.php";   
    }
    public function modificar_vehiculo(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            $this->vehiculoDao->modificarVehiculoDao($_POST['placa_vehiculo'],$_POST['id_cliente']);
            header("Location: ?c=Vehiculo");
    }
}
    }

?>