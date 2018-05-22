@extends('layouts.pdf')

@section('title')

	Relatório Geral

@endsection

@section('conteudo')

	<div style="max-width: 100%; font-size: 10px;">

		<page size="A4">

		{{-------------------------- Cabeçalho --------------------------}}

			<div style="max-width: 100%;">

				<div style="float: left;">
					<img style="width: 100px;" src="{{ asset('img/brasao.png') }}" alt="">
				</div>

				<div style="font-weight: bold; font-size: 25px; text-align: center; margin-top: 30px;">
					Prefeitura Municipal de Mesquita
				</div>

				<br><br>

				<div style="text-align: center; font-size: 20px;">
					Secretaria Municipal de Urbanismo e Meio Ambiente
				</div>

				<div style="clear: both;"></div>

			</div>

			<div style="max-width: 100%">
				
				<h2 style="text-align: center; text-transform: uppercase;">RELATÓRIO {{ $nome_relatorio }}</h2>

			</div>

		{{-------------------------- Fim do Cabeçalho --------------------------}}

		{{-- Mostrando os cabeçalhos da tabela --}}

			<table style=" width: 100%;">
	
				<tr style="background: #3D276B; color: white; text-align: center">

					{{-- Iterar pela lista de cabeçalhos e criar um para cada item enviado --}}

					@foreach($cabecalhos as $cabecalho)

						<th style="border: 1px solid black; text-transform: uppercase;">{{ $cabecalho }}</th>

					@endforeach

				</tr>

				<?php $cont = 0; ?>

				@foreach($pessoas as $pessoa)
					
					<tr>
						{{-- Iterar pelos cabecalhos e preencher o valor correspondente ao primeiro item--}}
						
						@foreach($cabecalhos as $indice => $valor)
							
							<td style="border: 1px solid black; text-align: center; text-transform: uppercase;">{{ $pessoa[$indice] }}</td>

						@endforeach

					</tr>

					<?php $cont++; ?>

				@endforeach

			</table>

			<div style="text-align: center; font-size: 20px;">
				Total de cadastros neste relatório: {{ $cont }}
			</div>

		</page>

	</div>

@endsection
