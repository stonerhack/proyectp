<?php
include('Admin.php');
$myAdmi=new Admin();
$dataset=$myAdmi->getAdmi($_POST['txtcorreo'],$_POST['txtpassw']);

if($dataset!='vacio'){
    $count=mysqli_num_rows($dataset);
    if($count==1){
        $fila=mysqli_fetch_assoc($dataset);
        session_start();
        $_SESSION['numem']=$fila['NUMEMPLEADO'];
        $_SESSION['NOMBRE_PILA']=$fila['NOMBRE_PILA'];
        $_SESSION['CORREO']=$fila['CORREO'];
        $_SESSION['CATEGORIA']=$fila['CATEGORIA'];
        echo $_SESSION['numem'];
        echo $_SESSION['NOMBRE_PILA'];
    }
    else{
        echo"Sorry sin acceso";
    }
}
else{
  echo"No se realizo consulta";
}
header("Location: index2.0.php");
?>
