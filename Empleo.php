<?php
/**
 * La clase Empleo demuestra varios conceptos avanzados de POO:
 *
 * 1. HERENCIA:
 * - Empleo hereda de Persona (extends)
 * - Hereda todos los atributos y métodos de la clase padre
 * - Puede agregar sus propios atributos y métodos
 * - Utiliza parent::__construct() para llamar al constructor de la clase padre
 *
 * 2. REUTILIZACIÓN DE CÓDIGO:
 * - Al heredar de Persona, se reutilizan todos sus métodos y atributos
 * - No es necesario volver a escribir los getters y setters para nombre, apellido y edad
 * - Se pueden usar los métodos de la clase padre directamente
 *
 * 3. EXTENSIBILIDAD:
 * - La clase añade funcionalidad específica para empleados
 * - Implementa cálculo de salario con bonificaciones por experiencia
 * - Agrega metodo para obtener todos los datos del empleado en un array
 */

require_once 'Persona.php';
class Empleo extends Persona
{
    public string $puesto;
    public int $horasTrabajadas;
    public float $valorHora;
    public int $AniosExperiencia;

    /**
     * Constructor que extiende el constructor de Persona
     * Ejemplo de cómo la herencia permite reutilizar y extender funcionalidad
     */
    public function __construct($nombre, $apellido, $edad, $puesto, $horasTrabajadas, $valorHora, $AniosExperiencia)
    {
        parent::__construct($nombre, $apellido, $edad);
        $this->puesto = $puesto;
        $this->horasTrabajadas = $horasTrabajadas;
        $this->valorHora = $valorHora;
        $this->AniosExperiencia = $AniosExperiencia;
    }

    // Getters y setters específicos de la clase Empleo
    public function getPuesto(): string
    {
        return $this->puesto;
    }

    public function getHorasTrabajadas(): int
    {
        return $this->horasTrabajadas;
    }

    public function getValorHora(): float
    {
        return $this->valorHora;
    }

    public function getAniosExperiencia(): int
    {
        return $this->AniosExperiencia;
    }

    public function setPuesto(string $puesto): void
    {
        $this->puesto = $puesto;
    }

    public function setHorasTrabajadas(int $horasTrabajadas): void
    {
        $this->horasTrabajadas = $horasTrabajadas;
    }

    public function setValorHora(float $valorHora): void
    {
        $this->valorHora = $valorHora;
    }

    public function setAniosExperiencia(int $AniosExperiencia): void
    {
        $this->AniosExperiencia = $AniosExperiencia;
    }

    /**
     * Metodo que calcula el salario basado en las horas trabajadas y la experiencia
     * Demuestra cómo la POO permite encapsular lógica de negocio en métodos
     *
     * @return float Salario calculado con bonificaciones por experiencia
     */
    public function calcularSalario(): float
    {
        if ($this->AniosExperiencia >= 10):
            return $this->horasTrabajadas * ($this->valorHora * 1.10); // Bonificación del 10%
        elseif ($this->AniosExperiencia >= 5):
            return $this->horasTrabajadas * ($this->valorHora * 1.05); // Bonificación del 5%
        else:
            return $this->horasTrabajadas * $this->valorHora;
        endif;
    }

    /**
     * Metodo que retorna todos los datos del empleado en un array
     * Ejemplo de cómo la POO permite crear métodos que combinan múltiples datos
     * y funcionalidades en una sola operación
     *
     * @return array Datos completos del empleado incluyendo el salario calculado
     */
    public function obtenerEmpleado()
    {
        return [
            'nombre' => $this->nombre,
            'apellido' => $this->apellido,
            'edad' => $this->edad,
            'puesto' => $this->puesto,
            'horasTrabajadas' => $this->horasTrabajadas,
            'valorHora' => $this->valorHora,
            'AniosExperiencia' => $this->AniosExperiencia,
            'salario' => $this->calcularSalario()
        ];
    }
}