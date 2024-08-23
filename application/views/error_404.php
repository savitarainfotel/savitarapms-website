<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- error section start -->
<main>
    <div class="container p-5">
        <div class="row">
            <div class="error-page-image wow fadeInUp" data-wow-delay="0.25s">
                <?= img("assets/images/404-error-img.png"); ?>
            </div>
            <div class="error-page-content">
                <div class="error-page-content-heading">
                    <h2 class="text-anime-style-3">Page Now Found!</h2>
                    <p class="wow fadeInUp" data-wow-delay="0.5s">No webpage was found for the web address: <?= current_url(); ?></p>
                </div>
                <?= anchor('', 'Back To Home', 'class="btn-blue"'); ?>
            </div>
        </div>
    </div>
</main>
<!-- error section end -->