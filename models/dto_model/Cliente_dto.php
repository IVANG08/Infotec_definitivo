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
        public function __construct6($idCliente, $identificacionCliente,$nombreCliente,  $apellidoCliente,$telefonoCliente,     $correoCliente){
            $this->idCliente= $idCliente;
            $this->identificacionCliente= $identificacionCliente;
            $this->nombreCliente= $nombreCliente;
            $this->apellidoCliente= $apellidoCliente;
            $this->telefonoCliente= $telefonoCliente;
            $this->correoCliente= $correoCliente;
        
        }
         /* MÉTODOS DE ACCESO: SETTER Y GETTERS*/
         // Id Cliente
         public function setIdCliente($idCliente){
            $this->idCliente= $idCliente;
         }
         public function getIdCliente(){
            return $this->idCliente;
         }
        
         // Identificación Cliente
         public function setIdentificacionCliente($identificacionCliente){
            $this->identificacionCliente= $identificacionCliente;
         }
         public function getIdentificacionCliente(){
            return $this->identificacionCliente;
         }

         //Nombre Cliente
        
         public function setNombreCliente($nombreCliente){
            $this->nombreCliente= $nombreCliente;

         }
         public function getNombreCliente(){
            return $this->nombreCliente;
         }
        //Apellido cliente
        public function setApellidoCliente($apellidoCliente){
            $this->apellidoCliente= $apellidoCliente;
        }
        public function getApellidoCliente(){
                return $this->apellidoCliente;
        }

        // telefono Cliente
        public function setTelefonoCliente($telefonoCliente){
            $this->telefonoCliente = $telefonoCliente;
        }
        public function getTelefonoCliente(){
            return  $this->telefonoCliente;
        }
        
        // correo Cliente
        public function setCorreoCliente($correoCliente){
            $this->correoCliente = $correoCliente;
        }
        public function getCorreoCliente(){
            return $this->correoCliente;
        }
}