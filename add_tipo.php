<?php
include ('tipo.php');
$myTipo = new Tipo();
$myTipo->setTipo($_POST['txtf'], 
$_POST['txtn'], 
$_POST['txtd'], 
);

header('location:insert_tipo.php');
?>