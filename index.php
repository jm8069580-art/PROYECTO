<?php
// Mostrar errores en desarrollo
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/config.php';

// Por ahora, index.php solo mostrará un “dashboard” estático.
require_once __DIR__ . '/views/dashboard.php';

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Videoteca - Panel Principal</title>

    <link rel="apple-touch-icon" href="<?php echo BASE_URL; ?>/public/assets/img/apple-touch-icon.png">

    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/public/assets/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/public/assets/css/fontAwesome.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/public/assets/css/light-box.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/public/assets/css/owl-carousel.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/public/assets/css/templatemo-style.css">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <style>
        /* Contenedor principal: sidebar + contenido */
        .main-wrapper {
            margin-left: 260px; /* ancho del sidebar del template */
            padding: 40px;
            min-height: 100vh;
            background-color: white;
            color: black;
        }

        .main-wrapper .section-heading h1,
        .main-wrapper h2 {
            color: #fff;
        }
    </style>
</head>

<body>

    <!-- MENÚ RESPONSIVE SUPERIOR (móvil) -->
    <header class="nav-down responsive-nav hidden-lg hidden-md">
        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <div id="main-nav" class="collapse navbar-collapse">
            <nav>
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo BASE_URL; ?>/">Dashboard</a></li>
                    <li><a href="<?php echo BASE_URL; ?>/peliculas">Películas</a></li>
                    <li><a href="<?php echo BASE_URL; ?>/clientes">Clientes</a></li>
                    <li><a href="<?php echo BASE_URL; ?>/empleados">Empleados</a></li>
                    <li><a href="<?php echo BASE_URL; ?>/alquileres">Alquileres</a></li>
                    <li><a href="<?php echo BASE_URL; ?>/reservas">Reservas</a></li>
                    <li><a href="<?php echo BASE_URL; ?>/valoraciones">Valoraciones</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- SIDEBAR IZQUIERDO FIJO -->
    <div class="sidebar-navigation hidde-sm hidden-xs">
        <div class="logo">
            <a href="<?php echo BASE_URL; ?>/">VIDEO<em>TECA</em></a>
        </div>
        <nav>
            <ul>
                <li>
                    <a href="<?php echo BASE_URL; ?>/" class="selected">
                        <span class="rect"></span>
                        <span class="circle"></span>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASE_URL; ?>/peliculas">
                        <span class="rect"></span>
                        <span class="circle"></span>
                        Películas
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASE_URL; ?>/clientes">
                        <span class="rect"></span>
                        <span class="circle"></span>
                        Clientes
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASE_URL; ?>/empleados">
                        <span class="rect"></span>
                        <span class="circle"></span>
                        Empleados
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASE_URL; ?>/alquileres">
                        <span class="rect"></span>
                        <span class="circle"></span>
                        Alquileres
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASE_URL; ?>/reservas">
                        <span class="rect"></span>
                        <span class="circle"></span>
                        Reservas
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASE_URL; ?>/valoraciones">
                        <span class="rect"></span>
                        <span class="circle"></span>
                        Valoraciones
                    </a>
                </li>
            </ul>
        </nav>
        <ul class="social-icons">
            <li><a href="#"><i class="fa fa-film"></i></a></li>
            <li><a href="#"><i class="fa fa-user"></i></a></li>
            <li><a href="#"><i class="fa fa-star"></i></a></li>
        </ul>
    </div>
    <script src="<?php echo BASE_URL; ?>/public/assets/js/main.js"></script>
</body>
</html>