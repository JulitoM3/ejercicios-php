<?php

// Funciones Pedazos de codigo 
//que cumplen una funcion (algoritmos)
function saludarPersona($nombre)
{
    echo "Hola " . $nombre;

}

$nombre = "Gabo";
$persona2 = "Danna";
//saludarPersona($nombre);
//saludarPersona($persona2);

//Retorno de valor

function suma($numero1, $numero2)
{
    $resultado = $numero1 + $numero2;

    return $resultado;
}

//$resultado = suma(1, 1);
//echo $resultado;

function calcular($numero1, $numero2, $operacion)
{
    if ($operacion == "suma") {
        $resultado = $numero1 + $numero2;
    }
    return $resultado;
}

$numero1 = 2;
$numero2 = 5;

echo calcular($numero1, $numero2, "suma");


