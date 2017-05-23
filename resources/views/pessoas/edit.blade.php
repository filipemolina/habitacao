
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

    <form id="cadastro_pessoa" class="form-horizontal">


{{------------------------------------ Participante --------------------------------------------}}

      <div class="x_panel" id="participante">
        
        <div class="x_title"> Participante </div>
        
        {{-- Nome --}}
        <div class="form-group">
          <label class="col-md-1 control-label" for="pa-nome">Nome</label>
          <div class="col-md-11">
            <input id="pa-nome" name="pa-nome" type="text" placeholder="Informe o nome" class="form-control input-md nome" required="">
          </div>
        </div>

        {{-- CPF, NIS/PIS, Bolsa Família e Carteira de trabalho --}}
        <div class="form-group">

          {{-- CPF --}}      
          <label class="col-md-1 control-label" for="pa-cpf">CPF</label>  
            <div class="col-md-2">
              <input id="pa-cpf" name="pa-cpf" type="text" placeholder="999.999.999-99" class="form-control input-md cpf" required="">
            </div>

          {{-- NIS/PIS --}}            
          <label class="col-md-1 control-label" for="pa-pis">NIS/PIS</label>  
          <div class="col-md-2">
            <input id="pa-nis" name="pa-nis" type="text" placeholder="999.999999.99-99" class="form-control input-md nis" required="">
          </div>

          {{-- Carteira de Trabalho --}}            
          <label class="col-md-1 control-label" for="pa-carteira">CTPS</label>  
          <div class="col-md-2">
            <input id="pa-carteira" name="pa-carteira" type="text" placeholder="Cart. de Trabalho" class="form-control input-md carteira" required="">
          </div>

          {{-- Bolsa Família --}}            
          <label class="col-md-1 control-label" for="pa-bolsa">Bolsa F.</label>  
          <div class="col-md-2">
            <select id="pa-bolsa" name="pa-bolsa" type="text" class="form-control input-md" required="">
              <option value="" disabled selected style="display: none;"></option>
              <option value="s">Possui</option>
              <option value="n">Não possui</option>
            </select>
          </div>

        </div> {{-- FIM CPF, NIS/PIS e Bolsa Família --}}


        {{-- RG, Orgão Emissor do RG e Data de Emissão do RG--}}
        <div class="form-group">
        
          <!-- RG-->            
          <label class="col-md-1 control-label" for="pa-rg">RG</label>
          <div class="col-md-2">
            <input id="pa-rg" name="pa-rg" type="text" placeholder="99.999.999-9" class="form-control input-md rg" required="">
          </div>

          <!-- Orgão Emissor do RG-->
          <label class="col-md-1 control-label" for="pa-orgao_emissor">Orgão</label>  
          <div class="col-md-2">
            <input id="pa-orgao_emissor" name="pa-orgao_emissor" type="text" placeholder="Orgão Emissor" class="form-control input-md" required="">
          </div>

          <!-- Data de Emissão do RG-->
          <label class="col-md-1 control-label" for="pa-emissao">Emissão</label>  
          <div class="col-md-3">
            <input id="pa-emissao" name="pa-emissao" type="date" class="form-control input-md global-data" required="">
          </div>

        </div> {{-- FIM RG, Orgão Emissor do RG e Data de Emissão do RG --}}


        {{-- Data de Nascimento, Sexo, Deficiente --}}
        <div class="form-group">

          {{-- Data de Nascimento --}}
          <label class="col-md-1 control-label" for="pa-nascimento">Nascimento</label>  
          <div class="col-md-3">
            <input id="pa-nascimento" name="pa-nascimento" type="date" class="form-control input-md global-data" required="">
          </div>

          {{-- Sexo   --}}
          <label class="col-md-1 control-label" for="pa-sexo">Sexo</label>
          <div class="col-md-2">
            <select id="pa-sexo" name="pa-sexo" type="text" class="form-control input-md" required="">
              <option value="" disabled selected style="display: none;"></option>
              <option value="m">Masculino</option>
              <option value="f">Femino</option>
            </select>
          </div>

          {{-- Deficiente --}}
          <label class="col-md-1 control-label" for="deficiente">Deficiente</label>
          <div class="col-md-2">
            <select id="pa-deficiente" name="pa-deficiente" type="text" class="form-control input-md" required="">
              <option value="" disabled selected style="display: none;">   </option>
              <option value="s">Sim</option>
              <option value="n">Não</option>
            </select>
          </div>
        
        </div> {{-- Fim Data de Nascimento, Sexo, Deficiente --}}


        {{-- Logradouro, Número, Complemento --}}
        <div class="form-group">

          <!-- Logradouro ...Av...Rua....etc-->
          <label class="col-md-1 control-label" for="pa-logradouro">Logradouro</label>
          <div class="col-md-3">
            <input id="pa-logradouro" name="pa-logradouro" type="text" placeholder="Av, Rua, Travessa..." class="form-control input-md">
          </div>
          
          <!-- Número da residência-->
          <label class="col-md-1 control-label" for="pa-numero">Numero</label>
          <div class="col-md-2">
            <input id="pa-numero" name="pa-numero" type="text" placeholder="999" class="form-control input-md">
          </div>

          {{-- Complemento --}}
          <label class="col-md-2 control-label" for="pa-complemento">Complemento</label>
          <div class="col-md-3">
            <input id="pa-complemento" name="pa-complemento" type="text" placeholder="Ap., Fundos,..." class="form-control input-md">
          </div>

        </div> {{-- FIM Logradouro, Número, complemento --}}
        
        {{-- Bairro, Munícipio e CEP --}}
        <div class="form-group">
              
          {{-- Bairro --}}
          <label class="col-md-1 control-label" for="pa-bairro">Bairro</label>
          <div class="col-md-3">
            <input id="pa-bairro" name="pa-bairro" type="text" placeholder="Centro" class="form-control input-md">
          </div>
            
          <!-- Município-->
          <label class="col-md-1 control-label" for="pa-municipio">Município</label>
          <div class="col-md-4">
            <input id="pa-municipio" name="pa-municipio" type="text" placeholder="Mesquita" class="form-control input-md" required="">
          </div>

          <!-- CEP-->
          <label class="col-md-1 control-label" for="pa-cep">CEP</label>
          <div class="col-md-2">
            <input id="pa-cep" name="cep" type="text" placeholder="99999-999" class="form-control input-md cep" required="">
          </div>

        </div> {{-- FIM Bairoo, Munícipio e CEP --}}

        {{-- Email , elular e Telefone --}}
        <div class="form-group">

          {{-- Email --}}
          <label class="col-md-1 control-label" for="pa-email">Email</label>  
          <div class="col-md-5">
            <input id="pa-email" name="pa-email" type="text" placeholder="email@servidor.com.br" class="form-control input-md email">
          </div>

          {{-- Celular --}}
          <label class="col-md-1 control-label" for="pa-celular">Celular</label>
          <div class="col-md-2">
            <input id="pa-celular" name="pa-celular" type="text" placeholder="(99) 9 9999-9999" class="form-control input-md celular">
          </div>

          {{-- Telefone --}}
          <label class="col-md-1 control-label" for="pa-telefone1">Tel.</label>
          <div class="col-md-2">
            <input id="pa-telefone1" name="pa-telefone1" type="text" placeholder="(99) 9999-9999" class="form-control input-md telefone">
          </div>

        </div> {{-- FIM Email, Celular e Telefone --}}

      </div> {{-- fim Participante --}}





{{------------------------------------ CO-Participante ------------------------------------}}
      <div class="x_panel" id="co-participante">
        
        <div class="x_title"> Co-Participante </div>

        {{-- Nome --}}
        <div class="form-group">
        <label class="col-md-1 control-label" for="co-nome">Nome</label>
          <div class="col-md-11">
            <input id="co-nome" name="co-nome" type="text" placeholder="Informe o nome" class="form-control input-md nome" required="">
          </div>
        </div>
        
        {{-- CPF, NIS/PIS, Bolsa Família e Carteira de trabalho --}}
        <div class="form-group">

        {{-- CPF --}}
        <label class="col-md-1 control-label" for="co-cpf">CPF</label>  
        <div class="col-md-2">
          <input id="co-cpf" name="co-cpf" type="text" placeholder="999.999.999-99" class="form-control input-md cpf" required="">
        </div>

        {{-- NIS/PIS --}}            
        <label class="col-md-1 control-label" for="co-pis">NIS/PIS</label>  
        <div class="col-md-2">
          <input id="co-nis" name="co-nis" type="text" placeholder="999.999999.99-99" class="form-control input-md nis" required="">
        </div>

        {{-- Carteira de Trabalho --}}            
        <label class="col-md-1 control-label" for="co-carteira">CTPS</label>  
        <div class="col-md-2">
          <input id="co-carteira" name="co-carteira" type="text" placeholder="Cart. de Trabalho" class="form-control input-md carteira" required="">
        </div>

        {{-- Bolsa Família --}}            
        <label class="col-md-1 control-label" for="co-bolsa">Bolsa F.</label>  
        <div class="col-md-2">
          <select id="co-bolsa" name="co-bolsa" type="text" class="form-control input-md" required="">
            <option value="" disabled selected style="display: none;"></option>
            <option value="s">Possui</option>
            <option value="n">Não possui</option>
          </select>
        </div>

      </div> {{-- FIM CPF, NIS/PIS e Bolsa Família --}}


      {{-- RG, Data de Emissão do RG, Orgão Emissor do RG --}}
      <div class="form-group">

        <!-- RG-->            
        <label class="col-md-1 control-label" for="co-rg">RG</label>
        <div class="col-md-2">
          <input id="co-rg" name="co-rg" type="text" placeholder="99.999.999-9" class="form-control input-md rg" required="">
        </div>

        <!-- Orgão Emissor do RG-->
        <label class="col-md-1 control-label" for="co-orgao_emissor">Orgão</label>  
        <div class="col-md-2">
          <input id="co-orgao_emissor" name="co-orgao_emissor" type="text" placeholder="Orgão Emissor" class="form-control input-md" required="">
        </div>

        <!-- Data de Emissão do RG-->
        <label class="col-md-1 control-label" for="co-emissao">Emissão</label>  
        <div class="col-md-3">
          <input id="co-emissao" name="co-emissao" type="date" placeholder="Data de Emissão" class="form-control input-md global-data" required="">
        </div>
            
      </div> {{-- FIM RG, Orgão Emissor do RG e Data de Emissão do RG --}}


      {{-- Data de Nascimento, Sexo, Deficiente --}}
      <div class="form-group">

        {{-- Data de Nascimento --}}
        <label class="col-md-1 control-label" for="co-nascimento">Nascimento</label>  
        <div class="col-md-3">
          <input id="co-nascimento" name="co-nascimento" type="date" placeholder="01 / 01 / 2000" class="form-control input-md global-data" required="">
        </div>

        {{-- Sexo   --}}
        <label class="col-md-1 control-label" for="co-sexo">Sexo</label>
        <div class="col-md-2">
          <select id="co-sexo" name="co-sexo" type="text" class="form-control input-md" required="">
            <option value="" disabled selected style="display: none;"></option>
            <option value="m">Masculino</option>
            <option value="f">Femino</option>
          </select>
        </div>
        
        {{-- Deficiente --}}
        <label class="col-md-1 control-label" for="deficiente">Deficiente</label>
        <div class="col-md-2">
          <select id="co-deficiente" name="co-deficiente" type="text" class="form-control input-md" required="">
            <option value="" disabled selected style="display: none;">   </option>
            <option value="s">Sim</option>
            <option value="n">Não</option>
          </select>
        </div>

      </div> {{-- Fim Data de Nascimento, Sexo, Deficiente --}}


      {{-- Logradouro, Número, Complemento --}}
      <div class="form-group">

        {{-- Logradouro ...Av...Rua....etc --}}
        <label class="col-md-1 control-label" for="co-logradouro">Logradouro</label>
        <div class="col-md-3">
          <input id="co-logradouro" name="co-logradouro" type="text" placeholder="Av, Rua, Travessa..." class="form-control input-md">
        </div>
        
        <!-- Número da residência-->
        <label class="col-md-1 control-label" for="co-numero">Numero</label>
        <div class="col-md-2">
          <input id="co-numero" name="co-numero" type="text" placeholder="999" class="form-control input-md">
        </div>

        {{-- Complemento --}}
        <label class="col-md-2 control-label" for="co-complemento">Complemento</label>
        <div class="col-md-3">
          <input id="co-complemento" name="co-complemento" type="text" placeholder="Ap., Fundos,..." class="form-control input-md">
        </div>

      </div> {{-- FIM Logradouro, Número, complemento --}}            


      {{-- Bairro, Munícipio e CEP --}}
      <div class="form-group">
              
        {{-- Bairro --}}
        <label class="col-md-1 control-label" for="co-bairro">Bairro</label>
        <div class="col-md-3">
          <input id="co-bairro" name="co-bairro" type="text" placeholder="Centro" class="form-control input-md">
        </div>
            
        <!-- Município-->
        <label class="col-md-1 control-label" for="co-municipio">Município</label>
        <div class="col-md-4">
          <input id="co-municipio" name="co-municipio" type="text" placeholder="Mesquita" class="form-control input-md" required="">
        </div>

        <!-- CEP-->
        <label class="col-md-1 control-label" for="co-cep">CEP</label>
        <div class="col-md-2">
          <input id="co-cep" name="cep" type="text" placeholder="99999-999" class="form-control input-md cep" required="">
        </div>

      </div> {{-- FIM Bairoo, Munícipio e CEP --}}

      {{-- Email , elular e Telefone --}}
      <div class="form-group">

        {{-- Email --}}
        <label class="col-md-1 control-label" for="co-email">Email</label>  
        <div class="col-md-5">
          <input id="co-email" name="co-email" type="text" placeholder="email@servidor.com.br" class="form-control input-md email">
        </div>

        {{-- Celular --}}
        <label class="col-md-1 control-label" for="co-celular">Celular</label>
        <div class="col-md-2">
          <input id="co-celular" name="co-celular" type="text" placeholder="(99) 9 9999-9999" class="form-control input-md celular">
        </div>

        {{-- Telefone --}}
        <label class="col-md-1 control-label" for="co-telefone1">Tel.</label>
        <div class="col-md-2">
          <input id="co-telefone1" name="co-telefone1" type="text" placeholder="(99) 9999-9999" class="form-control input-md telefone">
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
          <label class="col-md-1 control-label" for="de-nome">Nome</label>
          <div class="col-md-9">
            <input name="de-nome" type="text" placeholder="Informe o nome" class="form-control input-md" required="">
          </div>
        </div>
      
        {{-- Data de Nascimento, Sexo, Deficiente --}}
        <div class="form-group">

        {{-- Data de Nascimento --}}
        <label class="col-md-1 control-label" for="de-nascimento">Nascimento</label>  
        <div class="col-md-3">
          <input name="de-nascimento" type="date" placeholder="01/01/2000" class="form-control input-md global-data" required="">
        </div>

        {{-- Sexo   --}}
        <label class="col-md-1 control-label" for="de-sexo">Sexo</label>
        <div class="col-md-2">
          <select name="de-sexo" type="text" placeholder="Sexo" class="form-control input-md" required="">
            <option value="" disabled selected style="display: none;">   </option>
            <option value="m">Masculino</option>
            <option value="f">Femino</option>
          </select>
        </div>

        {{-- Deficiente --}}
        <label class="col-md-1 control-label" for="de-deficiente">Deficiente</label>
        <div class="col-md-2">
          <select name="de-deficiente" type="text" placeholder="de-deficiente" class="form-control input-md" required="">
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
        <label class="col-md-1 control-label" for="renda">Renda</label>
        <div class="col-md-3">
          <input id="renda" name="renda" type="text" placeholder="R$ 99999,99" class="form-control input-md cash" required="">
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
        <label class="col-md-1 control-label" for="te-residencia">Início</label>
        <div class="col-md-3">
          <input id="te-residencia" name="te-residencia" type="date" placeholder="01 / 01 / 2000" class="form-control input-md global-data" required="">
        </div>

        {{-- Faixa--}}
        <label class="col-md-1 control-label" for="faixa">Período</label>
        <div class="col-md-2">
          <input id="faixa" name="faixa" type="text" placeholder="Classificação" class="form-control input-md" disabled selected style>
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
  
  <script type="text/javascript">
  
    {{-- Máscarasa dos campos CPF e RG --}}
    $(function(){
      $(".cpf").inputmask("999.999.999-99");
      $(".rg").inputmask("99.999.999-9");
      $(".cep").inputmask("99-999.999");
      $(".celular").inputmask("(99)99999-9999");
      $(".telefone").inputmask("(99)9999-9999");
      $(".cash").inputmask("R$ 99999,99");
      $(".nis").inputmask("999.999999.99-99");
      $(".carteira").inputmask("9999999 999-9");
    });

    // Clonar div panel_dependentes
    $(".clonar").click(function(e){

      e.preventDefault();

      $(".panel_dependentes").clone().addClass("clone_dependentes").removeClass("panel_dependentes").find("button.excluir").css("display","block").parent().appendTo(".div-clone");
    });
    
    // Remover div clonada  
    $("#dependentes").on("click", "button.excluir", function(e){

      e.preventDefault();

      $(this).parent().remove();

    });

  </script>

@endpush