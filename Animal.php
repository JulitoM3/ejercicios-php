<?php

class Animal
{


    private $nombre;
    protected $tipo;


    /*
        public function __construct($nombre, $tipo)
        {
            $this->nombre = $nombre;
            $this->tipo = $tipo;
        }
    */
    /** GETTER */
    public function getNombre()
    {
        return $this->nombre;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    /**SETTERS */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

}


$perro = new Animal();

$perro->setNombre("Perro");
$perro->setTipo("Mamifero");

echo $perro->getNombre();
echo "<br>";
echo $perro->getTipo();


