<?php include_once('header.php'); ?>
<div class="container">
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h2 class="text-center">Recovery Passwrod for :<b> <?php echo $userName; ?></b></h2>
	
		<?php
			// if (validation_errors()) {
			// echo  validation_errors('<div class="red">', '</div>');
			// }
		 ?>
		<hr>
		<form class="form-horizontal" action="<?php echo base_url('dashboard/forgetpassword/savePassword')?>" method="post">
		
		<input type="hidden" name="name" value="<?php echo $userName; ?>">
		<input type="hidden" name="_Token" value="<?php echo $getToken; ?>">

		  <div class="form-group">
		    <label for="inputPassword3" class="col-sm-3 control-label">Password</label>
		    <div class="col-sm-9">
		      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
		    </div>
		    <label for="mail" class="col-sm-3 control-label"></label>	   
		    <div class="col-sm-9">
		      <?php echo form_error('password', '<div class="red">', '</div>'); ?>
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputPassword3" class="col-sm-3 control-label">Confirm Password</label>
		    <div class="col-sm-9">
		      <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm Password">
		    </div>
		    <label for="mail" class="col-sm-3 control-label"></label>	   
		    <div class="col-sm-9">
		      <?php echo form_error('cpassword', '<div class="red">', '</div>'); ?>
		    </div>
		  </div>

		  <div class="form-group">
		    <label for="inputPassword3" class="col-sm-3 control-label">Captcha</label>
		    <div class="col-sm-9">
		    	<div class="col-sm-3 row">
		        <div class="refreshImage">
		            <?php echo $captcha; ?>
		        </div>
		        </div>
		    <div class="col-sm-1">
		        <a class="refresh" onclick="refresh()"><img src="<?php echo base_url(); ?>images/refresh.png"> </a>
		    </div>
		    </div>
		  </div>

		  <div class="form-group">
		    <label for="inputPassword3" class="col-sm-3 control-label">Type Captcha</label>
		    <div class="col-sm-9">
		      <input type="text" class="form-control" id="captcha" name="captcha" placeholder="Type Captcha">
		    </div>
		    <label for="mail" class="col-sm-3 control-label"></label>	   
		    <div class="col-sm-9">
		      <?php echo form_error('captcha', '<div class="red">', '</div>'); ?>
		    </div>
		  </div>

		  <div class="form-group">
		  	<label for="inputPassword3" class="col-sm-3 control-label"></label>
		    <div class="col-sm-9">
		      <a class="btn btn-success" href="<?php echo base_url('login');?>">Back To Login</a>		    
		      <input type="submit" class="btn btn-primary"  id="submit" name="submit" value="Change Password">
		  	</div>
		  </div>
		</form>	
	</div>
</div>
</div>

<script type="text/javascript">
	function refresh(){

		var url = '<?php echo base_url() ?>user/refresh_captcha';
		    $.ajax({
		        type: 'POST',
		        url: url,
		        success: function(data){
		            if(data){
		                $('.refreshImage').html(data);
		            }
		        }
		    })

	}
</script>
<?php include_once('footer.php'); ?>
