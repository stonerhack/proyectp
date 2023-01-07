<?php
// Admin.php
include ("conexionDB.php");
class RentasModel extends conexionDB{

private $FOLIO;
private $FECHA;
private $HORA;
private $TIEMPO;
private $CANTIDAD_BICI;
private $MONTO;
private $Numero;

public function construct() {
    $this->FOLIO="";
    $this->FECHA="";
    $this->HORA="";
    $this->TIEMPO="";
    $this->CANTIDAD_BICI="";
    $this->MONTO="";
    $this->Numero="";
}

public function getRentasConUsuario(){
   $result=$this->conectar();
    if($result){
       $sql = "select * from total_rentas";
       //echo $sql;
       $dataset=$this->consultar($sql);
       
    }
    else{
       $dataset="vacio";
    }
    return $dataset;
}
   public function getRentasPorUsuario($id){
    $result=$this->conectar();
    if($result){
       $sql = "select renta.FOLIO, concat(cliente.NOMBRE_PILA, ' ', cliente.PRIMER_APELLIDO) as NOMBRE, renta.FECHA, renta.HORA, renta.TIEMPO, renta.MONTO, renta.CANTIDAD_BICI from renta INNER JOIN cliente on renta.Numero = cliente.Numero where cliente.Numero=" .$id .";";
    //    echo $sql;
       $dataset=$this->consultar($sql);
       
    }
    else{
       $dataset="vacio";
    }
    return $dataset;
   }

   public function getDetalleRenta($id){
    $result=$this->conectar();
    if($result){
       $sql = "select bicicleta.Codigo, TIPO_BICICLETA.NOMBRE, detalle_renta.CANTIDAD, detalle_renta.IMPORTE from bicicleta INNER JOIN TIPO_BICICLETA on bicicleta.TIPO_BICICLETA = TIPO_BICICLETA.FOLIO INNER JOIN detalle_renta on detalle_renta.BICICLETA = bicicleta.Codigo INNER JOIN renta on renta.FOLIO = detalle_renta.RENTA WHERE renta.FOLIO=". $id.";";
    //    echo $sql;
       $dataset=$this->consultar($sql);
       
    }
    else{
       $dataset="vacio";
    }
    return $dataset;
   }

}
?>