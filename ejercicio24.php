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
    public function imprimirNombre(){
        echo "Hola soy ".$this->nombre;
    }
    public function mostrarEdad() {
        $this->edad = 20;
        return $this->edad;
        
    }
}


class trabajador extends persona{
    public $puesto; // propiedad nueva

    public function presentarseComoTrabajador(){
        echo "Hola soy ".$this->nombre." y soy un ".$this->puesto;
    }

}

/* $objAlumno=new persona();
$objAlumno->asignarNombre("Marcial");
$objAlumno->imprimirNombre();

$objAlumno2=new persona();
$objAlumno2->asignarNombre("Marixa");
$objAlumno2->imprimirNombre();

echo $objAlumno->nombre; */
$objTrabajador = new trabajador();
$objTrabajador->asignarNombre("Marcial");
$objTrabajador->puesto="programador";
$objTrabajador->presentarseComoTrabajador();