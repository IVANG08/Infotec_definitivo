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
							"'.$persona_dto->getPassPersona().'",
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
		public function consultarRolDao($id){
			try {
	// Crear un Arreglo Vacío
			$rolList = [];
	// Asignar una consulta al atributo $sql
			$sql = 'SELECT * FROM personas where id_personas='.$id.'';
	// Creamos las variable $dbh y le asignamos la conexión y la consulta $sql
		$dbh = mysqli_query($this->pdo,$sql);
					 return mysqli_fetch_row($dbh);
				 } catch (Exception $e) {
					 die($e->getMessage());
				 }
			 }		
	}
		?> 