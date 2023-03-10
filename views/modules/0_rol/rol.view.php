<body>
    <div class="container">
    <h1 class="titulos mt-1">Roles</h1>
    <hr>
        <div class="row tablas">
           
            <div class="col-md-4">
                
                <form method="post" action="?c=Roles" class="row g-3 needs-validation" novalidate>
                    <input type="int" class="form-control mb-3" name="id_rol" placeholder="Codigo Rol">
                    <input type="text" class="form-control" id="validationCustom02" value="" required name="nombre_rol" placeholder="Nombre rol">
                    <input type="submit" class="btn btn-enviar mt-2 ">
                </form>

            </div>
            <div class="div col-md-8">
                
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
                        while($row=mysqli_fetch_array($roles)){
                        ?>
                        
                        <tr>
                            <td class="text-center">
                                 <?php echo $row['id_rol']?>
                            </td>
                            <td class="text-center"> 
                                <?php echo $row['nombre_rol']?>
                            </td>
                            <td class="text-center"><a class="btn btn-warning" href="?c=roles&actualizar_rol& id_rol=<?php echo $row['id_rol']?>"><i class="bi bi-pencil-square"></i></a></td>
                            <td  class="text-center"><a class="btn btn-danger" href=" id_rol=<?php echo $row['nombre_rol']?>"><i class="fa fa-trash"></i></a></td>
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