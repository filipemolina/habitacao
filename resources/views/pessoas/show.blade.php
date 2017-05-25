@extends("layouts.blank")

@section('titulo')

	Informações do Participantes

@endsection

@section("main_container")

<div class="col-md-12 col-sm-12 col-xs-12">

	<div class="x_title">
		<h2> Informações</h2>
		<div class="clearfix"></div>
	</div>


{{-- -------------------------------------Participante---------------------------------------------------- --}}
	<div class="x_panel">
		
		<div class="x_title"> Participante </div>
		
		<div class="x_content">

			<table>

				<tread>

					<tr>

						<th class="col-md-1">Nome</th>
						<th>{{ $pessoa->nome }}</th>

					</tr>
				</tread>

				<tbody>

					{{-- CPF, NIS, CTPS e Bolsa Família --}}
					<table class="table">

						<tbody>

							<tr>

								<th class="col-md-1 table-bordered">CPF</th>
								<th class="col-md-2">{{ $pessoa->cpf }}</th>
								<th class="col-md-1 table-bordered">NIS</th>
								<th class="col-md-2">{{ $pessoa->nis }}</th>
								<th class="col-md-1	table-bordered">CTPS</th>
								<th class="col-md-2">{{ $pessoa->cpf }}</th>
								<th class="col-md-1 table-bordered">Bolsa F.</th>
								<th class="col-md-2">{{ $pessoa->nis }}</th>

							</tr>
						</tbody>
					</table> {{-- FIM CPF, NIS, CTPS e Bolsa Família --}}

					{{-- RG, Orgão e Emissão --}}
					<table class="table">

						<tbody>

							<tr>

								<th class="col-md-1 table-bordered">RG</th>
								<th class="col-md-2">{{ $pessoa->rg }}</th>
								<th class="col-md-1 table-bordered">Orgão</th>
								<th class="col-md-2">{{ $pessoa->orgao_emissor_rg }}</th>
								<th class="col-md-1	table-bordered">Emissão</th>
								<th class="col-md-2">{{ $pessoa->emissao_rg }}</th>
								<th class="col-md-1 table-borderless"></th>
								<th class="col-md-2"></th>

							</tr>
						</tbody>
					</table>{{-- FIM RG, Orgão e Emissão --}}

					{{-- Nascimento, Sexo e Necessidades especiais --}}
					<table class="table">

							<tbody>

								<tr>

									<th class="col-md-1 table-bordered">Nasc.</th>
									<th class="col-md-2">{{ $pessoa->nascimento }}</th>
									<th class="col-md-1 table-bordered">Sexo</th>
									<th class="col-md-2">{{ $pessoa->sexo }}</th>
									<th class="col-md-1	table-bordered">N. Espec.</th>
									<th class="col-md-2">{{ $pessoa->necessidades_especiais }}</th>
									<th class="col-md-1 table-borderless"></th>
									<th class="col-md-2"></th>

								</tr>
							</tbody>
					</table> {{-- FIM Nascimento, Sexo e Necessidades especiais --}}

					{{-- Bairro, Munícipio e CEP --}}
					<table class="table">

							<tbody>

								<tr>

									<th class="col-md-1 table-bordered">Lograd.</th>
									<th class="col-md-2">{{ $pessoa->logradouro }}</th>
									<th class="col-md-1 table-bordered">Número</th>
									<th class="col-md-2">{{ $pessoa->numero }}</th>
									<th class="col-md-1	table-bordered">Comp.</th>
									<th class="col-md-2">{{ $pessoa->complemento }}</th>
									<th class="col-md-1 table-borderless"></th>
									<th class="col-md-2"></th>

								</tr>
							</tbody>
					</table> {{-- FIM Bairro, Munícipio e CEP --}}
					
					

					{{-- Bairro, Munícipio e CEP --}}
					<table class="table">

							<tbody>

								<tr>

									<th class="col-md-1 table-bordered">Bairro</th>
									<th class="col-md-2">{{ $pessoa->bairro }}</th>
									<th class="col-md-1 table-bordered">Munícipio</th>
									<th class="col-md-2">{{ $pessoa->municipio }}</th>
									<th class="col-md-1	table-bordered">CEP</th>
									<th class="col-md-2">{{ $pessoa->cep }}</th>
									<th class="col-md-1 table-borderless"></th>
									<th class="col-md-2"></th>

								</tr>
							</tbody>
					</table> {{-- FIM Bairro, Munícipio e CEP --}}

					{{-- Email, Celular e Telefone --}}
					<table class="table">

							<tbody>

								<tr>

									<th class="col-md-1 table-bordered">Email</th>
									<th class="col-md-2">{{ $pessoa->email }}</th>
									<th class="col-md-1 table-bordered">Celular</th>
									<th class="col-md-2">{{ $pessoa->telefones[0]["numero"] }}</th>
									<th class="col-md-1	table-bordered">Telefone</th>
									<th class="col-md-2">{{ $pessoa->telefones[1]["numero"] }}</th>
									<th class="col-md-1 table-borderless"></th>
									<th class="col-md-2"></th>

								</tr>
							</tbody>
					</table> {{-- FIM Email, Celular e Telefone --}}


				</tbody>

			</table>	
		</div>
	</div> {{-- FIM x_panel Participante --}}

	{{-- -------------------------------------Co-Participante---------------------------------------------------- --}}
	<div class="x_panel">
		
		<div class="x_title"> Co-participante </div>
		
		<div class="x_content">

			<table>

				<tread>

					<tr>

						<th class="col-md-1">Nome</th>
						<th>{{ $pessoa->coparticipante["nome"] }}</th>

					</tr>
				</tread>

				<tbody>

					{{-- CPF, NIS, CTPS e Bolsa Família --}}
					<table class="table">

						<tbody>

							<tr>

								<th class="col-md-1 table-bordered">CPF</th>
								<th class="col-md-2">{{ $pessoa->coparticipante["cpf"] }}</th>
								<th class="col-md-1 table-bordered">NIS</th>
								<th class="col-md-2">{{ $pessoa->coparticipante["nis"] }}</th>
								<th class="col-md-1	table-bordered">CTPS</th>
								<th class="col-md-2">{{ $pessoa->coparticipante["cpf"] }}</th>
								<th class="col-md-1 table-bordered">Bolsa F.</th>
								<th class="col-md-2">{{ $pessoa->coparticipante["nis"] }}</th>

							</tr>
						</tbody>
					</table> {{-- FIM CPF, NIS, CTPS e Bolsa Família --}}

					{{-- RG, Orgão e Emissão --}}
					<table class="table">

						<tbody>

							<tr>

								<th class="col-md-1 table-bordered">RG</th>
								<th class="col-md-2">{{ $pessoa->coparticipante["rg"] }}</th>
								<th class="col-md-1 table-bordered">Orgão</th>
								<th class="col-md-2">{{ $pessoa->coparticipante["orgao_emissor_rg"] }}</th>
								<th class="col-md-1	table-bordered">Emissão</th>
								<th class="col-md-2">{{ $pessoa->coparticipante["emissao_rg"] }}</th>
								<th class="col-md-1 table-borderless"></th>
								<th class="col-md-2"></th>

							</tr>
						</tbody>
					</table>{{-- FIM RG, Orgão e Emissão --}}

					{{-- Nascimento, Sexo e Necessidades especiais --}}
					<table class="table">

							<tbody>

								<tr>

									<th class="col-md-1 table-bordered">Nasc.</th>
									<th class="col-md-2">{{ $pessoa->coparticipante["nascimento"] }}</th>
									<th class="col-md-1 table-bordered">Sexo</th>
									<th class="col-md-2">{{ $pessoa->coparticipante["sexo"] }}</th>
									<th class="col-md-1	table-bordered">N. Espec.</th>
									<th class="col-md-2">{{ $pessoa->coparticipante["necessidades_especiais"] }}</th>
									<th class="col-md-1 table-borderless"></th>
									<th class="col-md-2"></th>

								</tr>
							</tbody>
					</table> {{-- FIM Nascimento, Sexo e Necessidades especiais --}}

					{{-- Bairro, Munícipio e CEP --}}
					<table class="table">

							<tbody>

								<tr>

									<th class="col-md-1 table-bordered">Lograd.</th>
									<th class="col-md-2">{{ $pessoa->coparticipante["logradouro"] }}</th>
									<th class="col-md-1 table-bordered">Número</th>
									<th class="col-md-2">{{ $pessoa->coparticipante["numero"] }}</th>
									<th class="col-md-1	table-bordered">Comp.</th>
									<th class="col-md-2">{{ $pessoa->coparticipante["complemento"] }}</th>
									<th class="col-md-1 table-borderless"></th>
									<th class="col-md-2"></th>

								</tr>
							</tbody>
					</table> {{-- FIM Bairro, Munícipio e CEP --}}
					
					

					{{-- Bairro, Munícipio e CEP --}}
					<table class="table">

							<tbody>

								<tr>

									<th class="col-md-1 table-bordered">Bairro</th>
									<th class="col-md-2">{{ $pessoa->coparticipante["bairro"] }}</th>
									<th class="col-md-1 table-bordered">Munícipio</th>
									<th class="col-md-2">{{ $pessoa->coparticipante["municipio"] }}</th>
									<th class="col-md-1	table-bordered">CEP</th>
									<th class="col-md-2">{{ $pessoa->coparticipante["cep"] }}</th>
									<th class="col-md-1 table-borderless"></th>
									<th class="col-md-2"></th>

								</tr>
							</tbody>
					</table> {{-- FIM Bairro, Munícipio e CEP --}}

					{{-- Email, Celular e Telefone --}}
					<table class="table">

							<tbody>

								<tr>

									<th class="col-md-1 table-bordered">Email</th>
									<th class="col-md-2">{{ $pessoa->coparticipante["email"] }}</th>
									<th class="col-md-1 table-bordered">Celular</th>
									<th class="col-md-2">{{ $pessoa->coparticipante["telefones"][0]["numero"] }}</th>
									<th class="col-md-1	table-bordered">Telefone</th>
									<th class="col-md-2">{{ $pessoa->coparticipante["telefones"][1]["numero"] }}</th>
									<th class="col-md-1 table-borderless"></th>
									<th class="col-md-2"></th>

								</tr>
							</tbody>
					</table> {{-- FIM Email, Celular e Telefone --}}


				</tbody>

			</table>	
		</div>
	</div> {{-- FIM x_panel Co-Participante --}}

	{{-- -------------------------------------Dependentes---------------------------------------------------- --}}
	<div class="x_panel">
		
		<div class="x_title"> Dependente(s) </div>

		@foreach($pessoa->dependentes as $dependente)
		
			<div class="x_content">

				<table>

					<tread>

						<tr>

							<th class="col-md-1">Nome</th>
							<th>{{ $dependente["nome"] }}</th>

						</tr>
					</tread>

					<tbody>

						{{-- Nascimento, Sexo, Parentesco e Necessidades Especias --}}
						<table class="table">

							<tbody>

								<tr>

									<th class="col-md-1 table-bordered">Nasc.</th>
									<th class="col-md-2">{{ $dependente["nascimento"] }}</th>
									<th class="col-md-1 table-bordered">Sexo</th>
									<th class="col-md-2">{{ $pessoa->dependente["sexo"]}}</th>
									<th class="col-md-1	table-bordered">Parent.</th>
									<th class="col-md-2">{{ $pessoa->dependente["parentesco"]}}</th>
									<th class="col-md-1	table-bordered">N. Espec.</th>
									<th class="col-md-2">{{ $pessoa->dependente["necessidades_especiais"]}}</th>

								</tr>
							</tbody>
						</table> {{-- FIM Nascimento, Sexo, Parentesco e Necessidades Especias --}}

					</tbody>

				</table>	
			</div>
		@endforeach
	</div> {{-- FIM x_panel Dependentes --}}



</div>


@endsection