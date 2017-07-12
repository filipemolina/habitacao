@extends("layouts.blank")

@section('titulo')

  Alterar Informações do Participante

@endsection

@push('css')

  {{-- Switchery --}}

  <link rel="stylesheet" href="{{ asset("vendors/switchery/dist/switchery.css") }}">

  {{-- Animate CSS --}}
  
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">

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

    <h2> Alterar Pessoa </h2>

    <form id="cadastro_pessoa" class="form-horizontal" method="post" action="{{ url("/pessoas/$pessoa->id") }}">

    {{ csrf_field() }}
    {{ method_field('PUT') }}

    @include('includes.pessoas.edit.participante')

    @include('includes.pessoas.edit.coparticipante')

    @include('includes.pessoas.edit.dependentes')
      
    @include('includes.pessoas.edit.renda')

    {{-- Botões Enviar e Limpar --}}
    <div class="form-group">
      <label class="col-md-1 control-label" for="button1id">
        <button id="button1id" type="submit" value="submit" name="button1id" data-toggle="tooltip" title="Salvar formulário" class="btn btn-lg-circulo btn-cor-padrao fa fa-floppy-o"></button>
      </label>

      <label class="col-md-11 control-label" for="button2id">
        <a data-toggle="tooltip" title="Retonar a lista de pessoas" class="btn btn btn-lg-circulo btn-cor-perigo fa fa-arrow-left" href="{{ url( "pessoas" ) }}"></a>
      </label>
    </div>
  
  </form> {{-- FIM cadastro_pessoa --}}
    
@endsection

@push('scripts')

  {{-- Script para máscara numérica. Ex.: CPF, RG --}}
  <script src="{{ asset("js/jquery.inputmask.bundle.min.js") }}"></script>

  {{-- Switchery --}}

  <script src="{{ asset("vendors/switchery/dist/switchery.min.js") }}"></script>

  {{-- Sweet Alert --}}
  <script src="{{ asset("js/sweetalert.min.js") }}"></script>
  
  @include('includes.pessoas.create.scripts')

  <script>
    
    $(function(){

        calculaFaixa($("input#renda_familiar").val());
        calculaPeriodo($("input#inicio-residencia").val());

    });

  </script>

@endpush