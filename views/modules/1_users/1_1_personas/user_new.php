<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<script src="https://kit.fontawesome.com/ae713951db.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../../../assets/css/styles-dashboard.css">
	<link rel="stylesheet"
	href="https://fonts.googleapis.com/css2?family=Crimson+Pro">
</head>
<body>
<div class="container">
   <div class="row">
        <div class="col-md-10 ">
            <h1>Registro nuevos usuarios</h1>
            <hr>
            <form action="?c=Personas&a=crear_personas" method="post" class="row g-3 needs-validation" novalidate>
                <div class="col-md-6">
                  <label for="validationCustom01" class="form-label">Perfil</label>
                  <select class="form-control" id="exampleFormControlSelect1" name="id_rol">
                    <option>Seleccione</option>
                                       
                    
                    <option value="2">Admin</option>			      
			              <option value="5">Cliente</option>			      
			              <option value="8">Empleado</option>
                  </select>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="validationCustom02" class="form-label">Documento de identidad</label>
                  <input type="text" class="form-control" id="validationCustom02" value="" required name="id_persona">
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="validationCustomUsername" class="form-label">Nombres</label>
                  <div class="input-group has-validation">
                    <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required name="nombres_persona">
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="validationCustomUsername" class="form-label">Apellidos</label>
                  <div class="input-group has-validation">
                    <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required
                    name="apellidos_persona">
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="validationCustomUsername" class="form-label">Telefono</label>
                  <div class="input-group has-validation">
                    <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required
                    name="telefono_persona">
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="exampleInputPassword1">Email</label>
                  <input type="" name="correo_persona" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="col-md-4">
                  <label for="exampleInputPassword1">Contraseña</label>
                  <input type="password" name="pass_persona" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="col-md-4">
                  <label for="exampleInputPassword1">Confirmacion</label>
                  <input type="password" name="pass2_persona" class="form-control" id="exampleInputPassword1">
                </div>
                <div>
                <a class="btn btn-warning m-2" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Agregar vehiculo</a>
              </div>
                    <!-- <div class="row">
                    <div class="col">
                      <div class="collapse multi-collapse" id="multiCollapseExample1">
                        <div class="card card-body">
                          <form class="row g-3 needs-validation" novalidate>

                            <div class="col-md-12">
                                <label for="validationCustom02" class="form-label">Placa Vehículo</label>
                                <input type="text" class="form-control" id="validationCustom02" value="" required>
                                <div class="valid-feedback">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom02" class="form-label">Código Cliente</label>
                                <input type="text" class="form-control" id="validationCustom02" value="" required>
                                <div class="valid-feedback">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom02" class="form-label">Marca</label>
                                <input type="text" class="form-control" id="validationCustom02" value="" required>
                                <div class="valid-feedback">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom02" class="form-label">Modelo</label>
                                <input type="text" class="form-control" id="validationCustom02" value="" required>
                                <div class="valid-feedback">
                                </div>
                            </div>

                            <div class="col-12 botones p-3 ">
                                <button class="btn btn-enviar m-2" type="submit">Crear</button>
                                <button class="btn btn-danger m-2" type="submit">Cancelar</button>
                                </div>
                        </form>

                        </div>
                      </div>
                    </div> -->
                    
                  </div>
                <div class="col-12 botones p-3 ">
                  <button class="btn btn-enviar m-2" type="submit">Enviar</button>
                  <button class="btn btn-danger m-2" type="submit">Cancelar</button>
                  <a href="?c=Personas"class="btn btn-danger m-2" type="submit">atras</a>
                  
                </div>
               
              </form>
        </div>
   </div>
</div>
    
    
    <script src="../../../assets/js/jquery.slim.min.js"></script>	
	<script src="../../../assets/js/popper.min.js"></script>	
	<script src="../../../assets/js/bootstrap.js"></script>	
	<script src="../../../assets/js/main.js" charset="utf-8"></script>
</body>