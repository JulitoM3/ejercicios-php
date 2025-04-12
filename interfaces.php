<?php

/*

* Las interfaces son un contrato que una clase puede implementar.
* Una interfaz define un conjunto de métodos que una clase debe implementar,
* pero no proporciona la implementación de esos métodos.
* Las interfaces son útiles para definir un comportamiento común entre diferentes clases
 */

interface Notificacion
{
    public function enviar($mensaje);
    public function recibir();
}

class NotificacionCorreo implements Notificacion
{

    public function enviar($mensaje)
    {
        echo "Enviando correo: $mensaje";
    }

    public function recibir()
    {
        $destinatario = "Julio";
        echo "Recibiendo correo";
    }

}

class NotificacionMensaje implements Notificacion
{

    public function enviar($mensaje)
    {
        echo "Enviando mensaje por texto: $mensaje";
    }

    public function recibir()
    {
        echo "Recibiendo mensaje por texto";
    }

}

$notifacionCorreo = new NotificacionCorreo();
$notifacionCorreo->enviar("Hola, como estas?");
echo "<br>";

