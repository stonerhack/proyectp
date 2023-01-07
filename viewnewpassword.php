<!DOCTYPE html>
<html>
<?php include('sesion.php'); ?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title> Update Password </title>
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

	<section id="container">  
    <h1> Update Password </h1>
    <form method="POST" action="updAdmin.php" enctype="multipart/from-data">
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
    <br>
    <label> Nuevo Password*: </label>
    <input type="password" name="txtpass" required maxlength="15" minlength="2" pattern="[a-Z ]{1,15}">
    <br>
    <input type="reset" value="Cancel" id="form_button">
    <input type="submit" value="Update" id="form_button">
    </form>

    <?php 
  ?>

</section>
</body>
</html>