<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<main>
    <!--================Banner Area =================-->
    <section class="banner_area bg-image">
        <div class="container py-5">
            <div class="row pt-5 px-5 g-3 reverse">
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <div class="banner_content  text-md-left">
                        <h1>All in One Hotel PMS Solutions</h1>
                        <h3>Savitar PMS</h3>
                        <div class="typewriter">
                            <h2 id="typewriter-text">MOTEL MANAGEMENT</h2>
                        </div>

                        <p>Automate hotel operations with Savitar's all-in-one Hotel PMS solution: manage bookings, guest services, billing, and analytics seamlessly on one powerful platform.</p>
                        <a href="./contact_us.php" class="btn-green">Request a Demo</a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 mt-4 mt-md-0">
                    <div class="video wow fadeInUp" data-wow-delay="0.5s">
                        <video controls autoplay loop muted class="w-100">
                            <source src="./assets/video/Savitra PMS_Intro_Final_04.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--================Banner Area =================-->
    <div id="background" class="container-fluid ">
        <!--================Reservation Area =================-->
        <section class="my-5 py-5 ">
            <div class="container bg-darkblue radius-20 p-5">
                <div class="row align-items-center ">
                    <div class="col-md-6  p-3">
                        <h2 class="wow fadeInUp mb-4 text-white"> More Than a PMS: Streamline with Our Integrated Solution
                        </h2>
                        <p class="fs-5  text-white mt-5" data-wow-delay="0.25s">Say goodbye to outdated systems! Our solution is more than just a Hotel PMS—it’s your all-in-one toolkit for effortless hotel and hospitality management. Packed with top-tier features, our platform simplifies everything from reservations to billing and guest services. Streamline your operations and elevate your guest experience with ease
                        </p>
                    </div>
                    <div class="col-md-6 ">

                        <img src="./assets/video/Comp 2.gif" alt="reservations"
                            class="img-fluid wow fadeInUp " data-wow-delay="0.5s">

                    </div>
                </div>
            </div>
        </section>

        <!--================Reservation Area =================-->
        <!--================Tab-content Area =================-->
        <section>
            <div class="container">
                <div class="scrollmenu">
                    <ul class="nav nav-tabs nav-fill  " role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="fill-tab-0" data-bs-toggle="tab" href="#fill-tabpanel-0"
                                role="tab" aria-controls="fill-tabpanel-0" aria-selected="true">Guest Experience</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="fill-tab-1" data-bs-toggle="tab" href="#fill-tabpanel-1"
                                role="tab" aria-controls="fill-tabpanel-1" aria-selected="false">Revenue and Analytics</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="fill-tab-2" data-bs-toggle="tab" href="#fill-tabpanel-2"
                                role="tab" aria-controls="fill-tabpanel-2" aria-selected="false">Reputation Management</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="fill-tab-3" data-bs-toggle="tab" href="#fill-tabpanel-3"
                                role="tab" aria-controls="fill-tabpanel-3" aria-selected="false">Distribution and Marketing</a>
                        </li>
                    </ul>
                </div>


                <div class="tab-content pt-5" id="tab-content">
                    <!-- Tab 1 -->
                    <div class="tab-pane active" id="fill-tabpanel-0" role="tabpanel" aria-labelledby="fill-tab-0">
                        <div class="row">
                            <div class="col-12 bg-darkblue radius-20 p-5">
                                <h2 class="text-white">Streamline operations and automate workflows</h2>
                            </div>
                        </div>
                        <div class="row mt-5 justify-content-between">
                            <div class="col-lg-4 col-md-12 bg-darkblue radius-20 accordian-section">
                                <div class="accordion" id="accordionExample0">
                                    <div class="accordion-item">

                                        <h2 class="accordion-header " id="headingOne0">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-tab-image="dynamicImageTab1"
                                                data-change-image="./assets/images/simplified_process.jpg"
                                                onclick="handleChangeImage(event)" data-bs-target="#collapseOne0"
                                                aria-expanded="true" aria-controls="collapseOne0">
                                                Simplified Processes
                                            </button>
                                        </h2>
                                        <div id="collapseOne0" class="accordion-collapse collapse "
                                            aria-labelledby="headingOne0" data-bs-parent="#accordionExample0">
                                            <div class="accordion-body">
                                                <strong>Streamline hotel operations with our PMS. Simplified processes ensure smooth workflows, from check-ins to housekeeping, enhancing efficiency and guest satisfaction.</strong>

                                            </div>
                                            <img
                                                src="./assets/images/simplified_process.jpg"
                                                alt="simplified_process" srcset="" class="img-fluid p-2">
                                        </div>
                                    </div>
                                    <div class="accordion-item radius-20">
                                        <h2 class="accordion-header" id="headingTwo0">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo0"
                                                data-tab-image="dynamicImageTab1"
                                                data-change-image="./assets/images/custom_payment_option.jpg"
                                                onclick="handleChangeImage(event)" aria-expanded="false"
                                                aria-controls="collapseTwo0">
                                                Custom Payment Options
                                            </button>
                                        </h2>
                                        <div id="collapseTwo0" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo0" data-bs-parent="#accordionExample0">
                                            <div class="accordion-body">
                                                <strong>Offer guests flexibility with custom payment options. Savitar PMS supports various methods, making transactions easy and seamless for both your hotel and your guests</strong>
                                            </div>
                                            <img
                                                src="./assets/images/custom_payment_option.jpg"
                                                alt="custom payment option" srcset="" class="img-fluid p-2">
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree0">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree0"
                                                data-tab-image="dynamicImageTab1"
                                                data-change-image="./assets/images/affortless_booking.jpg"
                                                onclick="handleChangeImage(event)" aria-expanded="false"
                                                aria-controls="collapseThree0">
                                                Effortless Booking
                                            </button>
                                        </h2>
                                        <div id="collapseThree0" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree0" data-bs-parent="#accordionExample0">
                                            <div class="accordion-body">
                                                <strong>Experience effortless booking with our PMS. Streamlined reservation systems simplify the process, reducing booking time and enhancing guest convenience and satisfaction.</strong>
                                            </div>
                                            <img
                                                src="./assets/images/affortless_booking.jpg"
                                                alt="affortless booking" srcset="" class="img-fluid p-2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8  radius-20 mx-right">
                                <img id="dynamicImageTab1"
                                    src="./assets/images/simplified_process.jpg"
                                    alt="simplified_process" class="img-fluid image-block">
                            </div>
                        </div>
                    </div>
                    <!-- Tab 2 -->
                    <div class="tab-pane" id="fill-tabpanel-1" role="tabpanel" aria-labelledby="fill-tab-1">
                        <div class="row">
                            <div class="col-12 bg-darkblue radius-20 p-5 ">
                                <h2 class="text-white">Streamline operations and automate workflows</h2>
                            </div>
                        </div>
                        <div class="row mt-5 justify-content-between ">
                            <div class="col-lg-4 col-md-12 bg-darkblue radius-20 accordian-section">
                                <div class="accordion " id="accordionExample1">
                                    <div class="accordion-item ">
                                        <h2 class="accordion-header " id="headingOne1">
                                            <button class="accordion-button collapsed " type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseOne1"
                                                data-tab-image="dynamicImageTab2"
                                                data-change-image="./assets/images/Insightful Analytics.jpg"
                                                onclick="handleChangeImage(event)" aria-expanded="true"
                                                aria-controls="collapseOne1">
                                                Insightful Analytics
                                            </button>
                                        </h2>
                                        <div id="collapseOne1" class="accordion-collapse collapse "
                                            aria-labelledby="headingOne1" data-bs-parent="#accordionExample1">
                                            <div class="accordion-body">
                                                <strong>Savitar PMS offers Analytics and Insights. Which Identify revenue trends, guest behavior, and operational performance to make more informed decisions. Real-time data allows you to react quickly to market changes. In this way, you can optimize pricing, increase guest satisfaction, and streamline operations.
                                                </strong>
                                            </div>
                                            <img
                                                src="./assets/images/Insightful Analytics.jpg"
                                                alt="insightful analytics" srcset="" class="img-fluid p-2">
                                        </div>
                                    </div>
                                    <div class="accordion-item radius-20">
                                        <h2 class="accordion-header" id="headingTwo1">
                                            <button class="accordion-button collapsed" type="button"
                                                data-tab-image="dynamicImageTab2"
                                                data-change-image="./assets/images/Quick Financial Sorting.jpg"
                                                onclick="handleChangeImage(event)" data-bs-toggle="collapse"
                                                data-bs-target="#collapseTwo1" aria-expanded="false"
                                                aria-controls="collapseTwo1">
                                                Quick Financial Sorting
                                            </button>
                                        </h2>
                                        <div id="collapseTwo1" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo1" data-bs-parent="#accordionExample1">
                                            <div class="accordion-body">
                                                <strong>Our advanced Property Management System (PMS) makes financial tracking easy. Profits, losses, and expenses can be easily filtered and analyzed with simple quick sorting tools. With Savitar PMS, you can confidently track and manage your Hotel's financial performance, optimizing your productivity and improving your overall success.</strong>
                                            </div>
                                            <img src="./assets/images/Quick Financial Sorting.jpg" alt="Quick Financial Sorting" srcset="" class="img-fluid p-2">
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree1">
                                            <button class="accordion-button collapsed" type="button"
                                                data-tab-image="dynamicImageTab2"
                                                data-change-image="./assets/images/Detailed Account Reports.jpg"
                                                onclick="handleChangeImage(event)" data-bs-toggle="collapse"
                                                data-bs-target="#collapseThree1" aria-expanded="false"
                                                aria-controls="collapseThree1">
                                                Detailed Account Reports
                                            </button>
                                        </h2>
                                        <div id="collapseThree1" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree1" data-bs-parent="#accordionExample1">
                                            <div class="accordion-body">
                                                <strong>Get in-depth account reports with our PMS. Detailed financial summaries and performance metrics provide clear visibility into your hotel's financial health and trends.</strong>
                                            </div>
                                            <img
                                                src="./assets/images/Detailed Account Reports.jpg"
                                                alt="Detailed Account Reports" srcset="" class="img-fluid p-2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 radius-20 mx-right image-block">
                                <img id="dynamicImageTab2"
                                    src="./assets/images/Insightful Analytics.jpg"
                                    alt="" srcset="" class="img-fluid image-block">

                            </div>
                        </div>
                    </div>
                    <!-- Tab 3 -->
                    <div class="tab-pane" id="fill-tabpanel-2" role="tabpanel" aria-labelledby="fill-tab-2">
                        <div class="row">
                            <div class="col-12 bg-darkblue radius-20 p-5 ">
                                <h2 class="text-white">Streamline operations and automate workflows</h2>
                            </div>
                        </div>
                        <div class="row mt-5 justify-content-between ">
                            <div class="col-lg-4 col-md-12 bg-darkblue radius-20 accordian-section">
                                <div class="accordion " id="accordionExample2">
                                    <div class="accordion-item ">
                                        <h2 class="accordion-header " id="headingOne2">
                                            <button class="accordion-button collapsed " type="button"
                                                data-tab-image="dynamicImageTab3"
                                                data-change-image="./assets/images/Customer Review Handling.jpg"
                                                onclick="handleChangeImage(event)" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne2" aria-expanded="true"
                                                aria-controls="collapseOne2">
                                                Customer Review Handling
                                            </button>
                                        </h2>
                                        <div id="collapseOne2" class="accordion-collapse collapse "
                                            aria-labelledby="headingOne2" data-bs-parent="#accordionExample2">
                                            <div class="accordion-body">
                                                <strong>Manage your customers' reviews easily. In Savitar PMS, you can track and respond to guest feedback, improving your hotel's reputation and guest experience.
                                                </strong>
                                            </div>
                                            <img
                                                src="./assets/images/Customer Review Handling.jpg"
                                                alt="Customer Review Handling" srcset="" class="img-fluid p-2">
                                        </div>
                                    </div>
                                    <div class="accordion-item radius-20">
                                        <h2 class="accordion-header" id="headingTwo2">
                                            <button class="accordion-button collapsed" type="button"
                                                data-tab-image="dynamicImageTab3"
                                                data-change-image="./assets/images/Email Marketing.jpg"
                                                onclick="handleChangeImage(event)" data-bs-toggle="collapse"
                                                data-bs-target="#collapseTwo2" aria-expanded="false"
                                                aria-controls="collapseTwo2">
                                                Email Marketing
                                            </button>
                                        </h2>
                                        <div id="collapseTwo2" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo2" data-bs-parent="#accordionExample2">
                                            <div class="accordion-body">
                                                <strong>Boost your Email marketing efforts with Savitar PMS. You will be able to manage effective campaigns using our PMS to increase engagement, attract guests, and improve the visibility of your hotel.</strong>
                                            </div>
                                            <img
                                                src="./assets/images/Email Marketing.jpg"
                                                alt="Email Marketing" srcset="" class="img-fluid p-2">
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-tab-image="dynamicImageTab3"
                                                data-change-image="./assets/images/Guest Satisfaction Accelerator.jpg"
                                                onclick="handleChangeImage(event)" data-bs-toggle="collapse"
                                                data-bs-target="#collapseThree2" aria-expanded="false"
                                                aria-controls="collapseThree2">
                                                Guest Satisfaction Accelerator
                                            </button>
                                        </h2>
                                        <div id="collapseThree2" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree2" data-bs-parent="#accordionExample2">
                                            <div class="accordion-body">
                                                <strong>Get a better guest experience with our Property Management System. Our streamlined tools and insights will help you enhance the guest experience, address concerns in a timely manner, and build positive reviews for your property.
                                                </strong>
                                            </div>
                                            <img
                                                src="./assets/images/Guest Satisfaction Accelerator.jpg"
                                                alt="Guest Satisfaction Accelerator" srcset="" class="img-fluid p-2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 radius-20 mx-right ">
                                <img id="dynamicImageTab3"
                                    src="./assets/images/Customer Review Handling.jpg"
                                    alt="" srcset="" class="img-fluid image-block">

                            </div>
                        </div>
                    </div>
                    <!-- Tab 4 -->
                    <div class="tab-pane" id="fill-tabpanel-3" role="tabpanel" aria-labelledby="fill-tab-3">
                        <div class="row">
                            <div class="col-12 bg-darkblue radius-20 p-5 ">
                                <h2 class="text-white">Streamline operations and automate workflows</h2>
                            </div>
                        </div>
                        <div class="row mt-5 justify-content-between ">
                            <div class="col-lg-4 col-md-12 bg-darkblue radius-20 accordian-section">
                                <div class="accordion " id="accordionExample3">
                                    <div class="accordion-item ">
                                        <h2 class="accordion-header " id="headingOne3">
                                            <button class="accordion-button collapsed " type="button"
                                                data-tab-image="dynamicImageTab4"
                                                data-change-image="./assets/images/Streamline chanel control.jpg"
                                                onclick="handleChangeImage(event)" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne3" aria-expanded="true"
                                                aria-controls="collapseOne3">
                                                Streamlined Channel Control
                                            </button>
                                        </h2>
                                        <div id="collapseOne3" class="accordion-collapse collapse "
                                            aria-labelledby="headingOne3" data-bs-parent="#accordionExample3">
                                            <div class="accordion-body">
                                                <strong> In order to ensure efficient room inventory management and order optimization in your hotel, our PMS offers centralized control over all your distribution channels on one platform.
                                                </strong>
                                            </div>
                                            <img
                                                src="./assets/images/Streamline chanel control.jpg"
                                                alt="Streamlined Channel Control" srcset="" class="img-fluid p-2">
                                        </div>
                                    </div>
                                    <div class="accordion-item radius-20">
                                        <h2 class="accordion-header" id="headingTwo3">
                                            <button class="accordion-button collapsed" type="button"
                                                data-tab-image="dynamicImageTab4"
                                                data-change-image="./assets/images/digital promoction.png"
                                                onclick="handleChangeImage(event)" data-bs-toggle="collapse"
                                                data-bs-target="#collapseTwo3" aria-expanded="false"
                                                aria-controls="collapseTwo3">
                                                Digital Promotion
                                            </button>
                                        </h2>
                                        <div id="collapseTwo3" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo3" data-bs-parent="#accordionExample3">
                                            <div class="accordion-body">
                                                <strong>At Savitar PMS, we offer top-tier online promotion strategies to elevate your brand awareness. Our experienced team is dedicated to developing and optimizing your digital marketing strategy to ensure your hotel's success.</strong>
                                            </div>
                                            <img
                                                src="./assets/images/digital promoction.png"
                                                alt="Digital Promotion" srcset="" class="img-fluid p-2">
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree3">
                                            <button class="accordion-button collapsed" type="button"
                                                data-tab-image="dynamicImageTab4"
                                                data-change-image="./assets/images/build your website.png"
                                                onclick="handleChangeImage(event)" data-bs-toggle="collapse"
                                                data-bs-target="#collapseThree3" aria-expanded="false"
                                                aria-controls="collapseThree3">
                                                Build Your Website
                                            </button>
                                        </h2>
                                        <div id="collapseThree3" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree3" data-bs-parent="#accordionExample3">
                                            <div class="accordion-body">
                                                <strong>A standout business website is crucial for brand awareness. Savitar PMS creates user-friendly, SEO-optimized websites customized specifically for your hotel or motel. Let us help you make a lasting impression online and attract more guests.
                                                </strong>
                                            </div>
                                            <img
                                                src="./assets/images/build your website.png"
                                                alt="Build Your Website" srcset="" class="img-fluid p-2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 radius-20 mx-right ">
                                <img id="dynamicImageTab4"
                                    src="./assets/images/Streamline chanel control.jpg"
                                    alt="" srcset="" class="img-fluid image-block">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!--================Tab-content Area =================-->
        <!--================ Area =================-->
        <section>
            <div class="container pb-5">
                <div class="row mt-5">
                    <div class="col">
                        <h2 class="text-white">Get rid of your tech hotel PMS platform</h2>
                    </div>
                </div>
                <div class="row mt-3 p-5 bg-darkblue radius-20 ">
                    <div class="col-lg-6 col-md-6 col-sm-12  ">
                        <h2 class="text-white">Get rid of your tech hotel </h2>
                        <p class="text-white">Automate your hotel operations by replacing your outdated PMS with our all-in-one solution. Simplify management, improve efficiency, and enhance guest satisfaction easily.
                        </p>
                        <a href="./contact_us.php" class="btn-transparent">Add Call to Action</a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12  text-white" style="padding-left: 8%;">
                        <ul class="fs-4">
                            <li>
                                Access Management
                            </li>
                            <li>Revenue Management</li>
                            <li>Point of Sale</li>
                            <li>CRS & Channel Managers</li>
                            <li>Accounting Systems</li>
                            <li>Government Compliance</li>
                        </ul>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-6 col-md-6 col-sm-12 ">
                        <div class="radius-20 p-5 h-100" style="background-color: #042a49;">
                            <h2 class="text-white mt-2">An Add Ons Extend The Platforms’ Capabilities </h2>
                            <p class="text-white">Boost Savitar PMS with our add-ons to extend its capabilities. Customize features, integrate enhanced services, and tailor the platform to meet your hotel's unique needs.
                            </p>
                            <a href="./contact_us.php" class="btn-transparent">Explore market place</a>
                            <img src="./assets/images/add ons.png" alt="add ons" class="img-fluid">
                        </div>

                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 ">
                        <div class="bg-white radius-20 p-5 h-100">
                            <h2 class="mt-2">Distribution According to Your Preferences
                            </h2>
                            <p class="">Boost your hotel’s visibility with effortless access to 300+ OTAs. Connect effortlessly and attract more guests with our extensive booking network.
                            </p>
                            <a href="./contact_us.php" class="btn-green">Explore market place</a>
                            <img src="./assets/images/Distribution.gif" alt="distribution" class="img-fluid">
                        </div>

                    </div>
                </div>
                <div class="row bg-darkblue radius-20 mt-3 p-4">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2 class="text-white">We protect your data </h2>
                        <p class="text-white">We are GDPR and PCI DSS compliant, SSL certified and more, so you can
                            operate confidently knowing that your data is secured.</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 text-center align-content-center">
                        <img src="./assets/images/banner-logos.svg"
                            alt="banner-logos" srcset="" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>


        <!--================ Area =================-->
    </div>
    <!--================Blog Area =================-->
    <section>
        <div class="container">
            <div class="row g-5 my-5 pb-5">
                <h2>
                    Latest Blogs
                </h2>
                <?php
                if (!empty($blogs)): ?>
                    <?php foreach ($blogs as $blog): ?>
                        <div class="col-lg-4">
                            <div class="blog-item radius-20 overflow-hidden h-100">
                                <div class="blog-img position-relative overflow-hidden">
                                    <?= img($this->path.$blog['image'], '', 'class="img-fluid"'); ?>
                                </div>
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small class="textdark"><i class="far fa-calendar-alt me-2"></i><?php echo date("d M, Y", strtotime($blog['posted_on'])); ?></small>
                                    </div>
                                    <h4 class="mb-3">
                                        <?php echo $blog['b_title']; ?>
                                    </h4>
                                    <p>
                                        <?php echo substr($blog['b_description'], 0, 150); ?>...
                                    </p>
                                    <?= anchor($blog['page_name'], 'Read More <i class="bi bi-arrow-right"></i>', 'class="text-uppercase text-dark"') ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No blog posts available.</p>
                <?php endif; ?>

                <!-- <div class="col-lg-4 ">
                        <div class="blog-item  radius-20 overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid"
                                    src="https://cloudbeds-fcfc.kxcdn.com/wp-content/uploads/2024/02/blog_header_CRM.webp"
                                    alt="blogimage1">

                            </div>
                            <div class="p-4">
                                <div class="d-flex mb-3">

                                    <small class="textdark"><i class="far fa-calendar-alt  me-2"></i>01
                                        Jan, 2045</small>
                                </div>
                                <h4 class="mb-3">
                                    AI and ESG – A twisted tale or made for each other
                                </h4>
                                <p>
                                    AI will enable better ESG but will more AI lead to better ESG
                                    outcomes? This is a very interesting interplay of two hottest
                                    areas of debate globally.
                                </p>
                                <a href="./detail.html" class="text-uppercase textdark">Read More <i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-item radius-20 overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid"
                                    src="https://cloudbeds-fcfc.kxcdn.com/wp-content/uploads/2024/02/blog_header_CRM.webp"
                                    alt="blogimage2">

                            </div>
                            <div class="p-4">
                                <div class="d-flex mb-3">

                                    <small class="textdark"><i class="far fa-calendar-alt  me-2"></i>01
                                        Jan, 2045</small>
                                </div>
                                <h4 class="mb-3">
                                    AI and ESG – A twisted tale or made for each other
                                </h4>
                                <p>
                                    AI will enable better ESG but will more AI lead to better ESG
                                    outcomes? This is a very interesting interplay of two hottest
                                    areas of debate globally.
                                </p>
                                <a class="text-uppercase textdark" href="./detail.html">Read More <i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-item  radius-20 overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid"
                                    src="https://cloudbeds-fcfc.kxcdn.com/wp-content/uploads/2024/02/blog_header_CRM.webp"
                                    alt="blogimage3">

                            </div>
                            <div class="p-4">
                                <div class="d-flex mb-3">

                                    <small class="textdark"><i class="far fa-calendar-alt  me-2"></i>01
                                        Jan, 2045</small>
                                </div>
                                <h4 class="mb-3">
                                    AI and ESG – A twisted tale or made for each other
                                </h4>
                                <p>
                                    AI will enable better ESG but will more AI lead to better ESG
                                    outcomes? This is a very interesting interplay of two hottest
                                    areas of debate globally.
                                </p>
                                <a class="text-uppercase textdark" href="./detail.html">Read More <i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div> -->
            </div>
        </div>
    </section>


    <!--================Blog Area =================-->

    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/665db6e8981b6c564777f740/1hvf14vv4';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>

</main>