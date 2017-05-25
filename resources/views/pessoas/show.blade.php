@extends("layouts.blank")

@section('titulo')

	Informações do Participantes

@endsection

@section("main_container")

<div class="col-md-12 col-sm-12 col-xs-12">

	<div class="x_title">
		<h2> Informações do Participantes</h2>
		<div class="clearfix"></div>
	</div>
	
	<div class="x_panel">
		
		<div class="x_title"> Participante </div>
		
		<div class="x_content">

			Nome:					{{ $pessoa->nome }} <br>

			CPF:					{{ $pessoa->cpf }}<br>
			NIS: 					{{ $pessoa->nis }}<br>
			CTPS: 					{{ $pessoa->CTPS }}<br>
			Bolsa família:			{{ $pessoa->bolsa_familia}} <br><br>

			RG:						{{ $pessoa->rg}}<br>
			Orgão:					{{ $pessoa->orgao_emissor_rg}}<br>
			Emissão:				{{ $pessoa->emissao_rg}} <br><br>

			Nascimento:				{{ $pessoa->nascimento}}<br>
			Sexo:					{{ $pessoa->sexo}}<br>
			Necessidades Especias:	{{ $pessoa->necessidades_especiais}} <br><br>

			Logradouro:				{{ $pessoa->logradouro}}<br>
			Número:					{{ $pessoa->numero}}<br>
			Complementos:			{{ $pessoa->complemento}} <br><br>

			Bairro:					{{ $pessoa->bairro}}<br>
			Munícipio:				{{ $pessoa->municipio}}<br>		
			CEP:					{{ $pessoa->cep}} <br><br>
			
			Email:					{{ $pessoa->email}}<br>
			Celular:				{{ $pessoa->telefones[0]["numero"] }}<br>
			Telefone:				{{ $pessoa->telefones[1]["numero"] }}



		</div>
	</div>

	<div class="x_panel">
		
		<div class="x_title"> Co-Participante </div>
		
		<div class="x_content">

			Nome:					{{ $pessoa->coparticipante["nome"] }} <br>

			CPF:					{{ $pessoa->coparticipante["cpf"] }}<br>
			NIS: 					{{ $pessoa->coparticipante["nis"] }}<br>
			CTPS: 					{{ $pessoa->coparticipante["CTPS"] }}<br>
			Bolsa família:			{{ $pessoa->coparticipante["bolsa_familia"]}} <br><br>

			RG:						{{ $pessoa->coparticipante["rg"]}}<br>
			Orgão:					{{ $pessoa->coparticipante["orgao_emissor_rg"]}}<br>
			Emissão:				{{ $pessoa->coparticipante["emissao_rg"]}} <br><br>

			Nascimento:				{{ $pessoa->coparticipante["nascimento"]}}<br>
			Sexo:					{{ $pessoa->coparticipante["sexo"]}}<br>
			Necessidades Especias:	{{ $pessoa->coparticipante["necessidades_especiais"]}} <br><br>

			Logradouro:				{{ $pessoa->coparticipante["logradouro"]}}<br>
			Número:					{{ $pessoa->coparticipante["numero"]}}<br>
			Complementos:			{{ $pessoa->coparticipante["complemento"]}} <br><br>

			Bairro:					{{ $pessoa->coparticipante["bairro"]}}<br>
			Munícipio:				{{ $pessoa->coparticipante["municipio"]}}<br>		
			CEP:					{{ $pessoa->coparticipante["cep"]}} <br><br>
			
			Email:					{{ $pessoa->coparticipante["email"]}}<br>
			Celular:				{{ $pessoa->coparticipante["telefones"][0]["numero"] }}<br>
			Telefone:				{{ $pessoa->coparticipante["telefones"][1]["numero"] }}



		</div>
	</div>

	<div class="x_panel">
		
		<div class="x_title"> Dependentes </div>
		
		<div class="x_content">

			Nome:					{{ $pessoa->dependentes[0]["nome"] }} <br>

			Nascimento:				{{ $pessoa->dependentes[0]["nascimento"]}}<br>
			Sexo:					{{ $pessoa->coparticipante["sexo"]}}<br>
			Necessidades Especias:	{{ $pessoa->coparticipante["necessidades_especiais"]}} <br><br>

			Logradouro:				{{ $pessoa->coparticipante["logradouro"]}}<br>
			Número:					{{ $pessoa->coparticipante["numero"]}}<br>
			Complementos:			{{ $pessoa->coparticipante["complemento"]}} <br><br>

			Bairro:					{{ $pessoa->coparticipante["bairro"]}}<br>
			Munícipio:				{{ $pessoa->coparticipante["municipio"]}}<br>		
			CEP:					{{ $pessoa->coparticipante["cep"]}} <br><br>
			
			Email:					{{ $pessoa->coparticipante["email"]}}<br>
			Celular:				{{ $pessoa->coparticipante["telefones"][0]["numero"] }}<br>
			Telefone:				{{ $pessoa->coparticipante["telefones"][1]["numero"] }}



		</div>
	</div>

</div>


@endsection