<?php
include ('material.php');
include ('libro.php');
include ('revista.php');


class Biblioteca{
    private $coleccion;
    private $tipo;  

    function __construct($tipo){
        $this->coleccion=array();
        $this->tipo=$tipo;
    }
    
    function setTipo($tipo){
        $this->tipo=$tipo;
    }
    function getTipo(){
        return $this->tipo;
    }
     
    function adicionar($material){
        array_push($this->coleccion,$material);
    }

    function verLibro(){
            for ($i=0; $i <count($this->coleccion) ; $i++) { 
                echo  "Autor: ". $this->coleccion[$i]->getAutor();
                echo "<br>";
                echo 'EDITORIAL: '.$this->coleccion[$i]->getEditorial();
                echo '<br>';
                echo 'NUMERO DE PAGINAS: '.$this->coleccion[$i]->getnumeroPaginas();
                echo '<br>';    
                echo 'NUMERO DE CAPITULOS: '.$this->coleccion[$i]->getnumeroCapitulos();
                echo '<br>';
                echo '<br>';
            }
        }
    function verRevista(){
        for ($i=0; $i <count($this->coleccion) ; $i++) { 
            echo "Tema: ".$this->coleccion[$i]->getTema();
            echo "<br>";
            echo 'Fecha de publicación: '.$this->coleccion[$i]->getFechaPublicacion();
            echo '<br>';    
            echo 'Lugar de publicacion: '.$this->coleccion[$i]->getLugarPublicacion();
            echo '<br>';
            echo 'Numero de edición: '.$this->coleccion[$i]->getNumeroEdicion();
            echo '<br>';
            echo '<br>';
        }
    }
}
    


$biblio=new Biblioteca("revista");

            if ($biblio->getTipo() === "libro") {
             $obli=new Libro('virtual','ISBN 856-96700-0-9','Gabo','100 años de soledad',1978,'Buen estado','EDITORIAL Planeta','200','20');
             $biblio->adicionar($obli1);
             $biblio->adicionar($obli);
             $biblio->verLibro();
            }else if($biblio->getTipo() === "revista"){
            $ob1=new Revista('Tecnologia','ISSN 0028-0836','Pepe Perez','nature',2020,'Buen estado','Cientifico','03-09-2021','EEUU','19');
            $biblio->adicionar($ob);
            $biblio->adicionar($ob1);
            $biblio->verRevista();        
        }

        
?>