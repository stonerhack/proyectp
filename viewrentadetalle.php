<!DOCTYPE html>
<html>
<?php include('sesion.php'); ?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title> Detalle Renta </title>
  <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="javascript.js"></script>
	<link rel = "stylesheet" href = "css/stylerenta.css" type = "text/css" />

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
	<section id ="container">  
    <h1> Detalle Renta </h1>
      <?php
      include('RentasModel.php');
      $myRentas= new RentasModel();
      $dataset;
      $id;
      $nombre;
      $monto;

      echo '<a href="viewrentas.php"><input type="button" value="Regresar" id="form_button"></a>';

      if(!empty(trim($_GET["id"])) && !empty($_GET["name"]) && !empty($_GET["monto"])){
          $id = $_GET["id"];
          $nombre = $_GET["name"];
          $monto = $_GET["monto"];
        //   echo $id;
        echo "<h4>CLIENTE: ". $nombre."</h4>";
        echo "<h4>MONTO TOTAL: $". $monto."</h4>";
        $dataset = $myRentas->getDetalleRenta($id);
        //   $dataset = $myRentas->getRentasPorUsuario($_POST["txtid"]);
      }
    //   if(!empty($_POST["txtid"])){
    //     $dataset = $myRentas->getRentasPorUsuario($_POST["txtid"]);
    //   } else {
    //     $dataset = $myRentas->getRentasConUsuario();
    //   }

      if(mysqli_num_rows($dataset) == 0){
        echo "No existen registros con ese usuario";
      } else {
        echo '<table id="data">';
        echo "<tr>";
        echo "<th>CODIGO</th>";
        echo "<th>NOMBRE BICI</th>";
        echo "<th>CANTIDAD</th>";
        echo "<th>IMPORTE</th>";
        echo "</tr>";
      while($fila=mysqli_fetch_assoc($dataset)){
        echo "<tr>";
        echo '<td>'.$fila['Codigo'].'</td>';
        echo '<td>'.$fila['NOMBRE'].'</td>';
        echo '<td>'.$fila['CANTIDAD'].'</td>';
        echo '<td>'.$fila['IMPORTE'].'</td>';
        echo "</tr>";
          }
          echo "</table>";
      }
   ?>
</main>


<script>
     $(document).ready(function(){
        $('#data').after('<div id="nav" style="margin-top: 1rem;"></div>');
        var rowsShown = 10;
        var rowsTotal = $('#data tbody tr').length;
        var numPages = rowsTotal/rowsShown;
        for(i = 0;i < numPages;i++) {
            var pageNum = i + 1;
            $('#nav').append('<a href="#" rel="'+i+'"><input type="button" value="'+pageNum+'" id="form_button"></a> ');
        }
        $('#data tbody tr').hide();
        $('#data tbody tr').slice(0, rowsShown).show();
        $('#nav a:first').addClass('active');
        $('#nav a').bind('click', function(){

            $('#nav a').removeClass('active');
            $(this).addClass('active');
            var currPage = $(this).attr('rel');
            var startItem = currPage * rowsShown;
            var endItem = startItem + rowsShown;
            $('#data tbody tr').css('opacity','0.0').hide().slice(startItem, endItem).
                    css('display','table-row').animate({opacity:1}, 300);
        });
    });
</script>
</section>
</body>
</html>