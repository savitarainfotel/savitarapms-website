<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="our-services">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-7 col-md-7">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">our services</h3>
                    <h1 class="text-anime-style-3">What we can offer today</h1>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col-lg-5 col-md-5">
                <!-- Section Btn Start -->
                <div class="section-btn">
                    <!-- <a href="services" class="btn-default wow fadeInUp" data-wow-delay="0.25s">view all services</a> -->
                </div>
                <!-- Section Btn End -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <!-- Service Item Start -->
                <div class="service-item wow fadeInUp" data-wow-delay="0.25s">
                    <div class="service-content">
                        <div class="service-content-title">
                            <h2>web development</h2>
                            <?= anchor('web-development', img("assets/images/arrow.svg")); ?>
                        </div>
                        <p>Elevate your online presence with our expertly crafted web development solutions tailored to
                            your needs.</p>
                    </div>
                    <div class="service-image">
                        <figure class="image-anime">
                            <?= img(['src' => "assets/images/service-img-1.jpg", 'alt' => "Web Development Developer Desk"]) ?>
                        </figure>
                    </div>
                </div>
                <!-- Service Item End -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Service Item Start -->
                <div class="service-item wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-content">
                        <div class="service-content-title">
                            <h2>Digital Marketing</h2>
                            <?= anchor('digital-marketing', img("assets/images/arrow.svg")); ?>
                        </div>
                        <p>Maximize online impact with our targeted digital marketing strategies across various
                            platforms and channels</p>
                    </div>
                    <div class="service-image">
                        <figure class="image-anime">
                            <?= img(['src'=>"assets/images/service-img-2.jpg",'alt'=>"Digital Marketing Stratergy Plan"]) ?>
                        </figure>
                    </div>
                </div>
                <!-- Service Item End -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Service Item Start -->
                <div class="service-item wow fadeInUp" data-wow-delay="0.75s">
                    <div class="service-content">
                        <div class="service-content-title">
                            <h2>Game Development</h2>
                            <?= anchor('game-development-services', img("assets/images/arrow.svg")); ?>
                        </div>
                        <p>Transform ideas into captivating experiences with our expert game development solutions.</p>
                    </div>
                    <div class="service-image">
                        <figure class="image-anime">
                        <?= img(['src'=>"assets/images/service-img-3.jpg",'alt'=>"Game Developer"]) ?>
                        </figure>
                    </div>
                </div>
                <!-- Service Item End -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Service Item Start -->
                <div class="service-item wow fadeInUp" data-wow-delay="1s">
                    <div class="service-content">
                        <div class="service-content-title">
                            <h2>Mobile App Development</h2>
                            <?= anchor('mobile-application-development', img("assets/images/arrow.svg")); ?>
                        </div>
                        <p>Empower your brand's mobile presence with our streamlined app development solutions,</p>
                    </div>
                    <div class="service-image">
                        <figure class="image-anime">
                        <img src="assets/images/service-img-4.jpg" alt="Planned Mobile App Development">
                        </figure>
                    </div>
                </div>
                <!-- Service Item End -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Service Item Start -->
                <div class="service-item wow fadeInUp" data-wow-delay="1.25s">
                    <div class="service-content">
                        <div class="service-content-title">
                            <h2>Networking Services</h2>
                            <?= anchor('networking-services', img("assets/images/arrow.svg")); ?>
                        </div>
                        <p>Boost your connectivity and efficiency with our comprehensive networking services,</p>
                    </div>
                    <div class="service-image">
                        <figure class="image-anime">
                        <?= img(['src' => "assets/images/service-img-5.jpg", 'alt' => "Networking Services Planning"]) ?>
                        </figure>
                    </div>
                </div>
                <!-- Service Item End -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Service Item Start -->
                <div class="service-item wow fadeInUp" data-wow-delay="1.5s">
                    <div class="service-content">
                        <div class="service-content-title">
                            <h2>Graphics Design</h2>
                            <?= anchor('graphics-design', img("assets/images/arrow.svg")); ?>
                        </div>
                        <p>Transform your vision into stunning visuals with our expert graphic design solutions,</p>
                    </div>
                    <div class="service-image">
                        <figure class="image-anime">
                        <?= img(['src' => "assets/images/service-img-6.jpg", 'alt' => "Graphic Designer Design"]) ?>
                        </figure>
                    </div>
                </div>
                <!-- Service Item End -->
            </div>
        </div>
    </div>
</div>