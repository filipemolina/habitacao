@extends("layouts.blank")

@section('titulo')

  Relatório

@endsection

@push("scrips")

<script src="{{asset ("vendors/iCheck/icheck.min.js")}}"></script>

<script>
  
$(function(){

  $("input").iCheck({
    checkboxClass: 'icheckbox_flat-purple'
  });

});

</script>

@endpush

@push("css")

<link rel="stylesheet" href="{{ asset("vendors/iCheck/skins/flat/purple.css") }}">
 
@endpush

@section("main_container")

<div class="col-md-12 col-sm-12 col-xs-12">

  @if(count($errors) > 0)

    <div class="alert alert-roxo alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

      <strong>Atenção!</strong><br>

      <ul>

        @foreach($errors->all() as $erro)

          <li>{{ $erro }}</li>

        @endforeach

      </ul>

    </div>

  @endif

  <div class="x_title">
    <h2> Relatório</h2>
    <div class="clearfix"></div>
  </div>
  
  <div class="x_panel">
    
    <div class="x_title"> Opções </div>
    
    <div class="x_content">

      <form action="{{ url('/pessoas/imprimerelatorios') }}" method="POST" class="form-horizontal" id="form-cadastro-usuario">

        {{ csrf_field() }}

        {{-- Campo Tipo do relatório--}}

        <div class="form-group">

          <label for="senha" class="col-sm-4 control-label">Ordem do Relatório</label>

          <div class="col-sm-4">

             <select name="ordem_relatorio" class="form-control" id="tipodeususario">
              <option value="">Selecione</option>
              <option value="1">Geral</option>
              <option value="0">Por Idade</option>
              <option value="0">Por Sexo</option>
              <option value="0">Por Dependentes</option>
              <option value="0">Por Bairro</option>
            </select>

          </div>
        </div>

        {{-- Campo Campo do Relatório --}}

        <div class="form-group">

            <label for="camporelatorio" class="col-sm-4 control-label">Campo do Relatório</label>

          <div class="checkbox" style="float: left;">
            <label>

                <input value="1" name="campos[nome]" type="checkbox" checked="checked"> Nome

            </label> <br>

            <label>
            
                <input value="1" name="campos[idade]" type="checkbox"> Idade

            </label> <br>

            <label>
            
                <input value="1" name="campos[sexo]" type="checkbox"> Sexo

            </label> <br>

            <label>
            
                <input value="1" name="campos[nascimento]" type="checkbox"> Data de Nascimento

            </label> <br>

            <label>
            
                <input value="1" name="campos[necessidades_especiais]" type="checkbox"> Necessidades Especiais

            </label> <br>

            <label>
            
                <input value="1" name="campos[coparticipantes]" type="checkbox"> Coparticipantes

            </label> <br>

            <label>
            
                <input value="1" name="campos[dependentes]" type="checkbox"> Dependentes

            </label> <br>

            <label>
            
                <input value="1" name="campos[bairro]" type="checkbox"> Bairro

            </label> <br>

            <label>
            
                <input value="1" name="campos[telefone_fixo]" type="checkbox"> Telefone Fixo

            </label> <br>

            <label>
            
                <input value="1" name="campos[telefone_celular]" type="checkbox"> Telefone Celular

            </label> <br>

            <label>
            
                <input value="1" name="campos[endereco]" type="checkbox"> Endereço

            </label> <br>

            <label>
            
                <input value="1" name="campos[cpf]" type="checkbox"> CPF
            </label> <br>

            <label>
            
                <input value="1" name="campos[ctps]" type="checkbox"> CTPS

            </label> <br>

            <label>
            
                <input value="1" name="campos[nis]" type="checkbox"> NIS

            </label> <br>

            <label>
            
                <input value="1" name="campos[rg]" type="checkbox"> RG

            </label> <br>

            <label>
            
                <input value="1" name="campos[cep]" type="checkbox"> CEP

            </label> <br>

            <label>
            
                <input value="1" name="campos[email]" type="checkbox"> Email

            </label> <br>

            <label>
            
                <input value="1" name="campos[bolsa_familia]" type="checkbox"> Bolsa Familia

            </label> <br>

            <label>
            
                <input value="1" name="campos[renda_familiar]" type="checkbox"> Renda Familiar

            </label> <br>

            <label>
            
                <input value="1" name="campos[tempo_residencia]" type="checkbox"> Tempo de Residência

            </label> <br>

           
          </div>

        </div>

        <div class="form-group" style="text-align: center;">
                    <button type="submit" value="submit" class="btn btn-primary">Imprimir</button>
        </div>

        
      </form>



    </div>
  </div>
</div>


@endsection


