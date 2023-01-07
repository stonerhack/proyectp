<!DOCTYPE html>
<html lang="en">
<?php include('sesion.php'); ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel = "stylesheet" href = "css/stylerenta.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
  if ($menuadmiADB){
    echo $admi;
    echo '<a href="logout.php">Logout</a>';
  }else{
    echo'<a href="iniciarsesion.php">login</a>';
  }
?>
<?php include('menu.php'); ?>
<br>
<br>
<br>
<br>
<br>
<br>
<?php 
       if($menuadmiADB){
        if($adminLevel == '1'){
            if($adminLevel == '1'){
          include('crudmenu.php');
        }
        if($adminLevel == '2'){
          include('crudmenuadmin.php');
        }
        }
        if($adminLevel == '2'){
          include('crudmenuadmin.php');
        }
        }
?>
<section id="container">
<br>
<h1>Consulta De Rentas</h1>

<label>Ingresa el codigo del usuario para consultar rentas por usuario</label>
<br>
<label>o deja el campo vacio para consultar todas las rentas</label>

  <br>
  <br>
  <form method="POST" action="viewrentas.php" enctype="multipart/from-data">
    <input type="text" name="txtid" placeholder="ID USUARIO">
  <input type="submit" value="Consultar" id="form_button">
  </form>
    </section>
</body>
</html>