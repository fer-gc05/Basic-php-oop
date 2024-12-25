<?php
require_once 'IUserInterface.php';

/**
 * Class Users
 *
 * Esta clase implementa la interfaz IUserInterface y proporciona la funcionalidad
 * concreta para manejar la información de los usuarios.
 *
 * Características importantes:
 * - Implementa todos los métodos definidos en IUserInterface
 * - Utiliza encapsulamiento con propiedades protected
 * - Incluye un constructor para inicializar los datos
 * - Mejora los getters de nombre y apellido con formateo (ucwords)
 *
 * Detalles de implementación:
 * 1. Las propiedades son protected para permitir herencia pero mantener encapsulamiento
 * 2. Los getters de nombre y apellido aplican ucwords() para formatear el texto
 * 3. Todos los tipos de datos están estrictamente definidos (strict typing)
 */
class Users implements IUserInterface
{
    /**
     * Propiedades protegidas para almacenar la información del usuario
     */
    protected string $nombre;
    protected string $apellido;
    protected int $edad;

    /**
     * Constructor de la clase
     * Inicializa las propiedades básicas de un usuario
     *
     * @param string $nombre Nombre del usuario
     * @param string $apellido Apellido del usuario
     * @param int $edad Edad del usuario
     */
    public function __construct($nombre, $apellido, $edad)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }

    /**
     * Obtiene el nombre del usuario con la primera letra en mayúscula
     *
     * @return string Nombre formateado
     */
    public function getNombre(): string
    {
        return ucwords($this->nombre);
    }

    /**
     * Establece el nombre del usuario
     *
     * @param string $nombre Nuevo nombre
     */
    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }

    /**
     * Obtiene el apellido del usuario con la primera letra en mayúscula
     *
     * @return string Apellido formateado
     */
    public function getApellido(): string
    {
        return ucwords($this->apellido);
    }

    /**
     * Establece el apellido del usuario
     *
     * @param string $apellido Nuevo apellido
     */
    public function setApellido(string $apellido): void
    {
        $this->apellido = $apellido;
    }

    /**
     * Obtiene la edad del usuario
     *
     * @return int Edad del usuario
     */
    public function getEdad(): int
    {
        return $this->edad;
    }

    /**
     * Establece la edad del usuario
     *
     * @param int $edad Nueva edad
     */
    public function setEdad(int $edad): void
    {
        $this->edad = $edad;
    }
}