@extends("layouts.blank")

@section('titulo')

Lista de Pessoas

@endsection

@push('css')

<!-- Datatables -->
<link href="{{ asset('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}" rel="stylesheet">

@endpush

@section("main_container")

<div class="x_title">
    <h2>Lista de Pessoas</h2>
    <div class="clearfix"></div>
</div>

<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_content">
            <table class="table table-striped" id="dataTable">

              <thead>

                <tr>
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>Sexo</th>
                    <th>PNE</th>
                    <th>Co-participante</th>
                    <th>Dependentes</th>
                    <th>Bairro</th>
                    <th>Ações</th>
                </tr>           

            </thead>

            {{-- preenchido com datatables --}}
        </table>


    </div>
</div>
</div>

<div class="clearfix"></div>

{{-- modal do botão excluir --}}

<div class="modal fade" id="modalexcluir" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Exclusão de cadastro</h4>
      </div>
      <div class="modal-body">
        <h2>Realmente Desejar Excluir o cadastro de <span id="nome_participante"></span>?</h2>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-cor-perigo" id="btn-excluir-modal" data-dismiss="modal">Excluir</button>
        <button type="button" class="btn btn-cor-padrao" data-dismiss="modal" aria-label="Close">Fechar</button>
      </div>
      <input type="hidden" name="id" id="id_participante">
      {{ method_field("DELETE") }}
      {{ csrf_field() }}
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

{{-- fim do modal do botão excluir --}}

{{-- Modal do Botão Visualizar --}}

  @include('pessoas.show')  

{{-- Modal do Botão Visualizar --}}

@endsection

@push('scripts')

<!-- Datatables -->
<script src="{{ asset('js/jQuery.print.js') }}"></script>
<script src="{{ asset('vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"></script>
<script src="{{ asset('vendors/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
<script src="{{ asset('vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
<script src="{{ asset('vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
<script src="{{ asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}"></script>
<script src="{{ asset('vendors/datatables.net-scroller/js/dataTables.scroller.min.js') }}"></script>
<script src="{{ asset('vendors/jszip/dist/jszip.min.js') }}"></script>
<script src="{{ asset('vendors/pdfmake/build/pdfmake.min.js') }}"></script>
<script src="{{ asset('vendors/pdfmake/build/vfs_fonts.js') }}"></script>

@include('includes.pessoas.index.scripts')

@endpush