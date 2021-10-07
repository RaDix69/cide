<?php
include('daoPersona.php');
include ('../conexion/conexion.php');
include ('../modelo/persona.php');

class DaoPersonaImpl extends Conexion implements DaoPersona{
   
    
    public function registrar(persona $a){ 
        try{
        if ($this->getCnx()!=null) {
        $id=$a->getid();
        $nombre=$a->getNombre();
        $apellido1=$a->getapellido1();
        $apellido2=$a->getapellido2();
        $correo=$a->getcorreo();
        $contrasena=$a->getcontrasena();
        $tipo=$a->gettipo();
        $sql="insert into personas values(?,?,?,?,?,?,?)";
        $stmt=$this->getCnx()->prepare($sql);
        $stmt->execute([$id,$nombre,$apellido1,$apellido2,$correo,$contrasena,$tipo]);  
     
        } else {
            echo $this->getCnx().' Es nulo <br>';
        }
    }catch(PDOException $p){
        echo $p->getMessage().'***********************';
    }
                       
    }    
    public function modificar(persona $a){  
        $id=$a->getid();      
        $nombre=$a->getNombre();
        $apellido1=$a->getapellido1();
        $apellido2=$a->getapellido2();
        $correo=$a->getcorreo();
        $contrasena=$a->getcontrasena();
        $tipo=$a->gettipo();
        $stmt=$this->getCnx()->prepare("UPDATE personas " .
        "SET nombre =$nombre," .
       "apellido1 = $apellido1" .
       "apellido2 = $apellido2" .
       "correo = $correo" .
       "contrasena = $contrasena" .
       "tipo = $tipo" .
        "where id =$id");
     
         
    }

    public function eliminar($a){        
        $id=$_GET['id'];
        $stmt=$this->getCnx()->prepare("delete from personas where id=$id");
        $stmt->execute(); 

    }
//public function listar();
public function listar(){
    $lista = null;
    try{    
        $stmt = $this->getCnx()->prepare("select * from personas");
        $lista = array();
        $stmt->execute();
        foreach ($stmt as $key ) {           
            $a = new persona(null,null,null,null,null,null,null);
            $a->setid($key['id']);
            $a->setNombre($key['nombre']);
            $a->setapellido1($key['apellido1']);
            $a->setapellido2($key['apellido2']);
            $a->setcorreo($key['correo']);
            $a->setcontrasena($key['contrasena']);
            $a->settipo($key['tipo']);          
            array_push($lista,$a);            
        }        
        //$this->getCnx()->close();
    }catch(PDOException $e){
        $e->getMessage().'error en listar de DaoPersonaImpl';
    } 
        return $lista;       
    }       
    //public function buscar($campo,$dato);
    
}
?>