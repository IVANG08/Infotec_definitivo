<body>
    <div class="container">
    <h1 class="titulos mt-1">Agregar Servicio</h1>
    <hr>
        <div class="row tablas">
           
            <div class="col-md-3">
                
                <form method="post" action="?c=ListaServicio" class="row g-3 needs-validation" novalidate>
                <input type="int" class="form-control mb-3" name="id_listS" placeholder="# Lista">
                <select class="form-control mb-3" name="id_factura" placeholder="Factura" >
                    <option selected>Elija el # factura</option>
                    <?php foreach($verFactura as $vfac){
                        ?>
                        <option value='<?php echo $vfac['id_factura']?>'> <?php echo $vfac['id_factura']?></option>
                        <?php
                        }
                        ?>
                    </select>
                    <select class="form-control mb-3" name="id_servicios" id='id_servicios' placeholder="Servicio" >
                    <option selected>Elija el Servicio</option>
                    <?php foreach($verServicio as $vserv){
                        ?>
                        <option value='<?php echo $vserv['id_servicios']?>'> <?php echo $vserv['nombre_servicio']?></option>
                        <?php
                        }
                        ?>
                    </select>
                    <input type="text" class="form-control mb-3" name="cantidad" placeholder="Cantidad">
                    <input type="text" class="form-control mb-3" name="valor_venta" id="valor_venta" placeholder="Valor Venta" readonly>
                   
                    <input type="submit" class="btn btn-enviar mt-2 ">
                </form>
                <div class="centarboton">
                <div class="container">
                        <?php if(!empty($alerta)){ ?>
                            <div class="">
                                <div class="alert alert-danger" role="alert">
                                    <?php echo $alerta ?>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="js/jquery.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/main.js" charset="utf-8"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
    <script>
        $("#id_servicios").on( "change", function() {
            var id = $("#id_servicios").val();
            console.log(id)
            fetch('http://localhost:8081/infotec_definitivo/?c=ListaServicio&a=precioServicio&id=serv_10')
            .then(response => response.json())
            .then(data => console.log(data));
           
        } );
    </script>
</body>
