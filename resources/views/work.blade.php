<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Crossfits &mdash; Colorlib Website Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Work+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ url('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ url('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ url('css/animate.css') }}">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
    
    
    
    <link rel="stylesheet" href="{{ url('fonts/flaticon/font/flaticon.css') }}">
  
    <link rel="stylesheet" href="{{ url('css/aos.css') }}">

    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    
  </head>
  <body style="background-image: url('images/bg.jpg');">
  
  <div class="site-wrap">

    

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <div class="site-navbar-wrap js-site-navbar bg-white">
      
      <div class="container">
        <div class="site-navbar bg-light">
          <div class="py-1">
            <div class="row align-items-center">
              <div class="col-2">
                <h2 class="mb-0 site-logo"><img src="images/tc.png" alt="Image" width=50% height=50% class="img-fluid"></h2>  
              </div>
              <div class="col-10">
                <nav class="site-navigation text-right" role="navigation">
                  <div class="container">
                    <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                    <li><a href="{{ url('/') }}">Inicio</a></li>
                      <li><a href="{{ url('about') }}">Sobre Mi</a></li>
                      <li class="active"><a href="{{ url('work') }}">Áreas Funcioanles</a></li>
                      <li><a href="{{ url('contact') }}">Contacto</a></li>
                      <li><p><a href="{{ route('login') }}" class="btn btn-outline-primary py-2 px-4">Entrar</a></p></li>
                      <li><p><a href="{{ route('register') }}" class="btn btn-outline-primary py-2 px-4">Registrarse</a></p></li>
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    @foreach($slides as $slide)
    <div class="site-blocks-cover inner-page" style="background-image: url(../storage/app/{{$slide->image}});" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-7 text-center" data-aos="fade">
          <h1>{{ $slide->title }}</h1>
          <span class="caption d-block text-white">{{ $slide->subtitle}}</span>
        </div>
      </div>
    </div>  
    @endforeach

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="site-section-heading text-center">Áreas Funcionales</h2>
          </div>
        </div>
      </div>
    </div>
              
    @foreach($areas as $area)   
    <div class="site-section border-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2">
            <p class="mb-5"><img src="../storage/app/{{$area->image}}" alt="Image" class="img-fluid rounded"></p>
          </div>
          <div class="col-lg-5 mr-auto order-2 order-lg-1">
            <h2 class="site-section-heading mb-3">{{ $area->title }}</h2>
            <p>{{ $area->body }}</p>
          </div>
        </div>
      </div>
    </div>
    @endforeach 

    <footer class="site-footer">
      <div class="container">
        

        <div class="row">
          <div class="col-md-4">
            <h3 class="footer-heading mb-4 text-white">Toni Caceres</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat quos rem ullam, placeat amet.</p>
            <p><a href="#" class="btn btn-primary rounded text-white px-4">Read More</a></p>
          </div>
          <div class="col-md-5 ml-auto">
            <div class="row">
              <div class="col-md-6">
                <h3 class="footer-heading mb-4 text-white">Menú Rapido</h3>
                  <ul class="list-unstyled">
                    <li><a href="#">Principal</a></li>
                    <li><a href="#">El Entrenador</a></li>
                    <li><a href="#">Áreas Funcionales</a></li>
                    <li><a href="#">Contacto</a></li>
                  </ul>
              </div>
            </div>
          </div>

          
          <div class="col-md-2">
            <div class="col-md-12"><h3 class="footer-heading mb-4 text-white">Redes Sociales</h3></div>
              <div class="col-md-12">
                <p>
                  <a href="#" class="pb-2 pr-2 pl-0"><span class="icon-facebook"></span></a>
                  <a href="#" class="p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="p-2"><span class="icon-instagram"></span></a>

                </p>
              </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy; <script>document.write(new Date().getFullYear());</script> Todos los derechos reservados | Sitio creado por <a href="https://colorlib.com" target="_blank" >Ing. Alberto Garcia Cerruto</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>
    </footer>
  </div>

  <script src="{{ url('js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ url('js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ url('js/jquery-ui.js') }}"></script>
  <script src="{{ url('js/popper.min.js') }}"></script>
  <script src="{{ url('js/bootstrap.min.js') }}"></script>
  <script src="{{ url('js/owl.carousel.min.js') }}"></script>
  <script src="{{ url('js/jquery.stellar.min.js') }}"></script>
  <script src="{{ url('js/jquery.countdown.min.js') }}"></script>
  <script src="{{ url('js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ url('js/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ url('js/aos.js') }}"></script>

  <script src="{{ url('js/main.js') }}"></script>

  </body>
</html>