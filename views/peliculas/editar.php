<?php ob_start(); ?>
<div class="pelicula-form">
    <h2>Editar Película</h2>

    <form action="<?php echo BASE_URL; ?>/peliculas/edit/<?php echo $pelicula['id_pelicula']; ?>" method="post">
        
        <input type="hidden" name="id_pelicula" value="<?php echo htmlspecialchars($pelicula['id_pelicula']); ?>">

        <label>Título:</label>
        <input type="text" name="titulo" value="<?php echo htmlspecialchars($pelicula['titulo']); ?>" required>

        <label>Tipo:</label>
        <select name="tipo" required>
            <option value="">Seleccione...</option>
            <option value="Película" <?php echo ($pelicula['tipo'] == 'Película') ? 'selected' : ''; ?>>Película</option>
            <option value="Serie" <?php echo ($pelicula['tipo'] == 'Serie') ? 'selected' : ''; ?>>Serie</option>
        </select>

        <label>Género:</label>
        <input type="text" name="genero" value="<?php echo htmlspecialchars($pelicula['genero']); ?>" required>

        <label>Año:</label>
        <input type="number" name="anio" min="1900" max="2099" value="<?php echo htmlspecialchars($pelicula['anio']); ?>" required>

        <label>Duración (minutos):</label>
        <input type="number" name="duracion" value="<?php echo htmlspecialchars($pelicula['duracion']); ?>" required>

        <label>Clasificación:</label>
        <select name="clasificacion" required>
            <option value="">Seleccione...</option>
            <option value="G" <?php echo ($pelicula['clasificacion'] == 'G') ? 'selected' : ''; ?>>G - Público general</option>
            <option value="PG" <?php echo ($pelicula['clasificacion'] == 'PG') ? 'selected' : ''; ?>>PG - Se sugiere compañía de adultos</option>
            <option value="PG-13" <?php echo ($pelicula['clasificacion'] == 'PG-13') ? 'selected' : ''; ?>>PG-13 - Mayores de 13 años</option>
            <option value="R" <?php echo ($pelicula['clasificacion'] == 'R') ? 'selected' : ''; ?>>R - Restringida</option>
            <option value="NC-17" <?php echo ($pelicula['clasificacion'] == 'NC-17') ? 'selected' : ''; ?>>NC-17 - Solo adultos</option>
        </select>

        <label>Sinopsis:</label>
        <textarea name="sinopsis" rows="4" required><?php echo htmlspecialchars($pelicula['sinopsis']); ?></textarea>

        <label>Stock:</label>
        <input type="number" name="stock" min="0" value="<?php echo htmlspecialchars($pelicula['stock']); ?>" required>

        <button type="submit" class="btn">💾 Actualizar</button>
        <a href="<?php echo BASE_URL; ?>/peliculas" class="btn">🔙 Volver</a>
    </form>
</div>

<?php 
$content = ob_get_clean();
require VIEWS_PATH . 'layout.php'; 
?>