<?php include('sesion.php') ?>

<!DOCTYPE html>
<html>
<html lang="es">
<title>
    catalogo
</title>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/pruebaca.css">
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
<div class="container">
        <section class="card">
            <img src="img/sport.png" width="300px" height="300px">
            <h4>BICICLETA SPORT</h4>
            <p>Son ideales para iniciarte en la practica del ciclismo</p>
        </section>
        <section class="card">
            <img src="img/trail.png" width="300px" height="300px">
            <h4>BICICLETA TIPO TRAIL</h4>
            <p>Son bicicletas pesadas para la diversion en estado puro</p>
        </section>
        <section class="card">
            <img src="img/fat.png" width="300px" height="300px">
            <h4>BICICLETA FATBIKES</h4>
            <p>Este tipo de bicicletas son ideales para usarlas por la nieve o arena, pero tambien pueden ser sectionertidas para determinadas
                rutas por la montaña</p>
        </section>
        <section class="card">
            <img src="img/dirt.png" width="300px" height="300px">
            <h4>BICICLETA DE DIRT JUMP</h4>
            <p>Estan diseñadas para saltar y hacer "trucos, y son mas pequeñas que el resto de las bicis,
                lo que las hace muy agiles y faciles de maniobrar"</p>
        </section>
    </section>    
</body>
<footer>

</footer>
</html>
