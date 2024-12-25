<?php

/**
 * Ejemplo del patrón de diseño Fluent Interface en PHP.
 *
 * Este patrón permite encadenar llamadas a métodos en una clase, facilitando la lectura
 * y escritura de código más conciso y fluido. Se logra retornando la instancia actual
 * de la clase (`$this`) en cada método.
 */

class Persona
{
    /** @var string Nombre de la persona */
    public string $nombre;

    /** @var string Apellido de la persona */
    public string $apellido;

    /**
     * Establece el nombre de la persona.
     *
     * @param string $nombre El nombre a asignar.
     * @return self Retorna la instancia actual para encadenar métodos.
     */
    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;
        return $this;
    }

    /**
     * Establece el apellido de la persona.
     *
     * @param string $apellido El apellido a asignar.
     * @return self Retorna la instancia actual para encadenar métodos.
     */
    public function setApellido(string $apellido): self
    {
        $this->apellido = $apellido;
        return $this;
    }

    /**
     * Muestra la información de la persona.
     *
     * @return void
     */
    public function getInfo(): void
    {
        echo "Nombre: $this->nombre, Apellido: $this->apellido";
    }
}

// Ejemplo de uso del patrón Fluent Interface.
$persona = new Persona();

$persona->setNombre('Juan')
    ->setApellido('Perez')
    ->getInfo();
// Salida: Nombre: Juan, Apellido: Perez