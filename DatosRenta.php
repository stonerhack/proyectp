<!DOCTYPE html>
<html>
<?php include('sesion.php'); ?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title> Renta </title>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="javascript.js"></script>
	<link rel = "stylesheet" href = "css/styledatosrent.css" type = "text/css" />
</head>
<body>
	<header>
	</header>
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
    <form method="POST" action="AddRentas.php" enctype="multipart/from-data">
    <section class="name">
        <label> Horas de la renta*: </label>
        <input type="text" name="txthr" required maxlength="2" minlength="1" pattern="[0-9]*">
    </section>
    <br>
    <section class="email">
        <label> Fecha de la renta*: </label>
        <input type="date" name="txtfech" required maxlength="2023-11-24" minlength="2023-11-24">
    </section>
    <br>
    <section class="name">
        <label> Hora*: </label>
        <input type="time" name="txthora" required maxlength="21:00:00" minlength="10:00:00">
    </section>
    <br>
    <section class="email">
        <label> Eco-Numero*: </label>
        <input type="text" name="txtnumc" required minlength="1" maxlength="3" pattern="[0-9]*">
    </section>
    <br>
    <section class="name">
        <label> Nombre Completo*: </label>
        <input type="text" name="txtnomb" required minlength="3" maxlength="60" pattern="[a-Z ]">
    </section>
    <br>
    <section class="email">
        <label> Primer Apellido*: </label>
        <input type="text" name="txtpriape" required maxlength="60" minlength="5" pattern="[a-Z ]{5,60}">
    </section>
    <br>
    <section class="name">
        <label> Segundo Apellido : </label>
        <input type="text" name="txtsegape" maxlength="60" minlength="5" pattern="[a-Z ]{5,60}">
    </section>
    <br>
    <section class="email">
        <label> Numero Tarjeta*: </label>
        <input type="password" name="txtnumtar" required maxlength="16" minlength="16" pattern="[0-9]*">
    </section>
    <br>
    <section class="name">
        <label> Fecha Vencimiento*: </label>
        <input type="text" name="txtfecv" required maxlength="6" minlength="5" pattern="[0-9]*">
    </section>
    <br>
    <section class="email">
        <label> Numero Telefono*: </label>
        <input type="text" name="txtnumt" required maxlength="10" minlength="10" pattern="[0-9]*">        </section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
        <input type="reset" value="Cancel" id="form_button">
        <input type="submit" value="Enviar" id="form_button"></a>
      </form>
      <?php 
     ?>
</section>
</body>
</html>