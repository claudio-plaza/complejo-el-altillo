<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Neumo Home respiratory care | Systema |</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" href="images/icono.png">

    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <!--<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700" rel="stylesheet">
     <! Favicon -->
    <link rel="icon" href="images/jkarefavicon.png">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/RESPONSIVE.CSS">
    <script src="js/jquery.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html"><span><img src="images/nhl.png" class="logo"></span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="index.html" class="nav-link">Inicio</a></li>
            <li class="nav-item"><a href="about.html" class="nav-link">Acerca</a></li>
            <li class="nav-item"><a href="services.html" class="nav-link" >Servicios</a></li>
            <li class="nav-item"><a href="staff.html" class="nav-link">Personal</a></li>
            <li class="nav-item"><a href="sistema.php" class="nav-link">Sistema</a></li>

           <!--<li class="nav-item cta"><a href="contact.html" class="nav-link" data-toggle="modal" data-target="#modalRequest"><span>Make an Appointment</span></a></li>-->
          </ul>
        </div>
      </div>
    </nav>

    <!-- END nav -->

    <section class="home-slider owl-carousel">
      <div class="slider-item bread-item" style="background-image: url('images/portadasistemas.png');background-size: cover;" data-stellar-background-ratio="0.5">
        <div class="container" data-scrollax-parent="true">
          <div class="row slider-text align-items-end">
            <div class="col-md-7 col-sm-12 ftco-animate mb-5">
            </div>
          </div>
        </div>
      </div>
    </section>



	    <!-- aca empiesa el sistema -->

      <section class="ftco-section contact-section ftco-degree-bg">
        <div class="container">
          <div class="row d-flex mb-5 contact-info">
            <div class="col-md-12 mb-4">


              <h2 class="h4">Inicio al sistema</h2>
  			  		<?php	if(isset($_GET["error"])) {
  				echo "<p class='error'>" . $_GET["error"] . "</p>";
  			}
  ?>


            </div>
            <div class="w-100"></div>
            <div class="col-md-3">
            <form action="https://system.neumohome.com/doc/login.php" method="post"  name="apass1">
  				<input type="text" class="form-control" name="usuario" placeholder="Usuario" required>
  				<input type="hidden"  name="sitio" value="nhmedica.com">
  				<input type="password" class="form-control" name="Password1" placeholder="Password" required>


            </div>
            <div class="col-md-3">
  			  			<button type="submit" name="enviar" class="btn btn-default">Portal profesional</button>
  			  		</form>

            </div>
            <div class="col-md-3">
  		<form action="https://system.neumohome.com/pacientes/login.php" method="post"  name="apass2">
  				<input type="text" class="form-control" name="usuario2" placeholder="DNI" required>
  				<input type="hidden"  name="sitio" value="nhmedica.com">
  				<input type="password" class="form-control" name="password2" placeholder="Password" required>
  			</div>
            <div class="col-md-3">
  				<button type="submit" name="enviar2" class="btn btn-default">Portal paciente</button>
  		</form></div>
          </div>
          <div class="row">
          </div>
        </div>
      </section>
    </section>
    <section class="home-slider owl-carousel">
      <div>
        <div class="row">
          <div class="col-md-12">
            <div class="thumbnail">
              <a href="images/betterair.png">
                <img src="images/betterair.png">
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer class="ftco-footer ftco-bg-dark ftco-section">
          <div class="container-footer">
            <div class="row mb-3">
              <div class="col-md-4">
                <div class="ftco-footer-widget mb-4">
                  <h2 class="ftco-heading-2"><img src="images/nhl.png" class="logo"></h2>
                </div>
              </div>
              <div class="col-md-2">
                <div class="ftco-footer-widget mb-4">
                  <ul class="list-unstyled">
                    <li><a href="index.html" class="py-2 d-block">Inicio</a></li>
                    <li><a href="about.html" class="py-2 d-block">Acerca</a></li>
                    <li><a href="services.html" class="py-2 d-block">Servicios</a></li>
                    <li><a href="staff.html" class="py-2 d-block">Personal</a></li>
                    <li><a href="sistema.php" class="py-2 d-block">Sistema</a></li>

                  </ul>
                </div>
              </div>
              <div class="col-md-6" >
                <div class="container-footer">
                  <div class="block-23 mb-3">
                    <ul class="ftco-footer-social list-unstyled float-md-rights float-lft "id="redes">
                      <a href="https://www.facebook.com/neumohome.rehabilitacionrespiratoria/"><img src="images/face.png" alt=""width="180"></a>
                      <a href="https://www.instagram.com/neumohome_mza/"><img src="images/insta.png" alt=""width="180"></a>
                    </ul>
                    <ul>
                      <a href="https://wa.me/5492617191318"><img src="images/iconowhatsapp.png" alt="" width="30"><span>  261 719-1318   </span><hr></a><a href="mailto:info@neumohome.com"><img src="images/correo.png" alt="" width="20"> <span>  info@neumohome.com</span></a>
                    </ul>
                    <ul>
                      <ul><img src="images/iconodireccion.png" alt="" width="30" ><span id="color">Vieytes 36, Primer piso, Godoy Cruz, Mendoza, CP 5501</span></ul>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 text-center">
                <p><a>Copyright &copy; 2022 All rights reserved |  Developed by ©Over all</a> </p>
              </div>
            </div>
          </div>
        </footer>


    <!-- aca termina el sistema -->
 <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="js/main.js"></script>

<script src="js/core.min.js"></script>
<script src="js/md5.js"></script>

  </body>
</html>
