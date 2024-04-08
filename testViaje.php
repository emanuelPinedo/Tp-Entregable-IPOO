<?php
include 'ClaseViaje.php';
include 'ClasePasajero.php';
include 'ClaseResponsableV.php';

function ingresoPasajero(){
    $ingresa = trim(fgets(STDIN));
    return $ingresa;
}

$pasajeroColec = [];

$responsable = new ResponsableV('2325', '402', 'Benjamin', 'Zacariaz');

$viaje = new ViajeFeliz('777','Italia','20',$pasajeroColec,$responsable);

do{
    echo "\n Elija una opción: \n";
    echo "1- Agregar Pasajero\n";
    echo "2- Modificar Pasajero\n";
    echo "3- Información del viaje\n";
    echo "4- Modificar Empleado\n";
    echo "5- Salir\n";
    $opcion = ingresoPasajero();
    $salir = true;

    switch ($opcion){
        case 1:
            echo "Ingrese el nombre del Pasajero para agregar: ";
            $nombre = ingresoPasajero();
            echo "Ingrese el apellido del Pasajero para agregar: ";
            $apellido = ingresoPasajero();
            echo "Ingrese el DNI del Pasajero para agregar: ";
            $dni = ingresoPasajero();
            echo "Ingrese el número de telefono del Pasajero para agregar: ";
            $telefono = ingresoPasajero();
            $objDePasajero = new Pasajero($nombre, $apellido, $dni, $telefono);
            if ($viaje->agregarPasajero($objDePasajero)) {
                echo "Nuevo pasajero agregado.\n";
            } else {
                echo "El pasajero ya estaba cargado o la cantidad de pasajeros ha llegado a su máximo.\n";
            }
            break;

        case 2:
            echo "Ingrese el DNI del pasajero que quiere modificar: ";
            $documento = ingresoPasajero();
            echo "Ingrese el nombre a modificar: ";
            $nombre = ingresoPasajero();
            echo "Ingrese el apellido a modificar: ";
            $apellido = ingresoPasajero();
            echo "Ingrese el número de telefono a modificar: ";
            $telefono = ingresoPasajero();
            $cambio = $viaje->modificarPasajero($documento,$nombre,$apellido,$telefono);
            if ($cambio) {
                echo "Datos cambiados. \n";
            } else {
                echo "El pasajero ya existe\n";
            }
            break;

        case 3:
            echo $viaje;
            break;

        case 4:
            echo "Ingrese el número de Licencia del Empleado Responsable del viaje para modificar: ";
            $nroLicencia = ingresoPasajero();

        case 5:
            //Opción para salir.
            $salir = false;
            break;
    }
} while($salir);