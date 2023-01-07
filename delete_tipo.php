<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/stylecrud.css">
</head>

<?php include('menu.php'); ?>
<html>
<body>
    <section id="container">
    <form method="POST" action="delete.php" enctype="multipart/form-data">
        <label> FOLIO*:</label>
        <input type= "text" name="txtf" maxlength="10" minlength="2" >
       <br>
        <input type="submit" name="enviar" value="Eliminar" id="form_button">
</form>
</section>
</body>
</html>