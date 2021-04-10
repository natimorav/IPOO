<?php

class Teatro {
    private $nombre;
    private $direccion;
    private $objFunciones;

    public function __construct($nom, $dir, $objFun){
        $this->nombre = $nom;
        $this->direccion = $dir;
        $this->objFunciones = $objFun;
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
    public function getObjFunciones(){
        return $this->ObjFunciones;
    }
    public function setObjFunciones($objFun){
        $this->objFunciones=$objFun;
    }

}
