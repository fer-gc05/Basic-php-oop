<?php

/**
 * Para evitar que una clase pueda ser instanciada,
 * podemos marcarla como `abstract` si queremos que sirva como base para otras clases,
 * o usar la palabra clave `final` si queremos evitar tanto su instanciación como su extensión.
 */

final class finalclass
{
    // Para evitar que una función pueda ser sobreescrita por una subclase, podemos marcarla como `final`
    final public function saludar(): string
    {
        return "Hola, esta es una clase final";
    }
}