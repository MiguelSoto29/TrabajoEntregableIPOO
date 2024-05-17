<?php 

class Persona{
	
    private $nombre;
    private $apellido;

	public function __construct($nombre, $apellido) {
		$this->nombre = $nombre;
		$this->apellido = $apellido;
	}

	public function getNombre() {
		return $this->nombre;
	}

	public function setNombre($value) {
		$this->nombre = $value;
	}

	public function getApellido() {
		return $this->apellido;
	}

	public function setApellido($value) {
		$this->apellido = $value;
	}
    public function __toString()
    {
        $texto = "Nombre : {$this->getNombre()}"."\n";
        $texto .= "Apellido : {$this->getApellido()}"."\n";
		return $texto;
    }
}