<script>
	
$(function(){

	// Ativar o DataTables

	var table = $('#dataTable').DataTable({
      'language' : {
        'url' : '{{ asset('/js/portugues.json') }}'
      }
    });

});

</script>