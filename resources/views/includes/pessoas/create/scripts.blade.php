<script type="text/javascript">

    // Contador de dependentes, 

    var cont = {{ $i }};

    // Calcular a faixa de inscrição

    function calculaFaixa(salario){

        var valor = parseFloat(salario.replace('R$ ', '').replace(".", "").replace(',', '.').replace(/_/g, ''));

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

        // Tooltip para elementos dinâmicos

        $('body').tooltip({
            
            selector: '[data-toggle="tooltip"]:not(#cpf):not(#coparticipante\\[cpf\\])'

        });

        // Switchery

        var check = document.querySelector("#mulher_responsavel");
        var init = new Switchery(check, {
            color : "#3D276B",
            size  : 'small',
        });

        // Ligar ou desligar o select de tipos de necessidades especiais

        if($("#necessidades_especiais").val() == 0)
        {
            $("#tipo_necessidade").prop('disabled', true);
        }
        else
        {
            $("#tipo_necessidade").prop('disabled', false);
        }

        if($("#necessidades_especiais_coparticipante").val() == 0)
        {
            $("#tipo_necessidade_participante").prop('disabled', true);
        }
        else
        {
            $("#tipo_necessidade_participante").prop('disabled', false);
        }

        // Ligar ou desligar o valor do Bolsa Família

        if($("select#bolsa_familia").val() == 1)
        {
            $("input#bolsa_renda").prop('disabled', false);
        }
        else
        {
            $("input#bolsa_renda").prop('disabled', true);
        }

        $("select#bolsa_familia").change(function(){

            if($(this).val() == 1)
            {
                $("input#bolsa_renda").prop('disabled', false);
            }
            else
            {
                $("input#bolsa_renda").prop('disabled', true);   
            }

        });

        // Tooltip do CPF

        $("input#cpf, input#coparticipante\\[cpf\\]").tooltip({ trigger : "manual" });

        //Adicionar DIV Co-participante
        $('#participante .addcoparticipante').click(function(e){
            
            e.preventDefault();

            $('#co-participante').show().removeClass('animated fadeOut').addClass('animated fadeIn');


        })

        // Ocultar div co-participante e limpar campos c/ Sweet alert

        $('#co-participante .remover').click(function(e){
        swal({
            title: "Atenção!",
            text: "Você realmente deseja excluir o(a) co-participante ?",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-cor-perigo modal-content",
            confirmButtonText: "Sim, exclua!",
            cancelButtonClass: "btn-cor-padrao modal-content",
            cancelButtonText: "Cancelar",
            confirmButtonClass: 'btn-cor-perigo modal-content',
            closeOnConfirm: true,
            closeOnCancel: true,
        },
        function(isConfirm){
            if (isConfirm) {

                // swal({

                //           title : "Excluído!",
                //           text  : "O(a) co-participante foi excluído(a) do cadastro.",
                //           type  : "success",
                //           confirmButtonClass: "btn-cor-padrao modal-content"
                      
                //       });

                e.preventDefault()

                $('#co-participante').addClass('animated fadeOut').fadeOut(1000).find("input, select").val('')
            } else {

                // swal({
                //   title : "Cancelado",
                //   text: "O(a) co-participante  permanece no cadastro.",
                //   type : 'error',
                //   confirmButtonClass : "btn-cor-padrao modal-content",
                // });

            }
        })
        })

        //Adicionar DIV Dependentes
        $('#participante .adddependentes').click(function(e){
            
            e.preventDefault();

            $('#dependentes').show().removeClass('animated fadeOut').addClass('animated fadeIn');


        })

        // Ocultar div Dependentes e limpar campos c/ Sweet alert

        $('#dependentes .remover').click(function(e){
        swal({
            title: "Atenção!",
            text: "Você realmente deseja excluir todos os dependentes ?",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-cor-perigo modal-content",
            confirmButtonText: "Sim, exclua!",
            cancelButtonClass: "btn-cor-padrao modal-content",
            cancelButtonText: "Cancelar",
            confirmButtonClass: 'btn-cor-perigo modal-content',
            closeOnConfirm: true,
            closeOnCancel: true,
        },
        function(isConfirm){
            if (isConfirm) {

                e.preventDefault();

                $('#dependentes').addClass('animated fadeOut').fadeOut(1000).find("input, select").val('');
                $('#dependentes .clone_dependentes').remove();

                // swal({

                //           title : "Excluído!",
                //           text  : "Os dependentes foram excluídos do cadastro.",
                //           type  : "success",
                //           confirmButtonClass: "btn-cor-padrao modal-content"
                      
                //       });
            } else {

                // swal({
                //   title : "Cancelado",
                //   text: "Os dependentes  permanecem no cadastro.",
                //   type : 'error',
                //   confirmButtonClass : "btn-cor-padrao modal-content",
                // });

            }
        })
        })

        // Clonar div panel_dependentes
        $(".clonar").click(function(e){

          e.preventDefault();

          $(".panel_dependentes").clone().removeClass('animated fadeOut').fadeIn().addClass('animated fadeIn')


            // Adicionar a classe clone e remover a classe panel_dependentes

            .addClass("clone_dependentes")
            .removeClass("panel_dependentes hide")

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
                .find("option:first-child").attr('selected', true)

            .parent().parent().parent().find("select[name='dependentes[0][tipo_deficiencia]']")
                .attr("name", "dependentes["+cont+"][tipo_deficiencia]")
                .attr("id", "dependentes["+cont+"][tipo_deficiencia]")
                .find("option:first-child").attr('selected', true)

            .parent().parent().parent().parent().find("select[name='dependentes[0][parentesco]']")
                .attr("name", "dependentes["+cont+"][parentesco]")
                .attr("id", "dependentes["+cont+"][parentesco]")
                .find("option:first-child").attr('selected', true);

            // Incrementar o contador de dependentes
            cont++;
        });

        //Remove animação de criação para funcionar apenas uma vez
        $("#dependentes").on("click", ".removezoom", function(e){
            $(".clone_dependentes").removeClass('animated fadeIn');
        });
        
        // Remover div clonada c/ Sweet Alert
        $("#dependentes").on("click", ".excluir", function(e){

            var self = this;

            e.preventDefault();

            swal({
            title: "Atenção!",
            text: "Você realmente deseja excluir o(a) dependente ?",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-cor-perigo modal-content",
            confirmButtonText: "Sim, exclua!",
            cancelButtonClass: "btn-cor-padrao modal-content",
            cancelButtonText: "Cancelar",
            confirmButtonClass: 'btn-cor-perigo modal-content',
            closeOnConfirm: true,
            closeOnCancel: true,
        },
        function(isConfirm){
            if (isConfirm) {

                $(self).tooltip( "destroy" )

                if ($(self).parent().hasClass('panel_dependentes')){

                    $(self).parent().addClass('animated fadeOut').fadeOut(985).find('input, select').val('')

                    console.log('teste teste 1')

                } else {

                    $(self).parent().addClass('animated fadeOut').fadeOut(985).queue(function() { $(self).parent().remove(); })
                
                    console.log('teste teste 2',self)
                }

                // swal({
                //           title : "Excluído!",
                //           text  : "Os dependentes foram excluídos do cadastro.",
                //           type  : "success",
                //           confirmButtonClass: "btn-cor-padrao modal-content"
                      
                //       });
            } else {

                $(self).tooltip( "destroy" )

                // swal({
                //   title : "Cancelado",
                //   text: "Os dependentes  permanecem no cadastro.",
                //   type : 'error',
                //   confirmButtonClass : "btn-cor-padrao modal-content",
                // });

            }
        })
        })


        // Limpar divs de Dependentes
        $(document).on("click", "a.limpar2", function(e){

          e.preventDefault();

          $(this).parent().parent().parent().find("input, select").val('');

        });

        // Verificar se o CPF já está cadastrado antes do formulário ser enviado

        $("input#cpf, input#coparticipante\\[cpf\\]").blur(function(){

            var input = $(this);

            var cpf = $(this).val();

            // Verificar se o cpf foi preenchido completamente (não existe nenhum "_" )

            if(cpf.indexOf("_") == -1)
            {
                // Fazer a chamada para a função

                $.get("{{ url('/pessoas/verificacpf') }}/"+cpf, function(data){

                    if(data == 1)
                    {
                        $(input).tooltip("show");
                    }
                    else
                    {
                        $(input).tooltip("hide");
                    }

                });
            }

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
                    $("input#logradouro").val(data.logradouro.toUpperCase());
                    $("input.input-bairro").val(data.bairro.toUpperCase());
                    $("input.input-municipio").val(data.localidade.toUpperCase());
                }
                else
                {
                    $("input#coparticipante\\[logradouro\\]").val(data.logradouro.toUpperCase());
                    $("input.bairro-coparticipante").val(data.bairro.toUpperCase());
                    $("input.municipio-coparticipante").val(data.localidade.toUpperCase());
                }

            });

        });

        ////////////////////////////////////// Duplicar o endereço do participante no coparticipante

        $("a.duplicar-endereco").click(function(e){

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

        //////////////////////////////////// Ativar ou desativar o campo "tipo de deficiência"

        
        // Participante
        $("select#necessidades_especiais").change(function(){ 

            if($(this).val() == 1)

                $("#tipo_necessidade").prop("disabled", false); 

            else 
                
                $("#tipo_necessidade").prop("disabled", true); 
        });

        // Co-participante
        $("select#necessidades_especiais_coparticipante").change(function(){

            if($(this).val() == 1)
            {
                $("#tipo_necessidade_coparticipante").prop('disabled', false);
            }
            else
            {
                $("#tipo_necessidade_coparticipante").prop('disabled', true);
            }

        });

        // Dependentes

        // $('.pne_dependentes').each(function(){
        // if ($("select.pne_dependentes").val() == 1)
        // {
        //     $(this).parent().parent().find(".tipo_deficiencia").prop('disabled', false);
        //     console.log('funciona1')
        // }
        // else
        //     {
        //         $(this).parent().parent().find(".tipo_deficiencia").prop('disabled', true);
        //         console.log('funciona2')
        //     }
        // })

        $("#dependentes").on("change", "select.pne_dependentes", function(){

            if($(this).val() == 1)
            {
                $(this).parent().parent().find(".tipo_deficiencia").prop('disabled', false);
                console.log('funciona1')
            }
            else
            {
                $(this).parent().parent().find(".tipo_deficiencia").prop('disabled', true);
                console.log('funciona2')
            }

        });

        // Colocar todos os campos em maiúscula
        $("form#cadastro_pessoa").submit(function(){
            $('input[type=text]').val (function () {
                return this.value.toUpperCase();
            });
        });

    });

  </script>