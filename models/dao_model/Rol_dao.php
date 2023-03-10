 <?php 
	class Rol_dao{
		private $pdo;
		public function __construct(){
			try {
				$this->pdo = Database::connection();				
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}		

		# Registrar o Crear Rol
		public function createRol($rol_dto){
			try {
				// Crear la Consulta
				$sql = 'INSERT INTO roles VALUES (
							'.$rol_dto->getCodigoRol().',
							"'.$rol_dto->getNombreRol().'"
						)';
				// Preparar la BBDD para la consulta
                mysqli_query($this->pdo,$sql);
                
			} catch (Exception $e) {
				die("....".$e->getMessage());	
			}
		}

// 		# Consultar Roles
	public function readRolDao(){
		try {
// Crear un Arreglo Vacío
			$rolList = [];
	// Asignar una consulta al atributo $sql
			$sql = 'SELECT * FROM ROLES';
	// Creamos las variable $dbh y le asignamos la conexión y la consulta $sql
			$dbh = mysqli_query($this->pdo,$sql);
 				return $dbh;
 			} catch (Exception $e) {
 				die($e->getMessage());
 			}
 		}
	public function consultarRolDao($id){
		try {
// Crear un Arreglo Vacío
		$rolList = [];
// Asignar una consulta al atributo $sql
		$sql = 'SELECT * FROM ROLES where id_rol='.$id.'';
// Creamos las variable $dbh y le asignamos la conexión y la consulta $sql
	$dbh = mysqli_query($this->pdo,$sql);
 				return mysqli_fetch_row($dbh);
 			} catch (Exception $e) {
 				die($e->getMessage());
 			}
 		}
 		}

?> 
