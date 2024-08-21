<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<main>
    <section class="  p-lg-5 p-4">
        <div class="container shadow bg-white radius-20 p-5 ">
            <div class="text-center ">
                <h2 class="">Contact Us</h2>
                <p class="text-center mt-3">
                    We’re here to help you every step of the way! Whether you’re a first-time visitor interested in
                    learning more about our solutions or an existing Savitar PMS user seeking support, we’ve got you
                    covered.
                </p>
            </div>

            <div class="row mt-3 reverse">
                <div class="col-lg-4 bg-darkblue  contact-info p-4">
                    <h2 class="text-white">Contact Information</h2>
                    <h5 class="">Have some big idea or brand to develop and need help?</h5>
                    <ul class="list-unstyled ">
                        <li class="">
                            <i class="far fa-envelope-open"></i>
                            <a href="mailto:sales@savitarpms.com" class="text-white">sales@savitarpms.com</a>
                        </li>
                        <li class="">
                            <i class="far fa-envelope-open"></i>
                            <a href="mailto:info@savitarpms.com" class="text-white">info@savitarpms.com</a>
                        </li>
                        <li class="">
                            <i class="fas fa-phone"></i>
                            <a href="tel:+16084218497" class="text-white">+1 (608) 421-8497</a>
                        </li>
                        <li class="  ">
                            <i class="fas fa-map-marker-alt"></i>
                            <span class="">FF - 123, I Square, Science City Rd, nr. Shukan Mall, Crossroads, Sola,
                                Ahmedabad, Gujarat 380060</span>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-8">
                    <?= form_open('', 'class="ajax-form"'); ?>
                    <div class="row contact-form">
                            <div class="col-12 error-message"></div>
                            <!-- First Name -->
                            <div class="col-sm-6 form-group">
                                <div class="input-group">
                                    <input type="text" name="first_name" placeholder="First Name" class="form-control" />
                                    <span class="input-group-text bg-white">
                                        <i class="fa fa-user textdark"></i>
                                    </span>
                                </div>
                            </div>
                            <!-- Last Name -->
                            <div class="col-sm-6 form-group">
                                <div class="input-group">
                                    <input type="text" name="last_name" placeholder="Last Name" class="form-control" />
                                    <span class="input-group-text bg-white">
                                        <i class="fa fa-user textdark"></i>
                                    </span>
                                </div>
                            </div>
                            <!-- Phone No. -->
                            <div class="col-sm-6 form-group">
                                <div class="input-group">
                                    <input type="text" name="phone_number" placeholder="Mobile No." class="form-control" />
                                    <span class="input-group-text bg-white">
                                        <i class="fa fa-phone textdark"></i>
                                    </span>
                                </div>
                            </div>
                            <!-- Email Address -->
                            <div class="col-sm-6 form-group">
                                <div class="input-group">
                                    <input type="email" name="email" placeholder="Email Address" class="form-control" />
                                    <span class="input-group-text bg-white">
                                        <i class="fa fa-envelope textdark"></i>
                                    </span>
                                </div>
                            </div>
                            <!-- Country -->
                            <div class="col-sm-6 form-group">
                                <div class="input-group">
                                    <input type="text" name="country" placeholder="Country" class="form-control" />
                                    <span class="input-group-text bg-white">
                                        <i class="fa fa-globe textdark"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="col-sm-6 form-group">
                                <div class="input-group">
                                    <input type="text" name="city" placeholder="City" class="form-control" />
                                    <span class="input-group-text bg-white">
                                        <i class="fa fa-city textdark"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="col-12 form-group">
                                <div class="input-group">
                                    <input type="text" name="property_name" placeholder="Property Name" class="form-control" />
                                    <span class="input-group-text bg-white">
                                        <i class="fa fa-peace textdark"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="col-12 form-group">
                                <div class="input-group">
                                    <textarea class="form-control" name="message" placeholder="Your Message" rows="2"></textarea>
                                    <span class="input-group-text bg-white">
                                        <i class="fa fa-message textdark"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class=" text-center">
                            <button type="submit" class="btn bg-darkblue text-white w-50 rounded-pill">Send Message</button>
                        </div>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </section>
</main>