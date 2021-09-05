<?php 
class Biblioteca{
private $material="";
private $persona="";

function __construct($material,$persona){
    $this->material=$material;
    $this->persona=$persona;
}
function datos(){
    return 'el material es: '.$this->material . ' y la persona que lo tiene : '.$this->persona;
}
}

?>