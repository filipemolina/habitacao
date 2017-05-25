@extends('layouts.pdf')

@section('conteudo')

	{{-------------------------- Cabeçalho --------------------------}}

	<div style="max-width: 100%">
		
		<div style="float: left;">
			<img style="width: 100px;" src="img/brasao.png" alt="">
		</div>

		<div style="display: block; float: left; font-weight: bold; font-size: 25px; width: 86%; text-align: center; margin-left: -100px;">
			Prefeitura Municipal de Mesquita
		</div>

		<br><br>

		<div style="display: block; float: left; width: 86%; text-align: center; font-size: 20px; margin-left: -100px;">
			Secretaria Municipal de Trabalho, Desenvolvimento<br> Econômico e Agricultura
		</div>

		<div style="clear: both;"></div>

	</div>

	<div style="max-width: 100%">
		
		<h2 style="text-align: center;">RELATÓRIO</h2>

	</div>

	<div style="max-width: 100%">

		@foreach($pessoas as $pessoa)

			<p>{{ $pessoa['idade'] }}</p>

		@endforeach
		
	</div>

@endsection
