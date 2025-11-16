<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Iniciar Sesión</title>
</head>

<body class="bg-primary d-flex align-items-center" style="height:100vh;">
<div class="container">
    <div class="col-md-4 mx-auto">
        <div class="card shadow p-4">
            
            <div class="text-center mb-3">
                <h4 class="mt-2">Mi Web - Acceso</h4>
            </div>

            <form action="validariniciosesion.php" method="POST">

                <div class="mb-3">
                    <label class="form-label">Correo</label>
                    <input type="email" name="correo" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Contraseña</label>
                    <input type="password" name="clave" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary w-100">Ingresar</button>
            </form>

            <div class="text-center mt-3">
                <a href="registrousuarios.html">Crear cuenta nueva</a>
            </div>

        </div>
    </div>
</div>
</body>
</html>