<?php

$nombre = "julio";
function saludar($nombre)
{
    $nombre = "Juan";
    echo 'Hola Mundo ' . $nombre;
}

saludar($nombre);

echo '<br>';
echo $nombre;


