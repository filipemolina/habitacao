<script>
	
$(function(){

	// Ativar o DataTables

	var table = $('#dataTable').DataTable({
        'language' : {
            'url' : '{{ asset('/js/portugues.json') }}'
        },
        stateSave: true,
        stateDuration: -1
    });

     ///////////////////// Excluir usando SweetAlert

    $("body").on("click", "a.btn-excluir", function(e){

        e.preventDefault();

        var nome   = $(this).data('nome');
        var id     = $(this).data('id');
        var method = $("[name='_method']").val();
        var token  = $("[name='_token']").val();
        var link   = $(this);

        // Configuração do Sweet alert

        swal({
            title: "Atenção!",
            text: "Você realmente deseja excluir o usuário "+nome+" ?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Sim, exclua!",
            confirmButtonClass: 'btn-cor-perigo',
            cancelButtonText: "Cancelar",
            cancelButtonClass: 'btn-cor-padrao',
            closeOnConfirm: false,
            closeOnCancel: false
        },
        function(isConfirm){
            if (isConfirm) {

                // Fazer uma chamada post enviando o id do participante e o método DELETE

                $.post("{{ url("/users/") }}/"+id, {
                  id : id,
                  _method : method,
                  _token : token,
                })

                // Caso a chamada seja bem-sucedida

                .done(function(){

                    // Deletar a TR do cadastro que foi deletado

                    $(link).parents("tr").remove();

                    swal({

                        title : "Excluído!",
                        text  : "O usuário " + nome + "foi excluído do sistema.",
                        type  : "success",
                        confirmButtonClass: 'btn-cor-padrao',
                    
                    });
                });
            } else {

                swal({
                    title : "Cancelado",
                    text : "O usuário " + nome + " permanece no sistema.",
                    type : 'error',
                    confirmButtonClass: 'btn-cor-padrao',
                });

            }
        });

    });

    // Criar uma função que será executada no evento "show.bs.modal" que acontece no modal.

    // $("#modalexcluir").on('show.bs.modal', function(e){

    //     // Peguei a propriedade "data-nome" que está em todos os links de excluir ...

    //     var nome = $(e.relatedTarget).data("nome");
    //     var id = $(e.relatedTarget).data("id");

    //     // ... E coloquei no texto do titulo do modal...

    //     $("span#nome_usuario").text(nome.replace("'", "")+"?");

    //     // ... E coloquei o ID na Parada

    //     $("#id_usuario").val(id);

    // });

    // Função executada quando o botão "EXCLUIR" do modal for clicado

    // $("#btn-excluir-modal").click(function(){

    //     // Obter as variáveis do modal

    //     var id = $("#id_usuario").val();
    //     var method = $("[name='_method']").val();
    //     var token = $("[name='_token']").val();

    //     // Fazer uma chamada post enviando o id do participante e o método DELETE

    //     $.post("{{ url("/users/") }}"+"/"+id, {
    //       id : id,
    //       _method : method,
    //       _token : token,
    //     })

    //     // Caso a chamada seja bem-sucedida

    //     .done(function(){

    //         // Recarregar a página

    //         location.reload();
    //     });

    // });

});

</script>