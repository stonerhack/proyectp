<!DOCTYPE html>
<html>
<?php include('sesion.php'); ?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title> Renta </title>
  <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="javascript.js"></script>
	<link rel = "stylesheet" href = "css/styleviewbikxesta.css" type = "text/css" />
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
  <?php 
  if($menuadmiADB){
      include('crudmenu.php');
    }
  ?>
	<section id ="container"> 
    <h1> Renta </h1>
      <?php
      include('Bicicleta.php');
      $myBici= new Bicicleta();
      $dataset = $myBici->GetAllBiciXEstable($_POST['Establecimiento']);
      if ($dataset!='vacio'){
      
      while($fila=mysqli_fetch_assoc($dataset)){
          echo"<br>";
          echo '<form method="post" action="agregar.php">';
		      echo '<input type="text" name="txtcod" class="sinborde" '.'value="'.$fila['Codigo'].'" readonly>';
		      echo "<br>";
		      echo '<form method="post" action="" >';
		      echo '<input type="text" name="txtdesc" class="sinborde" '.'value="'.$fila['Descripcion'].'" readonly>';
		      echo "<br>";
          echo '<form method="post" action="" >';
		      echo '<input type="text" name="txtph" class="sinborde" '.'value="'.$fila['preciohora'].'" readonly>';
		      echo "<br>";
          echo'<input type="number" name="txtst" value="1" min="1" max="'.$fila['stock'].'" id="form_button">';
          echo "<br>";
          echo '<section class="submit">';
          echo "<br>";
          echo '<a href="agregar.php"><input type="submit" value="add" id="form_button"></a>';
          echo '</section>';
          echo '</form>';
          }
        }
          else{
      }
   ?>
  </section>

</body>
</html>