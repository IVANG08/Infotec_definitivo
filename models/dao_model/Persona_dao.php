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

		# Registrar o Crear persona
		public function createPersona($persona_dto){
			try {
				// Crear la Consulta
				$sql = 'INSERT INTO personas VALUES (
							'.$persona_dto->getIdRol().',
							"'.$persona_dto->getIdPersona().'",
							"'.$persona_dto->getNombresPersona().'",
							"'.$persona_dto->getApellidosPersona().'",
							"'.$persona_dto->getCorreoPersona().'",
							"'.$persona_dto->getTelefonoPersona().'",
							"'.$persona_dto->getPassPersona().'"
						)';
						

				// Preparar la BBDD para la consulta
				mysqli_query($this->pdo,$sql);
                
			} catch (Exception $e) {
				die("....".$e->getMessage());	
			}
		}
		public function readPersonaDao(){
			try {
				// Crear un Arreglo Vacío
							$rolList = [];
					// Asignar una consulta al atributo $sql
							$sql = 'SELECT pass_persona,p.telefono_persona,p.correo_persona,p.apellidos_persona,p.nombres_persona,p.id_personas,r.nombre_rol FROM personas p inner join roles r on r.id_rol=p.id_rol';
					// Creamos las variable $dbh y le asignamos la conexión y la consulta $sql
							$dbh = mysqli_query($this->pdo,$sql);
								 return $dbh;
							 } catch (Exception $e) {
								 die($e->getMessage());
							 }
		}
		public function consultarRolDao($idper){
			try {
	// Crear un Arreglo Vacío
			$rolList = [];
	// Asignar una consulta al atributo $sql
			$sql = 'SELECT * FROM personas where id_personas='.$idper.'';
	// Creamos las variable $dbh y le asignamos la conexión y la consulta $sql
		$dbh = mysqli_query($this->pdo,$sql);
					 return mysqli_fetch_row($dbh);
				 } catch (Exception $e) {
					 die($e->getMessage());
				 }
			 }	
		public function eliminarPersonaDao($perid){
		try {
		$sql= 'DELETE FROM personas WHERE id_personas='.strval($perid);
		$dbh = mysqli_query($this->pdo,$sql);
 				return $dbh;
				
 			} catch (Exception $e) {
 				die($e->getMessage());
 			}
		}
		public function actualizarPersonaDao($idmod){
			try {
				$sql = 'SELECT * FROM personas where id_personas='.$idmod.'';
				$dbh = mysqli_query($this->pdo,$sql);
				return mysqli_fetch_row($dbh);
					
			} catch (Exception $e) {
				die($e->getMessage());
			
			}
		}
		public function modificarPersonaDao($idRol,$idPersona,$nombresPersona,$apellidosPersona,$correoPersona,$telefonoPersona,$passPersona){
			try {
				$sql = "UPDATE PERSONAS SET id_rol ='$idRol', nombres_persona = '$nombresPersona',apellidos_persona = '$apellidosPersona',correo_persona = '$correoPersona',telefono_persona = '$telefonoPersona', pass_persona = '$passPersona' where id_personas = $idPersona";
				$dbh = mysqli_query($this->pdo,$sql);
				return $dbh;
			} catch (Exception $e) {
				die($e->getMessage());
			
			}
		}
	}
		?> 