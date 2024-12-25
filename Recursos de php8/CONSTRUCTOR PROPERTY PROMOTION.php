<?php

/**
 * Ejemplo de la característica de "Promoción de Propiedades en el Constructor" introducida en PHP 8.
 *
 * Esta funcionalidad permite declarar y asignar propiedades directamente en la lista de parámetros
 * del constructor, reduciendo el código repetitivo y mejorando la legibilidad.
 */

class User
{
    /**
     * Constructor que utiliza la promoción de propiedades.
     *
     * @param string $name     El nombre del usuario.
     * @param string $email    El correo electrónico del usuario.
     * @param string $password La contraseña del usuario.
     */
    public function __construct(
        public string $name,
        public string $email,
        public string $password
    ) {}
}

// Crear una nueva instancia de la clase User
$user = new User('Juan Pérez', 'juan.perez@example.com', 'securePassword123');

// Acceder a las propiedades
echo "Nombre: {$user->name}\n";
echo "Email: {$user->email}\n";
