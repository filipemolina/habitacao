{{---------------------------------- CO-Participante ------------------------------------}}
      <div class="x_panel modal-content" id="co-participante">
        
        <div class="x_title">

            <h2>Co-Participante</h2>

            <ul class="nav navbar-right panel_toolbox">
            
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
          <input value="{{ old('coparticipante.cpf') }}" id="coparticipante[cpf]" name="coparticipante[cpf]" type="text" placeholder="999.999.999-99" data-inputmask="'mask': '999.999.999-99', 'numericInput': true" class="form-control input-md cpf" data-toggle="tooltip" title="Este CPF já está cadastrado"> <span class="obrigatorio">*</span>
        </div>

        {{-- Nome --}}
        <div class="form-group">
        <label class="col-md-1 control-label" for="coparticipante[nome]">Nome</label>
          <div class="col-md-5">
            <input value="{{ old('coparticipante.nome') }}" id="coparticipante[nome]" name="coparticipante[nome]" type="text" placeholder="Informe o nome" class="form-control input-md nome" > <span class="obrigatorio">*</span>
          </div>

          <label class="col-md-1 control-label" for="coparticipante.parentesco" data-toggle="tooltip" title="Parentesco">Parent</label>
          <div class="col-md-2">
            <select name="coparticipante[parentesco]" id="coparticipante[parentesco]" type="text" placeholder="Necessidades Especiais" class="form-control input-md" >
              <option value="" @if(!old('coparticipante.parentesco')) selected @endif>Selecione...</option>
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


        
        {{-- Sexo, NIS/PIS, Bolsa Família e Carteira de trabalho --}}
        <div class="form-group">

         {{-- Sexo   --}}
        <label class="col-md-1 control-label" for="coparticipante[sexo]">Sexo</label>
        <div class="col-md-2">
          <select id="coparticipante[sexo]" name="coparticipante[sexo]" type="text" class="form-control input-md" >
            <option value=""  @if(!old('coparticipante.sexo')) selected @endif>Selecione...</option>
            <option value="Masculino" @if(old('coparticipante.sexo') == "Masculino") selected="selected" @endif>Masculino</option>
            <option value="Feminino" @if(old('coparticipante.sexo') == "Feminino") selected="selected" @endif>Feminino</option>
            <option value="Outros" @if(old('coparticipante.sexo') == "Outros") selected="selected" @endif>Outros</option>
          </select><span class="obrigatorio">*</span>
        </div>

        {{-- Data de Nascimento --}}
        <label class="col-md-1 control-label" for="coparticipante[nascimento]" data-toggle="tooltip" title="Data de nascimento">Nasc.</label>  
        <div class="col-md-2">
          <input value="{{ old('coparticipante.nascimento') }}" id="coparticipante[nascimento]" name="coparticipante[nascimento]" type="date" placeholder="01 / 01 / 2000" class="form-control input-md global_data" > <span class="obrigatorio">*</span>
        </div>

        {{-- Bolsa Família --}}            
        <label class="col-md-1 control-label" for="bolsa_familia" data-toggle="tooltip" title="Co-participante possui bolsa família?">Bolsa F.</label>  
          <div class="col-md-2">
            <select id="bolsa_familia_coparticipante" name="coparticipante[bolsa_familia]" type="text" class="form-control input-md" >
              <option value="" selected>Selecione...</option>
              <option value="1" @if(old('coparticipante.bolsa_familia') == "1") selected="selected" @endif >Possui</option>
              <option value="0" @if(old('coparticipante.bolsa_familia') == "0") selected="selected" @endif >Não possui</option>
            </select>
          </div>

        {{-- Renda bolsa família --}}
          <div class="col-md-2">
            <input value="{{ old('coparticipante.vr_bolsa') }}" id="coparticipante[vr_bolsa]" name="coparticipante[vr_bolsa]" type="text" placeholder="R$ 99.999,99" data-inputmask="'mask': 'R$ 99.999,99', 'numericInput' : true" class="form-control input-md">
          </div>

      </div> {{-- FIM Sexo, NIS/PIS e Bolsa Família --}}


      {{-- RG, Data de Emissão do RG, Orgão Emissor do RG --}}
      <div class="form-group">

        <!-- RG-->            
        <label class="col-md-1 control-label" for="coparticipante[rg]">RG</label>
        <div class="col-md-2">
          <input value="{{ old('coparticipante.rg') }}" id="coparticipante[rg]" name="coparticipante[rg]" type="text" placeholder="99.999.999-9" maxlength="20" class="form-control input-md rg" >
        </div>

        <!-- Data de Emissão do RG-->
        <label class="col-md-1 control-label" for="coparticipante[emissao_rg]" data-toggle="tooltip" title="Data de emissão do RG">Emissão</label>  
        <div class="col-md-2">
          <input value="{{ old('coparticipante.emissao_rg') }}" id="coparticipante[emissao_rg]" name="coparticipante[emissao_rg]" type="date" placeholder="Data de Emissão" class="form-control input-md global_data" >
        </div>

        <!-- Orgão Emissor do RG-->
        <label class="col-md-1 control-label" for="coparticipante[orgao_emissor_rg]" data-toggle="tooltip" title="Orgão emissor do RG">Orgão</label>  
        <div class="col-md-2">
          <input value="{{ old('coparticipante.orgao_emissor_rg') }}" id="coparticipante[orgao_emissor_rg]" name="coparticipante[orgao_emissor_rg]" type="text" placeholder="Orgão Emissor" class="form-control input-md" >
        </div>
            
      </div> {{-- FIM RG, Data de Emissão do RG, Orgão Emissor do RG --}}


      {{-- NIS, Carteira, Portador deNncessidades especias --}}
      <div class="form-group">

        {{-- NIS/PIS --}}            
        <label class="col-md-1 control-label" for="coparticipante[nis]">NIS/PIS</label>  
        <div class="col-md-2">
          <input value="{{ old('coparticipante.nis') }}" id="coparticipante[nis]" name="coparticipante[nis]" type="text" placeholder="999.999999.99-99" maxlength="20" class="form-control input-md nis" >
        </div>

        {{-- Carteira de Trabalho --}}            
        <label class="col-md-1 control-label" for="coparticipante[ctps]">CTPS</label>  
        <div class="col-md-2">
          <input value="{{ old('coparticipante.ctps') }}" id="coparticipante[ctps]" name="coparticipante[ctps]" type="text" placeholder="Cart. de Trabalho" data-inputmask="'mask': '9999999 999-9', 'numericInput': true" class="form-control input-md carteira" >
        </div>
        
        {{-- Portador de necessidades especias --}}
        <label class="col-md-1 control-label" for="necessidades_especiais" data-toggle="tooltip" title="Portador de necessidade especial">Deficiente</label>

          <div class="col-md-2">
            <select id="necessidades_especiais_coparticipante" name="coparticipante[necessidades_especiais]" type="text" class="form-control input-md" >
              <option value=""  selected @if(!old('coparticipante.necessidades_especiais')) selected @endif>Selecione...</option>
              <option value="1" @if(old('coparticipante.necessidades_especiais') == "1") selected="selected" @endif>Sim</option>
              <option value="0" @if(old('coparticipante.necessidades_especiais') == "0") selected="selected" @endif>Não</option>
            </select><span class="obrigatorio">*</span>
          </div>

        <div class="col-md-2">
            <select id="tipo_necessidade_coparticipante" name="coparticipante[tipo_deficiencia]" type="text" class="form-control input-md" disabled>
              <option value="" 
                  @if(!old('coparticipante.tipo_deficiencia')) 
                       selected
                  @endif>Tipos...
              </option>

              <option value="Microcefalia" 
                  @if(old('coparticipante.tipo_deficiencia') == "Microcefalia") 
                      selected="selected" 
                  @endif>Microcefalia
              </option>

              <option value="Deficiência Física" 
                  @if(old('coparticipante.tipo_deficiencia') == "Deficiência Física") 
                      selected="selected" 
                  @endif>Física
              </option>

              <option value="Deficiência Auditiva" 
                  @if(old('coparticipante.tipo_deficiencia') == "Deficiência Auditiva") 
                      selected="selected" 
                  @endif>Auditiva
              </option>

              <option value="Deficiência Visual" 
                  @if(old('coparticipante.tipo_deficiencia') == "Deficiência Visual") 
                      selected="selected" 
                  @endif>Visual
              </option>

              <option value="Deficiência Mental" 
                  @if(old('coparticipante.tipo_deficiencia') == "Deficiência Mental") 
                      selected="selected" 
                  @endif>Mental
              </option>

              <option value="Deficiência Mùltipla" 
                  @if(old('coparticipante.tipo_deficiencia') == "Deficiência Mùltipla") 
                      selected="selected" 
                  @endif>Mùltipla
              </option>             

            </select>
          </div>

      </div> {{-- FIM NIS, Carteira, Portador deNncessidades especias --}}


      {{-- CEP, Município e Bairro --}}
      <div class="form-group">

        <!-- CEP-->
        <label class="col-md-1 control-label" for="coparticipante[cep]">
          <a class="duplicar-endereco" data-toggle="tooltip" title="Copiar endereço" style="margin-right: 0; margin-bottom: 3px;" href="#"><i class="btn btn-pn-circulo btn-cor-padrao glyphicon glyphicon-repeat" style="margin-top: -10px;"></i></a>
          CEP
        </label>

        <div class="col-md-2">
          <input value="{{ old('coparticipante.endereco.cep') }}" id="coparticipante[cep]" name="coparticipante[endereco][cep]" type="text" placeholder="99999-999" data-inputmask="'mask': '99.999-999', 'numericInput': true" class="form-control input-md cep" > <span class="obrigatorio">*</span>
        </div>

        {{-- Município --}}
        <label class="col-md-1 control-label" for="coparticipante[municipio]">Município</label>
        <div class="col-md-2">
          <input value="{{ old('coparticipante.endereco.municipio') }}" id="coparticipante[endereco][municipio]" value="Mesquita" name="" type="text" placeholder="Mesquita" class="form-control input-md municipio-coparticipante" disabled>

          <input value="{{ old('coparticipante.endereco.municipio') }}" name="coparticipante[endereco][municipio]" type="hidden"  class="municipio-coparticipante" >
        </div>

        {{-- Bairro --}}
        <label class="col-md-1 control-label" for="coparticipante[bairro]">Bairro</label>
        <div class="col-md-2">
          <input value="{{ old('coparticipante.endereco.bairro') }}" id="coparticipante[bairro]" type="text" placeholder="Centro" class="form-control input-md bairro-coparticipante" disabled> <span class="obrigatorio">*</span>

          <input value="{{ old('coparticipante.endereco.bairro') }}" name="coparticipante[endereco][bairro]" type="hidden"  class="bairro-coparticipante">
        </div>

      </div> {{-- FIM CEP, Município e Bairro --}}            


      {{-- Logradouro, Número e Complemento --}}
      <div class="form-group">

        {{-- Logradouro ...Av...Rua....etc --}}
        <label class="col-md-1 control-label" for="coparticipante[logradouro]" data-toggle="tooltip" title="Logradouro">Log.</label>
        <div class="col-md-3">
          <input value="{{ old('coparticipante.endereco.logradouro') }}" id="coparticipante[logradouro]" name="coparticipante[endereco][logradouro]" type="text" placeholder="Av, Rua, Travessa..." class="form-control input-md"> <span class="obrigatorio">*</span>
        </div>

        <!-- Número da residência-->
        <label class="col-md-1 control-label" for="coparticipante[numero]">Número</label>
        <div class="col-md-2">
          <input value="{{ old('coparticipante.endereco.numero') }}" id="coparticipante[numero]" name="coparticipante[endereco][numero]" type="text" placeholder="999" class="form-control input-md"> <span class="obrigatorio">*</span>
        </div>

        {{-- Complemento --}}
        <label class="col-md-2 control-label" for="coparticipante[complemento]">Complemento</label>
        <div class="col-md-3">
          <input value="{{ old('coparticipante.endereco.complemento') }}" id="coparticipante[complemento]" name="coparticipante[endereco][complemento]" type="text" placeholder="Ap., Fundos,..." class="form-control input-md">
        </div>

      </div> {{-- Logradouro, Número e Complemento --}}

      {{-- Email , Celular e Telefone --}}
      <div class="form-group">

        {{-- Email --}}
        <label class="col-md-1 control-label" for="coparticipante[email]">Email</label>  
        <div class="col-md-5">
          <input value="{{ old('coparticipante.email') }}" id="coparticipante[email]" name="coparticipante[email]" type="text" placeholder="email@servidor.com.br" class="form-control input-md email">
        </div>

        {{-- Celular ou telefone --}}
        <label class="col-md-1 control-label" for="coparticipante[telefones][0][numero]" data-toggle="tooltip" title="Celular ou Telefone">Cel/Tel</label>
        <div class="col-md-2">
          <input value="{{ old('coparticipante.telefones.0.numero') }}" id="coparticipante[telefones][0][numero]" name="coparticipante[telefones][0][numero]" type="text" placeholder="(99) 99999-9999" data-inputmask="'mask': '(99) 99999-9999'" class="form-control input-md celular"> <span class="obrigatorio">*</span>
          <input type="hidden" value="Celular" name="coparticipante[telefones][0][tipo_telefone]">
        </div>

        {{-- Telefone --}}
        <label class="col-md-1 control-label" for="coparticipante[telefones][1][numero]">Tel.</label>
        <div class="col-md-2">
          <input value="{{ old('coparticipante.telefones.1.numero') }}" id="coparticipante[telefones][1][numero]" name="coparticipante[telefones][1][numero]" type="text" placeholder="(99) 9999-9999" data-inputmask="'mask': '(99) 9999-9999'" class="form-control input-md telefone">
          <input type="hidden" value="Fixo" name="coparticipante[telefones][1][tipo_telefone]">
        
        </div>

      </div> {{-- FIM Email, Celular e Telefone --}}
      </div> {{-- FIM x_content --}}

    </div> {{-- fim Co-participante  --}}