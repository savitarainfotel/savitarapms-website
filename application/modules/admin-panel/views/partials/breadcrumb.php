<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><?= ucfirst($title) ?></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><?= anchor(admin('dashboard'), '<i class="fas fa-home"></i>'); ?></li>
                    <?php if (! isset($operation)): ?>
                        <li class="breadcrumb-item active"><?= ucfirst($title) ?></li>
                    <?php else: ?>
                        <li class="breadcrumb-item"><?= anchor($url, ucfirst($title)) ?></li>
                    <?php endif ?>
                    <?php if (isset($operation)): ?>
                        <li class="breadcrumb-item active"><?= $operation ?></li>
                    <?php endif ?>
                </ol>
            </div>
        </div>
    </div>
</section>