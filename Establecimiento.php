<?php
// Establecimiento.php
include ("conexionDB.php");
class Establecimiento extends conexionDB{

private $Codigo;
private $NOMBRE;
private $COLONIA;
private $CALLE;
private $NUMERO;
private $NUMEMPLEADO;
public function construct() {
    $this->Codigo="";
    $this->NOMBRE="";
    $this->COLONIA="";
    $this->CALLE="";
    $this->NUMERO="0";
    $this->NUMEMPLEADO="0";
}
public function GetAllE(){
   $result=$this->conectar();
    if($result){
       $sql = "select * from establecimiento";
       echo $sql;
       $dataset=$this->consultar($sql);
    }
    else{
       $dataset="vacio";
    }
    return $dataset;
}
public function newEstable($Codigo,$Nombre,$Colonia,$Calle,$Numero,$Numempleado){
   $sql="insert into establecimiento
   values('".$Codigo."','".$Nombre."','".$Colonia."','".$Calle."',".$Numero.",'".$Numempleado."');";
   echo $sql;
   $result=$this->conectar();
   if($result){
      $new=$this->insertar($sql);
   }
   else{ 
      $new=0;
   }
   return $new;
}
}