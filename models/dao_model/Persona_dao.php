<?php 
	class Persona_dao{
		private $pdo;
		public function __construct(){
			try {
				$this->pdo = Database::connection();				
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}		

		# Registrar o Crear Rol
		public function createPersona($persona_dto){
			try {
				// Crear la Consulta
				$sql = 'INSERT INTO personas VALUES (
							:idRol,
							:idPersona,
                            :nombresPersona,
                            :apellidosPersona,
                            :correoPersona,
                            :telefonoPersona,
                            :passPersona
						)';
				// Preparar la BBDD para la consulta
				$dbh = $this->pdo->prepare($sql);
				// Vincular los datos del objeto a la consulta de Inserción
				$dbh->bindValue('idRol',$persona_dto->getIdRol());			
				$dbh->bindValue('idPersona',$persona_dto->getIdPersona());
                $dbh->bindValue('nombresPersona',$persona_dto->getNombresPersona());
                $dbh->bindValue('apellidosPersona',$persona_dto->getApellidosPersona());
                $dbh->bindValue('correoPersona',$persona_dto->getCorreoPersona());
                $dbh->bindValue('telefonoPersona',$persona_dto->getTelefonoPersona());
                $dbh->bindValue('passPersona',$persona_dto->getPassPersona());
				// Ejecutar la consulta
				$dbh->execute();
			} catch (Exception $e) {
				die($e->getMessage());	
			}
		}

// 		# Consultar Roles
// 		public function readRolDao(){
// 			try {
// 				// Crear un Arreglo Vacío
// 				$rolList = [];
// 				// Asignar una consulta al atributo $sql
// 				$sql = 'SELECT * FROM ROLES';
// 				// Creamos las variable $dbh y le asignamos la conexión y la consulta $sql
// 				$dbh = $this->pdo->query($sql);
// 				foreach ($dbh->fetchAll() as $rol) {
// 					$rolList[] = new UserDto(
// 						$rol['codigo_rol'],
// 						$rol['nombre_rol']						
// 					);
// 				}
// 				return $rolList;
// 			} catch (Exception $e) {
// 				die($e->getMessage());
// 			}
// 		}

// 		# Obtener IdRol
// 		public function getById($idRol){
// 			try {
// 				# Consulta
// 				$sql = "SELECT * FROM ROLES WHERE codigo_rol=:idRol";
// 				# Preparar la BBDD
// 				$dbh = $this->pdo->prepare($sql);
// 				# Vincular los datos
// 				$dbh->bindValue('idRol', $idRol);
// 				# Ejecutar la consulta
// 				$dbh->execute();
// 				# Crear un objeto del registro la BBDD
// 				$rolDb = $dbh->fetch();
// 				# Crear el objeto del modelo
// 				$rol = new UserDto(
// 					$rolDb['codigo_rol'],
// 					$rolDb['nombre_rol'],					
// 				);
// 				return $rol;
// 			} catch (Exception $e) {
// 				die($e->getMessage());
// 			}
// 		}

// 		# Actualizar un Rol
//         public function updateRolDao($userDto){
//             try {
// 				// Crear la Consulta
// 				$sql = 'UPDATE ROLES SET
// 							codigo_rol = :idRol,
// 							nombre_rol = :nombreRol
// 						WHERE codigo_rol = :idRol';

// 				// Preparar la BBDD para la consulta
// 				$dbh = $this->pdo->prepare($sql);

// 				// Vincular los datos del objeto a la consulta de Inserción
// 				$dbh->bindValue('idRol', $userDto->getCodigoRol());			
// 				$dbh->bindValue('nombreRol', $userDto->getNombreRol());

// 				// Ejecutar la consulta
// 				$dbh->execute();
                
// 			} catch (Exception $e) {
// 				die($e->getMessage());	
// 			}
//         }

// 		# Eliminar un Rol
// 		public function deleteRolDao($idRol){
// 			try {
// 				$sql = 'DELETE FROM ROLES WHERE codigo_rol = :idRol';
// 				$dbh = $this->pdo->prepare($sql);
// 				$dbh->bindValue('idRol', $idRol);
// 				$dbh->execute();
// 			} catch (Exception $e) {
// 				die($e->getMessage());
// 			}
// 		}
		
	}
?>
