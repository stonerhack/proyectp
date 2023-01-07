<?php
session_start();
if(isset($_SESSION['NOMBRE_PILA']) && isset($_SESSION['CATEGORIA'])){
    $menuadmiADB=true;
    $adminLevel= $_SESSION['CATEGORIA'];
    $admi ='Welcome'.$_SESSION['NOMBRE_PILA'];
}
else{
    $menuadmiADB=false;
    $adminLevel=0;
    $admi='';
}
?>