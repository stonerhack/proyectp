<?php include('sesion.php') ?>
<!DOCTYPE html>
<!-- -->
<html>
<head>
	<title>Carrito</title>
	<link rel="stylesheet" href="css/stylecarrito.css"/>
	<meta name="description" content="Formularios" />
	<!-- para los robos de busqueda: index activado
	     noindex, se va a bloquear -->
	<meta name="robots" content="index" />
	<meta http-equiv="Content-Type" 
	content="text/html; charset=utf-8"/>
</head>

<body>

<section id="login">
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
</section> 
<br> 

<section id="container">
<?php
//si ya hizo login le mostramos el carrito

if(isset($_SESSION['carrito']) && !empty($_SESSION['carrito'])){
	//print_r($_SESSION['carrito']);
	echo '
	<table id="tabProduct">
	<tr>
	<td class="tdTitulo">Codigo</td>
	<td class="tdTitulo">Precio Hora</td>
	<td class="tdTitulo">Cantidad</td>
    <td class="tdTitulo">Importe</td>
	<td class="tdTitulo"></td>
	</tr> ';
	$total=0;
	foreach($_SESSION['carrito'] as $elemento){
		echo '<tr>';
		echo '<td>'.$elemento['Codigo'].'</td>'.
		'<td>'.number_format($elemento['preciohora']).'</td>'.
			'<td>'.$elemento['stock'].'</td>';
			$importe=$elemento['stock']*$elemento['preciohora'];
		echo '<td align="right">'.number_format($importe).'</td>';
		echo '<td><a href="borrar.php?id='.$elemento['Codigo'].'">Eliminar</a> </td>';
		echo '</tr>';
		$total=$total+$importe;
	}
	echo '<tr><td></td><td></td><td></td><td></td> <td></td>
		<td>Total</td><td>'.number_format($total).
		'</td></tr>';
	echo '</table>';
	?>
	<form method="post" action="DatosRenta.php">	
	<input type="hidden" name="total" value="<?php echo $total; ?>" />
	<center>
	<button type="submit" id="form_button">Finalizar Renta </button>
	<!--<a href="DatosRenta.php">Pagar</a>-->
	</center>
	</form>
	<?php
}
else{
	echo "Su carro esta vacio";
}
?>
</section> <!--fin principal-->

</body>
</html>