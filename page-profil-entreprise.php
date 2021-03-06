<<<<<<< HEAD
<?php

require_once ('connexion.php');
$appliBD = new connexion();

session_start();
//$idEntreprise = $_SESSION['idEntreprise'];

$contactEmail1 = $_SESSION['email'];
$idEntrepriseByEmail = $appliBD->getEntrepriseByEmail($contactEmail1);
$idEntreprise = $idEntrepriseByEmail->getId();
$entreprise = $appliBD->getEntrepriseById($idEntreprise);
$listeProjetEntreprise = $appliBD->getListeProjetEntreprise($idEntreprise);
?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <!-- title -->
        <title>Eureka – Creative Agency, Corporate and Portfolio Multi-purpose Template</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <meta name="author" content="ThemeZaa">
        <!-- description -->
        <meta name="description" content="Eureka is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose agency and portfolio HTML5 template with 25 ready home page demos.">
        <!-- keywords -->
        <meta name="keywords" content="creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, agency, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, personal, masonry, grid, coming soon, faq">
        <!-- favicon -->
        <link rel="shortcut icon" href="images/favicon.png">
        <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
        <!-- animation -->
        <link rel="stylesheet" href="css/animate.css" />
        <!-- bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <!-- et line icon -->
        <link rel="stylesheet" href="css/et-line-icons.css" />
        <!-- font-awesome icon -->
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <!-- themify icon -->
        <link rel="stylesheet" href="css/themify-icons.css">
        <!-- swiper carousel -->
        <link rel="stylesheet" href="css/swiper.min.css">
        <!-- justified gallery  -->
        <link rel="stylesheet" href="css/justified-gallery.min.css">
        <!-- magnific popup -->
        <link rel="stylesheet" href="css/magnific-popup.css" />
        <!-- revolution slider -->
        <link rel="stylesheet" type="text/css" href="revolution/css/settings.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
        <link rel="stylesheet" type="text/css" href="revolution/css/navigation.css">
        <!-- bootsnav -->
        <link rel="stylesheet" href="css/bootsnav.css">
        <!-- style -->
        <link rel="stylesheet" href="css/style.css" />
        <!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css" />
        <!--[if IE]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->
        <style>

        .section2 {
          padding: 70px;
        }


        </style>
    </head>
    <body>
        <!-- start header -->
        <header>
            <!-- start navigation -->
            <nav class="navbar navbar-default bootsnav bg-white header-light nav-box-width navbar-top">
            <div class="container-fluid nav-header-container">
                <div class="row">
                    <!-- start logo -->
                    <div class="col-md-2 col-xs-5">
                        <a href="index.php" title="Eureka" class="logo"><img src="images/eureka-dark.png"
                                data-rjs="images/eureka-dark@2x.png" class="logo-dark default" alt="Eureka"><img
                                src="images/logo-white.png" data-rjs="images/eureka-light@2x.png" alt="Eureka"
                                class="logo-light"></a>
                    </div>
                    <!-- end logo -->
                    <div class="col-md-7 col-xs-2 width-auto pull-right accordion-menu xs-no-padding-right">
                        <button type="button" class="navbar-toggle collapsed pull-right" data-toggle="collapse"
                            data-target="#navbar-collapse-toggle-1">
                            <span class="sr-only">toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="navbar-collapse collapse pull-right" id="navbar-collapse-toggle-1">
                            <ul id="accordion" class="nav navbar-nav navbar-left no-margin alt-font text-normal"
                                data-in="fadeIn" data-out="fadeOut">
                                <!-- start menu item -->
                                <li class="dropdown megamenu-fw">
                                    <a href="index.php">Home</a><i class="fas fa-angle-down dropdown-toggle"
                                        data-toggle="dropdown" aria-hidden="true"></i>
                                </li>
                                <?php
                                echo'<li class="dropdown simple-dropdown"><a href="page-nouveau-projet.php" >Ajouter un Projet</a><i
                                    class="fas fa-sign-up-alt"></i>';
                                  ?>
                                </li>
                                <li class="dropdown simple-dropdown"><a href="logout.php">Deconnexion</a><i
                                    class="fas fa-sign-up-alt"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            </nav>
            <!-- end navigation -->
        </header>
        <!-- end header -->
        <!-- start page title section -->
        <section class="wow fadeIn parallax section2" data-stellar-background-ratio="0.5" style="background-image:url('https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.novartis.com%2Fsites%2Fwww.novartis.com%2Ffiles%2Four-company-history-8-image-2x.jpg&f=1');">
            <div class="opacity-medium bg-extra-dark-gray"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 extra-small-screen display-table page-title-large">
                        <div class="display-table-cell vertical-align-middle text-center">
                            <!-- start page title -->
                            <h1 class="text-white alt-font font-weight-600 letter-spacing-minus-1 margin-10px-bottom"><?php echo htmlspecialchars($entreprise->getNom());?></h1>
                            <!-- end page title -->
                            <!-- start sub title -->
                            <span class="text-white opacity6 alt-font">Unlimited power and customization possibilities</span>
                            <!-- end sub title -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title section -->
        <!-- start section -->
        <section class="no-padding bg-light-gray wow fadeIn">
            <div class="container">
                <div class="">
                    <h4 class="card-header text-center font-weight-bold text-uppercase py-4 text-extra-dark-gray alt-font" style="margin-bottom: 60px; margin-top: 20px;">Informations Générales</h4>
                    <div class="container">
                      <div class="row" style="font-size: 20px;">
                      <div class="panel-group col-md-6">
                        <div class="panel panel-default">
                          <div class="panel-heading"><i class="fas fa-building" style="margin-right: 15px;"></i>Société</div>
                          <div class="panel-body"><?php echo htmlspecialchars($entreprise->getNom()); ?></div>
                        </div>

                        <div class="panel panel-default">
                          <div class="panel-heading"><i class="fas fa-user-circle" style="margin-right: 15px;"></i>Contact</div>
                          <div class="panel-body"><?php echo htmlspecialchars($entreprise->getContactNom1());?></div>
                        </div>
                      </div>

                      <div class="panel-group col-md-6">
                        <div class="panel panel-default">
                          <div class="panel-heading"><i class="fas fa-vector-square" style="margin-right: 15px;"></i>Secteur d'Activité</div>
                          <div class="panel-body"><?php echo htmlspecialchars($entreprise->getSecteurAtivite());?></div>
                        </div>

                        <div class="panel panel-default">
                          <div class="panel-heading"><i class="fas fa-envelope" style="margin-right: 15px;"></i>Email</div>
                          <div class="panel-body"><?php echo htmlspecialchars($entreprise->getContactEmail1());?></div>
                        </div>
                      </div>

                      </div>
                      <div class="text-center">
                         <a title="Titre du lien" href="changer-info-entreprise.php">
                          <button type="button" class="btn btn-danger" style="margin-bottom: 25px;">Modifier Informations Générales</button>
                        </a>
                        </div>

                    </div>
                </div>
              </div>



        </section>
        <!-- end section -->
        <!-- start counter section -->
        <section class="wow fadeIn parallax" data-stellar-background-ratio="0.5" style="background-image:url('https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Ftimedotcom.files.wordpress.com%2F2015%2F05%2F150511_car_sizeoffice.jpg%3Fquality%3D85&f=1');">
            <div class="opacity-full-dark bg-extra-dark-gray"></div>
            <div class="container">
                <div class="row">
                    <!-- start counter item -->
                    <div class="col-md-3 col-sm-6 col-xs-12 sm-margin-five-bottom sm-padding-15px-left xs-margin-30px-bottom text-center wow fadeInDown">
                        <h4 class="text-white font-weight-300 no-margin timer" data-speed="2000" data-to="25">25</h4>
                        <span class="display-block margin-three-bottom">Projets en cours</span>
                        <div class="separator-line-verticle-large bg-deep-pink display-inline-block"></div>
                    </div>
                    <!-- end counter item -->
                    <!-- start counter item -->
                    <div class="col-md-3 col-sm-6 col-xs-12 sm-margin-five-bottom sm-padding-15px-left xs-margin-30px-bottom text-center wow fadeInDown" data-wow-delay="0.2s">
                        <h4 class="text-white font-weight-300 no-margin timer" data-speed="2000" data-to="50">50</h4>
                        <span class="display-block margin-three-bottom">Comptes rendu des projets</span>
                        <div class="separator-line-verticle-large bg-deep-pink display-inline-block"></div>
                    </div>
                    <!-- end counter item -->
                    <!-- start counter item -->
                    <div class="col-md-3 col-sm-6 col-xs-12 xs-margin-seven-bottom sm-padding-15px-left xs-margin-30px-bottom text-center  wow fadeInDown" data-wow-delay="0.4s">
                        <h4 class="text-white font-weight-300 no-margin timer" data-speed="2000" data-to="35">35</h4>
                        <span class="display-block margin-three-bottom">Projet Terminé</span>
                        <div class="separator-line-verticle-large bg-deep-pink display-inline-block"></div>
                    </div>
                    <!-- end counter item -->
                    <!-- start counter item -->
                    <div class="col-md-3 col-sm-6 col-xs-12 sm-padding-15px-left text-center wow fadeInDown" data-wow-delay="0.6s">
                        <h4 class="text-white font-weight-300 no-margin timer" data-speed="2000" data-to="25">25</h4>
                        <span class="display-block margin-three-bottom">Note moyenne</span>
                        <div class="separator-line-verticle-large bg-deep-pink display-inline-block"></div>
                    </div>
                    <!-- end counter item -->
                </div>
            </div>
        </section>
        <!-- end counter section -->
        <!-- start team slider section -->
        <section class="wow fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12 center-col margin-eight-bottom sm-margin-40px-bottom text-center last-paragraph-no-margin">
                        <h5 class="alt-font font-weight-700 text-extra-dark-gray margin-15px-bottom text-uppercase">Nos Projets</h5>
                        <p class="width-90 margin-lr-auto xs-width-100 xs-no-margin-bottom">Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="position-relative">
                        <div class="swiper-container black-move blog-slider swiper-four-slides swiper-pagination-bottom">
                            <!--  start team item -->
                            <div class="swiper-wrapper">
                            <?php
                                foreach ($listeProjetEntreprise as $value) {
                                echo'
                                <div class="swiper-slide padding-15px-lr team-block text-left team-style-1 md-margin-40px-bottom wow fadeInUp">
                                    <figure>
                                        <div class="team-image xs-width-100">
                                            <img src="'.$value->getPhoto().'" alt="">
                                            <div class="overlay-content text-center">
                                                <div class="display-table height-100 width-100">
                                                    <div class="vertical-align-middle display-table-cell icon-social-small">
                                                        <a href="http://www.facebook.com" class="text-white text-white-hover" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                                        <a href="http://www.twitter.com" class="text-white text-white-hover" target="_blank"><i class="fab fa-twitter"></i></a>
                                                        <a href="http://www.plus.google.com" class="text-white text-white-hover" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                                                        <a href="http://www.instagram.com" class="text-white text-white-hover" target="_blank"><i class="fab fa-instagram"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="team-overlay bg-deep-pink opacity8"></div>
                                        </div>
                                        <figcaption>
                                            <div class="team-member-position margin-20px-top text-center">
                                                <div class="text-small font-weight-500 text-extra-dark-gray text-uppercase">'.$value->getTitre().'</div>
                                                <div class="text-extra-small text-uppercase text-medium-gray">Creative Director</div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                                ';}?>
                                <!-- end team item -->
                            </div>
                            <div class="swiper-pagination swiper-pagination-four-slides"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end team slider section -->
        <!-- start section -->
        <section class="no-padding bg-light-gray wow fadeIn">
            <div class="container">
                <div class="row equalize sm-equalize-auto">
                    <div class="col-md-6 col-sm-12 text-center">
                        <div class="width-100 display-table">
                            <div class="display-table-cell vertical-align-bottom">
                                <img src="http://placehold.it/600x741" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-10 sm-text-center col-md-offset-1 sm-center-col md-padding-50px-tb sm-clear-both">
                        <div class="width-100 height-100 display-table">
                            <div class="display-table-cell vertical-align-middle">
                                <i class="fas fa-quote-left text-deep-pink icon-medium margin-15px-bottom"></i>
                                <h5 class="text-extra-dark-gray alt-font text-uppercase font-weight-700">Design is not just what it looks like and feels like. Design is how it works.</h5>
                                <p class="width-90 sm-width-100">Eureka philosophy that great design can only be delivered by people with a deep social and cultural understanding of the communities they designing. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever...</p>
                                <img src="images/signature-dark.png" alt="" class="margin-15px-top sm-no-margin-top">
                                <span class="text-extra-dark-gray text-large display-block margin-30px-top alt-font font-weight-600 xs-margin-20px-top">Colin Smith</span>
                                <span class="display-block">From the chairman's desk</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start call to action section -->
        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h5 class="font-weight-700 text-uppercase alt-font text-extra-dark-gray center-col width-50 margin-5px-bottom xs-width-100">Have a new project?</h5>
                        <span class="text-medium alt-font display-block">We'd love to hear about your project.</span>
                        <a href="page-nouveau-projet.php" class="btn btn-large btn-transparent-deep-pink btn-rounded margin-35px-top no-margin-right">Nouveau Projet</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end call to action section -->
        <!-- start footer -->
        <footer class="footer-modern-dark bg-extra-dark-gray padding-five-tb xs-padding-30px-tb">
            <div class="footer-widget-area padding-40px-bottom xs-padding-30px-bottom">
                <div class="container">
                    <div class="row equalize xs-equalize-auto">
                        <!-- start slogan -->
                        <div class="col-md-4 col-sm-12 col-xs-12 xs-text-center sm-margin-three-bottom xs-margin-20px-bottom display-table">
                            <div class="display-table-cell vertical-align-middle">
                                <h6 class="text-dark-gray width-70 md-width-100 no-margin-bottom">London Based Creative Studio</h6>
                            </div>
                        </div>
                        <!-- end slogan -->
                        <!-- start contact information -->
                        <div class="col-md-4 col-sm-6 col-xs-12 xs-text-center xs-margin-20px-bottom display-table">
                            <div class="display-table-cell vertical-align-middle">
                                <span class="display-block">301 The Greenhouse,<br>Custard Factory, London, E2 8DY.</span>
                                <a href="mailto:sales@domain.com" title="sales@domain.com">sales@domain.com</a>   |   +44 (0) 123 456 7890
                            </div>
                        </div>
                        <!-- end contact information -->
                        <!-- start social media -->
                        <div class="col-md-4 col-sm-6 col-xs-12 social-style-2 xs-text-center display-table">
                            <div class="display-table-cell vertical-align-middle">
                                <a href="#"><img class="footer-logo" src="images/eureka-light.png" data-rjs="images/eureka-light@2x.png" alt="Eureka"></a>
                                <div class="social-icon-style-8">
                                    <ul class="text-extra-small margin-20px-top xs-no-margin-bottom text-uppercase no-padding no-margin-bottom list-style-none">
                                        <li class="display-inline-block margin-10px-right"><a href="http://twitter.com" target="_blank" title="Twitter">Twitter</a></li>
                                        <li class="display-inline-block margin-10px-right"><a href="http://facebook.com" target="_blank" title="Facebook">Facebook</a></li>
                                        <li class="display-inline-block margin-10px-right"><a href="http://instagram.com" target="_blank" title="Instagram">Instagram</a></li>
                                        <li class="display-inline-block"><a href="http://dribbble.com" target="_blank" title="Dribbble">Dribbble</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- end social media -->
                    </div>
                </div>
            </div>
            <div class="container">
                <!-- start copyright -->
                <div class="footer-bottom border-top border-color-medium-dark-gray padding-40px-top xs-padding-30px-top">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12 text-left text-small xs-text-center">Eureka - Portfolio Concept Theme</div>
                        <div class="col-md-6 col-sm-6 col-xs-12 text-right text-small xs-text-center">&copy; 2017 Eureka is Proudly Powered by <a href="http://www.themezaa.com" target="_blank" title="ThemeZaa">ThemeZaa</a></div>
                    </div>
                </div>
                <!-- end copyright -->
            </div>
        </footer>
        <!-- end footer -->
        <!-- start scroll to top -->
        <a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>
        <!-- end scroll to top  -->
        <!-- javascript libraries -->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/modernizr.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/skrollr.min.js"></script>
        <script type="text/javascript" src="js/smooth-scroll.js"></script>
        <script type="text/javascript" src="js/jquery.appear.js"></script>
        <!-- menu navigation -->
        <script type="text/javascript" src="js/bootsnav.js"></script>
        <script type="text/javascript" src="js/jquery.nav.js"></script>
        <!-- animation -->
        <script type="text/javascript" src="js/wow.min.js"></script>
        <!-- page scroll -->
        <script type="text/javascript" src="js/page-scroll.js"></script>
        <!-- swiper carousel -->
        <script type="text/javascript" src="js/swiper.min.js"></script>
        <!-- counter -->
        <script type="text/javascript" src="js/jquery.count-to.js"></script>
        <!-- parallax -->
        <script type="text/javascript" src="js/jquery.stellar.js"></script>
        <!-- magnific popup -->
        <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
        <!-- portfolio with shorting tab -->
        <script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
        <!-- images loaded -->
        <script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
        <!-- pull menu -->
        <script type="text/javascript" src="js/classie.js"></script>
        <script type="text/javascript" src="js/hamburger-menu.js"></script>
        <!-- counter  -->
        <script type="text/javascript" src="js/counter.js"></script>
        <!-- fit video  -->
        <script type="text/javascript" src="js/jquery.fitvids.js"></script>
        <!-- equalize -->
        <script type="text/javascript" src="js/equalize.min.js"></script>
        <!-- skill bars  -->
        <script type="text/javascript" src="js/skill.bars.jquery.js"></script>
        <!-- justified gallery  -->
        <script type="text/javascript" src="js/justified-gallery.min.js"></script>
        <!--pie chart-->
        <script type="text/javascript" src="js/jquery.easypiechart.min.js"></script>
        <!-- instagram -->
        <script type="text/javascript" src="js/instafeed.min.js"></script>
        <!-- retina -->
        <script type="text/javascript" src="js/retina.min.js"></script>
        <!-- revolution -->
        <script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>
        <!-- revolution slider extensions (load below extensions JS files only on local file systems to make the slider work! The following part can be removed on server for on demand loading) -->
        <!--<script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>-->
        <!-- setting -->
        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>
=======
<?php

require_once ('connexion.php');
$appliBD = new connexion();

session_start();
//$idEntreprise = $_SESSION['idEntreprise'];

$contactEmail1 = $_SESSION['email'];
$idEntrepriseByEmail = $appliBD->getEntrepriseByEmail($contactEmail1);
$idEntreprise = $idEntrepriseByEmail->getId();
$entreprise = $appliBD->getEntrepriseById($idEntreprise);
$listeProjetEntreprise = $appliBD->getListeProjetEntreprise($idEntreprise);
?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <!-- title -->
        <title>Eureka – Creative Agency, Corporate and Portfolio Multi-purpose Template</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <meta name="author" content="ThemeZaa">
        <!-- description -->
        <meta name="description" content="Eureka is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose agency and portfolio HTML5 template with 25 ready home page demos.">
        <!-- keywords -->
        <meta name="keywords" content="creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, agency, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, personal, masonry, grid, coming soon, faq">
        <!-- favicon -->
        <link rel="shortcut icon" href="images/favicon.png">
        <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
        <!-- animation -->
        <link rel="stylesheet" href="css/animate.css" />
        <!-- bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <!-- et line icon -->
        <link rel="stylesheet" href="css/et-line-icons.css" />
        <!-- font-awesome icon -->
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <!-- themify icon -->
        <link rel="stylesheet" href="css/themify-icons.css">
        <!-- swiper carousel -->
        <link rel="stylesheet" href="css/swiper.min.css">
        <!-- justified gallery  -->
        <link rel="stylesheet" href="css/justified-gallery.min.css">
        <!-- magnific popup -->
        <link rel="stylesheet" href="css/magnific-popup.css" />
        <!-- revolution slider -->
        <link rel="stylesheet" type="text/css" href="revolution/css/settings.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
        <link rel="stylesheet" type="text/css" href="revolution/css/navigation.css">
        <!-- bootsnav -->
        <link rel="stylesheet" href="css/bootsnav.css">
        <!-- style -->
        <link rel="stylesheet" href="css/style.css" />
        <!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css" />
        <!--[if IE]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->
        <style>

        .section2 {
          padding: 70px;
        }


        </style>
    </head>
    <body>
        <!-- start header -->
        <header>
            <!-- start navigation -->
            <nav class="navbar navbar-default bootsnav bg-white header-light nav-box-width navbar-top">
            <div class="container-fluid nav-header-container">
                <div class="row">
                    <!-- start logo -->
                    <div class="col-md-2 col-xs-5">
                        <a href="index.php" title="Eureka" class="logo"><img src="images/eureka-dark.png"
                                data-rjs="images/eureka-dark@2x.png" class="logo-dark default" alt="Eureka"><img
                                src="images/logo-white.png" data-rjs="images/eureka-light@2x.png" alt="Eureka"
                                class="logo-light"></a>
                    </div>
                    <!-- end logo -->
                    <div class="col-md-7 col-xs-2 width-auto pull-right accordion-menu xs-no-padding-right">
                        <button type="button" class="navbar-toggle collapsed pull-right" data-toggle="collapse"
                            data-target="#navbar-collapse-toggle-1">
                            <span class="sr-only">toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="navbar-collapse collapse pull-right" id="navbar-collapse-toggle-1">
                            <ul id="accordion" class="nav navbar-nav navbar-left no-margin alt-font text-normal"
                                data-in="fadeIn" data-out="fadeOut">
                                <!-- start menu item -->
                                <li class="dropdown megamenu-fw">
                                    <a href="index.php">Home</a><i class="fas fa-angle-down dropdown-toggle"
                                        data-toggle="dropdown" aria-hidden="true"></i>
                                </li>
                                <?php
                                echo'<li class="dropdown simple-dropdown"><a href="page-nouveau-projet.php" >Ajouter un Projet</a><i
                                    class="fas fa-sign-up-alt"></i>';
                                  ?>
                                </li>
                                <li class="dropdown simple-dropdown"><a href="logout.php">Deconnexion</a><i
                                    class="fas fa-sign-up-alt"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            </nav>
            <!-- end navigation -->
        </header>
        <!-- end header -->
        <!-- start page title section -->
        <section class="wow fadeIn parallax section2" data-stellar-background-ratio="0.5" style="background-image:url('https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.novartis.com%2Fsites%2Fwww.novartis.com%2Ffiles%2Four-company-history-8-image-2x.jpg&f=1');">
            <div class="opacity-medium bg-extra-dark-gray"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 extra-small-screen display-table page-title-large">
                        <div class="display-table-cell vertical-align-middle text-center">
                            <!-- start page title -->
                            <h1 class="text-white alt-font font-weight-600 letter-spacing-minus-1 margin-10px-bottom"><?php echo htmlspecialchars($entreprise->getNom());?></h1>
                            <!-- end page title -->
                            <!-- start sub title -->
                            <span class="text-white opacity6 alt-font">Unlimited power and customization possibilities</span>
                            <!-- end sub title -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title section -->
        <!-- start section -->
        <section class="no-padding bg-light-gray wow fadeIn">
            <div class="container">
                <div class="">
                    <h4 class="card-header text-center font-weight-bold text-uppercase py-4 text-extra-dark-gray alt-font" style="margin-bottom: 60px; margin-top: 20px;">Informations Générales</h4>
                    <div class="container">
                      <div class="row" style="font-size: 20px;">
                      <div class="panel-group col-md-6">
                        <div class="panel panel-default">
                          <div class="panel-heading"><i class="fas fa-building" style="margin-right: 15px;"></i>Société</div>
                          <div class="panel-body"><?php echo htmlspecialchars($entreprise->getNom()); ?></div>
                        </div>

                        <div class="panel panel-default">
                          <div class="panel-heading"><i class="fas fa-user-circle" style="margin-right: 15px;"></i>Contact</div>
                          <div class="panel-body"><?php echo htmlspecialchars($entreprise->getContactNom1());?></div>
                        </div>
                      </div>

                      <div class="panel-group col-md-6">
                        <div class="panel panel-default">
                          <div class="panel-heading"><i class="fas fa-vector-square" style="margin-right: 15px;"></i>Secteur d'Activité</div>
                          <div class="panel-body"><?php echo htmlspecialchars($entreprise->getSecteurAtivite());?></div>
                        </div>

                        <div class="panel panel-default">
                          <div class="panel-heading"><i class="fas fa-envelope" style="margin-right: 15px;"></i>Email</div>
                          <div class="panel-body"><?php echo htmlspecialchars($entreprise->getContactEmail1());?></div>
                        </div>
                      </div>

                      </div>
                      <div class="text-center">                
                         <a title="Titre du lien" href="changer-info-entreprise.php">
                          <button type="button" class="btn btn-danger" style="margin-bottom: 25px;">Modifier Informations Générales</button>
                        </a>
                        </div>

                    </div>
                </div>
              </div>



        </section>
        <!-- end section -->
        <!-- start counter section -->
        <section class="wow fadeIn parallax" data-stellar-background-ratio="0.5" style="background-image:url('https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Ftimedotcom.files.wordpress.com%2F2015%2F05%2F150511_car_sizeoffice.jpg%3Fquality%3D85&f=1');">
            <div class="opacity-full-dark bg-extra-dark-gray"></div>
            <div class="container">
                <div class="row">
                    <!-- start counter item -->
                    <div class="col-md-3 col-sm-6 col-xs-12 sm-margin-five-bottom sm-padding-15px-left xs-margin-30px-bottom text-center wow fadeInDown">
                        <h4 class="text-white font-weight-300 no-margin timer" data-speed="2000" data-to="25">25</h4>
                        <span class="display-block margin-three-bottom">Projets en cours</span>
                        <div class="separator-line-verticle-large bg-deep-pink display-inline-block"></div>
                    </div>
                    <!-- end counter item -->
                    <!-- start counter item -->
                    <div class="col-md-3 col-sm-6 col-xs-12 sm-margin-five-bottom sm-padding-15px-left xs-margin-30px-bottom text-center wow fadeInDown" data-wow-delay="0.2s">
                        <h4 class="text-white font-weight-300 no-margin timer" data-speed="2000" data-to="50">50</h4>
                        <span class="display-block margin-three-bottom">Comptes rendu des projets</span>
                        <div class="separator-line-verticle-large bg-deep-pink display-inline-block"></div>
                    </div>
                    <!-- end counter item -->
                    <!-- start counter item -->
                    <div class="col-md-3 col-sm-6 col-xs-12 xs-margin-seven-bottom sm-padding-15px-left xs-margin-30px-bottom text-center  wow fadeInDown" data-wow-delay="0.4s">
                        <h4 class="text-white font-weight-300 no-margin timer" data-speed="2000" data-to="35">35</h4>
                        <span class="display-block margin-three-bottom">Projet Terminé</span>
                        <div class="separator-line-verticle-large bg-deep-pink display-inline-block"></div>
                    </div>
                    <!-- end counter item -->
                    <!-- start counter item -->
                    <div class="col-md-3 col-sm-6 col-xs-12 sm-padding-15px-left text-center wow fadeInDown" data-wow-delay="0.6s">
                        <h4 class="text-white font-weight-300 no-margin timer" data-speed="2000" data-to="25">25</h4>
                        <span class="display-block margin-three-bottom">Note moyenne</span>
                        <div class="separator-line-verticle-large bg-deep-pink display-inline-block"></div>
                    </div>
                    <!-- end counter item -->
                </div>
            </div>
        </section>
        <!-- end counter section -->
        <!-- start team slider section -->
        <section class="wow fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12 center-col margin-eight-bottom sm-margin-40px-bottom text-center last-paragraph-no-margin">
                        <h5 class="alt-font font-weight-700 text-extra-dark-gray margin-15px-bottom text-uppercase">Nos Projets</h5>
                        <p class="width-90 margin-lr-auto xs-width-100 xs-no-margin-bottom">Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="position-relative">
                        <div class="swiper-container black-move blog-slider swiper-four-slides swiper-pagination-bottom">
                            <!--  start team item -->
                            <div class="swiper-wrapper">
                            <?php
                                foreach ($listeProjetEntreprise as $value) {
                                echo'
                                <div class="swiper-slide padding-15px-lr team-block text-left team-style-1 md-margin-40px-bottom wow fadeInUp">
                                    <figure>
                                        <div class="team-image xs-width-100">
                                            <img src="'.$value->getPhoto().'" alt="">
                                            <div class="overlay-content text-center">
                                                <div class="display-table height-100 width-100">
                                                    <div class="vertical-align-middle display-table-cell icon-social-small">
                                                        <a href="'.$entreprise->getFacebook().'" class="text-white text-white-hover" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                                        <a href="'.$entreprise->getLinkedin().'" class="text-white text-white-hover" target="_blank"><i class="fab fa-linkedin"></i></a>
                                                        <a href="'.$entreprise->getInstagram().'" class="text-white text-white-hover" target="_blank"><i class="fab fa-instagram"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="team-overlay bg-deep-pink opacity8"></div>
                                        </div>
                                        <figcaption>
                                            <div class="team-member-position margin-20px-top text-center">
                                                <div class="text-small font-weight-500 text-extra-dark-gray text-uppercase"><a href="page-projet.php?id='.$value->getId().'">'.$value->getTitre().'</a></div>
                                                <div class="text-extra-small text-uppercase text-medium-gray">Creative Director</div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                                ';}?>
                                <!-- end team item -->
                            </div>
                            <div class="swiper-pagination swiper-pagination-four-slides"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end team slider section -->
        <!-- start section -->
        <section class="no-padding bg-light-gray wow fadeIn">
            <div class="container">
                <div class="row equalize sm-equalize-auto">
                    <div class="col-md-6 col-sm-12 text-center">
                        <div class="width-100 display-table">
                            <div class="display-table-cell vertical-align-bottom">
                                <img src="http://placehold.it/600x741" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-10 sm-text-center col-md-offset-1 sm-center-col md-padding-50px-tb sm-clear-both">
                        <div class="width-100 height-100 display-table">
                            <div class="display-table-cell vertical-align-middle">
                                <i class="fas fa-quote-left text-deep-pink icon-medium margin-15px-bottom"></i>
                                <h5 class="text-extra-dark-gray alt-font text-uppercase font-weight-700">Design is not just what it looks like and feels like. Design is how it works.</h5>
                                <p class="width-90 sm-width-100">Eureka philosophy that great design can only be delivered by people with a deep social and cultural understanding of the communities they designing. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever...</p>
                                <img src="images/signature-dark.png" alt="" class="margin-15px-top sm-no-margin-top">
                                <span class="text-extra-dark-gray text-large display-block margin-30px-top alt-font font-weight-600 xs-margin-20px-top">Colin Smith</span>
                                <span class="display-block">From the chairman's desk</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start call to action section -->
        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h5 class="font-weight-700 text-uppercase alt-font text-extra-dark-gray center-col width-50 margin-5px-bottom xs-width-100">Have a new project?</h5>
                        <span class="text-medium alt-font display-block">We'd love to hear about your project.</span>
                        <a href="page-nouveau-projet.php" class="btn btn-large btn-transparent-deep-pink btn-rounded margin-35px-top no-margin-right">Nouveau Projet</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end call to action section -->
        <!-- start footer -->
        <footer class="footer-modern-dark bg-extra-dark-gray padding-five-tb xs-padding-30px-tb">
            <div class="footer-widget-area padding-40px-bottom xs-padding-30px-bottom">
                <div class="container">
                    <div class="row equalize xs-equalize-auto">
                        <!-- start slogan -->
                        <div class="col-md-4 col-sm-12 col-xs-12 xs-text-center sm-margin-three-bottom xs-margin-20px-bottom display-table">
                            <div class="display-table-cell vertical-align-middle">
                                <h6 class="text-dark-gray width-70 md-width-100 no-margin-bottom">London Based Creative Studio</h6>
                            </div>
                        </div>
                        <!-- end slogan -->
                        <!-- start contact information -->
                        <div class="col-md-4 col-sm-6 col-xs-12 xs-text-center xs-margin-20px-bottom display-table">
                            <div class="display-table-cell vertical-align-middle">
                                <span class="display-block">301 The Greenhouse,<br>Custard Factory, London, E2 8DY.</span>
                                <a href="mailto:sales@domain.com" title="sales@domain.com">sales@domain.com</a>   |   +44 (0) 123 456 7890
                            </div>
                        </div>
                        <!-- end contact information -->
                        <!-- start social media -->
                        <div class="col-md-4 col-sm-6 col-xs-12 social-style-2 xs-text-center display-table">
                            <div class="display-table-cell vertical-align-middle">
                                <a href="#"><img class="footer-logo" src="images/eureka-light.png" data-rjs="images/eureka-light@2x.png" alt="Eureka"></a>
                                <div class="social-icon-style-8">
                                    <ul class="text-extra-small margin-20px-top xs-no-margin-bottom text-uppercase no-padding no-margin-bottom list-style-none">
                                        <li class="display-inline-block margin-10px-right"><a href="http://twitter.com" target="_blank" title="Twitter">Twitter</a></li>
                                        <li class="display-inline-block margin-10px-right"><a href="http://facebook.com" target="_blank" title="Facebook">Facebook</a></li>
                                        <li class="display-inline-block margin-10px-right"><a href="http://instagram.com" target="_blank" title="Instagram">Instagram</a></li>
                                        <li class="display-inline-block"><a href="http://dribbble.com" target="_blank" title="Dribbble">Dribbble</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- end social media -->
                    </div>
                </div>
            </div>
            <div class="container">
                <!-- start copyright -->
                <div class="footer-bottom border-top border-color-medium-dark-gray padding-40px-top xs-padding-30px-top">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12 text-left text-small xs-text-center">Eureka - Portfolio Concept Theme</div>
                        <div class="col-md-6 col-sm-6 col-xs-12 text-right text-small xs-text-center">&copy; 2017 Eureka is Proudly Powered by <a href="http://www.themezaa.com" target="_blank" title="ThemeZaa">ThemeZaa</a></div>
                    </div>
                </div>
                <!-- end copyright -->
            </div>
        </footer>
        <!-- end footer -->
        <!-- start scroll to top -->
        <a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>
        <!-- end scroll to top  -->
        <!-- javascript libraries -->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/modernizr.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/skrollr.min.js"></script>
        <script type="text/javascript" src="js/smooth-scroll.js"></script>
        <script type="text/javascript" src="js/jquery.appear.js"></script>
        <!-- menu navigation -->
        <script type="text/javascript" src="js/bootsnav.js"></script>
        <script type="text/javascript" src="js/jquery.nav.js"></script>
        <!-- animation -->
        <script type="text/javascript" src="js/wow.min.js"></script>
        <!-- page scroll -->
        <script type="text/javascript" src="js/page-scroll.js"></script>
        <!-- swiper carousel -->
        <script type="text/javascript" src="js/swiper.min.js"></script>
        <!-- counter -->
        <script type="text/javascript" src="js/jquery.count-to.js"></script>
        <!-- parallax -->
        <script type="text/javascript" src="js/jquery.stellar.js"></script>
        <!-- magnific popup -->
        <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
        <!-- portfolio with shorting tab -->
        <script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
        <!-- images loaded -->
        <script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
        <!-- pull menu -->
        <script type="text/javascript" src="js/classie.js"></script>
        <script type="text/javascript" src="js/hamburger-menu.js"></script>
        <!-- counter  -->
        <script type="text/javascript" src="js/counter.js"></script>
        <!-- fit video  -->
        <script type="text/javascript" src="js/jquery.fitvids.js"></script>
        <!-- equalize -->
        <script type="text/javascript" src="js/equalize.min.js"></script>
        <!-- skill bars  -->
        <script type="text/javascript" src="js/skill.bars.jquery.js"></script>
        <!-- justified gallery  -->
        <script type="text/javascript" src="js/justified-gallery.min.js"></script>
        <!--pie chart-->
        <script type="text/javascript" src="js/jquery.easypiechart.min.js"></script>
        <!-- instagram -->
        <script type="text/javascript" src="js/instafeed.min.js"></script>
        <!-- retina -->
        <script type="text/javascript" src="js/retina.min.js"></script>
        <!-- revolution -->
        <script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>
        <!-- revolution slider extensions (load below extensions JS files only on local file systems to make the slider work! The following part can be removed on server for on demand loading) -->
        <!--<script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>-->
        <!-- setting -->
        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>
>>>>>>> master
