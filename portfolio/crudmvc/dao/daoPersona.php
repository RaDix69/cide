<?php 
interface DaoPersona{
    public function registrar(persona $a);
    public function modificar(persona $a);
    public function eliminar(persona $a);
    //public function buscar($campo,$dato);
    public function listar();
}
?>