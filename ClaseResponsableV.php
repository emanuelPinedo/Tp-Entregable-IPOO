<?php
class responsableV{
    private $nroEmpleado;
    private $nroLicencia;
    private $nombre;
    private $apellido;

    public function __construct($nroEmpleado,$nroLicencia,$nombre,$apellido) {
        $this->nroEmpleado = $nroEmpleado;
        $this->nroLicencia = $nroLicencia;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    public function getNroEmpleado(){
        return $this->nroEmpleado;
    }

    public function getNroLicencia(){
        return $this->nroLicencia;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function setNroEmpleado($numEmple){
        $this->nroLicencia = $numEmple;
    }

    public function setNroLicencia($numLic){
        $this->nroLicencia = $numLic;
    }

    public function setNombre($name){
        $this->nombre = $name;
    }

    public function setApellido($apell){
        $this->apellido = $apell;
    }

}