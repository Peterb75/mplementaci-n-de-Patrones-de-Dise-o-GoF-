<?php
namespace Functions;

require 'fpdf/fpdf.php'; // Asegúrate de que la ruta sea correcta

class Pdf extends TipoDocumento
{
    public function crearDocumento()
    {
        // Crear PDF
        $pdf = new \FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 16);

        // Añadir contenido al PDF
        $pdf->Cell(0, 10, '¡Hola, mundo! Este es un PDF generado con PHP.', 0, 1, 'C');
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(0, 10, 'Generado utilizando FPDF.', 0, 1, 'L');

        // Descargar PDF
        $pdf->Output('D', 'mi_archivo.pdf'); // 'D' para descarga directa
    }
}
?>
