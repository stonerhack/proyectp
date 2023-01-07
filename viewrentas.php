<!DOCTYPE html>
<html>
<?php include('sesion.php'); ?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title> Lista de rentas </title>
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
      <?php
      include('RentasModel.php');
      $myRentas= new RentasModel();
      $dataset;

    echo '<br>';
    echo '<br>';
      echo '<a href="consultarentas.php"><input type="button" value="Regresar" id="form_button"></a>';

      if(!empty($_POST["txtid"])){
        echo  "<h1> Rentas por usuario</h1>";

        $dataset = $myRentas->getRentasPorUsuario($_POST["txtid"]);
      } else {
        echo  "<h1> Todas las rentas</h1>";

        $dataset = $myRentas->getRentasConUsuario();
      }

      if(mysqli_num_rows($dataset) == 0){
        echo "No existen registros con ese usuario";
      } else {
        echo '<table id="data">';
        echo "<tr>";
        echo "<th>Nombre</th>";
        echo "<th>FECHA</th>";
        echo "<th>HORA</th>";
        echo "<th>TIEMPO</th>";
        echo "<th>MONTO</th>";
        echo "<th>CANTIDAD BICI</th>";
        echo "</tr>";
      while($fila=mysqli_fetch_assoc($dataset)){
        echo "<tr>";
        echo '<td>'.$fila['NOMBRE'].'</td>';
        echo '<td>'.$fila['FECHA'].'</td>';
        echo '<td>'.$fila['HORA'].'</td>';
        echo '<td>'.$fila['TIEMPO'].'</td>';
        echo '<td>'.$fila['MONTO'].'</td>';
        echo '<td>'.$fila['CANTIDAD_BICI'].'</td>';
        if(intval( $fila['CANTIDAD_BICI'] ) > 0){
            echo '<td><a href="viewrentadetalle.php?id='. $fila['FOLIO'] .'&name='.$fila['NOMBRE']. '&monto='.$fila['MONTO'].'"><input type="button" value="Ver" id="form_button"></a></td>';
        }
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