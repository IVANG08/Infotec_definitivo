<?php
include ("../models/Database.php");
$con=conectar();

$cod_rol=$_POST['id_rol'];
$nombre_rol=$_POST['nombre_rol'];

$sql="INSERT INTO roles VALUES ('$cod_rol','$nombre_rol')";
$query= mysqli_query($con,$sql);

if ($query){
    header("location: rol.php");
} else {

}
?>