<?php

function detalleVinos($datos){
    $cantBotella=0;
    $precio=0;
    $cont=0;
    $aux=0;
    $vinoData=[];
    foreach ($datos as $datos2){
        $cont = $cont+1;
        foreach ($datos2 as $datos3){
            foreach($datos3 as $datos4 =>$dato){
                if ($datos4 == "cantidad"){
                    $cantBotella = $cantBotella + $dato;
                } 
                elseif ($datos4 == "precio") {
                    $aux = $aux + 1;
                    $precio = $precio + $dato ;
                }
            }
        }
        if ($cont==1){
            $precioPromedio =$precio/$aux;
            $vinoInfo["Malbec"]=["Cantidad"=>$cantBotella,"Precio Promedio"=>$precioPromedio];
            $cantBotella=0;
            $precio=0;
            $aux=0;
        } 
        elseif ($cont==2){
            $precioPromedio =$precio/$aux;
            $vinoInfo["Cabernet"]=["Cantidad Total"=>$cantBotella,"Precio Promedio"=>$precioPromedio];
            $cantBotella=0;
            $precio=0;
            $aux=0;
        }
        else{
            $precioPromedio =$precio/$aux;
            $vinoInfo["Merlot"]=["Cantidad Total"=>$cantBotella,"Precio Promedio"=>$precioPromedio];
        }
    }
    return $vinoInfo ;
}
function main(){
    $inventario = array();
    $inventario["Malbec"] =  array (
                        $malbec [0] = array ("cantidad"=>500, "año"=>2015, "precio"=>750),
                        $malbec [1] = array ("cantidad"=>270, "año"=>2019, "precio"=>550),
                        $malbec [2] = array ("cantidad"=>387, "año"=>2017, "precio"=>450),
                        ); 
    $inventario["Cabernet"] = array (
                        $cabernet [0] = array ("cantidad"=>250, "año" => 2016, "precio"=>720),
                        $cabernet [1] = array ("cantidad"=>370, "año" => 2013, "precio"=>920),
                        $cabernet [2] = array ("cantidad"=>200, "año" => 2020, "precio"=>200)
                        );
    $inventario["Merlot"] = array (
                        $merlot [0] = array ("cantidad"=>560, "año" => 2019, "precio"=>620),
                        $merlot [1] = array ("cantidad"=>230, "año" => 2017, "precio"=>1020),
                        $merlot [2] = array ("cantidad"=>760, "año" => 2020, "precio"=>580),
                        );
    
    $exponer = detalleVinos($inventario);
    print_r( $exponer);



}
main ();
