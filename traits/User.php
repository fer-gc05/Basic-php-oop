<?php

require_once 'LoggerTrait.php';

/*
 * La clase User representa a un usuario en el sistema.
 * Utiliza el trait LoggerTrait para registrar acciones realizadas por el usuario.
 */

class User
{
    use LoggerTrait;

    /**
     * Nombre del usuario.
     *
     * @var string
     */

    private string $name;

    /**
     * Constructor de la clase User.
     *
     * @param string $name El nombre del usuario.
     */

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->log("Usuario '{$this->name}' creado.");
    }

    /**
     * Simula una acción realizada por el usuario.
     */

    public function performAction()
    {
        $this->log("El usuario '{$this->name}' realizó una acción.");
    }
}
