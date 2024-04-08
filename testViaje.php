<?php
include 'ClaseViaje.php';
include 'ClasePasajero.php';
include 'ClaseResponsableV.php';

function ingresoDatos(){
    $ingresa = trim(fgets(STDIN));
    return $ingresa;
}

$pasajeroColec = [];

$responsable = new ResponsableV('2325', '402', 'Tito', 'Calderon');

$viaje = new ViajeFeliz('777','Italia','20',$pasajeroColec,$responsable);

do{
    echo "\n Elija una opción: \n";
    echo "1- Agregar Pasajero\n";
    echo "2- Modificar Pasajero\n";
    echo "3- Información del viaje\n";
    echo "4- Modificar Empleado\n";
    echo "5- Salir\n";
    $opcion = ingresoDatos();
    $salir = true;

    switch ($opcion){
        case 1:
            echo "\nIngrese el nombre del Pasajero para agregar: \n";
            $nombre = ingresoDatos();
            //
            echo "Ingrese el apellido del Pasajero para agregar: \n";
            $apellido = ingresoDatos();
            //
            echo "Ingrese el DNI del Pasajero para agregar: \n";
            $dni = ingresoDatos();
            //
            echo "Ingrese el número de telefono del Pasajero para agregar: \n";
            $telefono = ingresoDatos();
            //
            $objDePasajero = new Pasajero($nombre, $apellido, $dni, $telefono);
            if ($viaje->agregarPasajero($objDePasajero)) {
                echo "Nuevo pasajero agregado.\n";
            } else {
                echo "El pasajero ya estaba cargado o la cantidad de pasajeros ha llegado a su máximo.\n";
            }
            break;

        case 2:
            echo "\nIngrese el DNI del pasajero que quiere modificar: \n";
            $documento = ingresoDatos();
            //
            echo "Ingrese el nombre a modificar: \n";
            $nombre = ingresoDatos();
            //
            echo "Ingrese el apellido a modificar: \n";
            $apellido = ingresoDatos();
            //
            echo "Ingrese el número de telefono a modificar: \n";
            $telefono = ingresoDatos();
            //
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
            echo "\nIngrese el número de Licencia del Empleado Responsable del viaje para modificar: \n";
            $nroLicenciaIngresada = ingresoDatos();
            $licenciaEmpleado = $responsable->getNroLicencia();//Comparamos la licencia del empleado con la que ingresa el usuario.
            $licenciaEmpleado = trim($licenciaEmpleado);//Borra espacios en blanco (sino no funciona)
            if ($nroLicenciaIngresada === $licenciaEmpleado) {
                echo "Ingrese el número del empleado: \n";
                $nroEmpleado = ingresoDatos();
                $responsable->setNroEmpleado($nroEmpleado);
                //
                echo "Ingrese el nombre a modificar: \n";
                $nombreEmpleado = ingresoDatos();
                $responsable->setNombre($nombreEmpleado);
                //
                echo "Ingrese el apellido a modificar: \n";
                $apellidoEmpleado = ingresoDatos();
                $responsable->setApellido($apellidoEmpleado);
                //
            } else {
                echo "El número de licencia ingresado del empleado no existe.\n";
            }
            break;

        case 5:
            //Opción para salir.
            $salir = false;
            break;

        default:
        echo "Error, ha ingresado una opción no existente. Ingrese uno que exista. ";
        break;
    }
} while($salir);