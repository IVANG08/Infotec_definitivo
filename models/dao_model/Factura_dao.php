<?php
    class Factura_dao{
        private $pdo;
		public function __construct(){
			try {
				$db = new DataBase();
                $this->pdo = $db->connection();	
                
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}
        // leer datos
        public function verFacturaDao(){
			$sql = "SELECT * FROM factura";
			$resultado = $this->pdo->query($sql);
            
            $verfactura = $resultado->fetchAll();
			print_r($verfactura);
			exit;
            return $verfactura;
		}

    }
