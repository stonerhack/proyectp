<!DOCTYPE html>
<html>
<?php include('sesion.php'); ?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title> Renta </title>
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="javascript.js"></script>
	<link rel = "stylesheet" href = "css/stylerenta.css" type = "text/css" />
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
    <h1> Renta </h1>
    <section class="subject">
        <form method="POST" action="viewbicixestabl.php" enctype="multipart/from-data" id="">
        <select name="Establecimiento">
        <option disabled hidden selected> Establecimiento en que quiere realizar la busqueda*: </option>
        <?php
        include_once('Establecimiento.php');
        $myEstable= new Establecimiento();
        $dataset = $myEstable->GetAllE();
        ?>
        <?php
        while($datos = mysqli_fetch_array($dataset))
        {
        ?>
        <option value="<?php echo $datos['Codigo']?>"><?php echo $datos['NOMBRE']?></option>
        <?php
        }
        ?>
        </select>
    </section>
    <br>
    <br>
    <br>
      <input type="button" value="Página anterior" onClick="history.go(-1);" id="form_button">
      <a href="viewbicixestabl.php"><input type="submit" value="Siguiente" id="form_button"></a>
      <input type="reset" value="Cancel" id="form_button">
      </form>
      <?php 
     ?>
      </section>
</body>
</html>