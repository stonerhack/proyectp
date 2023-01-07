<?php 
include('sesion.php');
if(!empty($_POST)){
    if(isset($_POST['txtcod']) && isset($_POST['txtst'])){
        if(empty($_SESSION['carrito'])){
            $_SESSION['carrito'] = array( array(
                    "Codigo" => $_POST['txtcod'],
                    "preciohora" => $_POST['txtph'],
                    "stock" => $_POST['txtst']
                ) );
                echo"contenido del carrito ";
                print_r($_SESSION['carrito']);
        }//end carrito
        else{
            //Variable temporal 
            $carrito =$_SESSION['carrito'];
            $yaesxiste=false;
            foreach($carrito as $renglon){
                if($renglon['Codigo'] == $_POST['txtcod']){
                    $yaesxiste=true;
                    break;
                }
            }//fin foreach
            if($yaesxiste){
                ///suma de cantidad de productos 
            }
            else{
                array_push($carrito,array(
                "Codigo" => $_POST['txtcod'],
                "preciohora" => $_POST['txtph'],
                "stock" => $_POST['txtst']
                ) );
                $_SESSION['carrito'] = $carrito;
            }
            print_r($_SESSION['carrito']);
        }
    }//end isset
}//end Post
header("Location:renta.php");
?>