<?php
session_start();

require_once "models/dto_model/Login_dto.php";
class Login{
    private $loginDao;
        public function __construct(){
            $this->loginDao = new Login_dao;
        }
}

$dsn = "mysql:host=localhost;dbname=nombre_base_de_datos";
$username = "usuario";
$password = "contraseña";

try {
    $db = new PDO($dsn, $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $model = new Model($db);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $user = $model->getUserByUsername($username);

        if ($user && password_verify($password, $user["password"])) {
            $_SESSION["user_id"] = $user["id"];
            header("Location: dashboard.php");
            exit;
        } else {
            $error = "Invalid username or password";
        }
    }

    include "view.php";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
