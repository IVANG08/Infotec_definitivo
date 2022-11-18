<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<script src="https://kit.fontawesome.com/ae713951db.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../../css/styles-dashboard.css">
	<link rel="stylesheet"
	href="https://fonts.googleapis.com/css2?family=Crimson+Pro">
</head>
<body>
<div class="container">
   <div class="row">
        <div class="col-md-10 ">
            <h1>Registro nuevos usuarios</h1>
            <hr>
            <form class="row g-3 needs-validation" novalidate>
                <div class="col-md-6">
                  <label for="validationCustom01" class="form-label">Perfil</label>
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option>Seleccione</option>
                    <option>Administrador</option>
                    <option>Cliente</option>
                    <option>Empleado</option>
                  </select>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="validationCustom02" class="form-label">Documento de identidad</label>
                  <input type="text" class="form-control" id="validationCustom02" value="" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="validationCustomUsername" class="form-label">Nombres</label>
                  <div class="input-group has-validation">
                    <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="validationCustomUsername" class="form-label">Apellidos</label>
                  <div class="input-group has-validation">
                    <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="validationCustomUsername" class="form-label">Telefono</label>
                  <div class="input-group has-validation">
                    <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="validationCustomUsername" class="form-label">Email</label>
                  <div class="input-group has-validation">
                    <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="exampleInputPassword1">Contraseña</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="col-md-4">
                  <label for="exampleInputPassword1">Confirmacion</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="col-12 botones p-3 ">
                  <button class="btn btn-enviar m-2" type="submit">Enviar</button>
                  <button class="btn btn-danger m-2" type="submit">Cancelar</button>
                  <a href="user_principal.html"class="btn btn-danger m-2" type="submit">atras</a>
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