<?php
require_once 'Estudiante.php';

/**
 * Clase EstudiantePosgrado
 *
 * Esta clase hereda de la clase abstracta Estudiante y proporciona una implementación
 * específica para estudiantes de posgrado. Se diferencia por:
 * - Manejo de especializaciones académicas
 * - Seguimiento de tesis
 * - Sistema de calificación ponderada
 *
 * Características específicas de posgrado:
 * - Incluye información sobre la especialización del estudiante
 * - Mantiene registro del trabajo de tesis
 * - Implementa un sistema de cálculo de promedio ponderado
 */

class EstudiantePosgrado extends Estudiante
{
    /**
     * Propiedades específicas para estudiantes de posgrado
     *
     * @var string $especializacion Área de especialización del estudiante
     * @var string $tesis Título o descripción del trabajo de tesis
     */
    protected $especializacion;
    protected $tesis;

    /**
     * Constructor de la clase EstudiantePosgrado
     * Extiende el constructor padre y agrega los campos específicos de posgrado
     *
     * @param string $nombre Nombre del estudiante
     * @param string $apellido Apellido del estudiante
     * @param int $edad Edad del estudiante
     * @param array $notas Array de notas del estudiante
     * @param string $especializacion Área de especialización
     * @param string $tesis Información sobre la tesis
     */

    public function __construct($nombre, $apellido, $edad, $notas, $especializacion, $tesis)
    {
        parent::__construct($nombre, $apellido, $edad, $notas);
        $this->especializacion = $especializacion;
        $this->tesis = $tesis;
    }

    /**
     * Sobrescribe el método mostrarInformacion de la clase padre
     * Añade la información específica de posgrado al array base
     *
     * @return array Array asociativo con toda la información del estudiante de posgrado
     */

    public function mostrarInformacion()
    {
        return array_merge(parent::mostrarInformacion(),[
            'especializacion' => $this->especializacion,
            'tesis' => $this->tesis
        ]);
    }

    /**
     * Implementación del metodo abstracto calcularPromedio
     * Calcula el promedio ponderado de las notas del estudiante
     *
     * Sistema de ponderación:
     * - Primera nota: 30% del total (0.3)
     * - Segunda nota: 30% del total (0.3)
     * - Tercera nota: 40% del total (0.4)
     *
     * Ejemplo:
     * Para notas [90, 85, 95]:
     * (90 * 0.3) + (85 * 0.3) + (95 * 0.4) = 90.5
     *
     * @return float Promedio ponderado de las notas
     */

    public function calcularPromedio()
    {
        $ponderacion = [0.3, 0.3, 0.4];
        $totalNotas = 0;

        foreach ($this->notas as $index => $nota):
            if (isset($ponderacion[$index])):
                $totalNotas += $nota * $ponderacion[$index];
            endif;
        endforeach;

        return $totalNotas;
    }
}