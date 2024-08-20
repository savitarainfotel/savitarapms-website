<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('partials/head'); ?>

<body class="hold-transition login-page">
	<!-- Preloader -->
	<div class="preloader flex-column justify-content-center align-items-center">
		<?= img('assets/favicon.png', '', 'height="60" width="60"'); ?>
	</div>
	<div class="login-box">
		<div class="card card-outline card-primary">
			<div class="card-header text-center">
				<a href="javascript:;" class="h1"><?= ucwords($title) ?></a>
			</div>
			<div class="card-body login-card-body">
				<?= $contents ?>
			</div>
		</div>
	</div>

	<?php $this->load->view('partials/scripts'); ?>
</body>

</html>