document.addEventListener('DOMContentLoaded', function());

    var producto;
    var cliente;

    document.getElementById('Fecha').valueAsDate = new Date();

    //Boton que muestra el diálogo de agregar producto
    $('#btnAgregarProducto').click(function() {
      LimpiarFormulario();
      $("#Cantidad").val("1");
      $("#ModalProducto").modal();
    });

    //Boton que agrega el producto al detalle
    $('#btnConfirmarAgregarProducto').click(function() {
      RecolectarDatosFormulario();
      $("#ModalProducto").modal('hide');
      if ($("#Cantidad").val() == "") { //Controlamos que no esté vacío la cantidad de productos
        alert('no puede estar vacío la cantidad de productos.');
        return;
      }
      EnviarInformacionProducto("agregar");
    });

    //Boton terminar factura
    $('#btnTerminarFactura').click(function() {
      $("#ModalFinFactura").modal();
    });

    //Boton confirmar factura
    $('#btnConfirmarFactura').click(function() {
      if ($('#CodigoCliente').val() == 0) {
        alert('Debe seleccionar un cliente');
        return;
      }
      RecolectarDatosCliente();
      EnviarInformacionFactura("confirmarfactura");
    });

    //Boton que descarta la factura generada borrando tanto en la tabla de facturas como detallefactura
    $('#btnConfirmarDescartarFactura').click(function() {
      RecolectarDatosCliente();
      EnviarInformacionFactura("confirmardescartarfactura");
    });

    //Boton confirmar factura y ademas genera pdf
    $('#btnConfirmarImprimirFactura').click(function() {
      if ($('#CodigoCliente').val() == 0) {
        alert('Debe seleccionar un cliente');
        return;
      }
      RecolectarDatosCliente();
      EnviarInformacionFacturaImprimir("confirmarfactura");
    });

    function RecolectarDatosFormulario() {
      producto = {
        codigoproducto: $('#CodigoProducto').val(),
        cantidad: $('#Cantidad').val()
      };
    }

    function RecolectarDatosCliente() {
      cliente = {
        codigocliente: $('#CodigoCliente').val(),
        fecha: $('#Fecha').val()
      };
    }

    //Funciones AJAX para enviar y recuperar datos del servidor
    //******************************************************* 
    function EnviarInformacionProducto(accion) {
      $.ajax({
        type: 'POST',
        url: 'procesar.php?accion=' + accion + '&codigofactura=' + <?php echo $codigofactura ?>,
        data: producto,
        success: function(msg) {
          RecuperarDetalle();
        },
        error: function() {
          alert("Hay un error ..");
        }
      });
    }

    function EnviarInformacionFactura(accion) {
      $.ajax({
        type: 'POST',
        url: 'procesar.php?accion=' + accion + '&codigofactura=' + <?php echo $codigofactura ?>,
        data: cliente,
        success: function(msg) {
          window.location = 'index.php';
        },
        error: function() {
          alert("Hay un error ..");
        }
      });
    }