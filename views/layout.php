<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videoteca - Sistema de Gestión</title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/public/assets/css/style.css">
</head>
<body>
    <header>
        <nav>
            <h1>🎬 Videoteca</h1>
            <ul>
                <li><a href="<?php echo BASE_URL; ?>/">Inicio</a></li>
                <li><a href="<?php echo BASE_URL; ?>/peliculas">Películas</a></li>
                <li><a href="<?php echo BASE_URL; ?>/clientes">Clientes</a></li>
                <li><a href="<?php echo BASE_URL; ?>/empleados">Empleados</a></li>
                <li><a href="<?php echo BASE_URL; ?>/alquileres">Alquileres</a></li>
                <li><a href="<?php echo BASE_URL; ?>/reservas">Reservas</a></li>
                <li><a href="<?php echo BASE_URL; ?>/valoraciones">Valoraciones</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <?php echo $content; ?>
    </main>

    <footer>
        <p>© <?php echo date('Y'); ?> Sistema de Gestión de Videoteca - QUIROZ, JUAN</p>
    </footer>
</body>
</html>