<?php
// asumiendo que ya tienes $peliculas cargadas en el controlador
require_once __DIR__ . '/../../config.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Videoteca - Películas</title>

    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/public/assets/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/public/assets/css/fontAwesome.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/public/assets/css/templatemo-style.css">

    <style>
        .main-wrapper {
            margin-left: 260px;
            padding: 40px;
            min-height: 100vh;
            background-color: #1f1f1f;
            color: #fff;
        }

        h2 {
            color: #fff;
        }

        .table {
            background-color: #2b2b2b;
            color: #fff;
        }

        .table thead {
            background-color: #333;
        }
    </style>
</head>

<body>

    <!-- Mismo sidebar que en index.php -->
    <div class="sidebar-navigation hidde-sm hidden-xs">
        <div class="logo">
            <a href="<?php echo BASE_URL; ?>/">VIDEO<em>TECA</em></a>
        </div>
        <nav>
            <ul>
                <li>
                    <a href="<?php echo BASE_URL; ?>/">
                        <span class="rect"></span>
                        <span class="circle"></span>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASE_URL; ?>/peliculas" class="selected">
                        <span class="rect"></span>
                        <span class="circle"></span>
                        Películas
                    </a>
                </li>
                <li><a href="<?php echo BASE_URL; ?>/clientes"><span class="rect"></span><span class="circle"></span>Clientes</a></li>
                <li><a href="<?php echo BASE_URL; ?>/empleados"><span class="rect"></span><span class="circle"></span>Empleados</a></li>
                <li><a href="<?php echo BASE_URL; ?>/alquileres"><span class="rect"></span><span class="circle"></span>Alquileres</a></li>
                <li><a href="<?php echo BASE_URL; ?>/reservas"><span class="rect"></span><span class="circle"></span>Reservas</a></li>
                <li><a href="<?php echo BASE_URL; ?>/valoraciones"><span class="rect"></span><span class="circle"></span>Valoraciones</a></li>
            </ul>
        </nav>
        <ul class="social-icons">
            <li><a href="#"><i class="fa fa-film"></i></a></li>
            <li><a href="#"><i class="fa fa-user"></i></a></li>
            <li><a href="#"><i class="fa fa-star"></i></a></li>
        </ul>
    </div>

    <div class="main-wrapper">
        <section class="content-section">
            <div class="section-heading">
                <h1>Gestión de<br><em>Películas</em></h1>
                <p>Listado de películas registradas en el sistema.</p>
            </div>

            <div class="section-content">
                <a href="<?php echo BASE_URL; ?>/peliculas/create" class="btn btn-primary" style="margin-bottom: 15px;">
                    ➕ Agregar Película
                </a>

                <?php if (!empty($peliculas)) : ?>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover align-middle">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Título</th>
                                    <th>Tipo</th>
                                    <th>Género</th>
                                    <th>Año</th>
                                    <th>Duración</th>
                                    <th>Clasificación</th>
                                    <th>Stock</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($peliculas as $pelicula) : ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($pelicula['id_pelicula']); ?></td>
                                        <td><?php echo htmlspecialchars($pelicula['titulo']); ?></td>
                                        <td><?php echo htmlspecialchars($pelicula['tipo']); ?></td>
                                        <td><?php echo htmlspecialchars($pelicula['genero']); ?></td>
                                        <td><?php echo htmlspecialchars($pelicula['anio']); ?></td>
                                        <td><?php echo htmlspecialchars($pelicula['duracion']); ?> min</td>
                                        <td><?php echo htmlspecialchars($pelicula['clasificacion']); ?></td>
                                        <td><?php echo htmlspecialchars($pelicula['stock']); ?></td>
                                        <td>
                                            <a href="<?php echo BASE_URL; ?>/peliculas/edit/<?php echo $pelicula['id_pelicula']; ?>" class="btn btn-sm btn-warning">✏️</a>
                                            <a href="<?php echo BASE_URL; ?>/peliculas/delete/<?php echo $pelicula['id_pelicula']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Seguro que deseas eliminar esta película?');">🗑️</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                <?php else : ?>
                    <p>No hay películas registradas aún.</p>
                <?php endif; ?>
            </div>
        </section>
    </div>

    <script src="<?php echo BASE_URL; ?>/public/assets/js/vendor/jquery-1.11.2.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/public/assets/js/vendor/bootstrap.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/public/assets/js/plugins.js"></script>
    <script src="<?php echo BASE_URL; ?>/public/assets/js/main.js"></script>
</body>
</html>