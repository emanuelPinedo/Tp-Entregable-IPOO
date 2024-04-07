<?php
class Pasajero{
    private $nombre;
    private $apellido;
    private $dni;
    private $telefono;

    public function __construct($nombre,$apellido,$dni,$telefono){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->dni = $dni;
        $this->telefono = $telefono;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function getDni(){
        return $this->dni;
    }

    public function setNombre($name){
        $this->nombre = $name;
    }

    public function setApellido($apell){
        $this->apellido = $apell;
    }

    public function setDni($documento){
        $this->dni = $documento;
    }

    public function getTelefono(){
        return $this->telefono;
    }

    public function setTelefono($celular){
        $this->telefono = $celular;
    }

    public function __toString() {
        return "Nombre Pasajero: " . $this->getNombre() . 
        "\nApellido: " . $this->getApellido() . 
        "\nNúmero de Documento: " . $this->getDni() . 
        "\nTelefono: " . $this->getTelefono();
    }


}
