<?php

class Persona
{

    private $id;
    protected $nombre = null;
    private $edad = null;
    private $carrera = null;

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


echo $julio->nombre;
echo "<br>";


