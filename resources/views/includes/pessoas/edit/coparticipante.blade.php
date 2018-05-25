 {{---------------------------------- CO-Participante ---------------------------------- --}}

			<div class="x_panel modal-content" id="co-participante">
				
				<div class="x_title">
					
					<h2> Co-Participante </h2>

					
					<ul class="nav navbar-right panel_toolbox">
						
							<li>
								<a class="remover" data-toggle="tooltip" title="Remover coparticipante"><i class="fa fa-times btn btn-pn-circulo btn-cor-perigo"></i></a>
							</li>

							<li>
								<a class="collapse-link" data-toggle="tooltip" title="Reduzir / Expandir"><i class="fa fa-chevron-up btn btn-pn-circulo btn-cor-padrao"></i></a>
							</li>

					</ul>

						<div class="clearfix"></div>

				</div> {{-- FIM x_title --}}

				<div class="x_content">

				{{-- CPF --}}
				<label class="col-md-1 control-label" for="coparticipante[cpf]">CPF</label>  
				<div class="col-md-2">
					<input value="{{ $pessoa->coparticipante->cpf or "" }}" id="coparticipante[cpf]" name="coparticipante[cpf]" type="text" placeholder="999.999.999-99" data-inputmask="'mask': '999.999.999-99', 'numericInput': true" class="form-control input-md cpf"><span class="obrigatorio">*</span>
				</div>

				{{-- Nome --}}
				<div class="form-group">
					<label class="col-md-1 control-label" for="coparticipante[nome]">Nome</label>
					<div class="col-md-5">
						<input value="{{ $pessoa->coparticipante->nome or "" }}" id="coparticipante[nome]" name="coparticipante[nome]" type="text" placeholder="Informe o nome" class="form-control input-md nome"><span class="obrigatorio">*</span>
					</div>

					<label class="col-md-1 control-label" for="coparticipante.parentesco" datatoggle="tooltip" title="Parentesco">Parent.</label>
						<div class="col-md-2">
							<select name="coparticipante[parentesco]" id="coparticipante[parentesco]" type="text" placeholder="Necessidades Especiais" class="form-control input-md" >
								<option value="" disabled @if(!old('coparticipante.parentesco')) selected @endif>Selecione...</option>
							<option value="1" @if(old('coparticipante.parentesco') == "1") selected="selected" @endif>Avô(ó)</option>
							<option value="2" @if(old('coparticipante.parentesco') == "2") selected="selected" @endif>Bisavô(ó)</option>
							<option value="3" @if(old('coparticipante.parentesco') == "3") selected="selected" @endif>Bisneto(a)</option>
							<option value="4" @if(old('coparticipante.parentesco') == "4") selected="selected" @endif>Companheiro(a)</option>
							<option value="5" @if(old('coparticipante.parentesco') == "5") selected="selected" @endif>Cônjuge</option>
							<option value="6" @if(old('coparticipante.parentesco') == "6") selected="selected" @endif>Enteado(a)</option>
							<option value="7" @if(old('coparticipante.parentesco') == "7") selected="selected" @endif>Ex-esposa</option>
							<option value="8" @if(old('coparticipante.parentesco') == "8") selected="selected" @endif>Filho(a)</option>
							<option value="9" @if(old('coparticipante.parentesco') == "9") selected="selected" @endif>Irmão(ã)</option>
							<option value="10" @if(old('coparticipante.parentesco') == "10") selected="selected" @endif>Neto(a)</option>
							<option value="11" @if(old('coparticipante.parentesco') == "11") selected="selected" @endif>Pais</option>
							<option value="12" @if(old('coparticipante.parentesco') == "12") selected="selected" @endif>Outras</option>
							</select><span class="obrigatorio">*</span>
						</div>
					</div>
				
				{{-- Sexo, Nascimento, Bolsa familia e Renda bolsa Família --}}
				<div class="form-group">

				{{-- Sexo   --}}
					<label class="col-md-1 control-label" for="coparticipante[sexo]">Sexo</label>
					<div class="col-md-2">
						<select id="coparticipante[sexo]" name="coparticipante[sexo]" type="text" class="form-control input-md">
							<option value="" selected>Selecione...</option>

								@if(count($pessoa->coparticipante) > 0)
		
									<option value="Masculino" @if($pessoa->coparticipante->sexo == "Masculino") selected="selected" @endif>Masculino</option>
									<option value="Feminino" @if($pessoa->coparticipante->sexo == "Feminino") selected="selected" @endif>Feminino</option>
									<option value="Outros" @if($pessoa->coparticipante->sexo == "Outros") selected="selected" @endif>Outros</option>

								@else

									<option value="Masculino">Masculino</option>
									<option value="Feminino">Feminino</option>
									<option value="Outros">Outros</option>

								@endif
						</select><span class="obrigatorio">*</span>
				</div>

				{{-- Data de Nascimento --}}
				<label class="col-md-1 control-label" for="coparticipante[nascimento]" data-toggle="tooltip" title="Data de nascimento">Nasc.</label>
				<div class="col-md-2">
					<input value="{{ $pessoa->coparticipante->nascimento or "" }}" id="coparticipante[nascimento]" name="coparticipante[nascimento]" type="date" placeholder="01 / 01 / 2000" class="form-control input-md global_data"><span class="obrigatorio">*</span>
				</div>

				{{-- Bolsa Família --}}            
				<label class="col-md-1 control-label" for="bolsa_familia" data-toggle="tooltip" title="Co-participante possui bolsa família?">Bolsa F.</label>  
					<div class="col-md-2">
						<select id="coparticipante[bolsa_familia]" name="coparticipante[bolsa_familia]" type="text" class="form-control input-md" >
							<option value="">Selecione...</option>
							
							@if(count($pessoa->coparticipante) > 0)

								<option value="1" @if($pessoa->coparticipante->bolsa_familia == "1") selected="selected" @endif >Possui</option>
								<option value="0" @if($pessoa->coparticipante->bolsa_familia == "0") selected="selected" @endif >Não possui</option>

							@else

								<option value="1">Possui</option>
								<option value="0">Não possui</option>

							@endif
						</select><span class="obrigatorio">*</span>
					</div>
					
					{{-- Renda bolsa familia --}}
					<div class="col-md-2">
						<input value="{{ $pessoa->bolsa_renda }}" id="coparticipante[bolsa_renda]" name="coparticipante[bolsa_renda]" type="text" placeholder="R$ 99.999,99" data-inputmask="'mask': 'R$ 99.999,99', 'numericInput': true" class="form-control input-md cash" data-toggle="tooltip" title="Valor do bolsa família">
					</div>

			</div> {{-- FIM Sexo, Nascimento, Bolsa familia e Renda bolsa Família --}}


			{{-- RG, Data de Emissão do RG, Orgão Emissor do RG --}}
			<div class="form-group">

				<!-- RG-->            
				<label class="col-md-1 control-label" for="coparticipante[rg]">RG</label>
				<div class="col-md-2">
					<input value="{{ $pessoa->coparticipante->rg or "" }}" id="coparticipante[rg]" name="coparticipante[rg]" type="text" placeholder="99.999.999-9" class="form-control input-md rg" >
				</div>

				<!-- Data de Emissão do RG-->
				<label class="col-md-1 control-label" for="coparticipante[emissao_rg]" data-toggle="tooltip" title="Data de emissão do RG">Emissão</label>  
				<div class="col-md-2">
					<input value="{{ $pessoa->coparticipante->emissao_rg or "" }}" id="coparticipante[emissao_rg]" name="coparticipante[emissao_rg]" type="date" placeholder="Data de Emissão" class="form-control input-md global_data">
				</div>

				<!-- Orgão Emissor do RG-->
				<label class="col-md-1 control-label" for="coparticipante[orgao_emissor_rg]" data-toggle="tooltip" title="Orgão emissor do RG">Orgão</label>  
				<div class="col-md-2">
					<input value="{{ $pessoa->coparticipante->orgao_emissor_rg or "" }}" id="coparticipante[orgao_emissor_rg]" name="coparticipante[orgao_emissor_rg]" type="text" placeholder="Orgão Emissor" class="form-control input-md" >
				</div>
						
			</div> {{-- FIM RG, Data de Emissão do RG e Orgão Emissor do RG --}}


			{{-- NIS, Carteira e Deficiente --}}
			<div class="form-group">

				{{-- NIS/PIS --}}            
				<label class="col-md-1 control-label" for="coparticipante[nis]">NIS/PIS</label>  
				<div class="col-md-2">
					<input value="{{ $pessoa->coparticipante->nis or "" }}" id="coparticipante[nis]" name="coparticipante[nis]" type="text" placeholder="999.999999.99-99" data-inputmask="'mask': '999.99999.99-9', 'numericInput': true" class="form-control input-md nis" >
				</div>

				{{-- Carteira de Trabalho --}}            
				<label class="col-md-1 control-label" for="coparticipante[ctps]">CTPS</label>  
				<div class="col-md-2">
					<input value="{{ $pessoa->coparticipante->ctps or "" }}" id="coparticipante[ctps]" name="coparticipante[ctps]" type="text" placeholder="Cart. de Trabalho" data-inputmask="'mask': '9999999 999-9', 'numericInput': true" class="form-control input-md carteira" >
				</div>
				
				{{-- Deficiente --}}
				<label class="col-md-1 control-label" for="necessidades_especiais" data-toggle="tooltip" title="Portador de necessidade especial">Deficiente</label>

					<div class="col-md-2">
						<select id="necessidades_especiais_coparticipante" name="coparticipante[necessidades_especiais]" type="text" class="form-control input-md" >

							<option value=" " selected="">Selecione...</option>

							@if(count($pessoa->coparticipante) > 0)

								<option value="1" @if($pessoa->coparticipante->necessidades_especiais == "1") selected="selected" @endif>Sim</option>
								<option value="0" @if($pessoa->coparticipante->necessidades_especiais == "0") selected="selected" @endif>Não</option>

							@else

								<option value="1">Sim</option>
								<option value="0">Não</option><span class="obrigatorio">*</span>

							@endif              
						</select><span class="obrigatorio">*</span>
					</div>

				<div class="col-md-2">
						<select id="tipo_necessidade_coparticipante" name="coparticipante[tipo_deficiencia]" type="text" class="form-control input-md">
						<option value="" selected="">Tipos...</option>

						@if(count($pessoa->coparticipante) > 0)

							<option value=" " 
									@if(is_null($pessoa->coparticipante->tipo_deficiencia)) 
										 selected
									@endif>Tipos...
							</option>

							<option value="Microcefalia" 
									@if($pessoa->coparticipante->tipo_deficiencia == "Microcefalia") 
											selected="selected" 
									@endif>Microcefalia
							</option>

							<option value="Deficiência Física" 
									@if($pessoa->coparticipante->tipo_deficiencia == "Deficiência Física") 
											selected="selected" 
									@endif>Física
							</option>

							<option value="Deficiência Auditiva" 
									@if($pessoa->coparticipante->tipo_deficiencia == "Deficiência Auditiva") 
											selected="selected" 
									@endif>Auditiva
							</option>

							<option value="Deficiência Visual" 
									@if($pessoa->coparticipante->tipo_deficiencia == "Deficiência Visual") 
											selected="selected" 
									@endif>Visual
							</option>

							<option value="Deficiência Mental" 
									@if($pessoa->coparticipante->tipo_deficiencia == "Deficiência Mental") 
											selected="selected" 
									@endif>Mental
							</option>

							<option value="Deficiência Mùltipla" 
									@if($pessoa->coparticipante->tipo_deficiencia == "Deficiência Mùltipla") 
											selected="selected" 
									@endif>Mùltipla
							</option>             

						@else

							<option value="Microcefalia">Microcefalia</option>
							<option value="Deficiência Física">Física</option>
							<option value="Deficiência Auditiva">Auditiva</option>
							<option value="Deficiência Visual">Visual</option>
							<option value="Deficiência Mental">Mental</option>
							<option value="Deficiência Mùltipla">Mùltipla</option>

						@endif

						</select>
					</div>

			</div> {{-- Fim NIS, Carteira e Deficiente --}}


			{{-- CEP, Município e Bairro --}}
			<div class="form-group">

				<!-- CEP-->
				<label class="col-md-1 control-label" for="coparticipante[cep]">
					<a class="duplicar-endereco" data-toggle="tooltip" title="Copiar endereço" style="margin-right: 0; margin-bottom: 3px;"><i class="btn btn-pn-circulo btn-cor-padrao glyphicon glyphicon-repeat" style="margin-top: -10px;"></i></a>
					CEP
				</label>

				<div class="col-md-2">
					<input value="{{ $pessoa->coparticipante->endereco->cep or ""}}" id="coparticipante[cep]" name="coparticipante[endereco][cep]" type="text" placeholder="99999-999" data-inputmask="'mask': '99.999-999', 'numericInput': true" class="form-control input-md cep"><span class="obrigatorio">*</span>
				</div>

				<!-- Município-->
				<label class="col-md-1 control-label" for="coparticipante[municipio]">Município</label>
				<div class="col-md-2">
					<input value="{{ $pessoa->coparticipante->endereco->municipio or "" }}" disabled="disabled" id="coparticipante[endereco][municipio]" value="Mesquita" name="coparticipante[municipio]" type="text" placeholder="Mesquita" class="form-control input-md" >
				</div>


				{{-- Bairro --}}
				<label class="col-md-1 control-label" for="coparticipante[bairro]">Bairro</label>
				<div class="col-md-2">
					<input value="{{ $pessoa->coparticipante->endereco->bairro or ""}}" id="coparticipante[bairro]" type="text" placeholder="Centro" class="form-control input-md bairro-coparticipante" disabled> <span class="obrigatorio">*</span>

					<input value="{{ $pessoa->coparticipante->endereco->bairro or ""}}" name="coparticipante[endereco][bairro]" type="hidden"  class="bairro-coparticipante">
				</div>

			</div> {{-- FIM CEP, Município e Bairro --}}            


			{{-- Logradouro, Número e Complemento --}}
			<div class="form-group">

				{{-- Logradouro ...Av...Rua....etc --}}
				<label class="col-md-1 control-label" for="coparticipante[endereco][logradouro]" data-toggle="tooltip" title="Logradouro">Logradouro</label>
				<div class="col-md-5">
					<input value="{{ $pessoa->coparticipante->endereco->logradouro or ""}}" id="coparticipante[logradouro]" name="coparticipante[endereco][logradouro]" type="text" placeholder="Av, Rua, Travessa..." class="form-control input-md"><span class="obrigatorio">*</span>
				</div>

				<!-- Número da residência-->
				<label class="col-md-1 control-label" for="coparticipante[numero]">Numero</label>
				<div class="col-md-1">
					<input value="{{ $pessoa->coparticipante->endereco->numero or ""}}" id="coparticipante[numero]" name="coparticipante[endereco][numero]" type="text" placeholder="999" class="form-control input-md"><span class="obrigatorio">*</span>
				</div>

				{{-- Complemento --}}
				<label class="col-md-1 control-label" for="coparticipante[complemento]">Complemento</label>
				<div class="col-md-2">
					<input value="{{ $pessoa->coparticipante->endereco->complemento or "" }}" id="coparticipante[complemento]" name="coparticipante[endereco][complemento]" type="text" placeholder="Ap., Fundos,..." class="form-control input-md">
				</div>

			</div> {{-- Logradouro, Número e Complemento --}}

			{{--  elular e Telefone --}}
			<div class="form-group">
				{{-- TELEFONE 1 --}}
            <label class="col-md-1 control-label" for="coparticipante[telefones][0][numero]" data-toggle="tooltip" title="Celular">
               Telefone 1 
            </label>
            <div class="col-md-3">
               <div class="input-group my-group"> 

                  <select name="coparticipante[telefones][0][tipo_telefone]" class="form-control input-md select-tipo-telefone">
                     <option value="" disabled selected>---</option>

                     @if( isset($pessoa->coparticipante->telefones[0]->tipo_telefone) )
                        <option value="FIXO"    
                           @if(strtoupper($pessoa->coparticipante->telefones[0]->tipo_telefone) == "FIXO")     selected="selected" @endif>Fixo
                        </option>
                        <option value="CELULAR" 
                           @if(strtoupper($pessoa->coparticipante->telefones[0]->tipo_telefone) == "CELULAR")  selected="selected" @endif>Celular
                        </option>
                     @else
                        <option value="FIXO">Fixo</option>
                        <option value="CELULAR">Celular</option>
                     @endif
                  </select>

                  <input value="{{ $pessoa->coparticipante->telefones[0]->numero or null }}" id="coparticipante[telefones][0][numero]" name="coparticipante[telefones][0][numero]" type="text" placeholder="(99) 99999-9999" data-inputmask="'mask': '(99) 99999-9999'" class="form-control input-md celular">
               </div>
				</div>
				
				{{-- TELEFONE 2 --}}
            <label class="col-md-1 control-label" for="coparticipante[telefones][1][numero]" data-toggle="tooltip" title="Celular">
               Telefone 2 
            </label>
            <div class="col-md-3">
               <div class="input-group my-group"> 

                  <select name="coparticipante[telefones][1][tipo_telefone]" class="form-control input-md select-tipo-telefone">
                     <option value="" disabled selected>---</option>

                     @if( isset($pessoa->coparticipante->telefones[1]->tipo_telefone) )
                        <option value="FIXO"    
                           @if(strtoupper($pessoa->coparticipante->telefones[1]->tipo_telefone) == "FIXO")     selected="selected" @endif>Fixo
                        </option>
                        <option value="CELULAR" 
                           @if(strtoupper($pessoa->coparticipante->telefones[1]->tipo_telefone) == "CELULAR")  selected="selected" @endif>Celular
                        </option>
                     @else
                        <option value="FIXO">Fixo</option>
                        <option value="CELULAR">Celular</option>
                     @endif
                  </select>

                  <input value="{{ $pessoa->coparticipante->telefones[1]->numero or null }}" id="coparticipante[telefones][1][numero]" name="coparticipante[telefones][1][numero]" type="text" placeholder="(99) 99999-9999" data-inputmask="'mask': '(99) 99999-9999'" class="form-control input-md celular">
               </div>
				</div>

				{{-- TELEFONE 3 --}}
            <label class="col-md-1 control-label" for="coparticipante[telefones][2][numero]" data-toggle="tooltip" title="Celular">
               Telefone 3 
            </label>
            <div class="col-md-3">
               <div class="input-group my-group"> 

                  <select name="coparticipante[telefones][2][tipo_telefone]" class="form-control input-md select-tipo-telefone">
                     <option value="" disabled selected>---</option>

                     @if( isset($pessoa->coparticipante->telefones[2]->tipo_telefone) )
                        <option value="FIXO"    
                           @if(strtoupper($pessoa->coparticipante->telefones[2]->tipo_telefone) == "FIXO")     selected="selected" @endif>Fixo
                        </option>
                        <option value="CELULAR" 
                           @if(strtoupper($pessoa->coparticipante->telefones[2]->tipo_telefone) == "CELULAR")  selected="selected" @endif>Celular
                        </option>
                     @else
                        <option value="FIXO">Fixo</option>
                        <option value="CELULAR">Celular</option>
                     @endif
                  </select>

                  <input value="{{ $pessoa->coparticipante->telefones[2]->numero or null }}" id="coparticipante[telefones][2][numero]" name="coparticipante[telefones][2][numero]" type="text" placeholder="(99) 99999-9999" data-inputmask="'mask': '(99) 99999-9999'" class="form-control input-md celular">
               </div>
				</div>
				

			</div> {{-- FIM Email, Celular e Telefone --}}

			 {{-- Email --}}
			<div class="form-group">
				{{-- Email --}}
				<label class="col-md-1 control-label" for="coparticipante[email]">Email</label>  
				<div class="col-md-6">
					<input value="{{ $pessoa->coparticipante->email or "" }}" id="coparticipante[email]" name="coparticipante[email]" type="text" placeholder="email@servidor.com.br" class="form-control input-md email">
				</div>
			</div>{{-- FIM Email --}}

		</div> {{-- Fim x_content --}}
		
		</div> {{-- fim Co-participante --}}
