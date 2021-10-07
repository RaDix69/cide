<?php
class persona{
private $id;
private $nombre;
private $apellido1;
private $apellido2;
private $correo;
private $contrasena;
private $tipo;

function __construct($id,$nombre,$apellido1,$apellido2,$correo,$contrasena,$tipo){
    $this->id=$id;
    $this->nombre=$nombre;
    $this->apellido1=$apellido1;
    $this->apellido2=$apellido2;
    $this->correo=$correo;
    $this->contrasena=$contrasena;
    $this->tipo=$tipo;

}

function getid() {
    return $this->id;
}

function setid($id) {
    $this->id = $id;
}
function getNombre() {
    return $this->nombre;
}

function setNombre($nombre) {
    $this->nombre = $nombre;
}

function getapellido1() {
    return $this->apellido1;
}

function setapellido1($apellido1) {
    $this->apellido1 = $apellido1;
}

function  getapellido2() {
    return $this->apellido2;
}

function  setapellido2($apellido2) {
    $this->apellido2 = $apellido2;
}

function  getcorreo() {
    return $this->correo;
}

function  setcorreo($correo) {
    $this->correo = $correo;
}
function  getcontrasena() {
    return $this->contrasena;
}

function  setcontrasena($contrasena) {
    $this->contrasena = $contrasena;
}

function  gettipo() {
    return $this->tipo;
}

function  settipo($tipo) {
    $this->tipo = $tipo;
}

}