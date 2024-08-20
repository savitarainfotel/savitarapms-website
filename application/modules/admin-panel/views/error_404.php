<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- 404 Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row rounded align-items-center justify-content-center mx-0">
        <div class="col-md-6 text-center p-4">
            <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
            <h1 class="display-1 fw-bold">404</h1>
            <h2 class="mb-4"><i class="fas fa-exclamation-triangle text-warning"></i> Oops! Page Not Found</h2>
            <p class="mb-4">We’re sorry, the page you have looked for does not exist in our website!
                Maybe go to our home page.</p>
            <?= anchor(admin('dashboard'), 'Back To Dashboard', 'class="btn btn-primary rounded-pill py-3 px-5"') ?>
        </div>
    </div>
</div>
<!-- 404 End -->