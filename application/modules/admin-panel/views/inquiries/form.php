<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="card-header">
    <h3 class="card-title"><?= $title ?> <?= $operation ?></h3>
</div>
<div class="card-body">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <?= form_label('Name', 'name') ?>
                <?= form_input([
                    'class' => "form-control",
                    'disabled' => "disabled",
                    'value' => isset($data['name']) ? $data['name'] : ''
                ]); ?>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <?= form_label('Email', 'email') ?>
                <?= form_input([
                    'class' => "form-control",
                    'disabled' => "disabled",
                    'value' => isset($data['email']) ? $data['email'] : ''
                ]); ?>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <?= form_label('Phone', 'phone_number') ?>
                <?= form_input([
                    'class' => "form-control",
                    'disabled' => "disabled",
                    'value' => isset($data['phone_number']) ? $data['phone_number'] : ''
                ]); ?>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <?= form_label('Created AT', 'created_at') ?>
                <?= form_input([
                    'class' => "form-control",
                    'disabled' => "disabled",
                    'value' => isset($data['created_at']) ? date('d-m-Y h:i A', strtotime($data['created_at'])) : ''
                ]); ?>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <?= form_label('Country', 'country') ?>
                <?= form_input([
                    'class' => "form-control",
                    'disabled' => "disabled",
                    'value' => isset($data['country']) ? $data['country'] : ''
                ]); ?>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <?= form_label('City', 'city') ?>
                <?= form_input([
                    'class' => "form-control",
                    'disabled' => "disabled",
                    'value' => isset($data['city']) ? $data['city'] : ''
                ]); ?>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <?= form_label('Property Name', 'property_name') ?>
                <?= form_input([
                    'class' => "form-control",
                    'disabled' => "disabled",
                    'value' => isset($data['property_name']) ? $data['property_name'] : ''
                ]); ?>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <?= form_label('Message', 'message') ?>
                <?= form_textarea([
                    'class' => "form-control",
                    'disabled' => "disabled",
                    'value' => isset($data['message']) ? $data['message'] : ''
                ]); ?>
            </div>
        </div>
        <div class="col-12"><hr></div>
        <div class="col-md-2 col-sm-6 col-6">
            <?= anchor("$url", 'Go back', 'class="btn btn-danger btn-sm col-12"'); ?>
        </div>
    </div>    
</div>