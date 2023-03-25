<div class="container">
    <div class="row">
        <div class="col-md-10 ">
            <h1 class="titulos mt-1">Factura </h1>
<hr>
<div>

<form class="row g-3 needs-validation" method="post" action="?c=Cliente&a=modificar_cliente"novalidate>  
    <div class="col-md-2">
            <label for="id_factura" class="form-label">Id Factura</label>
            <input type="text" class="form-control" id="id_factura"  required name="id_factura" placeholder="" value="" >
            </div>    
            <div class="col-md-2">
                <label for="fecha_factura" class="form-label">Fecha</label>
                <input type="date" class="form-control" id="fecha_factura"  required name="fecha_factura" placeholder="Fecha Factura" value="" >
                </div>   
        <div class="col-md-2">
            <label for="id_usuario" class="form-label">Id Usuario
            </label>
            <input type="text" class="form-control" id="id_usuario"  required name="id_usuario" placeholder="" value="" >
            </div>
        <div class="col-md-2">
            <label for="id_cliente" class="form-label">Id Cliente</label>
            <input type="text" class="form-control" id="id_cliente"  required name="id_cliente" placeholder="Id Cliente" value=" ">
            </div>
        <div class="col-md-2">
            <label for="nombre_cliente" class="form-label">Nombre Cliente</label>
            <input type="text" class="form-control" id="nombre_cliente"  required name="nombre_cliente" placeholder="Nombre" value=" ">
            </div>
            <div class="col-md-2">
                <label for="placa_vehiculo" class="form-label">Placa Vehiculo </label>
                <input type="text" class="form-control" id="placa_vehiculo"  required name="placa_vehiculo" placeholder="Placa Vehiculo" value=" ">
                </div>
            
<table    style="margin-top: 9px;" >
    <thead>
        <tr>
            <th>Concepto</th>
            <th>Cantidad</th>
            <th>Precio unitario</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Producto 1</td>
            <td>2</td>
            <td>$10.00</td>
            <td>$20.00</td>
        </tr>
        <tr>
            <td>Producto 2</td>
            <td>1</td>
            <td>$15.00</td>
            <td>$15.00</td>
        </tr>
        <tr>
            <td>Producto 3</td>
            <td>3</td>
            <td>$5.00</td>
            <td>$15.00</td>
        </tr>
        <tr>
            <td colspan="3" class="total">Total</td>
            <td>$50.00</td>
        </tr>
    </tbody>
</table>
<input type="submit" class="btn btn-enviar mt-2 ">
</div>
</div>
</div>


</body>