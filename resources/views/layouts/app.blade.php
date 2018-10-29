<!doctype html>
<html lang="{{ app()->getlocale() }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

    <!-- Main Styles -->
    <link rel="stylesheet" href="css/mariatharp.css">

    <title>MariTharp - @yield('title')</title>
  </head>
  <body>
    <!-- Header -->
    <header class="header sticky-top">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="#">
            <img src="images/assets/logo-mariatharp-4.svg" width="180" alt="Maria Tharp">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Sobre mí <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Compra una casa
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ url('casa-en-venta/505-maple') }}">505 Maple</a>
                  <a class="dropdown-item" href="{{ url('casa-en-venta/1393-sutters-walk') }}">1393 Sutters Walk</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ url('/requiero-credito') }}">Requiero crédito</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
              </li>
            </ul>
            {{-- <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Encuentra una casa" aria-label="Buscar">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form> --}}
          </div>
        </nav>
      </div>
      
    </header>
    <!-- /Header -->

    <!-- Carousel Slides -->
    <div id="carouselImages" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="images/assets/maple/maple-01.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/assets/maple/maple-02.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/assets/maple/maple-03.jpg" alt="Third slide">
          </div>
        <div class="overlay">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-md-6 offset-md-6 text-center text-md-right">
                  <h1>La casa de tus sueños</h1>
                  <p class="d-none d-md-block">
                    
                  </p>
                  <a href="#" class="btn btn-outline-light">Agendar cita</a>
                  <button type="button" class="btn btn-eleden" data-toggle="modal" data-target="#modalDescuento">¿Necesitas crédito?</button>
              </div>
            </div>
          </div>
        </div>         
      </div>
    </div>
    <!-- /Carousel Slides -->

    <section>
      
    </section>

    <footer class="footer-brand">
      <div class="container">
        <div class="row">
          <div class="col">
            Todos los derechos reservados 2018 &copy; Maria Tharp.
          </div>
        </div>
      </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>