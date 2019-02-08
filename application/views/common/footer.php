	<div class="footer col-md-7 col-md-offset-2">
		<footer class="navbar navbar-inverse page-footer font-small blue">
		  <p class="text-center text-info">Welcome</p>
		</footer>
	</div>
</div>


<!--  bootstrap javascripts-->
<script type="text/javascript" src="<?php echo base_url(JQUERY); ?>"></script>
<script type="text/javascript" src="<?php echo base_url(BOOTSTRAP_JS); ?>"></script>
<script type="text/javascript">
	function DeleteCred(credId){
		jQuery.post('<?=base_url('cred/RemoveCredInfo');?>',
					 {CredId:credId}, 
					 function(data, textStatus, xhr) {
		  				alert('OK');
					});
	}
</script>
<!--  document_container ends-->
</body>
</html>
