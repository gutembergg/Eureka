<?php
require_once 'connexion.php';
$appliBD = new connexion();
session_start();
$email = $_SESSION['email'];
$utilisateurByEmail = $appliBD->getUtilisateurByEmail($email);
$idUtilisateur = $utilisateurByEmail->getId();
$entreprise = $appliBD->getEntrepriseByEmail($email);
$idEntreprise = $entreprise->getId();
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
    <meta name="description"
        content="Eureka is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose agency and portfolio HTML5 template with 25 ready home page demos.">
    <!-- keywords -->
    <meta name="keywords"
        content="creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, agency, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, personal, masonry, grid, coming soon, faq">
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
    input, textarea, select {
    padding: 1px 15px;
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
                                src="images/eureka-light.png" data-rjs="images/eureka-light@2x.png" alt="Eureka"
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
                                echo'<li class="dropdown simple-dropdown"><a href="page-profil-entreprise.php">Profil Entreprise</a><i
                                    class="fas fa-sign-up-alt"></i>';
                                  ?>
                                <li class="dropdown simple-dropdown"><a href="page-nouveau-projet.php">Ajouter un Projet</a><i
                                    class="fas fa-sign-up-alt"></i>
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
    <section class="wow fadeIn bg-extra-dark-gray padding-35px-tb page-title-small top-space">
        <div class="container">
            <div class="row equalize">
                <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12 display-table">
                    <div class="display-table-cell vertical-align-middle text-left xs-text-center">
                        <!-- start page title -->
                        <h1 class="alt-font text-white font-weight-600 no-margin-bottom text-uppercase">Informations Générales</h1>
                        <!-- end page title -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 display-table text-right xs-text-left xs-margin-10px-top">
                    <div class="display-table-cell vertical-align-middle breadcrumb text-small alt-font">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end contact section -->
    <!-- start form section -->
    <section class="wow fadeIn" id="start-your-project">
        <div class="row">
            <div
                class="col-lg-6 col-md-6 col-sm-8 col-xs-12 center-col margin-eight-bottom sm-margin-40px-bottom xs-margin-30px-bottom text-center last-paragraph-no-margin">
                <h5 class="alt-font font-weight-700 text-extra-dark-gray text-uppercase">Modifier Informations</h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since. Lorem Ipsum has been the industry. Lorem Ipsum is simply
                    dummy text.</p>
            </div>
        </div>
        <div class="container">
            <div class="row">
              <div class="col-md-6">
                <form  id="project-contact-form" action="validation_change-info-entreprise.php" method="post" enctype="multipart/form-data">
                    <h5 class="title text-center">Informations Société</h5>

                    <div class="col-md-12">
                        <div id="success-project-contact-form" class="no-margin-lr"></div>
                    </div>
                    <div class="col-md-12">
                      <?php
                        echo'<input type="text" name="nom" value="'.$entreprise->getNom().'" id="nom" placeholder="Entrez votre nom" class="big-input">';
                      ?>
                    </div>
                    <div class="col-md-12">
                      <?php
                      echo'  <input type="text" name="contactEmail1" value="'.$entreprise->getContactEmail1().'" id="contactEmail1" placeholder="Entrez votre E-mail" class="big-input">';
                      ?>
                    </div>

<<<<<<< HEAD
                    <div class="col-md-12">
                      <input type="password" name="password" id="password" placeholder="Password" class="big-input">';
=======
                    <div class="col-md-12">                      
                      <input type="password" name="password" id="password" placeholder="Password" class="big-input">
>>>>>>> master
                    </div>

                    <div class="col-md-12">
                      <?php
                        echo'<input type="text" name="urlSite" value="'.$entreprise->getUrlSite().'" id="url" placeholder="Entrez l\'URL de votre Site" class="big-input">';
                      ?>
                    </div>
                    <div class="col-md-6">
                      <?php
                        echo'<input type="text" name="facebook" value="'.$entreprise->getFacebook().'" id="facebook" placeholder="Entrez lien Facebook" class="big-input">';
                        ?>
                    </div>
                    <div class="col-md-6">
                      <?php
                        echo'<input type="text" name="secteurAtivite" value="'.$entreprise->getSecteurAtivite().'" id="secteurAtivite" placeholder="Entrez Secteur d\'activieé" class="big-input">';
                        ?>
                    </div>

                    <div class="col-md-6">
                      <?php
                        echo'<input type="text" name="instagram" value="'.$entreprise->getInstagram().'" id="instagram" placeholder="Entrez Lien Instagram" class="big-input">';
                        ?>
                    </div>
                    <div class="col-md-6">
                      <?php
                        echo'<input type="text" name="linkedin" value="'.$entreprise->getLinkedin().'" id="linkdin" placeholder="" class="big-input">';
                        ?>
                    </div>

                    <div class="col-md-6">
                      <?php
                        echo'<input type="text" name="nombCollaborateurs" value="'.$entreprise->getNombCollaborateurs().'" id="nombCollaborateurs" placeholder="Nombre Collaborateurs: " class="big-input">';
                      ?>
                  </div>

                    <div class="col-md-12">
                      <?php
                        echo'<textarea name="description" id="description" placeholder="Adressse et description de votre société:" rows="8" class="big-textarea">'.$entreprise->getDescription().'</textarea>';
                      ?>
                    </div>


              </div>
                <div class="col-md-6" >
                    <h5 class="title text-center">Contacts 1</h5>
                    <div class="row">
                        <div class="col-md-12">
                            <div id="register-enterprise" class="no-margin-lr"></div>
                        </div>
                        <div class="col-md-12">
                          <?php
                            echo'<input type="text" name="contactNom1" value="'.$entreprise->getContactNom1().'" id="nom" placeholder=" Entrez Nom" class="big-input">';
                          ?>
                        </div>
                        <div class="col-md-12">
                          <?php
                            echo'<input type="text" name="contactPrenom1" value="'.$entreprise->getContactPrenom1().'" id="prenom" placeholder="Entrez Prenom" class="big-input">';
                            ?>
                        </div>

                        <h5 class="title text-center mt-4">Contacts 2</h5>
                        <div class="col-md-12 mt-4">
                          <?php
                            echo'<input type="text" name="contactNom2" value="'.$entreprise->getContactNom2().'" id="nom" placeholder="Entrez Nom" class="big-input">';
                            ?>
                        </div>
                        <div class="col-md-12">
                          <?php
                            echo'<input type="text" name="contactPrenom2"  value="'.$entreprise->getContactPrenom2().'" id="prenom" placeholder="Entrez Prénom" class="big-input">';
                            ?>
                        </div>
                        <div class="col-md-12">
                          <?php
                            echo'<input type="text" name="contactEmail2" value="'.$entreprise->getContactEmail2().'" id="email" placeholder="Entrez E-mail" class="big-input">';
                          ?>
                        </div>
                        <h5 class="title text-center mt-4">Contacts 3</h5>
                        <div class="col-md-12 mt-4">
                          <?php
                            echo'<input type="text" name="contactNom3" value="'.$entreprise->getContactNom3().'" id="nom" placeholder="Entrez Nom" class="big-input">';
                            ?>
                        </div>
                        <div class="col-md-12">
                          <?php
                            echo'<input type="text" name="contactPrenom3" value="'.$entreprise->getContactPrenom3().'" id="prenom" placeholder="Entrez Prénom" class="big-input">';
                            ?>
                        </div>
                        <div class="col-md-12">
                          <?php
                            echo'<input type="text" name="contactEmail3" value="'.$entreprise->getContactEmail3().'" id="email" placeholder="Entrez E-mail" class="big-input">';
                            ?>
                        </div>
                    </div>
                  </div>

            </div>
            <div class="col-md-12 text-center">
                <button id="project-contact-us-button" type="submit"
                    class="btn btn-transparent-dark-gray btn-large margin-20px-top ">Valider</button>
            </div>
          </form>
        </div>

    </section>
    <!-- end form section -->
    <section class="wow fadeIn bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center social-style-4 border round">
                    <span
                        class="text-medium font-weight-600 text-uppercase display-block alt-font text-extra-dark-gray margin-30px-bottom">On
                        social networks</span>
                    <div class="social-icon-style-4">
                        <ul class="margin-30px-top large-icon">
                            <li><a class="facebook" href="http://facebook.com" target="_blank"><i
                                        class="fab fa-facebook-f"></i><span></span></a></li>
                            <li><a class="twitter" href="http://twitter.com" target="_blank"><i
                                        class="fab fa-twitter"></i><span></span></a></li>
                            <li><a class="google" href="http://google.com" target="_blank"><i
                                        class="fab fa-google-plus-g"></i><span></span></a></li>
                            <li><a class="dribbble" href="http://dribbble.com" target="_blank"><i
                                        class="fab fa-dribbble"></i><span></span></a></li>
                            <li><a class="linkedin" href="http://linkedin.com" target="_blank"><i
                                        class="fab fa-linkedin-in"></i><span></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- start footer -->
    <footer class="footer-standard-dark bg-extra-dark-gray">
        <div class="footer-widget-area padding-five-tb xs-padding-30px-tb">
            <div class="container">
                <div class="row equalize xs-equalize-auto">
                    <div
                        class="col-md-3 col-sm-6 col-xs-12 widget border-right border-color-medium-dark-gray sm-no-border-right sm-margin-30px-bottom xs-text-center">
                        <!-- start logo -->
                        <a href="#" class="margin-20px-bottom display-inline-block"><img class="footer-logo"
                                src="images/eureka-light.png" data-rjs="images/eureka-light@2x.png" alt=""></a>
                        <!-- end logo -->
                        <p class="text-small width-95 xs-width-100">Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry.</p>
                        <!-- start social media -->
                        <div class="social-icon-style-8 display-inline-block vertical-align-middle">
                            <ul class="small-icon no-margin-bottom">
                                <li><a class="facebook text-white" href="https://www.facebook.com/" target="_blank"><i
                                            class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                <li><a class="twitter text-white" href="https://twitter.com/" target="_blank"><i
                                            class="fab fa-twitter"></i></a></li>
                                <li><a class="google text-white" href="https://plus.google.com" target="_blank"><i
                                            class="fab fa-google-plus-g"></i></a></li>
                                <li><a class="instagram text-white" href="https://instagram.com/" target="_blank"><i
                                            class="fab fa-instagram no-margin-right" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <!-- end social media -->
                    </div>
                    <!-- start additional links -->
                    <div
                        class="col-md-3 col-sm-6 col-xs-12 widget border-right border-color-medium-dark-gray padding-45px-left sm-padding-15px-left sm-no-border-right sm-margin-30px-bottom xs-text-center">
                        <div
                            class="widget-title alt-font text-small text-medium-gray text-uppercase margin-10px-bottom font-weight-600">
                            Additional Links</div>
                        <ul class="list-unstyled">
                            <li><a class="text-small" href="#">Home Classic Corporate</a></li>
                            <li><a class="text-small" href="home-creative-business.html">Home Creative Business</a></li>
                            <li><a class="text-small" href="home-creative-designer.html">Home Creative Designer</a></li>
                            <li><a class="text-small" href="home-portfolio-minimal.html">Home Portfolio Minimal</a></li>
                            <li><a class="text-small" href="home-portfolio-parallax.html">Home Portfolio parallax</a>
                            </li>
                            <li><a class="text-small" href="home-portfolio-personal.html">Home Portfolio Personal</a>
                            </li>
                        </ul>
                    </div>
                    <!-- end additional links -->
                    <!-- start contact information -->
                    <div
                        class="col-md-3 col-sm-6 col-xs-12 widget border-right border-color-medium-dark-gray padding-45px-left sm-padding-15px-left sm-clear-both sm-no-border-right  xs-margin-30px-bottom xs-text-center">
                        <div
                            class="widget-title alt-font text-small text-medium-gray text-uppercase margin-10px-bottom font-weight-600">
                            Contact Info</div>
                        <p class="text-small display-block margin-15px-bottom width-80 xs-center-col">Eureka Design
                            Agency<br> 301 The Greenhouse, Custard Factory, London, E2 8DY.</p>
                        <div class="text-small">Email: <a href="mailto:sales@domain.com">sales@domain.com</a></div>
                        <div class="text-small">Phone: +44 (0) 123 456 7890</div>
                        <a href="contact-us-modern.html"
                            class="text-small text-uppercase text-decoration-underline">View Direction</a>
                    </div>
                    <!-- end contact information -->
                    <!-- start instagram -->
                    <div
                        class="col-md-3 col-sm-6 col-xs-12 widget padding-45px-left sm-padding-15px-left xs-text-center">
                        <div
                            class="widget-title alt-font text-small text-medium-gray text-uppercase margin-20px-bottom font-weight-600">
                            Instagram portfolio</div>
                        <div class="instagram-follow-api">
                            <ul id="instaFeed-footer"></ul>
                        </div>
                    </div>
                    <!-- end instagram -->
                </div>
            </div>
        </div>
        <div class="bg-dark-footer padding-50px-tb text-center xs-padding-30px-tb">
            <div class="container">
                <div class="row">
                    <!-- start copyright -->
                    <div class="col-md-6 col-sm-6 col-xs-12 text-left text-small xs-text-center">&copy; 2017 Eureka is
                        Proudly Powered by <a href="http://www.themezaa.com" target="_blank"
                            class="text-dark-gray">ThemeZaa</a></div>
                    <div class="col-md-6 col-sm-6 col-xs-12 text-right text-small xs-text-center">
                        <a href="javascript:void(0);" class="text-dark-gray">Term and
                            Condition</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="javascript:void(0);"
                            class="text-dark-gray">Privacy Policy</a>
                    </div>
                    <!-- end copyright -->
                </div>
            </div>
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
