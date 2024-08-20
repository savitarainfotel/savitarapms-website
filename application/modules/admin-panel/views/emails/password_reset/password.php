<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<strong>Link to password reset is :</strong> <br />
<?= $link; ?> <br /><br />
<strong>It will expire on :</strong> 
<?= date('d-m-Y h:i A', strtotime($update_at)); ?>