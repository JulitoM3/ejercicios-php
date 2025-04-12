<?php

class Persona
{
    public $nombre = null;
    public $edad = null;
    public $carrera = null;
    // Constructores 
    public function __construct($nombre, $edad, $carrera)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->carrera = $carrera;
    }

    public function hablar()
    {
        echo "hola!";
    }

}

$julio = new Persona('Julio', 30, 'ISC');
$orquidea = new Persona('Orquidea', 30, 'ISC');
$brandon = new Persona('Brandon', 20, 'ISC');
$itzel = new Persona("Itzel", 26, "ISC");

echo $julio->nombre;
echo "<br>";
echo $orquidea->nombre;
echo "<br>";
echo $brandon->nombre;
echo "<br>";

