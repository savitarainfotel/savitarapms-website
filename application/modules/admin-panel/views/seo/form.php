<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="card-header">
    <h3 class="card-title"><?= $title ?> <?= $operation ?></h3>
</div>
<div class="card-body">
    <?= form_open('', 'class="ajax-form"') ?>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <?= form_label('Title', 'title') ?>
                    <?= form_input([
                        'class' => "form-control",
                        'id' => "title",
                        'name' => "title",
                        'maxlength' => 255,
                        'placeholder' => "Title",
                        'value' => isset($data['title']) ? $data['title'] : ''
                    ]); ?>
                    <span class="error-message" id="error-title"></span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <?= form_label('Page link', 'page_name') ?>
                    <?= form_input([
                        'class' => "form-control",
                        'id' => "page_name",
                        'name' => "page_name",
                        'maxlength' => 100,
                        'placeholder' => "Page link",
                        'value' => isset($data['page_name']) ? $data['page_name'] : ''
                    ]); ?>
                    <span class="error-message" id="error-page_name"></span>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <?= form_label('Keywords', 'keywords') ?>
                    <?= form_input([
                        'class' => "form-control",
                        'id' => "keywords",
                        'name' => "keywords",
                        'maxlength' => 255,
                        'placeholder' => "Keywords",
                        'value' => isset($data['keywords']) ? $data['keywords'] : ''
                    ]); ?>
                    <span class="error-message" id="error-keywords"></span>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <?= form_label('Description', 'description') ?>
                    <?= form_textarea([
                        'class' => "form-control",
                        'id' => "description",
                        'name' => "description",
                        'maxlength' => 255,
                        'rows' => 3,
                        'placeholder' => "Description",
                        'value' => isset($data['description']) ? $data['description'] : ''
                    ]); ?>
                    <span class="error-message" id="error-description"></span>
                </div>
            </div>
            <?php $this->load->view('partials/form-buttons'); ?>
        </div>
    <?= form_close() ?>
</div>
<script>
    const rule = {
        page_name: {
            required: true,
            maxlength: 100,
        },
        title: {
            required: true,
            maxlength: 255,
        },
        keywords: {
            required: true,
            maxlength: 255,
        },
        description: {
            required: true,
            maxlength: 1000,
        },
    }
</script>