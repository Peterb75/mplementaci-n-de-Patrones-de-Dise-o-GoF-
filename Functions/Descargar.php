<?php
require 'Controlador.php';

use Functions\Controlador;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tipo = $_POST['tipo'] ?? '';

    try {
        // Usar el controlador para generar el documento
        Controlador::crearDocumento($tipo);
    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }
}
?>
