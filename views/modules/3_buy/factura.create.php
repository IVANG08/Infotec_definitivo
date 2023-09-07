
<div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <h1 class="titulos mt-1">Factura </h1>
    <hr>
        <div class="div col-md-12">
            <form method="post" action="?c=Factura&a=crear_factura" class="row needs-validation" novalidate>
                <div class=""> <label class="tituloFac col-md-2">Fecha Factura: </label><input type="date" class="form-control mb-3" name="fecha_factura" id="fecha_factura" placeholder="Fecha Factura"></div>
                <div > <label class="tituloFac col-md-2">Nombre Cliente: </label> <input type="text" class="form-control mb-3" name="nombre_cliente" id="nombre_cliente" placeholder="Nombre Cliente"></div>
                <div > <label class="tituloFac col-md-2">Placa Vehiculo: </label><input type="text" class="form-control mb-3" name="placa_vehiculo" id="placa_vehiculo" placeholder="Vehiculo" ></div>
                <input type="submit" class="btn btn-enviar mt-2 ">
                <a type="button" class="btn btn-enviar mt-2 " id="agregar"> Agregar producto o servicio</a>
                <input type="text" class="form-control mb-3" name="cant_ids" id="cant_ids" value =1>
                <div class="centabla">
                        <table id="tablafactura" class="table justify-content-center col-11 ">
                            <thead>
                                <tr class="text-center">
                                    <th scope="col">Id</th>
                                    <th scope="col">Producto/Servicio</th>
                                    <th scope="col">Nombre producto/servicio</th>
                                    <th scope="col">Cantidad</th>
                                    <th scope="col">Valor</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td id="id_1" class="text-center">
                                        1
                                    </td>
                                    <td class="text-center"> 
                                    <select class="form-control mb-3 tipo" name="tipo_1" id='tipo_1' placeholder="Elija" >
                    <option selected>Elija </option>
                        <option value="producto">producto</option>
                        <option value="servicio">servicio</option>
                    </select>
                                    </td>
                                    <td class="text-center"> 
                                    <select class="form-control mb-3 pos" name="pos_1" id='pos_1' placeholder="Elija" >
                    <option selected>Elija </option>
                        
                    </select>
                                    </td>
                                    <td class="text-center"> 
                                    <input type="text" class="form-control mb-3 cantidad" name="cantidad_1" id="cantidad_1" >

                                    </td>
                                    <td class="text-center"> 
                                    <input type="text" class="form-control mb-3 valor" name="valor_1" id="valor_1"  readonly>

                                    </td>
                                    <td class="text-center"> 
                                    <input type="text" class="form-control mb-3" name="total_1" id="total_1"  readonly>

                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            </div>
            </form>

        
            </div>
        </div>
    </div>


</body>
<script src="assets/js/jquery.slim.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script>
     $(document).ready(function() {
    $('#agregar').on('click', agregarCampo)
    function agregarCampo(){
        var nId= Number($('#cant_ids').val())+1;
        $('#cant_ids').val(nId)
        var tabla = $("#tablafactura tbody");

    // Crea una nueva fila con los datos deseados
    var nuevaFila = $("<tr>");
    nuevaFila.append('<td id="id_'+nId+'" class="text-center">'+nId+'</td>');
    nuevaFila.append(`<td class="text-center"> 
        <select class="form-control mb-3 tipo" name="tipo_`+nId+`" id='tipo_`+nId+`' placeholder="Elija" >
        <option selected>Elija </option>
        <option value="producto">producto</option>
        <option value="servicio">servicio</option>
        </select>
        </td>`);
    nuevaFila.append(`<td class="text-center"> 
        <select class="form-control mb-3 pos" name="pos_`+nId+`" id='pos_`+nId+`' placeholder="Elija" >
        <option selected>Elija </option>
        </select>
        </td>`);
    nuevaFila.append(`<td class="text-center"> 
        <input type="text" class="form-control mb-3 cantidad" name="cantidad_`+nId+`" id="cantidad_`+nId+`" >
        </td>`);
    nuevaFila.append(`<td class="text-center"> 
        <input type="text" class="form-control mb-3 valor" name="valor_`+nId+`" id="valor_`+nId+`"  readonly>
        </td>`);
    nuevaFila.append(`<td class="text-center"> 
        <input type="text" class="form-control mb-3" name="total_`+nId+`" id="total_`+nId+`"  readonly>
        </td>`);

    // Agrega la nueva fila al cuerpo de la tabla
    tabla.append(nuevaFila);
    }
    $('.tipo').on('change','.tipo',function(){
        id =$(this).prop("id").split("_")[1]
        tipo =$(this).val()
        var select = $("#pos_"+id);
        console.log(select)
    if(tipo == 'servicio'){
        fetch('http://localhost:8081/infotec_definitivo/?c=Listaservicio&a=busquedaServicio')
        .then(response => response.json())
        .then(data => {
            let opciones= '<option selected>Elija </option>'
            data.forEach(function(item) {
                opciones+='<option value="'+item.id_servicios+'">'+item.nombre_servicio+'</option>'
            });
            select.html(opciones)
            console.log(opciones)
        }
        );
    }

    });

    $(".pos").on( "change", function() {
        var id =$(this).prop("id").split("_")[1]
        console.log(id)
        var idpos =$(this).val()
        var tipo = $("#tipo_"+id).val();
        if(tipo == 'servicio'){

            fetch('http://localhost:8081/infotec_definitivo/?c=ListaServicio&a=precioServicio&id='+idpos)
            .then(response => response.json())
            .then(data => {
                $("#valor_"+id).val(data)
                console.log(id)
            });
        }
    } 
    );
       
        // Función para calcular el total
        function calcularTotal(id) {
            var cantidad = $("#cantidad_"+id).val();
            var precio = $("#valor_"+id).val();
            var total = cantidad * precio;
            $("#total_"+id).val(total);
        }
        // Evento de cambio en el campo "Cantidad"
        $(".cantidad").on("input",function() {
        var id =$(this).prop("id").split("_")[1]
         calcularTotal(id)});
        // Evento de cambio en el campo "Precio"
        $(".valor").on("input",function() {
        var id =$(this).prop("id").split("_")[1]
         calcularTotal(id)});

         
        });


    </script>