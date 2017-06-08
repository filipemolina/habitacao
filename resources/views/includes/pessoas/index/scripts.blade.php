<script>

var tabela;

function invertedata (dataerrada)
{
  return dataerrada.split("-").reverse().join("/");
}

function calculaFaixa(salario){

        var valor = parseFloat(salario.replace('R$ ', '').replace(',', '.'));

        var faixa = 0;

        if(valor <= 1800)
            faixa = 1;
        else if(valor > 1800 && valor <= 2600)
            faixa = "1,5";
        else if(valor > 2600 && valor <= 4000)
            faixa = 2;
        else if(valor > 4000 && valor <= 9000)
            faixa = 3;
        else
            faixa = "Sem Classificação";

        // Sem comentários

        return faixa;
    }

    function calculaPeriodo(inicio, funcao){ 

        $.ajax({

          type    : "GET",
          url     : "{{ url('/pessoas/temporesidencia') }}",
          data    : { inicio : inicio},
          success : function(limao){

            funcao(limao);

          }

        });

    }

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
        stateSave: true,
        stateDuration: -1,
        responsive : true,
        // paging : false,
      });

    // Botão de imprimir do overlay de visualização

    $(".btn.glyphicon-print").click(function(e){

        e.preventDefault();

        $(".modal-lg").print({
          stylesheet : "{{ asset("css/print.css") }}"
        });

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
            text: "Você realmente deseja excluir o(a) participante "+nome+" ?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Sim, exclua!",
            cancelButtonText: "Cancelar",
            closeOnConfirm: false,
            closeOnCancel: false
        },
        function(isConfirm){
            if (isConfirm) {

                // Fazer uma chamada post enviando o id do participante e o método DELETE

                $.post("{{ url("/pessoas/") }}/"+id, {
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
                        text  : "O participante " + nome + "foi excluído do cadastro.",
                        type  : "success",
                    
                    });
                });
            } else {

                swal("Cancelado", "O participante "+nome+" permanece no cadastro.", "error");

            }
        });

    });

    ///////////////////////////////////////////////////////// Mostrar o modal de impressão de pessoas

    $("#modal_pessoas_show").on('show.bs.modal', function(e){

        // Obtem o id da pessoa

        var id = $(e.relatedTarget).data('id');

        $.get('{{ url("/pessoas/api") }}/'+id, function(data){

            var dados = JSON.parse(data);

            console.log(dados.dependentes.length);

            // Começar o código aqui

            ////////////////////////////// Participante

            $("#nome_modal").text(dados.nome);
            $("#cpf_modal").text(dados.cpf);
            $("#nis_modal").text(dados.nis);
            $("#ctps_modal").text(dados.ctps);
            $("#bolsa_familia_modal").text(dados.bolsa_familia ? "Sim" : "Não");
            $("#rg_modal").text(dados.rg);
            $("#orgao_emissor_rg_modal").text(dados.orgao_emissor_rg);
            $("#emissao_rg_modal").text(invertedata(dados.emissao_rg));
            $("#nascimento_modal").text(invertedata(dados.nascimento));
            $("#sexo_modal").text(dados.sexo);
            $("#necessidades_especiais_modal").text(dados.necessidades_especiais ? "Sim" : "Não");
            $("#logradouro_modal").text(dados.endereco.logradouro);
            $("#numero_modal").text(dados.endereco.numero);
            $("#complemento_modal").text(dados.endereco.complemento);
            $("#bairro_modal").text(dados.endereco.bairro);
            $("#municipio_modal").text("Mesquita");
            $("#cep_modal").text(dados.endereco.cep);
            $("#email_modal").text(dados.email);
            $("#telefones\\[1\\]\\[numero\\]").text(dados.telefones[1].numero);
            $("#telefones\\[0\\]\\[numero\\]").text(dados.telefones[0].numero);

            ////////////////////////////// Coparticipante

            if(dados.coparticipante != null)
            {
               $("#coparticipante\\[nome\\]_modal").text(dados.coparticipante.nome);
               $("#coparticipante\\[cpf\\]_modal").text(dados.coparticipante.cpf);
               $("#coparticipante\\[nis\\]_modal").text(dados.coparticipante.nis);
               $("#coparticipante\\[ctps\\]_modal").text(dados.coparticipante.ctps);
               $("#coparticipante\\[bolsa_familia\\]_modal").text(dados.coparticipante.bolsa_familia ? "Sim" : "Não");
               $("#coparticipante\\[rg\\]_modal").text(dados.coparticipante.rg);
               $("#coparticipante\\[orgao_emissor_rg\\]_modal").text(dados.coparticipante.orgao_emissor_rg);
               $("#coparticipante\\[emissao_rg\\]_modal").text(invertedata(dados.coparticipante.emissao_rg));
               $("#coparticipante\\[nascimento\\]_modal").text(invertedata(dados.coparticipante.nascimento));
               $("#coparticipante\\[sexo\\]_modal").text(dados.coparticipante.sexo);
               $("#coparticipante\\[necessidades_especiais\\]_modal\\]").text(dados.coparticipante.necessidades_especiais ? "Sim" : "Não");
               $("#coparticipante\\[logradouro\\]_modal").text(dados.coparticipante.endereco.logradouro);
               $("#coparticipante\\[numero\\]_modal").text(dados.coparticipante.endereco.numero);
               $("#coparticipante\\[complemento\\]_modal").text(dados.coparticipante.endereco.complemento);
               $("#coparticipante\\[bairro\\]_modal").text(dados.coparticipante.endereco.bairro);
               $("#coparticipante\\[municipio\\]_modal").text("mesquita");
               $("#coparticipante\\[cep\\]_modal").text(dados.coparticipante.endereco.cep);
               $("#coparticipante\\[email\\]_modal").text(dados.coparticipante.email);
               $("#coparticipante\\[telefones\\]\\[0\\]\\[numero\\]_modal").text(dados.coparticipante.telefones[0].numero);
               $("#coparticipante\\[telefones\\]\\[1\\]\\[tipo_telefone\\]_modal").text(dados.coparticipante.telefones[1].numero);
            }


            ////////////////////////////////RENDA

             $("#renda_familiar_modal").text(dados.renda_familiar);
             $("#faixa_modal").text(calculaFaixa(""+dados.renda_familiar+""));
             $("#inicio_residencia_modal").text(invertedata(dados.tempo_residencia));
              calculaPeriodo(dados.tempo_residencia, function(tempo){
                 $("#periodo_modal").text(tempo+" anos");
             });

            ///////////////////////////// Dependentes

            // Apagar todos os dependentes criados anteriormente

            $(".x_content.clone").remove()

            // Criar um novo dependente para cada um dos dependentes cadastrados na lista

            for(i=0; i< dados.dependentes.length; i++)
            {
              //////////////// Clonar

              $("div.x_content.dependente").clone()
                            .css('display', 'block')
                            .removeClass('dependente')
                            .addClass('clone')

                            // Colocar na div mãe

                            .appendTo(".x_panel.dependentes")

                            // Nome do Dependente

                            .find("#dependentes\\[0\\]\\[nome\\]_modal")
                            .html(dados.dependentes[i].nome)

                            // Data de nascimento do dependente

                            .parent().parent().parent().parent().find("#dependentes\\[0\\]\\[nascimento\\]_modal")
                            .html(invertedata(dados.dependentes[i].nascimento))

                            // Sexo do dependente

                            .parent().parent().parent().parent().find("#dependentes\\[0\\]\\[sexo\\]_modal")
                            .html(dados.dependentes[i].sexo)

                            // Parentesco do Dependente

                            .parent().parent().parent().parent().find("#dependentes\\[0\\]\\[parentesco\\]_modal")
                            .html(dados.dependentes[i].parentesco)

                            // PNE do dependente

                            .parent().parent().parent().parent().find("#dependentes\\[0\\]\\[necessidades_especiais\\]_modal")
                            .html(dados.dependentes[i].necessidades_especiais ? "Sim" : "Não");

            }

        });

    });

});

</script>