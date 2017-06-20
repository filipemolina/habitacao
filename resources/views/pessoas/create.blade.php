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


    @include('includes.pessoas.create.participante')

    @include('includes.pessoas.create.coparticipante')

    @include('includes.pessoas.create.dependentes')

    @include('includes.pessoas.create.renda')

    {{-- Botões Enviar e Limpar --}}
    <ul class="nav navbar-right panel_toolbox">
      
        <li>
          <label class="col-md-1 control-label" for="button1id">
            <button id="button1id" type="submit" value="submit" name="button1id" data-toggle="tooltip" title="Salvar formulário" class="btn btn-lg-circulo btn-cor-padrao"><i class="glyphicon glyphicon-ok" style="margin-left: -2px;"></i></button>
          </label>
        </li>

        <li>
          <label class="col-md-11 control-label" for="button2id">
            <button id="button2id" type="reset" value="reset" name="button2id" data-toggle="tooltip" title="Limpar formulário" class="btn btn btn-lg-circulo btn-cor-perigo fa fa-times"></button>
          </label>
        </li>

    </ul>
  
  </form> {{-- FIM cadastro_pessoa --}}
    
@endsection

@push('scripts')

  {{-- Script para máscara numérica. Ex.: CPF, RG --}}
  <script src="{{ asset("js/jquery.inputmask.bundle.min.js") }}"></script>

  {{-- Switchery --}}

  <script src="{{ asset("vendors/switchery/dist/switchery.min.js") }}"></script>
  
  @include('includes.pessoas.create.scripts')

@endpush