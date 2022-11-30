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
			$this->id_rol = $idRol;
			$this->id_persona = $idPersona;
            $this->nombres_persona = $nombresPersona;
            $this->apellidos_persona = $apellidosPersona;
            $this->correo_persona = $correoPersona;
            $this->telefono_persona = $telefonoPersona;
            $this->pass_persona = $passPersona;
		}

        /* MÉTODOS DE ACCESO: SETTER Y GETTERS*/
        
        // Id Rol
        public function setIdRol($idRol){
            $this->id_rol = $idRol;
        }
        public function getIdRol(){
            return $this->id_rol;
        }

        // Id Persona
        public function setIdPersona($idPersona){
            $this->id_persona = $idPersona;
        }
        public function getIdPersona(){
            return $this->id_persona;
        }

        // Nombres Persona
        public function setNombresPersona($nombresPersona){
            $this->nombres_persona = $nombresPersona;
        }
        public function getNombresPersona(){
            return $this->nombres_persona;
        }
        // Apellidos Persona
        public function setApellidosPersona($apellidosPersona){
            $this->apellidos_persona = $apellidosPersona;
        }
        public function getApellidosPersona(){
            return $this->apellidos_persona;
        }
        // Correo Persona
        public function setCorreoPersona($correoPersona){
            $this->correo_persona = $correoPersona;
        }
        public function getCorreoPersona(){
            return $this->correo_persona;
        }

        // Telefono Persona
        public function setTelefonoPersona($telefonoPersona){
            $this->telefono_persona = $telefonoPersona;
        }
        public function getTelefonoPersona(){
            return $this->telefono_persona;
        }

        // Pass Persona
        public function setPassPersona($passPersona){
            $this->pass_persona = $passPersona;
        }
        public function getPassPersona(){
            return $this->pass_persona;
        }

       


    }

?>