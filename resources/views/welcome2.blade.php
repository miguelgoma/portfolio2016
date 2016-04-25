<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Vitality</title>

    <!-- Bootstrap Core CSS -->
    <link href="https://doberman.herokuapp.com/../css/bootstrap.css" rel="stylesheet">

    <!-- Retina.js - Load first for faster HQ mobile images. -->
    <script src="assets/js/plugins/retina/retina.min.js"></script>

    <!-- Font Awesome -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Default Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,600,500,700,800,900" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="assets/css/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="assets/css/plugins/owl-carousel/owl.theme.css" rel="stylesheet" type="text/css">
    <link href="assets/css/plugins/owl-carousel/owl.transitions.css" rel="stylesheet" type="text/css">
    <link href="assets/css/plugins/magnific-popup.css" rel="stylesheet" type="text/css">
    <link href="assets/css/plugins/jquery.fs.wallpaper.css" rel="stylesheet" type="text/css">

    <!-- Vitality Theme CSS -->
    <link href="assets/css/vitality-red.css" rel="stylesheet" type="text/css">

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
    </style>

</head>

<body>
    <div class="demo-header">
        <div class="demo-header-content">
            <div class="container">
                <h1>Welcome to México!</h1>
                <hr class="colored">
                <p>Mexico City, or the City of Mexico (Spanish: Ciudad de México About this sound audio (help·info) American Spanish: [sjuˈða(ð) ðe ˈméxiko]; abbreviated as "CDMX"), is the capital of Mexico.[12] As an "alpha" global city,[13] Mexico City is one of the most important financial centers in the Americas.[14] It is located in the Valley of Mexico (Valle de México), a large valley in the high plateaus at the center of Mexico, at an altitude of 2,240 metres (7,350 ft). The city consists of sixteen municipalities (previously called boroughs).</p>
                <ul class="list-inline cta-list">
                    <li>
                        <a href="#previews" class="btn btn-outline-light page-scroll-demo">View Demos</a>
                    </li>
                    <li>
                        <a href="docs/index.html" class="btn btn-outline-light page-scroll-demo">Documentation</a>
                    </li>
                </ul>
                <h1>Welcome to Vitality!</h1>
                <hr class="colored">
                <p>All of the sample layouts are included with your download. Select an example layout below to preview!</p>
                <ul class="list-inline cta-list">
                    <li>
                        <a href="#previews" class="btn btn-outline-light page-scroll-demo">View Demos</a>
                    </li>
                    <li>
                        <a href="docs/index.html" class="btn btn-outline-light page-scroll-demo">Documentation</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="preview-pane">
            <h1>Portafolio web</h1>
    </div>
    <div class="container" id="previews">
        <div class="row content-row">
            <div class="col-md-4">
                <div class="preview-pane">
                    <a href="agency.html">
                        <img class="img-responsive" src="{{ asset('/img/two_screenshot-agency.png')}}" alt="">
                        <h3>Agency</h3>
                        <hr class="colored">
                        <p class="text-muted">Ideal For:</p>
                        <ul class="list-unstyled text-muted">
                            <li>
                                <em>Agencies</em>
                            </li>
                            <li>
                                <em>Businesses</em>
                            </li>
                            <li>
                                <em>Consultants</em>
                            </li>
                        </ul>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="preview-pane">
                    <a href="creative.html">
                    <img class="img-responsive" src="{{ asset('/img/two_screenshot-creative.png')}}" alt="">
                        <h3>Creative <span class="label label-primary">New!</span></h3>
                        <hr class="colored">
                        <p class="text-muted">Ideal For:</p>
                        <ul class="list-unstyled text-muted">
                            <li>
                                <em>Personal Portfolios</em>
                            </li>
                            <li>
                                <em>Freelancers</em>
                            </li>
                            <li>
                                <em>Photographers</em>
                            </li>
                        </ul>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="preview-pane">
                    <a href="culinary.html">
                    <img class="img-responsive" src="{{ asset('/img/two_screenshot-culinary.png')}}" alt="">
                        <h3>Culinary</h3>
                        <hr class="colored">
                        <p class="text-muted">Ideal For:</p>
                        <ul class="list-unstyled text-muted">
                            <li>
                                <em>Restaurants</em>
                            </li>
                            <li>
                                <em>Bakeries</em>
                            </li>
                            <li>
                                <em>Caterers</em>
                            </li>
                        </ul>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="preview-pane">
                    <a href="fashion.html">
                    <img class="img-responsive" src="{{ asset('/img/two_screenshot-fashion.png')}}" alt="">
                        <h3>Fashion</h3>
                        <hr class="colored">
                        <p class="text-muted">Ideal For:</p>
                        <ul class="list-unstyled text-muted">
                            <li>
                                <em>Boutiques</em>
                            </li>
                            <li>
                                <em>Designers</em>
                            </li>
                            <li>
                                <em>Retail Stores</em>
                            </li>
                        </ul>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="preview-pane">
                    <a href="legal.html">
                    <img class="img-responsive" src="{{ asset('/img/two_screenshot-legal.png')}}" alt="">
                        <h3>Legal</h3>
                        <hr class="colored">
                        <p class="text-muted">Ideal For:</p>
                        <ul class="list-unstyled text-muted">
                            <li>
                                <em>Lawyers</em>
                            </li>
                            <li>
                                <em>Law Firms</em>
                            </li>
                            <li>
                                <em>Consultants</em>
                            </li>
                        </ul>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="preview-pane">
                    <a href="video.html">
                    <img class="img-responsive" src="{{ asset('/img/two_screenshot-agency.png')}}" alt="">
                        <h3>Video</h3>
                        <hr class="colored">
                        <p class="text-muted">
                            <em>An example of the agency theme with a video background for the header. A video background can be applied to any other theme!</em>
                        </p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
                <div class="preview-pane">
                    <a href="agency.html">
                        <img class="img-responsive" src="{{ asset('/img/two_screenshot-agency.png')}}" alt="">
                        <h3>Agency</h3>
                        <hr class="colored">
                        <p class="text-muted">Ideal For:</p>
                        <ul class="list-unstyled text-muted">
                            <li>
                                <em>Agencies</em>
                            </li>
                            <li>
                                <em>Businesses</em>
                            </li>
                            <li>
                                <em>Consultants</em>
                            </li>
                        </ul>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="preview-pane">
                    <a href="creative.html">
                    <img class="img-responsive" src="{{ asset('/img/two_screenshot-creative.png')}}" alt="">
                        <h3>Creative <span class="label label-primary">New!</span></h3>
                        <hr class="colored">
                        <p class="text-muted">Ideal For:</p>
                        <ul class="list-unstyled text-muted">
                            <li>
                                <em>Personal Portfolios</em>
                            </li>
                            <li>
                                <em>Freelancers</em>
                            </li>
                            <li>
                                <em>Photographers</em>
                            </li>
                        </ul>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="preview-pane">
                    <a href="culinary.html">
                    <img class="img-responsive" src="{{ asset('/img/two_screenshot-culinary.png')}}" alt="">
                        <h3>Culinary</h3>
                        <hr class="colored">
                        <p class="text-muted">Ideal For:</p>
                        <ul class="list-unstyled text-muted">
                            <li>
                                <em>Restaurants</em>
                            </li>
                            <li>
                                <em>Bakeries</em>
                            </li>
                            <li>
                                <em>Caterers</em>
                            </li>
                        </ul>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Core Scripts -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>
    <script src="assets/js/plugins/jquery.easing.min.js"></script>

    <!-- Vitality Theme Scripts -->
    <script src="assets/js/vitality.js"></script>

    <script>
    // Smooth Scrolling: Smooth scrolls to an ID on the current page.
    $('a.page-scroll-demo').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top)
        }, 1250, 'easeInOutExpo');
        event.preventDefault();
    });
    </script>




</body></html>