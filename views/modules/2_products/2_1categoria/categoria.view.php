<body>
    <div class="container">
    <h1 class="titulos mt-1">Categoria</h1>
    <hr>
        <div class="row tablas">
           
            <div class="col-md-4">
                
                <form method="post" action="?c=Categoria" class="row g-3 needs-validation" novalidate>
                    <input type="int" class="form-control mb-3" name="id_categoria" placeholder="Codigo Categoria">
                    <input type="text" class="form-control" id="validationCustom02" value="" required name="nombre_categoria" placeholder="Nombre Categoria">
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
                        while($row=mysqli_fetch_array($categoria)){
                        ?>
                        
                        <tr>
                            <td class="text-center">
                                 <?php echo $row['id_categoria']?>
                            </td>
                            <td class="text-center"> 
                                <?php echo $row['nombre_categoria']?>
                            </td>
                            <td class="text-center">
                                <a class="btn btn-warning" href="?c=Categoria&a=editar_categoria& id_categoria=<?php echo $row['id_categoria']?>">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                            </td>
                            <td  class="text-center">
                                <a class="btn btn-danger" href="?c=roles&a=eliminar_rol&id_rol=<?php echo $row['id_rol']?>">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
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