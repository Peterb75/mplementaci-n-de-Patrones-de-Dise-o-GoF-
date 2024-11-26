<?php
namespace Functions;

abstract class TipoDocumento
{
    // Método abstracto que cada tipo de documento debe implementar
    abstract public function crearDocumento();

    // Método común para iniciar la descarga
    public function descargar()
    {
        $this->crearDocumento();
    }
}
?>
