@extends("layouts.blank")

@section('titulo')

  Alterar Informações do Participante

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

    <form id="cadastro_pessoa" class="form-horizontal" method="post" action="{{ url("/pessoas/$pessoa->id") }}">

    {{ csrf_field() }}
    {{ method_field('PUT') }}

{{------------------------------------ Participante --------------------------------------------}}

      <div class="x_panel" id="participante">
        
        <div class="x_title"> Participante </div>
        
        {{-- Nome --}}
        <div class="form-group">
          <label class="col-md-1 control-label" for="nome">Nome</label>
          <div class="col-md-7">
            <input value="{{ $pessoa->nome }}" id="nome" name="nome" type="text" placeholder="Informe o nome" class="form-control input-md nome">
          </div>
          <div class="exibir">
            <label class="col-md-3 control-label" for="mulher_responsavel">Responsável familiar</label>
            <div class="col-md-1">
              <input type="checkbox" @if($pessoa->mulher_responsavel) checked @endif id="mulher_responsavel" name="mulher_responsavel" style="margin-top: 12px" data-switchery="true"><span style="margin-top: -4px;margin-left: -56px" class="obrigatorio">*</span>
            </div>
          </div>
        </div>

        {{-- CPF, NIS/PIS, Bolsa Família e Carteira de trabalho --}}
        <div class="form-group">

          {{-- CPF --}}      
          <label class="col-md-1 control-label" for="cpf">CPF</label>  
            <div class="col-md-2">
              <input value="{{ $pessoa->cpf }}" id="cpf" name="cpf" type="text" placeholder="999.999.999-99" data-inputmask="'mask': '999.999.999-99', 'numericInput': true" class="form-control input-md cpf"><span class="obrigatorio">*</span>
            </div>

          {{-- NIS/PIS --}}            
          <label class="col-md-1 control-label" for="nis">NIS/PIS</label>  
          <div class="col-md-2">
            <input value="{{ $pessoa->nis }}" id="nis" name="nis" type="text" placeholder="999.999999.99-99" data-inputmask="'mask': '999.99999.99-9', 'numericInput': true" class="form-control input-md nis" >
          </div>

          {{-- Carteira de Trabalho --}}            
          <label class="col-md-1 control-label" for="ctps">CTPS</label>  
          <div class="col-md-2">
            <input value="{{ $pessoa->ctps }}" id="ctps" name="ctps" type="text" placeholder="9999999 999-9" data-inputmask="'mask': '9999999 999-9', 'numericInput': true" class="form-control input-md carteira" >
          </div>

          {{-- Bolsa Família --}}            
          <label class="col-md-1 control-label" for="bolsa_familia">Bolsa F.</label>  
          <div class="col-md-2">
            <select id="bolsa_familia" name="bolsa_familia" type="text" class="form-control input-md" >
              <option value="" disabled selected>Selecione...</option>
              <option value="1" @if($pessoa->bolsa_familia == "1") selected="selected" @endif >Possui</option>
              <option value="0" @if($pessoa->bolsa_familia == "0") selected="selected" @endif >Não possui</option>
            </select><span class="obrigatorio">*</span>
          </div>

        </div> {{-- FIM CPF, NIS/PIS e Bolsa Família --}}


        {{-- RG, Orgão Emissor do RG e Data de Emissão do RG--}}
        <div class="form-group">
        
          <!-- RG-->            
          <label class="col-md-1 control-label" for="rg">RG</label>
          <div class="col-md-2">
            <input value="{{ $pessoa->rg }}" id="rg" name="rg" placeholder="99.999.999-9" data-inputmask="'mask': '99.999.999-9', 'numericInput': true" class="form-control input-md rg" >
          </div>

          <!-- Orgão Emissor do RG-->
          <label class="col-md-1 control-label" for="orgao_emissor_rg">Orgão</label>  
          <div class="col-md-2">
            <input value="{{ $pessoa->orgao_emissor_rg }}" id="orgao_emissor_rg" name="orgao_emissor_rg" type="text" placeholder="Orgão Emissor" class="form-control input-md" >
          </div>

          <!-- Data de Emissão do RG-->
          <label class="col-md-1 control-label" for="emissao_rg">Emissão</label>  
          <div class="col-md-2">
            <input value="{{ $pessoa->emissao_rg }}" id="emissao_rg" name="emissao_rg" type="date" class="form-control input-md global_data" >
          </div>

        </div> {{-- FIM RG, Orgão Emissor do RG e Data de Emissão do RG --}}


        {{-- Data de Nascimento, Sexo, Deficiente --}}
        <div class="form-group">

          {{-- Data de Nascimento --}}
          <label class="col-md-1 control-label" for="nascimento" data-toggle="tooltip" title="Data de nascimento">Nasc.</label>  
          <div class="col-md-2">
            <input value="{{ $pessoa->nascimento }}" id="nascimento" name="nascimento" type="date" class="form-control input-md global_data"><span class="obrigatorio">*</span>
          </div>

          {{-- Sexo   --}}
          <label class="col-md-1 control-label" for="sexo">Sexo</label>
          <div class="col-md-2"> <span class="obrigatorio">*</span>
            <select id="sexo" name="sexo" type="text" class="form-control input-md" >
              <option value="" disabled selected>Selecione...</option>
              <option value="Masculino" @if($pessoa->sexo == "Masculino") selected="selected" @endif>Masculino</option>
              <option value="Feminino" @if($pessoa->sexo == "Feminino") selected="selected" @endif>Feminino</option>
              <option value="Outros" @if($pessoa->sexo == "Outros") selected="selected" @endif>Outros</option>
            </select><span class="obrigatorio">*</span>
          </div>

          {{-- Deficiente --}}
          <label class="col-md-1 control-label" for="necessidades_especiais" data-toggle="tooltip" title="Necessidades especias">Nesc.</label>
          <div class="col-md-2"> <span class="obrigatorio">*</span>
            <select id="necessidades_especiais" name="necessidades_especiais" type="text" class="form-control input-md" > 
              <option value=" " disabled selected @if(!$pessoa->necessidades_especiais) selected @endif>Selecione...</option>
              <option value="1" @if($pessoa->necessidades_especiais == "1") selected="selected" @endif>Sim</option>
              <option value="0" @if($pessoa->necessidades_especiais == "0") selected="selected" @endif>Não</option>
            </select><span class="obrigatorio">*</span>
          </div>

          <div class="col-md-2">
            <select id="tipo_necessidade" name="tipo_deficiencia" type="text" class="form-control input-md" >
              <option value=" " disabled selected
                  @if(!is_null($pessoa->tipo_deficiencia)) 
                      selected 
                  @endif>Tipos...
              </option>

              <option value="Microcefalia" 
                  @if($pessoa->tipo_deficiencia == "Microcefalia") 
                      selected="selected" 
                  @endif>Microcefalia
              </option>

              <option value="Deficiência Física" 
                  @if($pessoa->tipo_deficiencia == "Deficiência Física") 
                      selected="selected" 
                  @endif>Física
              </option>

              <option value="Deficiência Auditiva" 
                  @if($pessoa->tipo_deficiencia == "Deficiência Auditiva") 
                      selected="selected" 
                  @endif>Auditiva
              </option>

              <option value="Deficiência Visual" 
                  @if($pessoa->tipo_deficiencia == "Deficiência Visual") 
                      selected="selected" 
                  @endif>Visual
              </option>

              <option value="Deficiência Mental" 
                  @if($pessoa->tipo_deficiencia == "Deficiência Mental") 
                      selected="selected" 
                  @endif>Deficiência Mental
              </option>

              <option value="Deficiência Mùltipla" 
                  @if($pessoa->tipo_deficiencia == "Deficiência Mùltipla") 
                      selected="selected" 
                  @endif>Deficiência Mùltipla
              </option>             

            </select>
          </div>
        
        </div> {{-- Fim Data de Nascimento, Sexo, Deficiente --}}


        {{-- CEP, Munícipio e Bairro --}}
        <div class="form-group">

          

          <!-- CEP-->
          <label class="col-md-1 control-label" for="cep">
          <a href="http://www.buscacep.correios.com.br/sistemas/buscacep/" target="_blank" class="btn btn-pn-circulo btn-cor-padrao glyphicon glyphicon-search" data-toggle="tooltip" title="Buscar CEP" formtarget="_blank" style="margin-right: 0; margin-bottom: 3px;"></a>
          CEP
          </label>
          <div class="col-md-2">
            <input value="{{ $pessoa->endereco->cep }}" id="cep" name="endereco[cep]" type="text" placeholder="99999-999" data-inputmask="'mask': '99999-999', 'numericInput': true" class="form-control input-md cep"><span class="obrigatorio">*</span>
          </div>

          <!-- Município-->
          <label class="col-md-1 control-label" for="municipio">Município</label>
          <div class="col-md-2">
            <input value="{{ $pessoa->endereco->municipio }}" disabled="disabled" id="municipio" name="endereco[municipio]" type="text" placeholder="Mesquita" value="Mesquita" class="form-control input-md" >
          </div>

          {{-- Bairro --}}
          <label class="col-md-1 control-label" for="bairro">Bairro</label>
          <div class="col-md-2">
            <input value="{{ $pessoa->endereco->bairro }}" id="bairro" name="endereco[bairro]" type="text" placeholder="Centro" class="form-control input-md"> <span class="obrigatorio">*</span>
          </div>

        </div> {{-- FIM CEP, Munícipio e Bairro--}}

        {{-- Logradouro, Número e Complemento --}}
        <div class="form-group">

          <!-- Logradouro ...Av...Rua....etc-->
          <label class="col-md-1 control-label" for="logradouro" data-toggle="tooltip" title="Logradouro">Log.</label>
          <div class="col-md-3">
            <input value="{{ $pessoa->endereco->logradouro }}" id="logradouro" name="endereco[logradouro]" type="text" placeholder="Av, Rua, Travessa..." class="form-control input-md"><span class="obrigatorio">*</span>
          </div>

            <!-- Número da residência-->
          <label class="col-md-1 control-label" for="numero">Número</label>
          <div class="col-md-2">
            <input value="{{ $pessoa->endereco->numero }}" id="numero" name="endereco[numero]" type="text" placeholder="999" class="form-control input-md"><span class="obrigatorio">*</span>
          </div>

          {{-- Complemento --}}
          <label class="col-md-2 control-label" for="complemento">Complemento</label>
          <div class="col-md-3">
            <input value="{{ $pessoa->endereco->complemento }}" id="complemento" name="endereco[complemento]" type="text" placeholder="Ap., Fundos,..." class="form-control input-md">
          </div>

        </div> {{-- FIM Logradouro, Número e Complemento --}}

        {{-- Email , Celular e Telefone --}}
        <div class="form-group">

          {{-- Email --}}
          <label class="col-md-1 control-label" for="email">Email</label>  
          <div class="col-md-5">
            <input value="{{ $pessoa->email }}" id="email" name="email" type="text" placeholder="email@servidor.com.br" class="form-control input-md email">
          </div>

          {{-- Celular --}}
          <label class="col-md-1 control-label" for="telefones[0][numero]">Celular</label>
          <div class="col-md-2">
            <input value="{{ $pessoa->telefones[0]->numero }}" id="telefones[0][numero]" name="telefones[0][numero]" type="text" placeholder="(99) 99999-9999" data-inputmask="'mask': '(99) 99999-9999', 'numericInput': true" class="form-control input-md celular"><span class="obrigatorio">*</span>
            <input type="hidden" name="telefones[0][tipo_telefone]" value="Celular">
          </div>

          {{-- Telefone --}}
          <label class="col-md-1 control-label" for="telefones[1][numero]">Tel.</label>
          <div class="col-md-2">
            <input value="{{ $pessoa->telefones[1]->numero }}" id="telefones[1][numero]"  name="telefones[1][numero]" type="text" placeholder="(99) 9999-9999" data-inputmask="'mask': '(99) 9999-9999'" class="form-control input-md telefone">
            <input type="hidden" name="telefones[1][tipo_telefone]" value="Fixo">
          </div>

        </div> {{-- FIM Email, Celular e Telefone --}}

      </div> {{-- fim Participante --}}





{{------------------------------------ CO-Participante ------------------------------------}}

      <div class="x_panel" id="co-participante">
        
        <div class="x_title"> Co-Participante </div>

        {{-- Nome --}}
        <div class="form-group">
          <label class="col-md-1 control-label" for="coparticipante[nome]">Nome</label>
            <div class="col-md-7">
              <input value="{{ $pessoa->coparticipante->nome or "" }}" id="coparticipante[nome]" name="coparticipante[nome]" type="text" placeholder="Informe o nome" class="form-control input-md nome"><span class="obrigatorio">*</span>
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
          <input value="{{ $pessoa->coparticipante->cpf or "" }}" id="coparticipante[cpf]" name="coparticipante[cpf]" type="text" placeholder="999.999.999-99" data-inputmask="'mask': '999.999.999-99', 'numericInput': true" class="form-control input-md cpf"><span class="obrigatorio">*</span>
        </div>

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

        {{-- Bolsa Família --}}
        <label class="col-md-1 control-label" for="coparticipante[bolsa_familia]">Bolsa F.</label>  
        <div class="col-md-2">
          <select id="coparticipante[bolsa_familia]" name="coparticipante[bolsa_familia]" type="text" class="form-control input-md"><span class="obrigatorio">*</span>
            <option value="" disabled selected>Selecione...</option>
            
            @if(count($pessoa->coparticipante))
                <option value=" " @if(!$pessoa->coparticipante->bolsa_familia) disabled selected @endif">Selecione...</option>
                <option value="1" @if($pessoa->coparticipante->bolsa_familia == "1") selected="selected" @endif >Possui</option>
                <option value="0" @if($pessoa->coparticipante->bolsa_familia == "0") selected="selected" @endif >Não possui</option>

              @else

                <option value="1">Possui</option>
                <option value="0">Não possui</option>

              @endif
            </select>
          </div>

      </div> {{-- FIM CPF, NIS/PIS e Bolsa Família --}}


      {{-- RG, Data de Emissão do RG, Orgão Emissor do RG --}}
      <div class="form-group">

        <!-- RG-->            
        <label class="col-md-1 control-label" for="coparticipante[rg]">RG</label>
        <div class="col-md-2">
          <input value="{{ $pessoa->coparticipante->rg or "" }}" id="coparticipante[rg]" name="coparticipante[rg]" type="text" placeholder="99.999.999-9" data-inputmask="'mask': '99.999.999-9', 'numericInput': true" class="form-control input-md rg" >
        </div>

        <!-- Orgão Emissor do RG-->
        <label class="col-md-1 control-label" for="coparticipante[orgao_emissor_rg]">Orgão</label>  
        <div class="col-md-2">
          <input value="{{ $pessoa->coparticipante->orgao_emissor_rg or "" }}" id="coparticipante[orgao_emissor_rg]" name="coparticipante[orgao_emissor_rg]" type="text" placeholder="Orgão Emissor" class="form-control input-md" >
        </div>

        <!-- Data de Emissão do RG-->
        <label class="col-md-1 control-label" for="coparticipante[emissao_rg]">Emissão</label>  
        <div class="col-md-2">
          <input value="{{ $pessoa->coparticipante->emissao_rg or "" }}" id="coparticipante[emissao_rg]" name="coparticipante[emissao_rg]" type="date" placeholder="Data de Emissão" class="form-control input-md global_data" >
        </div>
            
      </div> {{-- FIM RG, Orgão Emissor do RG e Data de Emissão do RG --}}


      {{-- Data de Nascimento, Sexo, Deficiente --}}
      <div class="form-group">

        {{-- Data de Nascimento --}}
        <label class="col-md-1 control-label" for="coparticipante[nascimento]" data-toggle="tooltip" title="Data de nascimento">Nasc.</label>
        <div class="col-md-2">
          <input value="{{ $pessoa->coparticipante->nascimento or "" }}" id="coparticipante[nascimento]" name="coparticipante[nascimento]" type="date" placeholder="01 / 01 / 2000" class="form-control input-md global_data"><span class="obrigatorio">*</span>
        </div>

        {{-- Sexo   --}}
        <label class="col-md-1 control-label" for="coparticipante[sexo]">Sexo</label>
        <div class="col-md-2"> <span class="obrigatorio">*</span>
          <select id="coparticipante[sexo]" name="coparticipante[sexo]" type="text" class="form-control input-md">
            <option value="" disabled selected>Selecione...</option>

          @if(count($pessoa->coparticipante))

            <option value=" " @if(!$pessoa->coparticipante->sexo) disabled selected @endif">Selecione...</option>
            <option value="Masculino" @if($pessoa->coparticipante->sexo == "Masculino") selected="selected" @endif>Masculino</option>
            <option value="Feminino" @if($pessoa->coparticipante->sexo == "Feminino") selected="selected" @endif>Feminino</option>
            <option value="Outros" @if($pessoa->coparticipante->sexo == "Outros") selected="selected" @endif>Outros</option><span class="obrigatorio">*</span>

          @else

                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
                <option value="Outros">Outros</option>

              @endif
          </select>
        </div>
        
        {{-- Deficiente --}}
        <label class="col-md-1 control-label" for="necessidades_especiais" data-toggle="tooltip" title="Necessidades especias">Nesc.</label>

          <div class="col-md-2">
            <select id="necessidades_especiais_coparticipante" name="coparticipante[necessidades_especiais]" type="text" class="form-control input-md" >
              <option value=" " disabled selected="">Selecione...</option>

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
            <option value="" disabled selected="">Tipos...</option>

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

      </div> {{-- Fim Data de Nascimento, Sexo, Deficiente --}}


      {{-- CEP, Município e Bairro --}}
      <div class="form-group">

        <!-- CEP-->
        <label class="col-md-1 control-label" for="coparticipante[cep]">
          <button class="btn btn-pn-circulo btn-cor-padrao duplicar-endereco glyphicon glyphicon-repeat" data-toggle="tooltip" title="Copiar endereço" style="margin-right: 0; margin-bottom: 3px;"></button>
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
          <input value="{{ $pessoa->coparticipante->endereco->bairro or ""}}" id="coparticipante[bairro]" name="coparticipante[endereco][bairro]" type="text" placeholder="Centro" class="form-control input-md"><span class="obrigatorio">*</span>
        </div>

      </div> {{-- FIM CEP, Município e Bairro --}}            


      {{-- Logradouro, Número e Complemento --}}
      <div class="form-group">

        {{-- Logradouro ...Av...Rua....etc --}}
        <label class="col-md-1 control-label" for="coparticipante[endereco][logradouro]" data-toggle="tooltip" title="Logradouro">Log.</label>
        <div class="col-md-3">
          <input value="{{ $pessoa->coparticipante->endereco->logradouro or ""}}" id="coparticipante[logradouro]" name="coparticipante[endereco][logradouro]" type="text" placeholder="Av, Rua, Travessa..." class="form-control input-md"><span class="obrigatorio">*</span>
        </div>

        <!-- Número da residência-->
        <label class="col-md-1 control-label" for="coparticipante[numero]">Numero</label>
        <div class="col-md-2">
          <input value="{{ $pessoa->coparticipante->endereco->numero or ""}}" id="coparticipante[numero]" name="coparticipante[endereco][numero]" type="text" placeholder="999" class="form-control input-md"><span class="obrigatorio">*</span>
        </div>

        {{-- Complemento --}}
        <label class="col-md-2 control-label" for="coparticipante[complemento]">Complemento</label>
        <div class="col-md-3">
          <input value="{{ $pessoa->coparticipante->endereco->complemento or "" }}" id="coparticipante[complemento]" name="coparticipante[endereco][complemento]" type="text" placeholder="Ap., Fundos,..." class="form-control input-md">
        </div>

      </div> {{-- Logradouro, Número e Complemento --}}

      {{-- Email , elular e Telefone --}}
      <div class="form-group">

        {{-- Email --}}
        <label class="col-md-1 control-label" for="coparticipante[email]">Email</label>  
        <div class="col-md-5">
          <input value="{{ $pessoa->coparticipante->email or "" }}" id="coparticipante[email]" name="coparticipante[email]" type="text" placeholder="email@servidor.com.br" class="form-control input-md email">
        </div>

        {{-- Celular --}}
        <label class="col-md-1 control-label" for="coparticipante[telefones][0][numero]">Celular</label>
        <div class="col-md-2">
          <input value="{{ $pessoa->coparticipante->telefones[0]->numero or ""}}" id="coparticipante[telefones][0][numero]" data-inputmask="'mask' : '(99) 99999-9999'" name="coparticipante[telefones][0][numero]" type="text" placeholder="(99) 9 9999-9999" class="form-control input-md celular"><span class="obrigatorio">*</span>
          <input type="hidden" value="Celular" name="coparticipante[telefones][0][tipo_telefone]">
        </div>

        {{-- Telefone --}}
        <label class="col-md-1 control-label" for="coparticipante[telefones][1][numero]">Tel.</label>
        <div class="col-md-2">
          <input value="{{ $pessoa->coparticipante->telefones[1]->numero or "" }}" id="coparticipante[telefones][1][numero]" name="coparticipante[telefones][1][numero]" type="text" placeholder="(99) 9999-9999" data-inputmask="'mask': '(99) 9999-9999'" class="form-control input-md telefone">
          <input type="hidden" value="Fixo" name="coparticipante[telefones][1][tipo_telefone]">
        </div>

      </div> {{-- FIM Email, Celular e Telefone --}}
    
    </div> {{-- fim Co-participante --}}


      {{------------------------------------ Dependentes ------------------------------------}}

    <div class="x_panel" id="dependentes">
      
      <div class="x_title"> 
        <div class="form-group">
          <div class="col-md-11"> Dependentes </div>
            <button name="submit" value="clonar" data-toggle="tooltip" title="Adicionar dependente" class="btn btn-pn-circulo btn-cor-padrao glyphicon glyphicon-plus clonar"></button>
        </div>
      </div>


      {{-- Diferente da página de criação, esse índice deve iniciar em 0, pois o próprio php irá --}}
      {{-- criar cada item e atualizar o contador --}}

      <?php $i = 0; ?>
        
      @forelse($pessoa->dependentes as $dependente)

          <div class="x_panel @if($i==0) panel_dependentes @else clone_dependentes @endif">
          
            {{-- Nome --}}
            <div class="form-group">
              <label class="col-md-1 control-label" for="dependentes[{{ $i }}][nome]">Nome</label>
              <div class="col-md-7">
                <input value="{{ $dependente->nome }}" name="dependentes[{{ $i }}][nome]" id="dependentes[{{ $i }}][nome]" type="text" placeholder="Informe o nome" class="form-control input-md"><span class="obrigatorio">*</span>
              </div>

              <label class="col-md-1 control-label" for="dependentes.0.parentesco">Parent.</label>
              <div class="col-md-2">
                <select name="dependentes[{{ $i }}][parentesco]" id="dependentes[{{ $i }}][parentesco]" type="text" placeholder="Necessidades Especiais" class="form-control input-md" >
                  <option value="" disabled selected>Selecione...</option>
                  <option value="1"  @if($dependente->parentesco == "Avós")  selected="selected" @endif>Avô(ó)</option>
                  <option value="2"  @if($dependente->parentesco == "Bisavós")  selected="selected" @endif>Bisavô(ó)</option>
                  <option value="3"  @if($dependente->parentesco == "Bisneto(a)")  selected="selected" @endif>Bisneto(a)</option>
                  <option value="4"  @if($dependente->parentesco == "Companheiro(a)")  selected="selected" @endif>Companheiro(a)</option>
                  <option value="5"  @if($dependente->parentesco == "Cônjuge")  selected="selected" @endif>Cônjuge</option>
                  <option value="6"  @if($dependente->parentesco == "Enteado(a)")  selected="selected" @endif>Enteado(a)</option>
                  <option value="7"  @if($dependente->parentesco == "Ex-esposa")  selected="selected" @endif>Ex-esposa</option>
                  <option value="8"  @if($dependente->parentesco == "Filho(a)")  selected="selected" @endif>Filho(a)</option>
                  <option value="9"  @if($dependente->parentesco == "Irmão(ã)")  selected="selected" @endif>Irmão(ã)</option>
                  <option value="10" @if($dependente->parentesco == "Neto(a)") selected="selected" @endif>Neto(a)</option>
                  <option value="11" @if($dependente->parentesco == "Pais") selected="selected" @endif>Pais</option>
                  <option value="12" @if($dependente->parentesco == "Outras") selected="selected" @endif>Outras</option>
                </select><span class="obrigatorio">*</span>
              </div>
            </div>
          
            {{-- Data de Nascimento, Sexo, Deficiente --}}
            <div class="form-group">

            {{-- Data de Nascimento --}}
            <label class="col-md-1 control-label" for="dependentes[{{ $i }}][nascimento]" data-toggle="tooltip" title="Data de nascimento">Nasc.</label>  
            <div class="col-md-2">
              <input value="{{ $dependente->nascimento }}" name="dependentes[{{ $i }}][nascimento]" type="date" placeholder="01/01/2000" class="form-control input-md global-data"><span class="obrigatorio">*</span>
            </div>

            {{-- Sexo   --}}
            <label class="col-md-1 control-label" for="dependentes[{{ $i }}][sexo]">Sexo</label>
            <div class="col-md-2">
              <select name="dependentes[{{ $i }}][sexo]" id="dependentes[{{ $i }}][sexo]" type="text" placeholder="Sexo" class="form-control input-md" >
                <option value="" disabled @if(!$dependente->sexo) selected @endif>Selecione...</option>
                <option value="Masculino" @if($dependente->sexo == "Masculino") selected="selected" @endif>Masculino</option>
                <option value="Feminino" @if($dependente->sexo == "Feminino") selected="selected" @endif>Feminino</option>
                <option value="Outros" @if($dependente->sexo == "Outros") selected="selected" @endif>Outros</option>
              </select><span class="obrigatorio">*</span>
            </div>

            {{-- Deficiente --}}
            <label class="col-md-1 control-label" for="dependentes[{{ $i }}][necessidades_especiais]" data-toggle="tooltip" title="Necessidades especias">Nesc.</label>
            <div class="col-md-2">
              <select name="dependentes[{{ $i }}][necessidades_especiais]" id="dependentes[{{ $i }}][necessidades_especiais]" type="text" placeholder="Necessidades Especiais" class="form-control pne_dependentes input-md" >
                <option value=" " selected @if(!$dependente->necessidades_especiais) selected @endif>Selecione...</option>
                <option value="1" @if($dependente->necessidades_especiais == "1") selected="selected" @endif>Sim</option>
                <option value="0" @if($dependente->necessidades_especiais == "0") selected="selected" @endif>Não</option>
              </select><span class="obrigatorio">*</span>
            </div>

            <div class="col-md-2">

            <select name="dependentes[{{ $i }}][tipo_deficiencia]" type="text" class="form-control tipo_deficiencia input-md" ><span class="obrigatorio">*</span>
              <option value=" " 
                  @if(is_null($dependente->tipo_deficiencia))
                     disabled selected 
                  @endif>Tipos...
              </option>

              <option value="Microcefalia" 
                  @if($dependente->tipo_deficiencia == "Microcefalia") 
                      selected="selected" 
                  @endif>Microcefalia
              </option>

              <option value="Deficiência Física" 
                  @if($dependente->tipo_deficiencia == "Deficiência Física") 
                      selected="selected" 
                  @endif>Física
              </option>

              <option value="Deficiência Auditiva" 
                  @if($dependente->tipo_deficiencia == "Deficiência Auditiva") 
                      selected="selected" 
                  @endif>Auditiva
              </option>

              <option value="Deficiência Visual" 
                  @if($dependente->tipo_deficiencia == "Deficiência Visual") 
                      selected="selected" 
                  @endif>Visual
              </option>

              <option value="Deficiência Mental" 
                  @if($dependente->tipo_deficiencia == "Deficiência Mental") 
                      selected="selected" 
                  @endif>Mental
              </option>

              <option value="Deficiência Mùltipla" 
                  @if($dependente->tipo_deficiencia == "Deficiência Mùltipla") 
                      selected="selected" 
                  @endif>Mùltipla
              </option>             

            </select>
          </div>
          
          </div>  {{-- FIM Data de Nascimento, Sexo, Deficiente --}}
              
          <div class="col-md-11"></div>
          <button name="submit" value="excluir" data-toggle="tooltip" title="Remover dependente" class="btn btn-circulo btn-cor-perigo glyphicon glyphicon-trash excluir" selected></button>

          </div> {{-- FIM panel_dependentes --}}

          <?php $i++; ?>

      @empty

        <div class="x_panel panel_dependentes">
      
          {{-- Nome --}}
          <div class="form-group">
            <label class="col-md-1 control-label" for="dependentes[0][nome]">Nome</label>
            <div class="col-md-8">
              <input value="" name="dependentes[0][nome]" id="dependentes[0][nome]" type="text" placeholder="Informe o nome" class="form-control input-md" >
            </div>

            <label class="col-md-1 control-label" for="dependentes.0.parentesco">Parentesco</label>
            <div class="col-md-2">
              <select name="dependentes[0][parentesco]" id="dependentes[0][parentesco]" type="text" placeholder="Necessidades Especiais" class="form-control input-md" >
                <option value="">Selecione...</option>
                <option value="1" >Avô(ó)</option>
                <option value="2" >Bisavô(ó)</option>
                <option value="3" >Bisneto(a)</option>
                <option value="4" >Companheiro(a)</option>
                <option value="5" >Cônjuge</option>
                <option value="6" >Enteado(a)</option>
                <option value="7" >Ex-esposa</option>
                <option value="8" >Filho(a)</option>
                <option value="9" >Irmão(ã)</option>
                <option value="10">Neto(a)</option>
                <option value="11">Pais</option>
                <option value="12">Outras</option>
              </select>
            </div>
          </div>
        
          {{-- Data de Nascimento, Sexo, Deficiente --}}
          <div class="form-group">

          {{-- Data de Nascimento --}}
          <label class="col-md-1 control-label" for="dependentes[0][nascimento]">Nascimento</label>  
          <div class="col-md-2">
            <input value="" name="dependentes[0][nascimento]" type="date" placeholder="01/01/2000" class="form-control input-md global_data" >
          </div>

          {{-- Sexo   --}}
          <label class="col-md-1 control-label" for="dependentes[0][sexo]">Sexo</label>
          <div class="col-md-2">
            <select name="dependentes[0][sexo]" id="dependentes[0][sexo]" type="text" placeholder="Sexo" class="form-control input-md" >
              <option value="">Selecione...</option>
              <option value="Masculino">Masculino</option>
              <option value="Feminino">Feminino</option>
              <option value="Outros">Outros</option>
            </select>
          </div>

          {{-- Deficiente --}}
          <label class="col-md-1 control-label" for="dependentes[0][necessidades_especiais]">Deficiente</label>
          <div class="col-md-2">
            <select name="dependentes[0][necessidades_especiais]" id="dependentes[0][necessidades_especiais]" type="text" placeholder="Necessidades Especiais" class="form-control pne_dependentes input-md" >
              <option value="">Selecione...</option>
              <option value="1">Sim</option>
              <option value="0">Não</option>
            </select>
          </div>

          <div class="col-md-2">

            <select name="dependentes[0][tipo_deficiencia]" type="text" class="form-control tipo_deficiencia input-md" ><span class="obrigatorio">*</span>
              
                <option value="">Tipos...</option>
                <option value="Microcefalia">Microcefalia</option>
                <option value="Deficiência Física">Física</option>
                <option value="Deficiência Auditiva">Auditiva</option>
                <option value="Deficiência Visual">Visual</option>
                <option value="Deficiência Mental">Mental</option>
                <option value="Deficiência Mùltipla">Múltipla</option>             

            </select>
          </div>
        
        </div>  {{-- FIM Data de Nascimento, Sexo, Deficiente --}}
            
        <div class="col-md-11"></div>
        <button name="submit" value="excluir" class="btn btn-xs btn-danger glyphicon glyphicon-trash excluir" selected style="display:none;"></button>

        </div> {{-- FIM panel_dependentes --}}

      @endforelse

      <div class="div-clone"></div> {{-- Clonagem da div panel_dependentes --}}

    </div> {{-- FIM Dependentes --}}



{{------------------------------------------ Renda ------------------------------------------}}

    <div class="x_panel" id="renda-familiar">
      {{-- <div class="x_title"> Renda familiar e tempo de residência em Mesquita </div> --}}
      <div class="x_title"> Informações Adicionais</div>
      
      {{-- Renda Familiar, Tempo de residência e Faixa --}}
      <div class="form-group">

        {{-- Renda Familiar --}}
        <label class="col-md-1 control-label" for="renda_familiar">Renda</label>
        <div class="col-md-2">
          <input value="{{ $pessoa->renda_familiar }}" id="renda_familiar" name="renda_familiar" type="text" placeholder="R$ 99.999,99" data-inputmask="'mask': 'R$ 99.999,99', 'numericInput': true" class="form-control input-md cash"><span class="obrigatorio">*</span>
        </div>

        {{-- Faixa--}}
        <label class="col-md-1 control-label" for="faixa">Faixa</label>
        <div class="col-md-2">
          <input value="" id="faixa" name="faixa" type="text" placeholder="Classificação" class="form-control input-md" disabled selected style>
        </div>

        {{-- Código da Inscrição --}}
        <label class="col-md-2 control-label" for="codigo_inscricao">Código da Inscrição</label>
        <div class="col-md-2">
          <input value="{{ old('codigo_inscricao') }}" id="codigo_inscricao" name="codigo_inscricao" type="text" class="form-control input-md" disabled selected>
        </div>

      </div> {{-- FIM Renda Familiar e Faixa --}}
      
      {{-- Tempo de residência --}}
      <div class="form-group">

        {{-- Tempo de residência --}}
        <label class="col-md-1 control-label" for="inicio-residencia">Início</label>
        <div class="col-md-2">
          <input value="{{ $pessoa->tempo_residencia }}" id="inicio-residencia" name="inicio-residencia" type="date" placeholder="01 / 01 / 2000" class="form-control input-md global_data"><span class="obrigatorio">*</span>
        </div>

        {{-- Faixa--}}
        <label class="col-md-1 control-label" for="periodo">Período</label>
        <div class="col-md-2">
          <input value="" id="periodo" name="periodo" type="text" placeholder="Classificação" class="form-control input-md" disabled selected style>
        </div>

      </div> {{-- Tempo de residência --}}


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

  <script>
    
    $(function(){

        calculaFaixa($("input#renda_familiar").val());
        calculaPeriodo($("input#inicio-residencia").val());

    });

  </script>

@endpush