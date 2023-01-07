<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/stylecrud.css">
</head>

<?php include('menu.php'); ?>
<body>
<main>
    <h1> Tipos de bicicletas </h1>
	<section id="container">

    <?php
    include ('tipo.php');
    $myTipo = new Tipo();
    $dataset = $myTipo->getAlltipo();
    if ($dataset!= 'vacio'){
            while($fila=mysqli_fetch_assoc($dataset)){
                echo "<br>";
                foreach($fila as $posicion => $resultado)
                {
                    $var = 'sty'.substr($posicion,0,3);
                    echo '<td id="'.$var.'">';
                    echo "<br>";
                    echo $resultado;
                }
            }
        }
    else{
        echo "no funciono compadre";
    }
    ?>
</main>
</section>
</body>
</html>