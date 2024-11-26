<?php
namespace Functions;

require 'tipodocumento.php';
require 'word.php';
require 'excel.php';
require 'pdf.php';

class Controlador
{
    public static function crearDocumento($tipo)
    {
        $documento = null;

        // Seleccionar la subclase adecuada
        switch ($tipo) {
            case 'word':
                $documento = new Word();
                break;
            case 'excel':
                $documento = new Excel();
                break;
            case 'pdf':
                $documento = new Pdf();
                break;
            default:
                throw new \Exception('Tipo de documento no válido.');
        }

        // Generar el documento
        $documento->descargar();
    }
}
?>
