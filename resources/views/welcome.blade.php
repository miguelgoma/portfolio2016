<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pratt - Free Bootstrap 3 Theme">
    <meta name="author" content="Alvarez.is - BlackTie.co">

    <title>DoberMan</title>

    <link href="https://doberman.herokuapp.com/../css/bootstrap.css" rel="stylesheet">
    <link href="https://doberman.herokuapp.com/../css/main.css" rel="stylesheet">
    <link href="https://doberman.herokuapp.com/../css/bootstrap.css.map" rel="stylesheet">
    <link href="https://doberman.herokuapp.com/../css/AdminLTE.min.css" rel="stylesheet">
    <link href="https://doberman.herokuapp.com/../css/skins/skin-blue.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    
    <script src="https://doberman.herokuapp.com/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="https://doberman.herokuapp.com/../js/smoothscroll.js"></script>
</head>

<body data-spy="scroll" data-offset="1" data-target="#navigation">

<div id="navigation" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#inicio"><b>DoberMan</b></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="#inicio" class="smoothScroll">Inicio</a></li>
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
        </div>
    </div>
</div>

<section id="inicio" name="inicio"></section>
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
        <div class="col-sm-4">
                <h4>About Us</h4>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                </p>
                <h4>Follow Us</h4>
                <ul class="list-inline">
                    <li>
                        <a href="#"> <i class="livicon" data-name="facebook" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc" id="livicon-40" style="width: 18px; height: 18px;"><svg height="18" version="1.1" width="18" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; top: -0.5px;" id="canvas-for-livicon-40"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="#cccccc" stroke="none" d="M25.484,16H21.62V30H16V16H13.104V11.173H16V8.277C16,4.341,17.465,2,22.107,2H25.971V6.825H23.552C21.747,6.825,21.627,7.4990000000000006,21.627,8.757L21.619,11.173H26L25.484,16Z" stroke-width="0" transform="matrix(0.5625,0,0,0.5625,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path></svg></i>
                        </a>
                    </li>
                    <li>
                        <a href="#"> <i class="livicon" data-name="twitter" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc" id="livicon-41" style="width: 18px; height: 18px;"><svg height="18" version="1.1" width="18" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; left: -0.6875px; top: -0.5px;" id="canvas-for-livicon-41"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="#cccccc" stroke="none" d="M27.133,10.912C27.147,11.159,27.151999999999997,11.409,27.151999999999997,11.656C27.151999999999997,19.247,21.376999999999995,28.014000000000003,10.805999999999997,28C5.851,27.996,2.466,25.779,2,25.42C6.55,26.011000000000003,9.817,23.679000000000002,10.505,23.042C7.834000000000001,23.097,5.618000000000001,20.881,5.140000000000001,19.053C6.433000000000001,19.362000000000002,7.732000000000001,18.952,7.732000000000001,18.952C4.567000000000001,18.313000000000002,3.0500000000000007,15.395000000000001,3.125000000000001,13.247000000000002C4.101000000000001,13.762000000000002,4.800000000000001,13.878000000000002,5.7280000000000015,13.966000000000001C3.517,12.479,2.233,9.212,3.95,6.297C8.649000000000001,11.895,14.600000000000001,12.245999999999999,15.79,12.299C15.79,12.299,15.641,11.44,15.641,10.988999999999999C15.641,7.815999999999999,18.213,5.244999999999999,21.384999999999998,5.244999999999999C23.035999999999998,5.244999999999999,24.531,5.941999999999999,25.577999999999996,7.059999999999999C26.886999999999997,6.801999999999999,28.115999999999996,6.322999999999999,29.226999999999997,5.665999999999999C28.796999999999997,7.006999999999999,27.886999999999997,8.131999999999998,26.698999999999998,8.842999999999998C27.863,8.703999999999999,28.968999999999998,8.394999999999998,30,7.938999999999998C29.23,9.091,28.255,10.103,27.133,10.912Z" stroke-width="0" transform="matrix(0.5625,0,0,0.5625,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path></svg></i>
                        </a>
                    </li>
                    <li>
                        <a href="#"> <i class="livicon" data-name="google-plus" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc" id="livicon-42" style="width: 18px; height: 18px;"><svg height="18" version="1.1" width="18" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; left: -0.375px; top: -0.5px;" id="canvas-for-livicon-42"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="#cccccc" stroke="none" d="M14.234,17.639L13.115,16.758C12.773,16.473,12.306000000000001,16.093999999999998,12.306000000000001,15.402999999999999C12.306000000000001,14.709999999999999,12.773000000000001,14.267,13.177000000000001,13.858999999999998C14.478000000000002,12.818999999999999,15.782000000000002,11.715999999999998,15.782000000000002,9.386C15.782000000000002,6.991999999999999,14.294000000000002,5.732999999999999,13.579000000000002,5.1339999999999995H15.507000000000001L17.492,4H11.097000000000001C9.42,4,7.309,4.252,5.541,5.732C4.205,6.896,3.553,8.505,3.553,9.953C3.553,12.408999999999999,5.416,14.898,8.707,14.898C9.018,14.898,9.357000000000001,14.865,9.699000000000002,14.834999999999999C9.545000000000002,15.210999999999999,9.388000000000002,15.527999999999999,9.388000000000002,16.063C9.388000000000002,17.04,9.886000000000001,17.639,10.320000000000002,18.204C8.924000000000003,18.3,6.314000000000002,18.458000000000002,4.390000000000002,19.655C2.561,20.756,2,22.361,2,23.494C2,25.828,4.174,28,8.676,28C14.016,28,16.84,25.008,16.84,22.045C16.84,19.875,15.6,18.807,14.234,17.639ZM10.164,14.016C7.4959999999999996,14.016,6.285,10.52,6.285,8.411999999999999C6.285,7.591999999999999,6.439,6.740999999999999,6.969,6.078999999999999C7.465,5.448,8.334,5.04,9.143,5.04C11.717,5.04,13.053,8.565999999999999,13.053,10.834C13.053,11.402,12.99,12.408999999999999,12.278,13.135C11.779,13.636,10.941,14.016,10.164,14.016ZM10.197,26.676C6.874999999999999,26.676,4.733999999999999,25.072,4.733999999999999,22.836S6.719999999999999,19.843999999999998,7.401999999999999,19.59C8.706999999999999,19.149,10.384,19.088,10.661999999999999,19.088C10.972999999999999,19.088,11.129,19.088,11.374999999999998,19.117C13.733999999999998,20.818,14.763999999999998,21.672,14.763999999999998,23.273C14.764,25.23,13.178,26.676,10.197,26.676ZM30,8.285V9.715H25.717V14H24.285V9.715H20V8.285H24.285V4H25.717V8.285H30Z" stroke-width="0" transform="matrix(0.5625,0,0,0.5625,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path></svg></i>
                        </a>
                    </li>
                    <li>
                        <a href="#"> <i class="livicon" data-name="linkedin" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc" id="livicon-43" style="width: 18px; height: 18px;"><svg height="18" version="1.1" width="18" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; left: -0.0625px; top: -0.5px;" id="canvas-for-livicon-43"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="#cccccc" stroke="none" d="M28.4,30H22.979999999999997V19.161C22.979999999999997,17.665000000000003,21.766999999999996,16.452,20.269999999999996,16.452C18.773999999999997,16.452,17.558999999999997,17.665000000000003,17.558999999999997,19.161V30H12.141999999999998V11.033H17.558999999999997V14.398C18.677999999999997,12.862,20.386999999999997,11.033,22.302,11.033C25.668,11.033,28.4,14.065999999999999,28.4,17.807V30ZM9.821,30H4.4V11.033H9.82V30ZM7.11,8.323C5.614,8.323,4.4,7.11,4.4,5.614C4.4,4.118,5.613,2.905,7.109,2.905C8.606,2.905,9.82,4.118,9.82,5.614C9.821,7.11,8.607,8.323,7.11,8.323L7.11,8.323Z" stroke-width="0" transform="matrix(0.5625,0,0,0.5625,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path></svg></i>
                        </a>
                    </li>
                    <li>
                        <a href="#"> <i class="livicon" data-name="rss" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc" id="livicon-44" style="width: 18px; height: 18px;"><svg height="18" version="1.1" width="18" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; left: -0.75px; top: -0.5px;" id="canvas-for-livicon-44"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="#cccccc" stroke="none" d="M5.827,22.346C3.712,22.346,2,24.059,2,26.173S3.712,30,5.827,30S9.655,28.287,9.655,26.173000000000002S7.942,22.346,5.827,22.346ZM2.044,11.454C2.044,13.204,2.044,14.953000000000001,2.044,16.703C9.392,16.703,15.341000000000001,22.652,15.341000000000001,30C17.091,30,18.84,30,20.59,30C20.59,19.852,12.191,11.454,2.044,11.454ZM30.037,30H24.788C24.788,16.878999999999998,13.941,7.254999999999999,2.0440000000000005,7.254999999999999V2.006C18.84,2.006,30.037,16.003,30.037,30Z" stroke-width="0" transform="matrix(0.5625,0,0,0.5625,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path></svg></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- //About us Section End -->
            <!-- Contact Section Start -->
            <div class="col-sm-4">
                <h4>Contact Us</h4>
                <ul class="list-unstyled">
                    <li>35,Lorem Lis Street, Park Ave</li>
                    <li>Lis Street, India.</li>
                    <li><i class="livicon icon4 icon3" data-name="cellphone" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc" id="livicon-45" style="width: 18px; height: 18px;"><svg height="18" version="1.1" width="18" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; top: -0.5px;" id="canvas-for-livicon-45"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="#cccccc" stroke="none" d="M12,9L12,9L12,9L12,9L12,9ZM16,9L16,9L16,9L16,9L16,9ZM20,9L20,9L20,9L20,9L20,9ZM12,13L12,13L12,13L12,13L12,13ZM16,13L16,13L16,13L16,13L16,13ZM20,13L20,13L20,13L20,13L20,13ZM12,17L12,17L12,17L12,17L12,17ZM16,17L16,17L16,17L16,17L16,17ZM20,17L20,17L20,17L20,17L20,17ZM12,21L12,21L12,21L12,21L12,21ZM16,21L16,21L16,21L16,21L16,21ZM20,21L20,21L20,21L20,21L20,21Z" stroke-width="0" transform="matrix(0.5625,0,0,0.5625,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="#cccccc" stroke="none" d="M21.977,2H10.021C8.905,2,8,2.904,8,4.022V27.978C8,29.094,8.904,30,10.021,30H21.976C23.094,30,24,29.094,24,27.979V4.022C24,2.904,23.094,2,21.977,2ZM14.301,3.5H17.697C17.863,3.5,18,3.724,18,4S17.863,4.5,17.697,4.5H14.300999999999998C14.133,4.5,14,4.273,14,4C14,3.721,14.133,3.5,14.301,3.5ZM12.5,3.5C12.777,3.5,13,3.724,13,4C13,4.274,12.777,4.5,12.5,4.5S12,4.276,12,4C12,3.723,12.223,3.5,12.5,3.5ZM16,28.5C15.172,28.5,14.5,27.828,14.5,27.002C14.5,26.166,15.172,25.5,16,25.5S17.5,26.174,17.5,27.002C17.5,27.828,16.828,28.5,16,28.5ZM22,24H10V6H22V24Z" stroke-width="0" transform="matrix(0.5625,0,0,0.5625,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path></svg></i>Phone:9140 123 4588</li>
                    <li><i class="livicon icon4 icon3" data-name="printer" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc" id="livicon-46" style="width: 18px; height: 18px;"><svg height="18" version="1.1" width="18" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; top: -0.5px;" id="canvas-for-livicon-46"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="#cccccc" stroke="none" d="M23,13H9V12H23V13ZM23,15H9V16H23V15ZM23,18H9V19H23V18ZM23,21H9V22H23V21ZM23,24H9V25H23V24ZM23,27H9V28H23V27Z" opacity="0" stroke-width="0" transform="matrix(0.5625,0,0,0.5625,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#cccccc" stroke="none" d="M26,10C26,8,22,4,20,4H6.6C6.269,4,6,4.269,6,4.6V12H5C3.3440000000000003,12,2,13.094,2,14.75V23.4C2,23.73,2.269,24,2.6,24H6V27.4C6,27.73,6.269,28,6.6,28H25.4C25.729999999999997,28,26,27.73,26,27.4V24H29.4C29.729999999999997,24,30,23.73,30,23.4V14.749999999999998C30,13.093999999999998,28.656,11.999999999999998,27,11.999999999999998H26V10ZM24,26H8V23H24V26ZM24,12H8V6H20C21.199,6,20,10,20,10S24,8.1,24,10V12ZM27,16C26.447,16,26,15.553,26,15S26.447,14,27,14S28,14.447,28,15S27.553,16,27,16Z" stroke-width="0" transform="matrix(0.5625,0,0,0.5625,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path></svg></i> Fax:400 423 1456</li>
                    <li><i class="livicon icon3" data-name="mail-alt" data-size="20" data-loop="true" data-c="#ccc" data-hc="#ccc" id="livicon-47" style="width: 20px; height: 20px;"><svg height="20" version="1.1" width="20" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; top: -0.5px;" id="canvas-for-livicon-47"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="#cccccc" stroke="none" d="M3.2,24C2.537,24,2,23.463,2,22.801V11.5L14.113,21.024C15.155,21.842000000000002,16.844,21.842000000000002,17.886,21.024L30,11.5V22.801000000000002C30,23.463,29.463,24,28.801,24H3.2ZM28.801,8H3.2C2.537,8,2,8.537,2,9.2V9.957999999999998L14.113,19.476999999999997C15.155,20.292999999999996,16.843,20.292999999999996,17.886,19.476999999999997L30,9.958V9.2C30,8.537,29.463,8,28.801,8ZM19.501,11H13.278000000000002C13.415000000000003,11.306,13.495000000000003,11.644,13.498000000000003,12H17.501000000000005C17.776,12,18,12.224,18,12.5S17.776,13,17.501,13H13.3C12.919,13.894,12.033000000000001,14.521,11,14.521C9.619,14.521,8.5,13.401,8.5,12.021S9.619,9.521,11,9.521C11.547,9.521,12.049,9.702,12.461,10H19.501C19.776,10,20,10.224,20,10.5S19.776,11,19.501,11Z" opacity="1" stroke-width="0" transform="matrix(0.625,0,0,0.625,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1;"></path></svg></i> Email:<span class="text-success">
                        utnmike@gmail.com</span>
                    </li>
                    <li><i class="livicon icon4 icon3" data-name="skype" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc" id="livicon-48" style="width: 18px; height: 18px;"><svg height="18" version="1.1" width="18" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; top: -0.5px;" id="canvas-for-livicon-48"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="#cccccc" stroke="none" d="M29.009,18.973C29.209,18.064,29.314,17.118,29.314,16.149C29.314,8.877,23.418,2.9810000000000016,16.144,2.9810000000000016C15.376999999999999,2.9810000000000016,14.623999999999999,3.0470000000000015,13.892999999999999,3.173000000000002C12.718,2.431,11.325,2,9.832,2C5.614,2,2.195,5.418,2.195,9.636C2.195,11.046,2.578,12.364999999999998,3.245,13.497C3.069,14.354,2.979,15.238,2.979,16.146C2.979,23.419,8.875,29.313000000000002,16.146,29.313000000000002C16.970000000000002,29.313000000000002,17.776,29.238000000000003,18.560000000000002,29.092000000000002C19.634,29.673,20.862,30,22.17,30C26.387,30,29.805,26.583,29.805,22.363C29.803,21.145,29.518,19.994,29.009,18.973ZM16.006,25.156C14.659,25.151999999999997,13.034,24.99,11.695,24.363999999999997C9.742,23.449999999999996,8.289,21.762999999999998,8.279,19.865C8.277,19.381999999999998,8.696,18.064999999999998,10.203,18.110999999999997C10.654,18.124999999999996,11.495,18.163999999999998,12.136,19.642999999999997C12.956,21.538999999999998,13.796,22.063999999999997,15.907,22.176C17.196,22.244,19.496,21.662999999999997,19.535,19.842999999999996C19.546,19.321999999999996,19.357,18.922999999999995,19.027,18.592999999999996C18.296,17.862999999999996,17.095000000000002,17.661999999999995,15.205000000000002,17.220999999999997C13.844000000000001,16.902999999999995,8.596000000000002,16.161999999999995,8.64,11.890999999999996C8.653,10.661999999999995,9.296000000000001,6.8619999999999965,15.955000000000002,6.842999999999996C21.496000000000002,6.826999999999996,22.996000000000002,9.961999999999996,22.895000000000003,11.272999999999996C22.795,12.573999999999996,21.996000000000002,13.060999999999996,21.004000000000005,13.108999999999996C19.895000000000003,13.162999999999997,19.374000000000006,12.192999999999996,19.083000000000006,11.708999999999996C18.095000000000006,10.062999999999995,17.395000000000007,9.723999999999997,15.703000000000007,9.739999999999997C13.295000000000007,9.762999999999996,12.595000000000006,10.962999999999997,12.604000000000006,11.563999999999997C12.609000000000007,11.863999999999997,12.682000000000006,12.123999999999997,12.867000000000006,12.331999999999997C13.695000000000006,13.262999999999998,15.498000000000006,13.547999999999996,16.533000000000005,13.786999999999997C18.595000000000006,14.262999999999998,20.579000000000004,14.783999999999997,21.699000000000005,15.575999999999997C23.095000000000006,16.562999999999995,23.763000000000005,17.662999999999997,23.718000000000004,19.464C23.596,24.265,18.795,25.164,16.006,25.156Z" stroke-width="0" transform="matrix(0.5625,0,0,0.5625,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path></svg></i> Skype:
                        <span class="text-success">miguelgoma</span>
                    </li>
                </ul>
                <div class="news">
                    <h4>News letter</h4>
                    <p>subscribe to our newsletter and stay up to date with the latest news and deals</p>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="yourmail@mail.com" aria-describedby="basic-addon2">
                        <a href="#" class="btn btn-primary text-white" role="button">Subscribe</a>
                    </div>
                </div>
            </div>
            <!-- //Contact Section End -->
            <!-- Recent post Section Start -->
            <div class="col-sm-4">
                <h4>Recent Posts</h4>
                <div class="media">
                    <div class="media-left media-top">
                        <a href="#">
                            <img class="media-object" src="http://joshadmin.com/assets/images/image_14.jpg" alt="image">
                        </a>
                    </div>
                    <div class="media-body">
                        <p class="media-heading">Lorem Ipsum is simply dummy text of the printing and type setting industry dummy.
                        </p>
                        <p class="pull-right"><i>Sam Bellows</i></p>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left media-top">
                        <a href="#">
                            <img class="media-object" src="http://joshadmin.com/assets/images/image_15.jpg" alt="image">
                        </a>
                    </div>
                    <div class="media-body">
                        <p class="media-heading">Lorem Ipsum is simply dummy text of the printing and type setting industry dummy.
                        </p>
                        <p class="pull-right"><i>Emilly Barbosa Cunha</i></p>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left media-top">
                        <a href="#">
                            <img class="media-object" src="http://joshadmin.com/assets/images/image_13.jpg" alt="image">
                        </a>
                    </div>
                    <div class="media-body">
                        <p class="media-heading">Lorem Ipsum is simply dummy text of the printing and type setting industry dummy.
                        </p>
                        <p class="pull-right"><i>Sinikka Oramo</i></p>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left media-top">
                        <a href="#">
                            <img class="media-object" src="http://joshadmin.com/assets/images/c1.jpg" alt="image">
                        </a>
                    </div>
                    <div class="media-body">
                        <p class="media-heading">Lorem Ipsum is simply dummy text of the printing and type setting industry dummy.
                        </p>
                        <p class="pull-right"><i>Samsa Parras</i></p>
                    </div>
                </div>
            </div>
    </div>
</div>
<div id="c">
    <div class="container">
        <p>
            <a href="https://github.com/acacha/adminlte-laravel"></a><b>admin-lte-laravel</b></a>. A Laravel 5 package that switchs default Laravel scaffolding/boilerplate to AdminLTE template.<br/>
            <strong>Copyright &copy; 2016 <a href="https://twitter.com/miguelgoma">@miguelgoma</a></strong>
        </p>
    </div>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!--<script src="{{ asset('../js/bootstrap.min.js') }}" type="text/javascript"></script>-->
<script src="https://doberman.herokuapp.com/../js/bootstrap.min.js"></script>
<script>
    $('.carousel').carousel({
        interval: 3500
    })
</script>
</body>
</html>
