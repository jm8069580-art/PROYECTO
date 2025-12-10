<?php
// views/dashboard.php

// indicar al layout qué item marcar como activo
$currentPage = 'dashboard';

ob_start();
?>
<section class="content-section" style="background: white;">
    <div class="section-heading">
        <h1>Bienvenido a la<br><em>Videoteca</em></h1>
        <p>Usa el menú lateral para navegar entre los módulos del sistema.</p>
    </div>

    <div class="section-content">
        <div class="row">
            <div class="col-md-4">
                <h3>Películas</h3>
                <p>Gestiona el catálogo de películas y series.</p>
                <a href="<?php echo BASE_URL; ?>/peliculas" class="btn btn-primary">Ir a Películas</a>
            </div>
            <div class="col-md-4">
                <h3>Clientes</h3>
                <p>Administra los clientes de la videoteca.</p>
                <a href="<?php echo BASE_URL; ?>/clientes" class="btn btn-primary">Ir a Clientes</a>
            </div>
            <div class="col-md-4">
                <h3>Alquileres</h3>
                <p>Controla los alquileres y devoluciones.</p>
                <a href="<?php echo BASE_URL; ?>/alquileres" class="btn btn-primary">Ir a Alquileres</a>
            </div>
        </div>
    </div>
</section>
<?php
// Guardamos el contenido del buffer
$content = ob_get_clean();

// Incluimos el layout
require __DIR__ . '/layout.php';