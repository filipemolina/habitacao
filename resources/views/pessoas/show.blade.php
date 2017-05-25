@extends("layouts.blank")

@section('titulo')

	Informações do Participantes

@endsection

@section("main_container")

<div class="col-md-12 col-sm-12 col-xs-12">

	<div class="x_title">
		<h2> Informações do Participantes</h2>
		<div class="clearfix"></div>
	</div>
	
	<div class="x_panel">
		
		<div class="x_title"> Dados </div>
		
		<div class="x_content">

			{{ $pessoa->nome }} <br>
			

			@foreach($pessoa->dependentes as $dependente)		

				{{ $dependente->nome }}<br>



			@endforeach	

		</div>
	</div>
</div>


@endsection