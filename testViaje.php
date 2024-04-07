<?php
include 'ClaseViaje.php';
include 'ClasePasajero.php';
include 'ClaseResponsableV.php';

$pasajero = new Pasajero ('Tito', 'Calderon', '23876234', '2997648097');

$responsable = new ResponsableV('2325', '236677', 'Benjamin', 'Zacariaz');

$viaje = new ViajeFeliz('777','Italia','20',$pasajero,$responsable);

do{
    echo "\n Elija una opción: \n";
    echo "1- Agregar Pasajero\n";
    echo "2- Modificar Pasajero\n";
    echo "3- Información del viaje\n";
    echo "4- Salir\n";
    $opcion = trim(fgets(STDIN));
    $salir = true;

    switch ($opcion){
        case 1:
            break;

        case 2:
            break;

        case 3:
            break;

        case 4:
            //Opción para salir.
            $salir = false;
            break;
    }
} while($salir);