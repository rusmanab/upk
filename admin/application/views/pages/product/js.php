<script type="text/javascript">
	$(document).ready(function(e){
		var dTable = $('#datatable_ajax').DataTable( {
                            "processing": true,
                            "serverSide": true,
                            "bStateSave": true, 
                            "pageLength": 10,                           
                            "ajax": "<?php echo site_url('product/gettable')?>"
                         } );
	});
</script>
