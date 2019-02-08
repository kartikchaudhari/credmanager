<div class="col-md-7 col-md-offset-2">
	<?php
		if ($this->session->flashdata('msg')) {
		 	echo $this->session->flashdata('msg');
		 	$this->session->unset_userdata('msg');
		 } 
	?>
	<div class="panel panel-info">
	  <div class="panel-heading">
	    <h3 class="panel-title text-center">Personal Credentials Manager</h3>
	  </div>
	  <div class="panel-body">
	    <?= form_open('cred/add_cred_action');?>
	    <div class="input-group">
	    	<span class="input-group-addon">
	    		<i class="glyphicon glyphicon-globe"></i>
	    	</span>
	    	<input type="text" class="form-control" name="url" placeholder="Enter URL" required="required">
  		</div>
  		<br>
  		<div class="input-group">
	    	<span class="input-group-addon">
	    		<i class="glyphicon glyphicon-user"></i>
	    	</span>
	    	<input type="text" class="form-control" name="uname" placeholder="Enter Username/Email" required="required">
  		</div>
  		<br>
  		<div class="input-group">
    		<span class="input-group-addon">
	    		<i class="glyphicon glyphicon-lock"></i>
	    	</span>
    		<input type="text" class="form-control" name="pass" placeholder="Enter Password" required="required">
  		</div>
  		<br>
  		<button type="submit" class="btn btn-success">Add</button>
  		&nbsp;<strong>&middot;</strong>&nbsp;
  		<button type="reset" class="btn btn-danger">Clear</button>
	    <?= form_close();?>
	  </div>
	</div>	
</div>