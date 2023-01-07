<?php
include_once('conexionDB.php');
class DetalleRenta extends conexionDB{
    public function SetDetalle($BICICLETA,$RENTA,$CANTIDAD,$IMPORTE){
        $sql= "insert into detalle_renta(BICICLETA,RENTA,CANTIDAD,IMPORTE)
        values('".$BICICLETA."',".$RENTA.",".$CANTIDAD.",".$IMPORTE.");";
        echo $sql;
        $result = $this -> conectar();
            if ($result){
                $new = $this ->insertar($sql);
            }
            else{
                $new = 0;
            }
            return $new;
    }
}
?>