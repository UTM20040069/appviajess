<!DOCTYPE html>
<html lang="en">

<head><!--Aca comienza el head-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Reinvent Travel & Events, tour operator in Argentina. Filling the lives of those who contact us with reasons to travel. Do you want to know your? Contact us!">
    <meta name="keywords" content="Travel, Events, Incentives, Argentina">
    <meta name="author" content="Facundo Ruiz Diaz">
    <meta name="copyright" content="Reinvent Travel & Events">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Marcellus+SC&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:ital,wght@0,100;0,300;0,400;0,500;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!--Estilos personales-->
    <link rel="stylesheet" href="css/estilos.css">


    <title>Reinvent Travel & Events - Travel is living - Contact Us</title>
</head><!--Aca termina el head-->

<body><!--Aca comienza el body-->

    <header class="encabezado__estilo">
          
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
          <img class="logoNav encabezado__logo" src="imagenes/logo_reinvent_horizontal.jpeg" alt="logoReinvent">
          <button class="navbar-toggler bordeBoton" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end encabezado__barra" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item encabezado__efectoMenu">
                <a class="nav-link colorMenu" aria-current="page" href="index.html">HOME</a>
              </li>
              <li class="nav-item encabezado__efectoMenu">
                <a class="nav-link colorMenu" href="nosotros.html">ABOUT US</a>
              </li>
              <li class="nav-item encabezado__efectoMenu">
                <a class="nav-link colorMenu" href="servicios.html">SERVICES</a>
              </li>
              <li class="nav-item dropdown encabezado__efectoMenu">
                <a class="nav-link dropdown-toggle colorMenu" href="destinos.html" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  DESTINATIONS
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item encabezado__efectoMenu" href="bariloche.html">Bariloche</a></li>
                  <li><a class="dropdown-item encabezado__efectoMenu" href="buenosaires.html">Buenos Aires</a></li>
                  <li><a class="dropdown-item encabezado__efectoMenu" href="calafate.html">Calafate</a></li>
                  <li><a class="dropdown-item encabezado__efectoMenu" href="iguazufallas.html">Iguazu Falls</a></li>
                  <li><a class="dropdown-item encabezado__efectoMenu" href="mendoza.html">Mendoza</a></litml>
                  <li><a class="dropdown-item encabezado__efectoMenu" href="noa.html">NOA</a></li>
                  <li><a class="dropdown-item encabezado__efectoMenu" href="ushuaia.html">Ushuaia</a></li>
                </ul>
              </li>
              <li class="nav-item encabezado__efectoMenu">
                <a class="nav-link colorMenu" href="contacto.php" tabindex="-1">CONTACT US</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    </header><!--Aca termina el header-->

    <main><!--Aca empieza el main-->
        
      <div class="principal__centrado">
        <img src="imagenes/contacto/office4.jpg" class="img-fluid principal__imagenGrande" alt="Reinvent Travel & Events Office">
      </div>

      <div class="d-none d-md-block">
				<h2 class="principal__titulosConFondo">Dare to dream... Reinvent makes it come true</h2>
      </div>
      
      <div class="d-none d-sm-block d-md-none d-lg-none d-xl-none d-xxl-none">
				<h2 class="principal__titulosConFondo">Dare to dream... <br> Reinvent makes it come true</h2>
      </div>

      <div class="contacto__alineacion contacto__formFondo">
        <form action="addContacto.php" method="post" id="miEstilo" class="row g-3 borde__formulario">
          <div class="col-md-6">
            <label for="name" class="form-label"> <b>Name</b></label>
            <input type="text" id="name" name="name" class="form-control" >
          </div>
          <div class="col-md-6">
            <label for="lastName" class="form-label"> <b>Lastname</b></label>
            <input type="text" class="form-control" id="lastName" name="lastName">
          </div>
          <div class="col-12">
            <label for="email" class="form-label"> <b>Email</b></label>
            <input type="email" class="form-control" name="email" id="email" placeholder="1234 Main St">
          </div>
          <div class="col-12">
            <label for="address" class="form-label"> <b>Address</b></label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Apartment, studio, or floor">
          </div>
          <div class="col-md-6">
            <label for="city" class="form-label"> <b>City</b></label>
            <input type="text" class="form-control" name="city" id="city">
          </div>
          <div class="col-md-4">
            <label for="state" class="form-label"> <b>State</b></label>
            <select id="state" name="state" class="form-select">
              <option selected>Choose...</option>
              <option>Aguascalientes</option>
            </select>
          </div>
          <div class="col-md-2">
            <label for="zip" class="form-label"> <b>Zip</b></label>
            <input type="text" class="form-control" name="zip" id="zip">
          </div>
          <div class="col-12">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck">
                <b>Subscribe to Newsletter</b> 
              </label>
            </div>
          </div>
          <div class="col-12">
            <button type="submit" class="btn contacto__boton">Send</button>
          </div>
        </form>
      </div>
        
    </main><!--Aca termina el main-->

    <!----------- Aca Inicia el Footer ------------>
    <footer class="footer-bs">
      <div class="row">
        <div class="col-md-4 footer-brand animated fadeInLeft">
          <h2>Reinvent Travel & Events</h2>
          <p>Alicia Moreau de Justo 954 - Oficina 901</p>
          <p>Tel: +54 11 123 4567</p>
          <p>Email: info@reinvent-events.com</p>
        </div>
        <div class="col-md-3 footer-nav animated fadeInUp">
            <h4>Menu —</h4>
            <div class="col-md-6">
                  <ul class="pages">
                      <li><a href="index.html">Home</a></li>
                      <li><a href="nosotros.html">About Us</a></li>
                      <li><a href="servicios.html">Services</a></li>
                      <li><a href="bariloche.html">Destinations</a></li>
                      <li><a href="contacto.php">Contac Us</a></li>
                  </ul>
              </div>
            <div class="col-md-6">
                  <ul class="list">
                  <li><a href="bariloche.html">Bariloche</a></li>
                    <li><a href="buenosaires.html">Buenos Aires</a></li>
                    <li><a href="calafate.html">Calafate</a></li>
                    <li><a href="iguazufalls.html">Iguazu Falls</a></li>
                    <li><a href="mendoza.html">Mendoza</a></li>
                    <li><a href="noa.html">NOA</a></li>
                    <li><a href="ushuaia.html">Ushuaia</a></li>
                  </ul>
              </div>
          </div>
        <div class="col-md-2 footer-social animated fadeInDown">
            <h4>Follow Us</h4>
            <ul>
                <li><a href="www.facebook.com">Facebook</a></li>
                <li><a href="www.twitter.com">Twitter</a></li>
                <li><a href="www.instagram.com">Instagram</a></li>
                <li><a href="www.linkedin.com">LinkedIn</a></li>
              </ul>
          </div>
        <div class="col-md-3 footer-ns animated fadeInRight">
            <h4>Newsletter</h4>
              <p>Subscribe to our newsletter and find out about all the news!</p>
              <p>
                <div class="input-group">
                  <input type="email" class="form-control" placeholder="Email...">
                  <button type="button" class="btn btn-light">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                      <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
                    </svg>
                  </button>  
                </div><!-- /input-group -->
              </p>
          </div>
      </div>
    </footer>
    <!--Aca termina el footer-->



    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    
    <!--Animations-->
    <script src="js/wow.min.js"></script>
		<script>
			new WOW().init();
		</script>


</body>

</html>