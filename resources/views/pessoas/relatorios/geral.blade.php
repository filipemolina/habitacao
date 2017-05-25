@extends('layouts.pdf')

@section('title')

	Relatório Geral

@endsection

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
			Secretaria Municipal de Urbanismo e Meio Ambiente
		</div>

		<div style="clear: both;"></div>

	</div>

	<div style="max-width: 100%">
		
		<h2 style="text-align: center;">RELATÓRIO GERAL</h2>

	</div>

	<div style="max-width: 100%; font-size: 10px;">

		<table style=" width: 100%;">
			
			<tr style="background: black; color: white; text-align: center">

				{{-- Iterar pela lista de cabeçalhos e criar um para cada item enviado --}}

				@foreach($cabecalhos as $cabecalho)

					<th style="border: 1px solid black">{{ $cabecalho }}</th>

				@endforeach

			</tr>

			{{-- Iterar pela lista de pessoas --}}

			@foreach($pessoas as $pessoa)

				<tr>
					{{-- Iterar pelos cabecalhos e preencher o valor correspondente --}}
					
					@foreach($cabecalhos as $indice => $valor)
						
						<td style="border: 1px solid black; text-align: center">{{ $pessoa[$indice] }}</td>

					@endforeach

				</tr>
			
			@endforeach			

		</table>

	</div>

@endsection
