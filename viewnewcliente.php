<!DOCTYPE html>
<html>
<?php include('sesion.php'); ?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title> Renta </title>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="javascript.js"></script>
	<link rel = "stylesheet" href = "css/stylenewcli.css" type = "text/css" />
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
	<section id="container">  
    <h4> Registro </h4>
    <form method="POST" action="Addcliente.php" enctype="multipart/from-data">
    <section class="name">
        <label>Nombre Completo*:</label>
        <input type="text" name="txtnomb" required minlength="3" maxlength="60" pattern="[a-Z ]" id="name_input" >
    </section>

    <section class="email">
        <label >Primer Apellido*:</label>
        <input type="text" name="txtpriape" required maxlength="60" minlength="5" pattern="[a-Z ]{5,60}" id="primerapellido">
    </section>
    
    <section class="name">
        <label >Segundo Apellido*:</label>
        <input type="text" name="txtsegape" maxlength="60" minlength="5" pattern="[a-Z ]{5,60}" id="segundoapellido">
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <section class="submit">
      <a href="Addcliente.php"><input type="submit" value="Registrarme" id="form_button" ></a>
    </section>
    <br>
    <section class="submit">
      <input type="reset" value="Cancel" id="form_button" >
    </section>
      </form>
      <?php 
     ?>
     </section>
</body>
</html>