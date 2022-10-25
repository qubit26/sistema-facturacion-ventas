<?php 
require_once('navbar.php');
?>

    <!-- Main -->
    <div class="container">
        <div class="row">
            <div class="col-12 my-5">
                <!-- Formulario consultar facturas -->
                <form action="" method="get" class="rounded border shadow p-4">
                    <div class="mb-2">
                        <h3 class="my-1">Consultar Factura</h3>
                        <hr>
                    </div>
                    <div class="row d-flex justify-content-between align-items-end">
                        <div class="col-8">
                            <label for="codFactura" class="form-label">Número de Factura</label>
                            <input type="search" name="codFactura" id="codFactura" class="form-control" placeholder="01235" />
                        </div>
                        <div class="col-4">
                            <input type="submit" value="Buscar Factura" class="btn btn-success btn-block w-100"/>
                        </div>
                    </div>
                </form>
                <!-- Formulario consultar facturas -->
            </div>
        </div>

        <!-- Contenedor de registros de facturas -->
        <div class="row">
            <div class="col-12 mb-5">
                <div class="rounded shadow border p-4">
                    <div class="mb-2">
                        <h4>Listado de Facturas</h4>
                    </div>
                    <!-- Tabla de registros de facturas -->
                    <table class="table table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>Número</th>
                                <th>Cliente</th>
                                <th>Fecha</th>
                                <th>Producto(s)</th>
                                <th>Total</th>
                                <th>Ref</th>
                              </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1001</td>
                                <td>Merlynna Sánchez</td>
                                <td>07-10-2022</td>
                                <td>PC Lenovo</td>
                                <td>450 $</td>
                                <td><a href="factura.php" class="btn btn-primary">&#xf044;</a></td>
                            </tr>
                            <tr>
                                <td>1001</td>
                                <td>Merlynna Sánchez</td>
                                <td>07-10-2022</td>
                                <td>PC Lenovo</td>
                                <td>450 $</td>
                                <td><a href="#" class="btn btn-primary">&#xf044;</a></td>
                            </tr>
                            <tr>
                                <td>1001</td>
                                <td>Merlynna Sánchez</td>
                                <td>07-10-2022</td>
                                <td>PC Lenovo</td>
                                <td>450 $</td>
                                <td><a href="#" class="btn btn-primary">&#xf044;</a></td>
                            </tr>
                            <tr>
                                <td>1001</td>
                                <td>Merlynna Sánchez</td>
                                <td>07-10-2022</td>
                                <td>PC Lenovo</td>
                                <td>450 $</td>
                                <td><a href="#" class="btn btn-primary">&#xf044;</a></td>
                            </tr>
                            <tr>
                                <td>1001</td>
                                <td>Merlynna Sánchez</td>
                                <td>07-10-2022</td>
                                <td>PC Lenovo</td>
                                <td>450 $</td>
                                <td><a href="#" class="btn btn-primary">&#xf044;</a></td>
                            </tr>
                            <tr>
                                <td>1001</td>
                                <td>Merlynna Sánchez</td>
                                <td>07-10-2022</td>
                                <td>PC Lenovo</td>
                                <td>450 $</td>
                                <td><a href="#" class="btn btn-primary">&#xf044;</a></td>
                            </tr>
                            <tr>
                                <td>1001</td>
                                <td>Merlynna Sánchez</td>
                                <td>07-10-2022</td>
                                <td>PC Lenovo</td>
                                <td>450 $</td>
                                <td><a href="#" class="btn btn-primary">&#xf044;</a></td>
                            </tr>
                            <tr>
                                <td>1001</td>
                                <td>Merlynna Sánchez</td>
                                <td>07-10-2022</td>
                                <td>PC Lenovo</td>
                                <td>450 $</td>
                                <td><a href="#" class="btn btn-primary">&#xf044;</a></td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- Tabla de registros de facturas -->

                    <!-- Paginación -->
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                          <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                              <span aria-hidden="true">&laquo;</span>
                            </a>
                          </li>
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                              <span aria-hidden="true">&raquo;</span>
                            </a>
                          </li>
                        </ul>
                      </nav>
                </div>
            </div>
        </div>
        <!-- Contenedor de registros de facturas -->
    </div>
    <!-- Main -->

<?php 
require_once('footer.php');
?>