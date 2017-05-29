@extends("layouts.blank")

@section('titulo')

	Informações do Participantes

@endsection

@section("main_container")


{{-- DIV Master --}}
<div class="col-md-12 col-sm-12 col-xs-12">

<!-- Botão para chamar o MODAL precisa ser removido -->
<button type="button" class="btn btn-info btn" data-toggle="modal" data-target="#modal_pessoas_show">Open Modal</button>

<!-- Modal Fade-->
<div id="modal_pessoas_show" class="modal fade" role="dialog">

	<div class="modal-dialog modal-lg">
		
		<a href="" class="btn btn-circulo cor-padrao glyphicon glyphicon-remove" data-dismiss="modal"></a>
		<a href="" class="btn btn-circulo cor-padrao glyphicon glyphicon-print"></a>
		<a href="" class="btn btn-circulo btn-warning fa fa-pencil"></a>
		<a href="" class="btn btn-circulo btn-danger fa fa-trash"></a>
      	
      	{{-- Título --}}
      	<div class="modal-header modal-content x_panel">
        	<h4 class="modal-title">Informações</h4>
      	</div>

		{{-- -------------------------------------Participante---------------------------------------------------- --}}
		<div class="x_panel modal-content">
			
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
									<th class="col-md-2 no-bold semborda">{{ $pessoa->cpf }}</th>
									<th class="col-md-1 table-bordered">NIS</th>
									<th class="col-md-2 no-bold semborda">{{ $pessoa->nis }}</th>
									<th class="col-md-1	table-bordered">CTPS</th>
									<th class="col-md-2 no-bold semborda">{{ $pessoa->cpf }}</th>
									<th class="col-md-1 table-bordered">Bolsa F.</th>
									<th class="col-md-2 no-bold semborda"> @if ($pessoa->bolsa_familia) sim @else não @endif</th>

								</tr>

								<tr>

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
									<th class="col-md-2 no-bold semborda">{{ $pessoa->rg }}</th>
									<th class="col-md-1 table-bordered">Orgão</th>
									<th class="col-md-2 no-bold semborda">{{ $pessoa->orgao_emissor_rg }}</th>
									<th class="col-md-1	table-bordered">Emis.</th>
									<th class="col-md-2 no-bold semborda">{{ $pessoa->emissao_rg }}</th>
									<th class="col-md-1 semborda"></th>
									<th class="col-md-2 semborda"></th>

								</tr>

								<tr>

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
										<th class="col-md-2 no-bold semborda">{{ $pessoa->nascimento }}</th>
										<th class="col-md-1 table-bordered">Sexo</th>
										<th class="col-md-2 no-bold semborda">{{ $pessoa->sexo }}</th>
										<th class="col-md-1	table-bordered">Defi.</th>
										<th class="col-md-2 semborda">@if ($pessoa->necessidades_especiais) sim @else não @endif</th>
										<th class="col-md-1 semborda"></th>
										<th class="col-md-2 semborda"></th>

									</tr>

									<tr>

										<th></th>
										<th class="semborda"></th>

									</tr>
								</tbody>
						</table> {{-- FIM Nascimento, Sexo e Necessidades especiais --}}

						{{-- Logradouro, Número e Complemento --}}
						<table class="table ">

								<tbody>

									<tr>

										<th class="col-md-1 table-bordered">Logr.</th>
										<th class="col-md-5 no-bold semborda">{{ $pessoa->logradouro }}</th>
										<th class="col-md-1 table-bordered">Num.</th>
										<th class="col-md-2 no-bold semborda">{{ $pessoa->numero }}</th>
										<th class="col-md-1	table-bordered">Comp.</th>
										<th class="col-md-2 no-bold semborda">{{ $pessoa->complemento }}</th>
										<th class="col-md-1 semborda"></th>
										<th class="col-md-1 semborda"></th>

									</tr>

									<tr>

										<th></th>
										<th class="semborda"></th>

									</tr>
								</tbody>
						</table> {{-- FIM Logradouro, Número e Complemento --}}
						
						{{-- Bairro, Município e CEP --}}
						<table class="table ">

								<tbody>

									<tr>

										<th class="col-md-1 table-bordered">Bairro</th>
										<th class="col-md-5 no-bold semborda">{{ $pessoa->bairro }}</th>
										<th class="col-md-1 table-bordered">Munic.</th>
										<th class="col-md-2 no-bold semborda">{{ $pessoa->municipio }}</th>
										<th class="col-md-1	table-bordered">CEP</th>
										<th class="col-md-2 no-bold semborda">{{ $pessoa->cep }}</th>
										<th class="col-md-1 semborda"></th>
										<th class="col-md-1 semborda"></th>

									</tr>

									<tr>

										<th></th>
										<th class="semborda"></th>

									</tr>
								</tbody>
						</table> {{-- FIM Bairro, Município e CEP --}}

						{{-- Email, Celular e Telefone --}}
						<table class="table ">

								<tbody>

									<tr>

										<th class="col-md-1 table-bordered">Email</th>
										<th class="col-md-5 no-bold semborda">{{ $pessoa->email }}</th>
										<th class="col-md-1	table-bordered">Tel.</th>
										<th class="col-md-2 no-bold semborda">{{ $pessoa->telefones[1]["numero"] }}</th>
										<th class="col-md-1 table-bordered">Cel.</th>
										<th class="col-md-2 semborda">{{ $pessoa->telefones[0]["numero"] }}</th>
										<th class="col-md-1 semborda"></th>
										<th class="col-md-1 semborda"></th>

									</tr>
									
									<tr>

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
		<div class="x_panel modal-content">
			
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
									<th class="col-md-2 no-bold semborda">{{ $pessoa->coparticipante["cpf"] }}</th>
									<th class="col-md-1 table-bordered">NIS</th>
									<th class="col-md-2 no-bold semborda">{{ $pessoa->coparticipante["nis"] }}</th>
									<th class="col-md-1	table-bordered">CTPS</th>
									<th class="col-md-2 no-bold semborda">{{ $pessoa->coparticipante["cpf"] }}</th>
									<th class="col-md-1 table-bordered">Bolsa F.</th>
									<th class="col-md-2 no-bold semborda">@if ($pessoa->coparticipante["bolsa_familia"]) sim @else não @endif</th>

								</tr>

								<tr>

									<tr>

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
									<th class="col-md-2 no-bold semborda">{{ $pessoa->coparticipante["rg"] }}</th>
									<th class="col-md-1 table-bordered">Orgão</th>
									<th class="col-md-2 no-bold semborda">{{ $pessoa->coparticipante["orgao_emissor_rg"] }}</th>
									<th class="col-md-1	table-bordered">Emis.</th>
									<th class="col-md-2 no-bold semborda">{{ $pessoa->coparticipante["emissao_rg"] }}</th>
									<th class="col-md-1 semborda"></th>
									<th class="col-md-2 semborda"></th>

								</tr>

								<tr>

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
										<th class="col-md-2 no-bold semborda">{{ $pessoa->coparticipante["nascimento"] }}</th>
										<th class="col-md-1 table-bordered">Sexo</th>
										<th class="col-md-2 no-bold semborda">{{ $pessoa->coparticipante["sexo"] }}</th>
										<th class="col-md-1	table-bordered">Defi.</th>
										<th class="col-md-2 no-bold semborda">@if ($pessoa->coparticipante["necessidades_especiais"]) sim @else não @endif</th>
										<th class="col-md-1 semborda"></th>
										<th class="col-md-2 semborda"></th>

									</tr>

									<tr>

										<th></th>
										<th class="semborda"></th>

									</tr>
								</tbody>
						</table> {{-- FIM Nascimento, Sexo e Necessidades especiais --}}

						{{-- Logradouro, Número e Complemento --}}
						<table class="table ">

								<tbody>

									<tr>

										<th class="col-md-1 table-bordered">Logr.</th>
										<th class="col-md-5 no-bold semborda">{{ $pessoa->coparticipante["logradouro"] }}</th>
										<th class="col-md-1 table-bordered">Num.</th>
										<th class="col-md-2 no-bold semborda">{{ $pessoa->coparticipante["numero"] }}</th>
										<th class="col-md-1	table-bordered">Comp.</th>
										<th class="col-md-2 no-bold semborda">{{ $pessoa->coparticipante["complemento"] }}</th>
										<th class="col-md-1 semborda"></th>
										<th class="col-md-1 semborda"></th>

									</tr>

									<tr>

										<th></th>
										<th class="semborda"></th>

									</tr>
								</tbody>
						</table> {{-- FIM Logradouro, Número e Complemento --}}
						
						

						{{-- Bairro, Município e CEP --}}
						<table class="table ">

								<tbody>

									<tr>

										<th class="col-md-1 table-bordered">Bairro</th>
										<th class="col-md-5 no-bold semborda">{{ $pessoa->coparticipante["bairro"] }}</th>
										<th class="col-md-1 table-bordered">Munic.</th>
										<th class="col-md-2 no-bold semborda">{{ $pessoa->coparticipante["municipio"] }}</th>
										<th class="col-md-1	table-bordered">CEP</th>
										<th class="col-md-2 no-bold semborda">{{ $pessoa->coparticipante["cep"] }}</th>
										<th class="col-md-1 semborda"></th>
										<th class="col-md-1 semborda"></th>

									</tr>

									<tr>

										<th></th>
										<th class="semborda"></th>

									</tr>
								</tbody>
						</table> {{-- FIM Bairro, Município e CEP --}}

						{{-- Email, Celular e Telefone --}}
						<table class="table ">

								<tbody>

									<tr>

										<th class="col-md-1 table-bordered">Email</th>
										<th class="col-md-5 no-bold semborda">{{ $pessoa->coparticipante["email"] }}</th>
										<th class="col-md-1 table-bordered">Cel.</th>
										<th class="col-md-2 no-bold semborda">{{ $pessoa->coparticipante["telefones"][0]["numero"] }}</th>
										<th class="col-md-1	table-bordered">Tel.</th>
										<th class="col-md-2 no-bold semborda">{{ $pessoa->coparticipante["telefones"][1]["numero"] }}</th>
										<th class="col-md-1 semborda"></th>
										<th class="col-md-1 semborda"></th>

									</tr>

									<tr>

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
		<div class="x_panel modal-content">
			
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
										<th class="col-md-2 no-bold semborda">{{ $dependente["nascimento"] }}</th>
										<th class="col-md-1 table-bordered">Sexo</th>
										<th class="col-md-2 no-bold semborda">{{ $dependente["sexo"]}}</th>
										<th class="col-md-1	table-bordered">Parent.</th>
										<th class="col-md-2 no-bold semborda">{{ $dependente["parentesco"]}}</th>
										<th class="col-md-1	table-bordered">Defi.</th>
										<th class="col-md-2 no-bold semborda">@if ($dependente["necessidades_especiais"]) sim @else não @endif</th>

									</tr>

									<tr>

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
		<div class="x_panel modal-content">
			
			<div class="x_title"> Renda </div>
				
				<div class="x_content">

					<table >

						
						<tbody>

							{{-- Nascimento, Sexo, Parentesco e Necessidades Especias --}}
							<table class="table">

								<tbody>

									<tr>

										<th class="col-md-1 table-bordered">Renda</th>
										<th class="col-md-2 no-bold semborda">R${{$pessoa->renda_familiar }}</th>
										<th class="col-md-1 table-bordered">Faixa</th>
										<th class="col-md-2 no-bold semborda">{{$faixa}}</th>
										<th class="col-md-1	table-bordered">Ínicio</th>
										<th class="col-md-2 no-bold semborda">{{ $pessoa->tempo_residencia}}</th>
										<th class="col-md-1	table-bordered">Período</th>
										<th class="col-md-2 no-bold semborda">{{$periodo}}</th>

									</tr>
								</tbody>
							</table> {{-- FIM Nascimento, Sexo, Parentesco e Necessidades Especias --}}

						</tbody>

					</table>	
				</div>
		</div> {{-- FIM x_panel Renda --}}

		<a href="" class="btn btn-circulo cor-padrao glyphicon glyphicon-remove" data-dismiss="modal"></a>
		<a href="" class="btn btn-circulo cor-padrao glyphicon glyphicon-print"></a>
		<a href="" class="btn btn-circulo btn-warning fa fa-pencil"></a>
		<a href="" class="btn btn-circulo btn-danger fa fa-trash"></a>

	</div> {{-- FIM Modal Dialog --}}


</div> {{-- FIM Modal Fade --}}

</div> {{-- FIM DIV Master --}}


@endsection