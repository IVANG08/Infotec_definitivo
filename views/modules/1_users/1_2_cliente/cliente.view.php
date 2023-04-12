<body>
    <div class="container">
    <h1 class="titulos mt-1">Clientes</h1>
    <hr>
        <div class="row tablas">
           
            <div class="col-md-3">
                
                <form method="post" action="?c=Cliente" class="row g-3 needs-validation" novalidate>
                    
                    <input type="int" class="form-control mb-3" name="id_cliente" placeholder="# Cliente">
                    <input type="text" class="form-control mb-3" name="identificacion_cliente" placeholder="# Identificación">
                    <input type="text" class="form-control mb-3" name="nombre_cliente" placeholder="Nombres">
                    <input type="text" class="form-control mb-3" name="apellido_cliente" placeholder="Apellidos">
                    <input type="text" class="form-control mb-3" name="telefono_cliente" placeholder="Telefono">
                    <input type="text" class="form-control mb-3" name="correo_cliente" placeholder="Correo">
                    <input type="submit" class="btn btn-enviar mt-2 ">
                </form>
                <div class="centarboton">
                    <td  class="text-center"><a class="btn btn-secondary" href="?c=Vehiculo"     style="border-top-width: 6px;margin-bottom: 5px;"><i class="fas fa-motorcycle align-self-center"></i>Vehiculo</a></td>
                    
                    
                                    </div>
            </div>
            <div class="div col-md-9">
                
                <table class="table justify-content-center col-md-9 ">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">ID Cliente</th>
                            <th scope="col">Identificacion</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>   
                            <th scope="col">Telefono</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Modificar</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        while($row=mysqli_fetch_array($cliente)){
                        ?>
                        
                        <tr>
                            <td class="text-center">
                                 <?php echo $row['id_cliente']?>
                            </td>
                            <td class="text-center"> 
                                <?php echo $row['identificacion_cliente']?>
                            </td>
                            <td class="text-center">
                                 <?php echo $row['nombre_cliente']?>
                            </td>
                            <td class="text-center"> 
                                <?php echo $row['apellido_cliente']?>
                            </td><td class="text-center">
                                 <?php echo $row['telefono_cliente']?>
                            </td>
                            <td class="text-center"> 
                                <?php echo $row['correo_cliente']?>
                            </td>                            <td class="text-center"><a class="btn btn-warning" href="?c=Cliente&a=editar_cliente& id_cliente=<?php echo $row['id_cliente']?>"><i class="bi bi-pencil-square"></i></a></td>
                            <td  class="text-center"><a class="btn btn-danger" href="?c=Cliente&a=eliminar_Cliente& id_cliente=<?php echo $row['id_cliente']?>"><i class="fa fa-trash"></i></a></td>
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