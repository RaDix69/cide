<?php 
require('../dao/DaoPersonaimpl.php');
$dao=new DaoPersonaImpl();
$personas=$dao->listar();
?>    