<?php 
	class Usuario_dao{
		private $pdo;
		public function __construct(){
			try {
				$this->pdo = Database::connection();				
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}		

		# Registrar o Crear usuario
		public function createUsuario($usuario_dto){
			try {
				// Crear la Consulta
				$sql = 'INSERT INTO usuarios VALUES (
							'.$usuario_dto->getIdRol().',
							"'.$usuario_dto->getIdUsuario().'",
							"'.$usuario_dto->getNombresUsuario().'",
							"'.$usuario_dto->getApellidosUsuario().'",
							"'.$usuario_dto->getCorreoUsuario().'",
							"'.$usuario_dto->getTelefonoUsuario().'",
							"'.$usuario_dto->getPassUsuario().'"
						)';
						

				// Preparar la BBDD para la consulta
				mysqli_query($this->pdo,$sql);
                
			} catch (Exception $e) {
				die("....".$e->getMessage());	
			}
		}
		public function readUsuarioDao(){
			try {
				// Crear un Arreglo Vacío
							$rolList = [];
					// Asignar una consulta al atributo $sql
							$sql = 'SELECT pass_usuario,u.telefono_usuario,u.correo_usuario,u.apellidos_usuario,u.nombres_usuario,u.id_usuario,r.nombre_rol FROM usuarios u inner join roles r on r.id_rol=u.id_rol';
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
			$sql = 'SELECT * FROM usuarios where id_usuario='.$idper.'';
	// Creamos las variable $dbh y le asignamos la conexión y la consulta $sql
		$dbh = mysqli_query($this->pdo,$sql);
					 return mysqli_fetch_row($dbh);
				 } catch (Exception $e) {
					 die($e->getMessage());
				 }
			 }	
		public function eliminarUsuarioDao($perid){
		try {
		$sql= 'DELETE FROM usuarios WHERE id_usuario='.strval($perid);
		$dbh = mysqli_query($this->pdo,$sql);
 				return $dbh;
				
 			} catch (Exception $e) {
 				die($e->getMessage());
 			}
		}
		public function actualizarUsuarioDao($idmod){
			try {
				$sql = 'SELECT * FROM usuarios where id_usuario='.$idmod.'';
				$dbh = mysqli_query($this->pdo,$sql);
				return mysqli_fetch_row($dbh);
					
			} catch (Exception $e) {
				die($e->getMessage());
			
			}
		}
		public function modificarUsuarioDao($idRol,$idUsuario,$nombresUsuario,$apellidosUsuario,$correoUsuario,$telefonoUsuario,$passUsuario){
			try {
				$sql = "UPDATE usuarios SET id_rol ='$idRol', nombres_usuario = '$nombresUsuario',apellidos_usuario = '$apellidosUsuario',correo_usuario = '$correoUsuario',telefono_usuario = '$telefonoUsuario', pass_usuario = '$passUsuario' where id_usuario = $idUsuario";
				$dbh = mysqli_query($this->pdo,$sql);
			return $dbh;
		} catch (Exception $e) {
			die($e->getMessage());
			}
		}
	}
		?> 