<?php 

include("con_db.php");

if (isset($_POST['empleado'])) {
    if (strlen($_POST['idempleado']) >= 1 && 
	strlen($_POST['nombre']) >= 1 && 
	strlen($_POST['apellido']) >= 1 &&
	strlen($_POST['ciudad']) >= 1 &&
	strlen($_POST['correo']) >= 1) {

	    $idempleado = trim($_POST['idempleado']);
	    $nombre = trim($_POST['nombre']);
	    $apellido = trim($_POST['apellido']);
		$ciudad = trim($_POST['ciudad']);
		$correo = trim($_POST['correo']);

	    $consulta = "INSERT INTO empleado (idempleado, nombre, apellido, ciudad, correo) VALUES ('$idempleado','$nombre,'$apellido,'$ciudad,'$correo)";

	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>