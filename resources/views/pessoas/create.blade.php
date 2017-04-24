@extends("layouts.blank")

@section('titulo')

	Cadastro de Pessoas

@endsection

@section('main_container')

<div class="row">
	
  <div class="x_panel">
		
    <div class="x_title"> Cadastro de Pessoa </div>
		
    <div class="x_content">
			
		  <form id="cadastro_pessoa" class="form-horizontal">

			
{{------------------------------------ Participante ------------------------------------}}
			   <div class="x_panel">
            <div class="x_title"> Participante </div>

            <div class="form-group">


{{-- CPF e Email --}}


              {{-- CPF --}}            
              <label class="col-md-1 control-label" for="CPF">CPF</label>  
              <div class="col-md-2">
                <input id="CPF" name="CPF" type="text" placeholder="999.999.999-99" class="form-control input-md" required="">
              </div>

              {{-- Email --}}
              <label class="col-md-1 control-label" for="email">Email</label>  
              <div class="col-md-5">
                <input id="email" name="email" type="text" placeholder="email@servidor.com.br" class="form-control input-md">
              </div>
            
            </div> {{-- FIM CPF e Email --}}

            {{-- Nome --}}

            <div class="form-group">
              <label class="col-md-1 control-label" for="nome">Nome</label>
              <div class="col-md-8">
                <input id="nome" name="nome" type="text" placeholder="Informe o ome" class="form-control input-md" required="">
              </div>
            </div>


{{-- RG, Data de Emissão do RG, Orgão Emissor do RG --}}


            <div class="form-group">

              <!-- RG-->            
              <label class="col-md-1 control-label" for="RG">RG</label>
              <div class="col-md-2">
                <input id="RG" name="RG" type="text" placeholder="RG" class="form-control input-md" required="">
              </div>

              <!-- Data de Emissão do RG-->
              <label class="col-md-1 control-label" for="data_emissao">Emissão</label>  
              <div class="col-md-2">
                <input id="data_emissao" name="data_emissao" type="text" placeholder="Data de Emissão" class="form-control input-md" required="">
              </div>

              <!-- Orgão Emissor do RG-->
              <label class="col-md-1 control-label" for="orgao_emissor">Orgão</label>  
              <div class="col-md-2">
                <input id="orgao_emissor" name="orgao_emissor" type="text" placeholder="Orgão Emissor" class="form-control input-md" required="">
              </div>
            
            </div> {{-- FIM RG, Data de Emissão do RG, Orgão Emissor do RG --}}


{{-- Data de Nascimento, Sexo, Deficiente --}}


            <div class="form-group">

            {{-- Data de Nascimento --}}

              <label class="col-md-1 control-label" for="data_nascimento">Nascimento</label>  
              <div class="col-md-2">
                <input id="data_nascimento" name="data_nascimento" type="text" placeholder="01/01/2000" class="form-control input-md" required="">

              </div>

              {{-- Sexo   --}}
              <label class="col-md-1 control-label" for="sexo">Sexo</label>
              <div class="col-md-2">
                <select id="sexo" name="sexo" type="text" placeholder="sexo" class="form-control input-md" required="">
    		          <option value="">   </option>
      		        <option value="m">Masculino</option>
      		        <option value="f">Femino</option>
  		          </select>
              </div>

              {{-- Deficiente --}}
              <label class="col-md-1 control-label" for="deficiente">Deficiente</label>
              <div class="col-md-2">
                <select id="deficiente" name="deficiente" type="text" placeholder="deficiente" class="form-control input-md" required="">
                  <option value="">   </option>
                  <option value="s">Sim</option>
                  <option value="n">Não</option>
                </select>
              </div>
            </div>


{{-- Logradouro, Número --}}


            <div class="form-group">

              <!-- Logradouro ...Av...Rua....etc-->
              <label class="col-md-1 control-label" for="logradouro">Logradouro</label>
              <div class="col-md-5">
                <input id="logradouro" name="logradouro" type="text" placeholder="Av, Rua, Travessa..." class="form-control input-md">
              </div>
              <!-- Número da residência-->
              <label class="col-md-1 control-label" for="numero">Numero</label>
              <div class="col-md-2">
                <input id="numero" name="numero" type="text" placeholder="999" class="form-control input-md">
              </div>

            </div> {{-- FIM Logradouro, Número --}}            


{{-- Bairro e Complemento --}}

            <div class="form-group">
              {{-- Bairro --}}
              <label class="col-md-1 control-label" for="bairro">Bairro</label>
              <div class="col-md-3">
                <input id="bairro" name="bairro" type="text" placeholder="Centro" class="form-control input-md">
              </div>

              {{-- Complemento --}}
              <label class="col-md-2 control-label" for="complemento">Complemento</label>
              <div class="col-md-3">
                <input id="complemento" name="complemento" type="text" placeholder="Ap., Fundos,..." class="form-control input-md">
              </div>

            </div>


{{-- Munícipio e CEP --}}

            <div class="form-group">
            
              <!-- Município-->
              <label class="col-md-1 control-label" for="municipio">Município</label>
              <div class="col-md-5">
                <input id="municipio" name="municipio" type="text" placeholder="Município" class="form-control input-md" required="">
              </div>

              <!-- CEP-->
              <label class="col-md-1 control-label" for="cep">CEP</label>
              <div class="col-md-2">
                <input id="cep" name="cep" type="text" placeholder="CEP" class="form-control input-md" required="">
              </div>

            </div> {{-- FIM Munícipio e CEP --}}


{{-- Celular, Telefone 1 e Telefone 2 --}}

            <div class="form-group">

              {{-- Celular --}}
              <label class="col-md-1 control-label" for="telefone1">Celular</label>
              <div class="col-md-2">
                <input id="telefone1" name="telefone1" type="text" placeholder="(21) 9 9999-9999" class="form-control input-md">
              </div>

              {{-- Telefone 1 --}}
              <label class="col-md-1 control-label" for="telefone2">Telefone 1</label>
              <div class="col-md-2">
                <input id="telefone2" name="telefone2" type="text" placeholder="(21) 9999-9999" class="form-control input-md">
              </div>

              {{-- Telefone 2 --}}
              <label class="col-md-1 control-label" for="telefone2">Telefone 2</label>
              <div class="col-md-2">
                <input id="telefone2" name="telefone2" type="text" placeholder="(21) 9999-9999" class="form-control input-md">
              </div>

            </div> {{-- FIM Celular, Telefone 1 e Telefone 2 --}}


          </div> {{-- fim Participante --}}

          <!-- Button (Double) -->
          <div class="form-group">
            <label class="col-md-0 control-label" for="button1id"></label>
            <div class="col-md-8">
              <button id="button1id" name="button1id" class="btn btn-success">Salvar</button>
              <button id="Cancelar" name="Cancelar" class="btn btn-danger">Cancelar</button>
            </div>
          </div>

		
		  


      </form> {{-- FIM cadastro_pessoa --}}
    </div> {{-- Fim x_content --}}
	</div> {{-- FIM x_panel --}}
</div> {{-- FIM class_row --}}

@endsection

@push('scripts')

		{{-- Script para máscara numérica. Ex.: CPF, RG --}}
    <script src="{{ asset("js/jquery.inputmask.bundle.min.js") }}"></script>

    {{-- Máscarasa dos campos CPF e RG --}}
    <script type="text/javascript">
		  $(document).ready(function(){
        $("#CPF").inputmask("999.999.999-99");
        $("#RG").inputmask("99.999.999-9");
        $("#cep").inputmask("99-999.999");
        });
    </script>

@endpush