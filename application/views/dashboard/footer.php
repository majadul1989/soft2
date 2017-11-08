
<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div> <!--container, row-->
</body>
</html>
<script src="<?php echo base_url('assets/js/bootstrap-datepicker.js');?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap-datepicker.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap-select.js');?>"></script>
<script src="<?php echo base_url('assets/js/jquery.nestable.js');?>"></script>
<script src="<?php echo base_url('assets/js/js_validation/branch.js');?>"></script>
<script src="<?php echo base_url('assets/js/js_validation/bootstrapValidator.js');?>"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.success').fadeOut(8000);

		//Mouse Over functions
		$('.red').on('mouseover', function(){
			$(this).fadeOut(2000);
		}); // end
	});
	
</script>