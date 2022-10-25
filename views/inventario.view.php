<?php 
require_once('navbar.php');
?>

<!-- Main -->
<div class="container">

<div class="row">
  <div class="col-12 my-5">

    <!-- Formulario agregar inventario -->
    <form action="" method="post" class="rounded border shadow p-4">

      <div class="my-2">
        <h2 class="my-2">Agregar productos al Stock</h2>
        <hr>
      </div>

      <div class="row d-flex justify-content-center align-items-end">
        <div class="col-3">
          <label for="item" class="form-label">Producto</label>
          <input type="text" name="item" id="item" placeholder="Nombre del producto" class="form-control">
        </div>
        <div class="col-3">
          <label for="precio" class="form-label">Precio</label>
          <input type="text" name="precio" id="precio" placeholder="$" class="form-control">
        </div>
        <div class="col-3">
          <label for="stock" class="form-label">Stock</label>
          <input type="number" name="stock" id="stock" placeholder="0" class="form-control">
        </div>
        <div class="col-3">
          <input type="submit" id="stock" class="btn btn-success btn-block w-100" value="Agregar al Inventario">
        </div>
      </div>
    </form>
    <!-- Formulario agregar inventario -->

  </div>
</div>

<div class="row">
  <div class="col-12- my-b border shadow rounded p-4">
    <div class="my-2">
      <h3>Stock de productos</h3>
    </div>

    <!-- Tabla de Inventario -->
    <table class="table table-hover">
      <thead class="table-dark">
        <tr>
          <th>Código</th>
          <th>Producto</th>
          <th>Precio</th>
          <th>Stock</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>101</td>
          <td>iPhone</td>
          <td>1000</td>
          <td>50</td>
        </tr>
        <tr>
          <td>102</td>
          <td>Laptop HP</td>
          <td>400</td>
          <td>75</td>
        </tr>
        <tr>
          <td>103</td>
          <td>Laptop Dell</td>
          <td>350</td>
          <td>27</td>
        </tr>
        <tr>
          <td>104</td>
          <td>Laptop Lenovo</td>
          <td>450</td>
          <td>10</td>
        </tr>
        <tr>
          <td>105</td>
          <td>PC HP</td>
          <td>600</td>
          <td>83</td>
        </tr>
        <tr>
          <td>106</td>
          <td>PC Lenovo Gamer</td>
          <td>750</td>
          <td>110</td>
        </tr>
        <tr>
          <td>107</td>
          <td>Router TP-Link</td>
          <td>25</td>
          <td>60</td>
        </tr>
        <tr>
          <td>108</td>
          <td>Roku</td>
          <td>40</td>
          <td>15</td>
        </tr>
      </tbody>
    </table>
    <!-- Tabla de inventario -->

  </div>
</div>

</div>
<!-- Main -->

<?php 
require_once('footer.php');
?>