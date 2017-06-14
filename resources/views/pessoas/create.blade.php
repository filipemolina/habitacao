@extends("layouts.blank")

@section('titulo')

  Cadastro de Pessoas

@endsection

@push('css')

  {{-- Switchery --}}

  <link rel="stylesheet" href="{{ asset("vendors/switchery/dist/switchery.css") }}">

@endpush

@section('main_container')

    {{-- Este contador deve iniciar com o próximo item a ser criado. Como essa página sempre tem 1 item, ele deve --}}
    {{-- começar na segunda posção (1) --}}

    <?php $i = 1; ?>

    {{-- Mostrar os erros de validação --}}

    @if( count($errors) > 0)

        <div class="alert alert-roxo alert-dismissible" style="margin-top: 70px;" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

          <strong>Atenção!</strong><br>

          <ul>

            @foreach($errors->all() as $erro)

              <li>{{ $erro }}</li>

            @endforeach

          </ul>

        </div>

    @endif

    {{-- Mostrar mensagem de sucesso --}}

    @if(session('sucesso'))

        <div class="alert alert-dourado alert-dismissible" style="margin-top: 70px;" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>Parabéns!</strong> {!! session('sucesso') !!}
        </div>

    @endif

    <h2> Cadastro de Pessoa </h2>

    <form id="cadastro_pessoa" class="form-horizontal" method="post" action="{{ url("/pessoas") }}">

    {{ csrf_field() }}


{{------------------------------------ Participante --------------------------------------------}}

      <div class="x_panel modal-content" id="participante">
        
        <div class="x_title">
          <div class="col-md-10"> Participante </div>

            <div class="col-md-1">
              <a class="collapse-link">
                <i class="fa fa-chevron-up btn btn-pn-circulo btn-cor-padrao"></i>
              </a>
            </div>

            <div class="col-md-1">
              <button class="btn btn-pn-circulo btn-cor-perigo limpar1" data-toggle="tooltip" title="Limpar campos" value="limpar1"><i class="fa fa-times"></i></button>
            
            </div>

            <div class="clearfix"></div>
          
        </div>

        <div class="x_content">

        {{-- Nome --}}
        <div class="form-group">
          <label class="col-md-1 control-label" for="nome">Nome</label>
          <div class="col-md-7">
            <input value="{{ old('nome') }}" id="nome" name="nome" type="text" placeholder="Informe o nome" class="form-control input-md nome" ><span class="obrigatorio">*</span>
          </div>
          
        {{-- Responsável familiar --}}
        <div class="exibir">
            <label class="col-md-3 control-label" for="mulher_responsavel">Responsável familiar</label>
            <div class="col-md-1">
              <input type="checkbox" @if(old('mulher_responsavel')) checked @endif id="mulher_responsavel" name="mulher_responsavel"  style="margin-top: 12px" data-switchery="true"><span style="margin-top: -4px;margin-left: -56px" class="obrigatorio">*</span>
            </div>
          </div>
        </div>

        {{-- CPF, NIS/PIS, Bolsa Família e Carteira de trabalho --}}
        <div class="form-group">

          {{-- CPF --}}      
          <label class="col-md-1 control-label" for="cpf">CPF</label>  
            <div class="col-md-2">
              <input value="{{ old('cpf') }}" id="cpf" name="cpf" type="text" placeholder="999.999.999-99" data-inputmask="'mask': '999.999.999-99', 'numericInput': true" class="form-control input-md cpf"><span class="obrigatorio">*</span>
            </div>

          {{-- NIS/PIS --}}            
          <label class="col-md-1 control-label" for="nis">NIS/PIS</label>  
          <div class="col-md-2">
            <input value="{{ old('nis') }}" id="nis" name="nis" type="text" placeholder="999.999999.99-99" data-inputmask="'mask': '999.99999.99-9', 'numericInput': true" class="form-control input-md nis" >
          </div>

          {{-- Carteira de Trabalho --}}            
          <label class="col-md-1 control-label" for="ctps">CTPS</label>  
          <div class="col-md-2">
            <input value="{{ old('ctps') }}" id="ctps" name="ctps" type="text" placeholder="9999999 999-9" data-inputmask="'mask': '9999999 999-9', 'numericInput': true" class="form-control input-md carteira" >
          </div>

          {{-- Bolsa Família --}}            
          <label class="col-md-1 control-label" for="bolsa_familia">Bolsa F.</label>  
          <div class="col-md-2">
            <select id="bolsa_familia" name="bolsa_familia" type="text" class="form-control input-md">
              <option value="" disabled selected>Selecione...</option>z
              <option value="1" @if(old('bolsa_familia') == "1") selected="selected" @endif >Possui</option>
              <option value="0" @if(old('bolsa_familia') == "0") selected="selected" @endif >Não possui</option>
            </select><span class="obrigatorio">*</span>
          </div>

        </div> {{-- FIM CPF, NIS/PIS e Bolsa Família --}}


        {{-- RG, Orgão Emissor do RG e Data de Emissão do RG--}}
        <div class="form-group">
        
          <!-- RG-->            
          <label class="col-md-1 control-label" for="rg">RG</label>
          <div class="col-md-2">
            <input value="{{ old('rg') }}" id="rg" name="rg" placeholder="99.999.999-9" data-inputmask="'mask': '99.999.999-9', 'numericInput': true" class="form-control input-md rg" >
          </div>

          <!-- Orgão Emissor do RG-->
          <label class="col-md-1 control-label" for="orgao_emissor_rg">Orgão</label>  
          <div class="col-md-2">
            <input value="{{ old('orgao_emissor_rg') }}" id="orgao_emissor_rg" name="orgao_emissor_rg" type="text" placeholder="Orgão Emissor" class="form-control input-md" >
          </div>

          <!-- Data de Emissão do RG-->
          <label class="col-md-1 control-label" for="emissao_rg">Emissão</label>  
          <div class="col-md-2">
            <input value="{{ old('emissao_rg') }}" id="emissao_rg" name="emissao_rg" type="date" class="form-control input-md global_data" >
          </div>

        </div> {{-- FIM RG, Orgão Emissor do RG e Data de Emissão do RG --}}


        {{-- Data de Nascimento, Sexo, Necessidades especiais --}}
        <div class="form-group">

          {{-- Data de Nascimento --}}
          <label class="col-md-1 control-label" for="nascimento" data-toggle="tooltip" title="Data de nascimento">Nasc.</label>  
          <div class="col-md-2">
            <input value="{{ old('nascimento') }}" id="nascimento" name="nascimento" type="date" class="form-control input-md global_data" > <span class="obrigatorio">*</span>
          </div>

          {{-- Sexo   --}}
          <label class="col-md-1 control-label" for="sexo">Sexo</label>
          <div class="col-md-2">
            <select id="sexo" name="sexo" type="text" class="form-control input-md" >
              <option value="" disabled selected>Selecione...</option>
              <option value="Masculino" @if(old('sexo') == "Masculino") selected="selected" @endif>Masculino</option>
              <option value="Feminino" @if(old('sexo') == "Feminino") selected="selected" @endif>Feminino</option>
              <option value="Outros" @if(old('sexo') == "Outros") selected="selected" @endif>Outros</option>
            </select><span class="obrigatorio">*</span>
          </div>

          {{-- Necessidades especiais --}}
          <label class="col-md-1 control-label" for="necessidades_especiais" data-toggle="tooltip" title="Necessidades especias">Nesc.</label>
          <div class="col-md-2">
            <select id="necessidades_especiais" name="necessidades_especiais" type="text" class="form-control input-md" > 
              <option value="" selected @if(!old('necessidades_especiais')) disabled selected @endif>Selecione...</option>
              <option value="1" @if(old('necessidades_especiais') == "1") selected="selected" @endif>Sim</option>
              <option value="0" @if(old('necessidades_especiais') == "0") selected="selected" @endif>Não</option>
            </select><span class="obrigatorio">*</span>
          </div>

          <div class="col-md-2">
            <select id="tipo_necessidade" name="tipo_deficiencia" type="text" class="form-control input-md" >
              <option value="" 
                  @if(!old('tipo_deficiencia')) 
                      disabled selected 
                  @endif>Tipos...
              </option>

              <option value="Microcefalia" 
                  @if(old('tipo_deficiencia') == "Microcefalia") 
                      selected="selected" 
                  @endif>Microcefalia
              </option>

              <option value="Deficiência Física" 
                  @if(old('tipo_deficiencia') == "Deficiência Física") 
                      selected="selected" 
                  @endif>Física
              </option>

              <option value="Deficiência Auditiva" 
                  @if(old('tipo_deficiencia') == "Deficiência Auditiva") 
                      selected="selected" 
                  @endif>Auditiva
              </option>

              <option value="Deficiência Visual" 
                  @if(old('tipo_deficiencia') == "Deficiência Visual") 
                      selected="selected" 
                  @endif>Visual
              </option>

              <option value="Deficiência Mental" 
                  @if(old('tipo_deficiencia') == "Deficiência Mental") 
                      selected="selected" 
                  @endif>Mental
              </option>

              <option value="Deficiência Mùltipla" 
                  @if(old('tipo_deficiencia') == "Deficiência Mùltipla") 
                      selected="selected" 
                  @endif>Mùltipla
              </option>             

            </select>
          </div>
        
        </div> {{-- Fim Data de Nascimento, Sexo, Necessidades especias --}}


        {{-- CEP, Munícipio e Bairro --}}
        <div class="form-group">

          

          <!-- CEP-->
          <label class="col-md-1 control-label" for="cep">
          <a href="http://www.buscacep.correios.com.br/sistemas/buscacep/" target="_blank" class="btn btn-pn-circulo btn-cor-padrao glyphicon glyphicon-search" data-toggle="tooltip" title="Buscar CEP" formtarget="_blank" style="margin-right: 0; margin-bottom: 3px;"></a>
          CEP
          </label>
          <div class="col-md-2">
            <input value="{{ old('cep') }}" id="cep" name="cep" type="text" placeholder="99.999-999" data-inputmask="'mask': '99.999-999', 'numericInput': true" class="form-control input-md cep"><span class="obrigatorio">*</span>
          </div>

          <!-- Município-->
          <label class="col-md-1 control-label" for="municipio">Município</label>
          <div class="col-md-2">
            <input value="{{ old('municipio') }}" disabled="disabled" id="municipio" name="endereco[municipio]" type="text" placeholder="Mesquita" value="Mesquita" class="form-control input-md" >
          </div>

          {{-- Bairro --}}
          <label class="col-md-1 control-label" for="bairro">Bairro</label>
          <div class="col-md-2">
            <input value="{{ old('bairro') }}" id="bairro" name="bairro" type="text" placeholder="Centro" class="form-control input-md"><span class="obrigatorio">*</span>
          </div>

        </div> {{-- FIM CEP, Munícipio e Bairro--}}

        {{-- Logradouro, Número e Complemento --}}
        <div class="form-group">

          <!-- Logradouro ...Av...Rua....etc-->
          <label class="col-md-1 control-label" for="logradouro" data-toggle="tooltip" title="Logradouro">Log.</label>
          <div class="col-md-3">
            <input value="{{ old('logradouro') }}"  id="logradouro" name="endereco[logradouro]" type="text" placeholder="Av, Rua, Travessa..." class="form-control input-md"> <span class="obrigatorio">*</span>
          </div>

          <!-- Número da residência-->
          <label class="col-md-1 control-label" for="numero">Número</label>
          <div class="col-md-2">
            <input value="{{ old('numero') }}" id="numero" name="endereco[numero]" type="text" placeholder="999" class="form-control input-md"> <span class="obrigatorio">*</span>
          </div>

          {{-- Complemento --}}
          <label class="col-md-2 control-label" for="complemento">Complemento</label>
          <div class="col-md-3">
            <input value="{{ old('complemento') }}" id="complemento" name="endereco[complemento]" type="text" placeholder="Ap., Fundos,..." class="form-control input-md">
          </div>

        </div> {{-- FIM Logradouro, Número e Complemento --}}

        {{-- Email , Celular e Telefone --}}
        <div class="form-group">

          {{-- Email --}}
          <label class="col-md-1 control-label" for="email">Email</label>  
          <div class="col-md-5">
            <input value="{{ old('email') }}" id="email" name="email" type="text" placeholder="email@servidor.com.br" class="form-control input-md email">
          </div>

          {{-- Celular --}}
          <label class="col-md-1 control-label" for="telefones[0][numero]">Cel.</label>
          <div class="col-md-2">
            <input value="{{ old('telefones.0.numero') }}" id="telefones[0][numero]" name="telefones[0][numero]" type="text" placeholder="(99) 99999-9999" data-inputmask="'mask': '(99) 99999-9999'" class="form-control input-md celular"><span class="obrigatorio">*</span>
            <input type="hidden" name="telefones[0][tipo_telefone]" value="Celular">
          </div>

          {{-- Telefone --}}
          <label class="col-md-1 control-label" for="telefones[1][numero]">Tel.</label>
          <div class="col-md-2">
            <input value="{{ old('telefones.1.numero') }}" id="telefones[1][numero]"  name="telefones[1][numero]" type="text" placeholder="(99) 9999-9999" data-inputmask="'mask': '(99) 9999-9999'" class="form-control input-md telefone">
            <input type="hidden" name="telefones[1][tipo_telefone]" value="Fixo">
          </div>

        </div> {{-- FIM Email, Celular e Telefone --}}

        </div> {{-- FIM x_content --}}

      </div> {{-- fim Participante --}}





{{------------------------------------ CO-Participante ------------------------------------}}
      <div class="x_panel modal-content" id="co-participante">
        
        <div class="x_title">

            <div class="col-md-10">Co-Participante</div>

            <div class="col-md-1">
              <a class="collapse-link">
                <i class="fa fa-chevron-up btn btn-pn-circulo btn-cor-padrao"></i>
              </a>
            </div>

            <div class="col-md-1">
              <button class="btn btn-pn-circulo btn-cor-perigo limpar1" data-toggle="tooltip" title="Limpar campos" value="limpar1"><i class="fa fa-times"></i></button>
            </div>

            <div class="clearfix"></div>

         </div>

        <div class="x_content">

        {{-- Nome --}}
        <div class="form-group">
        <label class="col-md-1 control-label" for="coparticipante[nome]">Nome</label>
          <div class="col-md-7">
            <input value="{{ old('coparticipante.nome') }}" id="coparticipante[nome]" name="coparticipante[nome]" type="text" placeholder="Informe o nome" class="form-control input-md nome"><span class="obrigatorio">*</span>
          </div>

          <label class="col-md-2 control-label" for="coparticipante.parentesco">Parentesco</label>
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


        
        {{-- CPF, NIS/PIS, Bolsa Família e Carteira de trabalho --}}
        <div class="form-group">

        {{-- CPF --}}
        <label class="col-md-1 control-label" for="coparticipante[cpf]">CPF</label>  
        <div class="col-md-2">
          <input value="{{ old('coparticipante.cpf') }}" id="coparticipante[cpf]" name="coparticipante[cpf]" type="text" placeholder="999.999.999-99" data-inputmask="'mask': '999.999.999-99', 'numericInput': true" class="form-control input-md cpf" > <span class="obrigatorio">*</span>
        </div>

        {{-- NIS/PIS --}}            
        <label class="col-md-1 control-label" for="coparticipante[nis]">NIS/PIS</label>  
        <div class="col-md-2">
          <input value="{{ old('coparticipante.nis') }}" id="coparticipante[nis]" name="coparticipante[nis]" type="text" placeholder="999.999999.99-99" data-inputmask="'mask': '999.99999.99-9', 'numericInput': true" class="form-control input-md nis" >
        </div>

        {{-- Carteira de Trabalho --}}            
        <label class="col-md-1 control-label" for="coparticipante[ctps]">CTPS</label>  
        <div class="col-md-2">
          <input value="{{ old('coparticipante.ctps') }}" id="coparticipante[ctps]" name="coparticipante[ctps]" type="text" placeholder="Cart. de Trabalho" data-inputmask="'mask': '9999999 999-9', 'numericInput': true" class="form-control input-md carteira" >
        </div>

        {{-- Bolsa Família --}}            
        <label class="col-md-1 control-label" for="bolsa_familia">Bolsa F.</label>  
          <div class="col-md-2">
            <select id="bolsa_familia_coparticipante" name="coparticipante[bolsa_familia]" type="text" class="form-control input-md" >
              <option value="" disabled selected>Selecione...</option>
              <option value="1" @if(old('coparticipante[bolsa_familia]') == "1") selected="selected" @endif >Possui</option>
              <option value="0" @if(old('coparticipante[bolsa_familia]') == "0") selected="selected" @endif >Não possui</option>
            </select>
          </div>

      </div> {{-- FIM CPF, NIS/PIS e Bolsa Família --}}


      {{-- RG, Data de Emissão do RG, Orgão Emissor do RG --}}
      <div class="form-group">

        <!-- RG-->            
        <label class="col-md-1 control-label" for="coparticipante[rg]">RG</label>
        <div class="col-md-2">
          <input value="{{ old('coparticipante.rg') }}" id="coparticipante[rg]" name="coparticipante[rg]" type="text" placeholder="99.999.999-9" data-inputmask="'mask': '99.999.999-9', 'numericInput': true" class="form-control input-md rg" >
        </div>

        <!-- Orgão Emissor do RG-->
        <label class="col-md-1 control-label" for="coparticipante[orgao_emissor_rg]">Orgão</label>  
        <div class="col-md-2">
          <input value="{{ old('coparticipante.orgao_emissor_rg') }}" id="coparticipante[orgao_emissor_rg]" name="coparticipante[orgao_emissor_rg]" type="text" placeholder="Orgão Emissor" class="form-control input-md" >
        </div>

        <!-- Data de Emissão do RG-->
        <label class="col-md-1 control-label" for="coparticipante[emissao_rg]">Emissão</label>  
        <div class="col-md-2">
          <input value="{{ old('coparticipante.emissao_rg') }}" id="coparticipante[emissao_rg]" name="coparticipante[emissao_rg]" type="date" placeholder="Data de Emissão" class="form-control input-md global_data" >
        </div>
            
      </div> {{-- FIM RG, Orgão Emissor do RG e Data de Emissão do RG --}}


      {{-- Data de Nascimento, Sexo, Necessidades especias --}}
      <div class="form-group">

        {{-- Data de Nascimento --}}
        <label class="col-md-1 control-label" for="coparticipante[nascimento]"data-toggle="tooltip" title="Data de nascimento">Nasc.</label>  
        <div class="col-md-2">
          <input value="{{ old('coparticipante.nascimento') }}" id="coparticipante[nascimento]" name="coparticipante[nascimento]" type="date" placeholder="01 / 01 / 2000" class="form-control input-md global_data" > <span class="obrigatorio">*</span>
        </div>

        {{-- Sexo   --}}
        <label class="col-md-1 control-label" for="coparticipante[sexo]">Sexo</label>
        <div class="col-md-2">
          <select id="coparticipante[sexo]" name="coparticipante[sexo]" type="text" class="form-control input-md">
            <option value="" disabled selected @if(!old('coparticipante.sexo')) @endif>Selecione...</option>
            <option value="Masculino" @if(old('coparticipante.sexo') == "Masculino") selected="selected" @endif>Masculino</option>
            <option value="Feminino" @if(old('coparticipante.sexo') == "Feminino") selected="selected" @endif>Feminino</option>
            <option value="Outros" @if(old('coparticipante.sexo') == "Outros") selected="selected" @endif>Outros</option>
          </select><span class="obrigatorio">*</span>
        </div>
        
        {{-- Necessidades especias --}}
        <label class="col-md-1 control-label" for="necessidades_especiais" data-toggle="tooltip" title="Necessidades especias">Nesc.</label>

          <div class="col-md-2">
            <select id="necessidades_especiais_coparticipante" name="coparticipante[necessidades_especiais]" type="text" class="form-control input-md" >
              <option value="" disabled selected @if(!old('coparticipante[necessidades_especiais]')) selected @endif>Selecione...</option>
              <option value="1" @if(old('coparticipante[necessidades_especiais]') == "1") selected="selected" @endif>Sim</option>
              <option value="0" @if(old('coparticipante[necessidades_especiais]') == "0") selected="selected" @endif>Não</option>
            </select><span class="obrigatorio">*</span>
          </div>

        <div class="col-md-2">
            <select id="tipo_necessidade_coparticipante" name="coparticipante[tipo_deficiencia]" type="text" class="form-control input-md" >
              <option value="" 
                  @if(!old('coparticipante[tipo_deficiencia]')) 
                      disabled selected
                  @endif>Tipos...
              </option>

              <option value="Microcefalia" 
                  @if(old('coparticipante[tipo_deficiencia]') == "Microcefalia") 
                      selected="selected" 
                  @endif>Microcefalia
              </option>

              <option value="Deficiência Física" 
                  @if(old('coparticipante[tipo_deficiencia]') == "Deficiência Física") 
                      selected="selected" 
                  @endif>Física
              </option>

              <option value="Deficiência Auditiva" 
                  @if(old('coparticipante[tipo_deficiencia]') == "Deficiência Auditiva") 
                      selected="selected" 
                  @endif>Auditiva
              </option>

              <option value="Deficiência Visual" 
                  @if(old('coparticipante[tipo_deficiencia]') == "Deficiência Visual") 
                      selected="selected" 
                  @endif>Visual
              </option>

              <option value="Deficiência Mental" 
                  @if(old('coparticipante[tipo_deficiencia]') == "Deficiência Mental") 
                      selected="selected" 
                  @endif>Mental
              </option>

              <option value="Deficiência Mùltipla" 
                  @if(old('coparticipante[tipo_deficiencia]') == "Deficiência Mùltipla") 
                      selected="selected" 
                  @endif>Mùltipla
              </option>             

            </select>
          </div>

      </div> {{-- Fim Data de Nascimento, Sexo, Necesidades especias --}}


      {{-- CEP, Município e Bairro --}}
      <div class="form-group">

        <!-- CEP-->
        <label class="col-md-1 control-label" for="coparticipante[cep]">
          <button class="btn btn-pn-circulo btn-cor-padrao duplicar-endereco glyphicon glyphicon-repeat" data-toggle="tooltip" title="Copiar endereço" style="margin-right: 0; margin-bottom: 3px;"></button>
          CEP
        </label>

        <div class="col-md-2">
          <input value="{{ old('coparticipante.cep') }}" id="coparticipante[cep]" name="coparticipante[cep]" type="text" placeholder="99.999-999" data-inputmask="'mask': '99.999-999', 'numericInput': true" class="form-control input-md cep"><span class="obrigatorio">*</span>
        </div>

        <!-- Município-->
        <label class="col-md-1 control-label" for="coparticipante[municipio]">Município</label>
        <div class="col-md-2">
          <input value="{{ old('coparticipante.municipio') }}" disabled="disabled" id="coparticipante[endereco][municipio]" value="Mesquita" name="coparticipante[municipio]" type="text" placeholder="Mesquita" class="form-control input-md" >
        </div>

        {{-- Bairro --}}
        <label class="col-md-1 control-label" for="coparticipante[bairro]">Bairro</label>
        <div class="col-md-2">
          <input value="{{ old('coparticipante.bairro') }}" id="coparticipante[bairro]" name="coparticipante[endereco][bairro]" type="text" placeholder="Centro" class="form-control input-md"> <span class="obrigatorio">*</span>
        </div>

      </div> {{-- FIM CEP, Município e Bairro --}}            


      {{-- Logradouro, Número e Complemento --}}
      <div class="form-group">

        {{-- Logradouro ...Av...Rua....etc --}}
        <label class="col-md-1 control-label" for="coparticipante[logradouro]" data-toggle="tooltip" title="Logradouro">Log.</label>
        <div class="col-md-3">
          <input value="{{ old('coparticipante.logradouro') }}" id="coparticipante[logradouro]" name="coparticipante[endereco][logradouro]" type="text" placeholder="Av, Rua, Travessa..." class="form-control input-md"> <span class="obrigatorio">*</span>
        </div>

        <!-- Número da residência-->
        <label class="col-md-1 control-label" for="coparticipante[numero]">Número</label>
        <div class="col-md-2">
          <input value="{{ old('coparticipante.numero') }}" id="coparticipante[numero]" name="coparticipante[endereco][numero]" type="text" placeholder="999" class="form-control input-md"> <span class="obrigatorio">*</span>
        </div>

        {{-- Complemento --}}
        <label class="col-md-2 control-label" for="coparticipante[complemento]">Complemento</label>
        <div class="col-md-3">
          <input value="{{ old('coparticipante.complemento') }}" id="coparticipante[complemento]" name="coparticipante[endereco][complemento]" type="text" placeholder="Ap., Fundos,..." class="form-control input-md">
        </div>

      </div> {{-- Logradouro, Número e Complemento --}}

      {{-- Email , Celular e Telefone --}}
      <div class="form-group">

        {{-- Email --}}
        <label class="col-md-1 control-label" for="coparticipante[email]">Email</label>  
        <div class="col-md-5">
          <input value="{{ old('coparticipante.email') }}" id="coparticipante[email]" name="coparticipante[email]" type="text" placeholder="email@servidor.com.br" class="form-control input-md email">
        </div>

        {{-- Celular --}}
        <label class="col-md-1 control-label" for="coparticipante[telefones][0][numero]">Celular</label>
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

    </div> {{-- fim Co-participante --}}





{{------------------------------------------ Dependentes ----------------------------------------}}
         
    <div class="x_panel modal-content" id="dependentes">
      
      <div class="x_title">

        <div class="col-md-10"> Dependentes </div>

        <div class="col-md-1">
          <a class="collapse-link">
            <i class="fa fa-chevron-up btn btn-pn-circulo btn-cor-padrao"></i>
          </a>
        </div>

        <div class="col-md-1">
          <button name="submit" value="clonar" data-toggle="tooltip" title="Adicionar dependente" class="btn btn-pn-circulo btn-cor-padrao clonar"><i class="glyphicon glyphicon-plus"></i></button>
        </div>

        <div class="clearfix"></div>

      </div>
      
      <div class="x_content">
        
        <div class="x_panel panel_dependentes">
      
          {{-- Nome --}}
          <div class="form-group">
            <label class="col-md-1 control-label" for="dependentes[0][nome]">Nome</label>
            
            <div class="col-md-7">
              <input value="{{ old('dependentes[0][nome]') }}" name="dependentes[0][nome]" id="dependentes[0][nome]" type="text" placeholder="Informe o nome" class="form-control input-md"><span class="obrigatorio">*</span>
            
            </div>

            <label class="col-md-1 control-label" for="dependentes.0.parentesco" data-toggle="tooltip" title="Parentesco">Parent.</label>

            <div class="col-md-2">
              <select name="dependentes[0][parentesco]" id="dependentes[0][parentesco]" type="text" placeholder="Necessidades Especiais" class="form-control input-md" > <span class="obrigatorio">*</span>
                <option value="" disabled @if(!old('dependentes[0][parentesco]')) selected @endif>Selecione...</option>
                <option value="1" @if(old('dependentes[0][parentesco]') == "1") selected="selected" @endif>Avô(ó)</option>
                <option value="2" @if(old('dependentes[0][parentesco]') == "2") selected="selected" @endif>Bisavô(ó)</option>
                <option value="3" @if(old('dependentes[0][parentesco]') == "3") selected="selected" @endif>Bisneto(a)</option>
                <option value="4" @if(old('dependentes[0][parentesco]') == "4") selected="selected" @endif>Companheiro(a)</option>
                <option value="5" @if(old('dependentes[0][parentesco]') == "5") selected="selected" @endif>Cônjuge</option>
                <option value="6" @if(old('dependentes[0][parentesco]') == "6") selected="selected" @endif>Enteado(a)</option>
                <option value="7" @if(old('dependentes[0][parentesco]') == "7") selected="selected" @endif>Ex-esposa</option>
                <option value="8" @if(old('dependentes[0][parentesco]') == "8") selected="selected" @endif>Filho(a)</option>
                <option value="9" @if(old('dependentes[0][parentesco]') == "9") selected="selected" @endif>Irmão(ã)</option>
                <option value="10" @if(old('dependentes[0][parentesco]') == "10") selected="selected" @endif>Neto(a)</option>
                <option value="11" @if(old('dependentes[0][parentesco]') == "11") selected="selected" @endif>Pais</option>
                <option value="12" @if(old('dependentes[0][parentesco]') == "12") selected="selected" @endif>Outras</option>
              
              </select><span class="obrigatorio">*</span>
            </div>

            <div class="col-md-1">
              <button class="btn btn-pn-circulo btn-cor-perigo limpar2" data-toggle="tooltip" title="Limpar campos" value="limpar2" style="margin-top: 7px;margin-left: 45px;"><i class="fa fa-times"></i></button>
            
            </div>
          </div>
        
          {{-- Data de Nascimento, Sexo, Necesidades Especias --}}
          <div class="form-group">

          {{-- Data de Nascimento --}}
          <label class="col-md-1 control-label" for="dependentes[0][nascimento]" data-toggle="tooltip" title="Data de nascimento">Nasc.</label>  
          <div class="col-md-2">
            <input value="{{ old('dependentes[0][nascimento]') }}" name="dependentes[0][nascimento]" type="date" placeholder="01/01/2000" class="form-control input-md global_data" > <span class="obrigatorio">*</span>
          </div>

          {{-- Sexo   --}}
          <label class="col-md-1 control-label" for="dependentes[0][sexo]">Sexo</label>
          <div class="col-md-2">
            <select name="dependentes[0][sexo]" id="dependentes[0][sexo]" type="text" placeholder="Sexo" class="form-control input-md">
              <option value="" disabled @if(!old('dependentes[0][sexo]')) selected @endif>Selecione...</option>
              <option value="Masculino" @if(old('dependentes[0][sexo]') == "Masculino") selected="selected" @endif>Masculino</option>
              <option value="Feminino" @if(old('dependentes[0][sexo]') == "Feminino") selected="selected" @endif>Feminino</option>
              <option value="Outros" @if(old('dependentes[0][sexo]') == "Outros") selected="selected" @endif>Outros</option>
            </select><span class="obrigatorio">*</span>
          </div>

          {{-- Necessidades especias --}}

          <label class="col-md-1 control-label" for="dependentes[0][necessidades_especiais]" data-toggle="tooltip" title="Necessidades especias">Nesc.</label>
            <div class="col-md-2">
              <select name="dependentes[0][necessidades_especiais]" type="text" class="form-control pne_dependentes input-md" >
                <option value="" disabled selected @if(!old('dependentes[0][necessidades_especiais]')) selected @endif>Selecione...</option>
                <option value="1" @if(old('dependentes[0][necessidades_especiais]') == "1") selected="selected" @endif>Sim</option>
                <option value="0" @if(old('dependentes[0][necessidades_especiais]') == "0") selected="selected" @endif>Não</option>
              </select><span class="obrigatorio">*</span>
            </div>

            <div class="col-md-2">

              <select name="dependentes[0][tipo_deficiencia]" type="text" class="form-control tipo_deficiencia input-md" ><span class="obrigatorio">*</span>
                <option value="" 
                    @if(!old('dependentes[0][tipo_deficiencia]')) 
                        disabled selected 
                    @endif>Tipos...
                </option>

                <option value="Microcefalia" 
                    @if(old('dependentes[0][tipo_deficiencia]') == "Microcefalia") 
                        selected="selected" 
                    @endif>Microcefalia
                </option>

                <option value="Deficiência Física" 
                    @if(old('dependentes[0][tipo_deficiencia]') == "Deficiência Física") 
                        selected="selected" 
                    @endif>Física
                </option>

                <option value="Deficiência Auditiva" 
                    @if(old('dependentes[0][tipo_deficiencia]') == "Deficiência Auditiva") 
                        selected="selected" 
                    @endif>Auditiva
                </option>

                <option value="Deficiência Visual" 
                    @if(old('dependentes[0][tipo_deficiencia]') == "Deficiência Visual") 
                        selected="selected" 
                    @endif>Visual
                </option>

                <option value="Deficiência Mental" 
                    @if(old('dependentes[0][tipo_deficiencia]') == "Deficiência Mental") 
                        selected="selected" 
                    @endif>Mental
                </option>

                <option value="Deficiência Mùltipla" 
                    @if(old('dependentes[0][tipo_deficiencia]') == "Deficiência Mùltipla") 
                        selected="selected" 
                    @endif>Mùltipla
                </option>             

              </select>
            </div>
        </div> {{-- FIM Data de Nascimento, Sexo, Necessidades especias --}}
          
        <div class="col-md-11"></div>
        <button name="submit" value="excluir" data-toggle="tooltip" title="Remover dependente" class="btn btn-circulo btn-cor-perigo glyphicon glyphicon-trash excluir" selected style="display:none;"></button>

        </div> {{-- FIM panel_dependentes --}}

        <div class="div-clone"></div> {{-- Clonagem da div panel_dependentes --}}

      </div> {{-- FIM x_content --}}
    </div> {{-- FIM Dependentes --}}





{{------------------------------------------ Renda ------------------------------------------}}

    <div class="x_panel modal-content" id="renda-familiar">
      {{-- <div class="x_title"> Renda familiar e tempo de residência em Mesquita </div> --}}
      <div class="x_title"> 

        <div class="col-md-10">Informações Adicionais</div>

        <div class="col-md-1">
          <a class="collapse-link">
            <i class="fa fa-chevron-up btn btn-pn-circulo btn-cor-padrao"></i>
          </a>
        </div>

        <div class="col-md-1">
          <button class="btn btn-pn-circulo btn-cor-perigo limpar1" data-toggle="tooltip" title="Limpar campos" value="limpar1"><i class="fa fa-times"></i></button>
        </div>

        <div class="clearfix"></div>


      </div>
      
      <div class="x_content">

        {{-- Renda Familiar, Tempo de residência e Faixa --}}
        <div class="form-group">

          {{-- Renda Familiar --}}
          <label class="col-md-1 control-label" for="renda_familiar">Renda</label>
          <div class="col-md-2">
            <input value="{{ old('renda_familiar') }}" id="renda_familiar" name="renda_familiar" type="text" placeholder="R$ 99.999,99" data-inputmask="'mask': 'R$ 99.999,99', 'numericInput' : true" class="form-control input-md cash"><span class="obrigatorio">*</span>
          </div>

          {{-- Faixa--}}
          <label class="col-md-1 control-label" for="faixa">Faixa</label>
          <div class="col-md-2">
            <input value="{{ old('') }}" id="faixa" name="faixa" type="text" placeholder="Classificação" class="form-control input-md" disabled selected style>
          </div>

          {{-- Código da Inscrição --}}
          <label class="col-md-2 control-label" for="codigo_inscricao">Código da Inscrição</label>
          <div class="col-md-2">
            <input value="{{ old('codigo_inscricao') }}" id="codigo_inscricao" name="codigo_inscricao" type="text" class="form-control input-md" disabled selected style>
          </div>

        </div> {{-- FIM Renda Familiar e Faixa --}}
        
        {{-- Tempo de residência --}}
        <div class="form-group">

          {{-- Tempo de residência --}}
          <label class="col-md-1 control-label" for="inicio-residencia" data-toggle="tooltip" title="Tempo de residência  ">Início</label>
          <div class="col-md-2">
            <input value="{{ old('inicio-residencia') }}" id="inicio-residencia" name="tempo_residencia" type="date" placeholder="01 / 01 / 2000" class="form-control input-md global_data" > <span class="obrigatorio">*</span>
          </div>

          {{-- Faixa--}}
          <label class="col-md-1 control-label" for="periodo">Período</label>
          <div class="col-md-2">
            <input value="{{ old('') }}" id="periodo" name="periodo" type="text" placeholder="Classificação" class="form-control input-md" disabled selected style>
          </div>

        </div> {{-- Tempo de residência --}}
      </div> {{-- FIM x_content --}}


    </div> {{-- FIM renda-familiar --}}

    </br>

    {{-- Botões Enviar e Limpar --}}
    <div class="form-group">
      <label class="col-md-1 control-label" for="button1id">
        <button id="button1id" type="submit" value="submit" name="button1id" data-toggle="tooltip" title="Salvar formulário" class="btn btn-lg-circulo btn-cor-padrao fa fa-floppy-o"></button>
      </label>

      <label class="col-md-11 control-label" for="button2id">
        <button id="button2id" type="reset" value="reset" name="button2id" data-toggle="tooltip" title="Limpar formulário" class="btn btn btn-lg-circulo btn-cor-perigo fa fa-times"></button>
      </label>
    </div>
  
  </form> {{-- FIM cadastro_pessoa --}}
    
@endsection

@push('scripts')

  {{-- Script para máscara numérica. Ex.: CPF, RG --}}
  <script src="{{ asset("js/jquery.inputmask.bundle.min.js") }}"></script>

  {{-- Switchery --}}

  <script src="{{ asset("vendors/switchery/dist/switchery.min.js") }}"></script>
  
  @include('includes.pessoas.create.scripts')

@endpush