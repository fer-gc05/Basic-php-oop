<?php

/**
 * Ejemplo de implementación de autoload en PHP con namespaces
 *
 * Este script demuestra la implementación básica de un sistema de autoload
 * para cargar clases automáticamente usando namespaces.
 *
 */

use models\Course;
use controller\CourseController;

/**
 * Registro de la función de autoload
 *
 * Esta función se ejecutará automáticamente cuando PHP intente usar una clase
 * que aún no ha sido definida. Convierte el namespace y nombre de la clase
 * en una ruta de archivo y lo incluye si existe.
 *
 * @param string $clase Nombre completo de la clase incluyendo namespace
 * @throws Exception Si el archivo de la clase no existe
 * @return void
 */
spl_autoload_register(function($clase) {
    // Convertimos los separadores de namespace (\) en separadores de directorio (/)
    $rutaArchivo = str_replace("\\", "/", $clase) . ".php";

    // Verificamos si el archivo existe antes de incluirlo
    if(file_exists($rutaArchivo)) {
        require_once $rutaArchivo;
    } else {
        throw new Exception("No se pudo cargar la clase: {$clase}");
    }
});

/**
 * Creación de una instancia de Course
 *
 * Este es un ejemplo de uso que demuestra cómo el autoloader
 * cargará automáticamente la clase Course desde el directorio models
 *
 * @var Course $curso Instancia de la clase Course
 */
$curso = new Course();