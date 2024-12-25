<?php

require_once 'User.php';

/*
 * Ejemplo de uso del trait LoggerTrait en la clase User.
 *
 * Este script crea un usuario, registra su creación y simula una acción realizada por él.
 */

// Crear un usuario y registrar sus acciones

$user = new User("Juan Pérez");
$user->performAction();
