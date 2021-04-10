<?php
include_once "teatro.php";

$funciones = array();  //detalla las cuatro funciones del teatro
$funciones[0] = array("nombre"=>"El equilibrista", "precio"=> 550);
$funciones[1] = array("nombre"=>"Mañana, el show", "precio"=> 600);
$funciones[2] = array("nombre"=>"El show de los escandalones", "precio"=>500);
$funciones[3] = array("nombre"=>"Los cuatro fantasticos del humor", "precio"=>650);

function menu(){
    
    echo "[1] Cambiar nombre del Teatro  \n";
    echo "[2] Cambiar dirección del Teatro \n";
    echo "[3] Cambiar nombre de una función  \n";
    echo "[4] Cambiar precio de una función  \n";
    echo "[5] Visualizar datos del Teatro  \n";
    echo "[6] Salir \n";
    do {
        echo "Seleccione la opcion deseada ";
        $eleccion = trim(fgets(STDIN));
    } while ($eleccion < 1 || $eleccion >6);
    return $eleccion;
}

$marDelPlata = new Teatro("Mar del Plata", "Av. Pedro Luro 2335", $funciones);
do {
    $eleccion = menu();
    switch ($eleccion) {
        case 1:
            echo "Ingrese el nuevo nombre del Teatro: ";
            $nNombre = trim(fgets(STDIN));
            $marDelPlata -> nuevoNombre($nNombre);
        break;
        
        case 2:
            echo "Ingrese la nueva dirección del Teatro: ";
            $nDireccion = trim(fgets(STDIN));
            $marDelPlata -> nuevaDireccion($nDireccion);
        break;
        case 3: 
            do {
                echo "Ingrese el numero de función al cual quiere cambiarle el nombre (1-4): ";
                $numF = trim(fgets(STDIN)) - 1;
            } while ($numF < 0 || $numF > 3);
            echo "ingrese el nuevo nombre de la función: ";
            $nuevoNomF = trim(fgets(STDIN));
            $marDelPlata -> nuevoNombreFuncion($numF, $nuevoNomF);
        break;
        case 4: 
            do {
                echo "Ingrese el numero de función al cual quiere cambiarle el precio (1-4): ";
                $numF = trim(fgets(STDIN))-1;
            } while ($numF < 0 || $numF > 3);
            echo "ingrese el nuevo precio de la función: ";
            $nuevoPreF = trim(fgets(STDIN));
            $marDelPlata -> nuevoPrecioFuncion($numF, $nuevoPreF);
        break;
        case 5: 
            echo $marDelPlata;
    }

} while($eleccion <> 6);
