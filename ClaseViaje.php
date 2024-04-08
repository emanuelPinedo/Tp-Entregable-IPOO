<?php
class ViajeFeliz{
    private $codigo;
    private $destino;
    private $cantPasajeros;
    private $objPasajeros;
    private $objResponsableV;

    //metodo constructor
    public function __construct($codigo,$destino,$cantPasajeros,$objPasajeros,$objResponsableV) {
        $this->codigo = $codigo;
        $this->destino = $destino;
        $this->cantPasajeros = $cantPasajeros;
        $this->objPasajeros = $objPasajeros;
        $this->objResponsableV = $objResponsableV;
    }

    //metodo de acceso (gets)
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

    //metodo de modificacion (sets)
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

    public function modificarPasajero($dniPasajero, $nombreNuevo, $apellidoNuevo, $celularNuevo) {
        $pasajGuardado = $this->getPasajeros(); //guarda el arreglo pasajeros
        $cambiar = false;//Si no permite cambiar los datos del pasajero retornará false.
        foreach ($pasajGuardado as $pasajero){
            if ($pasajero->getDni() === $dniPasajero){
                $pasajero->setNombre($nombreNuevo);
                $pasajero->setApellido($apellidoNuevo);
                $pasajero->setTelefono($celularNuevo);
                $cambiar = true;//Si entra el if, permitió cambiar los datos, retornará true.
            }
        }
        return $cambiar;
    }

    public function agregarPasajero($nuevoPasajero){
        $arrayPasajeros = $this->getPasajeros();
        $pasajExistente = false;
        //Foreach para verificar si el pasajero agregado existe o no.
        foreach ($arrayPasajeros as $pasajeroExiste){
            if($pasajeroExiste === $nuevoPasajero){
                $pasajExistente = true;
                break;
            }
        }

        $permiteAgregarPasaj = false;
        //Booleano para ver si se puede agregar el pasajero dependiendo de la cantidad de pasajeros.
        $contadorPasajeros = count($this->getPasajeros());
        //Contamos los pasajeros para ver si supera o no la cantidad máxima.
        if($contadorPasajeros < $this->getCantPasajeros() && !$pasajExistente){
            $arrayPasajeros[] = $nuevoPasajero;
            $this->setPasajeros($arrayPasajeros);
            $permiteAgregarPasaj = true;
        }
        return $permiteAgregarPasaj;
    }

    //(Para mi) VERIFICAR QUE ESTE BIEN ESTA FUNCIÓN.
    public function mostrarPasajeros(){
        $pasajeroElegido = "";
        $arrayPasajeros = $this->getPasajeros();
        foreach ($arrayPasajeros as $pasajeroo){
            $pasajeroElegido .= $pasajeroo ."\n"; //.= concatena una cadena a otra.
        }
        return $pasajeroElegido;
    }

    public function modificarEmpleado($numeroLicencia, $nombreNuevoEmpleado, $apellidoNuevoEmpleado, $numeroNuevoEmpleado) {
        $empleadoResponsable = $this->getResponsableV();
                $empleadoResponsable->setNombre($nombreNuevoEmpleado);
                $empleadoResponsable->setApellido($apellidoNuevoEmpleado);
                $empleadoResponsable->setNroEmpleado($numeroNuevoEmpleado);
    }

    //metodo transformador
    public function __toString() {
        return "Código de viaje: " . $this->getCodigo() . 
        "\nDestino: " . $this->getDestino() . 
        "\nCantidad máxima de pasajeros: " . $this->getCantPasajeros() . 
        "\nPasajeros del viaje: " . $this->mostrarPasajeros() . 
        "\nResponsable del viaje: " . $this->getResponsableV();
    }

}