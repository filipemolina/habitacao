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
			<form class="form-horizontal">

<!-- CPF-->
<div class="form-group">
  <label class="col-md-4 control-label" for="CPF">CPF</label>  
  <div class="col-md-6">
  <input id="CPF" name="CPF" type="text" placeholder="CPF" class="form-control input-md" required="">
    
  </div>
</div>

<!-- RG-->
<div class="form-group">
  <label class="col-md-4 control-label" for="RG">RG</label>  
  <div class="col-md-6">
  <input id="RG" name="RG" type="text" placeholder="RG" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Nome-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nome">Nome</label>  
  <div class="col-md-6">
  <input id="nome" name="nome" type="text" placeholder="Nome" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cep">CEP</label>  
  <div class="col-md-4">
  <input id="cep" name="cep" type="text" placeholder="CEP" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="municipio">Município</label>
  <div class="col-md-8">
    <select id="municipio" name="municipio" class="form-control">
      <option value="1">Espera Feliz - MG</option>
      <option value="2">Carangola - MG</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="logradouro">Logradouro</label>  
  <div class="col-md-8">
  <input id="logradouro" name="logradouro" type="text" placeholder="Logradouro ...Av...Rua....etc" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="bairro">Bairro</label>  
  <div class="col-md-6">
  <input id="bairro" name="bairro" type="text" placeholder="Bairro" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="numero">Numero</label>  
  <div class="col-md-4">
  <input id="numero" name="numero" type="text" placeholder="Numero" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="complemento">Complemento</label>  
  <div class="col-md-6">
  <input id="complemento" name="complemento" type="text" placeholder="Complemento" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="telefone1">Telefone 1</label>  
  <div class="col-md-4">
  <input id="telefone1" name="telefone1" type="text" placeholder="Telefone 1" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="telefone2">Telefone 2</label>  
  <div class="col-md-4">
  <input id="telefone2" name="telefone2" type="text" placeholder="Telefone 2" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>  
  <div class="col-md-6">
  <input id="email" name="email" type="text" placeholder="Email" class="form-control input-md">
    
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="button1id"></label>
  <div class="col-md-8">
    <button id="button1id" name="button1id" class="btn btn-success">Salvar</button>
    <button id="Cancelar" name="Cancelar" class="btn btn-danger">Cancelar</button>
  </div>
</div>


</form>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

@endsection
		</div>
	</div>

</div>

