<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && 
        strlen($_POST['numero']) >= 1 && 
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['direccion']) >= 1) {

        
	    $name = trim($_POST['name']);
        $numero = trim($_POST['numero']);
	    $email = trim($_POST['email']);
        $direccion = trim($_POST['direccion']);
	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO `datos`(nombre, email, celular, dirección, fecha_reg) VALUES ('$name','$numero','$email','$direccion','$fechareg')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has suscrito correctamente!</h3>
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