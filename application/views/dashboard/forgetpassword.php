<?php include_once('header.php'); ?>

<div class="container">
<div class="row">
	<div class="col-md-6 col-md-offset-3 login">
		<h2 class="text-center">Forget Password</h2>

		<?php
			if (isset($success_logout)) {
				echo '<div class="btn-success btn success">'.$success_logout.'</div>';
			}
		?>
		<form class="form-horizontal" action="<?php echo base_url('dashboard/forgetpassword/forget'); ?>" method="post" enctype="multipart/form-data">
			<div class="form-group">
			  <label for="mail" class="col-sm-3 control-label">Email</label>
			  <div class="col-sm-9">
			  
			    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
			  </div>		
			  <label for="mail" class="col-sm-3 control-label"></label>	   
			  <div class="col-sm-9">
			    <?php echo form_error('email', '<div class="btn-danger btn">', '</div>'); 
			    	if (isset($error_message)) {
			    	 echo '<div class="red">'.$error_message.'</div>'; 
			    	}
			    ?>
			  </div>
			</div>

			<div class="form-group">
				<label for="inputPassword3" class="col-sm-3 control-label"></label>
			    <div class="col-sm-9">	
			    <a class="btn btn-success col-md-5" href="<?php echo base_url('user');?>">Register</a> 
			    <input type="submit" class="btn btn-primary col-md-5 col-md-offset-2" id="submit" name="submit" value="Reset Password">
				</div>
			</div>
			
		</form>
</div> <!-- col-md-offset-3 -->
</div> <!-- row -->
</div> <!-- container -->

<?php include_once('footer.php'); ?>