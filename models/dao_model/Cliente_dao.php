<?php
class Cliente_dao{
		private $pdo;
		public function __construct(){
			try {
				$this->pdo = Database::connection();				
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}		

		// Registrar o Crear cliente
		public function createCliente($cliente_dto){
            try{
                $sql = 'INSERT INTO clientes (`id_cliente`, `identificacion_cliente`, `nombre_cliente`, `apellido_cliente`, `telefono_cliente`, `correo_cliente`) VALUE (
                    '.$cliente_dto->getIdCliente().',
                    .'.$cliente_dto->getIdentificacionCliente().',
                    "'.$cliente_dto-> getNombreCliente().'",
                    "'.$cliente_dto-> getApellidoCliente().'",
                    '.$cliente_dto-> getTelefonoCliente().',
                    "'.$cliente_dto-> getCorreoCliente().'"
                    )';
                   
                    
                    // Preparar la BBDD para la consulta
                mysqli_query($this->pdo,$sql);

                
			} catch (Exception $e) {
				die("....".$e->getMessage());	
            }
        }
        // consultar cliente
        public function readClienteDao(){
            try {
                $sql = 'SELECT * FROM clientes';
                $dbh = mysqli_query($this->pdo,$sql);
 				return $dbh;
 			} catch (Exception $e) {
 				die($e->getMessage());
 			}
        
        }
        public function consultarClienteDao($idCliente){
            try {
            $sql = 'SELECT * FROM clientes where id_cliente='.$idCliente.'';
            $dbh = mysqli_query($this->pdo,$sql);
 				return mysqli_fetch_row($dbh);
 			} catch (Exception $e) {
 				die($e->getMessage());
 			}
        }
        public function eliminarClienteDao($idCliente){
            try{
                $sql = 'DELETE FROM CLIENTES WHERE id_cliente='.strval($idCliente);
                $dbh = mysqli_query($this->pdo,$sql);
                         return $dbh;
                        
                     } catch (Exception $e) {
                         die($e->getMessage());
            }
        }
        public function actualizarClienteDao($clientemod){
            try{
                $sql='SELECT * FROM clientes where id_cliente='.$clientemod.'';
                $dbh = mysqli_query($this->pdo,$sql);
			return mysqli_fetch_row($dbh);
				
		} catch (Exception $e) {
			die($e->getMessage());
		
            }
        }
        public function modificarClienteDao($idCliente, $identificacionCliente,$nombreCliente,  $apellidoCliente,$telefonoCliente,$correoCliente){
            try{
                $sql = "UPDATE CLIENTES SET identificacion_cliente='$identificacionCliente', nombre_cliente='$nombreCliente', apellido_cliente='$apellidoCliente',telefono_cliente='$telefonoCliente',correo_cliente='$correoCliente' WHERE id_cliente=$idCliente";
               
                $dbh = mysqli_query($this->pdo,$sql);
			return $dbh;
		} catch (Exception $e) {
			die($e->getMessage());
            }
        }

}

?>