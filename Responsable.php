<?php

class Responsable extends Persona{
    
    private $numeroEmpleado;
    private $numeroLicencia;

    public function __construct($nombre,$apellido,$numeroEmpleadoInput, $numeroLicenciaInput) {
        parent::__construct($nombre, $apellido);
        $this->numeroEmpleado = $numeroEmpleadoInput;
        $this->numeroLicencia = $numeroLicenciaInput;
    }
    public function getNumeroEmpleado() {
        return $this->numeroEmpleado;
    }
    public function setNumeroEmpleado($numeroEmpleado) {
        $this->numeroEmpleado = $numeroEmpleado;
    }
    public function getNumeroLicencia() {
        return $this->numeroLicencia;
    }
    public function setNumeroLicencia($numeroLicencia) {
        $this->numeroLicencia = $numeroLicencia;
    }
    public function __toString()
    {
        return "Número Empleado : {$this->getNumeroEmpleado()}
                Número Licencia : {$this->getNumeroLicencia()}
                Nombre : {$this->getNombre()}
                Apellido : {$this->getApellido()}";
    }

}