<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<main>
    <section class="  p-lg-5 p-4">
        <div class="container shadow bg-white radius-20 p-5 ">
            <div class="text-center ">
                <h2 class="">Opt-In Form</h2>

            </div>

            <div class="row mt-3 reverse g-3">

                <div class="col">
                    <form id="optinform" action="" >
                        <div class="row contact-form">
                            <div class="col-12 error-message"></div>
                            <!-- First Name -->
                            <div class="col-sm-6 form-group">
                                <label for="first_name" class="form-lable">First Name</label>
                                <div class="input-group">
                                    <input type="text" name="first_name" placeholder="First Name" class="form-control" />

                                </div>
                            </div>
                            <!-- Last Name -->
                            <div class="col-sm-6 form-group">
                                <label for="date">Today's Date</label>
                                <div class="input-group">
                                    <input type="date" name="date" placeholder="Today's Date" class="form-control" />

                                </div>
                            </div>
                            <!-- Phone No. -->
                            <div class="col-sm-6 form-group">
                                <label for="mobile no">Mobile No.</label>
                                <div class="input-group">
                                    <input type="number" name="phone_number" placeholder="Mobile No." class="form-control" />

                                </div>
                            </div>
                            <!-- Email Address -->
                            <div class="col-sm-6 form-group">
                                <label for="email">Email</label>
                                <div class="input-group">
                                    <input type="email" name="email" placeholder="Email Address" class="form-control" />

                                </div>
                            </div>
                            <div class="col-12 form-group">
                                <div class=" checkbox-container">
                                    <input type="checkbox" id="opt-out" name="opt-out" required>
                                    <label for="opt-out">I choose to opt in. *</label>
                                </div>
                            </div>
                            <div class="col-12 form-group">
                                <label for="remark">Remark</label>
                                <div class="input-group">
                                    <textarea  class="form-control" rows="4"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class=" ">
                            <button type="submit" class="btn btn-blue d-inline-block">Submit</button>
                        </div>
                    </form>
                    <div id="thankMessage" style="display: none; margin-top: 20px;">
                        <h4 class="">Thank you! Your submission has been received successfully.</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<script>
    document.getElementById("optinform").addEventListener("submit", function(e) {
        e.preventDefault(); 
        document.getElementById("thankMessage").style.display = "block"; 
        this.reset(); 
    });
</script>