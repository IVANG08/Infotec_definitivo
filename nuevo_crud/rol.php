<?php 
 include("../models/Database.php") ;
 require_once "../views/roles/admin/header_dash.php";
 $con=conectar();

 $sql="SELECT * FROM roles";
 $query=mysqli_query($con,$sql);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<script src="https://kit.fontawesome.com/ae713951db.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../assets/css/styles-dashboard.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Crimson+Pro">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <h1>FORMULARIO </h1>
                <form method="post" action="insertar_rol.php" class="row g-3 needs-validation" novalidate>
                    <input type="int" class="form-control mb-3" name="id_rol" placeholder="Codigo Rol">
                    <input type="text" class="form-control" id="validationCustom02" value="" required name="nombre_rol" placeholder="Nombre rol">
                    <input type="submit" class="btn btn-enviar mt-2 ">
                </form>

            </div>
            <div class="div col-md-8">
                <h1>mostrar datos</h1>
                <table class="table justify-content-center col-11 ">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">Id</th>
                            <th scope="col">Rol</th>
                            <th scope="col">Modificar</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        while($row=mysqli_fetch_array($query)){
                        ?>
                        
                        <tr>
                            <td class="text-center">
                                 <?php echo $row['id_rol']?>
                            </td>
                            <td class="text-center"> 
                                <?php echo $row['nombre_rol']?>
                            </td>
                            <td class="text-center"><a class="btn btn-warning" href="user_modi.html id=<?echo $row['id_rol']?>"><i class="bi bi-pencil-square"></i></a></td>
                            <td  class="text-center"><a class="btn btn-danger" href=" id=<?echo $row['nombre_rol']?>"><i class="fa fa-trash"></i></a></td>
                            </tr>
                        <?php
                        }
                         ?>
                           
                        </tbody>
            </div>
        </div>
    </div>
</body>
</html>