<?php
if(isset($_POST['Numemp'])){
    $numemp=$_POST['Numemp'];
 }
include('Admin.php');
$myadmi = new Admin();
$check=$myadmi->updAdminpass($_POST['txtpass'],$_POST['Numemp']);
header("Location: viewnewpassword.php");
?>