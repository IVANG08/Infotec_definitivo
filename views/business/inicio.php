<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion</title>
    <link rel="shortcut icon" href="/assets/img/logosinf.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/master.css">
</head>

<body>


    <div class="contenedor">
        <img class="logo" src="assets/img/logosf.jpg" alt="LogodeFazt">
        <h1>Iniciar Sesión</h1>
        <form method="post" action="?c=Login" class="container_form">
            <!--USERNAME-->
            <label for="username">Nombre Usuario</label>
            <input type="text" placeholder="Ingresar Usuario">

            <!--PASSWORD-->
            <label for="password">Contraseña</label>
            <input type="password" placeholder="Ingresar Contraseña">

            <input type="submit" value="Ingresar">

            <div class="container__chek">
                <div class="form_chekbox">
                    <input type="checkbox" class="form_chekbox" id="exampleCheck1">
                </div>
                <label class="form-check-label" for="exampleCheck1">Recordar contraseña</label>
            </div>
            <a href="#" class="links">Has olvidado su contraseña</a><br>
        </form>
    </div>
</body>

</html>