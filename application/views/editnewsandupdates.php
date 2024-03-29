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
							    <li ><a href="<?php echo base_url();?>dashboard/files">Manage Files</a></li>  
						      <li class="active"><a href="<?php echo base_url(); ?>dashboard/news_and_updates">News & Updates</a></li>
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
						<h3> Edit <?php echo $news[0]->news_title; ?> </h3>
						<hr />
					</div>
				</div>

				<div class="row">
					<div class="span12">
						<?php $attribute = array('id'=>'account_form','style'=>'margin-left:30px'); ?>
						<?php echo form_open("dashboard/validate_news/".$news[0]->news_id, $attribute); ?>
							<fieldset>			
							<legend ><h3>Edit News:</h3></legend>
							<div class="alert alert-info">
								<span style = "font-weight:bold"><strong>Note:&nbsp;</strong></span>
								<span>Fields with an <span style = "color:red">*</span>&nbspasterisk are required.</span>
							</div>

							<div class="control-group" >
								<label class="control-label" for="input01">
									<span style = "color:red; font-weight:bold">*</span><span style = "font-weight:bold">Title:</span>
								</label>
								<div class="controls">
									<input type="text" placeholder="" class="span12" name = "titles" id = "titles" value = "<?php echo $news[0]->news_title;?>"/>
								</div>
							</div>

							<div class="control-group" >
							  <!-- Text input-->
								<label class="control-label" for="input01">
									<span style = "color:red; font-weight:bold">*</span><span style = "font-weight:bold">Content:</span>
								</label>
									<div class="controls">
										<textarea placeholder="" class="span12" name = "contents" id = "contents" style = "resize:none;height:200px"><?php echo $news[0]->news_content;?></textarea>
									</div>
							</div>	
						<?php echo form_close();?>		
						<button id="form_submit" class="btn btn-success" style="margin-top:2%">Send</button>	
					</div>		
				</div>
			</div>
		</body>
	</html>		
