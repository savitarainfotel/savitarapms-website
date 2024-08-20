<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!-- Hero Section Start -->
<div class="hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="hero-layout-2">
                    <!-- Hero Content Start -->
                    <div class="hero-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">about our Company</h3>
                            <h1 class="text-anime-style-3">Web Design, SEO & Internet Marketing For <span>Your Business</span></h1>
                        </div>
                        <!-- Section Title End -->

                        <!-- Hero Body Start -->
                        <div class="hero-body">
                            <p class="wow fadeInUp" data-wow-delay="0.5s">Immersed in the boundless realms of artistry,
                                sleek user interfaces, web narratives, and the intricacies of programming, we craft timeless
                                experiences that resonate deeply with users.</p>
                        </div>
                        <!-- Hero Body End -->

                        <!-- Hero Footer Start -->
                        <div class="hero-footer">
                            <a href="contact-us" class="btn-default wow fadeInUp" data-wow-delay="0.75s">free consultation</a>

                        </div>
                        <!-- Hero Footer End -->
                    </div>
                    <!-- Hero Left Content End -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero Section End -->

<!-- About Section Start -->
<div class="about-us">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-8">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">about Company</h3>
                    <h2 class="text-anime-style-3">Websites that tell your brand's story</h2>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-6">
                <!-- About Us Image Start -->
                <div class="about-image">
                    <div class="about-img">
                        <figure class="image-anime reveal">
                            <?= img(['src' => "assets/images/about-us-img.jpg", 'alt' => "Dedicated Team Discussed on Project"]) ?>
                        </figure>
                    </div>
                    <div class="about-consultation">
                        <figure>
                            <?= img(['src' => "assets/images/about-circle.png", 'alt' => "Savitara Infotel Logo In Circle"]); ?>
                        </figure>
                    </div>
                </div>
                <!-- About Us Image End -->
            </div>

            <div class="col-lg-6">
                <!-- About Us Content Start -->
                <div class="about-content">
                    <p class="wow fadeInUp" data-wow-delay="0.25s">Savitara Infotel was Founded in June 2022 and
                        headquartered in Ahmedabad Gujarat, in order to help companies with their IT solutions. Our
                        initial focus was providing complete information technology solutions for companies.</p>

                    <p class="wow fadeInUp" data-wow-delay="0.5s">Savitara Infotels Private limited as a firm envisioned
                        to provide high quality services and products in the software industry which sets a benchmark
                        efficiently in software development and other IT services. Savitara Infotels is always looking
                        for Timeless opportunities for development. Our goal is to use software and cloud services to
                        make operations simple and economical for organisations and individuals so they can grow.</p>

                    <p class="wow fadeInUp" data-wow-delay="0.75s">We specialise in various IT solutions, including Web
                        development,mobile application,Digitel Marketing, E-commerce,custom Software With extensive
                        technical assistance in the broad view of things, our team's core experience has revolutionised
                        the perspective of your business model.</p>

                    <ul class="wow fadeInUp" data-wow-delay="1s">
                        <li>Ease of Scalability</li>
                        <li>Instant Impact</li>
                        <li>Expertise and Experience</li>
                        <li>Time Zone Aligned</li>
                        <li>Full Flexibility</li>
                        <li>Proactive Support</li>
                    </ul>

                    <a href="contact-us" class="btn-default wow fadeInUp" data-wow-delay="1.25s">free consultation</a>
                </div>
                <!-- About Us Content End -->
            </div>
        </div>
    </div>
</div>
<!-- About Section End -->

<!-- Our Services Section Start -->
<div class="our-services">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-7 col-md-7">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">our services</h3>
                    <h2 class="text-anime-style-3">What we can offer today</h2>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col-lg-5 col-md-5">
                <!-- Section Btn Start -->
                <div class="section-btn">
                    <a href="services" class="btn-default wow fadeInUp" data-wow-delay="0.25s">view all services</a>
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
                            <?= img(['src' => "assets/images/service-img-1.jpg", 'alt' => "Web Development Developer Desk"]); ?>
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
                            <?= img(['src' => "assets/images/service-img-2.jpg", 'alt' => "Digital Marketing Stratergy Plan"]) ?>
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
                            <?= img(['src' => "assets/images/service-img-3.jpg", 'alt' => "Game Developer"]) ?>
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
                            <h2>mobile App Development</h2>
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
<!-- Our Services Section End -->



<!-- Why Choose Us Section Start -->
<div class="why-choose-us">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-8 col-md-12">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">why choose us</h3>
                    <h2 class="text-anime-style-3">Why choose us ?</h2>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <!-- Why Choose Item Start -->
                <div class="why-choose-us-item wow fadeInUp" data-wow-delay="0.25s">
                    <div class="icon-box">
                        <?= img("assets/images/icon-whyus-1.svg"); ?>
                    </div>
                    <h3>innovation</h3>
                    <p>Savitara Infotel thrives on innovation, constantly evolving to deliver cutting-edge web
                        development and digital marketing solutions. Our commitment to creativity drives us to pioneer
                        new approaches, ensuring our clients stay ahead in the digital,</p>
                </div>
                <!-- Why Choose Item End -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Why Choose Item Start -->
                <div class="why-choose-us-item wow fadeInUp" data-wow-delay="0.5s">
                    <div class="icon-box">
                        <?= img("assets/images/icon-whyus-2.svg"); ?>
                    </div>
                    <h3>quality-focused</h3>
                    <p>At Savitara Infotel, we're dedicated to being quality-focused in every aspect of our IT services,
                        ensuring unparalleled excellence for our clients. Our relentless pursuit of quality sets us
                        apart, delivering solutions that exceed expectations and drive success,</p>
                </div>
                <!-- Why Choose Item End -->
            </div>

            <div class="col-lg-4">
                <!-- Why Choose Item Start -->
                <div class="why-choose-us-item wow fadeInUp" data-wow-delay="0.75s">
                    <div class="icon-box">
                        <?= img("assets/images/icon-whyus-3.svg"); ?>
                    </div>
                    <h3>Technical Expertise</h3>
                    <p>At Savitara Infotel, our foundation is built on technical expertise, empowering us to deliver
                        top-tier web development and digital marketing solutions. With a team of skilled professionals,
                        we harness our technical prowess to drive innovation and excellence for our clients,</p>
                </div>
                <!-- Why Choose Item End -->
            </div>
            <div class="col-md-12 py-5 my-3">
                <div class="row section-row align-items-center">
                    <div class="col-lg-12">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp"> How we Work</h3>
                            <h2 class="text-anime-style-3">How it helps <span class="subtitle">your business succeed</span></h2>
                        </div>
                        <!-- Section Title End -->
                    </div>
                </div>
                <!-- <div class="title">How it helps <span class="subtitle">your business succeed</span></div> -->
                <div class="steps text-anime-style-2 ">
                    <div class="step">
                        <div class="circle">1</div>
                        <div class="description">Initial meeting</div>
                    </div>
                    <div class="step">
                        <div class="circle">2</div>
                        <div class="description">Analysis & Confirmation</div>
                    </div>
                    <div class="step">
                        <div class="circle">3</div>
                        <div class="description">Development & testing</div>
                    </div>
                    <div class="step">
                        <div class="circle">4</div>
                        <div class="description">Finalization with client</div>
                    </div>
                    <div class="step">
                        <div class="circle">5</div>
                        <div class="description">Completion of project</div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 mt-2">
                <!-- Why Us Explore Item Start -->
                <div class="why-us-explore-item">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="why-us-section-title">
                                <!-- Section Title Start -->
                                <div class="section-title">
                                    <h2 class="text-anime-style-3">Do you want to explore our outstanding work?</h2>
                                </div>
                                <!-- Section Title End -->

                                <!-- Explore Item Icon Start -->
                                <div class="explore-item-icon">
                                    <?= img("assets/images/icon-whyus-4.svg"); ?>
                                </div>
                                <!-- Explore Item Icon End -->
                            </div>
                        </div>
                    </div>

                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <!-- Explore Item Content Start -->
                            <div class="explore-item-content wow fadeInUp" data-wow-delay="0.25s">
                                <p>At Savitara Infotel, our exceptional work reflects our unwavering commitment to
                                    excellence in IT services. With a focus on quality and innovation, we leverage our
                                    technical expertise to deliver unparalleled solutions. Each project is approached
                                    with meticulous attention to detail, ensuring client satisfaction and success. Our
                                    dedication to staying at the forefront of industry trends drives us to consistently
                                    surpass expectations.</p>
                            </div>
                            <!-- Explore Item Content End -->
                        </div>

                        <div class="col-lg-6">
                            <!-- Explore Item Content Start -->
                            <div class="explore-item-tags wow fadeInUp" data-wow-delay="0.25s">
                                <ul>
                                    <li><a href="https://wa.link/172iwv" class="btn-default">Whatsapp</a></li>
                                    <li><a href="https://www.linkedin.com/company/savitara-infotel-pvt-ltd/" class="btn-default">linkedin</a></li>
                                    <li><?= anchor('contact-us', 'Contact Us', 'class="btn-default"'); ?></li>
                                </ul>
                            </div>
                            <!-- Explore Item Content End -->
                        </div>
                    </div>
                </div>
                <!-- Why Us Explore Item End -->
            </div>
        </div>
    </div>
</div>
<!-- Why Choose Us Section End -->

<!-- Exclusive Partners Section Start -->
<div class="exclusive-partners">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp"> Exploring Technology </h3>
                    <h2 class="text-anime-style-3">20+ Technology We Work</h2>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12">
                <!-- Sidebar Our Projects Nav start -->
                <div class="our-projects-nav wow fadeInUp" data-wow-delay="0.25s">
                    <ul>
                        <li><a href="#" class="active-btn" data-filter=".*">All</a></li>
                        <li><a href="#" data-filter=".mobile">Mobile</a></li>
                        <li><a href="#" data-filter=".website">Web</a></li>
                        <li><a href="#" data-filter=".digital">Digital</a></li>
                        <li><a href="#" data-filter=".graphics">Graphics</a></li>
                    </ul>
                </div>
                <!-- Sidebar Our Projects Nav End -->
            </div>
            <div class="col-lg-12">
                <!-- Project Item Box start -->
                <div class="row project-item-boxes">
                    <div class="col-lg-3 col-6 mx-auto project-item-box mobile">
                        <!-- Partners Logo Start -->
                        <div class="partners-logo wow fadeInUp" data-wow-delay="0.2s">
                            <?= img(['src'=>"assets/images/anroid.svg",'alt'=>"Android Logo"]) ?>
                        </div>
                        <!-- Partners Logo End -->
                    </div>

                    <div class="col-lg-3 col-6 project-item-box mobile">
                        <!-- Partners Logo Start -->
                        <div class="partners-logo wow fadeInUp" data-wow-delay="0.4s">
                        <?= img(['src'=>"assets/images/ios.svg",'alt'=>"ios Logo"]) ?>
                           
                        </div>
                        <!-- Partners Logo End -->
                    </div>

                    <div class="col-lg-3 col-6 project-item-box mobile">
                        <!-- Partners Logo Start -->
                        <div class="partners-logo wow fadeInUp" data-wow-delay="0.6s">
                        <?= img(['src'=>"assets/images/xamarin.svg",'alt'=>"xamarin Logo"]) ?>
                            
                        </div>
                        <!-- Partners Logo End -->
                    </div>

                    <div class="col-lg-3 col-6 project-item-box mobile">
                        <!-- Partners Logo Start -->
                        <div class="partners-logo wow fadeInUp" data-wow-delay="0.8s">
                        <?= img(['src'=>"assets/images/flutter.svg",'alt'=>"flutter Logo"]) ?>
                            
                        </div>
                        <!-- Partners Logo End -->
                    </div>

                    <div class="col-lg-3 col-6 project-item-box mobile">
                        <!-- Partners Logo Start -->
                        <div class="partners-logo wow fadeInUp" data-wow-delay="1s">
                        <?= img(['src'=>"assets/images/swift.svg",'alt'=>"swift Logo"]) ?>
                            
                        </div>
                        <!-- Partners Logo End -->
                    </div>

                    <div class="col-lg-3 col-6 project-item-box mobile">
                        <!-- Partners Logo Start -->
                        <div class="partners-logo wow fadeInUp" data-wow-delay="1.2s">
                        <?= img(['src'=>"assets/images/ionic.svg",'alt'=>"ionic Logo"]) ?>
                            
                        </div>
                        <!-- Partners Logo End -->
                    </div>

                    <div class="col-lg-3 col-6 project-item-box mobile">
                        <!-- Partners Logo Start -->
                        <div class="partners-logo wow fadeInUp" data-wow-delay="1.4s">
                        <?= img(['src'=>"assets/images/java.svg",'alt'=>"java Logo"]) ?>
                           
                        </div>
                        <!-- Partners Logo End -->
                    </div>

                    <div class="col-lg-3 col-6 project-item-box mobile">
                        <!-- Partners Logo Start -->
                        <div class="partners-logo wow fadeInUp" data-wow-delay="1.6s">
                        <?= img(['src'=>"assets/images/react native.svg",'alt'=>"react native Logo"]) ?>
                           
                        </div>
                        <!-- Partners Logo End -->
                    </div>
                    <div class="col-lg-3 col-6 project-item-box website">
                        <!-- Partners Logo Start -->
                        <div class="partners-logo wow fadeInUp" data-wow-delay="1.6s">
                        <?= img(['src'=>"assets/images/react.svg",'alt'=>"react Logo"]) ?>
                           
                        </div>
                        <!-- Partners Logo End -->
                    </div>
                    <div class="col-lg-3 col-6 project-item-box website">
                        <!-- Partners Logo Start -->
                        <div class="partners-logo wow fadeInUp" data-wow-delay="1.6s">
                        <?= img(['src'=>"assets/images/node.svg",'alt'=>"node Logo"]) ?>
                           
                        </div>
                        <!-- Partners Logo End -->
                    </div>
                    <div class="col-lg-3 col-6 project-item-box website">
                        <!-- Partners Logo Start -->
                        <div class="partners-logo wow fadeInUp" data-wow-delay="1.6s">
                        <?= img(['src'=>"assets/images/php.svg",'alt'=>"php Logo"]) ?>
                            <?= img(""); ?>
                        </div>
                        <!-- Partners Logo End -->
                    </div>
                    <div class="col-lg-3 col-6 project-item-box website">
                        <!-- Partners Logo Start -->
                        <div class="partners-logo wow fadeInUp" data-wow-delay="1.6s">
                        <?= img(['src'=>"assets/images/laravel.svg",'alt'=>"laravel Logo"]) ?>
                           
                        </div>
                        <!-- Partners Logo End -->
                    </div>
                    <div class="col-lg-3 col-6 project-item-box website">
                        <!-- Partners Logo Start -->
                        <div class="partners-logo wow fadeInUp" data-wow-delay="1.6s">
                        <?= img(['src'=>"assets/images/next js.svg",'alt'=>"next js Logo"]) ?>
                           
                        </div>
                        <!-- Partners Logo End -->
                    </div>
                    <div class="col-lg-3 col-6 project-item-box website">
                        <!-- Partners Logo Start -->
                        <div class="partners-logo wow fadeInUp" data-wow-delay="1.6s">
                        <?= img(['src'=>"assets/images/vue js.svg",'alt'=>"vue js Logo"]) ?>
                            
                        </div>
                        <!-- Partners Logo End -->
                    </div>
                    <div class="col-lg-3 col-6 project-item-box website">
                        <!-- Partners Logo Start -->
                        <div class="partners-logo wow fadeInUp" data-wow-delay="1.6s">
                        <?= img(['src'=>"assets/images/angular.svg",'alt'=>"angular Logo"]) ?>
                            
                        </div>
                        <!-- Partners Logo End -->
                    </div>
                    <div class="col-lg-3 col-6 project-item-box website">
                        <!-- Partners Logo Start -->
                        <div class="partners-logo wow fadeInUp" data-wow-delay="1.6s">
                        <?= img(['src'=>"assets/images/javascript.svg",'alt'=>"javascript Logo"]) ?>
                            
                        </div>
                        <!-- Partners Logo End -->
                    </div>
                    <div class="col-lg-3 col-6 project-item-box website">
                        <!-- Partners Logo Start -->
                        <div class="partners-logo wow fadeInUp" data-wow-delay="1.6s">
                        <?= img(['src'=>"assets/images/python.svg",'alt'=>"python Logo"]) ?>
                          
                        </div>
                        <!-- Partners Logo End -->
                    </div>
                    <div class="col-lg-3 col-6 project-item-box digital">
                        <!-- Partners Logo Start -->
                        <div class="partners-logo wow fadeInUp" data-wow-delay="1.6s">
                        <?= img(['src'=>"assets/images/seo.svg",'alt'=>"seo Logo"]) ?>
                           
                        </div>
                        <!-- Partners Logo End -->
                    </div>
                    <div class="col-lg-3 col-6 project-item-box digital">
                        <!-- Partners Logo Start -->
                        <div class="partners-logo wow fadeInUp" data-wow-delay="1.6s">
                        <?= img(['src'=>"assets/images/content.svg",'alt'=>"content Logo"]) ?>
                          
                        </div>
                        <!-- Partners Logo End -->
                    </div>
                    <div class="col-lg-3 col-6 project-item-box digital">
                        <!-- Partners Logo Start -->
                        <div class="partners-logo wow fadeInUp" data-wow-delay="1.6s">
                        <?= img(['src'=>"assets/images/social media.svg",'alt'=>"social media Logo"]) ?>
                            
                        </div>
                        <!-- Partners Logo End -->
                    </div>

                    <div class="col-lg-3 col-6 project-item-box graphics">
                        <!-- Partners Logo Start -->
                        <div class="partners-logo wow fadeInUp" data-wow-delay="1.6s">
                        <?= img(['src'=>"assets/images/adobe.svg",'alt'=>"adobe Logo"]) ?>
                        
                        </div>
                        <!-- Partners Logo End -->
                    </div>
                    <div class="col-lg-3 col-6 project-item-box graphics">
                        <!-- Partners Logo Start -->
                        <div class="partners-logo wow fadeInUp" data-wow-delay="1.6s">
                        <?= img(['src'=>"assets/images/illustrator.svg",'alt'=>"illustrator Logo"]) ?>
                           
                        </div>
                        <!-- Partners Logo End -->
                    </div>
                    <div class="col-lg-3 col-6 project-item-box graphics">
                        <!-- Partners Logo Start -->
                        <div class="partners-logo wow fadeInUp" data-wow-delay="1.6s">
                        <?= img(['src'=>"assets/images/photoshop.svg",'alt'=>"photoshop Logo"]) ?>
                           
                        </div>
                        <!-- Partners Logo End -->
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Exclusive Partners Section End -->





<!-- Latest News Section Start -->
<div class="latest-news">
    <div class="container">
        <div class="row section-row align-items-center">

            <div class="col-lg-6 col-md-8">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">Latest Blog & Articles</h3>
                    <h2 class="text-anime-style-3">The latest insights you need to know</h2>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col-lg-6 col-md-4">
                <!-- Section Btn Start -->
                <div class="section-btn wow fadeInUp" data-wow-delay="0.25s">
                    <a href="blogs" class="btn-default">view all articles</a>
                </div>
                <!-- Section Btn End -->
            </div>
        </div>
        <div class="row">
            <?php if (!empty($blogs)) : foreach ($blogs as $blog) : ?>
                    <div class="col-lg-4 col-md-6">
                        <!-- Blog Item Start -->
                        <div class="blog-item wow fadeInUp" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <!-- Blog Image Start -->
                            <div class="post-featured-image">
                                <figure class="image-anime">
                                    <?php if (is_file($this->path . $blog['image'])) : ?>
                                        <?= anchor($blog['page_name'], img($this->path . $blog['image'])) ?>
                                    <?php endif ?>
                                </figure>
                            </div>
                            <!-- Blog Image End -->
                            <!-- Blog Content Start -->
                            <div class="post-item-body">
                                <p>
                                    <?= anchor($blog['page_name'], date('M d, Y', strtotime($blog['posted_on']))) ?>
                                </p>
                                <h2>
                                    <?= anchor($blog['page_name'], $blog['b_title']) ?>
                                </h2>
                            </div>
                            <!-- Blog Content End -->
                        </div>
                        <!-- Blog Item End -->
                    </div>
                <?php endforeach; ?>
            <?php endif ?>
        </div>
    </div>
</div>


<!-- Latest News Section End -->
<!-- Industries Section Start -->
<div class="container ">
    <div class="row section-row align-items-center">
        <div class="col-lg-12">
            <!-- Section Title Start -->
            <div class="section-title">
                <h3 class="wow fadeInUp"> Industries</h3>
                <h2 class="text-anime-style-3">Tailored IT solutions for a variety of industries.</h2>
            </div>
            <!-- Section Title End -->
        </div>
    </div>
</div>

<div class="scrolling-ticker ">
    <div class="scrolling-ticker-box">
        <div class="scrolling-content">
            <span class="mx-5"><i class="fa-solid fa-circle"></i>Retail</span>
            <span class="mx-5"><i class="fa-solid fa-circle"></i>E-commerce</span>
            <span class="mx-5"><i class="fa-solid fa-circle"></i>Finance</span>
            <span class="mx-5"><i class="fa-solid fa-circle"></i>Healthcare</span>
            <span class="mx-5"><i class="fa-solid fa-circle"></i>Logistic</span>
            <span class="mx-5"><i class="fa-solid fa-circle"></i>Travel</span>
            <span class="mx-5"><i class="fa-solid fa-circle"></i>Education</span>
        </div>

        <div class="scrolling-content">
            <span class="mx-5"><i class="fa-solid fa-circle"></i>Retail</span>
            <span class="mx-5"><i class="fa-solid fa-circle"></i>E-commerce</span>
            <span class="mx-5"><i class="fa-solid fa-circle"></i>Finance</span>
            <span class="mx-5"><i class="fa-solid fa-circle"></i>Healthcare</span>
            <span class="mx-5"><i class="fa-solid fa-circle"></i>Logistic</span>
            <span class="mx-5"><i class="fa-solid fa-circle"></i>Travel</span>
            <span class="mx-5"><i class="fa-solid fa-circle"></i>Education</span>
        </div>

    </div>
</div>
<!-- Industries Section End -->