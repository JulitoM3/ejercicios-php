<?php

/**
 *   Para abrir explorador
 * EJECUTAR EN CONSOLA DE VSCODE
 *    php -S localhost:8000
 * */


/**
 *  Ejercicio 1
 *   Crear un string y contar el numero de
 *    caracteres
 */

// DRY - Dont Repeat Yourself
$nombre = "Julio";
$nombre2 = "Michel";
$nombre3 = "Danna";


echo $nombre;



/*
   Crear un arreglo indexado 
   y mostrar el primer elemento
* */
echo "<br>";
$nombres = [
    "Danna",
    "Santiago",
    "Marcos"
];

//PARA MOSTRAR ARREGLO EN EL NAVEGADOR
// PARA FINES DE DEBUG O INSPECCION
print_r($nombres);

//echo "<br>";
//echo $nombres[0];



/*
   Crear un arreglo asociativo 
   mostrar primer elemento, sobre escribirlo
   y agregar un ultimo elemento
* */
/*
$carreras = [
    "ISC" => "Ing. Sistemas",
    "IGE" => "Ing. Gestion",
    "IME" => "Ing. Mecatronica"
];

echo $carreras["ISC"];
echo "<br>";
$carreras["ISC"] = "Ingenieria en Sistemas Computacionales";
echo "<br>";
echo $carreras["ISC"];
$carreras["INN"] = "Ingenieria Industrial";
echo "<br>";
echo $carreras["IME"];
*/