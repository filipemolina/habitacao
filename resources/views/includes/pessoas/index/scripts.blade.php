<script>

var tabela;

$(function(){

    // Ativar o DataTables

    tabela = $('#dataTable').DataTable({
        language : {
          'url' : '{{ asset('/js/portugues.json') }}'
        },
        processing: true,
        serverSide: true,
        ajax      : "{{ url('/pessoas/dados') }}",
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