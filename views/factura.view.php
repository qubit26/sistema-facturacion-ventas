<?php 
require_once('navbar.php');
?>

    <!-- Main -->
    <div class="container">
        <div class="row my-5 d-flex justify-content-center">
            <div class="col-6">
                <a href="facturas.php" class="btn btn-link">&#8592; Volver</a>
                <!-- Factura -->
                <div class="factura card shadow rounded border p-4">
                    <div class="card-body">
                        <div class="row d-flex justify-content-between align-items-center">
                          <div class="img-container col-auto">
                            <img src="views/img/logo.jpg" alt="Logotipo" class="img-factura">
                          </div>
                          <div class="col-auto">
                            <h3 class="card-title mt-2 text-end">Factura Nro:</h3>
                            <h4 class="card-subtitle text-muted mt-2 text-end">0-155456-A</h4>
                          </div>
                        </div>

                        <!-- Info del cliente -->
                        <div class="p-2 border rounded mt-2 row d-flex justify-content-between align-items-start">
                            <div class="col-auto">
                                <p><strong>Cliente: </strong>Merlynna Sánchez</p>
                                <p><strong>C.I.: </strong>31.456.523</p>   
                            </div>
                            <div class="col-auto">
                                <p><strong>Fecha: </strong>21-10-2022</p>
                                <p><strong>Teléfono: </strong>0414-971-50-77</p>
                            </div>
                            <div class="col-auto">
                              <p><strong>Dirección: </strong>Urb. Perú, Calle Aramburú - Maracay, Edo. Aragua, Venezuela.</p>   
                            </div>
                        </div>
                        <!-- Info del cliente -->

                        <!-- Tabla de items facturados -->
                        <div class="my-2">
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Cantidad</th>
                                <th>Item</th>
                                <th class="text-end">Precio Unitario</th>
                                <th class="text-end">Total</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th>2</th>
                                <td>Laptop Lenovo</td>
                                <td class="text-end">300 $</td>
                                <td class="text-end">600 $</td>
                              </tr>
                              <tr>
                                <th>1</th>
                                <td>Smart TV</td>
                                <td class="text-end">250 $</td>
                                <td class="text-end">250 $</td>
                              </tr>
                              <tr>
                                <th>3</th>
                                <td>Celular</td>
                                <td class="text-end">120 $</td>
                                <td class="text-end">360 $</td>
                              </tr>
                              <tr>
                                <th colspan="3">Total</th>
                                <td class="text-end">1.210 $</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <!-- Tabla de items facturados -->

                        <!-- Dirección del local -->
                        <div class="my-2">
                          <p class="fst-italic text-center mb-2"><small>Centro Comercial Maracay Plaza, local m4 tlf 0412 8912229 / 04143411681 Maracay Edo Aragua.</small></p>
                          <p class="fst-italic text-center mb-2" style="font-size: 0.85rem;"><small>Pasados los 30 días no nos hacemos responsables por el équipo que hayan dejado en el local.</small></p>
                        </div>
                        <!-- Dirección del local -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main -->

<?php 
require_once('footer.php');
?>