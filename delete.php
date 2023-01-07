<?php
include('tipo.php');

$MyTipo = new Tipo();
$MyTipo -> delTipo($_POST['txtf']);

header('location:delete_tipo.php');
?>