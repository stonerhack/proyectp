<!DOCTYPE html>
<html>
<?php include('sesion.php'); ?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title> Agregar Establecimiento </title>
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
    <h1> Nuevo Establecimiento </h1>
    <form method="POST" action="AddEstablec.php" enctype="multipart/from-data">
    <label> Codigo Establecimiento*: </label>
    <input type="text" name="txtesta" required minlength="5" maxlength="5" pattern="[0-9]{A-Z}">
    <br>
    <label> Nombre Establecimiento*: </label>
    <input type="text" name="txtnomest" required maxlength="30" minlength="5" pattern="[a-Z ]{5,30}">
    <br>
    <label> Colonia*: </label>
    <input type="text" name="txtcolonia" required maxlength="50" minlength="5" pattern="[a-Z ]">
    <br>
    <label> Calle*: </label>
    <input type="text" name="txtcalle" required maxlength="50" minlength="4" pattern="[a-Z]">
    <br>
    <label> Numero*: </label>
    <input type="text" name="txtnumero" required maxlength="11" minlength="1" pattern="[0-9]*">
    <br>
    </select>
    <label> Numero Empleado*: </label>
    <select name="Numemp">
    <?php
    include('Admin.php');
    $myAdmi= new Admin();
    $dataset = $myAdmi->GetAllAdminDB();
    ?>
    <?php
    while($datos = mysqli_fetch_array($dataset))
    {
        ?>
        <option value="<?php echo $datos['NUMEMPLEADO']?>"> <?php echo $datos['NUMEMPLEADO'] ?> </option>
    <?php
    }
    ?>
    <br>
    </select>
    <input type="reset" value="Cancel" id="form_button">
    <input type="submit" value="Agregar" id="form_button">
    </form>
    <?php 
  ?>
  </section>

</body>
</html>

