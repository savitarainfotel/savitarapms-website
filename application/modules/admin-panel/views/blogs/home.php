<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="card-header">
    <h3 class="card-title"><?= $title ?> <?= $operation ?></h3>
    <div class="card-tools">
        <?= anchor("$url/create-update", '<span class="fa fa-plus"></span> Create new', 'class="btn btn-block btn-primary btn-sm"'); ?>
    </div>
</div>
<div class="card-body">
    <div class="table-responsive pt-4">
        <table class="datatable table table-striped table-bordered nowrap">
            <thead>
                <th class="target">#</th>
                <th>Blog title</th>
                <th>Posted By</th>
                <th>Posted On</th>
                <th class="target">Action</th>
            </thead>
            <tbody></tbody>
        </table>
    </div>
</div>