<?php
namespace Functions;

class Word extends TipoDocumento
{
    public function crearDocumento()
    {
        // Configurar encabezados para archivo Word
        header("Content-Type: application/vnd.ms-word");
        header("Content-Disposition: attachment;filename=mi_documento.doc");
        header("Pragma: no-cache");
        header("Expires: 0");

        // Contenido del archivo Word
        echo "<html>";
        echo "<head><meta charset='UTF-8'></head>";
        echo "<body>";
        echo "<h1>¡Hola, este es un archivo Word generado con PHP!</h1>";
        echo "<p>Puedes personalizar este contenido con HTML básico.</p>";
        echo "</body>";
        echo "</html>";
    }
}
?>
