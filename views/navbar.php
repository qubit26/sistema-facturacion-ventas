<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="views/css/bootstrap.min.css">
    <link rel="stylesheet" href="views/css/estilos-form-login.css">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/Carol">
              <img src="views/img/logo.jpg" alt="" width="30" class="img-navbar">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="/Carol">Inicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="facturas.php">Facturas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="inventario.php">Inventario</a>
                </li>
              </ul>
              <form class="d-flex">
                <button class="btn btn-outline-danger" type="button">Cerrar Sesión</button>
              </form>
            </div>
          </div>
    </nav>
    <!-- Navbar -->

    <!-- Encabezado -->
    <div class="container-fluid bg-secondary">
        <div class="row">
          <div class="col-12 p-4">
            <h1 class="text-center display-6 text-white">Sistema de facturación y ventas</h1>
          </div>
        </div>
      </div>
    <!-- Encabezado -->