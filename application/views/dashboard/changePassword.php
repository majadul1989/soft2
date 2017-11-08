<?php include_once('header.php'); ?>
<div class="container">
<div class="row">
	<div class="col-md-6 col-md-offset-3 login">
		<h2 class="text-center">Change Password</h2>
		<hr role="separator" class="divider">

		<?php
			if (isset($message_display)) {
				echo '<div class="red col-md-offset-3">'.$message_display.'</div>'; 
			}
		?>
		<form class="form-horizontal" action="<?php echo base_url('dashboard/ChangePassword/changeUserPassword'); ?>" method="post" enctype="multipart/form-data">
			<div class="form-group">
			  <label for="mail" class="col-sm-4 control-label">Current Password</label>
			  <div class="col-sm-8">
			  
			    <input type="password" class="form-control" id="oldPassword" name="oldPassword" placeholder="Current Password" required>
			  </div>		
			  <label for="mail" class="col-sm-4 control-label"></label>	   
			  <div class="col-sm-8">
			    <?php echo form_error('oldPassword', '<div class="red">', '</div>'); 
			    if (isset($error_message)) {
			     echo '<div class="red">'.$error_message.'</div>'; 
			    } ?>
			  </div>
			</div>

			<div class="form-group">
			  <label for="mail" class="col-sm-4 control-label">New Password</label>
			  <div class="col-sm-8">
			    <input type="password" class="form-control" id="newPassword" name="newPassword" placeholder="New Password" required>
				
			  </div>	
			  <label for="mail" class="col-sm-4 control-label"></label>	   
			  <div class="col-sm-8">
			    <?php echo form_error('newPassword', '<div class="red">', '</div>'); ?>
			  </div>
			</div>

			<div class="form-group">
			  <label for="mail" class="col-sm-4 control-label">Confirm Password</label>
			  <div class="col-sm-8">
			    <input type="password" class="form-control" id="cNewPassword" name="cNewPassword" placeholder="Confirm New Password" required>
				
			  </div>	
			  <label for="mail" class="col-sm-4 control-label"></label>	   
			  <div class="col-sm-8">
			    <?php echo form_error('cNewPassword', '<div class="red">', '</div>'); ?>
			  </div>
			</div>

			<div class="form-group">
				<label for="inputPassword4" class="col-sm-4 control-label"></label>
			    <div class="col-sm-8">	 
			    <input type="submit" class="btn btn-success col-md-6 col-md-offset-2" id="submit" name="submit" value="Change Password">
				</div>
			</div>
			
		</form>
</div> <!-- col-md-offset-3 -->
</div> <!-- row -->
</div> <!-- container -->
<?php 
if(isset($success) ){
	echo '<div class="btn-success btn success">'.$success.'</div>';
}?>
<?php include_once('footer.php'); ?>