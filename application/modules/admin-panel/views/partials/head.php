<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<head>
	<title> <?= APP_NAME ?> | <?= ucwords($title) ?> </title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?= link_tag('assets/favicon.png'.ASSET_VERSION, 'shortcut icon', 'image/png') ?>
	<?= link_tag('assets/favicon.png'.ASSET_VERSION, 'icon', 'image/png') ?>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
	<!-- Font Awesome -->
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
	<?php if(!empty($select2)): ?>
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" />
	<?php endif ?>

	<?php if(!empty($datetimepicker)): ?>
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" />
	<?php endif ?>

	<?php if(!empty($datatables)): ?>
		<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css" />
		<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css" />
	<?php endif ?>
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/node-snackbar@latest/dist/snackbar.min.css" />
	<!-- Theme style -->
	<?= link_tag('assets/admin-panel/css/adminlte.min.css'.ASSET_VERSION); ?>
	<!-- Custom Stylesheet -->
	<?= link_tag('assets/admin-panel/css/style.css'.ASSET_VERSION); ?>
</head>