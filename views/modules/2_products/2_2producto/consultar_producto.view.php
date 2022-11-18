<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lubrimotos la 30</title>
    <link rel="stylesheet" href="../../../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/ae713951db.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../../../assets/css/styles-dashboard.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Crimson+Pro">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <h1>Consulta de producto</h1>
                <hr>
                <div class="card" style="width: 60rem;">
                    <div class="card-header fw-bold">
                        Buscar Producto
                    </div>
                    <ul class=" list-group list-group-flush">
                        <li class=" buscar list-group-item">
                            <div class="mb-3 ">
                                <label for="validationCustom02" class="">Nombre o código</label>
                                <input type="text" class="form-control" id="validationCustom02" value="" required>
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
                            <th scope="col">Nombre Producto</th>
                            <th scope="col">Ref Producto</th>
                            <th scope="col">Marca</th>
                            <th scope="col">Modelo</th>
                            <th scope="col">Precio</th>



                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <th scope="row">1</th>
                            <td>Lubricante Motul</td>
                            <td>Motul 5.100 20W-50</td>
                            <td>Motul</td>
                            <td>Universal</td>
                            <td>$29.000</td>

                            <td class="text-center"><a class="btn btn-warning" href="actualizar_vehiculo.html"><i class="bi bi-pencil-square"></i></a></td>
                            <td class="text-center"><a class="btn btn-danger" href=""><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr class="text-center">
                            <th scope="row">2</th>
                            <td>Pastillas de freno</td>
                            <td>traseras NS200</td>
                            <td>kross</td>
                            <td>Universal</td>
                            <td>$16.000</td>


                            <td class="text-center"><a class="btn btn-warning" href="actualizar_vehiculo.html"><i class="bi bi-pencil-square"></i></a></td>
                            <td class="text-center"><a class="btn btn-danger" href=""><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr class="text-center">
                            <th scope="row">3</th>
                            <td>bujia de iridium</td>
                            <td>R-i24758</td>
                            <td>Denso</td>
                            <td>Universal</td>
                            <td>$33.000</td>


                            <td class="text-center"><a class="btn btn-warning" href="actualizar_vehiculo.html"><i class="bi bi-pencil-square"></i></a></td>
                            <td class="text-center"><a class="btn btn-danger" href=""><i class="fa fa-trash"></i></a></td>
                        </tr>
                    </tbody>
                </table>
                <a href="?c=Products" class="btn btn-danger m-2" type="submit">atras</a>
            </div>
        </div>
    </div>

    <script src="js/jquery.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/main.js" charset="utf-8"></script>
</body>