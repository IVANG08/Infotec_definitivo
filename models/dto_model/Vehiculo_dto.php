<?php

class Vehiculo_dto{

    private $placavehiculo;
    private $idclientev;

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
        public function __construct8($placavehiculo,$idclientev){
			$this->placa_vehiculo = $placavehiculo;
			$this->id_cliente = $idclientev;
		}
        /* MÉTODOS DE ACCESO: SETTER Y GETTERS*/
        
        // Código Rol
        public function setPlaca($placavehiculo){
            $this->placa_vehiculo = $placavehiculo;
        }
        public function getPlaca(){
            return $this->placa_vehiculo;
        }

        // Nombre Rol
        public function setCliente($idclientev){
            $this->id_cliente = $idclientev;
        }
        public function getCliente(){
            return $this->id_cliente;
        }
}





?>