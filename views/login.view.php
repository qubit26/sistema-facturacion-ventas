<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="views/css/bootstrap.min.css">
    <link rel="stylesheet" href="views/css/estilos-form-login.css">
</head>
<body>

        <div class="container">
    
            <!-- Contenedor del título -->
            <div class="row my-5">
                <div class="col-12">
                    <h1 class="text-center text-dark">Iniciar Sesión</h1>
                </div>
            </div>
            <!-- Contenedor del título -->
    
            <hr class="my-5">
    
            <!-- Contenedor del formulario -->
            <div class="row d-flex flex-row justify-content-center my-5 align-items-center">
                <div class="col-3 p-2 contenedor-formulario">
                    <form action="" method="post" class="rounded shadow border p-4 my-5">
    
                        <div class="info-text">
                            <p class="text-muted">
                                Todos los campos son obligatorios
                            </p>
                            <hr>
                        </div>
    
                        <div class="mb-3">
                            <label for="user" class="form-label text-primary">User o email*</label>
                            <input type="text" name="user" id="user" class="form-control" placeholder="example@mail.com"/>
                        </div>
    
                        <div class="mb-3">
                            <label for="user" class="form-label text-primary">Password*</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password"/>
                        </div>
    
                        <div class="buttons-action mt-4">
                            <a href="register.php" class="btn btn-link btn-sm my-2" >¿No estás registrado?, ¡Registrate!</a>
                            <input type="submit" value="Iniciar Sesión" class="btn btn-primary btn-block w-100 my-2">
                        </div>
    
    
                    </form>
                </div>
            </div>
            <!-- Contenedor del formulario -->
        </div>
    
    
        <footer class="bg-dark mt-5">
            <div class="container-fluid">
                <div class="container">
                    <div class="row d-flex justify-content-between">
                        <div class="col-4 my-2 py-3">
                            <p class="text-white">
                                Todos los derechos reservados - 2022
                            </p>
                        </div>
                        <div class="col-4 my-2 py-3">
                            <ul class="lista-footer">
                                <li><a href="#" class="text-white text-muted text-sm">Acerca de nosotros</a></li>
                                <li><a href="#" class="text-white text-muted text-sm">Preguntas frecuentes</a></li>
                                <li><a href="#" class="text-white text-muted text-sm">Términos y condiciones</a></li>
                                <li><a href="#" class="text-white text-muted text-sm">Reportar un problema</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


    <script src="views/js/bootstrap.min.js"></script>
</body>
</html>