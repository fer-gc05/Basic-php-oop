<?php
require_once 'Auto.php';

class AutoElectrico extends Auto
{
    protected float $nivelDeBateria;

    public function __construct($modelo, $marca, $anio, $nivelDeBateria)
    {
        parent::__construct($modelo, $marca, $anio);
        $this->nivelDeBateria = $nivelDeBateria;
    }

    public function getNivelDeBateria(): float
    {
        return $this->nivelDeBateria;
    }

    public function setNivelDeBateria(float $nivelDeBateria): void
    {
        $this->nivelDeBateria = $nivelDeBateria;
    }

    public function getAutonomia(): float
    {
        if ($this->nivelDeBateria >= 100) {
            return 100;
        } elseif ($this->nivelDeBateria >= 80) {
            return 75;
        } elseif ($this->nivelDeBateria >= 50) {
            return 45;
        } else {
            return 25;
        }
    }

    public function cargarBateria(float $cantidad): void
    {
        $this->nivelDeBateria += $cantidad;
        if ($this->nivelDeBateria > 100) {
            $this->nivelDeBateria = 100;
        }
    }

    public function mostrarInformacion(): string
    {
        return parent::mostrarInformacion() .
            " - Nivel de batería: {$this->nivelDeBateria}% " .
            "- Autonomía: {$this->getAutonomia()} km";
    }
}