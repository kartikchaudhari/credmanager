<div class="col-md-7 col-md-offset-2">
	<?php
		if ($this->session->flashdata('msg')) {
		 	echo $this->session->flashdata('msg');
		 	$this->session->unset_userdata('msg');
		 } 
	?>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title text-center">Personal Credentials Manager :: Master Login</h3>
	  </div>
	  <div class="panel-body">
	    <?=form_open(base_url('master/login_action'));?> 
			  <div class="form-group">
			    <?php 
			    	$attr=array('class'=>'form-control','placeholder'=>'Enter Username');
			     	echo form_input('user_name','', $attr);
			     ?>
			  </div>
			  <div class="form-group">
			    <?php 
			    	$attr=array('class'=>'form-control','placeholder'=>'Enter Password');
			     	echo form_password('passwd','', $attr);
			     ?>
			  </div>
			  <button type="submit" class="btn btn-success">Submit</button>
			  &nbsp;<strong>&middot;</strong>&nbsp;
			  <button type="reset" class="btn btn-danger">Reset</button>
		</form> 
	  </div>
	</div>	
</div>
	