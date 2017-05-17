<script type="text/javascript">

    // Contador de dependentes

    var cont = 1;
  
    {{-- Máscarasa dos campos CPF e RG --}}
    $(function(){
      $(".cpf").inputmask("999.999.999-99");
      $(".rg").inputmask("99.999.999-9");
      $(".cep").inputmask("99-999.999");
      $(".celular").inputmask("(99)99999-9999");
      $(".telefone").inputmask("(99)9999-9999");
      $(".cash").inputmask("R$ 99999,99");
      $(".nis").inputmask("999.999999.99-99");
      $(".carteira").inputmask("9999999 999-9");
    });

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
            .val("");

        // Incrementar o contador de dependentes

        cont++;
    });
    
    // Remover div clonada  
    $("#dependentes").on("click", "button.excluir", function(e){

      e.preventDefault();

      $(this).parent().remove();

    });

  </script>