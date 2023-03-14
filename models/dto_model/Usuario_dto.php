<?php

    class Usuario_dto{
        
        /* ATRIBUTOS */        
        private $idRol;
        private $idUsuario;
        private $nombresUsuario;
        private $apellidosUsuario;
        private $correoUsuario;
        private $telefonoUsuario;
        private $passUsuario;
        
        
        /* SOBRECARGA DE CONSTRUCTORES */
        
        // Constructor de Constructores
		public function __construct(){
			$a = func_get_args();
			$i = func_num_args();
			if (method_exists($this, $f='__construct'.$i)) {
				call_user_func_array(array($this, $f), $a);
			}
		}
        // Constructor
        public function __construct7($idRol,$idUsuario,$nombresUsuario,$apellidosUsuario,$correoUsuario,$telefonoUsuario,$passUsuario){
			$this->idRol = $idRol;
			$this->idUsuario = $idUsuario;
            $this->nombresUsuario = $nombresUsuario;
            $this->apellidosUsuario = $apellidosUsuario;
            $this->correoUsuario = $correoUsuario;
            $this->telefonoUsuario = $telefonoUsuario;
            $this->passUsuario = $passUsuario;
		}

        /* MÉTODOS DE ACCESO: SETTER Y GETTERS*/
        
        // Id Rol
        public function setIdRol($idRol){
            $this->idRol = $idRol;
        }
        public function getIdRol(){
            return $this->idRol;
        }

        // Id Usuario
        public function setIdUsuario($idUsuario){
            $this->idUsuario = $idUsuario;
        }
        public function getIdUsuario(){
            return $this->idUsuario;
        }

        // Nombres Usuario
        public function setNombresUsuario($nombresUsuario){
            $this->nombresUsuario = $nombresUsuario;
        }
        public function getNombresUsuario(){
            return $this->nombresUsuario;
        }
        // Apellidos Usuario
        public function setApellidosUsuario($apellidosUsuario){
            $this->apellidosUsuario = $apellidosUsuario;
        }
        public function getApellidosUsuario(){
            return $this->apellidosUsuario;
        }
        // Correo Usuario
        public function setCorreoUsuario($correoUsuario){
            $this->correoUsuario = $correoUsuario;
        }
        public function getCorreoUsuario(){
            return $this->correoUsuario;
        }

        // Telefono Usuario
        public function setTelefonoUsuario($telefonoUsuario){
            $this->telefonoUsuario = $telefonoUsuario;
        }
        public function getTelefonoUsuario(){
            return $this->telefonoUsuario;
        }

        // Pass Usuario
        public function setPassUsuario($passUsuario){
            $this->passUsuario = $passUsuario;
        }
        public function getPassUsuario(){
            return $this->passUsuario;
        }

       


    }

?>