
<?php
 use wolf05\helper\tatiyeNet;

 if($SEGMENT[0] == 'delete') {?>
<!-- 
|--------------------------------------------------------------------------
| Initializes DELETE AKUN 
|--------------------------------------------------------------------------
| Develover Tatiye.Net 2018
| @Date Sen 27 Apr 2020 02:19:05  WITA
-->
 	<script type="text/javascript">
	$(document).ready(function(){
	   window.location.href = '<?php echo  tatiyeNet::ULRsession('Configurasi/package');?>';
	});
	 </script>

<?php } elseif ($SEGMENT[0] == 'sectionDB'){?>
	<script type="text/javascript">
		$(document).ready(function() {

		});
	</script>




<?php } elseif ($SEGMENT[0] == 'Update'){?>

	<script type="text/javascript">
	$(document).ready(function(){
        location.reload();
	});
	 </script>
<?php } else {?>
	<script type="text/javascript">
		$(document).ready(function(){
	      location.reload();
		});
	 </script>
<?php }?>


