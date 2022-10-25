<?php 
require_once('navbar.php');
?>

<!-- Main -->
<div class="container">
    <div class="row">
        
        <!-- Contenedor del formulario de facturas -->
        <div class="col-lg-6 col-md-12 mt-5">

          <!-- Formulario de facturas -->
          <form method="post" class="my-4 rounded border p-4 shadow">
            
            <div class="my-2">
              <h3>Agregar items</h3>
            </div>

            <hr>

            <div class="row my-5">
              <div class="col-lg-6 col-md-12">
                <label for="nombreCliente" class="form-label">Cliente</label>
                <input type="text" class="form-control" id="nombreCliente" placeholder="John Doe">
              </div>
              <div class="col-lg-6 col-md-12">
                <label for="cedula" class="form-label">C.I.</label>
                <input type="text" class="form-control" id="cedula" placeholder="Cédula de Identidad">
              </div>
            </div>

            <div class="mb-1 mt-5">
              <label for="telefono" class="form-label">Teléfono</label>
              <input type="text" class="form-control" id="telefono" placeholder="Teléfono">
            </div>

            <div class="mb-3 mt-5">
              <label for="direccion" class="form-label">Dirección</label>
              <input type="text" class="form-control" id="direccion" placeholder="Dirección">
            </div>

            <hr>

            <div class="mb-1 mt-5">
              <label for="codigo" class="form-label">Código</label>
              <input type="text" class="form-control" id="codigo" placeholder="Código del producto">
            </div>

            <div class="mb-1 mt-5">
              <label for="cantidad" class="form-label">Cantidad</label>
              <input type="number" class="form-control" id="cantidad" >
            </div>

            <div class="row mt-5">
              <div class="col-lg-6 col-md-12">
                <input type="reset" class="btn btn-danger btn-block w-100" id="btnBorrar" value="Limpiar">
              </div>
              <div class="col-lg-6 col-md-12">
                <input type="button" class="btn btn-primary btn-block w-100" id="btnAdd" value="Añadir a la lista">
              </div>
            </div>

            <div class="mb-1 mt-3">
              <input type="submit" class="btn btn-success btn-block btn-lg w-100" id="submit" value="Facturar" >
            </div>

            <div class="mb-1 mt-3" id="error">

            </div>

          </form>
          <!-- Formulario de facturas -->

        </div>
        <!-- Contenedor del formulario de facturas -->

        <!-- Contenedor de tablas facturas recientes -->
        
        <div class="col-lg-6 col-md-12 mt-5">
          <div class="my-4 rounded border p-4 shadow">
            <div class="my-2">
              <h3>Lista de Productos</h3>
            </div>

            <hr>

            <!-- Tabla de productos -->
            <table class="table table-hover mt-5">
              <thead class="table-dark">
                <tr>
                  <th scope="col">COD</th>
                  <th scope="col">Item</th>
                  <th scope="col">Cantidad</th>
                  <th scope="col">Precio</th>
                </tr>
              </thead>
              <tbody id="preview-factura">
                
                <tr id="cuenta-total">
                  <th scope="row" colspan="3">Total</th>
                  <td id="monto-total">910 $</td>
                </tr>
              </tbody>
            </table>
            
          </div>

        </div>
        <!-- Contenedor de tablas facturas recientes -->
      </div>
    </div>
    <!-- Main -->

<?php 
require_once('footer.php');
?>