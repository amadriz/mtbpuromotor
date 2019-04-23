<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MTB Puromotor Suscripción</title>
    <!-- CSS -->
    <link href="misEstilos.css" rel="stylesheet" type="text/css" media="screen">
    <!-- BOOTSTRAP 4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- Validation Jquery -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.js"></script>
    <!-- RECAPTCHA -->
    <script src='https://www.google.com/recaptcha/api.js'></script>

</head>

<body class="bgSubs">

    <!-- SECCION CONTACTO -->
    <div class="col-md-12">
        <h1 class="text-center p-3 mt-3" id="contacto" style="color: #ffffff">Formulario de suscripción</h1>
        
    </div>
    <div class="container">
        <div class="row">
            <p class="p-4" style="color: #ffffff; font-size: 1.1em;">Si usted desea recibir información de los eventos de MTB que estaremos cubriendo, por favor completar la información en el siguiente formulario</p>
            <br>
            <div class="col-md-12 mb-5">
                <h3 class="mb-4"></h3>
                <form name="sentMessage" id="registro" method="post" class="formCont formStyle">
                    <div class="form-group mt-2">
                        <label class="whiteTxt" for="Nombre">Nombre Completo</label>
                        <input type="text" class="form-control" required="required" name="nombre" placeholder="Ingrese su nombre completo">
                    </div>
                    <div class="form-group mt-2">
                        <label class="whiteTxt" for="Nombre">Fecha de Nacimiento</label>
                        <input type="date" class="form-control" required="required" name="bday" placeholder="Ingrese su fecha de nacimiento">
                    </div>
                    <div class="form-group">
                        <label class="whiteTxt" for="Email">Email</label>
                        <input id="email" type="email" class="form-control" required="required" name="email" placeholder="nombre@ejemplo.com">
                    </div>
                    <div class="form-group">
                        <label class="whiteTxt" for="formGroupExampleInput">Número de contacto</label>
                        <input type="number" class="form-control" placeholder="Número Celular" name="celular" required data-validation-required-message="Por favor ingrese su número celular">
                    </div>
                    <div class="row control-group">
                       <div class="form-group col-xs-12  p-3 whiteTxt">
                          <input  type="checkbox" name="terms" value='si'> Acepto recibir a mi correo y mi celular información de la marca
                          <span>*</span>
                        </div>
                            <div class="col-12 form-group">
                                <div class="g-recaptcha" data-sitekey="6Lfy-pgUAAAAALyyqnOj3aTQfHsLK3pR7d2Uzwej"></div>
                            </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="form-group col-xs-12 mx-auto">
                            <button type="submit" name="submit" class="btn btn-lg btn-danger">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- SCRIPTS -->
    	<script>
        /* SE UTILIZA EL MISMO NOMBRE QUE NAME DEL FORM COMO ID */
		$("#registro").validate({
			rules: {
				lastname: "required",
				nombre: {
					required: true,
					minlength: 5
				},
				email: {
					required: true,
					email: true,
                    remote: "check-email.php",
                    type: "post"
				},
                celular: {
					required: true,
					minlength: 8
				},
                
			},
			messages: {
				nombre: "Por favor ingrese su nombre completo",
				email: {
                    required: "Por favor ingrese una dirección de email válida",
                    remote: "El email ya fue registrado"
                    },
				celular: {
					required: "Por favor ingrese un número de contacto",
					minlength: "Por favor ingrese un número de contacto válido"
				},
                bday:"Por favor ingrese su fecha de nacimiento",
			}
		});
	</script>
    <script src="customJs.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <?php    
        if(isset($_POST['submit'])){
            require("registroSuscripcion.php");
        }
?>
</body>

</html>