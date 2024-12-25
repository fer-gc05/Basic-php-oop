<?php

/**
 * Ejemplo de "Named Parameters" introducido en PHP 8.
 *
 * Esta funcionalidad permite llamar a funciones o métodos utilizando los nombres
 * de los parámetros, en lugar de basarse únicamente en su orden.
 * Esto mejora la legibilidad y facilita el trabajo con funciones que tienen múltiples
 * parámetros opcionales o con valores por defecto.
 */

class NamedParameters
{
    /**
     * Suma dos números enteros.
     *
     * @param int $a Primer número a sumar.
     * @param int $b Segundo número a sumar.
     * @return int La suma de $a y $b.
     */
    public function sumar(int $a, int $b): int
    {
        return $a + $b;
    }
}

// Crear una instancia de la clase
$calculator = new NamedParameters();

// Usar parámetros nombrados al llamar al método
$resultado = $calculator->sumar(a: 10, b: 20);

echo "El resultado de la suma es: $resultado\n"; // Salida: El resultado de la suma es: 30
