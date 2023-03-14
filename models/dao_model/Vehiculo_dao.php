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
                $sql = 'SELECT  FROM vehiculos';
                $dbh = mysqli_query($this->pdo,$sql);
                return $dbh;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
        // consulta de datos
        public function consultarVehiculoDao($id){
            try {
               
                // Asignar una consulta al atributo $sql
                        $sql = 'SELECT v.placa_vehiculo,v.id_cliente,p.id_persona,c.id_persona,c.id_cliente FROM vehiculos v inner join clientes c on c.id_cliente=v.id_cliente';
                // Creamos las variable $dbh y le asignamos la conexión y la consulta $sql
                    $dbh = mysqli_query($this->pdo,$sql);
                                 return mysqli_fetch_row($dbh);
                             } catch (Exception $e) {
                                 die($e->getMessage());
                             } 
        }

        }
    


?>
