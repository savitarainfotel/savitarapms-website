<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="card-header">
    <h3 class="card-title"><?= $title ?> <?= $operation ?></h3>
</div>
<div class="card-body">
    <?= form_open('', 'class="ajax-form"') ?>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <?= form_label('Name', 'name') ?>
                <?= form_input([
                    'class' => "form-control",
                    'id' => "name",
                    'name' => "name",
                    'maxlength' => 100,
                    'placeholder' => "Name",
                    'value' => $this->user->name
                ]); ?>
                <span class="error-message" id="error-name"></span>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <?= form_label('Mobile No.', 'mobile') ?>
                <?= form_input([
                    'class' => "form-control",
                    'id' => "mobile",
                    'name' => "mobile",
                    'maxlength' => 10,
                    'placeholder' => "Mobile No.",
                    'value' => $this->user->mobile
                ]); ?>
                <span class="error-message" id="error-mobile"></span>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <?= form_label('Email', 'email') ?>
                <?= form_input([
                    'class' => "form-control",
                    'type' => "email",
                    'id' => "email",
                    'name' => "email",
                    'maxlength' => 100,
                    'placeholder' => "Email",
                    'value' => $this->user->email
                ]); ?>
                <span class="error-message" id="error-email"></span>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <?= form_label('Password', 'password') ?>
                <?= form_input([
                    'class' => "form-control",
                    'type' => "password",
                    'id' => "password",
                    'name' => "password",
                    'maxlength' => 50,
                    'placeholder' => "Password"
                ]); ?>
                <span class="error-message" id="error-password"></span>
            </div>
        </div>
        <?php $this->load->view('partials/form-buttons'); ?>
    </div>
    <?= form_close() ?>
</div>