<?php

    class Persona_dto{
        
        /* ATRIBUTOS */        
        private $idRol;
        private $idPersona;
        private $nombresPersona;
        private $apellidosPersona;
        private $correoPersona;
        private $telefonoPersona;
        private $passPersona;
        
        
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
        public function __construct7($idRol,$idPersona,$nombresPersona,$apellidosPersona,$correoPersona,$telefonoPersona,$passPersona){
			$this->idRol = $idRol;
			$this->idPersona = $idPersona;
            $this->nombresPersona = $nombresPersona;
            $this->apellidosPersona = $apellidosPersona;
            $this->correoPersona = $correoPersona;
            $this->telefonoPersona = $telefonoPersona;
            $this->passPersona = $passPersona;
		}

        /* MÉTODOS DE ACCESO: SETTER Y GETTERS*/
        
        // Id Rol
        public function setIdRol($idRol){
            $this->idRol = $idRol;
        }
        public function getIdRol(){
            return $this->idRol;
        }

        // Id Persona
        public function setIdPersona($idPersona){
            $this->idPersona = $idPersona;
        }
        public function getIdPersona(){
            return $this->idPersona;
        }

        // Nombres Persona
        public function setNombresPersona($nombresPersona){
            $this->nombresPersona = $nombresPersona;
        }
        public function getNombresPersona(){
            return $this->nombresPersona;
        }
        // Apellidos Persona
        public function setApellidosPersona($apellidosPersona){
            $this->apellidosPersona = $apellidosPersona;
        }
        public function getApellidosPersona(){
            return $this->apellidosPersona;
        }
        // Correo Persona
        public function setCorreoPersona($correoPersona){
            $this->correoPersona = $correoPersona;
        }
        public function getCorreoPersona(){
            return $this->correoPersona;
        }

        // Telefono Persona
        public function setTelefonoPersona($telefonoPersona){
            $this->telefonoPersona = $telefonoPersona;
        }
        public function getTelefonoPersona(){
            return $this->telefonoPersona;
        }

        // Pass Persona
        public function setPassPersona($passPersona){
            $this->passPersona = $passPersona;
        }
        public function getPassPersona(){
            return $this->passPersona;
        }

       


    }

?>