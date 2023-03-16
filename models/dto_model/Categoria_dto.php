<?php
class Categoria_dto{
    private $idCategoria;
    private $nombreCategoria;
     /* SOBRECARGA DE CONSTRUCTORES */
        
        // Constructor de Constructores
		public function __construct(){
			$a = func_get_args();
			$i = func_num_args();
			if (method_exists($this, $f='__construct'.$i)) {
				call_user_func_array(array($this, $f), $a);
			}
		}
        public function __construct10($idCategoria,$nombreCategoria){
            $this ->id_categoria =$idCategoria;
            $this ->nombre_categoria =$nombreCategoria;
        }

        //Id categoria
        public function setIdCategoria($idCategoria){
            $this->id_categoria=$idCategoria;
        }
        public function getIdCategoria(){
            return $this->id_categoria;
        }
        //Nombre categoria
        public function setNombreCategoria($nombreCategoria){
            $this ->nombre_categoria =$nombreCategoria;
        }
        public function getNombreCategoria(){
            return  $this ->nombre_categoria;
        }
    }
?>
