<!DOCTYPE html>
<html lang="en">
	<head>
		<title> <?php echo $title; ?> </title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php
			foreach($styles as $style) {
		?>
				<link href="<?php echo base_url().'css/'.$style; ?>.css" rel="stylesheet">
		<?php
			}
		?>
		<?php
			foreach($scripts as $script) {
		?>
				<script type="text/javascript" src="<?php echo base_url().'js/'.$script; ?>.js"></script>
		<?php
			}
		?>

	</head>

	<body class="quick-bold">
		<div id="edit_pass" class="modal hide fade">
			  <div class="modal-header" 
				style = "background: #499bea; /* Old browsers */
				background: -moz-linear-gradient(top, #499bea 0%, #207ce5 100%); /* FF3.6+ */
				background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#499bea), color-stop(100%,#207ce5)); /* Chrome,Safari4+ */
				background: -webkit-linear-gradient(top, #499bea 0%,#207ce5 100%); /* Chrome10+,Safari5.1+ */
				background: -o-linear-gradient(top, #499bea 0%,#207ce5 100%); /* Opera 11.10+ */
				background: -ms-linear-gradient(top, #499bea 0%,#207ce5 100%); /* IE10+ */
				background: linear-gradient(to bottom, #499bea 0%,#207ce5 100%); /* W3C */
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#499bea', endColorstr='#207ce5',GradientType=0 ); /* IE6-9 */
				copy">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
				<h3><span style = "color:white">Edit Password</span></h3>
			  </div>
			  <div class="modal-body">
			  	<?php 	$attribute = array('id'=>'password_form','class'=>'form-horizontal');
						echo form_open('dashboard/validate_password',$attribute);?>
					<div id = "id_error" class="alert alert-error">
						<strong>Note:&nbsp;</strong>Passwords does not match
					</div>				
				<div class="row-fluid">	
					<h4>New Password:</h4>
				</div>
				<div class = "row-fluid">
					<input type = "password" name = "new_pass" id = "new_pass" value = "" />
				</div>
				<div class="row-fluid">	
					<h4>Confirm Password:</h4>
				</div>
				<div class = "row-fluid">
					<input type = "password" name = "confirm_pass" id = "confirm_pass" value = "" />
				</div>				
			  	<?php echo form_close();?>
			  </div>
			  <div class="modal-footer">
				<a href="#" class="btn btn-primary" id="change_password" data-loading="Processing...">Change</a>
				<a href="#" class="btn" id="password_close">Close</a>
			  </div>	
		</div>			
		<div class="navbar navbar-static-top">
			<div class="navbar-inner">
				<div class="container">
				      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				      </a>

					<a class="brand" href="login.html">Sarilaya's Dashboard</a>
						<div class="nav-collapse collapse">
							<ul class="nav pull-right">
							      <li><a href="<?php echo base_url();?>dashboard/articles/1">Manage Articles</a></li>
							      <li><a href="<?php echo base_url(); ?>dashboard/gallery">Manage Gallery</a></li>
						      <li class="active"><a href="#">News & Updates</a></li>
						      <li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<?php echo $this->session->userdata('username'); ?><b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li> <a href="#">Go to Site</a> </li>
								<li> <a href="#" id = "editpassword">Edit Password</a> </li>
								<li> <a href="<?php echo base_url();?>dashboard/logout">Logout</a> </li>
							</ul>
						      </li>
						    </ul>
						</div>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="row">
					<div class="span12">
						<h1> News & Updates <small> <a href="<?php echo base_url(); ?>dashboard/new_news">add a news/update</a> </small> </h1>
						<hr />
					</div>
				</div>

				<div class="row">
					<div class="span12">
						<?php foreach($news as $x): ?>
							<div class="news-block">
								<h3> 
									<?php echo $x->news_title; ?>
									<a href="<?php echo base_url(); ?>dashboard/delete_news/<?php echo $x->news_id; ?>" class="btn btn-danger">Delete</a>
		<a href="<?php echo base_url(); ?>dashboard/news_and_updates/edit/<?php echo $x->news_id; ?>" class="btn">Edit</a>
								</h3>

								<div>
									<?php echo $x->news_content; ?>
								</div>
							</div>
						<?php endforeach; ?>		
					</div>		
				</div>
			</div>
		</body>
	</html>		
