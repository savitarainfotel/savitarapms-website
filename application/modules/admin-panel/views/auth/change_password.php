<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<p class="login-box-msg">Enter your new password</p>
<?= form_open('', 'class="ajax-form"') ?>
    <div class="form-group">
        <div class="input-group">
            <?= form_input([
                'class' => "form-control",
                'type' => "password",
                'id' => "password",
                'name' => "password",
                'maxlength' => 50,
                'placeholder' => "Password"
            ]); ?>
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
        </div>
        <span class="error-message" id="error-password"></span>
    </div>
    <div class="row">
        <div class="col-12">
            <?= form_button([
                'type'    => 'submit',
                'class'   => 'btn btn-primary btn-block',
                'content' => 'Change Password'
            ]); ?>
        </div>
    </div>
<?= form_close() ?>