<?php
class Funciones{
    private $nombreF;
    private $horarioInicioF;
    private $duracionF;
    private $precioF;

    public function __construct($nombreF, $horarioInicioF, $duracionF, $precioF){
        $this->nombreF =$nombreF;
        $this->horarioInicioF=$horarioInicioF;
        $this->duracionF=$duracionF;
        $this->precioF=$precioF;
    }
    public function getNombreF(){
        return $this->nombreF;
    }
    public function setNombreF($nombreF){
        $this->nombreF = $nombreF;
    }
    public function getHorarioInicioF(){
        return $this->horarioInicioF;
    }
    public function setHorarioInicio($horarioInicioF){
        $this->horarioInicioF = $horarioInicioF;
    }
    public function getDuracionF(){
        return $this->duracionF;
    }
    public function setDuracion($duracionF){
        $this->duracionF = $duracionF;
    }
    public function getPrecioF(){
        return $this->precioF;
    }
    public function setPrecioF($precioF){
        $this->precioF = $precioF;
    }
    public function nuevoNombreFuncion($nNombre){ 
        $nNombre= $this->getNombreF();
        $this->setNombreF($nNombre);
    }
    public function nuevoPrecioFuncion($nPrecio){ 
        $nPrecio = $this->getPrecioF();
        $this->setPrecioF($nPrecio);
    }

    public function __toString(){
        return "Nombre: ". $this->getNombreF() . "\n" .
        "Horario de inicio: ". $this->getHorarioInicioF() . "hs \n". 
        "Duracion: ". $this->getDuracionF(). "hs \n". 
        "Precio: ". $this->getPrecioF(). "$ \n";
    }

}
