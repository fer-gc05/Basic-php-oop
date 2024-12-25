<?php

class Auto
{
    protected string $marca;
    protected string $modelo;
    protected int $anio;

    public function __construct($modelo, $marca, $anio)
    {
        $this->modelo = $modelo;
        $this->marca = $marca;
        $this->anio = $anio;
    }

    public function getModelo(): string
    {
        return ucwords($this->modelo);
    }

    public function setModelo(string $modelo): void
    {
        $this->modelo = $modelo;
    }

    public function getMarca(): string
    {
        return ucwords($this->marca);
    }

    public function setMarca(string $marca): void
    {
        $this->marca = $marca;
    }

    public function getAnio(): int
    {
        return $this->anio;
    }

    public function setAnio(int $anio): void
    {
        $this->anio = $anio;
    }

    public function mostrarInformacion(): string
    {
        return "Auto {$this->getMarca()} {$this->getModelo()} del año {$this->getAnio()}";
    }
}