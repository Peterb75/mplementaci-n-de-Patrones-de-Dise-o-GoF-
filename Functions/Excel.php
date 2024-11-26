<?php
namespace Functions;

require_once __DIR__ . "/../vendor/autoload.php"; // Asegúrate de cargar Composer

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Excel extends TipoDocumento
{
    public function crearDocumento()
    {
        // Crear hoja de cálculo
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Agregar datos a la hoja
        $sheet->setCellValue('A1', 'Nombre');
        $sheet->setCellValue('B1', 'Edad');
        $sheet->setCellValue('A2', 'Juan Pérez');
        $sheet->setCellValue('B2', '30');
        $sheet->setCellValue('A3', 'Ana López');
        $sheet->setCellValue('B3', '25');

        // Encabezados para descargar Excel
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="mi_excel.xlsx"');
        header('Cache-Control: max-age=0');

        // Crear y enviar archivo
        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');
        exit;
    }
}
?>
