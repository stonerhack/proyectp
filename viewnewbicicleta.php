<!DOCTYPE html>
<html>
<?php include('sesion.php'); ?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title> Agregar Bicicleta </title>
	<link rel = "stylesheet" href = "css/stylenewesta.css" type = "text/css" />
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
    <h1> New Bicicleta </h1>
    <form method="POST" action="addBici.php" enctype="multipart/from-data">
    <label> Codigo*: </label>
    <input type="text" name="txtcod" required minlength="5" maxlength="5" pattern="[0-9]{A-Z}">
    <br>
    <label> Descripcion*: </label>
    <input type="text" name="txtdescrip" required maxlength="250" minlength="40" pattern="[a-Z ,.] {1,15}">
    <br>
    <label> Stock*: </label>
    <input type="text" name="txtstock" required maxlength="3" minlength="1" pattern="[0-9]*">
    <br>
    <label> Color*: </label>
    <input type="text" name="txtcolor" required maxlength="15" minlength="4" pattern="[a-Z]">
    <br>
    <label> Precio Hora*: </label>
    <input type="text" name="txtprecio" required maxlength="3" minlength="2" pattern="[0-9]*">
    <br>
    <label> Tipo Bicicleta*: </label>
    <select name="TB">
    <option> 132S </option>
    <option> 183U </option>
    <option> 229M </option>
    <option> 250M </option>
    <option> 328M </option>
    <option> 569M </option>
    <option> 695U </option>
    <?php
    /*
    include_once('Tipo_Bici.php');
    $mytipobici= new Tipo_Bici();
    $dataset = $mytipobici->GetAllTipoB();
    ?>
    <?php
    while($datos = mysqli_fetch_array($dataset))
    {
        ?>
        <option  value="<?php echo $datos['FOLIO']?>"><?php echo $datos['FOLIO'] ?> </option>
    <?php
    }
    */
    ?>
    <br>
    </select>
    <label> Establecimiento*: </label>
    <select name="Establecimiento">
    <?php
    include_once('Establecimiento.php');
    $myEstabl= new Establecimiento();
    $dataset = $myEstabl->GetAllE();
    ?>
    <?php
    while($datos = mysqli_fetch_array($dataset))
    {
        ?>
        <option  value="<?php echo $datos['Codigo']?>"><?php echo $datos['Codigo'] ?> </option>
    <?php
    }
    ?>
    </select>
    <input type="reset" value="Cancel" id="form_button">
    <input type="submit" value="Agregar" id="form_button">
    </form>
    <?php 
  ?>
  </section>
</body>
</html>