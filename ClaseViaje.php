<?php
class ViajeFeliz{
    private $codigo;
    private $destino;
    private $cantPasajeros;
    private $objPasajeros;
    private $objResponsableV;

    public function __construct($codigo,$destino,$cantPasajeros,$objPasajeros,$objResponsableV) {
        $this->codigo = $codigo;
        $this->destino = $destino;
        $this->cantPasajeros = $cantPasajeros;
        $this->objPasajeros = $objPasajeros;
        $this->objResponsableV = $objResponsableV;
    }

    public function getCodigo(){
        return $this->codigo;
    }

    public function getDestino(){
        return $this->destino;
    }

    public function getCantPasajeros(){
        return $this->cantPasajeros;
    }

    public function getPasajeros(){
        return $this->objPasajeros;
    }

    public function getResponsableV(){
        return $this->objResponsableV;
    }

    public function setCodigo($codigo1){
        $this->codigo = $codigo1;
    }

    public function setDestino($destino1){
        $this->destino = $destino1;
    }

    public function setCantPasajeros($cantidadPasj){
        $this->cantPasajeros = $cantidadPasj;
    }

    public function setPasajeros($pasj){
        $this->objPasajeros = $pasj;
    }

    public function setResponsableV($responsable){
        $this->objResponsableV = $responsable;
    }

}