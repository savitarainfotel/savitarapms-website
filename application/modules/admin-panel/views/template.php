<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
	<?php $this->load->view('partials/head'); ?>
	<body class="hold-transition <?= !in_array($name, ['profile-check']) ? 'sidebar-mini' : 'lockscreen'  ?>">
		<div class="wrapper">
			<!-- Preloader -->
			<div class="preloader flex-column justify-content-center align-items-center">
				<?= img('assets/favicon.png', '', 'height="60" width="60"'); ?>
			</div>	

			<?php $this->load->view('partials/nav'); ?>
			<?php $this->load->view('partials/sidebar'); ?>
			
			<div class="content-wrapper">
				<?php $this->load->view('partials/breadcrumb'); ?>			
				<section class="content">
					<?= !in_array($name, ['dashboard', 'profile-check']) ? '<div class="card">' : ''  ?>
						<?= $contents ?>
					<?= !in_array($name, ['dashboard', 'profile-check']) ? '<div class="card-footer">'.$title.' '.(isset($operation) ? $operation : '').'</div></div>' : ''  ?>
				</section>
			</div>

			<footer class="main-footer">
				<strong>Copyright &copy; 2023 <a href="javascript:;"><?= APP_NAME ?></a>.</strong> All rights reserved.
			</footer>
		</div>
		<?php $this->load->view('partials/scripts'); ?>
	</body>
</html>