<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="col-12"></div>
<div class="col-md-2 col-sm-6 col-6">
    <?= form_button([
        'type'    => 'submit',
        'class'   => 'btn btn-primary btn-sm col-12',
        'content' => 'SAVE'
    ]); ?>
</div>
<div class="col-md-2 col-sm-6 col-6">
    <?= anchor("$url", 'CANCEL', 'class="btn btn-danger btn-sm col-12"'); ?>
</div>