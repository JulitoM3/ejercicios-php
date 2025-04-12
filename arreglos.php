<?php

//Indexados
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
/*
echo count($participantes);

//Agregar participantes
$participantes[] = 'Julio';
array_push(
    $participantes,
    'Laura'
);

//Eliminarlo
unset($participantes[1]);
print_r($participantes);
//var_dump($participantes);

*/

//asociativos

$carreras = [
    'ISC' => 'Ingenieria en Sistemas',
    'IGE' => 'Ingenieria en Gestion',
    'IME' => 'Ingenieria en Mecatronica'
];
echo "<br>";
echo $carreras['ISC'];
echo "<br>";
$carreras['IIN'] = 'Ingenieria Industrial';
//array_push($carreras, 'Ambiental');
print_r($carreras);
unset($carreras['IGE']);
echo "<br>";

print_r($carreras);

// multidimensionales

$participanteCarrera = [
    ['ISC' => $participantes]
];