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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />

    <?= link_tag('assets/css/custom.css' . ASSET_VERSION) ?>
    <?= link_tag('assets/css/responsive.css' . ASSET_VERSION) ?>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">
                <?= anchor('', img(['src' => "assets/logo.png", 'alt' => "savitara infotel logo", "class" => "img-fluid"]), 'class="navbar-brand"'); ?>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:;" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Features</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <?= anchor('crs-intigration', 'Savitar CRS Integration', 'class="dropdown-item"'); ?>
                                </li>
                                <li>
                                    <?= anchor('channel-manager', 'Savitar Channel Manager', 'class="dropdown-item"'); ?>
                                </li>
                                <li>
                                    <?= anchor('user-dashboard', 'UserDashboard', 'class="dropdown-item"'); ?>
                                </li>
                                <li>
                                    <?= anchor('receptionist', 'Receptionist', 'class="dropdown-item"'); ?>
                                </li>
                                <li>
                                    <?= anchor('admin', 'Admin', 'class="dropdown-item"'); ?>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:;" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Add On
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <?= anchor('javascript:;', 'Payroll Management', 'class="dropdown-item"'); ?>
                                </li>
                                <li>
                                    <?= anchor('javascript:;', 'Digital Marketing', 'class="dropdown-item"'); ?>
                                </li>
                                <li>
                                    <?= anchor('javascript:;', 'Website Builder', 'class="dropdown-item"'); ?>
                                </li>
                                <li>
                                    <?= anchor('javascript:;', 'Revenue Management', 'class="dropdown-item"'); ?>
                                </li>
                                <li>
                                    <?= anchor('javascript:;', 'Repetition Management', 'class="dropdown-item"'); ?>
                                </li>
                                <li>
                                    <?= anchor('javascript:;', 'Resources Finder and Repair Soluction', 'class="dropdown-item"'); ?>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:;" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Comapny
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <?= anchor('about', 'About Us', 'class="dropdown-item"'); ?>
                                </li>
                                <li>
                                    <?= anchor('blogs', 'Blogs', 'class="dropdown-item"'); ?>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <?= anchor('contact-us', 'Contact us', 'class="nav-link active"'); ?>
                            
                        </li>
                    </ul>
                    <?= anchor('contact-us', 'Request a Demo', 'class="btn-green"'); ?>
                </div>
            </div>
        </nav>
    </header>
    <?php
    if (isset($breadcrumb)) :
        $this->load->view('includes/breadcrumb');
    endif;

    echo $contents;
    ?>
    <footer class="footer-section">
        <div class="container">
            <div class="footer-cta pt-5 pb-5">
                <div class="row g-4">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta d-flex">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="cta-text">
                                <h4>Find us</h4>
                                <span>FF - 123, I Square, Science City Rd, nr. shukan mall,Crossroads,Sola, Ahmedabad, Gujarat 380060</span><br>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta d-flex">
                            <i class="fas fa-phone"></i>
                            <div class="cta-text">
                                <h4>Call us</h4>
                                <span>+1 (608) 421-8497</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta d-flex">
                            <i class="far fa-envelope-open"></i>
                            <div class="cta-text">
                                <h4>Mail us</h4>
                                <span>sales@savitarpms.com</span><br>
                                <span>info@savitarpms.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-content pt-5 pb-5">
                <div class="row g-4">
                    <div class="col-xl-4 col-lg-4 mb-50">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <?= anchor('', img(['src' => "assets/logo.png", 'alt' => "savitara infotel logo", "class" => "img-fluid"])); ?>
                            </div>
                            <div class="footer-text">
                                <p>Effortlessly manage your hotel operations with Savitar's new Property Management System (PMS). Streamline bookings, enhance guest experiences, and optimize your business with our cutting-edge, user-friendly software and Addons.</p>
                            </div>
                            <div class="footer-social-icon">
                                <span>Follow us</span>
                                <a href="https://www.facebook.com/profile.php?id=61560490731398"><i class="fab fa-facebook-f facebook-bg"></i></a>
                                <a href="https://x.com/savitar_pms"><i class="fab fa-twitter twitter-bg"></i></a>
                                <a href="https://www.instagram.com/savitar_.pms/"><i class="fab fa-instagram google-bg"></i></a>
                                <a href="https://www.linkedin.com/company/savitar-pms/"><i class="fab fa-linkedin facebook-bg"></i></a>
                                <a href="https://www.youtube.com/@savitarpms"><i class="fab fa-youtube twitter-bg"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget pl-60">
                            <div class="footer-widget-heading">
                                <h3>Useful Links</h3>
                            </div>
                            <ul>
                                <li>
                                    <?= anchor('', 'Home'); ?>
                                </li>
                                <li>
                                    <?= anchor('about', 'About us'); ?>
                                </li>
                                <li>
                                    <?= anchor('blogs', 'Blog'); ?>
                                </li>
                                <li>
                                    <?= anchor('contact-us', 'Contact us'); ?>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Subscribe</h3>
                            </div>
                            <div class="footer-text mb-25">
                                <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                            </div>
                            <div class="subscribe-form">
                                <?= form_open('subscribe', 'class="ajax-form"'); ?>
                                    <div class="col-12 error-message"></div>
                                    <div class="input-group">
                                        <input type="text" name="email" placeholder="Email Address" />
                                        <button type="submit"><i class="fab fa-telegram-plane"></i></button>
                                    </div>
                                <?= form_close(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2018, All Right Reserved <a href="javascript:;">Savitar PMS</a></p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                        <div class="footer-menu">
                            <ul>
                                <li>
                                    <?= anchor('', 'Home'); ?>
                                </li>
                                <li>
                                    <?= anchor('', 'Terms'); ?>
                                </li>
                                <li>
                                    <?= anchor('', 'Privacy'); ?>
                                </li>
                                <li>
                                    <?= anchor('', 'Policy'); ?>
                                </li>
                                <li>
                                    <?= anchor('contact-us', 'Contact us'); ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.min.js"></script>

    <?= script("assets/js/custom.js" . ASSET_VERSION); ?>
</body>

</html>