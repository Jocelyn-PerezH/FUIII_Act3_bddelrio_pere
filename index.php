<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>Alta de empleados</h1>
    	<input type="text" name="idempleado" placeholder="Id">
    	<input type="text" name="nombre" placeholder="Nombre">
		<input type="text" name="apellido" placeholder="Apellido">
		<input type="etext" name="ciudad" placeholder="Ciudad">
		<input type="email" name="correo" placeholder="Correo">
    	<input type="submit" name="register">
    </form>
        <?php 
        include("empleado.php");
        ?>
</body>
</html>