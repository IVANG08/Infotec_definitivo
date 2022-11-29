<?php

    class Rol_dto{
        
        /* ATRIBUTOS */        
        private $codigoRol;
        private $nombreRol;
        
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
        public function __construct2($codigoRol,$nombreRol){
			$this->id_rol = $codigoRol;
			$this->nombre_rol = $nombreRol;
		}

        /* MÉTODOS DE ACCESO: SETTER Y GETTERS*/
        
        // Código Rol
        public function setCodigoRol($codigoRol){
            $this->id_rol = $codigoRol;
        }
        public function getCodigoRol(){
            return $this->id_rol;
        }

        // Nombre Rol
        public function setNombreRol($nombreRol){
            $this->nombre_rol = $nombreRol;
        }
        public function getNombreRol(){
            return $this->nombre_rol;
        }


    }

?>