<?php 

class Pasajero extends Persona{

    private $numeroDocumento;
    private $telefono;
    private $nroAsiento;
    private $nroTicket;

    public function __construct($nombre, $apellido, $numeroDocumentoInput, $telefonoInput,$nroAsiento,$nroTicket) {
        parent::__construct($nombre, $apellido);
        $this->numeroDocumento = $numeroDocumentoInput;
        $this->telefono = $telefonoInput;
        $this->nroTicket = $nroTicket;
        $this->nroAsiento = $nroAsiento;
    }
    public function getNumeroDocumento() {
        return $this->numeroDocumento;
    }
    public function setNumeroDocumento($numeroDocumento) {
        $this->numeroDocumento = $numeroDocumento;
    }
    public function getTelefono() {
        return $this->telefono;
    }
    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }
    public function getNroAsiento() {
		return $this->nroAsiento;
	}
	public function setNroAsiento($value) {
		$this->nroAsiento = $value;
	}
	public function getNroTicket() {
		return $this->nroTicket;
	}
	public function setNroTicket($value) {
		$this->nroTicket = $value;
	}
    public function darPorcentajeIncremento(){
        return 10;
    }
    public function __toString()
    { 
        $texto = parent::__toString();
        $texto .= "Número de documento : {$this->getNumeroDocumento()}"."\n";
        $texto .= "Telefono : {$this->getTelefono()}"."\n";
        $texto .= "Número de asiento : {$this->getNroAsiento()}"."\n";
        return $texto ;
    }
}