@extends("layouts.blank")

@section('titulo')

	Cadastro de Pessoas

@endsection

@section('main_container')

<div class="row">
	
	<div class="x_panel">
		<div class="x_title">
			Cadastro de Pessoa
		</div>
		<div class="x_content">
			
			<form id="cadastro_pessoa" class="form-horizontal">
			
			<div class="form-group">
				<label class="col-md-2 control-label"> Participante </label>
			</div>


 {{-- CPF --}}
<div class="form-group">
  <label class="col-md-2 control-label" for="CPF">CPF</label>  
  <div class="col-md-2">
  <input id="CPF" name="CPF" type="text" placeholder="CPF" class="form-control input-md" required="">
    
  </div>
  </div>

{{-- Nome --}}

<div class="form-group">
  <label class="col-md-2 control-label" for="nome">Nome</label>  
  <div class="col-md-6">
  	<input id="nome" name="nome" type="text" placeholder="Nome" class="form-control input-md" required="">
    
  </div>
</div>



{{-- Sexo e Data de Nascimento --}}

<div class="form-group">

{{-- Sexo   --}}
  <label class="col-md-2 control-label" for="sexo">Sexo</label>
	<div class="col-md-2">
    	<select id="sexo" name="sexo" type="text" placeholder="sexo" class="form-control input-md" required="">
    		<option value="">Sexo</option>
      		<option value="m">Masculino</option>
      		<option value="f">Femino</option>
  		</select>
	
	</div>

{{-- Data de Nascimento --}}

  <label class="col-md-1 control-label" for="data_nascimento">Nascimento</label>  
  <div class="col-md-2">
  <input id="data_nascimento" name="data_nascimento" type="text" placeholder="01/01/2000" class="form-control input-md" required="">
    
  </div>

</div>

<!-- RG-->
<div class="form-group">
  <label class="col-md-2 control-label" for="RG">RG</label>  
  <div class="col-md-2">
  <input id="RG" name="RG" type="text" placeholder="RG" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Data de Emissão do RG-->
<div class="form-group">
  <label class="col-md-2 control-label" for="data_emissao">Data de emissão</label>  
  <div class="col-md-6">
  <input id="data_emissao" name="data_emissao" type="text" placeholder="Data de Emissão" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Orgão Emissor do RG-->
<div class="form-group">
  <label class="col-md-2 control-label" for="orgao_emissor">Orgão Emissor</label>  
  <div class="col-md-6">
  <input id="orgao_emissor" name="orgao_emissor" type="text" placeholder="orgao_emissor" class="form-control input-md" required="">
    
  </div>
</div>

<!-- CEP-->
<div class="form-group">
  <label class="col-md-2 control-label" for="cep">CEP</label>  
  <div class="col-md-2">
  <input id="cep" name="cep" type="text" placeholder="CEP" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Município-->
<div class="form-group">
  
  <label class="col-md-2 control-label" for="municipio">Município</label>
  
  <div class="col-md-2">
    
    <input id="municipio" name="municipio" type="text" placeholder="Município" class="form-control input-md" required="">

  </div>
</div>

<!-- Logradouro ...Av...Rua....etc-->
<div class="form-group">
  <label class="col-md-2 control-label" for="logradouro">Logradouro</label>  
  <div class="col-md-8">
  <input id="logradouro" name="logradouro" type="text" placeholder="Logradouro ...Av...Rua....etc" class="form-control input-md">
    
  </div>
</div>

<!-- Número da residência-->
<div class="form-group">
  <label class="col-md-2 control-label" for="numero">Numero</label>  
  <div class="col-md-2">
  <input id="numero" name="numero" type="text" placeholder="Numero" class="form-control input-md">
    
  </div>
</div>

<!-- Bairro-->
<div class="form-group">
  <label class="col-md-2 control-label" for="bairro">Bairro</label>  
  <div class="col-md-6">
  <input id="bairro" name="bairro" type="text" placeholder="Bairro" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="complemento">Complemento</label>  
  <div class="col-md-6">
  <input id="complemento" name="complemento" type="text" placeholder="Complemento" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="telefone1">Telefone 1</label>  
  <div class="col-md-2">
  <input id="telefone1" name="telefone1" type="text" placeholder="Telefone 1" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="telefone2">Telefone 2</label>  
  <div class="col-md-2">
  <input id="telefone2" name="telefone2" type="text" placeholder="Telefone 2" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="email">Email</label>  
  <div class="col-md-6">
  <input id="email" name="email" type="text" placeholder="Email" class="form-control input-md">
    
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-2 control-label" for="button1id"></label>
  <div class="col-md-8">
    <button id="button1id" name="button1id" class="btn btn-success">Salvar</button>
    <button id="Cancelar" name="Cancelar" class="btn btn-danger">Cancelar</button>
  </div>
</div>


</form>



		</div>

			<form class="form-horizontal">

				<!-- CPF-->
<div class="form-group">
  <label class="col-md-2 control-label" for="CPF">CPF</label>  
  <div class="col-md-6">
  <input name="CPF" type="text" placeholder="CPF" class="form-control input-md" required="">
    
  </div>
</div>
			</form>
	</div>
</div>

@endsection

@push('scripts')

		{{-- Script para máscara numérica. Ex.: CPF, RG --}}
        <script src="{{ asset("js/jquery.inputmask.bundle.min.js") }}"></script>

	{{-- Máscarasa dos campos CPF e RG --}}

	<script type="text/javascript">
		$(document).ready(function(){  

			$("#CPF").inputmask("999.999.999-99");
			$("#RG").inputmask("99.999.999-9");

		});

	</script>
@endpush