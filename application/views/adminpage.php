<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php echo $title; ?></title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Styles -->
		<?php 
			foreach($styles as $style) {
				?>
				<link href="<?php echo base_url().'css/'.$style; ?>.css" rel="stylesheet">
				<?php
			}
		?>

		<!-- Scripts -->
		<?php 
			foreach($scripts as $script) {
				?>
				<script type="text/javascript" src="<?php echo base_url().'js/'.$script; ?>.js"></script>
				<?php
			}
		?>
	</head>

	<body class = "quick-bold">

		<div class="container">

			<div class="row" style = "margin-top:5%">
				<div class="span12">
					<img src = "<?php echo base_url();?>img/logo.png" style = "width:185px; height:107px"/>
				</div>
			</div>

			<div>
				<?php 	$attribute = array('class'=>'form-signin');
						echo form_open('admin/check_login',$attribute);?>
				<!--<form action="" class="form-signin">-->
					<h2 class="form-signin-heading">Login <small> as an administrator </small></h2>
					<?php echo validation_errors(); ?>
					<input type="text" class="input-block-level" placeholder="Username" name = "username" />
					<input type="password" class="input-block-level" placeholder="Password" name = "password" />

					<button class="btn btn-large btn-primary" type="submit">
						Sign in
					</button>
				<?php echo form_close();?>
			</div>
		</div>

	</body>
</html>