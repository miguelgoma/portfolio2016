<!DOCTYPE html>
<!--
Landing page based on Pratt: http://blacktie.co/demo/pratt/
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pratt - Free Bootstrap 3 Theme">
    <meta name="author" content="Alvarez.is - BlackTie.co">

    <title>Sitios Modernos</title>

    <!-- Bootstrap core CSS -->
    <!--<link href="{{ asset('../css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('../css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('../css/bootstrap.css.map') }}" rel="stylesheet">
    <link href="{{ asset('../css/AdminLTE.min.css') }}" rel="stylesheet">
    <link href="{{ asset('../css/skins/skin-blue.min.css') }}" rel="stylesheet">-->

    <link href="https://doberman.herokuapp.com/../css/bootstrap.css" rel="stylesheet">
    <link href="https://doberman.herokuapp.com/../css/main.css" rel="stylesheet">
    <link href="https://doberman.herokuapp.com/../css/bootstrap.css.map" rel="stylesheet">
    <link href="https://doberman.herokuapp.com/../css/AdminLTE.min.css" rel="stylesheet">
    <link href="https://doberman.herokuapp.com/../css/skins/skin-blue.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

    <script src="{{ asset('/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('/js/smoothscroll.js') }}"></script>


</head>

<body data-spy="scroll" data-offset="1" data-target="#navigation">

<!-- Fixed navbar -->
<div id="navigation" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#home"><b>Sitios-laravel</b></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="#home" class="smoothScroll">Home</a></li>
                <li><a href="#portafolio" class="smoothScroll">Portafolio</a></li>
                <li><a href="#features" class="smoothScroll">Features</a></li>
                <li><a href="#showcase" class="smoothScroll">Showcase</a></li>
                <li><a href="#contact" class="smoothScroll">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                    <li><a href="/home">{{ Auth::user()->name }}</a></li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>

<section id="home" name="home"></section>
<div id="headerwrap">
    <div class="container">
        <div class="row centered">
            <div class="col-lg-12">
                <h1>Acacha <b><a href="https://github.com/acacha/adminlte-laravel">adminlte-laravel</a></b></h1>
                <h3>A <a href="https://laravel.com/">Laravel</a> 5 package that switchs default Laravel
                    scaffolding/boilerplate to <a href="https://almsaeedstudio.com/preview">AdminLTE</a> template with
                    <a href="http://getbootstrap.com/">Bootstrap</a> 3.0 and <a href="http://blacktie.co/demo/pratt/">Pratt</a> Landing page</h3><br>
                <h3><a href="{{ url('/register') }}" class="btn btn-lg btn-success">Get Started!</a></h3>
            </div>
            <div class="col-lg-2">
                <h5>Amazing admin template</h5>
                <p>Based on adminlte bootstrap theme</p>
                <img class="hidden-xs hidden-sm hidden-md" src="{{ asset('/img/arrow1.png') }}">
            </div>
            <div class="col-lg-8">
                <img class="img-responsive" src="{{ asset('/img/app-bg.png') }}" alt="">
            </div>
            <div class="col-lg-2">
                <br>
                <img class="hidden-xs hidden-sm hidden-md" src="{{ asset('/img/arrow2.png') }}">
                <h5>Awesome packaged...</h5>
                <p>... by <a href="http://acacha.org/sergitur">Sergi Tur Badenas</a> at <a href="http://acacha.org">acacha.org</a> ready to use with Laravel!</p>
            </div>
        </div>
    </div> <!--/ .container -->
</div><!--/ #headerwrap -->

<section id="portafolio" name="portafolio"></section>
<!-- INTRO WRAP -->
<div id="intro">
    <div class="container">
        <div class="row centered">
            <h1>Portafolio web</h1>
            <br>
            <div class="col-lg-3">
                <a href="https://doberman.herokuapp.com/scrap"><img src="{{ asset('/img/intro01.png') }}" alt=""></a>
                <a href="https://doberman.herokuapp.com/scrap"><h3>Scraping web</h3></a>
                <p>Raspado <a href="https://github.com/acacha/adminlte-laravel">de múltiples</a> sitios<a href="https://github.com/acacha/adminlte-laravel/issues"> para crear </a> uno <a href="https://github.com/acacha/adminlte-laravel/pulls"> nuevo</a></p>
            </div>
            <div class="col-lg-3">
                <a href="https://doberman.herokuapp.com/cotiza"><img src="{{ asset('/img/intro02.png') }}" alt=""></a>
                <a href="https://doberman.herokuapp.com/cotiza"><h3>Cotizador de autos</h3></a>
                <p>Cotiza tu seguro de auto en segundos</p>
            </div>
            <div class="col-lg-3">
                <a href="https://doberman.herokuapp.com/voice"><img src="{{ asset('/img/intro03.png') }}" alt=""></a>
                <a href="https://doberman.herokuapp.com/voice"><h3>Aplicación locutor</h3></a>
                <p>Consumo de la API voiceBunny</p>
            </div>
            <div class="col-lg-3">
                <a href="https://doberman.herokuapp.com/gmaps"><img src="{{ asset('/img/intro03.png') }}" alt=""></a>
                <h3>Maps</h3>
                <p>Lorem Ipsum is simply dummy text of.</p>
            </div>
        </div>
        <div class="row centered">
            <br>
            <div class="col-lg-3">
                <a href="https://doberman.herokuapp.com/crud"><img src="{{ asset('/img/intro01.png') }}" alt=""></a>
                <a href="https://doberman.herokuapp.com/crud"><h3>CRUD</h3></a>
                <p>Crear, leer, actualizar y borrar</p>
            </div>
            <div class="col-lg-3">
                <a href="https://doberman.herokuapp.com/banner"><img src="{{ asset('/img/intro02.png') }}" alt=""></a>
                <a href="https://doberman.herokuapp.com/banner"><h3>Banners con GSAP JS</h3></a>
                <p>HTML5 animation</p>
            </div>
            <div class="col-lg-3">
                <a href="https://doberman.herokuapp.com/webservice"><img src="{{ asset('/img/intro03.png') }}" alt=""></a>
                <a href="https://doberman.herokuapp.com/webservice"><h3>Web services</h3></a>
                <p>Consumo de servicio web de tipo SOAP y REST</p>
            </div>
            <div class="col-lg-3">
                <img src="{{ asset('/img/user2-160x160.jpg') }}" alt="">
                <h3>Manipulación de datos</h3>
                <p>Google Charts</p>
            </div>
        </div>
        <div class="row centered">
            <br>
            <div class="col-lg-3">
                <img src="{{ asset('/img/intro01.png') }}" alt="">
                <h3>Newsletters</h3>
                <p></p>
            </div>
            <div class="col-lg-3">
                <a href="https://doberman.herokuapp.com/aplication"><img src="{{ asset('/img/intro02.png') }}" alt=""></a>
                <a href="https://doberman.herokuapp.com/aplication"><h3>Aplication</h3>
                <p>Aplication</p></a>
            </div>
            <div class="col-lg-3">
                <a href="https://doberman.herokuapp.com/stripe"><img src="{{ asset('/img/intro03.png') }}" alt=""></a>
                <a href="https://doberman.herokuapp.com/stripe"><h3>Ecommerce</h3></a>
                <p>Stripe</p>
            </div>
            <div class="col-lg-3">
                <a href="https://doberman.herokuapp.com/about"><img src="{{ asset('/img/user2-160x160.jpg') }}" alt=""></a>
                <h3>Acerca de </h3>
                <p></p>
            </div>
        </div>
        <br>
        <hr>
    </div> <!--/ .container -->
</div><!--/ #introwrap -->

<!-- FEATURES WRAP -->
<div id="features">
    <div class="container">
        <div class="row">
            <h1 class="centered">What's New?</h1>
            <br>
            <br>
            <div class="col-lg-6 centered">
                <img class="centered" src="{{ asset('/img/mobile.png') }}" alt="">
            </div>

            <div class="col-lg-6">
                <h3>Some Features</h3>
                <br>
                <!-- ACCORDION -->
                <div class="accordion ac" id="accordion2">
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                                First Class Design
                            </a>
                        </div><!-- /accordion-heading -->
                        <div id="collapseOne" class="accordion-body collapse in">
                            <div class="accordion-inner">
                                <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div><!-- /accordion-inner -->
                        </div><!-- /collapse -->
                    </div><!-- /accordion-group -->
                    <br>

                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                                Retina Ready Theme
                            </a>
                        </div>
                        <div id="collapseTwo" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div><!-- /accordion-inner -->
                        </div><!-- /collapse -->
                    </div><!-- /accordion-group -->
                    <br>

                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                                Awesome Support
                            </a>
                        </div>
                        <div id="collapseThree" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div><!-- /accordion-inner -->
                        </div><!-- /collapse -->
                    </div><!-- /accordion-group -->
                    <br>

                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
                                Responsive Design
                            </a>
                        </div>
                        <div id="collapseFour" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div><!-- /accordion-inner -->
                        </div><!-- /collapse -->
                    </div><!-- /accordion-group -->
                    <br>
                </div><!-- Accordion -->
            </div>
        </div>
    </div><!--/ .container -->
</div><!--/ #features -->


<div id="showcase">
    <div class="container">
        <div class="row">
            <h1 class="centered">Some Screenshots</h1>
            <br>
            <div class="col-lg-8 col-lg-offset-2">
                <div id="carousel-example-generic" class="carousel slide">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="{{ asset('/img/item-01.png') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('/img/item-02.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
    </div><!-- /container -->
</div>


<section id="contact" name="contact"></section>
<div id="footerwrap">
    <div class="container">
        <div class="col-lg-5">
            <h3>Address</h3>
            <p>
                Av. Greenville 987,<br/>
                New York,<br/>
                90873<br/>
                United States
            </p>
        </div>

        <div class="col-lg-7">
            <h3>Drop Us A Line</h3>
            <br>
            <form role="form" action="#" method="post" enctype="plain">
                <div class="form-group">
                    <label for="name1">Your Name</label>
                    <input type="name" name="Name" class="form-control" id="name1" placeholder="Your Name">
                </div>
                <div class="form-group">
                    <label for="email1">Email address</label>
                    <input type="email" name="Mail" class="form-control" id="email1" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label>Your Text</label>
                    <textarea class="form-control" name="Message" rows="3"></textarea>
                </div>
                <br>
                <button type="submit" class="btn btn-large btn-success">SUBMIT</button>
            </form>
        </div>
    </div>
</div>
<div id="c">
    <div class="container">
        <p>
            <a href="https://github.com/acacha/adminlte-laravel"></a><b>admin-lte-laravel</b></a>. A Laravel 5 package that switchs default Laravel scaffolding/boilerplate to AdminLTE template.<br/>
            <strong>Copyright &copy; 2015 <a href="http://acacha.org">Acacha.org</a>.</strong> Created by <a href="http://acacha.org/sergitur">Sergi Tur Badenas</a>. See code at <a href="https://github.com/acacha/adminlte-laravel">Github</a>
            <br/>
            AdminLTE created by Abdullah Almsaeed <a href="https://almsaeedstudio.com/">almsaeedstudio.com</a>
            <br/>
             Pratt Landing Page Created by <a href="http://www.blacktie.co">BLACKTIE.CO</a>
        </p>

    </div>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script>
    $('.carousel').carousel({
        interval: 3500
    })
</script>
</body>
</html>
