<?php
class ListaFac_dto{
    private $idListFac;
    private $idProducto;
    private $cantProducto;
     /* SOBRECARGA DE CONSTRUCTORES */
        // Constructor
        public function __construct($idListFac, $idProducto, $cantProducto){
			$this->idListFac = $idListFac;
			$this->idProducto= $idProducto;
            $this->cantProducto = $cantProducto;
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
        public function setIdProduct($idProducto){
            $this->idProducto= $idProducto;
        }
        public function getIdProducto(){
            return $this->idProducto;
        }
        // Id Cliente
        public function setCantProducto($cantProducto){
            $this->cantProducto = $cantProducto;
        }
        public function getCantProducto(){
            return $this->cantProducto;
        }
}
?>