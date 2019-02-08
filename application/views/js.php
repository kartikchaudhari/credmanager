<script type="text/javascript">
	function DeleteCred(credId){
		jQuery.post(<?=base_url('cred/RemoveCredInfo');?>,
					 {CredId:credId}, 
					 function(data, textStatus, xhr) {
		  				alert(data);
		});
		
	}
</script>