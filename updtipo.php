<?php
include('tipo.php');

$MyTipo = new Tipo();
$MyTipo->updTipo(
$_POST['txtf'],
$_POST['txtn'],
$_POST['txtd']
);

header('location:actualizar_tipo.php');
?>
