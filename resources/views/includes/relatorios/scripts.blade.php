<script>
	
$(function(){

	// Selecionar campos do formulário de acordo com o tipo de formulário escolhido

	$("select#ordem_relatorio").change(function(){

		// Idade

		if($(this).val() == "idade"){ 

			console.log("idade");

			$("[name='cabecalhos\\[idade\\]']").prop('checked', true); 

		} 

		// Sexo

		if($(this).val() == "sexo"){ 

			console.log("sexo");

			$("[name='cabecalhos\\[sexo\\]']").prop('checked', true); 

		}

		// Dependentes

		if($(this).val() == "dependentes"){ 

			console.log("dependentes");

			$("[name='cabecalhos\\[dependentes\\]']").prop('checked', true); 

		} 

		// Bairro

		if($(this).val() == "bairro"){ 

			console.log("bairro");

			$("[name='cabecalhos\\[bairro\\]']").prop('checked', true); 

		} 

	});

});

</script>