<script>

$(function(){

    // Ativar o DataTables

    var table = $('#dataTable').DataTable({
        language : {
          'url' : '{{ asset('/js/portugues.json') }}'
        },
        processing: true,
        serverSide: true,
        ajax      : "{{ url('/pessoas/dados') }}",
        // buttons   : [
        //   {
        //     extend        : 'pdf',
        //     text          : 'Imprimir',
        //     filename      : 'Relatório de Participantes',
        //     exportOptions : {
        //       columns : 'th:not(:last-child)',
        //     },
        //     customize : function(doc){
        //       doc.defaultStyle.fontSize = 50;
        //     },
        //   }
        // ],
        // dom : 'Bfrtip',
        columns   : [

          { data : 'nome', name : 'nome' },
          { data : 'idade', name : 'idade' },
          { data : 'sexo', name : 'sexo' },
          { data : 'necessidades_especiais', name : 'necessidades_especiais' },
          { data : 'coparticipante', name : 'coparticipante' },
          { data : 'dependentes', name : 'dependentes' },
          { data : 'bairro', name : 'bairro' },
          { data : 'acoes', name : 'acoes' },

        ],
        // paging : false,
      });

});

</script>