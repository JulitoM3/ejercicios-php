<?php

//Escalares o atomicos 

//String
#djslkjfslda

$nombre = "Julio";


// Entero
$edad = 30;

// Flotante o Double manejan puntos decimales

$dinero = 12.5;

//booleanos 

$tengo_hambre = true;
$tengoDinero = false;

/*
echo $nombre;
echo '<br>';
echo $edad;
*/

//String

$nombreCompleto = 'julio Guerrero';
$especialidad = "ISC";

echo strlen($nombreCompleto);
echo "<br>";
echo str_word_count($nombreCompleto);
echo "<br>";
echo strtoupper($nombreCompleto);
echo "<br>";
echo strtolower($nombreCompleto);
/*
$primerLetra = $nombreCompleto[1];
echo "<br>";
echo $primerLetra;
*/
echo "<br>";
$nombreCompleto = "Brandon Sanchez";
echo $nombreCompleto;

// PALABRAS RESERVADAS

const NAME = 'Danna';
echo "<br>";
echo NAME;

$NOMBRE = "Fabian";
$Apellido = "Barrios";

$nombre_completo = $NOMBRE . " " . $Apellido . "Concatenado";

#$nombre_completo = "concatenado: $NOMBRE $Apellido";
echo "<br>";
echo $nombre_completo;
echo "<br>";

$edad = 30;
$edadEsposa = 26;

$suma = $edad + $edadEsposa;
echo "<br>";
echo $suma;


echo $modulo;
?>