<?php

/*

* Las clases abstractas son clases que no se pueden instanciar directamente,
* pero pueden contener métodos abstractos (sin implementación) y métodos concretos (con implementación).
* Las clases abstractas son útiles cuando deseas proporcionar una implementación base 
*/

abstract class NotificacionBase
{
    protected $mensaje;
    protected $destinatario;

    public function __construct($mensaje, $destinatario)
    {
        $this->mensaje = $mensaje;
        $this->destinatario = $destinatario;
    }

    abstract function enviar($mensaje);

    public function log()
    {
        echo "<br> Se envio el mensaje correctamente";
    }

}

class NotificacionCorreo extends NotificacionBase
{

    public function enviar($mensaje)
    {
        echo "enviando correo: $mensaje a $this->destinatario";
        $this->log();
    }

}

class NotificacionMensaje extends NotificacionBase
{

    public function enviar($mensaje)
    {
        echo "Enviando mensaje de texto: $mensaje a $this->destinatario";
    }
}

$notificacionCorreo = new NotificacionCorreo("Hola desde la notificacion por correo", "juliocaramelo44@gmail.com");
$notificacionCorreo->enviar("Hola desde la notificacion por correo");
echo "<br>";