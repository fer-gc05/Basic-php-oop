<?php

require_once 'Metodosestaticos.php';

class heredero extends MetodosEstaticos
{
    public function saludo()
    {
        // Se puede acceder a las propiedades y métodos estáticos de la clase padre utilizando `parent`.
        return 'Hola, el mensaje que viene de la clase padre es: ' .parent::$propiedadEstatica;

    }
}

$heredero = new heredero();

echo $heredero->saludo(); // Salida: Hola, el mensaje que viene de la clase padre es: Hola Mundo

