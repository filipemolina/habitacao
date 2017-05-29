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
							<th></th>

						</tr>
					</tread>

					<tbody>

						{{-- CPF, NIS, CTPS e Bolsa Família --}}
						<table class="table ">

							<tbody>

								<tr>

									<th class="col-md-1 table-bordered">CPF</th>
									<th class="col-md-2 no-bold semborda" id="cpf_modal"></th>
									<th class="col-md-1 table-bordered">NIS</th>
									<th class="col-md-2 no-bold semborda" id="nis_modal"></th>
									<th class="col-md-1	table-bordered">CTPS</th>
									<th class="col-md-2 no-bold semborda"></th>
									<th class="col-md-1 table-bordered">Bolsa F.</th>
									<th class="col-md-2 no-bold semborda"></th>

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
									<th class="col-md-2 no-bold semborda"></th>
									<th class="col-md-1 table-bordered">Orgão</th>
									<th class="col-md-2 no-bold semborda"></th>
									<th class="col-md-1	table-bordered">Emis.</th>
									<th class="col-md-2 no-bold semborda"></th>
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
										<th class="col-md-2 no-bold semborda"></th>
										<th class="col-md-1 table-bordered">Sexo</th>
										<th class="col-md-2 no-bold semborda"></th>
										<th class="col-md-1	table-bordered">Defi.</th>
										<th class="col-md-2 semborda"></th>
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
										<th class="col-md-5 no-bold semborda"></th>
										<th class="col-md-1 table-bordered">Num.</th>
										<th class="col-md-2 no-bold semborda"></th>
										<th class="col-md-1	table-bordered">Comp.</th>
										<th class="col-md-2 no-bold semborda"></th>
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
										<th class="col-md-5 no-bold semborda"></th>
										<th class="col-md-1 table-bordered">Munic.</th>
										<th class="col-md-2 no-bold semborda"></th>
										<th class="col-md-1	table-bordered">CEP</th>
										<th class="col-md-2 no-bold semborda"></th>
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
										<th class="col-md-5 no-bold semborda"></th>
										<th class="col-md-1	table-bordered">Tel.</th>
										<th class="col-md-2 no-bold semborda"></th>
										<th class="col-md-1 table-bordered">Cel.</th>
										<th class="col-md-2 semborda"></th>
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
							<th></th>

						</tr>
					</tread>

					<tbody>

						{{-- CPF, NIS, CTPS e Bolsa Família --}}
						<table class="table ">

							<tbody>

								<tr>

									<th class="col-md-1 table-bordered">CPF</th>
									<th class="col-md-2 no-bold semborda"></th>
									<th class="col-md-1 table-bordered">NIS</th>
									<th class="col-md-2 no-bold semborda"></th>
									<th class="col-md-1	table-bordered">CTPS</th>
									<th class="col-md-2 no-bold semborda"></th>
									<th class="col-md-1 table-bordered">Bolsa F.</th>
									<th class="col-md-2 no-bold semborda"></th>

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
									<th class="col-md-2 no-bold semborda"></th>
									<th class="col-md-1 table-bordered">Orgão</th>
									<th class="col-md-2 no-bold semborda"></th>
									<th class="col-md-1	table-bordered">Emis.</th>
									<th class="col-md-2 no-bold semborda"></th>
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
										<th class="col-md-2 no-bold semborda"></th>
										<th class="col-md-1 table-bordered">Sexo</th>
										<th class="col-md-2 no-bold semborda"></th>
										<th class="col-md-1	table-bordered">Defi.</th>
										<th class="col-md-2 no-bold semborda"></th>
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
										<th class="col-md-5 no-bold semborda"></th>
										<th class="col-md-1 table-bordered">Num.</th>
										<th class="col-md-2 no-bold semborda"></th>
										<th class="col-md-1	table-bordered">Comp.</th>
										<th class="col-md-2 no-bold semborda"></th>
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
										<th class="col-md-5 no-bold semborda"></th>
										<th class="col-md-1 table-bordered">Munic.</th>
										<th class="col-md-2 no-bold semborda"></th>
										<th class="col-md-1	table-bordered">CEP</th>
										<th class="col-md-2 no-bold semborda"></th>
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
										<th class="col-md-5 no-bold semborda"></th>
										<th class="col-md-1 table-bordered">Cel.</th>
										<th class="col-md-2 no-bold semborda"></th>
										<th class="col-md-1	table-bordered">Tel.</th>
										<th class="col-md-2 no-bold semborda"></th>
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

			{{-- Início do Loop --}}
			
				<div class="x_content">

					<table>

						<tread>

							<tr>

								<th class="col-md-1">Nome</th>
								<th></th>

							</tr>
						</tread>

						<tbody>

							{{-- Nascimento, Sexo, Parentesco e Necessidades Especias --}}
							<table class="table ">

								<tbody>

									<tr>

										<th class="col-md-1 table-bordered">Nasc.</th>
										<th class="col-md-2 no-bold semborda"></th>
										<th class="col-md-1 table-bordered">Sexo</th>
										<th class="col-md-2 no-bold semborda"></th>
										<th class="col-md-1	table-bordered">Parent.</th>
										<th class="col-md-2 no-bold semborda"></th>
										<th class="col-md-1	table-bordered">Defi.</th>
										<th class="col-md-2 no-bold semborda"></th>

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
			{{-- Fim do Loop --}}

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
										<th class="col-md-2 no-bold semborda">R$</th>
										<th class="col-md-1 table-bordered">Faixa</th>
										<th class="col-md-2 no-bold semborda"></th>
										<th class="col-md-1	table-bordered">Ínicio</th>
										<th class="col-md-2 no-bold semborda"></th>
										<th class="col-md-1	table-bordered">Período</th>
										<th class="col-md-2 no-bold semborda"></th>

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