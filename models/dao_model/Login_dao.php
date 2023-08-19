<?php 
class Login_dao{
    private $pdo;
    public function __construct(){
        try {
            $db = new DataBase();
            $this->pdo = $db->connection();	
            
        } catch (Exception $e) {
            die($e->getMessage());
        }  
    }
    public function getUserByUsername($login_dto) {
        $sql = "SELECT * FROM usuarios WHERE correo_usuario = ?";
        $resultado = $this->pdo->prepare($sql);
        $resultado->execute(array($login_dto->getCorreo()));
        return $resultado->fetch(PDO::FETCH_ASSOC);
    }
}
?>