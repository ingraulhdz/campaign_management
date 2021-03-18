

        

        <!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    
    <!--====== Title ======-->
    <title>Administrador de campañas </title>
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">
        
    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="assets/css/animate.css">
        
    <!--====== Glide CSS ======-->
    <link rel="stylesheet" href="assets/css/glide.core.css">
        
    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="assets/css/LineIcons.2.0.css">
        
    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="assets/css/bootstrap-5.0.5-alpha.min.css">
    
    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="assets/css/default.css">
    
    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="assets/css/style.css">
    
</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->

    <!--====== HEADER PART START ======-->

    <section id="home" class="header_area">
        <div id="header_navbar" class="header_navbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.html">
                                <img id="logo" src="assets/images/logo.svg" alt="Logo">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a class="page-scroll active" href="#home">Inicio</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#about">Acerca de </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#services">Servicios</a>
                                    </li>
                                 
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#team">Equipo</a>
                                    </li>
                                   
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#contact">Contacto</a>
                                    </li>

                                       @if (Route::has('login'))
                @auth
                                                    <li class="nav-item">

                 <a  href="{{ url('/home') }}">Home</a>
</li>
                @else
                                                        <li class="nav-item">

                    <a href="{{ route('login') }}"> Iniciar Sesion</a>
</li>
                                      
                    @if (Route::has('register'))
                                                            <li class="nav-item">

                                         <a href="{{ route('register') }}">Registrarse</a>
</li>
                    @endif
                @endauth
            </div>
        @endif


        




                                       
                                </ul>
                            </div> <!-- navbar collapse -->
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header navbar -->

        <div class="header_hero">
            <div class="single_hero bg_cover d-flex align-items-center" style="background-image: url(assets/images/hero.jpg)">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-10">
                            <div class="hero_content text-center">
                                <h2 class="hero_title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">
                                    Campaign</br> Management </h2>
                                <p class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s"
                                >
La herramienta que necesitas para administrar tus campañas politicas                            </br>
                        </p>
                                <a href="#features" class="main-btn wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.8s">Explorar</a>
                            </div> <!-- hero content -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- single hero -->
        </div> <!-- header hero -->
    </section>

    <!--====== HEADER PART ENDS ======-->
    
    <!--====== FEATURES PART START ======-->

    <section id="features" class="features_area pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center pb-25">
                        <h4 class="title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">¿Por que nosotros?</h4>
                        <p class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.4s">
                            Administramos tu campaña politica, recursos materiales, humanos y estrategias

                        </p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7">
                    <div class="single_features text-center mt-30 wow fadeInUp" data-wow-duration="1.3s"
                        data-wow-delay="0.2s">
                        <i class="lni lni-layers"></i>
                        <h4 class="features_title">Administracion de Informacion</a></h4>
                        <p>Manejamos y analisamos la informacion, de tu estructura, asi como de tus partidarios generandota analisis automaticos</p>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-4 col-md-7">
                    <div class="single_features text-center mt-30 wow fadeInUp" data-wow-duration="1.3s"
                        data-wow-delay="0.4s">
                        <i class="lni lni-layout"></i>
                        <h4 class="features_title">Applicacion intuitiva</a></h4>
                        <p>El uso de nuestra aplicacion es muy intuitiva lo cual permite ser usada, por personas con alto y bajo conocimiento informatico.</p>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-4 col-md-7">
                    <div class="single_features text-center mt-30 wow fadeInUp" data-wow-duration="1.3s"
                        data-wow-delay="0.6s">
                        <i class="lni lni-bolt"></i>
                        <h4 class="features_title">Eficaz</a></h4>
                        <p> Tu informacion y la de tu equipo esta a tu acceso en multiples dispositivos.</p>
                    </div> <!-- single features -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== FEATURES PART ENDS ======-->
    
    <!--====== ABOUT PART START ======-->

    <section id="about" class="pt-130">
        <div class="about_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about_content pt-120 pb-130">
                            <div class="section_title pb">
                                <h4 class="title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">Acerca de nosotros</h4>
                                <p class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.4s">Somos un equipo de esperimentados desarrolladores, de software, Politologos  e en Sistemas con mas de 20 años de experiencia.</p>
                                <p class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.6s">
                                    Hemos administrado campañas municipales, diputaciones, y gobernaturas, desde hace 6 años, lo cual nos ha permitodo perfeccionar la administracion de campañas politicas.
                                </p>
                            </div> <!-- section title -->
                            <a href="#" class="main-btn wow fadeInUp" data-wow-duration="1.3s"
                                data-wow-delay="0.7s">Saber Mas</a>
                        </div> <!-- about content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            
            <div class="about_image bg_cover wow fadeInLeft" data-wow-duration="1.3s" data-wow-delay="0.2s"
                style="background-image: url(assets/images/about.jpg)">
                <div class="image_content">
                    <h4 class="experience"><span>10</span> Años de experiencia</h4>
                </div>
            </div> <!-- about image -->
        </div>
    </section>

    <!--====== ABOUT PART ENDS ======-->
    
    <!--====== FEATURES PART START ======-->

    <section id="services" class="features_area pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center pb-25">
                        <h4 class="title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">
                            Nuestros  Servicios</h4>
                        <p class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.4s">
                            Ofrecemos un amplio portafolio  de servicios dentro de la tecnologia de informaion</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_features text-center mt-60 wow fadeInUp" data-wow-duration="1.3s"
                        data-wow-delay="0.2s">
                        <i class="lni lni-briefcase"></i>
                        <h4 class="features_title">Digital Business</h4>
                        <p>
                            Adentramos tu campaña al mundo digital, con todos nuestros servicios en  la nube dejando la informacion al acceso de todo tu equipo cuando y donde sea requerida  .</p>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_features text-center mt-60 wow fadeInUp" data-wow-duration="1.3s"
                        data-wow-delay="0.3s">
                        <i class="lni lni-clipboard"></i>
                        <h4 class="features_title">Startup Business</h4>
                        <p>Analizamos y creamos tus estruturas de trabajo desde 0 o adaptamos tu estructura existente.</p>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_features text-center mt-60 wow fadeInUp" data-wow-duration="1.3s"
                        data-wow-delay="0.4s">
                        <i class="lni lni-target-revenue"></i>
                        <h4 class="features_title">Business Investment</h4>
                        <p>Adaptamos la aplicacion a tu estructura y presupuesto ahorrando costos y optimizando resultados.</p>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_features text-center mt-60 wow fadeInUp" data-wow-duration="1.3s"
                        data-wow-delay="0.2s">
                        <i class="lni lni-invention"></i>
                        <h4 class="features_title">Business Solutions</h4>
                        <p>Lorem ipsum dolor sit amet, sadipscing elitr, sed diam nonumy eirmod tempor invidunt labor dolore magna .</p>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_features text-center mt-60 wow fadeInUp" data-wow-duration="1.3s"
                        data-wow-delay="0.3s">
                        <i class="lni lni-bar-chart"></i>
                        <h4 class="features_title">Business Analysis</h4>
                        <p>Analizamos toda la informacion de tu estructura y tus partidarios, la mostramos de manera intuitiva para analizis mas optimos y toma de decisiones .</p>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_features text-center mt-60 wow fadeInUp" data-wow-duration="1.3s"
                        data-wow-delay="0.4s">
                        <i class="lni lni-calendar"></i>
                        <h4 class="features_title">Consulting Business</h4>
                        <p>Contamos con  una consultora experimentada, en diferentes ramas dentro de la Tecnologias de Informacion y la Politica Mexicana.</p>
                    </div> <!-- single features -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== FEATURES PART ENDS ======-->
    
    <!--====== PORTFOLIO PART START ======-->

    <!--====== TESTIMONIAL PART START ======-->

    <section id="testimonial" class="testimonial_area pt-130 pb-130 bg_cover" style="background-image: url(assets/images/testimonial.jpg)">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="glide testimonial_active">
                        <div class="glide__track" data-glide-el="track">
                            <div class="glide__slides">
                                <div class="glide__slide single_testimonial text-center">
                                    <img src="assets/images/author-1.jpg" alt="author">
                                    <h5 class="author_name">Isabela Moreira</h5>
                                    <span>UX Specialist, Yoast</span>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At
                                        vero eos accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.
                                    </p>
                                </div>
                                <div class="glide__slide single_tes
    <!--====== CONTACT PART START ======-->

    <section id="contact" class="contact_area bg_cover pt-120 pb-130" style="background-image: url(assets/images/contact_bg.jpg)">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title section_title_2 text-center pb-25">
                        <h4 class="title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">Contact Us</h4>
                        <p class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.4s">Lorem ipsum dolor sit
                            amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labor dolore.</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            
            <form id="contact-form" action="assets/contact.php" method="post" class="wow fadeInUp"
                data-wow-duration="1.3s" data-wow-delay="0.4s">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="single_form">
                            <input type="text" placeholder="Name" name="name" id="name" required>
                        </div> <!-- single form -->
                    </div>
                    <div class="col-lg-6">
                        <div class="single_form">
                            <input type="email" placeholder="Email" name="email" id="email" required>
                        </div> <!-- single form -->
                    </div>
                    <div class="col-lg-6">
                        <div class="single_form">
                            <input type="text" placeholder="Phone Number" name="number" id="number" required>
                        </div> <!-- single form -->
                    </div>
                    <div class="col-lg-6">
                        <div class="single_form">
                            <input type="text" placeholder="Subject" name="subject" id="subject" required>
                        </div> <!-- single form -->
                    </div>
                    <div class="col-lg-12">
                        <div class="single_form">
                            <textarea placeholder="Message" name="message" id="message" required></textarea>
                        </div> <!-- single form -->
                    </div>
                    
                    <p class="form-message"></p>
                    
                    <div class="col-lg-12">
                        <div class="single_form text-center">
                            <button class="main-btn" type="submit">SUBMIT</button>
                        </div> <!-- single form -->
                    </div>
                </div> <!-- row -->
            </form>
        </div> <!-- container -->
    </section>

    <!--====== CONTACT PART ENDS ======-->
    
    <!--====== FOOTER PART START ======-->

    <footer id="footer" class="footer_area">
        <div class="container">
            <div class="footer_wrapper text-center d-lg-flex align-items-center justify-content-between">
                <p class="credit">Designed and Developed by <a href="https://uideck.com" rel="nofollow">UIdeck</a></p>
                <div class="footer_social pt-15">
                    <ul>
                        <li><a href="#"><i class="lni lni-facebook-original"></i></a></li>
                        <li><a href="#"><i class="lni lni-twitter-original"></i></a></li>
                        <li><a href="#"><i class="lni lni-instagram-original"></i></a></li>
                        <li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                    </ul>
                </div> <!-- footer social -->
            </div> <!-- footer wrapper -->
        </div> <!-- container -->
    </footer>

    <!--====== FOOTER PART ENDS ======-->
    
    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->

    
    <!--====== Bootstrap js ======-->
    <script src="assets/js/bootstrap.bundle-5.0.0.alpha-min.js"></script>
    
    <!--====== glide js ======-->
    <script src="assets/js/glide.min.js"></script>
    
    <!--====== wow js ======-->
    <script src="assets/js/wow.min.js"></script>
    
    <!--====== Contact Form js ======-->
    <script src="assets/js/contact-form.js"></script>
    
    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>
    
</body>

</html>
