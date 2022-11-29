<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lubrimotos la 30</title>
    <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/ae713951db.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../css/styles-dashboard.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Crimson+Pro">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <h1>Consultar rol</h1>
                <hr>
                <div class="card col-11">
                    <div class="card-header fw-bold">
                        Buscar Rol
                    </div>
                    <ul class=" list-group list-group-flush">
                        <li class=" buscar list-group-item">
                            <div class="mb-3 col-8 ">
                                <label for="validationCustom02" class="">Código rol
                                </label>
                                <input type="text" class="form-control" id="validationCustom02" value="" required>
                            </div>
                            <a href="user-create.html" class="col-auto">
                                <div class="col-md-2 d-flex aling-items-end"><button class="d-flex aling-items-center  mt-2 btn btn-buscar" type="submit"><i class="bi bi-search"></i></button>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <br>

                <table class="table justify-content-center col-11">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">Id</th>
                            <th scope="col">Rol</th>
                            <th scope="col">Modificar</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($roles as $rol); ?>
                        <tr>
                            <td class="text-center"> <?php echo $rol ->getCodigoRol ();?>
                    </td>
                    <td class="text-center"> <?php echo $rol ->getNombreRol (); ?>
                    </td>

                    <td class="text-center"><a class="btn btn-warning" href="user_modi.html"><i class="bi bi-pencil-square"></i></a></td>
                                <td  class="text-center"><a class="btn btn-danger" href=""><i class="fa fa-trash"></i></a></td>
                        </tr>
                        
                    </tbody>
                </table>
                <a href="?c=Roles" class="btn btn-danger m-2" type="submit">atras</a>
            </div>
        </div>
    </div>

    <script src="js/jquery.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/main.js" charset="utf-8"></script>
                    </tbody>
                    </body>