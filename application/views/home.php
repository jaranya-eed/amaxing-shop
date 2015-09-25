<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="AmaXing">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="keywords" content="o4WDkW8KaIW718zT-iLmnUwSlJ4," />
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="author" content="">
    <title>Welcome to Amaxing</title>
    <?php $this->load->view('includes/css'); ?>
</head><!--/head-->

<body>
	<?php $this->load->view('includes/header'); ?>
	<div class="container">
<!-- 		<div class="row"> -->
			<?php $this->load->view('includes/left-sidebar'); ?>
			<?php $this->load->view('includes/main-content'); ?>
			<?php $this->load->view('includes/right-sidebar'); ?>
<!-- 		</div> -->
	</div>
	<?php $this->load->view('includes/footer'); ?>
	<?php $this->load->view('includes/js'); ?>
</body>
</html>
