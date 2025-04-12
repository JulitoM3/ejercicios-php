<?php
class Auto
{
    //Atributos
    public $marca = null;
    //public $marca = "Audi";
    public $color = null;
    public $modelo = null;

    //Constructor(opcional)

    public function __construct(
        $marca,
        $color,
        $modelo
    ) {
        $this->marca = $marca;
        $this->color = $color;
        $this->modelo = $modelo;

    }

    //GETTERS -> GET -> obtener -> funciones
    public function getMarca()
    {
        return $this->marca;
    }

    //SETTERS -> SET -> Asignar -> funciones
    public function setMarca($marca)
    {
        $this->marca = $marca;
    }

    //Funciones o Comportamiento

    public function encender()
    {
        //Sin retorno
        echo "Encendidou";
    }

    public function apagar()
    {
        return "Apagado";
    }
}

$astonMartin = new Auto("Aston Martin", "Jade", 2020);
$astonMartin->encender();
echo "<br>";
echo $astonMartin->marca;
echo "<br>";
echo $astonMartin->color;
echo "<br>";
echo $astonMartin->apagar();
echo "<br>";
echo $astonMartin->getMarca();