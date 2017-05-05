<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{url('CelularesPeru/css/bootstrap-flex.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/CelularesPeru/css/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/CelularesPeru/fontawesome/css/font-awesome.css ')}}">


    <!-- Nuevas fuentes -->
    <link rel="stylesheet" href="css/fontsnew/style.css">




    <!--  nuevas librerias-->


 






  </head>
  <body>
    <header id="header-container">
      <div class="container">
        <div class="row  flex-items-xs-between flex-items-xs-middle">

            <div class="col-xs-3">
              <img src="CelularesPeru/imagenes/logo.png" height="55px" alt="calidad">
            </div>

             <div class="col-xs-3 text-xs-right">



              <!-- registrar **andre-->
                <button class="navbar-toggler  hidden-sm-up" data-toggle="collapse" data-target="#navMenu">&#9776;</button>
                            <a class="login hidden-xs-down text-uppercase font-weigth-bold" href="{{ url('/login') }}">
                               <span class=" icon-input-checked-outline">Registrar</a></span>





              <!-- Entrar -->
              <button class="navbar-toggler  hidden-sm-up" data-toggle="collapse" data-target="#navMenu">&#9776;</button>
              
                @if (Auth::guest())
                    
                            <a class="login hidden-xs-down text-uppercase font-weigth-bold" href="{{ url('/login') }}">
                               <span class="icon-power">Entrar</a></span>
                            
                @else
                    
                                <a href="#" class="login text-uppercase font-weigth-bold">
                                    {{ Auth::user()->name }} 
                                </a>

                        
                                 <a class="login hidden-xs-down text-uppercase font-weigth-bold" href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">&#62;
                                            Logout
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                </form>
                                    
                            
                @endif



            </div> 
        </div>

      </div>  
    </header>

   <!-- Menu -->
    <div id="menu-container">
      <nav id="navMenu" class="navbar-toggleable-xs navbar navbar-light collapse">
      <div class="container">
        <div class="row">
          <div class="col-xs-10 offset-xs-1 col-md-5 offset-md-0">
            <ul class="nav navbar-nav" >
              <li class="nav-item text-xs-center">
                <a href="{{url('/')}}" class="nav-link active"><span class="icon-home-outline">Home</a></span>
              </li>
              <li class="nav-item text-xs-center">
                <a href="{{url('/catalogo')}}" class="nav-link"><span class="icon-news">Catalogo</a></span>
              </li>


              <li class="nav-item text-xs-center">
                <a href="{{url('/carrito')}}" class="nav-link"><span class="icon-shopping-cart">Carrito
                <span>
                  {{$productsCount}}
                </span>
                </a>
                </span>
              </li>


              <li class="nav-item text-xs-center">
                <a href="{{url('/nosotros')}}" class="nav-link"><span class="icon-group">Nosotros</a></span>
              </li>
              <li class="nav-item text-xs-center">
                <a href="{{url('/contacto')}}" class="nav-link"><span class="icon-location">Contacto</a></span>
              </li>
              @if (Auth::guest())
              <li class="nav-item text-xs-center hidden-sm-up">
                <a href="login.html" class="nav-link">Login</a>
              </li>
              @else
              <li class="nav-item text-xs-center hidden-sm-up">
                <a class="nav-link" href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                </form>
                                    
              </li>
              @endif

            </ul>
          </div>
          <div class="col-xs-12 col-md-6 offset-md-1 hidden-xs-down">
            <form>
              <div class="input-group">
                <input  type="text" class="form-control" placeholder="¿Qué está buscando?"></input>
                <span class="input-group-btn">
                  <button class="btn btn-celperu" type="button">
                    <span class="hidden-sm-down">Buscar</span>
                    <i class="fa fa-search hidden-md-up"></i>
                  </button>
                </span>
              </div>
            </form>
          </div>
        </div>
      </div>
      </nav>
      <div id="search-bar" class="container hidden-sm-up">
        <div class="row">
          <div class="col-xs">
            <form>
              <div class="input-group">
                <input  type="text" class="form-control" placeholder="¿Encontro lo que buscaba?"></input>
                <span class="input-group-btn">
                  <button class="btn btn-celperu" type="button">
                    <span class="hidden-sm-down">Buscar</span>
                    <i class="fa fa-search hidden-md-up"></i>
                  </button>
                </span>
              </div>
            </form>
          </div>
        </div>
      </div>

    </div>
    
    <!--/Menu-->
    <!--Nosotros-->
    <!--
    <div id="nosotros-container">
      <div class="container">
      <div class="row">
        <div class="col-xs-12 textcontenido">
            
           
            
            <h2><strong>CelularesPeru</strong></h2>
             <figure >
                <img src="{{url('/CelularesPeru/imagenes/celularesperu2.jpg')}}" class="img-fluid imgcenter">
            </figure>
            <p>CelularesPeru es una tienda online de productos tecnológicos de vanguardia, celulares libres de importación, contamos con lo último en smartphone en la mejores marcas, tablets y accesorios originales.</p>

            <p>:: Acerca de Nosotros</p>

            <p>Somos una empresa dedicada a la venta de equipos celulares de una variedad de gama, nuestro objetivo es ofrecer equipos libres para que no tengan que firmar contratos ni adquirir planes que a la larga les costaria mucho dinero,nuestos equipos los podra usar con cualquier operador y en cualquier pais sin restricciones de ningun tipo. Somos una empresa solida,tenemos años de experiencia en este rubro y tenemos una larga lista de clientes que dan fe de nuestra seriedad y responsabilidad,con nosotros estara seguro.

            La ecuación era sencilla y directamente proporcional: a mejores productos y mejor servicio, clientes más felices. Con estos rápidos cálculos nos decidimos a crear nuestra propia tienda, porque estamos convencidos de que cuando necesitamos comprar algo, como clientes todos buscamos las mismas cosas: buena calidad, buen precio, buen trato…y si viene algo de yapa, ¡Mucho mejor!</p>

            <p>:: Acerca de Nosotros</p>

            <p>Nuestro propósito es ser una empresa financieramente sana y exitosa, en constante superación, conformada por un equipo humano profesional, altamente capacitado, motivado e identificado con su misión y con una clientela leal y promotora, que reconozca en nosotros al líder comprometido con la más amplia satisfacción de sus necesidades presentes como las tendencias y cambios que la tecnología confiere a los electrónicos en el futuro.</p>

            <p>También garantizamos los mejores productos de cualquier parte del Perú: ¡nos gusta malcriar a nuestros clientes! Y como si fuera poco, nuestro pacto incluye tres premisas que hablan de nosotros como socios estratégicos para la búsqueda de tecnología: seriedad, transparencia y trayectoria.</p>

            <p>Ahora si: ¡Bienvenidos a CelularesPeru!</br>
            Lo invitamos a conocer recorrer, probar nuestra tienda virtual.</p>
        </div>
        
      </div>
      </div>
    </div>



-->
    <!--/Nosotros-->




    <!--/#page-breadcrumb ANDER-->

    <br><br>
    <h1><CENTER><b>NOSOTROS<b></CENTER></h1>
    <br><br>

    <section id="company-information" class="padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="container"  style="text-align:center">
            <div class="row">
                <div class="col-sm-6">
                     <img src="{{url('/CelularesPeru/imagenes/nosotros1.jpg')}}" alt="calidad" class="img-fluid">
                </div>
                <div class="col-sm-6 padding-top">
                    <p>Peruvian Nexus es una tienda online de tecnología de vanguardia como tablets, celulares libres de importación
                        de alta calidad  y siempre disponibles. Somos una empresa dedicada a la venta de equipos celulares de una variedad de gama, nuestro objetivo es ofrecer equipos libres para que no tengan que firmar contratos ni adquirir planes que a la larga les costaria mucho dinero, nuestos equipos los podra usar con cualquier operador y en cualquier pais sin restricciones de ningun tipo</p>

                </div>
            </div>
        </div>
    </section>
    <br><br><br>

    <section id="services">
        <div class="container" style="text-align:center">
            <div class="row">
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                             <img src="{{url('/CelularesPeru/imagenes/nosotros2.jpg')}}" alt="calidad" class="img-fluid">
                        </div>
                        <h2>Misión</h2>
                        <p>Vender los mejores productos tecnológicos con respecto a celulares a precios accesibles para la comunidad peruana</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
                             <img src="{{url('/CelularesPeru/imagenes/nosotros3.jpg')}}" alt="calidad" class="img-fluid">
                        </div>
                        <h2>Visión</h2>
                        <p>Ser una empresa financieramente sana,formada por profesionales capacitados y líder en tendencias de tecnología móvil. </p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
                             <img src="{{url('/CelularesPeru/imagenes/nosotros4.jpg')}}" alt="calidad" class="img-fluid">
                        </div>
                        <h2>Compromiso</h2>
                        <p>Nuestro pacto incluye tres premisas como socios estratégicos para la búsqueda de tecnología: seriedad, transparencia y trayectoria.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#services- ANDREEEEEEEEEEEE->



















































    <!--Informacion-->
      <div id="info-container">
        <div id="container">
          <div class="row text-xs-center">
            <div class="col-xs-12 col-md-4">
              <img src="{{url('/CelularesPeru/imagenes/calidad.png')}}" alt="calidad" class="img-fluid">
              <h4>Calidad</h4>
            </div>
            <div class="col-xs-12 col-md-4">
              <img src="{{url('/CelularesPeru/imagenes/envio.png')}}"  alt="envio" class="img-fluid">
              <h4>Envio </h4>
            </div>
            <div class="col-xs-12 col-md-4">
              <img src="{{url('/CelularesPeru/imagenes/soporte.png')}}"  alt="soporte" class="img-fluid">
              <h4>Atencion 24h</h4>
            </div>
          </div>
        </div>
      </div>
    <!--/Informacion-->


    <!--Footer-->
    
    <footer id="footer-container">
      <div class="container">
        <div class="row text-xs-center text-md-left">





      <div class="col-md-4">
      <h3>Siguenos:</h3>
      <ul class="redes">
        <li><a href="#"><i class="fa fa-facebook-square fa-2x"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter-square fa-2x"></i></a></li>
        <li><a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a></li>
        <li><a href="#"><i class="fa fa-youtube-square fa-2x"></i></a></li>
      </ul>
      <h3>Escribenos: </h3>
      <i class="fa fa-at" ></i> <a href="#">celulareperu@gmail.com</a>
    </div>


    <div class="col-md-4">
      <div class="author-info">
        <br><br><br><p>Copyright © 2005-2017<br>
           CelularesPerú<br>
           Todos los derechos reservados. </p>
      </div>
    </div>



          <div class="col-md-4"  style="text-align:right">
            <ul class="nav">
              <li class="nav-item">
                 <a href="{{url('/')}}" class="nav-link active"><span class="icon-home-outline">Home</a></span>
              </li>
              <br>
              <li class="nav-item">
                <a href="{{url('/catalogo')}}" class="nav-link"><span class="icon-news">Catalogo</a></span>
              </li>
              <br>
              <li class="nav-item">
                <a href="{{url('/carrito')}}" class="nav-link"><span class="icon-shopping-cart">Carrito</a></span>
              </li>
              <br>
              <li class="nav-item">
                <a href="{{url('/contacto')}}" class="nav-link"><span class="icon-location">Contacto</a></span>
              </li>
              <br>
              <li class="nav-item">
                <a href="{{ url('/login') }}" class="nav-link" ><span class="icon-power">Entrar</a></span>
              </li>
               <br>
            </ul>
          </div>
        </div>
      </div>




    </footer>
    <!--/Footer-->



    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>
    <script src="{{url('/CelularesPeru/js/app.js')}}"></script>
  </body>
</html>