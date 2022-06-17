<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Neta</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/lightcase.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="body-padding">
    <!-- preloader start -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
                <div class="object" id="object_four"></div>
            </div>
        </div>
    </div>
    <!-- preloader end -->


    <!-- Start Header -->
    <header class="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg p-lg-0">
                <a class="navbar-brand logo" href="index.html"><img src="assets/images/logo/01.png" alt="logo"></a>
                <a class="navbar-brand logo" href="index.html"><img src="assets/images/logo/02.png" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="active-submenu"><a href="index.php">Accueil</a></li>
                        </li>
                        <li><a href="biographie.php">Biographie</a></li>
                        </li>
                        <li><a href="campagne.php">Campagne</a></li>
                        </li>
                        <li><a href="galerie.php">Galerie</a></li>
                        </li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                    <a href="donate.php" class="custom-btn donate">Faire un don maintenant</a>
                </div>
            </nav>
        </div>
    </header>
    <!-- End Header -->


    <!-- start page header -->
    <section class="page-header">
        <div class="overlay">
            <div class="container">
                <div class="page-header-content">
                    <h2>Faire un don</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- end page header -->


    <!-- start main content area -->
    <section class="site-content donate-page section-padding-140">
        <div class="container">
            <div class="donate-details-area">
                <div class="donate-details-header">
                    <p>Veuillez compléter votre don sécurisé pour cette cause. Si vous avez des questions,
                        Appelez-nous: <span>(+225) 27 20 22 32 34</span> ou Email: <span>infos@budget.gouv.ci</span></p>
                </div>
                <div class="ddc-content-wrapper">
                    <div class="section-head">
                        <h2>Faites un don maintenant</h2>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="donate-amount">
                                <h5>Faire un don maintenant</h5>
                                <label class="amount"><strong>18419</strong> CFA</label>
                                <label class="amount"><strong>30698</strong> CFA</label>
                                <label class="amount"><strong>42978</strong> CFA</label>
                                <label class="amount"><strong>55257</strong> CFA</label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="donate-amount">
                                <h5>Votre don</h5>
                                <select name="monthly silection">
                                    <option value="month">Mensuel</option>
                                    <option value="month1">Janvier</option>
                                    <option value="month">Février</option>
                                    <option value="month">Mars</option>
                                    <option value="month">Avril</option>
                                    <option value="month">Mai</option>
                                    <option value="month">Juin</option>
                                    <option value="month">Juillet</option>
                                    <option value="month">Août</option>
                                    <option value="month">Septembre</option>
                                    <option value="month">Octobre</option>
                                    <option value="month">Novembre</option>
                                    <option value="month">Decembre</option>
                                </select>
                                <form action="#">
                                    <input type="text" name="doller" placeholder="6139">
                                </form>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="payment-info">
                                <h5>Info Paiement</h5>

                                <form action="#">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" name="first-name" placeholder="Prénom:">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="last-name" placeholder="Nom de famille:">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="e-mail" placeholder="E-mail:">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="phone" placeholder="Téléphone:">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <select name="payment-method">
                                                <option value="payment">Sélectionnez le mode de paiement</option>
                                                <option value="payment-m-1">Orange Money</option>
                                                <option value="payment-m-1">Moov Money</option>
                                                <option value="payment-m-1">Mtn Money</option>
                                                <option value="payment-m-1">Wave</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <a href="#" class="submit button-shadow">Don</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end main content area -->


    <!-- start footer section -->
    <footer class="footer-section">
        <div class="footer-top section-padding-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-sm-6">
                        <div class="widget">
                            <a class="navbar-brand logo" href="index.html"><img src="assets/images/logo/02.png"
                                    alt="logo"></a>
                            <p>MONSIEUR MOUSSA SANOGO <br>Ministre du Budget et du Portefeuille de l’Etat.</p>
                            <ul class="contact-info">
                                <li><i class="fa fa-map-marker"></i>Abidjan Plateau
                                    Immeuble SCIAM
                                    10ème et 11ème étages
                                    01 BP 12666 Abidjan 01
                                    COTE D’IVOIRE</li>
                                <li><i class="fa fa-phone"></i>Tel.(+225) 27 20 21 59 95</li>
                                <li><i class="fa fa-envelope"></i>infos@budget.gouv.ci</li>
                            </ul>
                            <ul class="social-media">
                                <li><a class="facebook" href="https://www.facebook.com/Moussanog"><i
                                            class="fa fa-facebook"></i></a></li>
                                <li><a class="twitter"
                                        href="Twitter : https://twitter.com/gouvci/status/1126091198412804096?lang=fr"><i
                                            class="fa fa-twitter"></i></a></li>
                                <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="widget">
                            <h5>Nouvelles récentes</h5>
                            <div class="small-post-list">
                                <div class="post-item">
                                    <div class="post-thumb">
                                        <a href="single.html"><img src="assets/images/Accueil/small-thumb/01.jpg"
                                                alt="thumb"></a>
                                    </div>
                                    <div class="post-content">
                                        <a href="single.html">Lancement du campagne d’authentification des
                                            quittances et reçus émis.</a>
                                        <ul class="post-meta">
                                            <li>27 Juillet 2021</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="widget">
                            <h5>Tweets récents</h5>
                            <div class="tweet-list">
                                <div class="tweet-item">
                                    <div class="tweet-thumb">
                                        <a href="#"><img src="assets/images/tweet/01.png" alt="thumb"></a>
                                    </div>
                                    <div class="tweet-content">
                                        <a class="name"
                                            href="https://twitter.com/gouvci/status/1126091198412804096?lang=fr">Sanogo
                                            Moussa <br><span>@Sanogomoussa</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2022 <a href="index.html">M. Moussa Sanogo</a>Conçu par <a
                    href="https://themeforest.net/user/Labartisan/portfolio" target="_blank">Isaac</a></p>
        </div>
    </footer>
    <!-- end footer section -->


    <script src='assets/js/plugins.js'></script>
    <script src='assets/js/function.js'></script>
</body>

</html>