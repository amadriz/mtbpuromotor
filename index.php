<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MTB PuroMotor</title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-133571103-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-133571103-1');
    </script>
    <!-- CSS -->
    <link href="misEstilos.css" rel="stylesheet" type="text/css" media="screen">
    <!-- BOOTSTRAP 4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- SMOOTH SCROLL BEHAVIOR -->
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
    <!-- Validation Jquery -->
	<script type="text/javascript" src="http://code.jquery.com/jquery-2.0.0.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.js"></script>
    

</head>

<body>
    <!-- MENU PRINCIPAL -->
    <?php 
    
    include ('mainMenu.html');

    ?>
    <!-- SLIDER -->
    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="3000">
                <img src="img/slider1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-interval="3000">
                <img src="img/slider2.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <div class="row">
            <a href="subscribe.php" target="_blank" class="btn btn-lg btn-danger btn-block subsBtn">¡Suscribete!</a>
        </div>
    </div>
    <!-- SLIDER -->
    <!-- SECCION NOSOTROS -->
    <section>
        <div class="container-fluid">
            <div class="row mt-5 p-4" id="about">
                <div class="col-md-12 slide-section">
                    <h1 class="text-center">QUIENES SOMOS</h1>
                </div>
                <div class="col-md-6 aboutPic">
                    <img src="img/ejemplo.jpg" class="img-fluid" alt="Quienes Somos">
                </div>
                <div class="col-md-6 p-5 text-justify">
                    <h5>
                        Si usted ya probó el MTB o ciclismo de aventura posiblemente le pasó lo mismo que a nosotros... ¡Nos encantó! Y por esto es que, sumando la experiencia de Puro Motor en medios desde el año 2007, decidimos sumarnos a esta disciplina, con el propósito inicial
                        de registrar los mejores eventos de MTB del año para compartírselos en nuestras galerías de fotos.
                    </h5>
                    <h2 class="text-center mt-5 robItalic">¡NOS VEMOS EN LA RUTA!</h2>
                </div>
            </div>
    </section>
    <hr>
    <!-- SECCION STRAVA -->
    <section>
        <div class="row mt-5 p-4" id="about">
            <div class="col-md-12 mb-4 stravaImg">
                <img src="img/stravaLogo.png" alt="strava" class="img-fluid ">
            </div>
            <div class="col-md-12 p-4">
                <h5 class=" stravatxt text-center">¿A quién no le gusta medirse? Por eso más de uno usa STRAVA. Decidimos crear el grupo llamado ¨MTB Puro Motor¨, en donde estaremos realizando dinámicas y retos con los miembros del grupo. ¡Unase!</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 p-4 stravaImg">
                <img src="img/stravaSec.gif" alt="Strava MTB PuroMotor" class="img-fluid ">
            </div>
            <div class="col-md-6 stravaBg text-center">
                <div class="mb-4">
                    <iframe class="stravaWidget" allowtransparency frameborder='0' scrolling='yes' src='https://www.strava.com/clubs/486723/latest-rides/ab35fab20891d7cd9789561a9d3c8b79391cad75?show_rides=false'></iframe>
                </div>
                <a class="btn btn-lg btn-warning stravaBtn Aligner" href="https://www.strava.com/clubs/486723?oq=MTB%20" role="button" target="_blank">Unirse al grupo</a>
            </div>
        </div>
    </section>
    <hr style="margin-top:60px">
    <!-- SECCION CONTACTO -->
    <section >
        <div class="col-md-12">
            <h1 class="text-center p-3 mt-3" id="contacto">CONTACTENOS</h1>
            <br>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 mb-5">
                    <h3 class="mb-4">Formulario de contacto</h3>
                    <form name="sentMessage" id="contactForm" method="post" class="formCont">
                        <div class="form-group">
                            <label for="Nombre">Nombre Completo</label>
                            <input type="text" class="form-control" required="required" name="nombre" placeholder="Ingrese su nombre completo">
                        </div>
                        <div class="form-group">
                            <label for="Email">Email</label>
                            <input type="email" class="form-control" required="required" name="email" placeholder="nombre@ejemplo.com">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Número de contacto</label>
                            <input type="number" class="form-control" placeholder="Número Celular" name="celular" required data-validation-required-message="Por favor ingrese su número celular">
                        </div>
                        <div class="form-group">
                            <label for="Mensaje">Mensaje</label>
                            <textarea class="form-control" required="required" name="mensaje" rows="3"></textarea>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-12 mx-auto">
                                <button type="submit" name="submit" class="btn btn-lg btn-danger">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <h3 class="mb-4">Información de contacto</h3>
                    <p>En caso que tenga preguntas, sugerencias valiosas o quiere consultar por nuestro plan de medios, por favor envíenos un mensaje <a href="mailto:info@grupopuromotor.com">info@grupopuromotor.com</a></p>
                    <h5><strong>Dirección:</strong></h5>
                    <p>Edificio Super Salon, división Puro Motor, San Jose, Costa Rica. 200 Sur de la Iglesia de Maria Reina en Pavas.</p>
                    <p><i class="fas fa-phone"></i> Teléfono: +506 2210-0400</p>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Container Fluid -->
    <!-- Footer -->
    <div class="p-3 mb-2 bg-dark text-white text-center"><i class="far fa-registered"></i> Derechos Reservados Grupo Moreno División PuroMotor </div>
    <!-- SCRIPTS -->
        <!--must need plugin jquery-->
            <script src="js/jquery.min.js"></script>
        <!-- Open Modal on window load -->
        <script>
        
        // Esta funcion para mostrar el popup solo una vez

        $(document).ready(function() {
            var firstSite = sessionStorage['firstSite'];
            if (!firstSite) { // or firstSite != "visited"

        // some code here if the user is new to the site
        $('#memberModal').modal('show');

        sessionStorage['firstSite'] = "visited";
        }
        });
        </script>


    	<script>
		$("#signupForm").validate({
			rules: {
				firstname: "required",
				lastname: "required",
				username: {
					required: true,
					minlength: 2
				},
				password: {
					required: true,
					minlength: 3
				},
				confirm_password: {
					required: true,
					minlength: 3,
					equalTo: "#password"
				},
				email: {
					required: true,
					email: true
				},
				agree: "required"
			},
			messages: {
				firstname: "Please enter your firstname",
				lastname: "Please enter your lastname",
				username: {
					required: "Please enter a username",
					minlength: "Your username must consist of at least 2 characters"
				},
				password: {
					required: "Por favor ingrese una contraseña",
					minlength: "Su contraseña debe de tener 5 caracteres"
				},
				confirm_password: {
					required: "Por favor ingrese una contraseña",
					minlength: "Su contraseña debe de tener 5 caracteres",
					equalTo: "Por favor escriba la misma contraseña"
				}
			}
		});
	</script>
    <script src="customJs.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <!-- PHP SUBMIT FORM -->
    <?php    
 if(isset($_POST['submit'])){
   require("registroConMensaje.php");
     }
?>
</body>
<div class="modal fade" id="memberModal" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                 <h4 class="modal-title" id="memberModalLabel"></h4>

            </div>
            <div class="modal-body">
            <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/328711766?autoplay=1" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
            <p><a href="https://vimeo.com/328711766">Las Miguelinas Costa Rica 2019</a> from <a href="https://vimeo.com/user21332363">PM PRODUCCIONES</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>


</html>