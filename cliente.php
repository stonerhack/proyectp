<?php
// Admin.php
include ("conexionDB.php");
class Cliente extends conexionDB{

private $Numero;
private $NOMBRE_PILA;
private $PRIMER_APELLIDO;
private $SEGUNDO_APELLIDO;
private $NUMERO_TARJETA;
private $FECHA_VENC_TARJETA;
private $NUMERO_TELEFONICO;

public function construct() {
    $this->Numero="0";
    $this->NOMBRE_PILA="";
    $this->PRIMER_APELLIDO="";
    $this->SEGUNDO_APELLIDO="";
    $this->NUMERO_TARJETA="";
    $this->FECHA_VENC_TARJETA="";
    $this->NUMERO_TELEFONICO="";
}
/*
public function getBici(){
   $result=$this->conectar();
    if($result){
       $sql = "Select * from bicicleta";
       //echo $sql;
       $dataset=$this->consultar($sql);
       
    }
    else{
       $dataset="vacio";
    }
    return $dataset;
}

   public function GetAllBiciXEstable($ESTABLECIMIENTO){
      $result=$this->conectar();
         if($result){
            $sql="select Codigo,Descripcion,preciohora,stock from bicicleta where establecimiento='".$ESTABLECIMIENTO."';";
            echo $sql;
            $dataset=$this->consultar($sql);
         }
         else{
            $dataset="vacio";
         }
          return $dataset;
   }
*/
   public function newcliente($NOMBRE_PILA,$PRIMER_APELLIDO,$SEGUNDO_APELLIDO){
      $sql="insert into cliente(Numero,NOMBRE_PILA,PRIMER_APELLIDO,SEGUNDO_APELLIDO,NUMERO_TARJETA,FECHA_VENC_TARJETA,NUMERO_TELEFONICO)
      values('','".$NOMBRE_PILA."','".$PRIMER_APELLIDO."','".$SEGUNDO_APELLIDO."','N/A','N/A','N/A')";
      //echo $sql;
      $result=$this->conectar();
      if($result){
         $new=$this->insertar($sql);
         
      }
      else{
         
         $new=0;
      }
      return $new;
   }
   /*
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
   */
}
?>