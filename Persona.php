<?php
/**
 * La Programación Orientada a Objetos (POO) es un paradigma de programación que organiza el código
 * en objetos que contienen datos y código. Los objetos son instancias de clases, que actúan como
 * plantillas o moldes para crear objetos con características y comportamientos similares.
 *
 * Conceptos principales de POO demostrados en este código:
 *
 * 1. CLASES Y OBJETOS:
 * - Una clase es una plantilla para crear objetos (como esta clase Persona)
 * - Los objetos son instancias de una clase con sus propios datos
 *
 * 2. ENCAPSULAMIENTO:
 * - Los atributos (variables) están declarados como public, aunque para mejor encapsulamiento
 *   deberían ser private o protected
 * - Se utilizan métodos getter y setter para acceder y modificar los atributos
 * - Esto permite controlar el acceso a los datos y modificar la implementación sin afectar
 *   el código que usa la clase
 */

class Persona
{
    public string $nombre;
    public string $apellido;
    public int $edad;

    /**
     * Constructor de la clase
     * Inicializa los atributos básicos de una persona
     */
    public function __construct(string $nombre, string $apellido, int $edad)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }

    // Métodos getter y setter para implementar encapsulamiento
    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getApellido(): string
    {
        return $this->apellido;
    }

    public function getEdad(): int
    {
        return $this->edad;
    }

    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }

    public function setApellido(string $apellido): void
    {
        $this->apellido = $apellido;
    }

    public function setEdad(int $edad): void
    {
        $this->edad = $edad;
    }
}