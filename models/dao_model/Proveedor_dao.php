<?php
    class Proveedor_dao{
        public function __construct(){
			try {
				$db = new DataBase();
				$this->pdo = $db->connection();				

			} catch (Exception $e) {
				die($e->getMessage());
			}
		}
        public function verProveedorDao(){
            $sql= "SELECT * FROM proveedores";
            $resultado = $this->pdo->query($sql);
            $verProveedor = $resultado->fetchall();
            return $verProveedor;
        }
        public function consultarProveedorDao($proveedor_dto){
            try{
                $sql='INSERT INTO proveedrores VALUES(
                    '.$proveedor_dto->getIdProveedor().',"'.$proveedor_dto->getNombreProveedor().'"
                    )';
                mysqli_query($this->pdo,$sql);
                
			} catch (Exception $e) {
				die("....".$e->getMessage());
            }
        }
        public function consutarProveedorDao($id){
            try {
                $sql='SELECT * FROM proveedores where id_proveedor='.$id.'';
            $dbh = mysqli_query($this->pdo,$sql);
                return mysqli_fetch_row($dbh);
            } catch (Exception $e) {
                die($e->getMessage());   
            }
        }
        public function eliminarProveedoresDao($proveid){
            try {
                $sql='DELETE FROM proveedores WHERE id_proveedor='.strval($proveid);
                $dbh = mysqli_query($this->pdo,$sql);
 				return $dbh;
				
 			} catch (Exception $e) {
 				die($e->getMessage());
            }
        }
        public function actualizarProveedorDao($idprov){
            try {
                $sql = 'SELECT * FROM proveedores where id_proveedor='.$idprov.'';
                $dbh = mysqli_query($this->pdo,$sql);
			return mysqli_fetch_row($dbh);
				
		} catch (Exception $e) {
			die($e->getMessage());
            }
        }
        public function modificarProveedoresDao($idProveedor,$nombreProveedor){
            try {
                $sql="UPDATE proveedores SET nombre_proveedor='$nombreProveedor' where id_proveedor";
                $dbh = mysqli_query($this->pdo,$sql);
			return $dbh;
		} catch (Exception $e) {
			die($e->getMessage());
            }
        }
    }
?>