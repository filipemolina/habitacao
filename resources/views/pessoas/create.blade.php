@extends("layouts.blank")

@section('titulo')

	Cadastro de Pessoas

@endsection

@section('main_container')

<div class="row">
	
  <div class="x_panel">
		
    <div class="x_title"> Cadastro de Pessoa </div>
		
    <div class="x_content">
			
		  <form id="Cadastro_pessoa" class="form-horizontal">

			
{{------------------------------------ Participante ------------------------------------}}
			   <div class="x_panel">
            <div class="x_title"> Participante </div>

            <div class="form-group" id="participante">


{{-- CPF e Email --}}


              {{-- CPF --}}            
              <label class="col-md-1 control-label" for="pa-cpf">CPF</label>  
              <div class="col-md-2">
                <input id="pa-cpf" name="pa-cpf" type="text" placeholder="999.999.999-99" class="form-control input-md cpf" required="">
              </div>

              {{-- Email --}}
              <label class="col-md-1 control-label" for="pa-email">Email</label>  
              <div class="col-md-5">
                <input id="pa-email" name="pa-email" type="text" placeholder="email@servidor.com.br" class="form-control input-md">
              </div>
            
            </div> {{-- FIM CPF e Email --}}

            {{-- Nome --}}

            <div class="form-group">
              <label class="col-md-1 control-label" for="pa-nome">Nome</label>
              <div class="col-md-8">
                <input id="pa-nome" name="pa-nome" type="text" placeholder="Informe o nome" class="form-control input-md" required="">
              </div>
            </div>


{{-- RG, Data de Emissão do RG, Orgão Emissor do RG --}}


            <div class="form-group">

              <!-- RG-->            
              <label class="col-md-1 control-label" for="pa-rg">RG</label>
              <div class="col-md-2">
                <input id="pa-rg" name="pa-rg" type="text" placeholder="99.999.999-9" class="form-control input-md rg" required="">
              </div>

              <!-- Data de Emissão do RG-->
              <label class="col-md-1 control-label" for="pa-emissao">Emissão</label>  
              <div class="col-md-2">
                <input id="pa-emissao" name="pa-emissao" type="text" placeholder="Data de Emissão" class="form-control input-md data" required="">
              </div>

              <!-- Orgão Emissor do RG-->
              <label class="col-md-1 control-label" for="pa-orgao_emissor">Orgão</label>  
              <div class="col-md-2">
                <input id="pa-orgao_emissor" name="pa-orgao_emissor" type="text" placeholder="Orgão Emissor" class="form-control input-md" required="">
              </div>
            
            </div> {{-- FIM RG, Data de Emissão do RG, Orgão Emissor do RG --}}


{{-- Data de Nascimento, Sexo, Deficiente --}}


            <div class="form-group">

            {{-- Data de Nascimento --}}

              <label class="col-md-1 control-label" for="pa-nascimento">Nascimento</label>  
              <div class="col-md-2">
                <input id="pa-nascimento" name="pa-nascimento" type="text" placeholder="01/01/2000" class="form-control input-md data" required="">

              </div>

              {{-- Sexo   --}}
              <label class="col-md-1 control-label" for="pa-sexo">Sexo</label>
              <div class="col-md-2">
                <select id="pa-sexo" name="pa-sexo" type="text" placeholder="sexo" class="form-control input-md" required="">
    		          <option value="">   </option>
      		        <option value="m">Masculino</option>
      		        <option value="f">Femino</option>
  		          </select>
              </div>

              {{-- Deficiente --}}
              <label class="col-md-1 control-label" for="deficiente">Deficiente</label>
              <div class="col-md-2">
                <select id="pa-deficiente" name="pa-deficiente" type="text" class="form-control input-md" required="">
                  <option value="">   </option>
                  <option value="s">Sim</option>
                  <option value="n">Não</option>
                </select>
              </div>
            </div>


{{-- Logradouro, Número --}}


            <div class="form-group">

              <!-- Logradouro ...Av...Rua....etc-->
              <label class="col-md-1 control-label" for="pa-logradouro">Logradouro</label>
              <div class="col-md-5">
                <input id="pa-logradouro" name="pa-logradouro" type="text" placeholder="Av, Rua, Travessa..." class="form-control input-md">
              </div>
              <!-- Número da residência-->
              <label class="col-md-1 control-label" for="pa-numero">Numero</label>
              <div class="col-md-2">
                <input id="pa-numero" name="pa-numero" type="text" placeholder="999" class="form-control input-md">
              </div>

            </div> {{-- FIM Logradouro, Número --}}            


{{-- Bairro e Complemento --}}

            <div class="form-group">
              {{-- Bairro --}}
              <label class="col-md-1 control-label" for="pa-bairro">Bairro</label>
              <div class="col-md-3">
                <input id="pa-bairro" name="pa-bairro" type="text" placeholder="Centro" class="form-control input-md">
              </div>

              {{-- Complemento --}}
              <label class="col-md-2 control-label" for="pa-complemento">Complemento</label>
              <div class="col-md-3">
                <input id="pa-complemento" name="pa-complemento" type="text" placeholder="Ap., Fundos,..." class="form-control input-md">
              </div>

            </div>


{{-- Munícipio e CEP --}}

            <div class="form-group">
            
              <!-- Município-->
              <label class="col-md-1 control-label" for="pa-municipio">Município</label>
              <div class="col-md-5">
                <input id="pa-municipio" name="pa-municipio" type="text" placeholder="Mesquita" class="form-control input-md" required="">
              </div>

              <!-- CEP-->
              <label class="col-md-1 control-label" for="pa-cep">CEP</label>
              <div class="col-md-2">
                <input id="pa-cep" name="cep" type="text" placeholder="99999-999" class="form-control input-md cep" required="">
              </div>

            </div> {{-- FIM Munícipio e CEP --}}


{{-- Celular, Telefone 1 e Telefone 2 --}}

            <div class="form-group">

              {{-- Celular --}}
              <label class="col-md-1 control-label" for="pa-celular">Celular</label>
              <div class="col-md-2">
                <input id="pa-celular" name="pa-celular" type="text" placeholder="(99) 9 9999-9999" class="form-control input-md celular">
              </div>

              {{-- Telefone 1 --}}
              <label class="col-md-1 control-label" for="pa-telefone1">Tel.1</label>
              <div class="col-md-2">
                <input id="pa-telefone1" name="pa-telefone1" type="text" placeholder="(99) 9999-9999" class="form-control input-md telefone">
              </div>

              {{-- Telefone 2 --}}
              <label class="col-md-1 control-label" for="pa-telefone2">Tel.2</label>
              <div class="col-md-2">
                <input id="pa-telefone2" name="pa-telefone2" type="text" placeholder="(99) 9999-9999" class="form-control input-md telefone">
              </div>

            </div> {{-- FIM Celular, Telefone 1 e Telefone 2 --}}


          </div> {{-- fim Participante --}}


{{------------------------------------ CO-Participante ------------------------------------}}
         <div class="x_panel">
            <div class="x_title"> Co-Participante </div>

            <div class="form-group" id="co-participante">


{{-- CPF e Email --}}


              {{-- CPF --}}            
              <label class="col-md-1 control-label" for="co-cpf">CPF</label>  
              <div class="col-md-2">
                <input id="co-cpf" name="co-cpf" type="text" placeholder="999.999.999-99" class="form-control input-md cpf" required="">
              </div>

              {{-- Email --}}
              <label class="col-md-1 control-label" for="co-email">Email</label>  
              <div class="col-md-5">
                <input id="co-email" name="co-email" type="text" placeholder="email@servidor.com.br" class="form-control input-md">
              </div>
            
            </div> {{-- FIM CPF e Email --}}

            {{-- Nome --}}

            <div class="form-group">
              <label class="col-md-1 control-label" for="co-nome">Nome</label>
              <div class="col-md-8">
                <input id="co-nome" name="co-nome" type="text" placeholder="Informe o nome" class="form-control input-md" required="">
              </div>
            </div>


{{-- RG, Data de Emissão do RG, Orgão Emissor do RG --}}


            <div class="form-group">

              <!-- RG-->            
              <label class="col-md-1 control-label" for="co-rg">RG</label>
              <div class="col-md-2">
                <input id="co-rg" name="co-rg" type="text" placeholder="99.999.999-9" class="form-control input-md rg" required="">
              </div>

              <!-- Data de Emissão do RG-->
              <label class="col-md-1 control-label" for="co-emissao">Emissão</label>  
              <div class="col-md-2">
                <input id="co-emissao" name="co-emissao" type="text" placeholder="Data de Emissão" class="form-control input-md data" required="">
              </div>

              <!-- Orgão Emissor do RG-->
              <label class="col-md-1 control-label" for="co-orgao_emissor">Orgão</label>  
              <div class="col-md-2">
                <input id="co-orgao_emissor" name="co-orgao_emissor" type="text" placeholder="Orgão Emissor" class="form-control input-md" required="">
              </div>
            
            </div> {{-- FIM RG, Data de Emissão do RG, Orgão Emissor do RG --}}


{{-- Data de Nascimento, Sexo, Deficiente --}}


            <div class="form-group">

            {{-- Data de Nascimento --}}

              <label class="col-md-1 control-label" for="co-nascimento">Nascimento</label>  
              <div class="col-md-2">
                <input id="co-nascimento" name="co-nascimento" type="text" placeholder="01/01/2000" class="form-control input-md data" required="">

              </div>

              {{-- Sexo   --}}
              <label class="col-md-1 control-label" for="co-sexo">Sexo</label>
              <div class="col-md-2">
                <select id="co-sexo" name="co-sexo" type="text" class="form-control input-md" required="">
                  <option value="">   </option>
                  <option value="m">Masculino</option>
                  <option value="f">Femino</option>
                </select>
              </div>

              {{-- Deficiente --}}
              <label class="col-md-1 control-label" for="co-deficiente">Deficiente</label>
              <div class="col-md-2">
                <select id="co-deficiente" name="co-deficiente" type="text" placeholder="deficiente" class="form-control input-md" required="">
                  <option value="">   </option>
                  <option value="s">Sim</option>
                  <option value="n">Não</option>
                </select>
              </div>
            </div>


{{-- Logradouro, Número --}}


            <div class="form-group">

              <!-- Logradouro ...Av...Rua....etc-->
              <label class="col-md-1 control-label" for="co-logradouro">Logradouro</label>
              <div class="col-md-5">
                <input id="co-logradouro" name="co-logradouro" type="text" placeholder="Av, Rua, Travessa..." class="form-control input-md">
              </div>
              <!-- Número da residência-->
              <label class="col-md-1 control-label" for="co-numero">Numero</label>
              <div class="col-md-2">
                <input id="co-numero" name="co-numero" type="text" placeholder="999" class="form-control input-md">
              </div>

            </div> {{-- FIM Logradouro, Número --}}            


{{-- Bairro e Complemento --}}

            <div class="form-group">
              {{-- Bairro --}}
              <label class="col-md-1 control-label" for="co-bairro">Bairro</label>
              <div class="col-md-3">
                <input id="co-bairro" name="co-bairro" type="text" placeholder="Centro" class="form-control input-md">
              </div>

              {{-- Complemento --}}
              <label class="col-md-2 control-label" for="co-complemento">Complemento</label>
              <div class="col-md-3">
                <input id="co-complemento" name="co-complemento" type="text" placeholder="Ap., Fundos,..." class="form-control input-md">
              </div>

            </div>


{{-- Munícipio e CEP --}}

            <div class="form-group">
            
              <!-- Município-->
              <label class="col-md-1 control-label" for="co-municipio">Município</label>
              <div class="col-md-5">
                <input id="co-municipio" name="co-municipio" type="text" placeholder="Mesquita" class="form-control input-md" required="">
              </div>

              <!-- CEP-->
              <label class="col-md-1 control-label" for="co-cep">CEP</label>
              <div class="col-md-2">
                <input id="co-cep" name="co-cep" type="text" placeholder="99999-999" class="form-control input-md cep" required="">
              </div>

            </div> {{-- FIM Munícipio e CEP --}}


{{-- Celular, Telefone 1 e Telefone 2 --}}

            <div class="form-group">

              {{-- Celular --}}
              <label class="col-md-1 control-label" for="co-celular">Celular</label>
              <div class="col-md-2">
                <input id="co-celular" name="co-celular" type="text" placeholder="(99) 9 9999-9999" class="form-control input-md celular">
              </div>

              {{-- Telefone 1 --}}
              <label class="col-md-1 control-label" for="co-telefone1">Tel. 1</label>
              <div class="col-md-2">
                <input id="co-telefone1" name="co-telefone1" type="text" placeholder="(99) 9999-9999" class="form-control input-md telefone">
              </div>

              {{-- Telefone 2 --}}
              <label class="col-md-1 control-label" for="co-telefone2">Tel. 2</label>
              <div class="col-md-2">
                <input id="co-telefone2" name="co-telefone2" type="text" placeholder="(99) 9999-9999" class="form-control input-md telefone">
              </div>

            </div> {{-- FIM Celular, Telefone 1 e Telefone 2 --}}


          </div> {{-- fim Co-Participante --}}

{{------------------------------------ Dependentes ------------------------------------}}
         <div class="x_panel">
            <div class="x_title"> Dependentes </div>

            <div class="form-group" id="dependentes">

            {{-- Nome --}}

            <div class="form-group">
              <label class="col-md-1 control-label" for="de-nome">Nome</label>
              <div class="col-md-8">
                <input id="de-nome" name="de-nome" type="text" placeholder="Informe o ome" class="form-control input-md" required="">
              </div>
            </div>


{{-- Data de Nascimento, Sexo, Deficiente --}}


            <div class="form-group">

            {{-- Data de Nascimento --}}

              <label class="col-md-1 control-label" for="de-nascimento">Nascimento</label>  
              <div class="col-md-2">
                <input id="de-nascimento" name="de-nascimento" type="text" placeholder="01/01/2000" class="form-control input-md data" required="">

              </div>

              {{-- Sexo   --}}
              <label class="col-md-1 control-label" for="de-sexo">Sexo</label>
              <div class="col-md-2">
                <select name="de-sexo" type="text" placeholder="Sexo" class="form-control input-md" required="">
                  <option value="">   </option>
                  <option value="m">Masculino</option>
                  <option value="f">Femino</option>
                </select>
              </div>

              {{-- Deficiente --}}
              <label class="col-md-1 control-label" for="de-deficiente">Deficiente</label>
              <div class="col-md-2">
                <select name="de-deficiente" type="text" placeholder="de-deficiente" class="form-control input-md" required="">
                  <option value="">   </option>
                  <option value="s">Sim</option>
                  <option value="n">Não</option>
                </select>
              </div>
            </div>




            </div>
          </div> {{-- fim Dependente --}}



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

@push('stylesheets')

<link href="{{ asset("css/pessoas.css") }}" rel="stylesheets">

@endpush

@push('scripts')

		{{-- Script para máscara numérica. Ex.: CPF, RG --}}
    <script src="{{ asset("js/jquery.inputmask.bundle.min.js") }}"></script>


    <script type="text/javascript">

    {{-- Máscarasa dos campos CPF e RG --}}
		  $(document).ready(function(){
        $(".cpf").inputmask("999.999.999-99");
        $(".rg").inputmask("99.999.999-9");
        $(".cep").inputmask("99-999.999");
        $(".data").inputmask("99/99/9999");
        $(".celular").inputmask("(99)99999-9999");
        $(".telefone").inputmask("(99)9999-9999");
        });

  </script>

@endpush