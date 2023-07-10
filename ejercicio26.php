<?php
class persona
{
    public $nombre; // propiedades
    private $edad;
    protected $altura;

    function __construct($nuevoNombre)
    {
        $this->nombre = $nuevoNombre;
    }

    public function asignarNombre($nuevoNombre)
    {
        $this->nombre = $nuevoNombre;
    }
    public function imprimirNombre()
    {
        echo "Hola soy " . $this->nombre;
    }
    public function mostrarEdad()
    {
        $this->edad = 20;
        return $this->edad;
    }
}

$objAlumno = new persona("Marcial");
//$objAlumno->asignarNombre("Marcial");
$objAlumno->imprimirNombre();
