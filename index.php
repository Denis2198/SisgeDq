<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">Mi Web</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
            data-bs-target="#navbarContenido">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarContenido">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link" href="https://www.gartner.es/es/articulos/principales-tendencias-tecnologicas-2025">Tecnología</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="https://www.wisdomlib.org/es/concept/avance-cient%C3%ADfico">Avances Científicos</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="https://www.teleamazonas.com/tendencias/entretenimiento/">Entretenimiento</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="https://www.primicias.ec/">Noticias</a>
                </li>

            </ul>

            <!-- BOTÓN CERRAR SESIÓN -->
            <span class="navbar-text me-3">
                👋 Bienvenido <?php echo $_SESSION['nombre'] . " " . $_SESSION['apellido']; ?>
            </span>

            <a href="cierresesion.php" class="btn btn-danger btn-sm">Cerrar sesión</a>

        </div>
    </div>
</nav>

<!-- CONTENIDO PRINCIPAL -->
<div class="container my-5">

    <div class="card shadow p-4">
        <h3 class="text-center mb-4">Bienvenido a esta página</h3>

        <p class="lead">
            Aquí puedes conocer contenido relacionado a tecnología, noticias,
            avances científicos y novedades del entretenimiento a nivel nacional e internacional.
        </p>

        <p>
            Desde siempre el entretenimiento forma parte de nuestra vida cotidiana,
            nos ayuda a despejar la mente y explorar temáticas que nos generan nuevas emociones.
        </p>

        <p>
            Por tal razón, he desarrollado este portal para que encuentres diversos
            aspectos que marcan nuestra vida diaria. ¡Disfrútalo!
        </p>

        <p class="fst-italic text-primary fw-bold text-center">
            <u>Este sitio web es para ti.</u>
        </p>
    </div>

</div>

<!-- FOOTER -->
<footer class="bg-dark text-white text-center py-4">
    <p class="mb-1 fw-bold">--My Web--</p>
    <p class="mb-0">Versión 1.0</p>
    <p class="mb-0">Desarrollado por: Denis Agustín Quintuña Valle</p>
    <p class="mb-0">Derechos reservados © 2025</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
