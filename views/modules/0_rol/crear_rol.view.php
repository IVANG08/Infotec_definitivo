<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lubrimotos la 30</title>
    <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/ae713951db.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../../assets/css/styles-dashboard.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Crimson+Pro">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-10 ">
                <h1>Crear rol</h1>
                <hr>
                <form method="post" action="?c=Roles&a=crear_rol" class="row g-3 needs-validation" novalidate>

                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label">Código rol</label>
                        <input type="text" class="form-control" id="validationCustom02" value="" required name="codigo_rol">
                        <div class="valid-feedback">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label">Nombre rol</label>
                        <input type="text" class="form-control" id="validationCustom02" value="" required name="nombre_rol">
                        <div class="valid-feedback">
                        </div>
                    </div>

                    <div class="col-12 botones p-3 ">
                        <button class="btn btn-enviar m-2" type="submit">Crear</button>
                        <button class="btn btn-danger m-2" type="reset">Cancelar</button>
                        <a href="?c=Roles" class="btn btn-danger m-2" type="submit">atras</a>
                    </div>
                </form>

            </div>
        </div>
    </div>


    <script src="js/jquery.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/main.js" charset="utf-8"></script>
</body>