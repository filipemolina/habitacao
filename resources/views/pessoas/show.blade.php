@extends("layouts.blank")

@section('titulo')

	Informações do Participantes

@endsection

@section("main_container")

<div class="col-md-12 col-sm-12 col-xs-12">


	<div class="col-md-1">
		<button name="submit" class="btn btn-sm  glyphicon glyphicon-arrow-left "></button>
	</div>
	<div class="col-md-10">
		<button name="submit" class="btn btn-sm  glyphicon glyphicon-arrow-right "></button>
	</div>
	<button name="submit" class="btn btn-sm  glyphicon glyphicon-remove "></button>

	<div class="x_title">
		<h2 class="col-md-2"> Informações</h2>
		
		<div class="clearfix"></div>
	</div>


{{-- -------------------------------------Participante---------------------------------------------------- --}}
	<div class="x_panel">
		
		<div class="x_title"> Participante </div>
		
		<div class="x_content">

			<table class="">

				<tread>

					<tr>

						<th class="col-md-1">Nome</th>
						<th>{{ $pessoa->nome }}</th>

					</tr>
				</tread>

				<tbody>

					{{-- CPF, NIS, CTPS e Bolsa Família --}}
					<table class="table ">

						<tbody>

							<tr>

								<th class="col-md-1 table-bordered">CPF</th>
								<th class="col-md-2 no-bold">{{ $pessoa->cpf }}</th>
								<th class="col-md-1 table-bordered">NIS</th>
								<th class="col-md-2 no-bold">{{ $pessoa->nis }}</th>
								<th class="col-md-1	table-bordered">CTPS</th>
								<th class="col-md-2 no-bold">{{ $pessoa->cpf }}</th>
								<th class="col-md-1 table-bordered">Bolsa F.</th>
								<th class="col-md-2 no-bold"> @if ($pessoa->bolsa_familia) sim @else não @endif</th>

							</tr>

							<tr>

								<th></th>
								<th class="semborda"></th>
								<th></th>
								<th class="semborda"></th>
								<th></th>
								<th class="semborda"></th>

							</tr>
						</tbody>
					</table> {{-- FIM CPF, NIS, CTPS e Bolsa Família --}}

					{{-- RG, Orgão e Emissão --}}
					<table class="table ">

						<tbody>

							<tr>

								<th class="col-md-1 table-bordered">RG</th>
								<th class="col-md-2 no-bold">{{ $pessoa->rg }}</th>
								<th class="col-md-1 table-bordered">Orgão</th>
								<th class="col-md-2 no-bold">{{ $pessoa->orgao_emissor_rg }}</th>
								<th class="col-md-1	table-bordered">Emissão</th>
								<th class="col-md-2 no-bold">{{ $pessoa->emissao_rg }}</th>
								<th class="col-md-1 table-borderless"></th>
								<th class="col-md-2 no-bold"></th>

							</tr>

							<tr>

									<th></th>
									<th class="semborda"></th>
									<th></th>
									<th class="semborda"></th>
									<th></th>
									<th class="semborda"></th>

							</tr>
						</tbody>
					</table>{{-- FIM RG, Orgão e Emissão --}}

					{{-- Nascimento, Sexo e Necessidades especiais --}}
					<table class="table ">

							<tbody>

								<tr>

									<th class="col-md-1 table-bordered">Nasc.</th>
									<th class="col-md-2 no-bold">{{ $pessoa->nascimento }}</th>
									<th class="col-md-1 table-bordered">Sexo</th>
									<th class="col-md-2 no-bold">{{ $pessoa->sexo }}</th>
									<th class="col-md-1	table-bordered">N. Espec.</th>
									<th class="col-md-2 no-bold">@if ($pessoa->necessidades_especiais) sim @else não @endif</th>
									<th class="col-md-1 table-borderless"></th>
									<th class="col-md-2 no-bold"></th>

								</tr>

								<tr>

									<th></th>
									<th class="semborda"></th>
									<th></th>
									<th class="semborda"></th>
									<th></th>
									<th class="semborda"></th>

								</tr>
							</tbody>
					</table> {{-- FIM Nascimento, Sexo e Necessidades especiais --}}

					{{-- Logradouro, Número e Complemento --}}
					<table class="table ">

							<tbody>

								<tr>

									<th class="col-md-1 table-bordered">Lograd.</th>
									<th class="col-md-5 no-bold">{{ $pessoa->logradouro }}</th>
									<th class="col-md-1 table-bordered">Número</th>
									<th class="col-md-2 no-bold">{{ $pessoa->numero }}</th>
									<th class="col-md-1	table-bordered">Comp.</th>
									<th class="col-md-2 no-bold">{{ $pessoa->complemento }}</th>
									<th class="col-md-1 table-borderless"></th>
									<th class="col-md-1 no-bold"></th>

								</tr>

								<tr>

									<th></th>
									<th class="semborda"></th>
									<th></th>
									<th class="semborda"></th>
									<th></th>
									<th class="semborda"></th>

								</tr>
							</tbody>
					</table> {{-- FIM Logradouro, Número e Complemento --}}
					
					{{-- Bairro, Munícipio e CEP --}}
					<table class="table ">

							<tbody>

								<tr>

									<th class="col-md-1 table-bordered">Bairro</th>
									<th class="col-md-5 no-bold">{{ $pessoa->bairro }}</th>
									<th class="col-md-1 table-bordered">Munícipio</th>
									<th class="col-md-2 no-bold">{{ $pessoa->municipio }}</th>
									<th class="col-md-1	table-bordered">CEP</th>
									<th class="col-md-2 no-bold">{{ $pessoa->cep }}</th>
									<th class="col-md-1 table-borderless"></th>
									<th class="col-md-1 no-bold"></th>

								</tr>

								<tr>

									<th></th>
									<th class="semborda"></th>
									<th></th>
									<th class="semborda"></th>
									<th></th>
									<th class="semborda"></th>

								</tr>
							</tbody>
					</table> {{-- FIM Bairro, Munícipio e CEP --}}

					{{-- Email, Celular e Telefone --}}
					<table class="table ">

							<tbody>

								<tr>

									<th class="col-md-1 table-bordered">Email</th>
									<th class="col-md-5 no-bold">{{ $pessoa->email }}</th>
									<th class="col-md-1	table-bordered">Telefone</th>
									<th class="col-md-2 no-bold">{{ $pessoa->telefones[1]["numero"] }}</th>
									<th class="col-md-1 table-bordered">Celular</th>
									<th class="col-md-2 no-bold">{{ $pessoa->telefones[0]["numero"] }}</th>
									<th class="col-md-1 table-borderless"></th>
									<th class="col-md-1 no-bold"></th>

								</tr>
								
								<tr>

									<th></th>
									<th class="semborda"></th>
									<th></th>
									<th class="semborda"></th>
									<th></th>
									<th class="semborda"></th>

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

			<table class="">

				<tread>

					<tr>

						<th class="col-md-1">Nome</th>
						<th>{{ $pessoa->coparticipante["nome"] }}</th>

					</tr>
				</tread>

				<tbody>

					{{-- CPF, NIS, CTPS e Bolsa Família --}}
					<table class="table ">

						<tbody>

							<tr>

								<th class="col-md-1 table-bordered">CPF</th>
								<th class="col-md-2 no-bold">{{ $pessoa->coparticipante["cpf"] }}</th>
								<th class="col-md-1 table-bordered">NIS</th>
								<th class="col-md-2 no-bold">{{ $pessoa->coparticipante["nis"] }}</th>
								<th class="col-md-1	table-bordered">CTPS</th>
								<th class="col-md-2 no-bold">{{ $pessoa->coparticipante["cpf"] }}</th>
								<th class="col-md-1 table-bordered">Bolsa F.</th>
								<th class="col-md-2 no-bold">@if ($pessoa->coparticipante["bolsa_familia"]) sim @else não @endif</th>

							</tr>

							<tr>

								<tr>

									<th></th>
									<th class="semborda"></th>
									<th></th>
									<th class="semborda"></th>
									<th></th>
									<th class="semborda"></th>

								</tr>

							</tr>
						</tbody>
					</table> {{-- FIM CPF, NIS, CTPS e Bolsa Família --}}

					{{-- RG, Orgão e Emissão --}}
					<table class="table ">

						<tbody>

							<tr>

								<th class="col-md-1 table-bordered">RG</th>
								<th class="col-md-2 no-bold">{{ $pessoa->coparticipante["rg"] }}</th>
								<th class="col-md-1 table-bordered">Orgão</th>
								<th class="col-md-2 no-bold">{{ $pessoa->coparticipante["orgao_emissor_rg"] }}</th>
								<th class="col-md-1	table-bordered">Emissão</th>
								<th class="col-md-2 no-bold">{{ $pessoa->coparticipante["emissao_rg"] }}</th>
								<th class="col-md-1 table-borderless"></th>
								<th class="col-md-2 no-bold"></th>

							</tr>

							<tr>

									<th></th>
									<th class="semborda"></th>
									<th></th>
									<th class="semborda"></th>
									<th></th>
									<th class="semborda"></th>

							</tr>
						</tbody>
					</table>{{-- FIM RG, Orgão e Emissão --}}

					{{-- Nascimento, Sexo e Necessidades especiais --}}
					<table class="table ">

							<tbody>

								<tr>

									<th class="col-md-1 table-bordered">Nasc.</th>
									<th class="col-md-2 no-bold">{{ $pessoa->coparticipante["nascimento"] }}</th>
									<th class="col-md-1 table-bordered">Sexo</th>
									<th class="col-md-2 no-bold">{{ $pessoa->coparticipante["sexo"] }}</th>
									<th class="col-md-1	table-bordered">N. Espec.</th>
									<th class="col-md-2 no-bold">@if ($pessoa->coparticipante["necessidades_especiais"]) sim @else não @endif</th>
									<th class="col-md-1 table-borderless"></th>
									<th class="col-md-2 no-bold"></th>

								</tr>

								<tr>

									<th></th>
									<th class="semborda"></th>
									<th></th>
									<th class="semborda"></th>
									<th></th>
									<th class="semborda"></th>

								</tr>
							</tbody>
					</table> {{-- FIM Nascimento, Sexo e Necessidades especiais --}}

					{{-- Logradouro, Número e Complemento --}}
					<table class="table ">

							<tbody>

								<tr>

									<th class="col-md-1 table-bordered">Lograd.</th>
									<th class="col-md-5 no-bold">{{ $pessoa->coparticipante["logradouro"] }}</th>
									<th class="col-md-1 table-bordered">Número</th>
									<th class="col-md-2 no-bold">{{ $pessoa->coparticipante["numero"] }}</th>
									<th class="col-md-1	table-bordered">Comp.</th>
									<th class="col-md-2 no-bold">{{ $pessoa->coparticipante["complemento"] }}</th>
									<th class="col-md-1 table-borderless"></th>
									<th class="col-md-1 no-bold"></th>

								</tr>

								<tr>

									<th></th>
									<th class="semborda"></th>
									<th></th>
									<th class="semborda"></th>
									<th></th>
									<th class="semborda"></th>

								</tr>
							</tbody>
					</table> {{-- FIM Logradouro, Número e Complemento --}}
					
					

					{{-- Bairro, Munícipio e CEP --}}
					<table class="table ">

							<tbody>

								<tr>

									<th class="col-md-1 table-bordered">Bairro</th>
									<th class="col-md-5 no-bold">{{ $pessoa->coparticipante["bairro"] }}</th>
									<th class="col-md-1 table-bordered">Munícipio</th>
									<th class="col-md-2 no-bold">{{ $pessoa->coparticipante["municipio"] }}</th>
									<th class="col-md-1	table-bordered">CEP</th>
									<th class="col-md-2 no-bold">{{ $pessoa->coparticipante["cep"] }}</th>
									<th class="col-md-1 table-borderless"></th>
									<th class="col-md-1 no-bold"></th>

								</tr>

								<tr>

									<th></th>
									<th class="semborda"></th>
									<th></th>
									<th class="semborda"></th>
									<th></th>
									<th class="semborda"></th>

								</tr>
							</tbody>
					</table> {{-- FIM Bairro, Munícipio e CEP --}}

					{{-- Email, Celular e Telefone --}}
					<table class="table ">

							<tbody>

								<tr>

									<th class="col-md-1 table-bordered">Email</th>
									<th class="col-md-5 no-bold">{{ $pessoa->coparticipante["email"] }}</th>
									<th class="col-md-1 table-bordered">Celular</th>
									<th class="col-md-2 no-bold">{{ $pessoa->coparticipante["telefones"][0]["numero"] }}</th>
									<th class="col-md-1	table-bordered">Telefone</th>
									<th class="col-md-2 no-bold">{{ $pessoa->coparticipante["telefones"][1]["numero"] }}</th>
									<th class="col-md-1 table-borderless"></th>
									<th class="col-md-1 no-bold"></th>

								</tr>

								<tr>

									<th></th>
									<th class="semborda"></th>
									<th></th>
									<th class="semborda"></th>
									<th></th>
									<th class="semborda"></th>

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
						<table class="table ">

							<tbody>

								<tr>

									<th class="col-md-1 table-bordered">Nasc.</th>
									<th class="col-md-2 no-bold">{{ $dependente["nascimento"] }}</th>
									<th class="col-md-1 table-bordered">Sexo</th>
									<th class="col-md-2 no-bold">{{ $dependente["sexo"]}}</th>
									<th class="col-md-1	table-bordered">Parent.</th>
									<th class="col-md-2 no-bold">{{ $dependente["parentesco"]}}</th>
									<th class="col-md-1	table-bordered">N. Espec.</th>
									<th class="col-md-2 no-bold">@if ($dependente["necessidades_especiais"]) sim @else não @endif</th>

								</tr>

								<tr>

									<th></th>
									<th class="semborda"></th>
									<th></th>
									<th class="semborda"></th>
									<th></th>
									<th class="semborda"></th>

								</tr>
							</tbody>
						</table> {{-- FIM Nascimento, Sexo, Parentesco e Necessidades Especias --}}

					</tbody>

				</table>	
			</div>
		@endforeach
	</div> {{-- FIM x_panel Dependentes --}}

	{{-- -------------------------------------Renda---------------------------------------------------- --}}
	<div class="x_panel">
		
		<div class="x_title"> Renda </div>
			
			<div class="x_content">

				<table >

					
					<tbody>

						{{-- Nascimento, Sexo, Parentesco e Necessidades Especias --}}
						<table class="table">

							<tbody>

								<tr>

									<th class="col-md-1 table-bordered">Renda</th>
									<th class="col-md-2 no-bold">R${{$pessoa->renda_familiar }}</th>
									<th class="col-md-1 table-bordered">Faixa</th>
									<th class="col-md-2 no-bold">{{$faixa}}</th>
									<th class="col-md-1	table-bordered">Ínicio</th>
									<th class="col-md-2 no-bold">{{ $pessoa->tempo_residencia}}</th>
									<th class="col-md-1	table-bordered">Período</th>
									<th class="col-md-2 no-bold">{{$periodo}}</th>

								</tr>
							</tbody>
						</table> {{-- FIM Nascimento, Sexo, Parentesco e Necessidades Especias --}}

					</tbody>

				</table>	
			</div>
	</div> {{-- FIM x_panel Renda --}}

	<div class="col-md-1">
		<button name="submit" class="btn btn-sm  glyphicon glyphicon-arrow-left "></button>
	</div>
	<div class="col-md-10">
		<button name="submit" class="btn btn-sm  glyphicon glyphicon-arrow-right "></button>
	</div>
	<button name="submit" class="btn btn-sm  glyphicon glyphicon-remove "></button>	


</div>


@endsection