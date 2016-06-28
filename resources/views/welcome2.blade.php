<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>DoberMan</title>
    <!-- Bootstrap Core CSS -->
    <link href="../css/principal/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- Retina.js - Load first for faster HQ mobile images. -->
    <script src="assets/js/plugins/retina/retina.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <!-- Default Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,600,500,700,800,900" rel="stylesheet" type="text/css">
    <!-- Modern Style Fonts (Include these is you are using body.modern!) -->
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Cardo:400,400italic,700" rel="stylesheet" type="text/css">
    <!-- Vintage Style Fonts (Include these if you are using body.vintage!) -->
    <link href="http://fonts.googleapis.com/css?family=Sanchez:400italic,400" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Cardo:400,400italic,700" rel="stylesheet" type="text/css">
    <!-- Plugin CSS -->
    <link href="../css/principal/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="../css/principal/owl-carousel/owl.theme.css" rel="stylesheet" type="text/css">
    <link href="../css/principal/owl-carousel/owl.transitions.css" rel="stylesheet" type="text/css">
    <link href="../css/principal/magnific-popup.css" rel="stylesheet" type="text/css">
    <link href="../css/principal/background.css" rel="stylesheet" type="text/css">
    <link href="../css/principal/animate.css" rel="stylesheet" type="text/css">
    <link href="../css/principal/tooltip-classic.css" rel="stylesheet" type="text/css">

    <!-- Style Switcher CSS - Demo Purposes Only! -->
    <link id="changeable-colors" rel="stylesheet" href="../css/principal/vitality-red.css">
    <link href="..css/principal/style-switcher.css" rel="stylesheet">
    <!-- IE8 support for HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
   
    
    <!-- Landing Page Demo Styles -->
    <style>
    .demo-header {
        text-align: center;
        background: url('/img/two_bg-header.jpg') no-repeat center center scroll;
        color: #fff;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        background-size: cover;
        -o-background-size: cover;
        padding: 100px 0;
    }
    .preview-pane {
        text-align: center;
        margin-bottom: 30px;
        padding: 15px;
    }
    .preview-pane hr {
        max-width: 50px;
        margin: 5px auto;
    }
    .preview-pane a {
        color: #222;
    }
    .preview-pane a:focus {
        outline: none;
    }
    .preview-pane a img {
        -webkit-transition: all 0.5s;
        -moz-transition: all 0.5s;
        transition: all 0.5s;
    }
    .preview-pane a:hover img {
        opacity: 0.5;
    }

    .label-primary {
        background-color: #EF4035;
    }
    .cta-list {
        margin-top: 30px;
    }

    /*tool tip*/
    .tooltip {
        display: inline-block;
        border-bottom: 1px dotted black;
        z-index: 10;
    }

    .tooltip .tooltiptext {
        visibility: hidden;
        width: 120px;
        background-color: black;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 5px 0;

        /* Position the tooltip */
        position: absolute;
        z-index: 1;
    }

    .tooltip:hover .tooltiptext {
        visibility: visible;
    }
    /*tool tip*/

    body {
                background:url(img/carnation_background_pattern_1.gif);
                margin:0px;
                padding:0px;
                color:#CCCCCC;
                font-family:Verdana, Geneva, sans-serif;
            }
            .playground {
                position:absolute;
                height:400px;
                width:500px;
                margin:-200px 0 0 -250px;
                border-bottom: solid 3px #222;
                top:50%;left:50%;
                z-index:-1;
            }
            #ball {
                display:block;
                position:absolute;
                width:50px;
                height:50px;
                background:#480e6e;
                -moz-border-radius: 50%;
                -webkit-border-radius: 50%;
                border-radius: 50%; 
                z-index:-1;
            }
    </style>

</head>
<body id="page-top">
    <!-- Navigation -->
    <!-- Note: navbar-default and navbar-inverse are both supported with this theme. -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <img src="/img/two_logo.png" class="img-responsive" alt="">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li class="active">
                        <a class="page-scroll" href="#portfolio">Portfolio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#process">Process</a>
                    </li>
                    <li class="">
                        <a class="page-scroll" href="#work">Work</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#pricing">Habilities</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <header style="background-image: url('/img/two_bg-header.jpg');">
        <div class="intro-content">
            <img src="/img/doberman.jpg" class="img-responsive img-centered" alt="">
            <div class="brand-name">doberMan</div>
            <hr class="colored">
            <div class="brand-name-subtext"><a href="https://twitter.com/miguelgoma">by @miguelgoma</a></div>
            <div class="playground">
                <span id="ball"></span>
            </div>
        </div>
        <div class="scroll-down">
            <a class="btn page-scroll" href="#portfolio"><i class="fa fa-angle-down fa-fw"></i></a>
        </div>
    </header>

    <section id="portfolio">
        <div class="preview-pane">
            <h1>Portfolio web</h1>
        </div>
        <div class="container" id="previews">
            <div class="row wow fadeIn" >
                <div class="col-md-4">
                    <div class="preview-pane">
                        <a href="crud"><img class="img-responsive" src="{{ asset('/img/two_screenshot-fashion.png')}}" alt=""></a>
                            <h3>CRUD AJAX APLICATION</h3>
                            <p class="text-muted">
                                <em>An example of the agency theme with a video background for the header. A video background can be applied to any other theme!</em>
                            </p>
                                <i class="fa fa-info-circle" aria-hidden="true"></i> <> <i class="fa fa-laptop" aria-hidden="true"></i>                                
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="preview-pane">
                        <a href="scraping"><img class="img-responsive" src="{{ asset('/img/two_screenshot-legal.png')}}" alt=""></a>
                            <h3>Web scraping</h3>
                            <p class="text-muted">
                                <em>An example of the agency theme with a video background for the header. A video background can be applied to any other theme!</em>
                            </p>
                            <i class="fa fa-info-circle" aria-hidden="true"></i> <> <i class="fa fa-laptop" aria-hidden="true"></i>                        
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="preview-pane">
                        <a href="stripe"><img class="img-responsive" src="{{ asset('/img/two_screenshot-agency.png')}}" alt=""></a>
                            <h3>ECOMMERCE WITH STRIPE</h3>
                            <p class="text-muted">
                                <em>An example of the agency theme with a video background for the header. A video background can be applied to any other theme!</em>
                            </p>
                            <i class="fa fa-info-circle" aria-hidden="true"></i> <> <i class="fa fa-laptop" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="row content-row wow fadeIn">
            <div class="col-md-4">
                    <div class="preview-pane">
                        <a href="twitter"><img class="img-responsive" src="{{ asset('/img/two_screenshot-agency.png')}}" alt=""></a>
                            <h3>API Twitter</h3>
                        <p class="text-muted">
                                <em>An example of the agency theme with a video background for the header. A video background can be applied to any other theme!</em>
                            </p>
                                <i class="fa fa-info-circle" aria-hidden="true"></i> <> <i class="fa fa-laptop" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="preview-pane">
                        <a href="voice"><img class="img-responsive" src="{{ asset('/img/two_screenshot-creative.png')}}" alt=""></a>
                            <h3>VOICE BUNNY</h3>
                        <p class="text-muted">
                                <em>An example of the agency theme with a video background for the header. A video background can be applied to any other theme!</em>
                            </p>
                                <i class="fa fa-info-circle" aria-hidden="true"></i> <> <i class="fa fa-laptop fa-2" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="preview-pane">
                        <a href="maps"><img class="img-responsive" src="{{ asset('/img/two_screenshot-culinary.png')}}" alt=""></a>
                            <h3>GOOGLE MAPS</h3>
                        <p class="text-muted">
                                <em>An example of the agency theme with a video background for the header. A video background can be applied to any other theme!</em>
                            </p>
                                <i class="fa fa-info-circle" aria-hidden="true"></i> <> <i class="fa fa-laptop" aria-hidden="true"></i>
                    </div>
                </div>
            </div>

            <div class="row content-row wow fadeIn">
                <div class="col-md-3">
                    <div class="preview-pane">
                        <a href="agency"><img class="img-responsive" src="{{ asset('/img/two_screenshot-agency.png')}}" alt=""></a>
                        <h3>Animations </h3>
                        <p class="text-muted"><em>An example of the agency theme with a video background for the header.</em></p>
                        <i class="fa fa-info-circle" aria-hidden="true"></i> <> <i class="fa fa-laptop" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="preview-pane">
                        <a href="newsletters">
                        <img class="img-responsive" src="{{ asset('/img/two_screenshot-creative.png')}}" alt=""></a>
                        <h3>NEWSLETTERS</h3>
                        <p class="text-muted"><em>An example of the agency theme with a video background for the header.</em></p>
                        <i class="fa fa-info-circle" aria-hidden="true"></i> <> <i class="fa fa-laptop" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="preview-pane">
                        <a href="quote">
                        <img class="img-responsive" src="{{ asset('/img/two_screenshot-culinary.png')}}" alt=""></a>
                        <h3>Cotizador de autos</h3>
                        <p class="text-muted"><em>An example of the agency theme with a video background for the header.</em></p>
                        <i class="fa fa-info-circle" aria-hidden="true"></i> <> <i class="fa fa-laptop" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="preview-pane">
                        <a href="data">
                        <img class="img-responsive" src="{{ asset('/img/two_screenshot-culinary.png')}}" alt=""></a>
                        <h3>MANIPULACION DE DATOS</h3>
                        <p class="text-muted"><em>An example of the agency theme with a video background for the header.</em></p>
                        <i class="fa fa-info-circle" aria-hidden="true"></i> <> <i class="fa fa-laptop" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            </div>            
        </div>
        <hr class="colored">
    </section>
    <section id="about">
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col-lg-12 wow fadeIn" style="visibility: show; animation-name: none;">
                    <h1>Un sitio dice mas que mil palabras</h1>
                    <p>El propósito de este sitio es mostrar el trabajo y habilidades de su creador @miguelgoma.</p>
                    <p>Formado como programador y diseñador web por gusto me apasionan las tecnologías web y construir productos que generen riqueza y bienestar para todos.</p>
                    <hr class="colored">
                </div>
            </div>
            <div class="row text-center content-row">
                <div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay=".2s" style="visibility: show; animation-delay: 0.2s; animation-name: none;">
                    <div class="about-content">
                        <i class="fa fa-eye fa-4x"></i>
                        <h3>Retina Ready</h3>
                        <p>This theme includes the retina.js plugin for easy retina image support so your images and graphics will look great on mobile devices!</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay=".4s" style="visibility: show; animation-delay: 0.4s; animation-name: none;">
                    <div class="about-content">
                        <i class="fa fa-edit fa-4x"></i>
                        <h3>Easy to Edit</h3>
                        <p>Vitality is built using Bootstrap 3, and is easy to edit and customize. LESS files are included as well for deeper customization.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay=".6s" style="visibility: show; animation-delay: 0.6s; animation-name: none;">
                    <div class="about-content">
                        <i class="fa fa-tablet fa-4x"></i>
                        <h3>Responsive</h3>
                        <p>When building this theme, we've paid close attention to how it looks on various screen sizes. Try it out on a phone or tablet!</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay=".8s" style="visibility: show; animation-delay: 0.8s; animation-name: none;">
                    <div class="about-content">
                        <i class="fa fa-heart fa-4x"></i>
                        <h3>Built with Love</h3>
                        <p>All of our themes are crafted with care, and we strive to make your experience as one of our customers the best as possible.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <aside class="cta-quote" style="background-image: url('/img/two-bg-aside.jpg');">
        <div class="container wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <span class="quote">Un buen <span class="text-primary">diseño</span> es encontrar el perfecto balance entre la forma en como se <span class="text-primary"> ve </span> y como <span class="text-primary">funciona</span>.</span>
                    <hr class=" colored">
                    <a class="btn btn-outline-light page-scroll" href="#contact">Averigualo</a>
                </div>
            </div>
        </div>
    </aside>
    <section id="process" class="services">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12 wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
                    <h2>Nuestro proceso</h2>
                    <hr class="colored">
                    <p>He aquí un resumen de cómo nos acercamos a cada nuevo proyecto.</p>
                </div>
            </div>
            <div class="row content-row">
                <div class="col-md-4 wow fadeIn animated" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                    <div class="media">
                        <div class="pull-left">
                            <i class="fa fa-clipboard"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Plan</h3>
                            <ul>
                                <li>Entrevista con el cliente</li>
                                <li>Recopilar datos de los consumidores</li>
                                <li>Crear estrategia de contenido</li>
                                <li>Analizar la investigación</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wow fadeIn animated" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                    <div class="media">
                        <div class="pull-left">
                            <i class="fa fa-pencil"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Creación</h3>
                            <ul>
                                <li>Construir bocetos</li>
                                <li>Retroalimentacipon de información de los clientes</li>
                                <li>Desarrollo de Código</li>
                                <li>Apoyo de marketing</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wow fadeIn animated" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeIn;">
                    <div class="media">
                        <div class="pull-left">
                            <i class="fa fa-rocket"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Lanzamiento</h3>
                            <ul>
                                <li>Implementar página web</li>
                                <li>Lanzamiento de un producto de mercado</li>
                                <li>Recopilar datos UX</li>
                                <li>Detectar areas de oportunidad</li>
                                <li>Mantenimiento trimestral</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="work" class="bg-gray">
        <div class="container text-center wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
            <h2>Our Work</h2>
            <hr class="colored">
            <p>Examples of our work which represent our design and marketing capabilities.</p>
        </div>
    </section>
    <section id="pricing" class="pricing" style="background-image: url('/img/two_bg-pricing.jpg')">
        <div class="container wow fadeIn" style="visibility: hidden; animation-name: none;">
            <div class="row text-center">
                <div class="col-lg-12">
                    <h2>Habilidades</h2>
                    <hr class="colored">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, quae, laborum, voluptate delectus odio doloremque error porro obcaecati nemo animi ducimus quaerat nostrum? Ab molestiae eaque et atque architecto reiciendis.</p>
                </div>
            </div>
            <div class="row content-row">
                <div class="col-md-4">
                    <div class="pricing-item featured-first">
                        <h3>Front end</h3>
                        <hr class="colored">
                        <div class="price"><span class="number"><sup>$</sup>25</span> / month</div>
                        <ul class="list-group">
                            <li class="list-group-item">Angular JS</li>
                            <li class="list-group-item">jQuery</li>
                            <li class="list-group-item">CSS 2 y 3</li>
                            <li class="list-group-item">HTML 5</li>
                            <li class="list-group-item">Bootstrap 3</li>
                            <li class="list-group-item">Unlimited Support</li>
                        </ul>
                        <a href="#" class="btn btn-outline-dark">Sign Up</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pricing-item featured">
                        <h3>Back end</h3>
                        <hr class="colored">
                        <div class="price"><span class="number"><sup>$</sup>50</span> / month</div>
                        <ul class="list-group">
                            <li class="list-group-item"><strong>PHP</strong> Laravel, Symfony y Zend 2</li>
                            <li class="list-group-item">Ruby</li>
                            <li class="list-group-item"><strong>Ruby on rails 4</strong> ORM</li>
                            <li class="list-group-item"> </li>                            
                            <li class="list-group-item"><strong>200 MB</strong> Storage</li>
                            <li class="list-group-item">Unlimited Support</li>
                        </ul>
                        <a href="#" class="btn btn-outline-dark">Sign Up</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pricing-item featured-last">
                        <h3>Others</h3>
                        <hr class="colored">
                        <div class="price"><span class="number"><sup>$</sup>150</span> / month</div>
                        <ul class="list-group">
                            <li class="list-group-item">Photoshop CS5.5</li>
                            <li class="list-group-item">Unlimited Forums</li>
                            <li class="list-group-item">Unlimited Reports</li>
                            <li class="list-group-item">3,000 Entries per Month</li>
                            <li class="list-group-item">200 MB Storage</li>
                            <li class="list-group-item">Unlimited Support</li>
                        </ul>
                        <a href="#" class="btn btn-outline-dark">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cta-form bg-dark">
        <div class="container text-center">
            <h3>Reciba un boletín con la descripción de servicios</h3>
            <hr class="colored">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- MailChimp Signup Form -->
                    <div id="mc_embed_signup">
                        <!-- Replace the form action in the line below with your MailChimp embed action! For more informatin on how to do this please visit the Docs! -->
                        <form role="form" action="//startbootstrap.us3.list-manage.com/subscribe/post?u=531af730d8629808bd96cf489&amp;id=afb284632f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate="">
                            <div class="input-group input-group-lg">
                                <input type="email" name="EMAIL" class="form-control" id="mce-EMAIL" placeholder="Ingresa tu Email...">
                                <span class="input-group-btn">
                                    <button type="submit" name="subscribe" id="mc-embedded-subscribe" class="btn btn-primary">Enviar!</button>
                                </span>
                            </div>
                            <div id="mce-responses">
                                <div class="response" id="mce-error-response" style="display:none"></div>
                                <div class="response" id="mce-success-response" style="display:none"></div>
                            </div>
                        </form>
                    </div>
                    <!-- End MailChimp Signup Form -->
                </div>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="container wow fadeIn" style="visibility: hidden; animation-name: none;">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Contacto</h2>
                    <hr class="colored">
                    <p>Por favor, cuéntenos sobre su próximo proyecto y vamos a hacerle saber lo que podemos hacer para ayudarle.</p>
                </div>
            </div>
            <div class="row content-row">
                <div class="col-lg-8 col-lg-offset-2">
                    <form name="sentMessage" id="contactForm" novalidate="">
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Nombre</label>
                                <input type="text" class="form-control" placeholder="Nombre" id="name" required="" data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="Email" id="email" required="" data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Teléfono</label>
                                <input type="tel" class="form-control" placeholder="Teléfono" id="phone" required="" data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Mensaje</label>
                                <textarea rows="5" class="form-control" placeholder="Mensaje" id="message" required="" data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-outline-dark">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <a href="https://wrapbootstrap.com/theme/vitality-multipurpose-one-page-theme-WB02K3KK3" class="btn btn-block btn-full-width">Buy Vitality Now!</a>
    <footer class="footer" style="background-image: url('/img/two_mex.jpg')">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-4 contact-details">
                    <h4><i class="fa fa-phone"></i> Call</h4>
                    <p>555-213-4567</p>
                </div>
                <div class="col-md-4 contact-details">
                    <h4><i class="fa fa-map-marker"></i> Visit</h4>
                    <p>3481 Melrose Place
                        <br>Beverly Hills, CA 90210</p>
                </div>
                <div class="col-md-4 contact-details">
                    <h4><i class="fa fa-envelope"></i> Email</h4>
                    <p><a href="mailto:mail@example.com">mail@example.com</a>
                    </p>
                </div>
            </div>
            <div class="row social">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-facebook fa-fw fa-2x"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-twitter fa-fw fa-2x"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin fa-fw fa-2x"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row copyright">
                <div class="col-lg-12">
                    <p class="small">© 2016 @miguelgoma</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="../js/principal/jquery.js"></script>
    <script src="../js/principal/bootstrap.min.js"></script>
    <script src="../js/principal/jquery.easing.min.js"></script>
    <script src="../js/principal/classie.js"></script>
    <script src="../js/principal/cbpAnimatedHeader.js"></script>
    <script src="../js/principal/owl.carousel.js"></script>
    <script src="../js/principal/jquery.magnific-popup.min.js"></script>
    <script src="../js/principal/core.js"></script>
    <script src="../js/principal/transition.js"></script>
    <script src="../js/principal/background.js"></script>
    <script src="../js/principal/jquery.mixitup.js"></script>
    <script src="../js/principal/wow.min.js"></script>
    <script src="../js/principal/contact_me.js"></script>
    <script src="../js/principal/jqBootstrapValidation.js"></script>
    <script src="../js/principal/vitality.js"></script>
</body>
    

</body></html>
    <!-- Core Scripts 
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>
    <script src="assets/js/plugins/jquery.easing.min.js"></script>-->

    <!-- Vitality Theme Scripts 
    <script src="assets/js/vitality.js"></script>-->

    <!--<script>
    // Smooth Scrolling: Smooth scrolls to an ID on the current page.
    $('a.page-scroll-demo').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top)
        }, 1250, 'easeInOutExpo');
        event.preventDefault();
    });
    </script>-->

    <script src="../js/jquery-1.9.1.min.js"></script>
    <script src="../js/jquery.lettering-0.6.1.min.js"></script>
    <script src="../js/jquery.scrollorama.js"></script>

    <script type="text/javascript">
    /*!
     * Vitality v1.3.5 (http://themes.startbootstrap.com/vitality-v1.3.5)
     * Copyright 2013-2015 Start Bootstrap Themes
     * To use this theme you must have a license purchased at WrapBootstrap (https://wrapbootstrap.com)
     */

    // Load WOW.js on non-touch devices
    var isPhoneDevice = "ontouchstart" in document.documentElement;
    $(document).ready(function() {
        if (isPhoneDevice) {
            //mobile
        } else {
            //desktop               
            // Initialize WOW.js
            wow = new WOW({
                offset: 50
            })
            wow.init();
        }
    });
    </script>
    <script type="text/javascript" src="../js/plugins/CSSPlugin.js"></script>
    <script type="text/javascript" src="../js/easing/EasePack.js"></script>
    <script type="text/javascript" src="../js/TimelineLite.js"></script>
    <script type="text/javascript" src="../js/TweenLite.js"></script>
    $( document ).ready(function() {
   

    <script language="javascript" type="text/javascript">
             $( document ).ready(function() {
                var ball = document.getElementById('ball'),
                    colors = ["#480e6e","#fc4239","#ffd400","#00c4df"];
                function play() {
                    ball.style.marginLeft = "0px";
                    ball.style.marginTop = "350px";
                    var tl = new TimelineLite({delay:0.5});
                    tl.to(ball, 0.5, {css:{marginTop:0}})
                      .to(ball, 1.25, {css:{marginTop:350}, ease:Bounce.easeOut})
                      .to(ball, 3.5, {css:{marginLeft:"+=450px"}}, -1.75)
                      .to(ball, 1, {css:{marginLeft:0, backgroundColor:colors[ Math.floor(Math.random() * colors.length) ]}}, 1)
                      .call(play);
                }
                play();
            });
    </script>