<?php
// Admin.php
include ("conexionDB.php");
class Admin extends conexionDB{

private $NUMEMPLEADO;
private $NOMBRE_PILA;
private $PRIMER_APELLIDO;
private $SEGUNDO_APELLIDO;
private $CORREO;
private $PASSWORD;
private $CATEGORIA;

public function construct() {
    $this->NUMEMPLEADO="0";
    $this->NOMBRE_PILA="";
    $this->PRIMER_APELLIDO="";
    $this->SEGUNDO_APELLIDO="";
    $this->CORREO="";
    $this->PASSWORD="";
    $this->CATEGORIA="0";
}
public function getAdmi($correo,$passw){
   $result=$this->conectar();
    if($result){
       $sql = "select * from admin where CORREO='$correo' and PASSWORD='$passw'";
       echo $sql;
       $dataset=$this->consultar($sql);
       
    }
    else{
       $dataset="vacio";
    }
    return $dataset;
}

    public function getAllAdminDB(){
        $result=$this->conectar();
         if($result){
            $dataset=$this->consultar("select * from admin where categoria=2");
            
         }
         else{
            
            $dataset="clean";
         }
         return $dataset;
     }
     
   public function updAdminpass($PASSWORD,$NUMEMPLEADO){
      $sql="update admin set PASSWORD= '".$PASSWORD."' 
                        where NUMEMPLEADO=".$NUMEMPLEADO;
      //echo $sql;
       $result=$this->conectar();
      if($result){
         $check=$this->actualizar($sql);
      }
      else{
         $check=0;
      }
      return $check;
   }
   
}
?>