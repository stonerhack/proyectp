<?php
if(isset($_POST['Numemp'])){
   $Establecimiento=$_POST['Numemp'];
}
include('Establecimiento.php');
$myEstable= new Establecimiento();
$new = $myEstable->newEstable($_POST['txtesta'],$_POST['txtnomest'],$_POST['txtcolonia'],$_POST['txtcalle'],$_POST['txtnumero'],$_POST['Numemp']);

header("Location: viewnewestablecimiento.php");
?>