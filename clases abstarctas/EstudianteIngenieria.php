<?php
require_once 'Estudiante.php';

/**
 * Clase EstudianteIngenieria
 *
 * Esta clase hereda de la clase abstracta Estudiante y proporciona una implementación
 * específica para estudiantes de ingeniería. Demuestra cómo una clase hija:
 * - Extiende la funcionalidad de la clase padre
 * - Implementa métodos abstractos requeridos
 * - Agrega propiedades y comportamientos específicos
 *
 * Características específicas:
 * - Agrega información sobre la carrera
 * - Mantiene un registro de materias
 * - Implementa el cálculo de promedio específico para ingeniería
 */

class EstudianteIngenieria extends Estudiante
{
    /**
     * Propiedades adicionales específicas para estudiantes de ingeniería
     * @var string $carrera Nombre de la carrera de ingeniería
     * @var array $materias Lista de materias que cursa el estudiante
     */

    protected $carrera;
    protected $materias = [];

    /**
     * Constructor de la clase EstudianteIngenieria
     * Extiende el constructor del padre y agrega inicialización de propiedades específicas
     *
     * @param string $nombre Nombre del estudiante
     * @param string $apellido Apellido del estudiante
     * @param int $edad Edad del estudiante
     * @param array $notas Array de notas del estudiante
     * @param string $carrera Carrera específica de ingeniería
     * @param array $materias Lista de materias que cursa
     */

    public function __construct($nombre, $apellido, $edad, $notas, $carrera, $materias)
    {
        // Llama al constructor de la clase padre para inicializar las propiedades base
        parent::__construct($nombre, $apellido, $edad, $notas);
        // Inicializa las propiedades específicas de esta clase
        $this->carrera = $carrera;
        $this->materias = $materias;
    }

    /**
     * Sobrescribe el método mostrarInformacion de la clase padre
     * Combina la información base del estudiante con la información específica de ingeniería
     *
     * @return array Array asociativo con toda la información del estudiante de ingeniería
     */

    public function mostrarInformacion()
    {
        return array_merge(parent::mostrarInformacion(),[
            'carrera' => $this->carrera,
            'materias' => $this->materias
        ]);
    }

    /**
     * Implementación del método abstracto calcularPromedio
     * Calcula el promedio aritmético de las notas del estudiante
     *
     * Este método cumple con el contrato definido en la clase abstracta Estudiante
     * y proporciona una implementación específica para estudiantes de ingeniería
     *
     * @return float Promedio de las notas del estudiante
     */

    public function calcularPromedio()
    {
        $totalNotas = array_sum($this->notas);
        $cantidadNotas = count($this->notas);
        $promedio = $totalNotas / $cantidadNotas;
        return $promedio;
    }
}
