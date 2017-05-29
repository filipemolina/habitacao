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

    // Criar uma função que será executada no evento "show.bs.modal" que acontece no modal.

    $("#modalexcluir").on('show.bs.modal', function(e){

        // Peguei a propriedade "data-nome" que está em todos os links de excluir ...

        var nome = $(e.relatedTarget).data("nome");
        var id = $(e.relatedTarget).data("id");

        // ... E coloquei no texto do titulo do modal...

        $("span#nome_participante").text(nome.replace("'", "")+"?");

        // ... E coloquei o ID na Parada

        $("#id_participante").val(id);

    });

    // Função executada quando o botão "EXCLUIR" do modal for clicado

    $("#btn-excluir-modal").click(function(){

        // Obter as variáveis do modal

        var id = $("#id_participante").val();
        var method = $("[name='_method']").val();
        var token = $("[name='_token']").val();

        // Fazer uma chamada post enviando o id do participante e o método DELETE

        $.post("/pessoas/"+id, {
          id : id,
          _method : method,
          _token : token,
        })

        // Caso a chamada seja bem-sucedida

        .done(function(){

            // Recarregar a página

            location.reload();
        });

    });

});

</script>