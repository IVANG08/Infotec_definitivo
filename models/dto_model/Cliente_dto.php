<?php 
    class Cliente_dto{
        /* ATRIBUYOS */
        private $idCliente;
        private $identificacionCliente;
        private $nombreCliente;
        private $apellidoCliente;
        private $telefonoCliente;
        private $correoCliente;

        public function __construct(){
			$a = func_get_args();
			$i = func_num_args();
			if (method_exists($this, $f='__construct'.$i)) {
				call_user_func_array(array($this, $f), $a);
			}
		}
        // constructor
        public function __construct9($idCliente, $identificacionCliente,$nombreCliente,  $apellidoCliente,$telefonoCliente,     $correoCliente){
            $this-> id_cliente = $idCliente;
            $this-> identificacion_cliente = $identificacionCliente;
            $this-> nombre_cliente = $nombreCliente;
            $this-> apellido_cliente = $apellidoCliente;
            $this-> telefono_cliente = $telefonoCliente;
            $this -> correo_cliente = $correoCliente;
        }
         /* MÉTODOS DE ACCESO: SETTER Y GETTERS*/
         // Id Cliente
         public function setIdCliente($idCliente){
            $this->id_cliente = $idCliente;
         }
         public function getIdCliente(){
            return $this->id_cliente;
         }
        
         // Identificación Cliente
         public function setIdentificacionCliente($identificacionCliente){
            $this->identificacion_cliente = $identificacionCliente;
         }
         public function getIdentificacionCliente(){
            return $this->identificacion_cliente;
         }

         //Nombre Cliente
        
         public function setNombreCliente($nombreCliente){
            $this->nombre_cliente = $nombreCliente;

         }
         public function getNombreCliente(){
            return $this->nombre_cliente;
         }
        //Apellido cliente
        public function setApellidoCliente($apellidoCliente){
            $this->apellido_cliente = $apellidoCliente;
        }
        public function getApellidoCliente(){
                return $this->apellido_cliente;
        }

        // telefono Cliente
        public function setTelefonoCliente($telefonoCliente){
            $this->telefono_cliente = $telefonoCliente;
        }
        public function getTelefonoCliente(){
            return  $this->telefono_cliente;
        }
        
        // correo Cliente
        public function setCorreoCliente($correoCliente){
            $this->correo_cliente = $correoCliente;
        }
        public function getCorreoCliente(){
            return $this->correo_cliente;
        }
}