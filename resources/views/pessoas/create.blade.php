@extends("layouts.blank")

@section('titulo')

  Cadastro de Pessoas

@endsection

@push('css')
  
  <!-- CSS views Pessoas-->
  <link href="{{ asset("css/pessoas.css") }}" rel="stylesheet">

@endpush

@section('main_container')

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
            <input id="nome" name="nome" type="text" placeholder="Informe o nome" class="form-control input-md nome" required="">
          </div>
        </div>

        {{-- CPF, NIS/PIS, Bolsa Família e Carteira de trabalho --}}
        <div class="form-group">

          {{-- CPF --}}      
          <label class="col-md-1 control-label" for="cpf">CPF</label>  
            <div class="col-md-2">
              <input id="cpf" name="cpf" type="text" placeholder="999.999.999-99" class="form-control input-md cpf" required="">
            </div>

          {{-- NIS/PIS --}}            
          <label class="col-md-1 control-label" for="nis">NIS/PIS</label>  
          <div class="col-md-2">
            <input id="nis" name="nis" type="text" placeholder="999.999999.99-99" class="form-control input-md nis" required="">
          </div>

          {{-- Carteira de Trabalho --}}            
          <label class="col-md-1 control-label" for="ctps">CTPS</label>  
          <div class="col-md-2">
            <input id="ctps" name="ctps" type="text" placeholder="Cart. de Trabalho" class="form-control input-md carteira" required="">
          </div>

          {{-- Bolsa Família --}}            
          <label class="col-md-1 control-label" for="bolsa_familia">Bolsa F.</label>  
          <div class="col-md-2">
            <select id="bolsa_familia" name="bolsa_familia" type="text" class="form-control input-md" required="">
              <option value="" disabled selected style="display: none;"></option>
              <option value="s">Possui</option>
              <option value="n">Não possui</option>
            </select>
          </div>

        </div> {{-- FIM CPF, NIS/PIS e Bolsa Família --}}


        {{-- RG, Orgão Emissor do RG e Data de Emissão do RG--}}
        <div class="form-group">
        
          <!-- RG-->            
          <label class="col-md-1 control-label" for="rg">RG</label>
          <div class="col-md-2">
            <input id="rg" name="rg" type="text" placeholder="99.999.999-9" class="form-control input-md rg" required="">
          </div>

          <!-- Orgão Emissor do RG-->
          <label class="col-md-1 control-label" for="orgao_emissor_rg">Orgão</label>  
          <div class="col-md-2">
            <input id="orgao_emissor_rg" name="orgao_emissor_rg" type="text" placeholder="Orgão Emissor" class="form-control input-md" required="">
          </div>

          <!-- Data de Emissão do RG-->
          <label class="col-md-1 control-label" for="emissao_rg">Emissão</label>  
          <div class="col-md-3">
            <input id="emissao_rg" name="emissao_rg" type="date" class="form-control input-md global-data" required="">
          </div>

        </div> {{-- FIM RG, Orgão Emissor do RG e Data de Emissão do RG --}}


        {{-- Data de Nascimento, Sexo, Deficiente --}}
        <div class="form-group">

          {{-- Data de Nascimento --}}
          <label class="col-md-1 control-label" for="nascimento">Nascimento</label>  
          <div class="col-md-3">
            <input id="nascimento" name="nascimento" type="date" class="form-control input-md global-data" required="">
          </div>

          {{-- Sexo   --}}
          <label class="col-md-1 control-label" for="sexo">Sexo</label>
          <div class="col-md-2">
            <select id="sexo" name="sexo" type="text" class="form-control input-md" required="">
              <option value="" disabled selected style="display: none;"></option>
              <option value="m">Masculino</option>
              <option value="f">Femino</option>
            </select>
          </div>

          {{-- Deficiente --}}
          <label class="col-md-1 control-label" for="necessidades_especiais">Deficiente</label>
          <div class="col-md-2">
            <select id="necessidades_especiais" name="necessidades_especiais" type="text" class="form-control input-md" required="">
              <option value="" disabled selected style="display: none;">   </option>
              <option value="s">Sim</option>
              <option value="n">Não</option>
            </select>
          </div>
        
        </div> {{-- Fim Data de Nascimento, Sexo, Deficiente --}}


        {{-- Logradouro, Número, Complemento --}}
        <div class="form-group">

          <!-- Logradouro ...Av...Rua....etc-->
          <label class="col-md-1 control-label" for="logradouro">Logradouro</label>
          <div class="col-md-3">
            <input id="logradouro" name="logradouro" type="text" placeholder="Av, Rua, Travessa..." class="form-control input-md">
          </div>
          
          <!-- Número da residência-->
          <label class="col-md-1 control-label" for="numero">Numero</label>
          <div class="col-md-2">
            <input id="numero" name="numero" type="text" placeholder="999" class="form-control input-md">
          </div>

          {{-- Complemento --}}
          <label class="col-md-2 control-label" for="complemento">Complemento</label>
          <div class="col-md-3">
            <input id="complemento" name="complemento" type="text" placeholder="Ap., Fundos,..." class="form-control input-md">
          </div>

        </div> {{-- FIM Logradouro, Número, complemento --}}
        
        {{-- Bairro, Munícipio e CEP --}}
        <div class="form-group">
              
          {{-- Bairro --}}
          <label class="col-md-1 control-label" for="bairro">Bairro</label>
          <div class="col-md-3">
            <input id="bairro" name="bairro" type="text" placeholder="Centro" class="form-control input-md">
          </div>
            
          <!-- Município-->
          <label class="col-md-1 control-label" for="municipio">Município</label>
          <div class="col-md-4">
            <input disabled="disabled" id="municipio" name="municipio" type="text" placeholder="Mesquita" value="Mesquita" class="form-control input-md" required="">
          </div>

          <!-- CEP-->
          <label class="col-md-1 control-label" for="cep">CEP</label>
          <div class="col-md-2">
            <input id="cep" name="cep" type="text" placeholder="99999-999" class="form-control input-md cep" required="">
          </div>

        </div> {{-- FIM Bairoo, Munícipio e CEP --}}

        {{-- Email , elular e Telefone --}}
        <div class="form-group">

          {{-- Email --}}
          <label class="col-md-1 control-label" for="email">Email</label>  
          <div class="col-md-5">
            <input id="email" name="email" type="text" placeholder="email@servidor.com.br" class="form-control input-md email">
          </div>

          {{-- Celular --}}
          <label class="col-md-1 control-label" for="telefones[0][numero]">Celular</label>
          <div class="col-md-2">
            <input id="telefones[0][numero]" name="telefones[0][numero]" type="text" placeholder="(99) 9 9999-9999" class="form-control input-md celular">
            <input type="hidden" name="telefones[0][tipo_telefone]" value="Celular">
          </div>

          {{-- Telefone --}}
          <label class="col-md-1 control-label" for="telefones[1][numero]">Tel.</label>
          <div class="col-md-2">
            <input id="telefones[1][numero]" name="telefones[1][numero]" type="text" placeholder="(99) 9999-9999" class="form-control input-md telefone">
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
            <input id="coparticipante[nome]" name="coparticipante[nome]" type="text" placeholder="Informe o nome" class="form-control input-md nome" required="">
          </div>
        </div>
        
        {{-- CPF, NIS/PIS, Bolsa Família e Carteira de trabalho --}}
        <div class="form-group">

        {{-- CPF --}}
        <label class="col-md-1 control-label" for="coparticipante[cpf]">CPF</label>  
        <div class="col-md-2">
          <input id="coparticipante[cpf]" name="coparticipante[cpf]" type="text" placeholder="999.999.999-99" class="form-control input-md cpf" required="">
        </div>

        {{-- NIS/PIS --}}            
        <label class="col-md-1 control-label" for="coparticipante[nis]">NIS/PIS</label>  
        <div class="col-md-2">
          <input id="coparticipante[nis]" name="coparticipante[nis]" type="text" placeholder="999.999999.99-99" class="form-control input-md nis" required="">
        </div>

        {{-- Carteira de Trabalho --}}            
        <label class="col-md-1 control-label" for="coparticipante[ctps]">CTPS</label>  
        <div class="col-md-2">
          <input id="coparticipante[ctps]" name="coparticipante[ctps]" type="text" placeholder="Cart. de Trabalho" class="form-control input-md carteira" required="">
        </div>

        {{-- Bolsa Família --}}            
        <label class="col-md-1 control-label" for="coparticipante[bolsa_familia]">Bolsa F.</label>  
        <div class="col-md-2">
          <select id="coparticipante[bolsa_familia]" name="coparticipante[bolsa_familia]" type="text" class="form-control input-md" required="">
            <option value="" disabled selected style="display: none;"></option>
            <option value="s">Possui</option>
            <option value="n">Não possui</option>
          </select>
        </div>

      </div> {{-- FIM CPF, NIS/PIS e Bolsa Família --}}


      {{-- RG, Data de Emissão do RG, Orgão Emissor do RG --}}
      <div class="form-group">

        <!-- RG-->            
        <label class="col-md-1 control-label" for="coparticipante[rg]">RG</label>
        <div class="col-md-2">
          <input id="coparticipante[rg]" name="coparticipante[rg]" type="text" placeholder="99.999.999-9" class="form-control input-md rg" required="">
        </div>

        <!-- Orgão Emissor do RG-->
        <label class="col-md-1 control-label" for="coparticipante[orgao_emissor_rg]">Orgão</label>  
        <div class="col-md-2">
          <input id="coparticipante[orgao_emissor_rg]" name="coparticipante[orgao_emissor_rg]" type="text" placeholder="Orgão Emissor" class="form-control input-md" required="">
        </div>

        <!-- Data de Emissão do RG-->
        <label class="col-md-1 control-label" for="coparticipante[emissao_rg]">Emissão</label>  
        <div class="col-md-3">
          <input id="coparticipante[emissao_rg]" name="coparticipante[emissao_rg]" type="date" placeholder="Data de Emissão" class="form-control input-md global-data" required="">
        </div>
            
      </div> {{-- FIM RG, Orgão Emissor do RG e Data de Emissão do RG --}}


      {{-- Data de Nascimento, Sexo, Deficiente --}}
      <div class="form-group">

        {{-- Data de Nascimento --}}
        <label class="col-md-1 control-label" for="coparticipante[nascimento]">Nascimento</label>  
        <div class="col-md-3">
          <input id="coparticipante[nascimento]" name="coparticipante[nascimento]" type="date" placeholder="01 / 01 / 2000" class="form-control input-md global-data" required="">
        </div>

        {{-- Sexo   --}}
        <label class="col-md-1 control-label" for="coparticipante[sexo]">Sexo</label>
        <div class="col-md-2">
          <select id="coparticipante[sexo]" name="coparticipante[sexo]" type="text" class="form-control input-md" required="">
            <option value="" disabled selected style="display: none;"></option>
            <option value="m">Masculino</option>
            <option value="f">Femino</option>
          </select>
        </div>
        
        {{-- Deficiente --}}
        <label class="col-md-1 control-label" for="coparticipante[necessidades_especiais]">Deficiente</label>
        <div class="col-md-2">
          <select id="coparticipante[necessidades_especiais]" name="coparticipante[necessidades_especiais]" type="text" class="form-control input-md" required="">
            <option value="" disabled selected style="display: none;">   </option>
            <option value="s">Sim</option>
            <option value="n">Não</option>
          </select>
        </div>

      </div> {{-- Fim Data de Nascimento, Sexo, Deficiente --}}


      {{-- Logradouro, Número, Complemento --}}
      <div class="form-group">

        {{-- Logradouro ...Av...Rua....etc --}}
        <label class="col-md-1 control-label" for="coparticipante[logradouro]">Logradouro</label>
        <div class="col-md-3">
          <input id="coparticipante[logradouro]" name="coparticipante[logradouro]" type="text" placeholder="Av, Rua, Travessa..." class="form-control input-md">
        </div>
        
        <!-- Número da residência-->
        <label class="col-md-1 control-label" for="coparticipante[numero]">Numero</label>
        <div class="col-md-2">
          <input id="coparticipante[numero]" name="coparticipante[numero]" type="text" placeholder="999" class="form-control input-md">
        </div>

        {{-- Complemento --}}
        <label class="col-md-2 control-label" for="coparticipante[complemento]">Complemento</label>
        <div class="col-md-3">
          <input id="coparticipante[complemento]" name="coparticipante[complemento]" type="text" placeholder="Ap., Fundos,..." class="form-control input-md">
        </div>

      </div> {{-- FIM Logradouro, Número, complemento --}}            


      {{-- Bairro, Munícipio e CEP --}}
      <div class="form-group">
              
        {{-- Bairro --}}
        <label class="col-md-1 control-label" for="coparticipante[bairro]">Bairro</label>
        <div class="col-md-3">
          <input id="coparticipante[bairro]" name="coparticipante[bairro]" type="text" placeholder="Centro" class="form-control input-md">
        </div>
            
        <!-- Município-->
        <label class="col-md-1 control-label" for="coparticipante[municipio]">Município</label>
        <div class="col-md-4">
          <input id="coparticipante[municipio]" disabled="disabled" value="Mesquita" name="coparticipante[municipio]" type="text" placeholder="Mesquita" class="form-control input-md" required="">
        </div>

        <!-- CEP-->
        <label class="col-md-1 control-label" for="coparticipante[cep]">CEP</label>
        <div class="col-md-2">
          <input id="coparticipante[cep]" name="coparticipante[cep]" type="text" placeholder="99999-999" class="form-control input-md cep" required="">
        </div>

      </div> {{-- FIM Bairoo, Munícipio e CEP --}}

      {{-- Email , elular e Telefone --}}
      <div class="form-group">

        {{-- Email --}}
        <label class="col-md-1 control-label" for="coparticipante[email]">Email</label>  
        <div class="col-md-5">
          <input id="coparticipante[email]" name="coparticipante[email]" type="text" placeholder="email@servidor.com.br" class="form-control input-md email">
        </div>

        {{-- Celular --}}
        <label class="col-md-1 control-label" for="coparticipante[telefones][0][numero]">Celular</label>
        <div class="col-md-2">
          <input id="coparticipante[telefones][0][numero]" name="coparticipante[telefones][0][numero]" type="text" placeholder="(99) 9 9999-9999" class="form-control input-md celular">
          <input type="hidden" value="Celular" name="coparticipante[telefones][0][tipo_telefone]">
        </div>

        {{-- Telefone --}}
        <label class="col-md-1 control-label" for="coparticipante[telefones][1][numero]">Tel.</label>
        <div class="col-md-2">
          <input id="coparticipante[telefones][1][numero]" name="coparticipante[telefones][1][numero]" type="text" placeholder="(99) 9999-9999" class="form-control input-md telefone">
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
          <div class="col-md-9">
            <input name="dependentes[0][nome]" id="dependentes[0][nome]" type="text" placeholder="Informe o nome" class="form-control input-md" required="">
          </div>
        </div>
      
        {{-- Data de Nascimento, Sexo, Deficiente --}}
        <div class="form-group">

        {{-- Data de Nascimento --}}
        <label class="col-md-1 control-label" for="dependentes[0][nascimento]">Nascimento</label>  
        <div class="col-md-3">
          <input name="dependentes[0][nascimento]" type="date" placeholder="01/01/2000" class="form-control input-md global-data" required="">
        </div>

        {{-- Sexo   --}}
        <label class="col-md-1 control-label" for="dependentes[0][sexo]">Sexo</label>
        <div class="col-md-2">
          <select name="dependentes[0][sexo]" id="dependentes[0][sexo]" type="text" placeholder="Sexo" class="form-control input-md" required="">
            <option value="" disabled selected style="display: none;">   </option>
            <option value="m">Masculino</option>
            <option value="f">Femino</option>
          </select>
        </div>

        {{-- Deficiente --}}
        <label class="col-md-1 control-label" for="dependentes[0][necessidades_especiais]">Deficiente</label>
        <div class="col-md-2">
          <select name="dependentes[0][necessidades_especiais]" id="dependentes[0][necessidades_especiais]" type="text" placeholder="Necessidades Especiais" class="form-control input-md" required="">
            <option value=""disabled selected style="display: none;">   </option>
            <option value="s">Sim</option>
            <option value="n">Não</option>
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
          <input id="renda_familiar" name="renda_familiar" type="text" placeholder="R$ 99999,99" class="form-control input-md cash" required="">
        </div>

        {{-- Faixa--}}
        <label class="col-md-1 control-label" for="faixa">Faixa</label>
        <div class="col-md-2">
          <input id="faixa" name="faixa" type="text" placeholder="Classificação" class="form-control input-md" disabled selected style>
        </div>

      </div> {{-- FIM Renda Familiar e Faixa --}}
      
      {{-- Tempo de residência --}}
      <div class="form-group">

        {{-- Tempo de residência --}}
        <label class="col-md-1 control-label" for="inicio-residencia">Início</label>
        <div class="col-md-3">
          <input id="inicio-residencia" name="inicio-residencia" type="date" placeholder="01 / 01 / 2000" class="form-control input-md global-data" required="">
        </div>

        {{-- Faixa--}}
        <label class="col-md-1 control-label" for="pariodo">Período</label>
        <div class="col-md-2">
          <input id="pariodo" name="pariodo" type="text" placeholder="Classificação" class="form-control input-md" disabled selected style>
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
  
  @include('includes.pessoas.scripts')

@endpush