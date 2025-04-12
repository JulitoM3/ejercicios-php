<?php

class Persona
{
    private $nombre;

    private $edad;

    public function __construct()
    {

    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getEdad()
    {
        return $this->edad;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function setEdad($edad)
    {
        $this->edad = $edad;
    }


    /**
     * La clase persona saluda de esta manera
     * 
     */
    public function saludar()
    {
        echo "Hola mi nombre es $this->nombre y tengo $this->edad años";
    }

}

class Empleado extends Persona
{
    private $sueldo;

    /**
     * * TIP : Constructor
     */
    public function __construct($nombre, $edad, $sueldo)
    {
        parent::__construct($nombre, $edad); //Propiedades o metodos estaticos

    }


    // public function getSueldo()
    // {
    //     return $this->sueldo;
    // }

    // public function setSueldo($sueldo)
    // {
    //     $this->sueldo = $sueldo;
    // }

    /** SOBREESCRITURA DE METODOS  @override*/
    public function saludar()
    {
        echo "Hola mi nombre es " . $this->getNombre() . " tengo " . $this->getEdad() . "años y mi sueldo es " . $this->sueldo;
    }

}


class Alumno
{

}

$empleado = new Empleado();
$empleado->setNombre("Julio");
$empleado->setEdad(30);
$empleado->setSueldo(1000);
$empleado->mostrarInformacion();

