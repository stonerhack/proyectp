<?php
if(isset($_POST['Establecimiento'])){
   $Establecimiento=$_POST['Establecimiento'];
}
if(isset($_POST['TB'])){
    $Tipo_B=$_POST['TB'];
 }
include('Bicicleta.php');
$myBici= new Bicicleta();
$new = $myBici->newBici($_POST['txtcod'],$_POST['txtdescrip'],$_POST['txtstock'],$_POST['txtcolor'],$_POST['txtprecio'],$_POST['TB'],$_POST['Establecimiento']);

header("Location: viewnewbicicleta.php");
?>