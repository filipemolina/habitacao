@extends("layouts.blank")

@section('titulo')

	Lista de Usuários

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


    <div class="col-md-12 col-sm-12 col-xs-12">
    	<div class="x_title">
        	<h2>Lista de Usuários</h2>
        	<div class="clearfix"></div>
        </div>

        <div class="x_panel">

            <div class="x_content">
               
				<table class="table table-striped" id="dataTable">

					<thead>
						
						<tr>
						  	<th>ID</th>
						   	<th>Nome</th> 
						   	<th>E-mail</th>
							<th>Administrador?</th>
							<th>Ações</th>
						</tr>						

					</thead>

					<tbody>
							
						<tr>
						    <td>01</td>
						    <td>Leandro Accioly</td> 
						    <td>Leandro.accioly@hotmail.com</td>
						    <td>Sim</td>
						    <td class="actions">
			                  <a class="btn btn-success btn-xs" href="#"><i class="fa fa-eye"></i></a>
			                  <a class="btn btn-warning btn-xs" href="#"><i class="fa fa-pencil"></i></a>
			                  <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target=""><i class="fa fa-trash"></i></a>
			                </td>
						</tr>

						<tr>
						    <td>02</td>
						    <td>Filipe Molina</td> 
						    <td>filipemolina@hotmail.com</td>
						    <td>Não</td>
						    <td class="actions">
			                  <a class="btn btn-success btn-xs" href="#"><i class="fa fa-eye"></i></a>
			                  <a class="btn btn-warning btn-xs" href="#"><i class="fa fa-pencil"></i></a>
			                  <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal"><i class="fa fa-trash"></i></a>
			                </td>
						</tr>

						<tr>
						    <td>03</td>
						    <td>Marcelo Miranda</td> 
						    <td>marcelo.miranda@hotmail.com</td>
						    <td>Sim</td>
						    <td class="actions">
			                  <a class="btn btn-success btn-xs" href="#"><i class="fa fa-eye"></i></a>
			                  <a class="btn btn-warning btn-xs" href="#"><i class="fa fa-pencil"></i></a>
			                  <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal"><i class="fa fa-trash"></i></a>
			                </td>
						</tr>

						<tr>
						    <td>04</td>
						    <td>Luciano Júnior</td> 
						    <td>luciano.junior@hotmail.com</td>
						    <td>Não</td>
						    <td class="actions">
			                  <a class="btn btn-success btn-xs" href="#"><i class="fa fa-eye"></i></a>
			                  <a class="btn btn-warning btn-xs" href="#"><i class="fa fa-pencil"></i></a>
			                  <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal"><i class="fa fa-trash"></i></a>
			                </td>
						</tr>

					</tbody>

				</table>


            </div>
        </div>
    </div>

@endsection

@push('scripts')

	<!-- Datatables -->
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

	@include('includes.users.scripts')

@endpush