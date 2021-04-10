<?php
include_once "teatro.php";
include_once "funciones.php";

function funciones(){
    $funcionesMdP = array();  //detalla las cuatro funciones del teatro Mar del Plata
    $funcionesMdP[0] = array("nombre"=>"El equilibrista", "Horario de inicio"=>15, "Duracion"=>1, "precio"=> 550);
    $funcionesMdP[1] = array("nombre"=>"Mañana, el show", "Horario de inicio"=>17, "Duracion"=>2, "precio"=> 600);
    $funcionesMdP[2] = array("nombre"=>"El equilibrista", "Horario de inicio"=>19, "Duracion"=>1, "precio"=>550);
    $funcionesMdP[3] = array("nombre"=>"Mañana, el show", "Horario de inicio"=>21, "Duracion"=>2, "precio"=>600);
    return $funcionesMdP;
}
function existeFuncion($funcionesMdP,$nombreNuevaF){
    $i = 0;
    $cantFunc = 4;
    $existeNF = false;
    while ($i < $cantFunc && !$existeNF) {
        $existeNF = $funcionesMdP[$i]["nombre"]== $nombreNuevaF;
        $i++;
    }
    return $existeNF;
}

function existeHorarioInicio($funcionesMdP, $nuevoHorarioF){
    $i =0 ;
    $cantFunc = 4;
    $existeHI = false;
    while ($i < $cantFunc && !$existeHI) {
        $existeHI = $funcionesMdP[$i]["Horario de inicio"] == $nuevoHorarioF ;
        $i++;
    }
    return  $existeHI;
}



function menu(){
    
    echo "[1] Cambiar nombre de una función  \n";
    echo "[2] Cambiar precio de una función  \n";
    echo "[3] Cargar una nueva función  \n";
    echo "[4] Salir \n";
    
    do {
        echo "Seleccione la opcion deseada: ";
        $eleccion = trim(fgets(STDIN));
    } while ($eleccion < 1 || $eleccion >5);
    return $eleccion;
}
$funcionesMarDelPlata_1 = new Funciones("El Equilibrista", 15, 90, 550);
$funcionesMarDelPlata_2 = new Funciones("Mañana, el Show", 17, 100,600);
$funcionesMarDelPlata_3 = new Funciones("El Equilibrista", 19, 90, 550);
$funcionesMarDelPlata_4 = new Funciones("Mañana, el Show", 21, 100,600);
$marDelPlata_1 = new Teatro("Mar del Plata", "Av. Pedro Luro 2335", $funcionesMarDelPlata_1);
$marDelPlata_2 = new Teatro("Mar del Plata", "Av. Pedro Luro 2335", $funcionesMarDelPlata_2);
$marDelPlata_3 = new Teatro("Mar del Plata", "Av. Pedro Luro 2335", $funcionesMarDelPlata_3);
$marDelPlata_4 = new Teatro("Mar del Plata", "Av. Pedro Luro 2335", $funcionesMarDelPlata_4);

do {
    $eleccion = menu();
    switch ($eleccion) {
        case 1:
            do {
                echo "Ingrese el numero de funcion al cual quiere cambiarle el nombre (1-4): ";
                $numF = trim(fgets(STDIN));
            } while ($numF < 0 || $numF>4);
            echo "ingrese el nuevo nombre de la función: ";
            $nuevoNomF = trim(fgets(STDIN));
            if ($numF == 1) {
                $funcionesMarDelPlata_1 -> nuevoNombreFuncion($nuevoNomF);
            } elseif ($numF ==2) {
                $funcionesMarDelPlata_2 -> nuevoNombreFuncion($nuevoNomF);
            } elseif ($numF == 3) {
                $funcionesMarDelPlata_3 -> nuevoNombreFuncion($nuevoNomF);
            } elseif ($numF == 4) {
                $funcionesMarDelPlata_4 -> nuevoNombreFuncion($nuevoNomF);
            }   
        break;
        
        case 2:
            do {
                echo "Ingrese el numero de funcion al cual quiere cambiarle el precio (1-4): ";
                $numF = trim(fgets(STDIN));
            } while ($numF < 0 || $numF>4);
            echo "ingrese el nuevo precio de la función: ";
            $nuevoPrecF = trim(fgets(STDIN));
            if ($numF == 1) {
                $funcionesMarDelPlata_1 -> nuevoPrecioFuncion($nuevoPrecF);
            } elseif ($numF ==2) {
                $funcionesMarDelPlata_2 -> nuevoPrecioFuncion($nuevoPrecF);
            } elseif ($numF == 3) {
                $funcionesMarDelPlata_3 -> nuevoPrecioFuncion($nuevoPrecF);
            } elseif ($numF == 4) {
                $funcionesMarDelPlata_4 -> nuevoPrecioFuncion($nuevoPrecF);
            }
 
        break;
        case 3:
            do {
                echo "Ingrese el nombre de la nueva función: ";
                $nombreNuevaF= trim(fgets(STDIN));
                $existeNombre = existeFuncion($funcionesMdP, $nombreNuevaF);
                if($existeNombre){
                    echo "La funcion ya existe ";
                }
            } while ($existeNombre);
            do {
                echo "Ingrese el horario de inicio: ";
                $nuevoHorarioF = trim(fgets(STDIN));
                $existeHorarioI = existeHorarioInicio($funcionesMdP, $nuevoHorarioF);
                if($existeHI){
                    echo "El horario ya se encuentra ocupado: ";
                }
            } while ($nuevoHorarioF);
            echo "Ingrese la duración de la función: ";
            $nuevaDuracionF = trim(fgets(STDIN));
            echo "Ingrese el precio de la función: ";
            $nuevoPrecioF = trim(fgets(STDIN));
            $cantFunc = 4;
            $funcionesMdP[$cantFunc] = array("nombre"=>$nombreNuevaF, "Horario de inicio"=>$nuevoHorarioF, "Duracion"=>$nuevaDuracionF, "Precio"=>$nuevoPrecioF);
        break;

    }

} while($eleccion <> 4);
