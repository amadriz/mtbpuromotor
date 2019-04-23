<?php
	$nombre		= $_POST['nombre'];
	$email      = $_POST['email'];
	$bday		= $_POST['bday'];
	$numCel 	= $_POST['celular'];
	$terms	    = $_POST['terms'];
	// RECAPTCHA ACCESS
    $secretKey = '6Lfy-pgUAAAAAGgx7JetBwNxsSmgfjE7Yrl6yrI1';
    $captcha = $_POST['g-recaptcha-response'];
        if(!$captcha){
          echo '<p class="alert alert-warning">Please check the the captcha form.</p>';
          exit;
    }

	
	// Para campos requeridos //
	$reqlen =strlen($nombre) * strlen($email) * strlen($email) * strlen($numCel);

	if ($reqlen > 0) {
		require ("connect_db_subscribe.php");
		//Recaptcha		//Tracks visitor ip address	
		$ip = $_SERVER['REMOTE_ADDR'];
        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
        $responseKeys = json_decode($response,true);

		if(intval($responseKeys["success"]) !== 1) {
          echo '<p class="alert alert-warning">Please check the the captcha form.</p>';
        } else {

		
		mysqli_query($link,"INSERT INTO mtbPMsubs VALUES ('$nombre','$email','$bday','$numCel','$terms')");
		$error = mysqli_use_result($link);
		if ($error == false) {
			echo '<div class="alert alert-success alert-dismissable messageBox centered" id="flash-msg">
					<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
					<h4 style="margin-top:30px">Gracias Por Suscribirte</h4>
				  </div>
			<div class="alert alert-warning alert-dismissable messageBox centered" id="flash-msg" style="margin-top: 140px;">
			<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
			<p>Unirme al grupo de Strava de MTB PuroMotor</p>
				<a class="btn btn-warning stravaBtn Aligner" href="https://www.strava.com/clubs/486723?oq=MTB%20" role="button" target="_blank">Mtb PuroMotor</a>
			</div>';
		}
		else 
		{
			echo '<div class="alert alert-danger alert-dismissable messageBox centered" id="flash-msg">
					<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
					<h4 style="margin-top:30px">Ha Ocurrido un Error</h4>
				  </div>';
		}
		mysqli_close($link);
		
	} 
	else 
	{
		echo '<div class="alert alert-danger alert-dismissable" id="flash-msg">
		<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
		<h4><i class="icon fa fa-check style="margin-top:15px; margin-left:10px; font-size: 1.5em;""></i>Por favor, rellene todos los campos requeridos.</h4>
		</div>';
	}
?>