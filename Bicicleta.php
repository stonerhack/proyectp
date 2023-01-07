<?php
// Admin.php
include ("conexionDB.php");
class Bicicleta extends conexionDB{

private $Codigo;
private $DESCRIPCION;
private $STOCK;
private $COLOR;
private $PRECIOHORA;
private $TIPO_BICICLETA;
private $ESTABLECIMIENTO;

public function construct() {
    $this->Codigo="";
    $this->DESCRIPCION="";
    $this->STOCK="0";
    $this->COLOR="";
    $this->PRECIOHORA="0";
    $this->TIPO_BICICLETA="";
    $this->ESTABLECIMIENTO="";
}

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
            //echo $sql;
            $dataset=$this->consultar($sql);
         }
         else{
            $dataset="vacio";
         }
          return $dataset;
   }
   public function newBici($codigo,$descripcion,$stock,$color,$preciohora,$tipoBici,$Establecimiento){
      $sql="insert into bicicleta
      values('".$codigo."','".$descripcion."',".$stock.",'".$color."',".$preciohora.",'".$tipoBici."','".$Establecimiento."');";
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