<body>
    <div class="container">
    <h1 class="titulos mt-1">Personas</h1>
    <hr>
        <div class="row tablas">
           
            <div class="col-md-3">
                
                <form method="post" action="?c=Personas" class="row g-3 needs-validation" novalidate>
                    <select class="form-control mb-3" name="id_rol" placeholder="Rol" >
                    <option selected>Elija el rol</option>
                    <?php 
                        while($row=mysqli_fetch_array($roles)){
                        ?>
                        <option value='<?php echo $row['id_rol']?>'> <?php echo $row['nombre_rol']?></option>
                        <?php
                        }
                         ?>
                    </select>
                    <input type="int" class="form-control mb-3" name="id_personas" placeholder="# Identificación">
                    <input type="text" class="form-control mb-3" name="nombres_persona" placeholder="Nombres">
                    <input type="text" class="form-control mb-3" name="apellidos_persona" placeholder="Apellidos">
                    <input type="text" class="form-control mb-3" name="correo_persona" placeholder="Correo">
                    <input type="text" class="form-control mb-3" name="telefono_persona" placeholder="Telefono">
                    <input type="password" class="form-control mb-3" name="pass_persona" placeholder="Contraseña">
                    <input type="submit" class="btn btn-enviar mt-2 ">
                </form>

            </div>
            <div class="div col-md-9">
                
                <table class="table justify-content-center col-11 ">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">Rol</th>
                            <th scope="col">Identificacion</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Contraseña</th>
                            <th scope="col">Modificar</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        while($row=mysqli_fetch_array($persona)){
                        ?>
                        
                        <tr>
                            <td class="text-center">
                                 <?php echo $row['nombre_rol']?>
                            </td>
                            <td class="text-center"> 
                                <?php echo $row['id_personas']?>
                            </td>
                            <td class="text-center">
                                 <?php echo $row['nombres_persona']?>
                            </td>
                            <td class="text-center"> 
                                <?php echo $row['apellidos_persona']?>
                            </td><td class="text-center">
                                 <?php echo $row['correo_persona']?>
                            </td>
                            <td class="text-center"> 
                                <?php echo $row['telefono_persona']?>
                            </td>
                            <td class="text-center" type="password">
                                 <?php echo $row['pass_persona']?>
                            </td>
                            <td class="text-center"><a class="btn btn-warning" href="?c=roles&actualizar_rol& id_personas=<?php echo $row['id_personas']?>"><i class="bi bi-pencil-square"></i></a></td>
                            <td  class="text-center"><a class="btn btn-danger" href=""><i class="fa fa-trash"></i></a></td>
                            </tr>
                        <?php
                        }
                         ?>
                           
                        </tbody>
            </div>
        </div>
    </div>



    <script src="js/jquery.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/main.js" charset="utf-8"></script>
</body>