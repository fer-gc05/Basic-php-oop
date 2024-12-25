<?php

/**
 * Clase Abstracta Estudiante
 *
 * Una clase abstracta es una clase que no puede ser instanciada directamente y está diseñada
 * para ser heredada por otras clases. Sirve como una plantilla base que define la estructura
 * común y comportamiento que compartirán sus clases hijas.
 *
 * Características de una clase abstracta:
 * - No se puede crear objetos directamente de ella (new Estudiante() no está permitido)
 * - Puede contener métodos abstractos y métodos concretos (con implementación)
 * - Puede contener propiedades y un constructor
 * - Las clases hijas DEBEN implementar todos los métodos abstractos
 *
 * En este caso, la clase abstracta Estudiante:
 * 1. Define la estructura básica de un estudiante (propiedades)
 * 2. Proporciona funcionalidad común (mostrarInformacion)
 * 3. Define un contrato (calcularPromedio) que las clases hijas deben implementar
 */
abstract class Estudiante
{
    /**
     * Propiedades protegidas que estarán disponibles para las clases hijas
     * Se usa protected en lugar de private para permitir el acceso desde las clases heredadas
     */

    protected $nombre;
    protected $apellido;
    protected $edad;
    protected $notas = [];

    /**
     * Constructor de la clase abstracta
     * Inicializa las propiedades básicas de un estudiante
     *
     * @param string $nombre Nombre del estudiante
     * @param string $apellido Apellido del estudiante
     * @param int $edad Edad del estudiante
     * @param array $notas Array de notas del estudiante
     */
    public function __construct($nombre, $apellido, $edad, $notas)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
        $this->notas = $notas;
    }

    /**
     * Metodo concreto (implementado) que muestra la información del estudiante
     * Este método está disponible para todas las clases hijas sin necesidad de reimplementarlo
     *
     * @return array Array asociativo con la información del estudiante
     */
    public function mostrarInformacion()
    {
        return [
            'nombre' => $this->nombre,
            'apellido' => $this->apellido,
            'edad' => $this->edad,
            'notas' => $this->notas
        ];
    }

    /**
     * Metodo abstracto para calcular el promedio
     * Cada clase hija DEBE implementar este método con su propia lógica
     *
     * Este metodo es abstracto porque:
     * - Diferentes tipos de estudiantes pueden tener diferentes formas de calcular su promedio
     * - No tiene implementación en la clase abstracta
     * - Fuerza a las clases hijas a proporcionar su propia implementación
     *
     * @return mixed Promedio calculado según la implementación de la clase hija
     */
    abstract public function calcularPromedio();
}

