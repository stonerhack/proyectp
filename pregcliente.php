<!DOCTYPE html>
<?php include('sesion.php'); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title> YOPEDALEO </title>
	<link rel = "stylesheet" href = "css/stylepreg.css" />
</head>
<body>
<br>
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
<?php 
    if($menuadmiADB){
        include('crudmenu.php');
      }
?>
<main>

<section id="container">
  <h4> Eres cliente</h4>
  <a href="viewnewcliente.php"><input type="button" value="NO" id="form_buttonno"></a>
  <a href="renta.php"><input type="button" value="Si" id="form_buttonyes"></a>
    <?php 
    //Principal
  ?>
</section>
</main>
</body>
</html>