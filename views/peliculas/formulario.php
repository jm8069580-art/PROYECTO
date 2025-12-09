<?php ob_start(); ?>
<div class="pelicula-form">
    <h2>Agregar Nueva Película</h2>

    <form action="<?php echo BASE_URL; ?>/peliculas/create" method="post">
        <label>Título:</label>
        <input type="text" name="titulo" required>

        <label>Tipo:</label>
        <select name="tipo" required>
            <option value="">Seleccione...</option>
            <option value="Película">Película</option>
            <option value="Serie">Serie</option>
        </select>

        <label>Género:</label>
        <input type="text" name="genero" required>

        <label>Año:</label>
        <input type="number" name="anio" min="1900" max="2099" required>

        <label>Duración (minutos):</label>
        <input type="number" name="duracion" required>

        <label>Clasificación:</label>
        <select name="clasificacion">
            <option value="">Seleccione...</option>
            <option value="G">G - Público general</option>
            <option value="PG">PG - Se sugiere compañía de adultos</option>
            <option value="PG-13">PG-13 - Mayores de 13 años</option>
            <option value="R">R - Restringida</option>
            <option value="NC-17">NC-17 - Solo adultos</option>
        </select>

        <label>Sinopsis:</label>
        <textarea name="sinopsis" rows="4"></textarea>

        <label>Stock:</label>
        <input type="number" name="stock" min="0" required>

        <button type="submit" class="btn">💾 Guardar</button>
        <a href="<?php echo BASE_URL; ?>/peliculas" class="btn">🔙 Volver</a>
    </form>
</div>

<?php
$content = ob_get_clean();
require VIEWS_PATH . 'layout.php';
?>