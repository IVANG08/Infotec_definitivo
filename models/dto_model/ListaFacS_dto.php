<?php
class ListaFacS_dto{
    private $id;
    private $idListFac;
    private $idServicio;
    private $cantServicio;
    private $valorServicio;
     /* SOBRECARGA DE CONSTRUCTORES */
        // Constructor
        public function __construct($idListFac, $idServicio, $cantServicio, $valorServicio){
			$this->idListFac = $idListFac;
			$this->idServicio= $idServicio;
            $this->cantServicio = $cantServicio;
            $this->valorServicio = $valorServicio;
		}
        /* MÉTODOS DE ACCESO: SETTER Y GETTERS*/
        // Código Id Factura
        public function setidListFac($idListFac){
            $this->idListFac = $idListFac;
        }
        public function getidListFac(){
            return $this->idListFac;
        }
        // Id Usuario
        public function setIdProduct($idServicio){
            $this->idServicio= $idServicio;
        }
        public function getIdServicio(){
            return $this->idServicio;
        }
        // Id Cliente
        public function setCantServicio($cantServicio){
            $this->cantServicio = $cantServicio;
        }
        public function getCantServicio(){
            return $this->cantServicio;
        }
        public function setValorServicio($valorServicio){
            $this->valorServicio = $valorServicio;
        }
        public function getValorServicio(){
            return $this->valorServicio;
        }
}
?>