<?php
include('cliente.php');
$myCliente= new cliente();
$new = $myCliente->newcliente($_POST['txtnomb'],$_POST['txtpriape'],$_POST['txtsegape']);

header("Location: pregcliente.php");
?>