<?php

/*
 * En PHP los traits son:
 *
 * - Una característica introducida en PHP 5.4 que permite reutilizar código en múltiples clases.
 * - Su propósito principal es resolver la limitación de la herencia simple en PHP, donde una clase solo puede heredar de una única clase base.
 * - Los traits permiten compartir métodos y propiedades entre diferentes clases que no tienen relación directa, es decir, sin necesidad de que exista una jerarquía de herencia entre ellas.
 *
 * Principales características de los traits:
 * - Se definen usando la palabra clave `trait` en lugar de `class`.
 * - Dentro de un trait, se pueden definir métodos y propiedades como en una clase normal.
 * - Las clases que utilizan un trait lo hacen con la palabra clave `use`, integrando automáticamente los métodos y propiedades del trait en la clase.
 * - Un trait no puede ser instanciado directamente. Solo puede ser utilizado por clases.
 *
 * Ventajas del uso de traits:
 * - Facilitan la reutilización de código sin duplicación, especialmente en casos donde las clases no tienen un ancestro común.
 * - Ayudan a evitar combinaciones complejas de herencia múltiple, que no es soportada en PHP.
 * - Ofrecen flexibilidad para añadir funcionalidad común sin modificar las clases existentes.
 *
 * Resolución de conflictos:
 * - Si dos traits utilizados en una misma clase tienen métodos con el mismo nombre, PHP permite resolver el conflicto usando alias o eliminando métodos específicos.
 * - Esto se logra mediante operadores como `insteadof` y la palabra clave `as`.
 *
 * Limitaciones de los traits:
 * - Aunque pueden incluir métodos y propiedades, no pueden tener constructores.
 * - No pueden ser utilizados para definir la jerarquía de una clase, ya que no son una alternativa a la herencia, sino un complemento.
 *
 * Ejemplo básico:
 *
 * trait MiTrait {
 *     public function metodoComun() {
 *         echo "Este es un método compartido por varias clases.";
 *     }
 * }
 *
 * class ClaseA {
 *     use MiTrait;
 * }
 *
 * class ClaseB {
 *     use MiTrait;
 * }
 *
 * $objA = new ClaseA();
 * $objA->metodoComun(); // Salida: Este es un método compartido por varias clases.
 *
 * $objB = new ClaseB();
 * $objB->metodoComun(); // Salida: Este es un método compartido por varias clases.
 *
 * En resumen:
 * Los traits son una herramienta poderosa para estructurar mejor el código,
 * promoviendo la reutilización y evitando la redundancia, al tiempo que ofrecen una solución elegante
 * para compartir funcionalidades comunes entre clases independientes.
 */


trait LoggerTrait
{
    /**
     * Registra un mensaje.
     *
     * @param string $message El mensaje que se registrará.
     */

    public function log(string $message)
    {
        echo "[LOG]: " . $message . PHP_EOL;
    }
}
