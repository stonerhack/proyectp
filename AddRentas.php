<?php
include('sesion.php');
include_once('Rentas.php');
$myRentas= new Rentas();
$newid = $myRentas->setRentaEmpty($_POST['txtfech'],$_POST['txthora'],$_POST['txthr'],$_POST['txtnumc']);
//echo'Esta la nueva renta';
//echo$newid;
include('DetalleRenta.php');
$myDetalle = new DetalleRenta();
foreach($_SESSION['carrito'] as $elemento){
    $importe=$elemento['stock']*$elemento['preciohora'];
    $newid_det=$myDetalle->SetDetalle($elemento['Codigo'],$newid,$elemento['stock'],$importe);
    $check = $myRentas->updrentas($importe,$newid,$elemento['stock']);
    //echo'Insertando detalle';
}
unset($_SESSION['carrito']);
header("Location: index2.0.php");
?>

