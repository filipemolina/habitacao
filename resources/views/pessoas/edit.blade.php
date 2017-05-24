@extends("layouts.blank")

@section('titulo')

  Cadastro de Pessoas

@endsection

@push('css')
  
  <!-- CSS views Pessoas-->
  <link href="{{ asset("css/pessoas.css") }}" rel="stylesheet">

@endpush

@section('main_container')

    {{-- Mostrar os erros de validação --}}

    @if( count($errors) > 0)

        <div class="alert alert-roxo alert-dismissible" style="margin-top: 70px;" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

          <strong>Atenção!</strong><br>

          @foreach($errors->all() as $erro)

            {{ $erro }} <br>

          @endforeach

        </div>

    @endif

    {{-- Mostrar mensagem de sucesso --}}

    @if(isset($sucesso) && $sucesso)

        <div class="alert alert-dourado alert-dismissible" style="margin-top: 70px;" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>Parabéns!</strong> Participante cadastrado com sucesso!
        </div>

    @endif

    <h2> Cadastro de Pessoa </h2>

    <form id="cadastro_pessoa" class="form-horizontal" method="post" action="{{ url("/pessoas") }}">

    {{ csrf_field() }}


{{------------------------------------ Participante --------------------------------------------}}

      <div class="x_panel" id="participante">
        
        <div class="x_title"> Participante </div>
        
        {{-- Nome --}}
        <div class="form-group">
          <label class="col-md-1 control-label" for="nome">Nome</label>
          <div class="col-md-11">
            <input value="{{ $pessoa->nome }}" id="nome" name="nome" type="text" placeholder="Informe o nome" class="form-control input-md nome" >
          </div>
        </div>

        {{-- CPF, NIS/PIS, Bolsa Família e Carteira de trabalho --}}
        <div class="form-group">

          {{-- CPF --}}      
          <label class="col-md-1 control-label" for="cpf">CPF</label>  
            <div class="col-md-2">
              <input value="{{ $pessoa->cpf }}" id="cpf" name="cpf" type="text" placeholder="999.999.999-99" data-inputmask="'mask': '999.999.999-99'" class="form-control input-md cpf" >
            </div>

          {{-- NIS/PIS --}}            
          <label class="col-md-1 control-label" for="nis">NIS/PIS</label>  
          <div class="col-md-2">
            <input value="{{ $pessoa->nis }}" id="nis" name="nis" type="text" placeholder="999.999999.99-99" class="form-control input-md nis" >
          </div>

          {{-- Carteira de Trabalho --}}            
          <label class="col-md-1 control-label" for="ctps">CTPS</label>  
          <div class="col-md-2">
            <input value="{{ $pessoa->ctps }}" id="ctps" name="ctps" type="text" placeholder="Cart. de Trabalho" class="form-control input-md carteira" >
          </div>

          {{-- Bolsa Família --}}            
          <label class="col-md-1 control-label" for="bolsa_familia">Bolsa F.</label>  
          <div class="col-md-2">
            <select id="bolsa_familia" name="bolsa_familia" type="text" class="form-control input-md" >
              <option value="" disabled selected style="display: none;">Selecione...</option>
              <option value="1" @if($pessoa->bolsa_familia == "1") selected="selected" @endif >Possui</option>
              <option value="0" @if($pessoa->bolsa_familia == "0") selected="selected" @endif >Não possui</option>
            </select>
          </div>

        </div> {{-- FIM CPF, NIS/PIS e Bolsa Família --}}


        {{-- RG, Orgão Emissor do RG e Data de Emissão do RG--}}
        <div class="form-group">
        
          <!-- RG-->            
          <label class="col-md-1 control-label" for="rg">RG</label>
          <div class="col-md-2">
            <input value="{{ $pessoa->rg }}" id="rg" name="rg" data-inputmask="'mask' : '99.999.999-9'" type="text" placeholder="99.999.999-9" class="form-control input-md rg" >
          </div>

          <!-- Orgão Emissor do RG-->
          <label class="col-md-1 control-label" for="orgao_emissor_rg">Orgão</label>  
          <div class="col-md-2">
            <input value="{{ $pessoa->orgao_emissor_rg }}" id="orgao_emissor_rg" name="orgao_emissor_rg" type="text" placeholder="Orgão Emissor" class="form-control input-md" >
          </div>

          <!-- Data de Emissão do RG-->
          <label class="col-md-1 control-label" for="emissao_rg">Emissão</label>  
          <div class="col-md-3">
            <input value="{{ $pessoa->emissao_rg }}" id="emissao_rg" name="emissao_rg" type="date" class="form-control input-md global-data" >
          </div>

        </div> {{-- FIM RG, Orgão Emissor do RG e Data de Emissão do RG --}}


        {{-- Data de Nascimento, Sexo, Deficiente --}}
        <div class="form-group">

          {{-- Data de Nascimento --}}
          <label class="col-md-1 control-label" for="nascimento">Nascimento</label>  
          <div class="col-md-3">
            <input value="{{ $pessoa->nascimento }}" id="nascimento" name="nascimento" type="date" class="form-control input-md global-data" >
          </div>

          {{-- Sexo   --}}
          <label class="col-md-1 control-label" for="sexo">Sexo</label>
          <div class="col-md-2">
            <select id="sexo" name="sexo" type="text" class="form-control input-md" >
              <option value="" disabled selected style="display: none;">Selecione...</option>
              <option value="m" @if($pessoa->sexo == "m") selected="selected" @endif>Masculino</option>
              <option value="f" @if($pessoa->sexo == "f") selected="selected" @endif>Femino</option>
            </select>
          </div>

          {{-- Deficiente --}}
          <label class="col-md-1 control-label" for="necessidades_especiais">Deficiente</label>
          <div class="col-md-2">
            <select id="necessidades_especiais" name="necessidades_especiais" type="text" class="form-control input-md" >
              <option value="" disabled @if(!$pessoa->necessidades_especiais) selected @endif style="display: none;">Selecione...</option>
              <option value="1" @if($pessoa->necessidades_especiais == "1") selected="selected" @endif>Sim</option>
              <option value="0" @if($pessoa->necessidades_especiais == "0") selected="selected" @endif>Não</option>
            </select>
          </div>
        
        </div> {{-- Fim Data de Nascimento, Sexo, Deficiente --}}


        {{-- Logradouro, Número, Complemento --}}
        <div class="form-group">

          <!-- CEP-->
          <label class="col-md-1 control-label" for="cep">CEP</label>
          <div class="col-md-2">
            <input value="{{ $pessoa->cep }}" id="cep" name="cep" type="text" data-inputmask="'mask' : '99.999-999'" placeholder="99999-999" class="form-control input-md cep" >
          </div>

          <!-- Logradouro ...Av...Rua....etc-->
          <label class="col-md-1 control-label" for="logradouro">Logradouro</label>
          <div class="col-md-3">
            <input value="{{ $pessoa->logradouro }}" id="logradouro" name="logradouro" type="text" placeholder="Av, Rua, Travessa..." class="form-control input-md">
          </div>
          
          <!-- Número da residência-->
          <label class="col-md-1 control-label" for="numero">Numero</label>
          <div class="col-md-2">
            <input value="{{ $pessoa->numero }}" id="numero" name="numero" type="text" placeholder="999" class="form-control input-md">
          </div>

        </div> {{-- FIM CEP, Logradouro e Número--}}

        {{-- Complemento, Bairro e Munícipio --}}
        <div class="form-group">

          {{-- Bairro --}}
          <label class="col-md-1 control-label" for="bairro">Bairro</label>
          <div class="col-md-3">
            <input value="{{ $pessoa->bairro }}" id="bairro" name="bairro" type="text" placeholder="Centro" class="form-control input-md">
          </div>
            
          <!-- Município-->
          <label class="col-md-1 control-label" for="municipio">Município</label>
          <div class="col-md-3">
            <input value="{{ $pessoa->municipio }}" disabled="disabled" id="municipio" name="municipio" type="text" placeholder="Mesquita" value="Mesquita" class="form-control input-md" >
          </div>

          {{-- Complemento --}}
          <label class="col-md-2 control-label" for="complemento">Complemento</label>
          <div class="col-md-2">
            <input value="{{ $pessoa->complemento }}" id="complemento" name="complemento" type="text" placeholder="Ap., Fundos,..." class="form-control input-md">
          </div>

        </div> {{-- FIM Bairro, Munícipio e CEP --}}

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
            <input value="{{ $pessoa->telefones[0]->numero }}" id="telefones[0][numero]" data-inputmask="'mask' : '(99) 99999-9999'" name="telefones[0][numero]" type="text" placeholder="(99) 9 9999-9999" class="form-control input-md celular">
            <input type="hidden" name="telefones[0][tipo_telefone]" value="Celular">
          </div>

          {{-- Telefone --}}
          <label class="col-md-1 control-label" for="telefones[1][numero]">Tel.</label>
          <div class="col-md-2">
            <input value="{{ $pessoa->telefones[1]->numero }}" id="telefones[1][numero]" data-inputmask="'mask' : '(99) 9999-9999'" name="telefones[1][numero]" type="text" placeholder="(99) 9999-9999" class="form-control input-md telefone">
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
          <div class="col-md-11">
            <input value="{{ $pessoa->coparticipante->nome }}" id="coparticipante[nome]" name="coparticipante[nome]" type="text" placeholder="Informe o nome" class="form-control input-md nome" >
          </div>
        </div>
        
        {{-- CPF, NIS/PIS, Bolsa Família e Carteira de trabalho --}}
        <div class="form-group">

        {{-- CPF --}}
        <label class="col-md-1 control-label" for="coparticipante[cpf]">CPF</label>  
        <div class="col-md-2">
          <input value="{{ $pessoa->coparticipante->cpf }}" id="coparticipante[cpf]" data-inputmask="'mask' : '999.999.999-99'" name="coparticipante[cpf]" type="text" placeholder="999.999.999-99" class="form-control input-md cpf" >
        </div>

        {{-- NIS/PIS --}}            
        <label class="col-md-1 control-label" for="coparticipante[nis]">NIS/PIS</label>  
        <div class="col-md-2">
          <input value="{{ $pessoa->coparticipante->nis }}" id="coparticipante[nis]" name="coparticipante[nis]" type="text" placeholder="999.999999.99-99" class="form-control input-md nis" >
        </div>

        {{-- Carteira de Trabalho --}}            
        <label class="col-md-1 control-label" for="coparticipante[ctps]">CTPS</label>  
        <div class="col-md-2">
          <input value="{{ $pessoa->coparticipante->ctps }}" id="coparticipante[ctps]" name="coparticipante[ctps]" type="text" placeholder="Cart. de Trabalho" class="form-control input-md carteira" >
        </div>

        {{-- Bolsa Família --}}            
        <label class="col-md-1 control-label" for="coparticipante[bolsa_familia]">Bolsa F.</label>  
        <div class="col-md-2">
          <select id="coparticipante[bolsa_familia]" name="coparticipante[bolsa_familia]" type="text" class="form-control input-md" >
            <option value="" disabled @if(!$pessoa->coparticipante->bolsa_familia) selected @endif style="display: none;">Selectione...</option>
            <option value="1" @if($pessoa->coparticipante->bolsa_familia == "1") selected="selected" @endif>Possui</option>
            <option value="0" @if($pessoa->coparticipante->bolsa_familia == "0") selected="selected" @endif>Não possui</option>
          </select>
        </div>

      </div> {{-- FIM CPF, NIS/PIS e Bolsa Família --}}


      {{-- RG, Data de Emissão do RG, Orgão Emissor do RG --}}
      <div class="form-group">

        <!-- RG-->            
        <label class="col-md-1 control-label" for="coparticipante[rg]">RG</label>
        <div class="col-md-2">
          <input value="{{ $pessoa->coparticipante->rg }}" id="coparticipante[rg]" data-inputmask="'mask' : '99.999.999-9'" name="coparticipante[rg]" type="text" placeholder="99.999.999-9" class="form-control input-md rg" >
        </div>

        <!-- Orgão Emissor do RG-->
        <label class="col-md-1 control-label" for="coparticipante[orgao_emissor_rg]">Orgão</label>  
        <div class="col-md-2">
          <input value="{{ $pessoa->coparticipante->orgao_emissor_rg }}" id="coparticipante[orgao_emissor_rg]" name="coparticipante[orgao_emissor_rg]" type="text" placeholder="Orgão Emissor" class="form-control input-md" >
        </div>

        <!-- Data de Emissão do RG-->
        <label class="col-md-1 control-label" for="coparticipante[emissao_rg]">Emissão</label>  
        <div class="col-md-3">
          <input value="{{ $pessoa->coparticipante->emissao_rg }}" id="coparticipante[emissao_rg]" name="coparticipante[emissao_rg]" type="date" placeholder="Data de Emissão" class="form-control input-md global-data" >
        </div>
            
      </div> {{-- FIM RG, Orgão Emissor do RG e Data de Emissão do RG --}}


      {{-- Data de Nascimento, Sexo, Deficiente --}}
      <div class="form-group">

        {{-- Data de Nascimento --}}
        <label class="col-md-1 control-label" for="coparticipante[nascimento]">Nascimento</label>  
        <div class="col-md-3">
          <input value="{{ $pessoa->coparticipante->nascimento }}" id="coparticipante[nascimento]" name="coparticipante[nascimento]" type="date" placeholder="01 / 01 / 2000" class="form-control input-md global-data" >
        </div>

        {{-- Sexo   --}}
        <label class="col-md-1 control-label" for="coparticipante[sexo]">Sexo</label>
        <div class="col-md-2">
          <select id="coparticipante[sexo]" name="coparticipante[sexo]" type="text" class="form-control input-md" >
            <option value="" disabled @if(!$pessoa->coparticipante->sexo) selected @endif style="display: none;"></option>
            <option value="m" @if($pessoa->coparticipante->sexo == "m") selected="selected" @endif>Masculino</option>
            <option value="f" @if($pessoa->coparticipante->sexo == "f") selected="selected" @endif>Femino</option>
          </select>
        </div>
        
        {{-- Deficiente --}}
        <label class="col-md-1 control-label" for="coparticipante[necessidades_especiais]">Deficiente</label>
        <div class="col-md-2">
          <select id="coparticipante[necessidades_especiais]" name="coparticipante[necessidades_especiais]" type="text" class="form-control input-md" >
            <option value="" disabled @if(!$pessoa->coparticipante->necessidades_especiais) selected @endif style="display: none;">   </option>
            <option value="1" @if($pessoa->coparticipante->necessidades_especiais == "1") selected="selected" @endif>Sim</option>
            <option value="0" @if($pessoa->coparticipante->necessidades_especiais == "0") selected="selected" @endif>Não</option>
          </select>
        </div>

      </div> {{-- Fim Data de Nascimento, Sexo, Deficiente --}}


      {{-- Logradouro, Número, Complemento --}}
      <div class="form-group">

        {{-- Logradouro ...Av...Rua....etc --}}
        <label class="col-md-1 control-label" for="coparticipante[logradouro]">Logradouro</label>
        <div class="col-md-3">
          <input value="{{ $pessoa->coparticipante->logradouro }}" id="coparticipante[logradouro]" name="coparticipante[logradouro]" type="text" placeholder="Av, Rua, Travessa..." class="form-control input-md">
        </div>
        
        <!-- Número da residência-->
        <label class="col-md-1 control-label" for="coparticipante[numero]">Numero</label>
        <div class="col-md-2">
          <input value="{{ $pessoa->coparticipante->numero }}" id="coparticipante[numero]" name="coparticipante[numero]" type="text" placeholder="999" class="form-control input-md">
        </div>

        {{-- Complemento --}}
        <label class="col-md-2 control-label" for="coparticipante[complemento]">Complemento</label>
        <div class="col-md-3">
          <input value="{{ $pessoa->coparticipante->complemento }}" id="coparticipante[complemento]" name="coparticipante[complemento]" type="text" placeholder="Ap., Fundos,..." class="form-control input-md">
        </div>

      </div> {{-- FIM Logradouro, Número, complemento --}}            


      {{-- Bairro, Munícipio e CEP --}}
      <div class="form-group">
              
        {{-- Bairro --}}
        <label class="col-md-1 control-label" for="coparticipante[bairro]">Bairro</label>
        <div class="col-md-3">
          <input value="{{ $pessoa->coparticipante->bairro }}" id="coparticipante[bairro]" name="coparticipante[bairro]" type="text" placeholder="Centro" class="form-control input-md">
        </div>
            
        <!-- Município-->
        <label class="col-md-1 control-label" for="coparticipante[municipio]">Município</label>
        <div class="col-md-4">
          <input value="{{ $pessoa->coparticipante->municipio }}" id="coparticipante[municipio]" disabled="disabled" value="Mesquita" name="coparticipante[municipio]" type="text" placeholder="Mesquita" class="form-control input-md" >
        </div>

        <!-- CEP-->
        <label class="col-md-1 control-label" for="coparticipante[cep]">CEP</label>
        <div class="col-md-2">
          <input value="{{ $pessoa->coparticipante->cep }}" id="coparticipante[cep]" data-inputmask="'mask' : '99.999-999'" name="coparticipante[cep]" type="text" placeholder="99999-999" class="form-control input-md cep" >
        </div>

      </div> {{-- FIM Bairoo, Munícipio e CEP --}}

      {{-- Email , elular e Telefone --}}
      <div class="form-group">

        {{-- Email --}}
        <label class="col-md-1 control-label" for="coparticipante[email]">Email</label>  
        <div class="col-md-5">
          <input value="{{ $pessoa->coparticipante->email }}" id="coparticipante[email]" name="coparticipante[email]" type="text" placeholder="email@servidor.com.br" class="form-control input-md email">
        </div>

        {{-- Celular --}}
        <label class="col-md-1 control-label" for="coparticipante[telefones][0][numero]">Celular</label>
        <div class="col-md-2">
          <input value="{{ $pessoa->coparticipante->telefones[0]->numero }}" id="coparticipante[telefones][0][numero]" data-inputmask="'mask' : '(99) 99999-9999'" name="coparticipante[telefones][0][numero]" type="text" placeholder="(99) 9 9999-9999" class="form-control input-md celular">
          <input type="hidden" value="Celular" name="coparticipante[telefones][0][tipo_telefone]">
        </div>

        {{-- Telefone --}}
        <label class="col-md-1 control-label" for="coparticipante[telefones][1][numero]">Tel.</label>
        <div class="col-md-2">
          <input value="{{ $pessoa->coparticipante->telefones[1]->numero }}" id="coparticipante[telefones][1][numero]" data-inputmask="'mask' : '(99) 9999-9999'" name="coparticipante[telefones][1][numero]" type="text" placeholder="(99) 9999-9999" class="form-control input-md telefone">
          <input type="hidden" value="Fixo" name="coparticipante[telefones][1][tipo_telefone]">
        </div>

      </div> {{-- FIM Email, Celular e Telefone --}}
    
    </div> {{-- fim Co-participante --}}





{{------------------------------------------ Dependentes ----------------------------------------}}
         
    <div class="x_panel" id="dependentes">
      
      <div class="x_title"> 
        <div class="form-group">
          <div class="col-md-11"> Dependentes </div>
            <button name="submit" value="clonar" class="btn btn-xs btn-primary glyphicon glyphicon-plus-sign clonar"></button>
        </div>
      </div>
        
      <div class="x_panel panel_dependentes">
      
        {{-- Nome --}}
        <div class="form-group">
          <label class="col-md-1 control-label" for="dependentes[0][nome]">Nome</label>
          <div class="col-md-8">
            <input value="{{ $pessoa->dependentes[0]->nome }}" name="dependentes[0][nome]" id="dependentes[0][nome]" type="text" placeholder="Informe o nome" class="form-control input-md" >
          </div>

          <label class="col-md-1 control-label" for="dependentes.0.parentesco">Parentesco</label>
          <div class="col-md-2">
            <select name="dependentes[0][parentesco]" id="dependentes[0][parentesco]" type="text" placeholder="Necessidades Especiais" class="form-control input-md" >
              <option value="" disabled @if(!$pessoa->dependentes[0]->parentesco) selected @endif style="display: none;">Selecione...</option>
            <option value="1" @if($pessoa->dependentes[0]->parentesco == "1") selected="selected" @endif>Avô(ó)</option>
            <option value="2" @if($pessoa->dependentes[0]->parentesco == "2") selected="selected" @endif>Bisavô(ó)</option>
            <option value="3" @if($pessoa->dependentes[0]->parentesco == "3") selected="selected" @endif>Bisneto(a)</option>
            <option value="4" @if($pessoa->dependentes[0]->parentesco == "4") selected="selected" @endif>Companheiro(a)</option>
            <option value="5" @if($pessoa->dependentes[0]->parentesco == "5") selected="selected" @endif>Cônjuge</option>
            <option value="6" @if($pessoa->dependentes[0]->parentesco == "6") selected="selected" @endif>Enteado(a)</option>
            <option value="7" @if($pessoa->dependentes[0]->parentesco == "7") selected="selected" @endif>Ex-esposa</option>
            <option value="8" @if($pessoa->dependentes[0]->parentesco == "8") selected="selected" @endif>Filho(a)</option>
            <option value="9" @if($pessoa->dependentes[0]->parentesco == "9") selected="selected" @endif>Irmão(ã)</option>
            <option value="10" @if($pessoa->dependentes[0]->parentesco == "10") selected="selected" @endif>Neto(a)</option>
            <option value="11" @if($pessoa->dependentes[0]->parentesco == "11") selected="selected" @endif>Pais</option>
            <option value="12" @if($pessoa->dependentes[0]->parentesco == "12") selected="selected" @endif>Outras</option>
            </select>
          </div>
        </div>
      
        {{-- Data de Nascimento, Sexo, Deficiente --}}
        <div class="form-group">

        {{-- Data de Nascimento --}}
        <label class="col-md-1 control-label" for="dependentes[0][nascimento]">Nascimento</label>  
        <div class="col-md-3">
          <input value="{{ $pessoa->dependentes[0]->nascimento }}" name="dependentes[0][nascimento]" type="date" placeholder="01/01/2000" class="form-control input-md global-data" >
        </div>

        {{-- Sexo   --}}
        <label class="col-md-1 control-label" for="dependentes[0][sexo]">Sexo</label>
        <div class="col-md-3">
          <select name="dependentes[0][sexo]" id="dependentes[0][sexo]" type="text" placeholder="Sexo" class="form-control input-md" >
            <option value="" disabled @if(!$pessoa->dependentes[0]->sexo) selected @endif style="display: none;">Selecione...</option>
            <option value="1" @if($pessoa->dependentes[0]->sexo == "Masculino") selected="selected" @endif>Masculino</option>
            <option value="2" @if($pessoa->dependentes[0]->sexo == "Feminino") selected="selected" @endif>Femino</option>
            <option value="3" @if($pessoa->dependentes[0]->sexo == "Outros") selected="selected" @endif>Outros</option>
          </select>
        </div>

        {{-- Deficiente --}}
        <label class="col-md-1 control-label" for="dependentes[0][necessidades_especiais]">Deficiente</label>
        <div class="col-md-3">
          <select name="dependentes[0][necessidades_especiais]" id="dependentes[0][necessidades_especiais]" type="text" placeholder="Necessidades Especiais" class="form-control input-md" >
            <option value="" disabled @if(!$pessoa->dependentes[0]->necessidades_especiais) selected @endif style="display: none;">Selecione...</option>
            <option value="1" @if($pessoa->dependentes[0]->necessidades_especiais == "1") selected="selected" @endif>Sim</option>
            <option value="0" @if($pessoa->dependentes[0]->necessidades_especiais == "0") selected="selected" @endif>Não</option>
          </select>
        </div>
      
      </div>  {{-- FIM Data de Nascimento, Sexo, Deficiente --}}
          
      <div class="col-md-11"></div>
      <button name="submit" value="excluir" class="btn btn-xs btn-danger glyphicon glyphicon-trash excluir" selected style="display:none;"></button>

      </div> {{-- FIM panel_dependentes --}}

      <div class="div-clone"></div> {{-- Clonagem da div panel_dependentes --}}

    </div> {{-- FIM Dependentes --}}





{{------------------------------------------ Renda ------------------------------------------}}

    <div class="x_panel" id="renda-familiar">
      <div class="x_title"> Renda familiar e tempo de residência em Mesquita </div>
      
      {{-- Renda Familiar, Tempo de residência e Faixa --}}
      <div class="form-group">

        {{-- Renda Familiar --}}
        <label class="col-md-1 control-label" for="renda_familiar">Renda</label>
        <div class="col-md-3">
          <input value="{{ $pessoa->renda_familiar }}" id="renda_familiar" name="renda_familiar" type="text" placeholder="R$ 99999,99" class="form-control input-md cash" >
        </div>

        {{-- Faixa--}}
        <label class="col-md-1 control-label" for="faixa">Faixa</label>
        <div class="col-md-2">
          <input value="" id="faixa" name="faixa" type="text" placeholder="Classificação" class="form-control input-md" disabled selected style>
        </div>

      </div> {{-- FIM Renda Familiar e Faixa --}}
      
      {{-- Tempo de residência --}}
      <div class="form-group">

        {{-- Tempo de residência --}}
        <label class="col-md-1 control-label" for="inicio-residencia">Início</label>
        <div class="col-md-3">
          <input value="{{ $pessoa->"inicio-residencia" }}" id="inicio-residencia" name="inicio-residencia" type="date" placeholder="01 / 01 / 2000" class="form-control input-md global-data" >
        </div>

        {{-- Faixa--}}
        <label class="col-md-1 control-label" for="pariodo">Período</label>
        <div class="col-md-2">
          <input value="" id="periodo" name="pariodo" type="text" placeholder="Classificação" class="form-control input-md" disabled selected style>
        </div>

      </div> {{-- Tempo de residência --}}


    </div> {{-- FIM renda-familiar --}}

    </br>

    {{-- Botões Enviar e Limpar --}}
    <div class="form-group">
      <label class="col-md-1 control-label" for="button1id">
        <button id="button1id" type="submit" value="submit" name="button1id" class="btn btn-primary">Enviar</button>
      </label>

      <label class="col-md-11 control-label" for="button1id">
        <button id="button2id" type="reset" value="reset" name="button2id" class="btn btn-danger">Limpar</button>
      </label>
    </div>
  
  </form> {{-- FIM cadastro_pessoa --}}
    
@endsection

@push('scripts')

  {{-- Script para máscara numérica. Ex.: CPF, RG --}}
  <script src="{{ asset("js/jquery.inputmask.bundle.min.js") }}"></script>
  
  @include('includes.pessoas.create.scripts')

@endpush