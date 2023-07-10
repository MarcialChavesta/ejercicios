<?php
class persona
{
    public $nombre; // propiedades
    private $edad;
    protected $altura;
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


class trabajador extends persona
{
    public $puesto; // propiedad nueva

    public function presentarseComoTrabajador()
    {
        echo "Hola soy " . $this->nombre . " y soy un " . $this->puesto;
    }
}


$objTrabajador = new trabajador(); // instancia o creación de un objeto
$objTrabajador->asignarNombre("Marcial"); // llamando un método
$objTrabajador->puesto = "programador";
$objTrabajador->presentarseComoTrabajador();
