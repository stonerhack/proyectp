<?php
include_once('conexionDB.php');
class Rentas extends conexionDB{
    public function setRentaEmpty($fecha,$hora,$tiempo,$Numero){
        $sql= "insert into renta(FOLIO,FECHA,HORA,TIEMPO,Numero,MONTO,CANTIDAD_BICI)
        values('','".$fecha."','".$hora."','".$tiempo."','".$Numero."','0','0')";
        echo $sql;
        $result = $this-> conectar();
        if ($result){
            $newid = $this->insertar($sql);  
            echo'Nuevo id'.$newid;
        }
        else{
            $newid = 0;
        }
        return $newid;
    }
    public function updrentas($stock,$newid,$importe){
        $sql= "update renta set cantidad_bici=cantidad_bici+$importe,monto=monto+$stock*tiempo
        where FOLIO=$newid";
        echo $sql;
        $result = $this->conectar();
        if ($result){
         $this ->actualizar($sql);
           $check=true;
        }
        else{
            $check=false;
        }
        return $check;
} 
    }
?>