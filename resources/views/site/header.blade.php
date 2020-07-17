<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Impact digital school</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->

    <!-- Bootstrap CSS File -->
    <link href="{{asset('/site/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{asset('/site/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('/site/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('/site/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('/site/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('/site/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{asset('/site/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('/site/css/plus.css')}}" rel="stylesheet">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <link href="{{asset('/site/your-path-to-fontawesome/css/fontawesome.css')}}" rel="stylesheet">
    <link href="{{asset('/site/your-path-to-fontawesome/css/brands.css')}}" rel="stylesheet">
    <link href="{{asset('/site/your-path-to-fontawesome/css/solid.css')}}" rel="stylesheet">

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <!-- =======================================================
        Theme Name: Rapid
        Theme URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
        Author: BootstrapMade.com
        License: https://bootstrapmade.com/license/
    ======================================================= -->
</head>

<body>
    <main>
        <!--==========================
            Header
        ============================-->
        <header id="header">
            <div class="container">
                <div class="logo float-left">
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <a href="{{ url('/') }}" class="scrollto"><span><img class="" src="{{asset('/site/img/logo.png')}}"></span></a>
                    <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
                </div>

                <nav class="main-nav d-none d-lg-block">
                    <ul id="navbar">
                        <li class="btn-0"><a href="">CONNEXION</a></li>
                        <li class=""><a href="{{ url('/emplois') }}">offres d'emplois</a></li>
                        <li class=""><a href="{{ url('/l_ecole') }}">L'ecole</a></li>
                        <li><a href="{{ url('/evenement') }}">Évènement</a></li>
                        <li class=""><a href="{{ url('/projets') }}">Projet</a></li>
                        <li class=""><a href="{{ url('/nos_classes') }}">formations</a></li>
                    </ul>
                </nav><!-- .main-nav -->
            </div>
        </header><!-- #header -->

        @yield('content')

        <!-- Modal HTML -->
        <div id="myModal" class="modal fade">
            <div class="modal-dialog modal-lg modal-confirm">
                <div class="modal-content" id="inscription_content">
                    <div class="modal-header d-flex justify-content-center">
                        <h1 class="title-eve">Inscription<span> a la journée</span> de formation</h1>
                    </div>
                    <div class="modal-body">
                        <form class="row" id="inscription_form">

                            <div id="notification"></div>

                            <div class="form-group col-md-6">
                                <input class="form-control form-control-lg" id="nom" name="nom" type="text" placeholder="Votre nom">
                                <small id="" class="form-text text-muted">Indiquez votre nom dans ce champs.</small>
                            </div>
                            <div class="form-group col-md-6">
                                <input class="form-control form-control-lg" id="prenom" name="prenom" type="text" placeholder="Votre prenom">
                                <small id="" class="form-text text-muted">Indiquez votre prenom dans ce champs.</small>
                            </div>
                            <div class="form-group col-md-6">
                                <input class="form-control form-control-lg" id="telephone" name="telephone" type="text" placeholder="Telephone">
                                <small id="" class="form-text text-muted">Indiquez votre numero de telephone dans ce champs.</small>
                            </div>
                            <div class="form-group col-md-6">
                                <input class="form-control form-control-lg" id="age" name="age" type="text" placeholder="Age">
                                <small id="" class="form-text text-muted">Indiquez votre numero dans ce champs.</small>
                            </div>
                            <div class="form-group col-md-12">
                                <input class="form-control form-control-lg" id="email" name="email" type="text" placeholder="Adresse email">
                                <small id="" class="form-text text-muted">Indiquez votre adresse email dans ce champs.</small>
                            </div>
                            <div class="form-group col-md-12">
                                <input class="form-control form-control-lg" id="niveau" name="niveau" type="text" placeholder="Niveau d'etude">
                                <small id="" class="form-text text-muted">Champs obligatoire</small>
                            </div>
                            <div class="form-group col-md-12">
                                <input class="form-control form-control-lg" id="profession" name="profession" type="text" placeholder="Profession actuelle">
                                <small id="" class="form-text text-muted">Champs obligatoire</small>
                            </div>

                            <div class="form-group col-md-12">
                                <textarea class="form-control form-control-lg" id="attente" name="attente" placeholder="Quelle sont vos attente pour cette formation"></textarea>
                                <small id="" class="form-text text-muted">200 carateres </small>
                            </div>

                            <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group col-md-12">
                                <button id="sinscrire" type="submit" class="btn-lg-2">Enregistrer</button>
                                {{-- <a href="#confModal" class="btn-lg-3" data-toggle="modal">ok</a> --}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- large modal -->
        {{-- <div class="modal fade" id="confModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-confirm">
                <!--Content-->
                <div class="modal-content text-center">
                    <!--Header-->
                    <div class="modal-header d-flex justify-content-center">
                        <h1 class="heading">Bienvenus dans la famille</h1>
                    </div>
                    <!--Body-->
                    <div class="modal-body">
                        <i class="fas fa-bell fa-4x animated rotateIn mb-4"></i>
                        <h5>Toute l'equipe vous remercie pour votre inscription</h5>
                    </div>
                </div>
                <!--/.Content-->
            </div>
        </div> --}}

        <!--==========================
            Features Section
        ============================-->
        <section id="features">
            <div class="container">
            </div>
        </section><!-- #about -->
    </main>

    <!--==========================
        Footer
    ============================-->
    <footer id="footer" class="section-bg">
        <div class="footer-top">
            <div class="container">
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8 text-center">
                            <div class="footer-newsletter">
                                <h2>Notre newletter</h2>
                                <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem.</p>
                                <form action="" method="post">
                                <input type="email" name="email"><input type="submit"  value="Subscribe">
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="footer-info">
                                <h3 class="logo"><img src="{{asset('/site/img/logo.png')}}" style="max-height: 70px;"></h3>
                                <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
                            </div>
                        </div>

                        <div class="col-sm-2">
                            <div class="footer-links">
                                <h4>A propos</h4>
                                <ul>
                                <li><a href="#">Qui nous somme</a></li>
                                <li><a href="#">Notre cible</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">L'equipe</a></li>
                                <li><a href="#">Blogs</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-sm-2">
                            <div class="footer-links">
                                <h4>Ressource</h4>
                                <ul>
                                <li><a href="#">Formation</a></li>
                                <li><a href="#">Événements</a></li>
                                <li><a href="#">Projet</a></li>
                                <li><a href="#">Carrière</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-sm-2">
                            <div class="footer-links">
                                <h4>Contacts</h4>
                                <p>
                                Abidjan ,Cocody <br>
                                COTE D'IVOIRE<br>
                                <strong>Phone:</strong> +225<br>
                                <strong>Email:</strong> infos<br>
                                </p>
                            </div>
                        </div>
                    </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>Impact-digital-school</strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="">Impactafric</a>
            </div>
        </div>
    </footer><!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <!-- Uncomment below i you want to use a preloader -->
    <!-- <div id="preloader"></div> -->

    <!-- JavaScript Libraries -->
    <script src="{{asset('/site/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/site/lib/jquery/jquery-migrate.min.js')}}"></script>
    <script src="{{asset('/site/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('/site/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('/site/lib/mobile-nav/mobile-nav.js')}}"></script>
    <script src="{{asset('/site/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('/site/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('/site/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('/site/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('/site/lib/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('/site/lib/lightbox/js/lightbox.min.js')}}"></script>
    <!-- Contact Form JavaScript File -->
    <script src="{{asset('/site/contactform/contactform.js')}}"></script>

    <!-- Template Main Javascript File -->
    <script src="{{asset('/site/js/main.js')}}"></script>

    @yield('set_page_js')

</body>
</html>
