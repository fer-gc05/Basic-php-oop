<?php

/**
 * Interface IUserInterface
 *
 * Esta interfaz define un contrato para el manejo de usuarios en el sistema.
 * Establece los métodos obligatorios para acceder y modificar la información básica de un usuario.
 *
 * Métodos definidos:
 * - Getters: Para obtener nombre, apellido y edad
 * - Setters: Para establecer nombre, apellido y edad
 *
 * Beneficios de usar esta interfaz:
 * - Estandarización del manejo de datos de usuario
 * - Asegura que todas las clases que la implementen tengan los métodos necesarios
 * - Facilita el mantenimiento y la escalabilidad del código
 */
interface IUserInterface
{
    public function getNombre(): string;

    public function getApellido(): string;

    public function getEdad(): int;

    public function setNombre(string $nombre): void;

    public function setApellido(string $apellido): void;

    public function setEdad(int $edad): void;
}

