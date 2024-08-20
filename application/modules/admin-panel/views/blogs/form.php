<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="card-header">
    <h3 class="card-title"><?= $title ?> <?= $operation ?></h3>
</div>
<div class="card-body">
    <?= form_open('', 'class="ajax-form"', ['image' => isset($data['image']) ? $data['image'] : '']) ?>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <?= form_label('Blog title', 'b_title') ?>
                    <?= form_input([
                        'class' => "form-control",
                        'id' => "b_title",
                        'name' => "b_title",
                        'maxlength' => 200,
                        'placeholder' => "Blog title",
                        'value' => isset($data['b_title']) ? $data['b_title'] : ''
                    ]); ?>
                    <span class="error-message" id="error-b_title"></span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <?= form_label('Category', 'category_id') ?>
                    <select class="form-control select2" name="category_id[]" id="category_id" multiple>
                        <?php 
                            if(!empty($this->categories)): 
                                foreach ($this->categories as $category) {
                                    $selected = '';
                                    $category_id = isset($data['category_id']) ? explode(',', $data['category_id']) : [];
                                    if(in_array($category['id'], $category_id)) $selected = 'selected';
                                    echo "<option value='".e_id($category['id'])."' {$selected}>{$category['c_name']}</option>";
                                } 
                            endif;
                        ?>
                    </select>
                    <span class="error-message" id="error-category_id"></span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <?= form_label('Posted By', 'posted_by') ?>
                    <?= form_input([
                        'class' => "form-control",
                        'id' => "posted_by",
                        'name' => "posted_by",
                        'maxlength' => 100,
                        'placeholder' => "Posted By",
                        'value' => isset($data['posted_by']) ? $data['posted_by'] : ''
                    ]); ?>
                    <span class="error-message" id="error-posted_by"></span>
                </div>
            </div>
            <div class="col-md-1">
                <div class="form-group">
                    <?= form_label('Posted On', 'posted_on') ?>
                    <?= form_input([
                        'class' => "form-control datepicker readonly",
                        'id' => "posted_on",
                        'name' => "posted_on",
                        'placeholder' => "Posted On",
                        'value' => isset($data['posted_on']) ? date('d-m-Y', strtotime($data['posted_on'])) : ''
                    ]); ?>
                    <span class="error-message" id="error-posted_on"></span>
                </div>
            </div>
            <div class="col-md-1">
                <div class="form-group">
                    <?= form_label('Blog type', 'blog_type') ?>
                    <select class="form-control" name="blog_type" id="blog_type">
                        <option value="Blog" <?php if(isset($data['blog_type']) && $data['blog_type'] == 'Blog') echo 'selected'; ?>>Blog</option>
                        <option value="Portfolio" <?php if(isset($data['blog_type']) && $data['blog_type'] == 'Portfolio') echo 'selected'; ?>>Portfolio</option>
                    </select>
                    <span class="error-message" id="error-blog_type"></span>
                </div>
            </div>
            <div class="col-md-<?= isset($data['image']) && is_file($this->path . $data['image']) ? 2 : 4 ?>">
                <div class="form-group">
                    <?= form_label('Image', 'image') ?>
                    <div class="input-group">
                        <div class="custom-file">
                            <?= form_input([
                                'class' => "custom-file-input",
                                'type' => "file",
                                'id' => "image",
                                'name' => "image",
                                'accept' => 'image/jpg,image/jpeg,image/png'
                            ]); ?>
                            <?= form_label('Choose file', 'image', 'class="custom-file-label"') ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php if(isset($data['image']) && is_file($this->path . $data['image'])): ?>
                <div class="col-md-2">
                    <?= img($this->path . $data['image'], '', 'height="75" width="100%"'); ?>
                </div>
            <?php endif ?>
            <div class="col-md-12">
                <div class="form-group">
                    <?= form_label('Blog description', 'editor', 'class="col-form-label"') ?>
                    <?= form_textarea([
                        'class' => "form-control",
                        'id' => "editor",
                        'name' => "b_description",
                        'maxlength' => 255,
                        'placeholder' => "b_description",
                        'value' => isset($data['b_description']) ? html_entity_decode($data['b_description']) : ''
                    ]); ?>
                    <span class="error-message" id="error-title"></span>
                </div>
            </div>
            <div class="col-md-12">
                <div class="callout callout-info">Seo details</div>
            </div>
            <div class="col-md-12">
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
        b_title: {
            required: true,
            maxlength: 200,
        },
        posted_on: {
            required: true,
        },
        category_id: {
            required: true
        },
        blog_type: {
            required: true
        },
        posted_by: {
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