<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<script src="https://kit.fontawesome.com/ae713951db.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../../css/styles-dashboard.css">
	<link rel="stylesheet"
	href="https://fonts.googleapis.com/css2?family=Crimson+Pro">
</head>
<body>
    <div class="container">
        <div class="row">
             <div class="col-md-12 ">
                 <h1>Usuarios</h1>
                 <hr>
                 <div class="card" style="width: 60rem;">
                    <div class="card-header fw-bold"> 
                    Buscar Usuario
                    </div>
                    <ul class=" list-group list-group-flush">
                        <li class=" buscar list-group-item">
                            <div class="mb-3 ">     
                                <label for="validationCustom02" class="">Documento de identidad o placa</label>
                                <input type="text" class="form-control" id="validationCustom02" value="" required>
                                <div class="valid-feedback">
                                  Looks good!
                                </div>
                            </div>
                            <a href="user-create.html" class="col-auto">
                                    <button type="button" class="btn btn-enviar"> Buscar </button>
                            </a>
                        </li>
                    </ul>
                 </div>
                    <br>

                    <table class="table col-11">
                        <thead>
                        <tr class="text-center">
                            <th scope="col">#</th>
                            <th scope="col">Perfil</th>
                            <th scope="col">Documento</th>
                            <th scope="col">Nombres</th>
                            <th scope="col">Apellidos</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Email</th>
                            <th scope="col">Modificar</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr class="">
                                <th scope="row">1</th>
                                <td>Administrador</td>
                                <td>1234567</td>
                                <td>carlos</td>
                                <td>Garzon</td>
                                <td>315964852</td>
                                <td>carlos@gmail.com</td>
                                <td class="text-center"><a class="btn btn-warning" href="user_modi.html"><i class="bi bi-pencil-square"></i></a></td>
                                <td  class="text-center"><a class="btn btn-danger" href=""><i class="fa fa-trash"></i></a></td>
                            </tr>
                            <tr class="">
                                <th scope="row">1</th>
                                <td>Administrador</td>
                                <td>1234567</td>
                                <td>carlos</td>
                                <td>Garzon</td>
                                <td>315964852</td>
                                <td>carlos@gmail.com</td>
                                <td class="text-center"><a class="btn btn-warning" href="user_modi.html"><i class="bi bi-pencil-square"></i></a></td>
                                <td  class="text-center"><a class="btn btn-danger" href=""><i class="fa fa-trash"></i></a></td>
                            </tr>
                            <tr class="">
                                <th scope="row">1</th>
                                <td>Administrador</td>
                                <td>1234567</td>
                                <td>carlos</td>
                                <td>Garzon</td>
                                <td>315964852</td>
                                <td>carlos@gmail.com</td>
                                <td class="text-center"><a class="btn btn-warning" href=""><i class="bi bi-pencil-square"></i></a></td>
                                <td  class="text-center"><a class="btn btn-danger" href=""><i class="fa fa-trash"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="?c=Personas"class="btn btn-danger m-2" type="submit">atras</a>
            </div>
        </div>
    </div>
                
    <script src="js/jquery.slim.min.js"></script>	
	<script src="js/popper.min.js"></script>	
	<script src="js/bootstrap.js"></script>	
	<script src="js/main.js" charset="utf-8"></script>
</body>