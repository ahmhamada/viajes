<?php 

  //check if user coming from a request
  if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $user = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone =  filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
    $nationality = filter_var($_POST['nationality'], FILTER_SANITIZE_STRING);
    $startDuration = $_POST['start'];
    $endDuration = $_POST['end'];
    $message = $_POST['message'];

    $formErrors = array();

    $headers = 'Form: ' . $email . '\r\n';
    $myEmail = 'ahmedhamada_fci@yahoo.com';
    $subject = 'Contact Form';

    if(empty($formErrors)) {
      mail($myEmail,$subject,$msg,$headers)
    }


  }

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Document</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500&display=swap');
  </style>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/main.css">

  <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
  <![endif]-->
</head>

<body>
  <!-- Start Navbar -->
  <section class="custom-navbar">
    <div class="container">
      <div class="custom-navbar-wrapper">
        <a class="custom-logo" href="#"><img src="img/logoy.svg" alt="logo"></a>
        <a class="custom-link" href="https://wa.me/1119890148" target="_blank"><img src="img/whatsappLogo.svg" class="whatsapplogo" alt="">Contáctanos <span class="sr-only">(current)</span></a>
      </div>
    </div>
  </section>

  <!-- End Navbar -->

  <!-- Start Header -->
  <section class="header">
    <div class="container d-flex justify-content-end">
      <div id="headerCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#headerCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#headerCarousel" data-slide-to="1"></li>
          <li data-target="#headerCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <h2>
              Viajes Egipto
            </h2>
            <p>
              es apoyada por los mejores Hoteles, Cruceros y Transportes. Arreglaremos viajes personalizados y tours por
              día según tus intereses y preguntas ¡Te sorprenderás!
            </p>
          </div>
          <div class="carousel-item">
            <h2>
              Viajes Egipto
            </h2>
            <p>
              es apoyada por los mejores Hoteles, Cruceros y Transportes. Arreglaremos viajes personalizados y tours por
              día según tus intereses y preguntas ¡Te sorprenderás!
            </p>
          </div>
          <div class="carousel-item">
            <h2>
              Viajes Egipto
            </h2>
            <p>
              es apoyada por los mejores Hoteles, Cruceros y Transportes. Arreglaremos viajes personalizados y tours por
              día según tus intereses y preguntas ¡Te sorprenderás!
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->

  <!-- Start form section -->
  <section class="form-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="form-description">
            <h2 class="form-title">Nuevas ofertas y Mejor precios</h2>
            <h2>¡Te inspiramos a viajar a Egipto!</h2>
            <p class="note">
              Egipto es el destino ideal para mezclar entre la cultura y la diversión. Te ofrecemos los paquetes más
              vendidos al mejor precio por sus ciudades impresionantes como (El Cairo, Aswan, Luxor, Alejandría, y otros
              más) de tipo privado o en grupo, con visitas guiadas en español a las atracciones más famosas como (Las
              Pirámides, la Ciudadela, Mezquitas y Templos).
              <br>
              <br>
              <br>
              Aprovecha la oportunidad de pasar días que nunca los olvidarías. También puedes combinar tu viaje con otro
              país del Medio Oriente
            </p>
            <p class="tip">
              ¡Envíanos tu solicitud para planificar tu viaje soñado
              y prepárate para disfrutar al máximo de tus vacaciones!
            </p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="form-content">
            <form method="POST" id="myForm" action="<?php echo $_SERVER['PHP_SELF'] ?>">
              <h2>Rellena el Formulario</h2>
              <p>Te ayudamos a organizar tu viaje inolvidable <br>
                en Egipto a tu medida</p>
              <div class="form-item">
                <input type="text" name="username" id="username" placeholder="Nombre" value="<?php if(isset($user)) {echo $user;} ?>" />
                <div class="alert alert-danger custom-alert">
                  Nombre is Required
                </div>
              </div>
              <div class="form-item">
                <input type="email" name="email" id="email" placeholder="Correo electrónico"value="<?php if(isset($email)) {echo $email;} ?>" />
                <div class="alert alert-danger custom-alert">
                  Correo electronico 
                </div>
              </div>
              <div class="form-item">
                <input type="number" name="phone" id="phone" placeholder="Teléfono" value="<?php if(isset($phone)) {echo $phone;} ?>"/>
                <div class="alert alert-danger custom-alert">
                  Teléfono es requerido
                </div>
              </div>
              <div class="form-item">
                <input type="text" name="nationality" id="nationality" placeholder="Nacionalidad" value="<?php if(isset($nationality)) {echo $nationality;} ?>"/>
                <div class="alert alert-danger custom-alert">
                  Nacionalidad es requerido
                </div>
              </div>
              <div class="input-group date form-item" id="sandbox-container">
                <input type="text" class="form-control" name="start" id="start" placeholder="Fecha de llegada" value="<?php if(isset($startDuration)) {echo $startDuration;} ?>">
                <span>
                  <img src="img/8.svg" alt="">
                </span>
                <div class="alert alert-danger custom-alert">
                  Fecha de llegada es requerido
                </div>
              </div>
              <div class="input-group date form-item" id="sandbox-container">
                <input type="text" class="form-control" name="end" id="end" placeholder="Fecha de salida" value="<?php if(isset($endDuration)) {echo $endDuration;} ?>">
                <span>
                  <img src="img/8.svg" alt="">
                </span>
                <div class="alert alert-danger custom-alert">
                  Fecha de salida es requerido
                </div>
              </div>
              <div class="form-item form-counter">
                <div class="adults">
                  <span class="title">Adultos</span>
                  <div>
                  <span id="adultsMinus"> - </span>
                  <span id="adultsValue"> 0 </span>
                  <span id="adultsPlus"> + </span>
                </div>
                </div>
                <div class="adults">
                  <span class="title">Niños</span>
                  <div>
                    <span id="kidsMinus"> - </span>
                    <span id="kidsValue"> 0 </span>
                    <span id="kidsPlus"> + </span>
                  </div>
                </div>
              </div>

              <div class="form-item">
                <textarea name="message" id="message" cols="30" rows="5"
                  placeholder="Comentario (Escríbenos si quieres algo especial)" value="<?php if(isset($user)) {echo $user;} ?>"></textarea>
              </div>
              <div class="form-submit">
                <input type="submit" id="submitBtn" value="¡Planea Tu Viaje!" />
              </div>
              <h6>recibirá una llamada o correo electrónico dentro de las 24 horas</h6>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End form section -->

  <!-- Start features section -->
  <section class="features">
    <div class="container">
      <h2>Por qué Nosotros?</h2>
      <div class="row">
        <div class="col-lg-4">
          <div class="feature">
            <h3 class="feature-title">
              <img src="img/5.svg" alt="first-feature">
              <span>Hablamos<br> tu lengua</span>
            </h3>
            <p>
              Todos los tours con guía en español
              Y la reserva con agentes especializados
            </p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="feature">
            <h3 class="feature-title">
              <img src="img/6.svg" alt="second-feature">
              <span>Seguridad</span>
            </h3>
            <p>
              Tu salud es nuestra primera prioridad, Precauciones de salud
              garantizadas
            </p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="feature">
            <h3 class="feature-title">
              <img src="img/7.svg" alt="third-feature">
              <span>Mejor Servicio</span>
            </h3>
            <p>
              Mejor atención al cliente 24/7 en línea, con seguimiento con nuestro equipo.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End features section -->
  <!-- Start Recommendations section -->
  <section class="recommendations">
    <div class="container">
      <h2>More Recommendations</h2>
      <div class="row">
        <div class="col-lg-4">
          <div class="place">
            <div class="place-img first"></div>
            <h4>La Calle del Moez</h4>
            <p>Este paseo te ayuda a ver la vida real de los Egipcios Locales y a descubrir su estilo de vida con tu
              guía profesional que te asegurará que le lleve a los lugares más interesantes de Egipto.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="place">
            <div class="place-img second"></div>
            <h4>Montar en Camello</h4>
            <p>Pasea en camello en la zona de las pirámides de Giza es una de las mejores cosas que hacer. Puedes probar un Carruaje de caballo disfrutando de la sensación de la vida antigua.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="place">
            <div class="place-img third"></div>
            <h4>Especátuclo de Luz y Sonido </h4>
            <p>es uno de los mejores tours nocturnos en El Cairo que te permite explorar la historia de Egipto y sus maravillosas Pirámides. El Espectáculo Empieza de 7 pm a 8 pm.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Recommendations section -->

  <!-- Start Copyright -->
  <section class="copyright">
    <p>Copyright @2020.Viajes Egipto</p>
  </section>
  <!-- End Copyright -->


  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>