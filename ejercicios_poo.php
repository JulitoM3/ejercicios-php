<?php


/*
 * Ejercicio 1: Clase Básica y Encapsulación
 */

/*
 * Crea una clase llamada Libro que contenga las siguientes propiedades:
 * -Título (string)
 * -Autor (string)
 * -Número de páginas (entero)
 ***/



/*
 * Implementa:
 * Un constructor para inicializar las propiedades.
 * Métodos getters y setters para cada propiedad.
 * Un método mostrarInformacion() que imprima todos los detalles del libro.
 */

class Libro
{

    public function __construct(
        private $titulo,
        private $autor,
        private $numero_paginas
    ) {
    }

    /**
     * 
     */

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function getNumeroPaginas()
    {
        return $this->numero_paginas;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function setAutor($autor)
    {
        $this->autor = $autor;
    }
    public function setNumeroPaginas($numero_paginas)
    {
        $this->numero_paginas = $numero_paginas;
    }

    public function mostrarInformacion()
    {
        echo "Titulo: $this->titulo <br>";
        echo "Autor: $this->autor <br>";
        echo "Numero de Paginas: $this->numero_paginas <br>";
    }
}



/*
 * Ejercicio 2: Herencia y Polimorfismo    
 */

/*

* Crea una clase base llamada Animal que tenga:
* Una propiedad nombre.
* Un método hacerSonido() que imprima un mensaje genérico.
* Luego, crea dos clases hijas: Perro y Gato que hereden de Animal y 
* sobrescriban el método hacerSonido() para mostrar sonidos específicos 
* ("Guau" y "Miau", respectivamente). 

*/

class Animal
{

    public function __construct(
        private $nombre
    ) {
    }

    public function hacerSonido()
    {
        echo "Un sonido equis";
    }

}

class Perro extends Animal
{

    public function __construct($nombre)
    {
        parent::__construct($nombre);
    }

    public function hacerSonido()
    {
        echo "guau";

    }
}

class Gato extends Animal
{

    public function __construct($nombre)
    {
        parent::__construct($nombre);
    }

    public function hacerSonido()
    {
        echo "miau";
    }
}


/*
 * Ejercicio 3: Interfaces 
 */

/*

* Crea una interfaz llamada Empleado con un método calcularPago().
* Implementa esa interfaz en las clases EmpleadoTiempoCompleto y EmpleadoPorHora, con lógica distinta para el cálculo del pago.
* Crea un array con distintos empleados y muestra su pago usando un foreach. 

*/

interface Empleado
{
    public function calcularPago();
}

class EmpleadoTiempoCompleto implements Empleado
{

    public function __construct(
        private $nombre,
        private $sueldo
    ) {
    }

    public function calcularPago()
    {
        return "Es un empleado de tiempo completo $this->nombre y su sueldo es " . number_format($this->sueldo, 2);
    }


}

class EmpleadoPorHora implements Empleado
{

    public function __construct(
        private $nombre,
        private $horasTrabajadas,
        private $tarifaHora,
    ) {
    }

    public function calcularPago()
    {
        $pago = $this->horasTrabajadas * $this->tarifaHora;

        return "Empleado por hora : {$this->nombre} y gana $" . number_format($pago, 2);
    }
}

$empleados = [
    new EmpleadoTiempoCompleto("Julio", 1000),
    new EmpleadoPorHora("Michel", 20, 100),
    new EmpleadoPorHora("Julieta", 10, 100),
];

foreach ($empleados as $empleado) {
    echo $empleado->calcularPago();
    echo "<br>";
}



/*
 * Ejercicio 4: Clases Abstractas
 */
/*
* Crea una clase abstracta llama da Vehiculo que tenga:
* -Propiedades: marca, modelo y año.
* - Metodo abstracto: calcularVelocidadMaxima(),
* - Metodo concreto: mostrarDetalles() que imprima los detalles del vehículo.
* Luego, crea dos clases hijas: Coche y Moto que hereden de Vehiculo y
* implementen el método calcularVelocidadMaxima() con lógica específica para cada tipo de vehículo.
* usando Arrays crea varias instancias con diferentes modelos y muestra sus detalles y velocidad máxima 

*/

abstract class Vehiculo
{

    public function __construct(
        protected $marca,
        protected $modelo,
        protected $year
    ) {
    }



    //Metodo concreto
    public function mostrarDetalles()
    {
        return "Vehiculo: $this->marca $this->modelo $this->year";
    }

    //Metodo abstracto o comun funciona igual que una interfaz

    abstract public function calcularVelocidadMaxima();

}

class Automovil extends Vehiculo
{

    public function __construct(
        protected $marca,
        protected $modelo,
        protected $year,
        private $cilindros
    ) {

        parent::__construct($marca, $modelo, $year);

    }

    public function calcularVelocidadMaxima()
    {
        return 50 * $this->cilindros;
    }

}

class Motocicleta extends Vehiculo
{
    public function __construct(
        private $cilindros,
        protected $marca,
        protected $modelo,
        protected $year
    ) {
        parent::__construct($marca, $modelo, $year);
    }

    public function calcularVelocidadMaxima()
    {
        return $this->cilindros * 0.8;
    }
}

$vehiculos = [
    new Automovil("Aston Martin", "BDR", 2023, 8),
    new Motocicleta(4, "Ducati", "Monster", 2023),
    new Automovil("Mazda", "CX-5", 2023, 4),
];

$vehiculos[] = new Automovil("Ferrarri", "LaFerrari", 2023, 8);

foreach ($vehiculos as $vehiculo) {
    echo $vehiculo->mostrarDetalles();
    echo "<br>";
}