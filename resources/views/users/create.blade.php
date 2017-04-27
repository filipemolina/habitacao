@extends("layouts.blank")

@section('titulo')

	Cadastro de Usuários

@endsection

@section("main_container")

<div class="col-md-12 col-sm-12 col-xs-12">

	<div class="x_title">
		<h2> Cadastro de Usuário</h2>
		<div class="clearfix"></div>
	</div>
	
	<div class="x_panel">
		
		<div class="x_title"> Informe os dados </div>
		
		<div class="x_content">

			<form action="" class="form-horizontal" id="form-cadastro-usuario">


				{{-- Campo Nome --}}
				<div class="form-group">

					<label for="nome" class="col-sm-4 control-label">Nome</label>

					<div class="col-sm-4">
						<input name="nome" type="text" class="form-control" id="nome" placeholder="Nome">
					</div>
				</div>

				<!-- Campo Email -->

    			<div class="form-group">

    				<label for="email" class="col-sm-4 control-label">Email</label>

    				<div class="col-sm-4">
     	 				<input name="email" type="email" class="form-control" id="email" placeholder="Email">
    				</div>

   				</div>

   				{{-- Campo Senha --}}

				<div class="form-group">

					<label for="senha" class="col-sm-4 control-label">Senha</label>

					<div class="col-sm-4">
						<input name="senha" type="password" class="form-control" id="senha" placeholder="Senha">
					</div>
				</div>

				{{-- Campo Nova Senha --}}

				<div class="form-group">

					<label for="confirmarsenha" class="col-sm-4 control-label">Confirmar Senha</label>

					<div class="col-sm-4">
						<input name="confirmarsenha" type="password" class="form-control" id="senha" placeholder="Confirmar Senha">

					</div>
				</div>

				{{-- Campo de Seleçao --}}

				<div class="form-group">

					<label for="tipodeusuario" class="col-sm-4 control-label">Tipo de Usuário</label>

					<div class="col-sm-4">
					
						<select name="tipodeususario" class="form-control" id="tipodeususario">
							<option value="">Selecione</option>
							<option value="1">Administrador</option>
							<option value="0">Padrão</option>
						</select>

					</div>
				</div>	
				<div class="form-group" style="text-align: center;">
					<button type="submit" value="submit" class="btn btn-primary">Enviar</button>
				</div>

			</form>



		</div>
	</div>
</div>


@endsection