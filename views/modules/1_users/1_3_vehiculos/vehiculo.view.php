<body>
    <div class="container">
    <h1 class="titulos mt-1">Vehiculo</h1>
    <hr>
        <div class="row tablas">
           
            <div class="col-md-3">
                
                <form method="post" action="?c=Vehiculo" class="row g-3 needs-validation" novalidate>
                    <select class="form-control mb-3" name="id_cliente" placeholder="Rol" >
                    <option selected>Elija el Cliente</option>
                    <?php 
                        while($row=mysqli_fetch_array($cliente)){
                        ?>
                        <option value='<?php echo $row['id_cliente']?>'> <?php echo $row['nombre_Cliente']?></option>
                        <?php
                        }
                         ?>
                    </select>
                    
                    <input type="text" class="form-control mb-3" name="placa_vehiculo" placeholder="Placa Vehiculo">
                    <input type="submit" class="btn btn-enviar mt-2 ">
                </form>

            </div>
            <div class="div col-md-9">
                
                <table class="table justify-content-center col-11 ">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">Cliente</th>
                            <th scope="col">Vehiculo</th>
                            <th scope="col">Modificar</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        while($row=mysqli_fetch_array($vehiculo)){
                        ?>
                        
                        <tr>
                            <td class="text-center">
                                 <?php echo $row['nombre_cliente']?>
                            </td>
                            <td class="text-center"> 
                                <?php echo $row['placa_vehiculo']?>
                            </td>
                            <td class="text-center"><a class="btn btn-warning" href="?c=Vehiculo&a=editar_vehiculo& placa_vehiculo=<?php echo $row['placa_vehiculo']?>"><i class="bi bi-pencil-square"></i></a></td>
                            <td  class="text-center"><a class="btn btn-danger" href="?c=Vehiculo&a=eliminar_vehiculo& placa_vehiculo=<?php echo $row['placa_vehiculo']?>"><i class="fa fa-trash"></i></a></td>
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