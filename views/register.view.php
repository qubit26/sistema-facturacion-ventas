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
                    <h1 class="text-center text-dark">Registrarse en el Sistema</h1>
                </div>
            </div>
            <!-- Contenedor del título -->
    
            <hr class="my-5">

            <!-- Contenedor del Formulario de registro -->
            <div class="row d-flex flex-row justify-content-center my-5 align-items-center">
                <div class="col-4 p-2">
                    <!-- Formulario de registro en el sistema -->
                    <form action="" method="post" class="rounded shadow border p-4 my-5">

                        <div class="info-text">
                            <p class="text-muted">
                                Todos los campos son obligatorios
                            </p>
                            <hr>
                        </div>

                        <div class="mb-3">
                            <label for="nombres" class="form-label text-primary">Nombres</label>
                            <input type="text" name="nombres" id="nombres" class="form-control" placeholder="Elizabeth"/>
                        </div>

                        <div class="mb-3">
                            <label for="apellidos" class="form-label text-primary">Apellidos</label>
                            <input type="text" name="apellidos" id="apellidos" class="form-control" placeholder="Olsen"/>
                        </div>

                        <div class="mb-3">
                            <label for="correo" class="form-label text-primary">Correo</label>
                            <input type="text" name="correo" id="correo" class="form-control" placeholder="example@mail.com"/>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label text-primary">Contraseña</label>
                            <input type="password" name="password" id="password" class="form-control" />
                        </div>

                        <div class="mb-3">
                            <label for="password2" class="form-label text-primary">Repite tu contraseña</label>
                            <input type="password" name="password2" id="password2" class="form-control" />
                        </div>

                        <div class="mb-3">
                            <p class="lead mb-2">Selecciona tu sexo</p>
                            <div class="row">
                                <div class="col-auto">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sexo" id="sexoM">
                                        <label class="form-check-label" for="sexoM">
                                            Masculino
                                        </label>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sexo" id="sexoF">
                                        <label class="form-check-label" for="sexoF">
                                            Femenino
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="my-3">
                            <p class="mb-2">Aceptar <a href="#">Términos y Condiciones</a></p>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="terminos">
                                <label class="form-check-label" for="terminos">
                                  Aceptar
                                </label>
                              </div>
                        </div>

                        <div class="buttons-action mt-4">
                            <a href="login.php" class="btn btn-link btn-sm my-2" >¿Ya tienes cuenta?, ¡Inicia Sesión!</a>
                            <input type="submit" value="Registrarse" class="btn btn-primary btn-block w-100 my-2">
                        </div>
                    </form>
                </div>
            </div>
            <!-- Contenedor del Formulario de registro -->
    
            
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