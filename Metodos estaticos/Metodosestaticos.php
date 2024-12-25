<?php

/**
 * En PHP, es posible definir métodos y propiedades estáticas utilizando la palabra clave `static`.
 * Estas son accesibles directamente a través de la clase, sin necesidad de crear una instancia.
 * Se utilizan comúnmente para funcionalidades que no dependen de datos específicos de una instancia.
 */

class Metodosestaticos
{
    public static $propiedadEstatica = 'Hola Mundo';

    public static function metodoEstatico()
    {
        // Dentro de un método estático, no se puede acceder a las propiedades de instancia
        // ni a los métodos de instancia utilizando `$this`.
        // En su lugar, se debe utilizar `self` para acceder a las propiedades y métodos estáticos.
        return 'El mensaje es:' .self::$propiedadEstatica ;
    }
}

echo MetodosEstaticos::$propiedadEstatica; // Salida: Soy una propiedad estática

echo MetodosEstaticos::metodoEstatico(); // Salida: Soy un método estático