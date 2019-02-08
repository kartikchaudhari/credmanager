<?php $this->load->helper('cred'); ?>
<div class="col-md-7 col-md-offset-2">
	<?php
		if ($this->session->flashdata('msg')) {
		 	echo $this->session->flashdata('msg');
		 	$this->session->unset_userdata('msg');
		 } 
	?>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title text-center">Your Credentials</h3>
	  </div>
	  <div class="panel-body">
	  	<div class="table-responsive">
  		    <table class="table table-bordered table-hover">
			    <thead>
			      <tr class="active">
			        <th>URL</th>
			        <th>Username/Email</th>
			        <th>Password</th>
			        <th>Actions</th>
			      </tr>
			    </thead>
			    <tbody>
			    	<?php 
			    		for ($i=1; $i<count($data['creds']); $i++) { 
			    			echo json_to_tr_render($data['creds'][$i]['cred_info'],$data['creds'][$i]['cred_id']);
			    		}
			    	 ?> 
			    </tbody>
			</table>
	  	</div>
	  </div>
	</div>	
</div>