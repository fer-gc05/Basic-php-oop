<?php

/**
 * Una interfaz (Interface) en PHP es un contrato o plantilla que define qué métodos
 * DEBE implementar una clase. Las interfaces son una parte fundamental de la POO que:
 *
 * Características principales:
 * - No pueden contener implementaciones de métodos, solo sus declaraciones
 * - No pueden tener propiedades (variables)
 * - Todos los métodos declarados deben ser públicos (public)
 * - Una clase puede implementar múltiples interfaces
 * - Se utiliza la palabra clave 'implements' para que una clase use una interfaz
 *
 * Usos comunes:
 * 1. Estandarización: Asegura que ciertas clases implementen métodos específicos
 * 2. Polimorfismo: Permite tratar diferentes objetos de manera uniforme
 * 3. Contratos: Define un "contrato" que las clases deben cumplir
 *
 * Ejemplo de uso:
 * class MiClase implements ITemplate {
 *     public function mostrarInformacion(): string {
 *         return "Información de la clase";
 *     }
 * }
 */
interface ITemplate
{
    /**
     * Metodo que debe ser implementado por las clases que usen esta interfaz
     * El metodo debe retornar un string con la información a mostrar
     *
     * @return string Información formateada para mostrar
     */
    public function mostrarInformacion(): string;
}

/**
 * Ejemplo de implementación de múltiples interfaces en PHP.
 *
 * En este ejemplo, se implementan dos interfaces: IPersistible y ITemplate.
 * - La interfaz IPersistible define los métodos para la persistencia de datos: `guardar()` para almacenar los datos y `cargar()` para recuperar los datos.
 * - La interfaz ITemplate define un método `mostrarInformacion()` para mostrar un contenido, que podría ser usado por cualquier clase que implemente esta interfaz.
 *
 * La clase `DocumentoWeb` implementa ambas interfaces, lo que le permite:
 * 1. Proporcionar funcionalidad para guardar y cargar datos (según la interfaz IPersistible).
 * 2. Definir cómo se muestra la información del documento (según la interfaz ITemplate).
 *
 * Al implementar múltiples interfaces, una clase puede combinar diversas funcionalidades en una sola estructura, lo que favorece la reutilización y la organización del código.
 *
 * Ejemplo de implementación:
 *
 * interface IPersistible {
 *     public function guardar(): bool;  // Guarda el estado del objeto, retornando true si la operación fue exitosa.
 *     public function cargar(): bool;   // Carga el estado del objeto, retornando true si la operación fue exitosa.
 * }
 *
 * interface ITemplate {
 *     public function mostrarInformacion(): string;  // Muestra la información o contenido del objeto.
 * }
 *
 * class DocumentoWeb implements ITemplate, IPersistible {
 *     public function mostrarInformacion(): string {
 *         return "Contenido del documento";  // Implementación del método mostrarInformacion().
 *     }
 *
 *     public function guardar(): bool {
 *         // Implementación del método guardar(), lógica para almacenar el documento.
 *         return true;  // Retorna true si la operación de guardar fue exitosa.
 *     }
 *
 *     public function cargar(): bool {
 *         // Implementación del método cargar(), lógica para cargar el documento.
 *         return true;  // Retorna true si la operación de carga fue exitosa.
 *     }
 * }
 */
