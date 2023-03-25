<?php
    class Vehiculo_dao{
        private $pdo;
		public function __construct(){
			try {
				$this->pdo = Database::connection();				
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}	
        public function createVehiculo($vehiculo_dto){
            try{
                //crear consulta
                $sql ='INSERT INTO vehiculos VALUES(
                   '.$vehiculo_dto->getPlaca().',
                   "'.$vehiculo_dto->getCliente().'" 
                )';
                	// Preparar la BBDD para la consulta
                    mysqli_query($this->pdo,$sql);
                
                } catch (Exception $e) {
                    die("....".$e->getMessage());	
                }
            }
        // leer datos
        public function readVehiculoDao(){
            try{
                $sql = 'SELECT v.placa_vehiculo, c.nombre_cliente, c.apellido_cliente FROM vehiculos v inner join clientes c on v.id_cliente=c.id_cliente ';
                $dbh = mysqli_query($this->pdo,$sql);
                return $dbh;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
        // consulta de datos
        public function consultarVehiculoDao($idplaca){
            try {
               
                // Asignar una consulta al atributo $sql
                        $sql = 'SELECT * from vehiculos where placa_vehiculo='.$idplaca.'';
                // Creamos las variable $dbh y le asignamos la conexión y la consulta $sql
                    $dbh = mysqli_query($this->pdo,$sql);
                                 return mysqli_fetch_row($dbh);
                             } catch (Exception $e) {
                                 die($e->getMessage());
                             } 
        }
        public function eliminarVehiculoDao($placavehiculo){
            try{
                $sql='DELETE FROM vehiculos WHERE placa_vehiculo='.strval($placavehiculo);
                $dbh = mysqli_query($this->pdo,$sql);
                return $dbh;
               
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
        public function actualizarVehiculoDao($vehimod){
            try {
                $sql = 'SELECT * FROM vehiculos where placa_vehiculo="' .$vehimod.'"';
                $dbh = mysqli_query($this->pdo,$sql);
               
				return mysqli_fetch_row($dbh);
					
			} catch (Exception $e) {
				die($e->getMessage());
            }
        }
        public function modificarVehiculoDao($placavehiculo,$idclientev){
            try{
                $sql = "UPDATE vehiculos SET
            id_cliente = '$idclientev' where placa_vehiculo = '$placavehiculo' ";
            
            $dbh = mysqli_query($this->pdo,$sql);
			return $dbh;
		} catch (Exception $e) {
			die($e->getMessage());

        }

        }
    }
    


?>
