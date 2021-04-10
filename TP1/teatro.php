<?php

class Teatro {
    private $nombre;
    private $direccion;
    private $funciones;

    public function __construct($nom, $dir, $fun){
        $this->nombre = $nom;
        $this->direccion = $dir;
        $this->funciones = $fun;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nom){
        $this->nombre = $nom;
    }
    public function getDireccion(){
        return $this->direccion;
    }
    public function setDireccion($dir){
        $this->direccion=$dir;
    }
    public function getFunciones(){
        return $this->funciones;
    }
    public function setFunciones($fun){
        $this->funciones=$fun;
    }
    public function nuevoNombre($nNombre){ //cambia el nombre del teatro
        $this->nombre=$nNombre;
    }
    public function nuevaDireccion($nDireccion){ //cambia la direccion del teatro
        $this->direccion=$nDireccion;
    }
    public function nuevoNombreFuncion($numF, $nuevNomF){ //con el numero de funcion y el nuevo nombre cambia el nombre de la funcion
        $nuevoNombreF= $this->getFunciones();
        $nuevoNombreF[$numF]["nombre"]=$nuevNomF;
        $this->setFunciones($nuevoNombreF);
    }
    public function nuevoPrecioFuncion($numF, $nuevPreF){ //cambia el precio de una funcion
        $nuevoPrecioF = $this->getFunciones();
        $nuevoPrecioF[$numF]["precio"]=$nuevPreF;
        $this->setFunciones($nuevoPrecioF);
    }
    public function __toString(){
        return "Teatro: ". $this->getNombre(). "\n".
        "Dirección:  ". $this->getDireccion(). "\n".
        "Funcion N°1, Nombre: ". $this->getFunciones()[0]["nombre"] . ", Precio: ". $this->getFunciones()[0]["precio"] . "\n".
        "Funcion N°2, Nombre: ". $this->getFunciones()[1]["nombre"] . ", Precio: ". $this->getFunciones()[1]["precio"] . "\n".
        "Funcion N°3, Nombre: ". $this->getFunciones()[2]["nombre"] . ", Precio: ". $this->getFunciones()[2]["precio"] . "\n".
        "Funcion N°4, Nombre: ". $this->getFunciones()[3]["nombre"] . ", Precio: ". $this->getFunciones()[3]["precio"] . "\n";
    }

}
