<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!doctype html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <?= link_tag('assets/favicon.png' . ASSET_VERSION, 'shortcut icon', 'image/x-icon') ?>
    <?php $this->load->view('seo-data'); ?>


    <!-- Google Fonts Css-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700&amp;display=swap" rel="stylesheet">
    <!-- Bootstrap Css -->
    <?= link_tag('assets/css/bootstrap.min.css' . ASSET_VERSION) ?>
    <!-- SlickNav Css -->
    <?= link_tag('assets/css/slicknav.min.css' . ASSET_VERSION) ?>
    <!-- Swiper Css -->
    <?= link_tag('assets/css/swiper-bundle.min.css' . ASSET_VERSION) ?>
    <!-- Font Awesome Icon Css-->
    <?= link_tag('assets/css/all.css' . ASSET_VERSION) ?>
    <!-- Animated Css -->
    <?= link_tag('assets/css/animate.css' . ASSET_VERSION) ?>
    <!-- Magnific Popup Core Css File -->
    <?= link_tag('assets/css/magnific-popup.css' . ASSET_VERSION) ?>
    <!-- Main Custom Css -->
    <?= link_tag('assets/css/custom.css' . ASSET_VERSION) ?>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-R4CYP6TQQ7"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-R4CYP6TQQ7');
    </script>
    <script type="text/javascript">
        (function(c,l,a,r,i,t,y){
            c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
            t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
            y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
        })(window, document, "clarity", "script", "nfbi5hds9e");
    </script>
</head>

<body class="tt-magic-cursor">
    <!-- Preloader Start -->
    <div class="preloader">
        <div class="loading-container">
            <div class="loading"></div>
            <div id="loading-icon">
                <?= img(['src' => "assets/logo.png", 'alt' => "Savitara Infotel Logo"]); ?>
            </div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Magic Cursor Start -->
    <div id="magic-cursor">
        <div id="ball"></div>
    </div>
    <!-- Magic Cursor End -->

    <!-- Header Start -->
    <header class="main-header">
        <div class="header-sticky">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <!-- Logo Start -->
                    <?= anchor('', img(['src' => "assets/logo.png", 'alt' => "savitara infotel logo"]), 'class="navbar-brand"'); ?>
                    <!-- Logo End -->

                    <!-- Main Menu Start -->
                    <div class="collapse navbar-collapse main-menu">
                        <div class="nav-menu-wrapper">
                            <ul class="navbar-nav mr-auto" id="menu">
                                <li class="nav-item">
                                    <?= anchor('', "home", 'class="nav-link"'); ?>
                                </li>
                                <li class="nav-item">
                                    <?= anchor('about', "about us", 'class="nav-link"'); ?>
                                </li>
                                <li class="nav-item submenu">
                                    <?= anchor('services', "services", 'class="nav-link"'); ?>
                                    <ul>
                                        <li class="nav-item">
                                            <?= anchor('web-development', "web-development", 'class="nav-link"'); ?>
                                        </li>
                                        <li class="nav-item">
                                            <?= anchor('digital-marketing', "Digital Marketing ", 'class="nav-link"'); ?>
                                        </li>
                                        <li class="nav-item">
                                            <?= anchor('game-development-services', "Game Development", 'class="nav-link"'); ?>
                                        </li>
                                        <li class="nav-item">
                                            <?= anchor('mobile-application-development', "Mobile App Development", 'class="nav-link"'); ?>
                                        </li>
                                        <li class="nav-item">
                                            <?= anchor('networking-services', "Networking Services", 'class="nav-link"'); ?>
                                        </li>
                                        <li class="nav-item">
                                            <?= anchor('graphics-design', "Graphics Design", 'class="nav-link"'); ?>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item ">
                                    <?= anchor('portfolio', "portfolio", 'class="nav-link"'); ?>
                                    <!-- <ul>
                                        <li class="nav-item">
                                            <?= anchor('', "web development", 'class="nav-link"'); ?>
                                        </li>
                                        <li class="nav-item">
                                            <?= anchor('', "Digital Marketing ", 'class="nav-link"'); ?>
                                        </li>                                       
                                        <li class="nav-item">
                                            <?= anchor('', "Graphics Design", 'class="nav-link"'); ?>
                                        </li>
                                    </ul> -->
                                </li>
                                <li class="nav-item">
                                    <?= anchor('contact-us', "Contact us", 'class="nav-link"'); ?>
                                </li>
                                <li class="nav-item">
                                    <?= anchor('blogs', "blogs", 'class="nav-link"'); ?>
                                </li>
                                <li class="nav-item">
                                    <?= anchor('career', "career", 'class="nav-link"'); ?>
                                </li>
                                <li class="nav-item submenu">
                                    <!-- <a class="nav-link" href="javascript:;">pages</a> -->
                                    <!-- <ul>
                                            <li class="nav-item">
                                                <?= anchor('', "service details", 'class="nav-link"'); ?>
                                            </li>
                                            <li class="nav-item">
                                                <?= anchor('', "portfolio details ", 'class="nav-link"'); ?>
                                            </li>
                                            <li class="nav-item">
                                                <?= anchor('', "blog details", 'class="nav-link"'); ?>
                                            </li>
                                            <li class="nav-item">
                                                <?= anchor('', "FAQ", 'class="nav-link"'); ?>
                                            </li>
                                            <li class="nav-item">
                                                <?= anchor('', "404", 'class="nav-link"'); ?>
                                            </li>
                                        </ul> -->
                                </li>
                                <li class="nav-item highlighted-menu">
                                    <?= anchor('contact-us', 'free consultation', 'class="nav-link"'); ?>
                                </li>
                            </ul>
                        </div>
                        <!-- Let’s Start Button Start -->
                        <div class="header-btn d-inline-flex">
                            <?= anchor('contact-us', 'free consultation', 'class="btn-default"'); ?>
                        </div>
                        <!-- Let’s Start Button End -->
                    </div>
                    <!-- Main Menu End -->

                    <div class="navbar-toggle"></div>
                </div>
            </nav>
            <div class="responsive-menu"></div>
        </div>
    </header>
    <?php
    if (isset($breadcrumb)) :
        $this->load->view('includes/breadcrumb');
    endif;

    echo $contents;
    ?>

    <footer class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Mega Footer Start -->
                    <div class="mega-footer">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <!-- Footer About Start -->
                                <div class="footer-about">
                                    <figure>
                                        <?= anchor('', img(['src' => "assets/logo.png", 'alt' => "Savitara Infotel Logo"])); ?>
                                    </figure>
                                    <p class="mt-4">When you work with Savitara Infotel, you’re not just a client; you’re a partner. We get to know your company.</p>
                                    <ul>
                                        <li><a href="mailto:">info@savitarainfotel.com</a></li>
                                        <li><a href="tel:+91 9081907502"><img src="assets/images/adr-flag-ind.png"> INDIA : (+91) 90 819 07 502 </a></li>
                                        <li><a href="tel:+1 608 421-8497"><img src="assets/images/adr-flag-us.png"> USA : (+1) 608 421-8497 </a></li>
                                    </ul>
                                </div>
                                <!-- Footer About End -->
                            </div>

                            <div class="col-lg-2 col-md-4">
                                <!-- Footer Links Start -->
                                <div class="footer-links">
                                    <h2>pages</h2>
                                    <ul>

                                        <li><?= anchor('about', 'About Us'); ?></li>
                                        <li><?= anchor('services', 'Services'); ?></li>
                                        <li><?= anchor('blogs', 'Blog'); ?></li>
                                        <li><?= anchor('contact-us', 'Contact Us'); ?></li>
                                    </ul>
                                </div>
                                <!-- Footer Links End -->
                            </div>

                            <div class="col-lg-2 col-md-4">
                                <!-- Footer Links Start -->
                                <div class="footer-links">
                                    <h2>Socials</h2>
                                    <ul>
                                        <li><a href="https://www.instagram.com/savitarainfotelpvtltd?igsh=MWRtZ2c1ZDd3eGd3dw==">instagram</a></li>
                                        <!-- <li><a href="javascript:;">facebook</a></li> -->
                                        <!-- <li><a href="javascript:;">twitter</a></li> -->
                                        <li><a href="https://www.linkedin.com/company/savitara-infotel-pvt-ltd/">linkedin</a></li>
                                    </ul>
                                </div>
                                <!-- Footer Links End -->
                            </div>

                            <div class="col-lg-2 col-md-4">
                                <!-- Footer Links Start -->
                                <div class="footer-links">
                                    <h2>services</h2>
                                    <ul>
                                        <li><a href="web-development">web development</a></li>
                                        <li><a href="digital-marketing">digital marketing</a></li>
                                        <li><a href="game-development-services">game development</a></li>
                                        <li><a href="mobile-application-development">mobile app development</a></li>
                                        <li><a href="networking-services">networking services</a></li>
                                        <li><a href="graphics-design">graphic design</a></li>
                                    </ul>
                                </div>
                                <!-- Footer Links End -->
                            </div>
                        </div>
                    </div>
                    <!-- Mega Footer End -->

                    <!-- Copyright Footer Start -->
                    <div class="footer-copyright">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <!-- Footer Copyright Content Start -->
                                <div class="footer-copyright-text">
                                    <p>Copyright © 2024 Savitara Infotel Pvt. Ltd. All rights reserved.</p>
                                </div>
                                <!-- Footer Copyright Content End -->
                            </div>
                            <div class="col-lg-6">
                                <!-- Footer Policy Links Start -->
                                <div class="footer-policy-links">
                                    <ul>
                                        <li><a href="privacypolicy">privacy policy</a></li>
                                        <li><a href="termsofservice">terms of service</a></li>
                                        <li class="highlighted"><a href="#top">go to top</a></li>
                                    </ul>
                                </div>
                                <!-- Footer Policy Links End -->
                            </div>
                        </div>
                    </div>
                    <!-- Copyright Footer End -->
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- Jquery Library File -->
    <?= script("assets/js/jquery-3.7.1.min.js" . ASSET_VERSION); ?>
    <!-- Bootstrap js file -->
    <?= script("assets/js/bootstrap.min.js" . ASSET_VERSION); ?>
    <!-- Validator js file -->
    <?= script("assets/js/validator.min.js" . ASSET_VERSION); ?>
    <!-- SlickNav js file -->
    <?= script("assets/js/jquery.slicknav.js" . ASSET_VERSION); ?>
    <!-- Swiper js file -->
    <?= script("assets/js/swiper-bundle.min.js" . ASSET_VERSION); ?>
    <!-- Counter js file -->
    <?= script("assets/js/jquery.waypoints.min.js" . ASSET_VERSION); ?>
    <?= script("assets/js/jquery.counterup.min.js" . ASSET_VERSION); ?>
    <!-- Isotop js file -->
    <?= script("assets/js/isotope.min.js" . ASSET_VERSION); ?>
    <!-- Magnific js file -->
    <?= script("assets/js/jquery.magnific-popup.min.js" . ASSET_VERSION); ?>
    <!-- SmoothScroll -->
    <?= script("assets/js/SmoothScroll.js" . ASSET_VERSION); ?>
    <!-- MagicCursor js file -->
    <?= script("assets/js/gsap.min.js" . ASSET_VERSION); ?>
    <?= script("assets/js/magiccursor.js" . ASSET_VERSION); ?>
    <!-- Text Effect js file -->
    <?= script("assets/js/SplitText.js" . ASSET_VERSION); ?>
    <?= script("assets/js/ScrollTrigger.min.js" . ASSET_VERSION); ?>
    <!-- Wow js file -->
    <?= script("assets/js/wow.js" . ASSET_VERSION); ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Main Custom js file -->
    <?= script("assets/js/function.js" . ASSET_VERSION); ?>
</body>

</html>