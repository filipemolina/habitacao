<script>
	
$(function(){

	// Selecionar campos do formulário de acordo com o tipo de formulário escolhido

	$("select#ordem_relatorio").change(function(){

		// Idade

		if($(this).val() == "idade"){

			$("[name='cabecalhos\\[idade\\]']").prop('checked', true); 

		} 

		// Sexo

		if($(this).val() == "sexo"){ 

			$("[name='cabecalhos\\[sexo\\]']").prop('checked', true); 

		}

		// Dependentes

		if($(this).val() == "dependentes"){ 

			$("[name='cabecalhos\\[dependentes\\]']").prop('checked', true); 

		} 

		// Bairro

		if($(this).val() == "bairro"){ 

			$("[name='cabecalhos\\[bairro\\]']").prop('checked', true); 

		} 

		// Bairro

		if($(this).val() == "faixa"){ 

			$("[name='cabecalhos\\[faixa\\]']").prop('checked', true); 
			$("[name='cabecalhos\\[renda_familiar\\]']").prop('checked', true); 

		} 

	});

});

</script>