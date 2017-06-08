@extends('layouts.pdf')

@section('title')

	Comprovante de Inscrição

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
		
		<h2 style="text-align: center; text-transform: uppercase;">COMPROVANTE DE INSCRIÇÃO</h2>

		<h2 style="text-align: center; text-transform: uppercase;">Nº {{ $participante->codigo_inscricao }}</h2>

	</div>

	<div style="max-width: 100%; font-size: 10px;">

		<table style=" width: 100%;">

			<thead>
				
				<tr>
				
					<td>
						
					</td>

				</tr>

			</thead>

			<tbody>
				
				<tr>
				
					<td>
						
					</td>

				</tr>

			</tbody>

		</table>

	</div>

@endsection