<?php
require_once "models/dto_model/Login_dto.php";
require_once "models/dao_model/Login_dao.php";
class Login{
    private $loginDao;
    public function __construct(){
        $this->loginDao = new Login_dao;
    }
    public function index(){
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                
            require_once "views/business/inicio.php";
        }
        elseif($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Capturar Datos
            // Validar los Datos
            // Crear el Objeto
            // Comprobar en la base de datos
            // Redireccionar al Dashboard
            header("Location: ?c=Dashboard");
        }

    }
    
}
?>
