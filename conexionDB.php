<?php
class conexionDB{
    //atributos o variables
    private $HOST;
    private $USER;
    private $PASSW;
    private $DB;
    private $connection;
    private $consulta;
    //constructores
    public function __construct() {
        $this->HOST="localhost";
        $this->USER="root";
        $this->PASSW="";
        $this->DB="rentadebicicletas";
    }
    //funciones, metodos o procedimientos
    public function conectar(){
        $this->connection=@mysqli_connect($this->HOST,$this->USER,$this->PASSW,$this->DB);
        if($this->connection){
            //echo "Se logro hacer la coneccion";
            return true;
        }
        else{
            //echo "No se pudo conectar ERROR404";
            return false;
        }
    }
    
    public function consultar($sql){
        $this->dataset=mysqli_query($this->connection, $sql);
        if($this->dataset){
            //echo "Consulta ejecutada";
            return $this->dataset;
        }
        else{
            //echo "Consulta no realizada";
            return 0;
        }
    }//end consultar
    public function insertar($sql){
        if(mysqli_query($this->connection, $sql)>0){
            $new = $this->connection->insert_id;
            //echo "todo al 100";
        }
        else{
            $new=0;
            //echo "todo manco";
        }
        return $new; 
    }//end insert
public function actualizar($sql){
    if(mysqli_query($this->connection,$sql)){
        //echo "Actualizado ";
        $check=true;
    }
    else{
        $check=false;
        //echo "No actualizada";
    }
    return $check;
    
}//end actualizar
}
?>
