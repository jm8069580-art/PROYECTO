<?php
// Mostrar errores (útil en desarrollo)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Configuración global
require_once __DIR__ . '/../../config.php';

// Clases necesarias
require_once __DIR__ . '/../../src/Database.php';
require_once __DIR__ . '/PeliculasManager.php';
require_once __DIR__ . '/Peliculas.php';

// Instanciar manager
$peliculasManager = new PeliculasManager();

// Acción por defecto
$action = $_GET['action'] ?? 'list';

// Controlador de rutas
switch ($action) {

    case 'create':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $peliculasManager->createMovie($_POST);
            header('Location: ' . BASE_URL . '/peliculas');
            exit;
        }
        require VIEWS_PATH . 'peliculas/formulario.php';
        break;

    case 'edit':
        $id = $_GET['id'] ?? null;
        if (!$id) {
            header('Location: ' . BASE_URL . '/peliculas');
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $peliculasManager->updateMovie($id, $_POST);
            header('Location: ' . BASE_URL . '/peliculas');
            exit;
        }

        $pelicula = $peliculasManager->getMovieById($id);
        require VIEWS_PATH . 'peliculas/editar.php';
        break;

    case 'delete':
        $id = $_GET['id'] ?? null;
        if ($id) {
            $peliculasManager->deleteMovie($id);
        }
        header('Location: ' . BASE_URL . '/peliculas');
        exit;

    case 'list':
    default:
        $peliculas = $peliculasManager->getAllMovies();
        require VIEWS_PATH . 'peliculas/lista.php';
        break;
}