<?php
    require_once "models/dto_model/Cliente_dto.php";
    require_once "models/dao_model/Cliente_dao.php";

    class Cliente{
        private $clienteDao;
        public function __construct(){
            $this->clienteDao = new Cliente_dao;
        }
        public function index(){
            $cliente = $this->clienteDao->readClienteDao();
            if ($_SERVER ['REQUEST_METHOD'] == 'GET' && isset ($_GET['id_cliente'])){
                $result =$this->clienteDao->consultarClienteDao($_GET['id_cliente']);
                $cliente_dto=new Cliente_dto($result[0],$result[1]);
                $cliente_dto->setIdCliente($result[0]);
            }
            elseif($_SERVER['REQUEST_METHOD'] == 'POST'){        
                //captura de datos
                $cliente_dto=new Cliente_dto($_POST['id_cliente'],$_POST['identificacion_cliente'],$_POST['nombre_cliente'],$_POST['apellido_cliente'],$_POST['telefono_cliente'],$_POST['correo_cliente']);
                
                $this->clienteDao->createCliente($cliente_dto);
                
                header("Location: ?c=Cliente");
            }
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/1_users/1_2_cliente/cliente.view.php";
            require_once "views/roles/admin/footer.php";
        }
        public function eliminar_cliente(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET'){
                // Capturar Datos
                $this->clienteDao->eliminarClienteDao($_GET['id_cliente']); 
            }
            $cliente = $this->clienteDao->readClienteDao();
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/1_users/1_2_cliente/cliente.view.php";
            require_once "views/roles/admin/footer.php";
        }
        public function editar_cliente(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
               
                $editcliente =$this->clienteDao->actualizarClienteDao($_GET['id_cliente']); 
                
                
            }
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/1_users/1_2_cliente/cliente.editar.php";
            require_once "views/roles/admin/footer.php";
        }
        public function modificar_cliente(){
            
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                
               
                $this->clienteDao->modificarClienteDao($_POST
                ['id_cliente'],$_POST['identificacion_cliente'],$_POST['nombre_cliente'],$_POST['apellido_cliente'],$_POST['telefono_cliente'],$_POST['correo_cliente']);
                header("Location: ?c=Cliente");
        }
    }
}