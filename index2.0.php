<?php include('sesion.php') ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title> ECOBIKE </title>
	<link rel = "stylesheet" href = "css/styleindex.css" />
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
<h1> RENTA DE BICICLETAS </h1>
    <br>
  <section class="carousel">
    <ul class="slides">
      <input type="radio" name="radio-buttons" id="img-1" checked />
      <li class="slide-container">
        <section class="slide-image">
          <img src="img/per2.jpg">
        </section>
        <section class="carousel-controls">
          <label for="img-3" class="prev-slide">
            <span>&lsaquo;</span>
          </label>
          <label for="img-2" class="next-slide">
            <span>&rsaquo;</span>
          </label>
        </section>
      </li>
      <input type="radio" name="radio-buttons" id="img-2" />
      <li class="slide-container">
        <section class="slide-image">
          <img src="img/per1..png">
        </section>
        <section class="carousel-controls">
          <label for="img-1" class="prev-slide">
            <span>&lsaquo;</span>
          </label>
          <label for="img-3" class="next-slide">
            <span>&rsaquo;</span>
          </label>
        </section>
      </li>
      <input type="radio" name="radio-buttons" id="img-3" />
      <li class="slide-container">
        <section class="slide-image">
          <img src="img/per.jpeg">
        </section>
        <section class="carousel-controls">
          <label for="img-2" class="prev-slide">
            <span>&lsaquo;</span>
          </label>
          <label for="img-1" class="next-slide">
            <span>&rsaquo;</span>
          </label>
        </section>
      </li>
      <section class="carousel-dots">
        <label for="img-1" class="carousel-dot" id="img-dot-1"></label>
        <label for="img-2" class="carousel-dot" id="img-dot-2"></label>
        <label for="img-3" class="carousel-dot" id="img-dot-3"></label>
      </section>
    </ul>
  </section>
    <section class="inicio">
        <?php include('boton.php'); ?>
    </section>
</body>
<footer>
<?php include('sesion.php'); ?>
</html>