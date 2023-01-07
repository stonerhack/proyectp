<?php include('sesion.php') ?>


<!DOCTYPE html>
<html>
<html lang="es">
<title>
    ubicaciones
</title>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/styleubica.css">
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
<main>
	<!--<section class = "principal"> </section>
  <a href="pregcliente.php"><input type="button" value="Rentar"></a>-->
    <?php 
    //Principal
  ?>
</main>
<div class="contiz">
    <h1>PLAZA GALERIAS </h1>
       <img src="img/map2.jpg" alt="" class="map">
    <div class="info">
        Telefono <br>
        664-987-6543 <br><br>
        Horarios<br>
        L-D 10:00 AM - 5:00 PM<br>    
    </div>   
    <div class="cont-img1">
        <?php include_once('botonubi.php');?>
    </div>
       
</div>
<div class="contder">
    <h1>PLAZA RIO</h1>
        <img src="img/map1.png" class="map">  
    <div class="info">
        Telefono <br>
        664-123-4567 <br><br>
        Horarios<br>
        L-D 10:00 AM - 5:00 PM<br>   
    </div>
    <div class="cont-img2">
        <?php include_once('botonubirio.php');?>
    </div>
</div>
</body>

<footer>
    <a>iniciar secion</a>
</footer>
</html>
