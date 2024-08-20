<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="container py-5">
    <div class="row justify-content-between g-5">
        <div class="col-lg-6 col-md-12 wow slideInUp" data-wow-delay="0.3s">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" >
                <h1 class="fw-bold  fs-2" style="color:#5abff9">Apply Now</h1>
            </div>
            <div class="contact-form-box wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                <div class="apply-form">
                    <?= form_open('', 'id="contactForm" data-toggle="validator"'); ?>
                        <div class="row">
                            <div class="form-group col-md-6 mb-4">
                                <input type="text" id="name" name="name" class="form-control " placeholder="Your Name *" required="" maxlength="50" />
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-md-6 mb-4">
                                <input type="text" id="phone" name="phone" class="form-control " placeholder="Phone Number *" required="" maxlength="10" pattern="[789][0-9]{9}" required />
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-md-6 mb-4">
                                <input type="email" id="email" name="email" class="form-control " placeholder="Your Email *" required="" maxlength="100" />
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-md-6 mb-4">
                                <select name="designation" id="designation" class="form-control" required="">
                                    <option value="Full stack Developer">Full stack Developer</option>
                                    <option value="React Js Developer">React Js Developer</option>
                                    <option value="PHP Developer">PHP Developer</option>
                                    <option value="Graphic Designer">Graphic Designer</option>
                                    <option value="Digital Marketing">Digital Marketing</option>
                                    <option value="Wordpress Developer">Wordpress Developer</option>
                                    <option value="Customer Service Executive">Customer Service Executive</option>
                                </select>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-md-12 mb-4">
                                <textarea class="form-control " id="message" name="message" rows="4" placeholder="Message" required=""></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group col-md-12 mb-4">
                                <label for="fileInput" class="form-label">Upload Your Resume* </label>
                                <input type="file" class="form-control border-2  px-4 pt-3" accept="application/pdf" id="fileInput" name="uploadFile" required="" style="height: 55px; border-style: dashed; padding-bottom: 6rem;" />
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn-default">Apply Now</button>
                                <div id="msgSubmit" class="h3 text-left hidden"></div>
                            </div>
                        </div>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 mx-auto px-5 wow slideInUp  " data-wow-delay="0.6s">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto " style="max-width: 700px;">
                <h3 class="fw-bold  fs-2">Benefits of working with us</h3>
            </div>
            <div class="col-lg-12 align-content-center mx-auto">
                <img src="assets/images/benifit.png" alt="" class="img-fluid rounded wow zoomIn">
            </div>
        </div>
    </div>
</div>
<!-- Career End -->