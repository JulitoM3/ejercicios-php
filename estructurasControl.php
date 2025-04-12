<?php

//Estructuras de control 
//Condicionales y Bucles

//IF else else if switch 
// match
/*
$tengoHambre = true;
function noTengoHambre()
{
    echo "No tengo hambre";
}

function tengoHambre()
{
    echo "tengo hambre";
}

if ($tengoHambre) {
    tengoHambre();
} else {
    noTengoHambre();
}

if (1 < 5) {
    echo "1 es menor que 5";
}
*/
/*
$calificacionProgramacion = 100;
echo "Calificacion es: $calificacionProgramacion";
echo "<br>";

if ($calificacionProgramacion == 100) {
    echo "Cerebrito";
} else if ($calificacionProgramacion < 70) {
    echo "reprobado";
} else if ($calificacionProgramacion >= 70) {
    echo "Aprobado";
}
echo "<br>";
*/
// ESTRUCTURA DE CONTROL SWITCH

$dia = "miercoles";
/*
switch ($dia) {
    case 'lunes':
        echo "Es Lunes";
        break;
    case 'miercoles':
        echo "Es miercoles";
        break;
    case 'sabado':
        echo "Es Sabado";
        break;
}
echo "<br>";
*/
//ESTRUCTURAS DE CONTROL

//WHILE -> Mientras
//ITERATOR -> ITERADOR
/*
 COMPARA PRIMERO y DESPUES EJECUTA
$i = 1;
while ($i <= 5) {
    echo "Numero $i ";
    echo "<br>";

    $i++;
}
*/

// EJECUTA PRIMERO DESPUES COMPARA
$i = 1;
/*do {
    echo "Numero $i";
    echo "<br>";
    $i++;

} while ($i <= 5);
*/
$participantes = [
    "Danna",
    "Alfredo",
    "Gabo",
    "Marcos",
    "Brandon",
    "Victor",
    "Alexis",
    "Raziel",
    "Fanny"
];
$numeroParticipantes = count($participantes);
echo "numero de participantes : " . $numeroParticipantes;
echo "<br>";

//FOR 
/*
for ($i = 1; $i < $numeroParticipantes; $i++) {
    echo $participantes[$i];
    echo "<br>";

}
*/
//FOREACH FOR EACH -> para cada uno 
$carreras = [
    'ISC' => 'Ingenieria en Sistemas',
    'IGE' => 'Ingenieria en Gestion',
    'IME' => 'Ingenieria en Mecatronica'
];

foreach ($carreras as $carrera) {
    echo "Carrera: " . $carrera;
    echo "<br>";

}







