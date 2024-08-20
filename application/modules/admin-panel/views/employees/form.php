<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="card-header">
    <h3 class="card-title"><?= $title ?> <?= $operation ?></h3>
</div>
<div class="card-body">
    <?= form_open('', 'class="ajax-form"', ['image' => isset($data['image']) ? $data['image'] : '']) ?>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <?= form_label('Employee Name', 'e_name') ?>
                    <?= form_input([
                        'class' => "form-control",
                        'id' => "e_name",
                        'name' => "e_name",
                        'maxlength' => 200,
                        'placeholder' => "Employee Name",
                        'value' => isset($data['e_name']) ? $data['e_name'] : ''
                    ]); ?>
                    <span class="error-message" id="error-e_name"></span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <?= form_label('Department', 'department_id') ?>
                    <select class="form-control" name="department_id" id="department_id">
                        <option value="" selected disabled>Select Department</option>
                        <?php 
                            if(!empty($this->departments)): 
                                foreach ($this->departments as $department) {
                                    $selected = '';
                                    if(isset($data['department_id']) && $data['department_id'] == $department['id']) $selected = 'selected';
                                    echo "<option value='".e_id($department['id'])."' {$selected}>{$department['d_name']}</option>";
                                } 
                            endif;
                        ?>
                    </select>
                    <span class="error-message" id="error-department_id"></span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <?= form_label('Position', 'position_id') ?>
                    <select class="form-control" name="position_id" id="position_id">
                        <option value="" selected disabled>Select Position</option>
                        <?php 
                            if(!empty($this->positions)): 
                                foreach ($this->positions as $position) {
                                    $selected = '';
                                    if(isset($data['position_id']) && $data['position_id'] == $position['id']) $selected = 'selected';
                                    echo "<option value='".e_id($position['id'])."' {$selected}>{$position['p_name']}</option>";
                                } 
                            endif;
                        ?>
                    </select>
                    <span class="error-message" id="error-position_id"></span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <?= form_label('Employee ID', 'employee_id') ?>
                    <?= form_input([
                        'class' => "form-control",
                        'id' => "employee_id",
                        'name' => "employee_id",
                        'maxlength' => 10,
                        'placeholder' => "Employee ID",
                        'value' => isset($data['employee_id']) ? $data['employee_id'] : ''
                    ]); ?>
                    <span class="error-message" id="error-employee_id"></span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <?= form_label('Joining Date', 'joining_date') ?>
                    <?= form_input([
                        'class' => "form-control datepicker",
                        'id' => "joining_date",
                        'name' => "joining_date",
                        'placeholder' => "Joining Date",
                        'value' => isset($data['joining_date']) ? date('d-m-Y', strtotime($data['joining_date'])) : ''
                    ]); ?>
                    <span class="error-message" id="error-joining_date"></span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <?= form_label('Employee Photo', 'image') ?>
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
                <div class="col-md-1">
                    <?= img($this->path . $data['image'], '', 'height="75" width="100%"'); ?>
                </div>
            <?php endif ?>
            <?php $this->load->view('partials/form-buttons'); ?>
        </div>
    <?= form_close() ?>
</div>
<script>
    const rule = {
        e_name: {
            required: true,
            maxlength: 200,
        },
        department_id: {
            required: true
        },
        position_id: {
            required: true
        },
        employee_id: {
            required: true,
            maxlength: 10,
        },
        joining_date: {
            required: true,
            maxlength: 100,
        },
    }
</script>