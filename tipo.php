<?php
include ('conexion.php');
class tipo extends conexiondb{
    private $FOLIO;
    private $NOMBRE;
    private $DESCRIPCION;

    public function getAlltipo(){
        $result=$this->conectar();
    if($result){
        $dataset =$this->consultar("select * from TIPO_BICICLETA");
    }
    else{
        $dataset="no hay nada compadre";
    }
    return $dataset;
    }

    public function setTipo($fo,$nom,$des){
        $sql= "insert into TIPO_BICICLETA(FOLIO, NOMBRE, DESCRIPCION)
        values('".$fo."','".$nom."','".$des."')"; 
        echo $sql;
        $result = $this->conectar();
        if($result){
            $newid = $this->insertar($sql);
        }
        else{
            $newid = 0;
        }
        return $newid;
    }

    public function updTipo($fo,$nom,$des){
    
        $sql="update TIPO_BICICLETA set NOMBRE='".$nom."', 
        DESCRIPCION='".$des."'
        where FOLIO='".$fo."'";
        echo $sql;
        $result = $this->conectar();
        if($result){
            
            $check = $this->actualizar ($sql);
        }
        else{
        }
        return $check;
    }

    
    public function delTipo($fo){
        $sql="delete from TIPO_BICICLETA
        where FOLIO='".$fo."'";

        $result = $this->conectar();
        echo $sql;

        if($result){
            
            $check = $this->eliminar ($sql);
        }
    }
    
}
?>
