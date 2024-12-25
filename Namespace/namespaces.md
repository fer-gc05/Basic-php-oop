# Namespaces en PHP: Guía Completa

## ¿Qué son los Namespaces?

Los namespaces son contenedores lógicos que permiten organizar y agrupar elementos relacionados del código (clases, interfaces, funciones y constantes) bajo un mismo espacio de nombres. Funcionan de manera similar a los directorios en un sistema de archivos, ayudando a evitar conflictos de nombres en proyectos grandes.

## Sintaxis Básica

### Declaración de Namespace
```php
namespace MiProyecto\Modulo;

class Usuario {
    public function obtenerNombre() {
        return "Juan Pérez";
    }
}
```

### Uso de Elementos de un Namespace
```php
// Método 1: Uso completo del namespace
$usuario = new MiProyecto\Modulo\Usuario();

// Método 2: Importación con use
use MiProyecto\Modulo\Usuario;
$usuario = new Usuario();

// Método 3: Alias
use MiProyecto\Modulo\Usuario as UserClass;
$usuario = new UserClass();
```

## Reglas y Buenas Prácticas

1. **Declaración del Namespace**
   - Debe ser la primera declaración en el archivo (excepto por `declare`)
   - Un archivo puede contener múltiples namespaces, pero no es recomendado
   - El nombre debe seguir el estándar PSR-4

2. **Estructura de Directorios**
```
proyecto/
├── src/
│   └── MiProyecto/
│       ├── Modulo/
│       │   ├── Usuario.php
│       │   └── Autenticacion.php
│       └── Core/
│           └── Database.php
└── index.php
```

3. **Importación de Múltiples Elementos**
```php
use MiProyecto\Modulo\{
    Usuario,
    Autenticacion,
    Permisos
};
```

## Características Avanzadas

### 1. Namespace Global
```php
// Acceder a una función del namespace global
\array_map(function($x) { return $x * 2; }, [1, 2, 3]);
```

### 2. Importación de Funciones y Constantes
```php
use function MiProyecto\Utilidades\calcular_total;
use const MiProyecto\Config\MAX_USUARIOS;
```

### 3. Resolución de Nombres
```php
namespace MiProyecto\Blog;

use MiProyecto\Modulo\Usuario;
use MiProyecto\Database\Connection;

class Articulo {
    private $autor;
    private $db;
    
    public function __construct() {
        $this->autor = new Usuario();      // Usa el namespace importado
        $this->db = new Connection();      // Usa el namespace importado
    }
}
```

## Ventajas Detalladas

1. **Organización del Código**
   - Estructura jerárquica clara
   - Mejor mantenibilidad
   - Facilita el trabajo en equipo

2. **Prevención de Conflictos**
   - Elimina colisiones de nombres entre diferentes partes del proyecto
   - Permite usar librerías de terceros sin preocupación

3. **Autoloading Eficiente**
   - Integración perfecta con PSR-4
   - Carga automática de clases basada en namespace

4. **Modularidad**
   - Facilita la creación de componentes reutilizables
   - Mejor encapsulación del código

## Consideraciones y Mejores Prácticas

1. **Nombrado de Namespaces**
   - Usar PascalCase para los nombres
   - Evitar nombres demasiado genéricos
   - Seguir la estructura del proyecto

2. **Organización de Archivos**
   - Un namespace por archivo
   - Nombres de archivo que coincidan con las clases
   - Estructura de directorios que refleje los namespaces

3. **Importaciones**
   - Agrupar imports relacionados
   - Usar aliases cuando sea necesario para mayor claridad
   - Evitar importaciones redundantes

## Ejemplos Prácticos

### Ejemplo 1: Sistema de Autenticación
```php
namespace MiProyecto\Auth;

class Autenticador {
    private $usuario;
    
    public function __construct(Usuario $usuario) {
        $this->usuario = $usuario;
    }
    
    public function verificarCredenciales(): bool {
        return true; // Lógica de verificación
    }
}
```

### Ejemplo 2: Uso de Servicios
```php
namespace MiProyecto\Servicios;

class EmailService {
    public function enviarEmail(string $destinatario, string $mensaje): bool {
        // Lógica de envío de email
        return true;
    }
}
```

## Solución de Problemas Comunes

1. **Error de Clase no Encontrada**
   - Verificar que el namespace coincida con la estructura de directorios
   - Comprobar que el autoloader esté correctamente configurado
   - Asegurarse de que los nombres de archivo sean correctos

2. **Conflictos de Nombres**
   - Usar aliases para resolver conflictos
   - Revisar las importaciones duplicadas
   - Verificar el uso correcto de namespaces anidados