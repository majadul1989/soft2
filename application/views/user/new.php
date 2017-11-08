<div class="container">
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h2 class="text-center">New User Registration</h2>
	
		<?php
			// if (validation_errors()) {
			// echo  validation_errors('<div class="red">', '</div>');
			// }
		 ?>
		<hr>
		<form class="form-horizontal" action="<?php echo base_url('user/user/newUser')?>" method="post">
		  <div class="form-group">
		    <label for="mail" class="col-sm-3 control-label">Email</label>
		    <div class="col-sm-9">
		      <input type="email" value="<?php echo set_value('email'); ?>" class="form-control" id="email" name="email" placeholder="Email">
		    </div>	
		    <label for="mail" class="col-sm-3 control-label"></label>	   
		    <div class="col-sm-9">
		      <?php echo form_error('email', '<div class="red">', '</div>'); ?>
		    </div>

		  </div>

		  <div class="form-group">
		    <label for="inputEmail3" class="col-sm-3 control-label">Name</label>
		    <div class="col-sm-9">
		      <input type="text" value="<?php echo set_value('userName'); ?>" class="form-control" id="userName" name="userName" placeholder="Name">
		    </div>
		    <label for="mail" class="col-sm-3 control-label"></label>	   
		    <div class="col-sm-9">
		      <?php echo form_error('userName', '<div class="red">', '</div>'); ?>
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputEmail3" class="col-sm-3 control-label">NID</label>
		    <div class="col-sm-9">
		      <input type="text" maxlength="17" required title="Either 0 OR (8 chars minimum) value="<?php echo set_value('nid'); ?>" class="form-control" id="nid" name="nid" placeholder="NID">
		    </div>
		    <label for="mail" class="col-sm-3 control-label"></label>	   
		    <div class="col-sm-9">
		      <?php echo form_error('nid', '<div class="red">', '</div>'); ?>
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputEmail3" class="col-sm-3 control-label">Date of Birth</label>
		    <div class="col-sm-9">

		      <input type="date" value="<?php echo set_value('dateOfBirth'); ?>" class="form-control" id="datepicker" name="dateOfBirth" placeholder="Date of Birth">
		     
		    </div>
		    <label for="mail" class="col-sm-3 control-label"></label>	   
		    <div class="col-sm-9">
		      <?php echo form_error('dateOfBirth', '<div class="red">', '</div>'); ?>
		    </div>
		  </div>

		  <div class="form-group">
		    <label for="inputEmail3" class="col-sm-3 control-label">Cell Phone No.</label>
		    <div class="col-sm-9">
		      <input type="text" value="<?php echo set_value('phone'); ?>" class="form-control" id="phone" name="phone" placeholder="Cell Phone NO">
		    </div>
		    <label for="mail" class="col-sm-3 control-label"></label>	   
		    <div class="col-sm-9">
		      <?php echo form_error('phone', '<div class="red">', '</div>'); ?>
		    </div>
		  </div>

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
		    <div class="col-sm-offset-3 col-sm-9">
		      <div class="checkbox">
		        <label>
		          <!-- <input type="checkbox" onclick="cond()"  name="condition[]" value="no" id="condition"> conditions -->
		          <input type="checkbox" onchange="cond()"  name="condition[]"  id="condition"> conditions 
		        </label>
		      </div>
		      <label for="mail" class="col-sm-3 control-label"></label>	   
		      <div class="col-sm-9">
		        <?php echo form_error('condition[]', '<div class="red">', '</div>'); ?>
		      </div>
		    </div>
		  </div>
		  <div class="form-group">
		  	<label for="inputPassword3" class="col-sm-3 control-label"></label>
		    <div class="col-sm-9">
		      <a class="btn btn-success" href="<?php echo base_url('login');?>">Back To Login</a>		    
		      <input type="submit" class="btn btn-primary"  disabled="disabled" id="submit" name="submit" value="Register">
		  	</div>
		  </div>
		</form>	
	</div>
</div>
</div>

<script type="text/javascript">
	function refresh(){

		var url = '<?php echo base_url() ?>user/adduser/refresh_captcha';
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


	    jQuery(document).ready(function() {
	    	jQuery('#datepicker').datepicker({
	        dateFormat : 'yy-mm-dd',
	        // changeYear: true,
	        });
	        // $("#datepicker").datepicker("setDate",'1999-01-01');
	        
	    });

// Conditions functions here..
function cond(){
	$(document).change('#condition', function(){
	var checked = $("#condition").is(":checked");
	if (checked == true) {
		$('#submit').attr('disabled', false);
	}else{
		$('#submit').attr('disabled', true);
	}

	});
} // cond function


</script>