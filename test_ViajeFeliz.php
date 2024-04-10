<?php
    include "Viaje.php";
    include "ResponsableV.php";
    include_once "Pasajero.php";
     
    function coleccionPasajero(){
        $colePasajero=[];
        $colePasajero=[["luis", "lopez", 1234567, 777777],
                       ["juan", "contreras", 7654321, 888888]];

        return $colePasajero;
    }
    
    $colePasajero=coleccionPasajero();
    $pasajero1=new Pasajero($colePasajero[0][0],$colePasajero[0][1],$colePasajero[0][2],$colePasajero[0][3]);
    $pasajero2=new Pasajero($colePasajero[1][0],$colePasajero[1][1],$colePasajero[1][2],$colePasajero[1][3]);
    $coleccion=[$pasajero1, $pasajero2];
    $responsableV=new ResponsableV(1,1234, "juan", "gonzalez" );
    $viaje1 = new Viaje(1234, "argentina", 3 ,$responsableV , $coleccion );
    $coleccionViaje=[$viaje1];
    do{
        echo "ingresar Opcion:\n";
        echo "1-agregar nuevo Pasajero\n";
        echo "2-agregar un nuevo viaje y un empleado responsable \n";
        echo "3-modificar Pasajero\n";
        echo "4-Ver viaje\n";
        echo "5-Salir\n";
        echo "opcion:";
        $opcion=trim(fgets(STDIN));
        switch($opcion){
            case 1:
                echo "ingrese Nombre: ";
                $nombre=trim(fgets(STDIN));
                echo "ingrese Apellido:";
                $apellido=trim(fgets(STDIN));
                echo "ingrese DNI: ";
                $dni=trim(fgets(STDIN));
                echo "ingresar Nro.Telefono:";
                $telefono=trim(fgets(STDIN));
                $pasajero3= new Pasajero($nombre, $apellido, $dni, $telefono);
                if($viaje->agregarPasajero($coleccion, $dni)){
                    echo "agregado Exitosamente.\n";
                    $i=count($coleccion);
                    $coleccion[$i]=$pasajero3;
                }
                else{
                    echo "no se pudo agregar pasajero ya existente o se supero la cant.Maxima de pasajeros\n";
                }
            break;
            case 2:
                echo "Agregar Cod.Viaje:";
                $nuevoCod=trim(fgets(STDIN));
                echo "Agregar nuevo destino: ";
                $nuevoDestino=trim(fgets(STDIN));
                echo "Cantidad de pasajeros: ";
                $cantPasajeros=trim(fgets(STDIN));
                echo "nombre empleado:";
                $nombreE=trim(fgets(STDIN));
                echo "apellido Empleado:";
                $apellidoE=trim(fgets(STDIN));
                echo "Nro.licencia: ";
                $numLicencia=trim(fgets(STDIN));
                echo "nro.Empleado: ";
                $num=trim(fgetS(STDIN));
                echo "*****************************************************************************\n";
                $responsableV1=new ResponsableV($num, $numLicencia, $nombreE, $apellidoE);
                $viaje2= new Viaje($nuevoCod, $nuevoDestino, $cantPasajeros, $responsableV1, $coleccion);
                $j=count($coleccionViaje);
                $coleccionViaje[$j]=$viaje2;

                break;
            case 3:
                echo " Que pasajero desear cambiar:\n";
                $opcionPasajero=trim(fgets(STDIN));
                $opcionPasajero--;
                echo "nuevo nombre: ";
                $nuevoNom=trim(fgets(STDIN));
                echo "nuevo apellido: ";
                $nuveoApellido=trim(fgets(STDIN));
                echo "nuevo Nro.Telefono:";
                $nuevoTelefono=trim(fgets(STDIN));
                $coleccion[$opcionPasajero]->modificar($nuevoNom,$nuveoApellido, $nuevoTelefono);
            
                break;
            case 4:
                echo "*****************************************************************************\n";
                echo "Que viaje desea mostrar:\n";
                $opcionViaje=trim(fgets(STDIN));
                $opcionViaje--;
                $Mostrar=$coleccionViaje[$opcionViaje];
                echo $Mostrar."\n";
                break;
        }
    
    }while($opcion!= 5);