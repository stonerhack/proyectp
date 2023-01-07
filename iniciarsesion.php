<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title> Add Actor</title>
	<link rel = "stylesheet" href = "css/formularios.css" type = "text/css" />
</head>
<body>

<section id="container">
	<section class = "iniciarsesion"></section>
    <h1> Iniciar Sesion </h1>
    <form method="POST" action="login.php" enctype="multipart/from-data">
    <section class="name">
        <label> Email*:</label>
        <input type="email" name="txtcorreo" required maxlength="30" minlength="2">
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <section class="name">
        <label> Password*:</label>
        <input type="password" name="txtpassw" required maxlength="30" minlength="2">
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <section class="submit">
        <input type="submit" value="Accept" id="form_button">
    </section>
    <br>
    <section class="submit">
        <input type="reset" value="Cancel" id="form_button">
    </section>
    </form>
</section>
</body>
</html>