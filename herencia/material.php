<?php 
include ('biblioteca.php');

class Material extends Biblioteca{
     private $tipo;
     private $codigo;
     private $titulo;      

     function __construct($tipo,$codigo,$titulo,$material,$persona){
        parent::__construct($material,$persona);
        $this->tipo=$tipo;
        $this->codigo=$codigo;
        $this->titulo=$titulo;
    }
     function setTipo($tipo){
     $this->tipo=$tipo;
    }  
     function setCodigo($codigo){
     $this->codigo=$codigo;
    }
     function setTitulo($ficha){
     $this->titulo=$titulo;
    }
     function getTipo(){
     return $this->tipo;
    }
     function getCodigo(){
     return $this->codigo;
    }
     function getTitulo(){
     return $this->titulo;
    }
}

class Libro extends Material{
    private $editorial;

    function __construct($editorial,$tipo,$codigo,$titulo,$material,$persona){
        parent::__construct($editorial,$tipo,$codigo,$titulo,$material,$persona);
        $this->editorial=$editorial;
    }
    function setEditorial($editorial){
        $this->editorial=$editorial;
       }  
    function getEditorial(){
    return $this->editorial;
     }
}

class Revista extends Material{
    private $autor;
    function __construct($autor,$tipo,$codigo,$titulo,$material,$persona){
        parent::__construct($autor,$tipo,$codigo,$titulo,$material,$persona);
        $this->autor=$autor;
    }
    function setAutor($autor){
        $this->autor=$autor;
       }  
    function getAutor(){
    return $this->autor;
     }
}

$ob=new revista("Pedro","libro",999999,"la odicea","libro","pedro");
$obs=new libro("papel","libro",999999,"la odicea","libro","pedro");

echo $ob->getAutor();
echo '<br>';
echo $ob->getTipo();
echo '<br>';
echo $ob->getCodigo();
echo '<br>';
echo $ob->getTitulo();
echo '<br>';
echo $obs->datos();
echo '<br>';
echo $obs->getEditorial();
?>