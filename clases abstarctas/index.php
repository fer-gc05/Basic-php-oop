<?php

require_once 'EstudianteIngenieria.php';
require_once 'EstudiantePosgrado.php';

$estudianteIngenieria = new EstudianteIngenieria('Juan', 'Perez', 25, [9, 10, 10, 10], 'Ingenieria en Sistemas', ['Matematica', 'Fisica', 'Programacion']);
$estudiantePosgrado = new EstudiantePosgrado('Maria', 'Gomez', 30, [10, 9, 10], 'Inteligencia Artificial', 'Desarrollo de un algoritmo de IA');

echo PHP_EOL;
echo 'Estudiante de Ingenieria: ' . PHP_EOL;
echo 'Nombre: ' . $estudianteIngenieria->mostrarInformacion()['nombre'] . PHP_EOL;
echo 'Apellido: ' . $estudianteIngenieria->mostrarInformacion()['apellido'] . PHP_EOL;
echo 'Edad: ' . $estudianteIngenieria->mostrarInformacion()['edad'] . PHP_EOL;
echo 'Carrera: ' . $estudianteIngenieria->mostrarInformacion()['carrera'] . PHP_EOL;
echo 'Materias: ' . implode(', ', $estudianteIngenieria->mostrarInformacion()['materias']) . PHP_EOL;
echo 'Promedio: ' . $estudianteIngenieria->calcularPromedio() . PHP_EOL;

echo PHP_EOL;
echo 'Estudiante de Posgrado: ' . PHP_EOL;
echo 'Nombre: ' . $estudiantePosgrado->mostrarInformacion()['nombre'] . PHP_EOL;
echo 'Apellido: ' . $estudiantePosgrado->mostrarInformacion()['apellido'] . PHP_EOL;
echo 'Edad: ' . $estudiantePosgrado->mostrarInformacion()['edad'] . PHP_EOL;
echo 'Especializacion: ' . $estudiantePosgrado->mostrarInformacion()['especializacion'] . PHP_EOL;
echo 'Tesis: ' . $estudiantePosgrado->mostrarInformacion()['tesis'] . PHP_EOL;
echo 'Promedio: ' . $estudiantePosgrado->calcularPromedio() . PHP_EOL;
echo PHP_EOL;