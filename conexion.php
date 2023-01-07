<?php
    class conexiondb{
        private $HOST;
        private $USER;
        private $PASSW;
        private $DB;
        private $connection;

        public function __construct() {
            $this->HOST="localhost";
            $this->USER="root";
            $this->PASSW="";
            $this->DB="RentadeBicicletas";
        }
    

    public function conectar (){
        $this->connection=@mysqli_connect($this->HOST,$this->USER,$this->PASSW,$this->DB);
        if($this->connection){
            return true;
        }
        else{
            return false;
        }
    }

    public function consultar($sql){
        $this->dataset=mysqli_query($this->connection, $sql);
        if($this->dataset){
            return $this->dataset;
        }
        else{
            return 0;
        }
    }

    public function insertar($sql){
        if(mysqli_query($this->connection, $sql)>0){
            echo "todo fine";
        }
        else{
            echo "F";
       }
    }

    public function actualizar($sql){
        if(mysqli_query($this->connection,$sql)>0){
            echo "actualizado";
            $check = true;
        }
        else{
            echo "F";
            $check = false;
        }
        return $check;
    }

    public function eliminar($sql){
        if(mysqli_query($this->connection,$sql)>0) {
            echo "Eliminado";
            $check=true;
            }
      else{
            echo "No eliminado";
            $check=false;
      }
      return $check;
      }

}

?>

