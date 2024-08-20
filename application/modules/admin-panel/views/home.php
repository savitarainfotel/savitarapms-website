<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-globe"></i></span>
                <div class="info-box-content">
                    <?= anchor(admin('seo'), '<span class="info-box-text">Seo pages</span>'); ?>
                    <span class="info-box-number">
                        <?= $seo ?>
                    </span>
                </div>
            </div>
        </div>
        <div class="clearfix hidden-md-up"></div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users"></i></span>
                <div class="info-box-content">
                    <?= anchor(admin('inquiries'), '<span class="info-box-text">Inquiries</span>'); ?>
                    <span class="info-box-number"><?= $inquiries ?></span>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                <div class="info-box-content">
                    <?= anchor(admin('subscriptions'), '<span class="info-box-text">Subscriptions</span>'); ?>
                    <span class="info-box-number"><?= $subscriptions ?></span>
                </div>
            </div>
        </div>
    </div>
</div>