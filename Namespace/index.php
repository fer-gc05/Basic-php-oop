<?php

use carpeta1\Humano;
use carpeta2\Humano as Humano2;

require_once 'carpeta1/Humano.php';
require_once 'carpeta2/Humano.php';

$humano1 = new Humano();
echo $humano1->saludar();
echo PHP_EOL;

$humano2 = new Humano2();
echo $humano2->saludar();
echo PHP_EOL;
