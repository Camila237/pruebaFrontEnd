<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Automóviles Mercedes-Benz</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Scripts -->
        <script src="{{ asset('js/main.js') }}"></script>
        
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/styles.scss') }}" />
        
    </head>

    <body class="antialiased">
        <div class="col-12 bg-black d-none d-sm-none d-md-block">
            <div class="d-flex justify-content-end">
                <a class="itemDataProtection m-2" href="#">
                    <span>Manual de prevención de riesgo LA/TF</span>
                </a>
                <a class="itemDataProtection m-2" href="#">
                    <span>Términos y Condiciones</span>
                </a>
            </div>
        </div>
        <div class="d-flex bg-black border-bottom pb-2">
            <div class="col-lg-1 col-md-1 col-sm-0 col-xs-0"></div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                <img src="./Images/imgLogo_navbar.jpg" class="img-fluid">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-0 col-xs-0"></div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                <img src="./Images/florestaLogo.png" class="img-fluid">
            </div>
            <div class="col-lg-1 col-md-1 col-sm-0 col-xs-0"></div>
        </div>
        <Nav class="navbar navbar-expand-lg navbar-dark bg-black px-5">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav mr-auto px-5">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Autómoviles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Usados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Boutique</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Posventa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Vitrina virtual</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                </ul>
            </div>
        </Nav> 
        <div class="content">
        <div class="row justify-content-md-center">
            <div class="col col-lg-10">
                <div class="h-100">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="overlay"></div>
                                <img src="./Images/firstCarousel.png" class=" d-block w-100 h-100" alt="...">
                                <!-- <div id="d-block d-sm-block d-md-none block-under-image mt-3">
                                    <p class="text-light">hola</p>
                                </div> -->
                                <div class="carousel-caption">
                                    <h5>C200 Avantgarde</h5>
                                    <p>Mercedes-Benz con el Clase A: turismo, compacto de gama alta, deportividad, confort y elegancia.</p>
                                    <button type="button" class="btn btn-outline-light" onclick="window.location='{{ url("/automovil/detalle") }}'">Ver vehículo</button>
                                </div>
                            </div>
                            <div class=" carousel-item">
                                <div class="overlay"></div>
                                <img src="./Images/secondCarousel.jpg" class=" d-block w-100 h-100" alt="...">
                                <div class="carousel-caption">
                                    <h5>Clase A 200 Progressive</h5>
                                    <p>Mercedes-Benz clase B, Hatch Back familiar por excelencia, con dimensiones de SUV compacta.</p>
                                    <button type="button" class="btn btn-outline-light" onclick="window.location='{{ url("/automovil/detalle") }}'">Ver vehículo</button>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="overlay"></div>
                                <img src="./Images/thirdCarousel.jpg" class="d-block w-100 h-100" alt="...">
                                <div class="carousel-caption">
                                    <h5>Clase B 200 Progressive</h5>
                                    <p>Mercedes-Benz clase B, Hatch Back familiar por excelencia, con dimensiones de SUV compacta.</p>
                                    <button type="button" class="btn btn-outline-light" onclick="window.location='{{ url("/automovil/detalle") }}'">Ver vehículo</button>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="overlay"></div>
                                <img src="./Images/fourCarousel.jpg" class="d-block w-100 h-100" alt="...">
                                <div class="carousel-caption">
                                    <h5>CLA Coupé </h5>
                                    <p>Algunos cambios en su diseño, nuevas funciones en el sistema multimedia MBUX y un equipamiento más completo.</p>
                                    <button type="button" class="btn btn-outline-light" onclick="window.location='{{ url("/automovil/detalle") }}'">Ver vehículo</button>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="overlay"></div>
                                <img src="./Images/fiveCarousel.jpg" class=" d-block w-100 h-100" alt="...">
                                <div class="carousel-caption">
                                    <h5> Clase X 220 d Pure</h5>
                                    <p>familiar por excelencia, con dimensiones de SUV compacta.</p>
                                    <button type="button" class="btn btn-outline-light" onclick="window.location='{{ url("/automovil/detalle") }}'">Ver vehículo</button>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="overlay"></div>
                                <img src="./Images/sixCarousel.jpg" class="d-block w-100 h-100" alt="...">
                                <div class="carousel-caption">
                                    <h5>SL 400</h5>
                                    <p>Mercedes-Benz turismo, compacto de gama alta, deportividad, confort y elegancia.</p>
                                    <button type="button" class="btn btn-outline-light" onclick="window.location='{{ url("/automovil/detalle") }}'">Ver vehículo</button>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div> 
                   <!--  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            </div>

                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </a>
                    </div> -->
                
                    <div class="text-center my-4">
                        <button type="button" class="btn btn-outline-light" id="botonVerMas">
                            Ver más vehículos
                        </button>
                        <button type="button" class="btn btn-outline-light" onclick="window.location='{{ url("/automovil/formulario") }}'">
                            Agregar vehículo
                        </button>
                    </div>
                </div>                
            </div>
        </div>
        <div id="carouselExampleIndicators" id="carusel">
                </div>
        <div class="row justify-content-md-center mt-5 mb-3">
            <div class="col col-lg-10">
                <img src="./Images/insideCar.jpg" class="w-100">
                <p class="textSecondSection">texto iline</p> 
            </div>
        </div>
        <div class="row justify-content-md-center mb-5">
            <div class="ol-lg-5 col-md-5 col-sm-12 col-xs-12 my-2 mx-2">
                <div class="row bg-light h-100">
                    <div class="col col-lg-6 p-0">
                        <img src="./Images/secondCards.jpg" class="img-fluid h-100">
                    </div>
                    <div class="col col-lg-6 p-3">
                        <h3>Vehículos Usados</h3>
                        <p> ¿Buscando carro? Con nuestra línea de vehículos usados también puedes acceder a un Mercedes-Benz y ser la envidia de tus amigos.</p>
                        <h6>Quiero conocerlos</h6>

                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 my-2">
                <div class="row bg-light">
                    <div class="col col-lg-6 p-0">
                        <img src="./Images/boutique.jpg" class="img-fluid h-100">
                    </div>
                    <div class="col col-lg-6 p-3">
                        <h3>Boutique Mercedes-Benz</h3>
                        <p>Ahora también es posible llevar la marca de la estrella plateada fuera del vehículo. Descubre las nuevas prendas de vestir y accesorios disponibles.</p>
                        <h6>Conocer más</h6>
                    </div>
                </div>
            </div>
        <div>
        <div class="row justify-content-md-center my-5">
            <div class="col col-lg-4 mx-2">
                <h2 class="titleCallAction text-center">Entérate de las últimas noticias de la marca</h2>
                <br>
                <p class="titleCallAction text-center">Mantente al día sobre las últimas noticias y novedades del concesionario de Mercedes-Benz líder en Colombia.</p>
                <br>
                <div class="text-center">
                    <button type="button" class="btn btn-info mx-auto">Ver Noticias</button>
                </div>
            </div>
        </div>
        <footer>
            <div class="container text-center text-md-left mt-5">
                <div class="row">
                    <div class="col-md-3 my-2">
                        <h6 class="font-weight-bold text-light">Portafolio<h6>
                        <ul class="list-unstyled">
                            <li class="my-2">
                                <a class="text-muted text-decoration-none">Vehículos Comerciales</a>
                            </li>
                            <li class="my-2">
                                <a class="text-muted text-decoration-none">Automóviles</a>
                            </li>
                            <li class="my-2">
                                <a class="text-muted text-decoration-none">Vitrina Virtual</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 mx-auto my-2">
                        <h6 class="font-weight-bold text-light">Floresta<h6>
                        <ul class="list-unstyled">
                            <li class="my-2">
                                <a class="text-muted text-decoration-none">Sobre Nosotros</a>
                            </li>
                            <li class="my-2">
                                <a class="text-muted text-decoration-none">Campañas Seguridad</a>
                            </li>
                            <li class="my-2">
                                <a class="text-muted text-decoration-none">Términos y Condiciones</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 my-2">
                        <h6 class="font-weight-bold text-light">Síguenos<h6>
                        <div class="row justify-content-md-center">
                            <div class="col-md-2 my-2">
                                <img src="./Images/facebook-sticky.svg" class="img-fluid">
                            </div>
                            <div class="col-md-2 my-2">
                                <img src="./Images/instagram-sticky.svg" class="img-fluid">
                            </div>  
                        </div>
                    </div>
                <div>
            </div>
            <div class="col col-lg-12 justify-content-md-center border-top">
                <p class="titleCallAction text-center mt-2">
                    Automotores La Floresta - Todos los derechos reservados Términos y Condiciones Manual de prevención de riesgo de LA/FT
                </p>
            </div>
        </footer>
        </div>
        </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    </body>
</html>
