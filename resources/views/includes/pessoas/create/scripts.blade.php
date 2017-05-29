<script type="text/javascript">

    // Contador de dependentes

    var cont = 1;

    // Calcular a faixa de inscrição

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

        $("input#faixa").val(faixa);
    }

    function calculaPeriodo(inicio){

        $.get("{{ url('/pessoas/temporesidencia') }}", { inicio : inicio}, function(data){

            $("input#periodo").val(data+" anos");

        });

    }
  
    {{-- Máscarasa dos campos CPF e RG --}}
    $(function(){
      
       // Clonar div panel_dependentes
        $(".clonar").click(function(e){

          e.preventDefault();

          $(".panel_dependentes").clone()

            // Adicionar a classe clone e remover a classe panel_dependentes

            .addClass("clone_dependentes")
            .removeClass("panel_dependentes")

            // Mostrar o botão excluir

            .find("button.excluir").css("display","block")

            // Colocar os campos clonados no lugar correto

            .parent().appendTo(".div-clone")

            // Alterar os names dos inputs para preencher o vetor de dependentes corretamente

            .find("input[name='dependentes[0][nome]']")
                .attr("name", "dependentes["+cont+"][nome]")
                .attr("id", "dependentes["+cont+"][nome]")
                .val("")
            
            .parent().parent().parent().find("input[name='dependentes[0][nascimento]']")
                .attr("name", "dependentes["+cont+"][nascimento]")
                .attr("id", "dependentes["+cont+"][nascimento]")
                .val("")
            
            .parent().parent().parent().find("select[name='dependentes[0][sexo]']")
                .attr("name", "dependentes["+cont+"][sexo]")
                .attr("id", "dependentes["+cont+"][sexo]")
                .val("")
            
            .parent().parent().parent().find("select[name='dependentes[0][necessidades_especiais]']")
                .attr("name", "dependentes["+cont+"][necessidades_especiais]")
                .attr("id", "dependentes["+cont+"][necessidades_especiais]")
                .val("")

            .parent().parent().parent().find("select[name='dependentes[0][parentesco]']")
                .attr("name", "dependentes["+cont+"][parentesco]")
                .attr("id", "dependentes["+cont+"][parentesco]")
                .val("");

            // Incrementar o contador de dependentes

            cont++;
        });
        
        // Remover div clonada  
        $("#dependentes").on("click", "button.excluir", function(e){

          e.preventDefault();

          $(this).parent().remove();

        });

        ////////////////////////////////////// Fazer a busca por CEP

        // Utilizo aqui o webservice viacep.com.br

        $("input#cep, input#coparticipante\\[cep\\]").blur(function(){

            var cep = $(this).val().replace('.', '').replace('-', '');

            // Obter o id do objeto aqui, fora da chamada AJAX, antes
            // que o escopo seja mudado

            var id = $(this).attr('id') == "cep";

            $.get('https://viacep.com.br/ws/'+cep+"/json", function(data){

                if(id)
                {
                    $("input#logradouro").val(data.logradouro);
                    $("input#bairro").val(data.bairro);
                    $("input#municipio").val(data.localidade);
                }
                else
                {
                    $("input#coparticipante\\[logradouro\\]").val(data.logradouro);
                    $("input#coparticipante\\[bairro\\]").val(data.bairro);
                    $("input#coparticipante\\[municipio\\]").val(data.localidade);
                }

            });

        });

        ////////////////////////////////////// Duplicar o endereço do participante no coparticipante

        $("button.duplicar-endereco").click(function(e){

            e.preventDefault();

            // Pegar as informações do participante e duplicar no coparticipante

            $("input#coparticipante\\[cep\\]").val($("input#cep").val());
            $("input#coparticipante\\[logradouro\\]").val($("input#logradouro").val());
            $("input#coparticipante\\[numero\\]").val($("input#numero").val());
            $("input#coparticipante\\[municipio\\]").val($("input#municipio").val());
            $("input#coparticipante\\[bairro\\]").val($("input#bairro").val());
            $("input#coparticipante\\[complemento\\]").val($("input#complemento").val());

        });

        ////////////////////////////////////// Calcular as faixas de classifiação

        $("input#renda_familiar").blur(function(){
            calculaFaixa($(this).val());
        });

        //////////////////////////////////// Calcular o tempo de residência

        $("input#inicio-residencia").blur(function(){
            calculaPeriodo($(this).val());
        });

    });

  </script>