<?php
	$nombre		= $_POST['nombre'];
	$email      = $_POST['email'];
	$numCel 	= $_POST['celular'];
	$mensaje	= $_POST['mensaje'];
	
	// Para campos requeridos //
	$reqlen =strlen($nombre) * strlen($email) * strlen($numCel) * strlen($mensaje);

	if ($reqlen > 0) {
		
		require ("connect_db.php");
		mysqli_query($link,"INSERT INTO mtbpuromotor VALUES('$nombre','$email','$numCel','$mensaje')");
		$error = mysqli_use_result($link);
		if ($error == false) {
			echo '<div class="alert alert-success alert-dismissable messageBox centered" id="flash-msg">
					<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
					<h4 style="padding:35px">Mensaje enviado</h4>
				  </div>';
		$email_subject = "MTB Puromotor Contacto enviado por:  $nombre";	
		$email_body = "Detalle del contacto:\nNombre: $nombre \nCelular:$numCel ".
					  "Email: $email\n\n Mensaje: $mensaje";
		$to = "<info@mtbpuromotor.com>"; // <– replace with your address here
   		$subject = $email_subject;
   		$message = $email_body;
   		$from = "<info@mtbpuromotor.com>";
   		$headers = "From:" . $from;
   		mail($to,$subject,$message,$headers);
		}
		else 
		{
			echo '<div class="alert alert-danger alert-dismissable messageBox centered" id="flash-msg">
					<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
					<h4 style="padding:35px">Ha ocurrido un error</h4>
				  </div>';
		}
		mysqli_close($link);
		
	} 
	else 
	{
		echo '<div class="alert alert-danger alert-dismissable" id="flash-msg">
		<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
		<h4><i class="icon fa fa-check"></i>Por favor, rellene todos los campos requeridos.</h4>
		</div>';
	}
?>