<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/stylecrud.css">
</head>

<?php include('menu.php'); ?>

<body>
<section id="container">
<main>
    <form method="POST" action="updtipo.php" enctype="multipart/form-data">
        <label> FOLIO:</label>
        <input type= "text" name="txtf" required 
        maxlength="10" minlength="2" >
        <br>
        <label> NOMBRE:</label>
        <input type= "text" name="txtn" required 
        maxlength="10" minlength="2">
        <br>
        <label> DESCRIPCION:</label>
        <input type= "text" name="txtd" required 
        maxlength="30" minlength="5">
        <br>
        <input type="submit" value="Eliminar" id="form_button"> 
        <input type="submit" value="Agregar" id="form_button">
</main>
</section>
</body>
</html>